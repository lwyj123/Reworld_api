<?php

require_once '\..\Library\medoo.php'; 


class Model_User {
	public $database = NULL;

	function __construct(){
		$this->database = new medoo([
			'database_type' => 'mysql',
			'database_name' => 'Reworld',
			'server' => 'localhost',
			'username' => 'Reworld_localuser',
			'password' => 'lwyj123',
			'charset' => 'utf8'
			]);
	}

	public function insert($data){
		
		$rs = $this->database->insert('reworld_user',[
			'reworld_nickname'=>$data['nickname'],
			'reworld_email'=>$data['email'],
			'reworld_password'=>$data['password'],
			'lastlogin_date'=>$data['regtime'],
			]);
		return $rs;
	}

	public function select($data,$col){
		$queryData = $this->database->select('reworld_user','reworld_id',['reworld_'.$col=>$data[$col]]);
		return $queryData;
	}

	/*对上一个方法的分解。。*/
	public function selectEmail($data){
		$queryData = $this->database->select('reworld_user',["reworld_id"],["reworld_email"=>$data['email']]);
		//var_dump($this->database->error());
		//echo $data['email'];
		return $queryData;
	}
	public function selectNickname($data){
		$queryData = $this->database->select('reworld_user',["reworld_id"],["reworld_nickname"=>$data['nickname']]);
		//echo $data['nickname'];
		return $queryData;
	}

}