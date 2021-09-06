<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Student::paginate(5);
        return view('dashboard.student.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Student::get();
        return view('dashboard.student.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       Student::create([
            'name' => $request->name,
            'gender'=> $request->gender,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'username' => $request->username,
            'password' => $request->password,
            'semester' => $request->semester,
        ]);
        return redirect()->route('admin.student');
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
        $data = Student::find($id);
        return view('dashboard.student.edit', compact('data'));
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
        Student::find($id)->update([
            'name' => $request->name,
            'gender'=> $request->gender,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'username' => $request->username,
            'password' => $request->password,
            'semester' => $request->semester,
        ]);
        return redirect()->route('admin.student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Student::find($id)->delete();
        return redirect()->route('admin.student');
    }
}
