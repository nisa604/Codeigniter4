<?php
/**
 * @Author: Your name
 * @Date:   2023-01-30 22:01:07
 * @Last Modified by:   Your name
 * @Last Modified time: 2023-01-31 14:52:58
 */


namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //return view('welcome_message');
        //return view('HelloWord');
        echo "Hello world!!";
    }
}
