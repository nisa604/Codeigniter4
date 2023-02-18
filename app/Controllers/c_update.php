<?php
/**
 * @Author: Your name
 * @Date:   2023-02-18 21:00:09
 * @Last Modified by:   Your name
 * @Last Modified time: 2023-02-18 21:04:17
 */


namespace App\Controllers;
 
use App\Models\m_user;
 
class c_update extends BaseController
{
public function update() {
		$id		= $this->request->getPost('txtId');
		$Nama	= $this->request->getPost('Nama');
		$Umur	= $this->request->getPost('Umur');
		
		$data = [
			'Nama'		=> $Nama,
			'Umur'		=> $Umur,
		];
        $model = new m_user();
		$result = $model->update($id, $data);
		if($result) {
			echo "User details are updated successfully.";
		} else {
			echo "Something went wrong";
		}
	}
}