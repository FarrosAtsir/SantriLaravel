<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    // nampilin data
    public function index(){
        $student = Student::all();
        return view("home", compact(["student"]));
    }
    // untuk menampilkan halaman tambah data
    public function create(){
        return view('about');
    }
    // untuk menambah data
    public function store(Request $request){
        // $student = Student::create([
        //     'nama'=>$request->input('nama'),
        //     'kesalahan'=>$request->input('kesalahan'),
        //     'sanksi'=>$request->input('sanksi')
        // ]);
        $student = Student::create($request->all());
        return Redirect('home');
    }
    // menampilkan halaman edit
    public function edit($id){
        $student = Student::find($id);
        return view('update.edit', compact(['student']));
    }
    // untuk edit data
    public function update($id, Request $request){
        $student = Student::find($id);
        $student->update($request->all());
        return redirect('/home');
    }
    // untuk delete data
    public function destroy($id){
        $student = Student::find($id);
        $student->delete();
        return redirect('/home');
    }
}