<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		$data=[
				'title' => 'Home',
				'homeact' => 'active'
			]; 

		return view('pages/index',$data);
	}

	public function about()
	{
		$data=[
				'title' => 'About Us',
				'aboutact' => 'active'
			];

		return view('pages/about',$data);
	}

	public function contact()
	{
		$data=[
				'title' => 'Contact',
				'contactact' => 'active'
			];

		return view('pages/contact',$data);
	}
}
