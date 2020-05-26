<?php

namespace App\Http\Controllers;
use App\Http\Resources\blogCollection;
use App\blog;

use Illuminate\Http\Request;

class blogController extends Controller
{
    //
    public function store(Request $request)
    {
      $post = new blog([
        'title' => $request->get('title'),
        'body' => $request->get('body')
      ]);

      $post->save();

      return response()->json('success');
    }
    public function index()
    {
      return new blogCollection(blog::all());
    }

    public function edit($id)
    {
      $post = blog::find($id);
      return response()->json($post);
    }

    public function update($id, Request $request)
    {
      $post = blog::find($id);

      $post->update($request->all());

      return response()->json('successfully updated');
    }

    public function delete($id)
    {
      $post = blog::find($id);

      $post->delete();

      return response()->json('successfully deleted');
    }
}
