<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;


class TodoController extends Controller
{
    public function __invoke(){   // __invoke --> only if there is ONE route and only ONE method in the controller

    	return Todo::all();

    }


}
