<?php


Class Home extends App
{
	public function index()
	{
		view('main',['heading' => 'Super Simple MVC PHP']);
	}

	public function users()
	{

		$vars = new HomeModel;

		$users = $vars->userList();

 		view('users',[
 			'heading' 	=> 'User data from HomeModel',
 			'users'		=> $users,
 		]);
	}

	public function user($id)
	{
		
		$vars = new HomeModel;

		$user = $vars->userList($id);

 		view('user',[
 			'heading' 	=> 'User Data',
 			'user'		=> $user,
 		]);
	}

	public function debug()
	{
		
		$vars = new HomeModel;

		$users = $vars->userList();

 		view('debug',[
 			'heading' 	=> 'Dump Data',
 			'users'		=> $users,
 		]);
	}



}