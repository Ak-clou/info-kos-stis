<?php

namespace App\Http\Controllers;

use App\Models\Kost;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class CreateController extends Controller
{
    public function index()
    {
        return view('create.index', [
            'title' => 'Tambah data kosan',
            'active' => 'tambah data kosan',
        ]);
    }

    public function store()
    {
        $coba = request()->except('_token');
        Kost::create($coba);


        return redirect('/create');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Kost::class, 'slug', $request->nama_kos);
        return response()->json(['slug' => $slug]);
    }
}
