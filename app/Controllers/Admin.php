<?php

namespace App\Controllers;

class Admin extends BaseController
{
	public function index()
	{
		$data=[
				'title' => 'Admin',
			]; 

		return view('admin/index',$data);
	}

	public function home()
	{
		$data=[
				'title' => 'Admin',
			];

		return view('admin/home',$data);		
	}

}
