<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AcademicoController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        //
        return view('secretaria.academico.index');
    }
}
