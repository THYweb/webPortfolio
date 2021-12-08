	function checkForm(){
		
		if(document.cartform.customername.value==""){
			alert("請填寫姓名:");
			document.cartform.customername.fous();
			return false;
		}
		
		if(document.cartform.customeremail.value==""){
			alert("請填寫電子郵件:");
			document.cartform.customeremail.fous();
			return false;
		}
		
		if(!checkmail(document.cartform.customeremail)){
			document.cartform.customeremail.focus();
			return false;
		}
		
		if(document.cartform.customerphone.value==""){
			alert("請填寫電話:");
			document.cartform.customerphone.fous();
			return false;
		}
		
		if(document.cartform.customeraddress.value==""){
			alert("請填寫地址!");
			document.cartform.customeraddress.focus();
			return false;
		}
		
		return confirm('確定送出嗎?');
	}
	
	function checkmail(myEmail){
		var filter=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if(filter.test(myEmail.value)){
			return true;
		}
		alert("電子郵件格式不正確");
		return false;
	}