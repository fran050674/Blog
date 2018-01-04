<?php
// Route::redirect('/', 'blog');
// Route::redirect('categoria/', '{slug}');


Auth::routes();

//Web
// Route::get('/blog', 'Web\PageController@blog')->name('blog');
Route::get('/', 'Web\PageController@blog')->name('blog');
Route::get('entrada/{slug}', 'Web\PageController@post')->name('post');
// Route::get('/{slug}', 'Web\PageController@post')->name('post');
Route::get('categoria/{slug}', 'Web\PageController@category')->name('category');
// Route::get('/{slug}', 'Web\PageController@category')->name('category');
Route::get('etiqueta/{slug}', 'Web\PageController@tag')->name('tag');
// Route::get('/{slug}', 'Web\PageController@tag')->name('tag');


//Admin
Route::resource('tags', 'Admin\TagController');
Route::resource('categories', 'Admin\CategoryController');
Route::resource('posts', 'Admin\PostController');