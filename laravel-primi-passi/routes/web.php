<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

  $prova = 'sono una polpetta';
  $test = 'Ciao';
  $numero = 11;

    return view('welcome', compact('prova', 'test', 'numero'));
})
->name('first');

Route::get('/second', function(){

  $prova = 'sono una pizza';
  $test = 'Buongiorno,';
  $numero = 21;

  return view ('welcome', compact('prova', 'test', 'numero'));
})
->name('second');

Route::get('/pasta', function(){
  $pastas = config ('pasta');
  return view('spaghettialfredo', compact('pastas'));
})
->name('third');
