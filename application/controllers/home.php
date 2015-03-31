<?php 

class home extends CI_Controller{
    function __construct(){
        parent::__construct();
        //$this->load->model('member_m');
        	//ผมload โดยใช้ config/autoload แล้ว ไม่จำเป็นต้องเรียก load ซ้ำซ้อน
        
        //$this->load->helper('url','html','form','file');
        	//กรณีของการที่เราไม่ได้ set ค่าใน autoload เราต้องมา load ในนี้
    }// function index() จะเป็นฟังก์ชันเริ่มต้น
    function index(){
       $this->load->view('header');
       $this->load->view('body');
       $this->load->view('footer');      
    }
    //การส่งค่า พารามิเตอร์ แบบ หลายค่า
    function main($id = null,$id2 = null){
        echo "id = ".$id."id2 = ".$id2;
    }   
    function showview(){
        //การส่งค่า ไปยัง view ต้องส่งแบบ array 
        $data = array();
        
        $data['name'] = "woraphon";
        $this->load->view('showview',$data);       
    }
    function showview2($id=null){
        //การส่งไปยัง view แบบมีค่า พารามิเตอร์ 
        $data = array();
        $data['id'] = $id;
        $this->load->view('showview2',$data);   
    }
    function member(){
        //การส่งค่า ข้อมูลหลายๆตัวที่อยู่ใน array ไปแสดง โดยการใช้ foreach ในการวนลูป
        $data['member']=array(
            'art',
            'seoul',
            'so',
            'kob',
            'tar'
        );
        $this->load->view('member',$data);
    }
    //การส่งค่าจาก model ไปแสดงบน viwe โดยผ่าน controler
    function getMember($id){
    	$data['get'] = $this->member_m->getMember($id);
    	
    	$this->load->view('member_v',$data);
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}