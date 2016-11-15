<?php namespace pastechart\hw\views\elements;

use pastechart\hw\views\View;

abstract class Element
{
	public $view;
	
	public function __construct(View $currentview)
	{
		$this->view=$currentview;
	}
	public abstract function render($data);
} ?>
