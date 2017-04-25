<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefectController extends Controller
{
    /**
    * GET
    * /
    */
    public function index() {
        return view('/defects/backlog');
    }
}
