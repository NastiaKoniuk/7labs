<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PageRes extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = new Page();
        return view('index',['pages' => $page->with('children')->where('parent_id',0)->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $page = new Page();
        $page->url = $request->input('url');
        $page->caption = $request->input('caption');
        $page->intro = $request->input('intro');
        $page->content = $request->input('content');
        $page->parent_id = $request->input('parent_id');


        $page->save();
        return back();
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

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id,$editParam)
    {
        Page::where('id',$id)->update([$editParam=>$request->input($editParam)]);
        return back();
    }


    public function getById($id,$editParam = null)
    {
        $data = new Page();
        return view('update',['data'=>$data->with('children')->where('id',$id)->get(),'editParam'=>$editParam]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Page::find($id)0->delete();
        return back();
    }
}
