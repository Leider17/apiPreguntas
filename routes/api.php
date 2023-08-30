<?php

use App\Http\Resources\AsignaturaResource;
use App\Models\Asignatura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

 Route::get('/asignatura', function(){
    $data=Asignatura::all();
   return AsignaturaResource::collection($data);
 });
