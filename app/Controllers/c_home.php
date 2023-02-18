<?php
/**
 * @Author: Your name
 * @Date:   2023-02-15 10:48:23
 * @Last Modified by:   Your name
 * @Last Modified time: 2023-02-15 11:16:29
 */
 namespace App\Controllers;

class c_home extends BaseController
{
	public function index()
	{
		if(!session()->has('username')){
			return redirect()->to('/login');
		}
		$data['username']  = session()->get('username');
		echo view('v_home',$data);
	}
}