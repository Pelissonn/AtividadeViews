<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        $albuns = Album::all();
        return view('albuns.index', compact('albuns'));
    }

    public function create()
    {
        return view('albuns.create');
    }

    public function store(Request $request)
    {
        Album::create([
            'nome' => $request->nome,
            'artista' => $request->artista,
            'ano_lancamento' => $request->ano_lancamento,
            'url_imagem' => $request->url_imagem,
        ]);

        return redirect('/albuns');
    }

    public function show($id) {}
    public function edit($id) {}
    public function update(Request $request, $id) {}
    public function destroy($id) {}
}