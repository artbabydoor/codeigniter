<!-- การใช้ form_open ต้องมี form_close ปิดการใช้งานตลอด -->
<?php echo form_open('form/add');?>


<?php echo form_close();?>
<hr/>
<?php /*********************************************/?>
<br/>
<!-- //จะใช้สำหรับ form ที่มีการรับส่งข้อมูล ที่มีขนาดใหญ่ ที่มีการแนบไฟล์ ไปด้วย  -->
<?php echo form_open_multipart('form/add');?>


<?php echo form_close();?>
<br/>
<?php /*********************************************/?>
		<!-- การใช้งาน form_hidden  -->
		
<!-- ตัวอย่างการใช้งานแบบ HTML  -->
<input type="hidden" name="username" value="johndoe" />
<br/>
<!-- การใช้งานแบบ CI -->
<?php 	//form_hidden(ค่า name,ค่า value)
		echo form_hidden('id','2')?>
<?php /*********************************************/?>

		<!-- การใช้งาน form_input()  -->
<!-- ตัวอย่างการใช้งานแบบ HTML -->
<input type="text" name="username" id="username" value="johndoe" maxlength="100" size="50" style="width:50%" />	
<br/>
<!-- การใช้งานแบบ CI -->
<?php echo form_input('username', 'johndoe'); ?>
<!-- ในกรณีที่ต้องการจะใส่ พวก javascript หรือ คุณสมบัติอื่นๆ จะทำได้แบบนี้	 -->
<br/>
<?php 
		$javas = "onClick = \"hello()\"" ;
		echo form_input('name', 'johndoe',$javas); 
?>
<?php /*********************************************/?>
<br/>
<!-- การใช้งาน form_password() การใช้งานจะเหมือนกับ form_input แต่ type จะแตกต่างกันโดยที่ form_password จะมีtype เป็น password -->
	<?php 	//echo form_password('ชื่อ','ค่า value','กำหนด attribute');
			echo form_password('pass','','');	
	?>
<?php /*********************************************/?>
<br/>
<!-- การใช้งาน form_upload() -->
<?php echo form_upload();?>

<?php /*********************************************/?>
<br/>
<br/>
<!-- การใช้งาน form_textarea() -->
<?php echo form_textarea('name')?>
<?php /*********************************************/?>
<br/>
<br/>
<!-- การใช้งาน form_label() -->
<?php echo form_label('username');?>
<?php echo form_input('username', 'johndoe'); ?>
<?php echo form_label('pass');?>
<?php echo form_password('pass','','');?>
<?php /*********************************************/?>
<br/>
<br/>
<!-- การใช้งาน form_dropdown() โดยมีการจัดประเภทไว้ด้วย สำคัญอยู่ที่การกำหนด option-->
<?php 
		$option =array(
				
				'book'=>array(
					'0'=>'',	
					'S'=>'small',
					'M'=>'Medium',
					'L'=>'Large',
			),
				'book2'=>array(
					'S'=>'small',
					'M'=>'Medium',
					'L'=>'Large',
			)			
		);
echo form_dropdown('name',$option,'0');
?>
<?php /*********************************************/?>
<br/>
<br/>
<!-- การใช้งาน form_multiselect() โดยมีการจัดประเภทไว้ด้วย สำคัญอยู่ที่การกำหนด option-->
<?php 
		$option =array(
				
				'book'=>array(
					'0'=>'',	
					'S'=>'small989898989',
					'M'=>'Medium',
					'L'=>'Large',
				),
				'book2'=>array(
					'S'=>'small',
					'M'=>'Medium',
					'L'=>'Large',
				)			
			);
		
echo form_multiselect('name',$option);
?>

<?php /*********************************************/?>
<br/>
<br/>
<hr/>
<!-- การใช้งาน form_fieldset() และ form_fieldset()  -->
<?php 
		$arr=array(
			'class'=>'myclass',
			'id'=>'myId',
			'name'=>'myField'	
		);
		echo form_fieldset('Form Login',$arr);
		echo "Hello My Form";
		echo form_fieldset_close();

?>
<?php /*********************************************/?>
<br/>
<br/>
<hr/>
<!-- การใช้งาน form_checkbox() -->
<?php 
		echo form_checkbox('book_name','PHP',false).'PHP';
		echo "<br/>";
		echo form_checkbox('book_name','JAVA',false).'JAVA';
		echo "<br/>";
		echo form_checkbox('book_name','JSP',false).'JSP';
		echo "<br/>";
		echo form_checkbox('book_name','YII',TRUE).'YII';
		//ตัวอย่างแบบ HTML
		//<input type="checkbox" name="newsletter" value="accept" checked="checked" />
	?>
<?php /*********************************************/?>
<br/>
<br/>
<hr/>
<!-- การใช้งาน form_radio() การใช้งานเหมือนกับ form_checkbox -->
<?php  
		echo form_radio('book_name','PHP',false).'PHP';
		echo "<br/>";
		echo form_radio('book_name','JAVA',false).'JAVA';
		echo "<br/>";
		echo form_radio('book_name','JSP',false).'JSP';
		echo "<br/>";
		echo form_radio('book_name','YII',TRUE).'YII';
		
		//echo form_radio('ชื่อ redio','ค่า',TRUE,false).'YII';
?>
<?php /*********************************************/?>
<br/>
<br/>
<hr/>
<!-- การใช้งาน form_submit() กับ form_reset() -->
<?php 
	//ตัวอย่างแบบ HTML 
	//<input type="submit" name="mysubmit" value="Submit Post!" />
	//การใช้งานแบบ CI
	//echo form_submit(name,value,extra);
	echo form_submit('SAVE','save new');
	echo form_reset('reset','clear');
	echo "<hr/>";
	//ลักษณะการใช้งาน
	echo form_open();
	echo form_input('name');
	echo form_submit('SAVE','save new');
	echo form_reset('reset','clear');
	echo form_close();	
?>


















