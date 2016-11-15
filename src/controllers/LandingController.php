<?php namespace pastechart\hw\controllers;


use pastechart\hw\views\LandingView;
use pastechart\hw\models;
use pastechart\hw\controllers\Controller;

class LandingController extends Controller
{
	public $views;
	public $data;
	public $model;

	public function invoke()
	{
        /*
		$this->data['genre']=[];
		$this->model->getGenre($this);
		if(isset($_REQUEST['gobutton']) && isset($_REQUEST['phrases']))
		{
			$_SESSION['phrases']=$_REQUEST['phrases'];
			$_SESSION['genre']=$_REQUEST['genresingleselect'];
		}
		if(isset($_SESSION['phrases']) && isset($_SESSION['genre']))
		{
			$this->model->listStories($this,$_SESSION['phrases'],$_SESSION['genre']);
		}
		else
		{
			$this->model->listStories($this,"","All");
		}
		$this->model->closeConnection();
        */
		$this->data['title']="PasteChart";
		$this->data['titledisplay']=$this->data['title'];
		$this->data['placeholder']="Chart Title";
        $this->data['placeholder2']="Please use the following format..
Seperate list of values by commas and one per line. 
EX: Jan, 600, 5.4
EX: Feb,450,5.0";
		$this->callview();
	}
	public function callview()
	{
		$views=new LandingView();
		$views->render($this->data);
	} 
}
?>
