<?php
/**
 * @Author: Your name
 * @Date:   2023-01-31 14:55:14
 * @Last Modified by:   Your name
 * @Last Modified time: 2023-02-14 14:06:31
 */
namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\m_mahasiswa;
 
class c_Mahasiswa extends Controller
{
    public function index()
    {
        $model = new m_mahasiswa();
        $data['mahasiswa'] = $model->getAll();
        return view('v_display_Mahasiswa',$data);
    }

    public function getDetail($nim)
    {
        $model = new m_mahasiswa();
        $data['mahasiswa'] = $model->detail($nim);
        return view('v_detail_Mahasiswa',$data);
    }

    public function add()
    {
        return view('tambahData');
    }
 
    public function save()
    {
        $request = \Config\Services::request();
        $model = new m_Mahasiswa();
        $data = array(
            'NIM'  => $request->getPost('nim'),
            'Nama'  => $request->getPost('nama'),
            'Umur' => $request->getPost('umur'),
        );
        $model->saveMahasiswa($data);
        return redirect()->to('/mahasiswa');
    }
}