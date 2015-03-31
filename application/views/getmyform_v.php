<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h4>กรอกรายละเอียด</h4>
		<?php 
			echo form_open('getmyform/add');
			echo form_label('ชื่อ');
			echo form_input('name');
			echo form_label('นามสกุล');
			echo form_input('lastname');
			echo form_label('อายุ');
			echo form_input('age');
			echo form_submit('submit','ส่ง');
			echo form_reset('reset','ลบ');
			echo form_close();
		?>
		<hr>
		<h4>ข้อมูลที่ถูกส่งมา</h4>
		<?php 
			echo "name : ".$name;
			echo "lastname : ".$lastname;
			echo "age : ".$age;
		?>
	</body>
</html>