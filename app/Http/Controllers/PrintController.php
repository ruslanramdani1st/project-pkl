<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;

class PrintController extends Controller
{
    public function printll($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        return view('layouts.print.printll', compact('printll'));
    }

    public function printsprl($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        return view('layouts.print.printsprl', compact('printsprl'));

    }
}
