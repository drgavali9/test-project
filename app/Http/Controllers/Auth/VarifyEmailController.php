<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;

class VarifyEmailController extends Controller
{
    public function index(Request $request)
    {
        dd($request->all());
    }
}
