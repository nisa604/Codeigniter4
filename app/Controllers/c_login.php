<?php
/**
 * @Author: Your name
 * @Date:   2023-02-14 14:37:13
 * @Last Modified by:   Your name
 * @Last Modified time: 2023-02-15 14:17:09
 */
 namespace App\Controllers;

use App\Models\m_user;

class c_login extends BaseController
{
	public function index()
	{
		echo view('v_login.php');
	}
    public function auth(){
	    $usersModel = new m_user();
		$username = $this->request->getPost('username');
		$pass = $_POST['password'];
		$password = md5($pass);
	    // $password = $this->request->getPost('password');
	    $user = $usersModel->where('username', $username)->first();

	    if(empty($user)){
	    	session()->setFlashdata('message', 'Username atau Password Salah');
	    	return redirect()->to('/login');
	    }
	    if($user['password']!=$password){
	    	session()->setFlashdata('message', 'Username atau Password Salah');
	    	return redirect()->to('/login');
	    }
	    session()->set('username',$username);
	    return redirect()->to('/c_home1');
	}
	public function logout(){
		session()->remove('username');
		return redirect()->to('/login');
	}
}