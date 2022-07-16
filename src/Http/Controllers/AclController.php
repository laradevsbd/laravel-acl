<?php

namespace Laradevsbd\Acl\Http\Controllers;

use Illuminate\Http\Request;

class AclController extends Controller
{
    public function index()
    {
        return view('acl::layout.app');
    }

}