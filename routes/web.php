<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/about',function(){return view('about');})->name('about');
Route::get('/experience',function(){return view('experience');})->name('experience');
Route::get('/skills',function(){return view('skills');})->name('skills');
Route::get('/blogs',function(){return view('blog');})->name('blog');
Route::get('/education',function(){return view('education');})->name('education');
Route::get('/projects',function(){return view('projects');})->name('projects');


