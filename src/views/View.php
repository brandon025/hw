<?php
namespace pastechart\hw\views;

abstract class View
{
    public function __construct()
    {}
    public abstract function render($data);
}?>
