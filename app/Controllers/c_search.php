<?php
/**
 * @Author: Your name
 * @Date:   2023-02-16 11:12:39
 * @Last Modified by:   Your name
 * @Last Modified time: 2023-02-18 20:51:32
 */
 namespace App\Controllers;
 
use App\Models\m_user;
 
class c_search extends BaseController
{
    // public function index(){
    //     $mUser = new m_user();
	// 	$data['product'] = $mUser->getAll();
	// 	return view('v_display_mahasiswa',$data);
	// }
	// public function search(){
    //     $mUser = new m_user();
	// 	$keyword = $this->request->getPost('keyword');
	// 	$data['products'] = $mUser->Search($keyword);
	// 	return view('v_display_mahasiswa',$data);
	// }
    //defined('BASEPATH') or exit('No direct script access allowed');
	public function index()
	{
		$data['keyword'] = $this->request->getAll('keyword');
		$this->load->model('article_model');

		$data['search_result'] = $this->article_model->search($data['keyword']);
		
		$this->load->view('search.php', $data);
	}
    
}
    // public function index()
    // {
    //     return view('pencarian');
    // }
 
    // public function cari()
    // {
    //     $users = new m_user();
    //     $cari = $this->request->getGet('cari');
    //     $data = $users->where('country', $cari)->findAll();
    //     return view('hasil_pencarian', compact('data'));
    // }

//     public function index()
// {
// 	$data['current_user'] = $this->request->current_user();

// 	$data['articles'] = $this->article_model->get();
		
// 	$data['keyword'] = $this->input->get('keyword');

// 	if(!empty($this->input->get('keyword'))){
// 		$data['articles'] = $this->article_model->search($data['keyword']);
// 	}
	
// 	if(count($data['articles']) <= 0 && !$this->input->get('keyword')){
// 		$this->load->view('admin/post_empty.php', $data);
// 	} else {
// 		$this->load->view('admin/post_list.php', $data);
// 	}
// }
// }