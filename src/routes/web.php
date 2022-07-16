<?php
use Illuminate\Support\Facades\Route;
use Laradevsbd\Acl\Http\Controllers\AclController;
use Laradevsbd\Acl\Http\Controllers\AclMenuController;

Route::get('acl-dashboard',[AclController::class,'index']);
Route::resource('/acl-menus', AclMenuController::class);
