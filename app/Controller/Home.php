<?php


Class Home extends App
{
	public function index()
	{
		$model = new HomeModel;
		//$model->edit('Klijenti',['Tip' => 'D.O.O.'],'ID_Klijent = 1225');
		dd($model->first("Select * From klijenti"));
		view('main',['heading' => 'MS Access with PHP']);
	}

	

}