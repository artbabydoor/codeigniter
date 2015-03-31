<?php //การใช้งาน model นั้นจะมีรูปแบบการใช้งาน ที่เหมือนกับ controler เลย 
	  //แต่การ extends จะแตกต่างกัน Model จะ extends ด้วย CI_Model
	  //model แตกต่างจาก controler ที่ user จะไม่สามารถ เข้าใช้งานผ่าน URL ได้เหมือน controler
class member_m extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}
	
	function getMember($id){
		$type = ' ';
		switch ($id){
			case '1':
				$type ="art";
				break;
			case '2':
				$type = "seoul";
				break;
		}
		return $type;
	}
}