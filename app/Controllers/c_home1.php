<?php
/**
 * @Author: Your name
 * @Date:   2023-02-07 13:40:31
 * @Last Modified by:   Your name
 * @Last Modified time: 2023-02-15 13:58:07
 */
namespace App\Controllers;
 
use CodeIgniter\Controller;
//use App\Models\m_mahasiswa;
 
class c_home1 extends Controller
{
    public function index()
    {
        if(!session()->has('username')){
			return redirect()->to('/login');
		}
		$data['username']  = session()->get('username');
		echo view('v_template',$data);
        //return view('v_template');
    }
    public function home()
    {
        return view('v_home1');
    }
}