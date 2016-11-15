<?php namespace pastechart\hw\views\elements;

use pastechart\hw\views\View;
use pastechart\hw\configs\Config;

class HeaderElement extends Element
{
	public function render($data)
	{ ?>
		<!DOCTYPE html>
		<html>
		<head>
		<title><?= $data['titledisplay'] ?></title>
		<base href="<?= Config::BASE_URL ?>/">
		<link rel="stylesheet" type="text/css" href="src/styles/common.css">
    		</head>
		
	<?php }
} ?>
