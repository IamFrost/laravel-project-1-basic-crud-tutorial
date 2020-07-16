<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{
    //
    public function create(){
        return view('author/create');
    }

    public function store(Request $request){
       // return view('author/create');
       // dd($request->all());
       $data['name']=$request->name;
       $data['email']=$request->email;
       $data['date_of_birth']=$request->date_of_birth;
       DB::table('authors')->insert($data);
       return redirect()->route('author.index');

    }

    public function index(){
        $authors = DB::table('authors')->get();
        return view('author/index',compact('authors'));
    }

    public function edit($id){
        $author =  DB::table('authors')->where('id',$id)->first();
        return view('author/edit',compact('author'));
    }

    public function update(Request $request, $id){
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['date_of_birth']=$request->date_of_birth;
        DB::table('authors')->where('id',$id)->update($data);
        return redirect()->route('author.index');
    }

    public function destroy($id){
        // this is ok but u dont need to write like this
        // DB::table('authors')->where('id',$id)->delete();
        DB::table('authors')->delete($id);
        return redirect()->route('author.index');
    }



}
