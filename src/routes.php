<?php  
	Route::group(['prefix'=>'/{lang}'],function(){
		Route::get('languages','Tupa\Translate\TranslateController@index');
		Route::get('languages-add','Tupa\Translate\TranslateController@create');
		Route::post('languages-add','Tupa\Translate\TranslateController@store');
		Route::get('languages-delete/{id}','Tupa\Translate\TranslateController@delete');
		Route::get('languages-edit/{id}','Tupa\Translate\TranslateController@edit');
		Route::post('languages-editt/{id}','Tupa\Translate\TranslateController@update');
		Route::get('languages-capnhat','Tupa\Translate\TranslateController@capnhat');
		Route::get('home','Tupa\Translate\TranslateController@show');
	});

	Route::get('test111',function(){
		echo "ok";
	});
?>