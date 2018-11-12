<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use DB;
use Illuminate\Support\Facades\Storage;
use Gate;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (Gate::allows('is-admin')) {
            $news = News::paginate(5);
            return view('admin', ['news' => $news]);
        }
        return ('You no have fucking dostup');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->isMethod('post')){
                $path = $request->file('preview')->store('images/placeholders', 'local_public');
                $news = new News;
                $news->category_id = $request->category_id;
                $news->news_title = $request->title;
                $news->news_short_content = $request->short_content;
                $news->news_author = $request->author;
                $news->news_preview = $path;
                $news->news_content = $request->news_content;
                $news->news_code = $request->code;
                $news->news_day = $request->day;
                $news->news_views = $request->views;
                $news->save();
        }
        return view('create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
        $news = News::find($id);
        $news->delete();
        return redirect('admin/news');
    }
}
