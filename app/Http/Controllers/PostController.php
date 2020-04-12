<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Category;
use App\Post;
use Illuminate\Support\Str;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo ('controller de Post carregado');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Category::where(function($q){
            $q->select('id','title');
        })->get();
        return view('post-form',array(
            'categorias' => $categorias
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'title' => 'required|unique:posts|max:60',
            'content' => 'required | max:6000',
            'category' => 'required | integer',
            'capa' => 'mimes:jpeg,jpg,bmp,png'
        );

        $request->validate($rules);
        
        
        $post = new Post;
         if( $request->has('capa') ){
            $path = $request->file('capa')->store('');
            $post->cover = $path;
        } 

        $post->title =  strtolower($request->title);
        $post->slug =  Str::slug($post->title,'-');
        $post->category_id =  $request->category;
        $post->content = $request->content;
        $post->user_id = auth()->user()->id;

        if ( $post->save() ):
            dd('salvou');
        else:
            dd('não salvou');

        endif;
        


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
