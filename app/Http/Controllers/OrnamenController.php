<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ornamen;

class OrnamenController extends Controller
{
    public function index() {
        return view('pages.admin-ornamen', [
            'admin_ornamen' => Ornamen::latest()->get()
        ]);
    }
}
