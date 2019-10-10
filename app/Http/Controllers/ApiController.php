<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Practice;
use App\Http\Resources\Practices;

class ApiController extends Controller
{
    public function api() {
        return new Practices(Practice::all());
    }
}
