<?php 
	//การใช้งาน  site_url เราจะใช้สำหรับสร้างลิ้ง โดยอาศัยค่าที่กำหนดไว้ จาก base_url
	echo "Site_url : ".site_url('url/add');
	echo "<hr/>";
	//การใช้งาน base_url
	echo "Base_url : ".base_url('url/index');
	?>
<?php /*********************************************/?>
<br/>
<hr/>
<br/>
<?php 
	//การใช้งาน current_url จะเหมือนกับ site_url กับ Base_url
	echo "current_url : ".current_url();
?>
<?php /*********************************************/?>
<br/>
<hr/>
<br/>
<?php 
	//การใช้งาน anchor() หรือ <a>...</a> จะใช้งานการสร้างลิ้งที่เราจะเชื่อมโบง
	//การใช้งานแบบ HTML 
	//anchor('ที่อยู่','title ที่จะแสดงบนหน้าจอ');
			//ที่อยุ่ หากปล่อยว่าง มันจะใช้ค่า stie_url เป็นค่า  default
	echo "anchor url null : ".anchor('','URL_Null','id="link"');
	echo "<hr/>";
	echo "anchor url : ".anchor('url/index','URL_Title','id="link"');
	echo "<hr/>";
	echo "anchor link web url: ".anchor('http://www.google.com','google search');
?>
<?php /*********************************************/?>
<br/>
<hr/>
<br/>
<?php 
	//การใช้งาน anchor_popup() ใช้ในการสร้างลิ้งโดยการเปิดหน้าต่างใหม่ ที่เป็น popup
	//anchor_popup('ที่อยู่','Title ที่จะแสดง',TRUE,false);
	echo "anchor_popup : ".anchor_popup('url_c','Click URL',TRUE);
?>		
<?php /*********************************************/?>
<br/>
<hr/>
<br/>
<?php 	//การใช้งาน prep_url คือการแทรก http:// เข้าไป
		echo prep_url('www.google.com');
?>
<?php /*********************************************/?>
<br/>
<hr/>
<br/>
<?php 
		//การใช้งาน redirect()
		//รูปแบบการใช้งาน 
		//redirect(uri,method,http_code);
		
		//header("Location:url=uri");
		//header("Refresh:0;url=uri");
		//ต้องปิดไว้
		//echo redirect('http://www.google.com','refresh');
		//echo redirect('url_c','refresh');
?>
<?php /*********************************************/?>
<br/>
<hr/>
<br/>
<?php 
		//การใช้งาน mainot(); ใช้สำหรับสร้างลิ้งที่ไว้ใช้ในการเชื่อมโยงกับ e-mail
		echo mailto('woraphon.sx@gmail.com','contact');

?>


















