<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    //

    public function create(){
        return view('book.create');
    }

    public function store(Request $request){
        $data['name']=$request->name;
        $data['author_name']=$request->author_name;
        $data['publish_date']=$request->publish_date;
        DB::table('books')->insert($data);
        return redirect()->route('book.index');
    }

    public function index(){
        // writing in this way is wrong
        // $book = DB::table('books')->get();
        // return view('book/index',compact('book'));
        // write like this
        $data['books'] = DB::table('books')->get();
        return view('book.index',$data);
    }

    public function edit($id){
        $data['book'] =  DB::table('books')->find($id);
        return view('book.edit',$data);
    }

    public function update(Request $request, $id){
        $data['name']=$request->name;
        $data['author_name']=$request->author_name;
        $data['publish_date']=$request->publish_date;
        // dd($data);
        // $data['publish_date']=$request->publish_date;
        DB::table('books')->where('id',$id)->update($data);
        return redirect()->route('book.index');
    }

    public function destroy($id){
        DB::table('books')->delete($id);
        return redirect()->route('book.index');
    }
}
