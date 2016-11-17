<?php
	class Domain_User{
		
		/*
		 *用于检验用户输入是否合法
		 */
		public function checkInput($data){

		}
		/*
		 *用于用户注册
		 */
		public function register($data){

			$regModel = new Model_User();
			$regEmail = $regModel->select($data,'email');
			$regNickName = $regModel->select($data,'nickname');

			$this->code = '0';

			if(!empty($regEmail)){
				$this->msg = "该邮箱已被注册！";
			}else if(!empty($regNickName)){
				$this->msg = "该昵称已被注册！";
			}else{
				$userID = $regModel->insert($data);
				$this->info = array('userID' => $userID, 'nickname' => $data['nickname'], 'email' => $data['email']);
				$this->code ='1';
				$this->msg = '注册成功，并自动登录！';
			}
			return $this;
		}
	}