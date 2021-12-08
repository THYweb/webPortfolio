<?php

class wfCart {
	
	var $total=0;
	var $itemcount=0;
	var $items=array();      //宣告儲存多個商品
	var $itemprices=array(); //宣告儲存多個商品
	var $itemqtys=array();   //宣告儲存多個商品
	var $iteminfo=array();   //宣告儲存多個商品

	function cart(){}        //購物車開始建置的函式

	function get_contents(){ //取得Session購物車內容
		$items=array();
		foreach($this->items as $tmp_item){              //$this->$items=>$items=array()
		    $item=FALSE;                                 //一開始設定為FALSE，將值歸零，再往下取得購物車的值
			$item['id']=$tmp_item;                       //將索引值$tmp_item代入暫存$item['id']
            $item['qty']=$this->itemqtys[$tmp_item];     //將itemqtys[]代入暫存$item['qty']
			$item['price']=$this->itemprices[$tmp_item];
			$item['info']=$this->iteminfo[$tmp_item];
			$item['subtotal']=$item['qty'] * $item['price'];
            $items[] = $item;                            //將取得值回存到$items陣列中，再送回程式去顯示
		}
		return $items;
	} 


	function add_item($itemid,$qty=1,$price=FALSE,$info=FALSE){    //這兩個參數設為FALSE代表沒有初值為空
	
		if($this->itemqtys[$itemid]>0){                  		   //先判斷原來購物車中有沒有這個產品，如果有的話，就更新這個產品的數量，如果沒有的話，就新增產品到購物車之中
			$this->itemqtys[$itemid]=$qty+$this->itemqtys[$itemid];
			$this->_update_total();
		} else {
			$this->items[]=$itemid;
			$this->itemqtys[$itemid]=$qty;
			$this->itemprices[$itemid]=$price;
			$this->iteminfo[$itemid]=$info;
		}
		$this->_update_total();    //統一有_update_total()來更新購物車的內容
	} 

	
	function edit_item($itemid,$qty){  //而這一段更新購物車的內容最主要就是針對於數量，不同的數量會有不同的購物車內容及總價，甚至是運費的計算

		if($qty<1){
			$this->del_item($itemid);
		}else{
			$this->itemqtys[$itemid]=$qty;
		}
		$this->_update_total();  //統一有_update_total()來更新購物車的內容
		
	} 

	
	function del_item($itemid){   //這裡宣告一個陣列，並設定他它的數量值是0，並且一一代入目前的購物車中將其數量歸零，所以在執行更新購物車動作時，因為數量是0，所以就一一個被移除
		
		$ti=array();
		$this->itemqtys[$itemid]=0;
		foreach($this->items as $item){
			
			if($item!=$itemid){
				$ti[]=$item;
			}
		}
		$this->items=$ti;
		$this->_update_total();  //統一有_update_total()來更新購物車的內容
		
	}

	
    function empty_cart(){   
	
      $this->total=0;
	  $this->itemcount=0;
	  $this->items=array();
      $this->itemprices=array();
	  $this->itemqtys=array();
      $this->iteminfo=array();
	  
	}


	function _update_total(){ 
		
	    $this->itemcount=0;
		$this->total=0;
        if(sizeof($this->items>0)){          //sizeof()可以計算指定的陣列中的元素數目
			foreach($this->items as $item){  //foreach()函式中要一一加總總價(total)，總計費費用是由每一個產品的單價(itemprice)*數量(itemqtys)，並計次(itemcount)即時可知道有多少產品。
                $this->total=$this->total+($this->itemprices[$item]*$this->itemqtys[$item]);
				$this->itemcount++;
			}
		}
		
	} 
}


?>