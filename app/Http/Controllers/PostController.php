<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Listar posts
    public function index()
    {
        return Post::all();
    }

    // Crear un post
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'contenido' => 'required|string'
        ]);

        return Post::create($request->all());
    }

    // Ver post por ID
    public function show($id)
    {
        return Post::findOrFail($id);
    }

    // Actualizar post
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->update($request->all());

        return $post;
    }

    // Eliminar post
    public function destroy($id)
    {
        return Post::destroy($id);
    }
}

