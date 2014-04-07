<?php

Route::group(array('domain' => 'admin.lara.vel.com'), function(){

	//Admin Dashboard
	Route::get('/', array(
		'as' => 'admin_dashboard',
		'uses' => 'Mars\Admin\AdminController@dashboard',
	));

});

