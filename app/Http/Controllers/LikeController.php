<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Manga;
use App\Models\Chapter;
use App\Models\Comment;
use App\Models\User;
use App\Models\Like;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($manId)
    {
        //

        $l= Manga::find($manId)->likes;

        return response()->json($l,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request,$manId,$chapId,$userId)
    {
        //
        $l = Like::create($request->all());

        return response()->json($l,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($chapId)
    {
        //
        $l = Chapter::find($chapId)->likes;

        return response()->json($l,200);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $manId,$likeId,$userId)
    {
        //
        $c = Like::find($likeId);
        $c->update($request->all());
        return response()->json($c,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($manId,$likeId)
    {
        //

        $c=Comment::find($likeId);
        $c->delete();
    }
}
