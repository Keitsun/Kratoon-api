<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Manga;
use App\Models\Chapter;
use App\Models\Comment;
use App\Models\User;
use App\Models\Like;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($manId)
    {
        //
        $c= Manga::find($manId)->comments;

        return response()->json($c,200);
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
        $c = Comment::create($request->all());

        return response()->json($c,201);
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
        $c = Chapter::find($chapId)->comments;

        return response()->json($c,200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $manId, $chapId ,$comId,$userId)
    {
        //
        $c = Comment::find($comId);
        $c->update($request->all());
        return response()->json($c,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($manId,$comId)
    {
        //

        $c=Comment::find($comId);
        $c->delete();
    }

    
}
