<?php namespace Ifnot\MethodSpoofing;

use Illuminate\Support\ServiceProvider;

/**
 * Class MethodSpoofingServiceProvider
 * @package Ifnot\MethodSpoofing
 */
class MethodSpoofingServiceProvider extends ServiceProvider
{
	public function register()
	{
		if(isset($_GET['_method'])) {
			$_SERVER['REQUEST_METHOD'] = strtoupper($_GET['_method']);
		}
		if(isset($_POST['_method'])) {
			$_SERVER['REQUEST_METHOD'] = strtoupper($_POST['_method']);
		}
	}

	public function boot()
	{

	}
}
