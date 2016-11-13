<?php
	/**
	* 
	*/
	class Api_User extends PhalApi_Api {
		public function getRules() {
			return array(

				'Reg' => array(
					'nickname' => array(
						'name' => 'nickname',
						'type' => 'string',
						'min'     => '1',
						'require' => true,
						'desc'    => '用户昵称'
						),
					'email' => array(
						'name'    => 'email',
						'type'    => 'string',
						'require' => true,
						'min'     => '1',
						'desc'    => '用户邮箱'
						),
					'password' => array(
						'name' => 'password',
						'type'    => 'string',
						'require' => true,
						'min'     => '1',
						'desc'    => '用户密码'
						),
					),
				'Login' => array(
					'email' => array(
						'name'    => 'email',
						'type'    => 'string',
						'require' => true,
						'min'     => '1',
						'desc'    => '用户邮箱'
						),
					'password' => array(
						'name' => 'password',
						'type'    => 'string',
						'require' => true,
						'min'     => '1',
						'desc'    => '用户密码'
						),

					),
				'CheckError' => array(

					),
				);
		}
		

	/**
	 * 注册接口
	 * @desc 用于验证并注册用户
	 * @return int code 操作码，1表示注册成功，0表示注册失败
	 * @return object info 用户信息对象
	 * @return int info.userID 用户ID
	 * @return string info.nickname 用户昵称
	 * @return string info.email 用户邮箱
	 * @return string msg 提示信息
	 *
	 */
	public function Reg() {
		$returnMsg = array(
			'code' => '',
			'msg' => '',
			'info' => array()
			);

		$data = array(
			'nickname' => $this->nickname,
			'email'    => $this->email,
			'password' => $this->password,
			'regtime'  => time(),
			);
		$register = new Domain_User();
		$rs = $register->register($data);
		return $rs;
	}

}

