<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




    // Place all your web routes here...

        // Place all your web routes here...(Cut all `Route` which are define in `Route file`, paste here)
        Route::get('/', array('as'=>'view_profile','uses'=>'ProfileController@getProfile'));
        Route::post('/post_personal',array('as'=>'post_personal','uses'=>'EditController@postPersonal'));
        Route::get('/edit_profile',array('as'=>'edit_profile','uses'=>'EditController@viewProfile'));
        Route::get('/home', 'HomeController@index');
        Route::get('/profilepicture/{filename}',array('as'=>'profilepicture','uses'=>'EditController@diplayProfilePicture'));
        Route::get('/gallerydisplay/uploads/{path}',array('as'=>'gallerydisplay','uses'=>'EditController@displayGalleryImage'));
        Route::post('/galleryimage',array('as'=>'galleryimage','uses'=>'EditController@postGalleryImage'));
        Route::post('/editimage',array('as'=>'editimage','uses'=>'EditController@editImage'));
        Auth::routes();
