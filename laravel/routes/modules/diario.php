<?php
    $NAME_MODULE = '/diario';

	Route::get($NAME_MODULE, 'diario\IndexController@index');

	Route::get($NAME_MODULE.'/find/{id?}', function ($id = null) {
    	return 'Find:: Mi id es:'.$id;
	});


	Route::get($NAME_MODULE.'/list/{id?}', function ($id = null) {
    	return 'List: Mi id es:'.$id;
	});


	Route::get($NAME_MODULE.'/nuevo', function () {
    	return 'Nuevo'.$id;
	});
?>