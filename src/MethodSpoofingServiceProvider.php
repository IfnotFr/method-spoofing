<?php namespace Ifnot\MethodSpoofing;

/**
 * Class MethodSpoofingServiceProvider
 * @package Ifnot\MethodSpoofing
 */
class MethodSpoofingServiceProvider
{
	public function register()
	{
		/*
		if(isset($_GET['_method'])) {
			$_SERVER['REQUEST_METHOD'] = strtoupper($_GET['_method']);
		}
		if(isset($_POST['_method'])) {
			$_SERVER['REQUEST_METHOD'] = strtoupper($_POST['_method']);
		}
		*/
	}

	public function boot()
	{

	}
}