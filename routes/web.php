<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/getInfos', function(){

    $infos = [
    ["name" => "mario","skill" => 75, "id" => "1"],
    ["name" => "luigi","skill" => 45, "id" => "2"],
  ];

    return view('infos.index', ["greeting" => "Salam", "infos" => $infos]);

});