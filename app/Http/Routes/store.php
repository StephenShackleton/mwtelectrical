<?php

$router->get('/', [
	'as'   => 'home',
	'uses' => 'HomeController@index'
]);
