<?php


Class Home extends App
{
	public function index()
	{
		view('main',['heading' => 'MS Access with PHP']);
	}

	

}