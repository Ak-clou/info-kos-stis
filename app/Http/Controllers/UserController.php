<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class UserController extends Controller
{
    public function index()
    {
        return view('create.index', [
            'title' => 'Tambah data kosan']);
    }

    public function store()
    {
        $coba = request()->except('_token');
        User::create($coba);

        return redirect('/login');
    }
}
