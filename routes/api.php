<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\DefesaController;
use App\Http\Controllers\Api\PessoaController;

Route::get('/defesas', [DefesaController::class, 'index']);
Route::get('/pessoas', [PessoaController::class, 'index']);
