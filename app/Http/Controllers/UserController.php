<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    // Generate PDF
    public function createPDF(User $user)
    {
        view()->share('user', $user);
        $fileName = $user->id."_user.pdf";
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('pdfview', $user->toArray());

        return $pdf->download($fileName);
    }
}
