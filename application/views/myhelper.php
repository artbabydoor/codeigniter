<?php //ก่อนที่เราจะใช้ฟังก์ชันพวกนี้ได้เราต้องทำการ load helper เข้ามาใช้งานก่อนทุกครั้ง?>
<?php echo br(3);
	//ตัวอย่างแบบ HTML -> <br/><br/><br/>
	?>
<?php echo heading('ข้อความที่จะแสดง',3);
	//ตัวอย่างแบบ HTML -><h3>ข้อความที่จะแสดง</h3>
	?>
<?php echo "<br/>********************************************<br/>";?>
<?php /****************************************************************************************************/?>
<? //การใช้งาน tag img แบบ ci?>
<!-- ตัวอย่างการใช้งานแบบ HTML  -->
<img src="<?php echo base_url()?>img/1.jpg"class = "showing" width="250" height="250" title="pic"/>
<?php 
	//ตัวอย่างการใช้งานแบบ CI
	$img = array(
			'src'=>'img/1.jpg',
			'title'=>'logo',
			'width'=>'250px',
			'height'=>'250px',
			'class'=>''
	); 
	echo img($img);
	?>
<?php echo "<br/>********************************************<br/>";?>
<?php /****************************************************************************************************/?>
<?php 
	//link_tag(); ใช้ในการแทรก เอกสาร จากภายนอก เข้ามายังเว็บ 
	//ตัวอย่าง HTML => <link href="/bootstrap/css/bootstrap.css" media="screen" rel="stylesheet" />
	//วิธีการใช้งาน แบบ CI
	echo 'การใช้ link_tag()';
	echo link_tag('css/style.css');
echo '<br/>********************************************<br/>';

	//การใช้งานฟังก์ชัน nbs(); หรือ &nbsp; คือการเว้นวรรค เวลาพิมพ์ text
	
	echo 'oooo'.nbs(15).'xxxxx';
echo '<br/>********************************************<br/>';
	
	//การใช้งาน tag  <ol></ol>  ol ย่อมาจาก order list
?>
<!-- ตัวอย่างแบบ HTML  -->
	<ol>
  		<li> Item one </li>
  		<li> Item two </li>
	</ol>
<?php //การใช้งานแบบ CI
	$list =array(
			'A','B','C','D'
	);
	$attr = array(
			'id'=>'a','class'=>'b','name'=>'c','type'=>'d'
	);
	echo ol($list,$attr);
	echo '<br/>*********';
	
	//การใช้งานฟังก์ชัน <ul></ul> ย่อมาจาก unorderd list ใช้สร้างรายการที่ไม่ได้เรียนลำดับเหมือน order
	//จะใช้ตัวแปรเดียวกัน
	echo ul($list,$attr);
echo '<br/>********************************************<br/>';
//การใช้งาน doctypes โดยจะมีให้เราเลือกหลายประเภท ดูได้ที่คุ่มือ
echo doctype('xhtml11');

?>    <!-- //การใช้งาน meta tags -->
<html>
	<head>
		<?php 
		$arr =array(
			'name'=>'keyword',
			'content'=>'woraphon.com',
			'type'=>'equiv'	
		);
		echo meta('Content-type', 'text/html; charset=utf-8', 'equiv');
		echo meta($arr);
		echo meta('description', 'ผม ชื่อ woraphon');
	?>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	</head>
</html>
	
	
	
	
	
	
	
	
