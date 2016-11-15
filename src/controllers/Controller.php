<?php
namespace pastechart\hw\controllers;

class Controller
{
	public $model;
	public $data;

	public function __construct()
	{
		$this->data=[];
		$this->data['titlename']="";
		$this->data['authorname']="";
		$this->data['identifiername']="";
	}
}
