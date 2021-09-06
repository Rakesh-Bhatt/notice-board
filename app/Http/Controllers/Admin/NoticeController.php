<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Notice;
use App\NoticeCategory;
use File;
class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Notice::paginate(5);
        return view('dashboard.notice.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = NoticeCategory::get();
        return view('dashboard.notice.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $this->validate($request,['name'=>required|min:5]);
        // return $request->file('image');
        $image="";
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $file->move('images',$name);
            $image = 'images/'.$name;
        }
       Notice::create([
            'description' => $request->description,
            'category_id' => $request->category_id,
            'image'=>$image
        ]);
        return redirect()->route('admin.notice');
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
         $data = Notice::find($id);
         $category = NoticeCategory::get();
        return view('dashboard.notice.edit', compact('data','category'));
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
        $image = $request->image_url;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $file->move('images',$name);
            if (File::exists($image)) {
                File::delete($image);
            }
            $image = 'images/'.$name;
        }
        Notice::find($id)->update([
            'description' => $request->description,
            'category_id' => $request->category_id,
            'image'=>$image
        ]);
        return redirect()->route('admin.notice');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Notice::find($id)->delete();
        return redirect()->route('admin.notice');
    }
}
