<?php
/**
 * @Author: Your name
 * @Date:   2023-02-14 14:42:17
 * @Last Modified by:   Your name
 * @Last Modified time: 2023-02-18 21:06:17
 */
namespace App\Models;

use CodeIgniter\Model;

class m_user extends Model
{
    // protected $table = "admin";
    // protected $primaryKey = 'id';

    protected $table = 'admin';
    public function getAll(){
        $query = $this->db->query("SELECT * FROM mahasiswa");
        return $query->getResult();
    }
    public function Search($keyword){
        $query = $this->db->query("SELECT * FROM mahasiswa like NIM ");
        return $query->getResult();
        // $this->db->select('*');
        // $this->db->from('product');
        // $this->db->like('nama',$keyword);
        // $this->db->or_like('harga',$keyword);
        // return $this->db->get()->result();
    }
    public function update($id, $data){
		return $this->db
        ->table('admin')
        ->where(["id" => $id])
        ->set($data)
        ->update();
	}
}
