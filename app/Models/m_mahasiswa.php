<?php
/**
 * @Author: Your name
 * @Date:   2023-01-31 14:58:09
 * @Last Modified by:   Your name
 * @Last Modified time: 2023-02-14 14:02:24
 */
namespace App\Models;
use CodeIgniter\Model;
 
class m_mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    public function getAll(){
        $query = $this->db->query("SELECT * FROM mahasiswa");
        return $query->getResult();
    }
    // public function getMahasiswa($nim = false)
    // {
    //         // $db = db_connect();
    //         // $query = $db->query("SELECT * FROM mahasiswa");
    //         // return $query->getResult();
    //     if($nim === false){
    //         return $this->findAll();
    //     }else{
    //         return $this->getWhere(['mahasiswa' => $nim]);
    //     }   
    // }
    public function detail($nim){
        $query = $this->db->query("SELECT * FROM mahasiswa where NIM = '$nim'");
        return $query->getResult();
    }

    public function saveMahasiswa($data)
    {
        $queryKey = "INSERT INTO mahasiswa VALUES('".$data['NIM']."', '".$data['Nama']."', '".$data['Umur']."')";
        $query = $this->db->query($queryKey);
        return $query;
        // $query = $this->db->table($this->table)->insert($data);
        // return $query;
    }
}