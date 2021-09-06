<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\NoticeCategory;
use App\Notice;
class NoticeCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = NoticeCategory::paginate(5);
        return view('dashboard.notice-category.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = NoticeCategory::get();
        return view('dashboard.notice-category.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        NoticeCategory::create([
            'title' => $request->category,
            
        ]);
        return redirect()->route('admin.notice-category');
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
         $data = NoticeCategory::find($id);
        return view('dashboard.notice-category.edit', compact('data'));
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
        NoticeCategory::find($id)->update([
            'title' => $request->category
        ]);
        return redirect()->route('admin.notice-category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message="Your category is already used";
        if(!Notice::where('category_id', $id)->exists()){
            $data = NoticeCategory::find($id)->delete();
            $data->delete();
            $message="Successfully Deleted.";
        }
        return redirect()->route('admin.notice-category')->with('status',$message);
    }
}
