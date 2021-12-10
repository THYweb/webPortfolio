var express=require('express');                                 //引入express的模組
var bodyParser=require('body-parser');                          //用於解析json,row,text,URL-encoded格式的表單(form)
var urlencodedParser=bodyParser.urlencoded({extended:false});   //建立URL-encoded 表單的parser,parser後的資料儲存在req.body的物件
var app=express();                                              //建立express物件

var mysql=require('mysql');                                     //引入mysql模組

//連線資料庫
var conn=mysql.createConnection({
	host:'localhost',
	user:'root',
	password:'',
	database:'mydb1'
});

//顯示資料庫連線是否成功
conn.connect(function(err){
	if(err){
		console.log('Database connection is error');
	}else{
		console.log('Database connection is successful');
	}
});

app.set('view engine','ejs');

//查詢
app.get('/',function(req,res){
	var tid=req.query.sid;
	var filter="";
	if(tid){
		filter="select * from student where sid="+tid;
	}else{
		filter="select * from student";
	}
	conn.query(filter,function(error,rows){
		if(error) throw error;
		console.log(rows);
		res.render('index',{title:'List students',data:rows});
	});
});

//新增(客戶端)
app.get('/add',function(req,res){
	res.render('userAdd',{title:'Append a student information',msg:""});
});

//新增(伺服器端)
app.post('/userAdd',urlencodedParser,function(req,res){
	
	var sql={                 //這是javascript物件型別，方便執行sql的參數
		sid:req.body.s_id,
		name:req.body.s_name,
		age:req.body.s_age
	};
	
	conn.query('select * from student where sid=?',sql.sid,(error1,rows,fields)=>{
		
		if(error1) throw error1;
		console.log(rows);
		
		if(rows.length>0){  //判斷值是否重複
			console.log("The student ID is exist on database");
			res.redirect('/');
		}else{
			//執行新增資料
			conn.query('insert into student set?',sql,function(error2,datas,fields){
				if(error2) throw error2;
				res.redirect('/');
			});
		}
		
	});
});

//刪除
app.get('/del',function(req,res){
	
	var s_id=req.query.sid;
	conn.query('delete from student where sid='+s_id,function(error3,result){
		if(error3) throw error3;
		console.log(result);
		res.redirect('/');
	});
	
});


//修改(客戶端)
app.get('/edit',function(req,res){
	var s_id=req.query.sid;
	console.log(s_id);
	conn.query('select * from student where sid=?',s_id,function(error4,rows,fields){
		if(error4) throw error4;
		console.log(rows);
		res.render('userEdit',{title:'Edit a student information',data:rows});
	})
});

//修改(伺服器端)
app.post('/userEdit',urlencodedParser,function(req,res){
	var ss_id=req.body.s_id;             //這是抓userEdit的input的值，不需要修改id的值
	var sql={                            //這是javascript物件型別，方便執行sql的參數
		name:req.body.s_name,            //這是抓userEdit的input的值
		age:req.body.s_age               //這是抓userEdit的input的值
	};
	console.log(ss_id,sql);
	conn.query('update student set ? where sid='+ss_id,sql,function(error5,results){
		if(error5) throw error5;
		console.log(results);
		res.redirect('/');
	});
	
});
app.listen('8080');
console.log('Web server is starting on port 8080');