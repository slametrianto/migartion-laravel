
<?php

Route::get('/', 'HomeController@index')->name('home');

Route::get('/about', 'PageController@about')->name('pages.about');

Route::get('/contact', 'PageController@contact')->name('pages.contact');


// Route::get('post/create', 'PostController@create')->name('post.create');

// Route::get('post/edit', 'PostController@edit')->name('post.edit');

// Route::get('post/destroy', 'PostController@destroy')->name('post.delete');


//edit,delete,create
Route::resource('post', 'PostController');
