<?php
/**
 * @Author: Your name
 * @Date:   2023-02-07 13:40:31
 * @Last Modified by:   Your name
 * @Last Modified time: 2023-02-07 14:12:51
 */
namespace App\Controllers;
 
use CodeIgniter\Controller;
//use App\Models\m_mahasiswa;
 
class c_info extends Controller
{
    public function info()
    {
        return view('v_info');
    }
}