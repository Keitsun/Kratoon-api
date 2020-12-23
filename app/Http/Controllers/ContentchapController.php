<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Manga;
use App\Models\Chapter;
use App\Models\Contentchap;

class ContentchapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($chapId)
    {
        //
        $c= Chapter::find($chapId)->contentchaps;

        return response()->json($c,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $c = Contentchap::create($request->all());

        return response()->json($c,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($contentchapId)
    {
        //
        $c = Contentchap::find($contentchapId);

        return response()->json($c,200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $categId, $manId, $chapId, $contentchapId)
    {
        //
        $c = Contentchap::find($contentchapId);
        $c->update($request->all());
        return response()->json($c,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($categId, $manId, $chapId, $contentchapId)
    {
        //
        $c=Contentchap::find($contentchapId);
        $c->delete();
    }
}
