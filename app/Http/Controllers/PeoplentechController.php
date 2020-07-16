<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeoplentechController extends Controller
{
    // usually class has property and method
    // but our controller class mostly will have method
    // we will write property when we write model

    public function index(){

        // we are returning the same view as routes
        // lets send some data to route

        $title = 'PeoplenTech';

        // echo $title;
        // exit();

        // withoud using echo and exit
        // laravel has a function dd
        // that means die dump
        // die = exit , dump = echo

        // dd($title);

        // lets send the variable via link
        // using compact() function

        return view('peoplentechView', compact('title'));
    }

    public function about(){

        // now send here using compact
        $title = 'About People N Tech';
        $details = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto ullam amet, nam voluptatem vel dolorum ad beatae corporis modi quibusdam natus rem repellat itaque odit deserunt, soluta consequuntur vero officia.';
        // we are returning the same view as routes
        return view('about', compact('title','details'));
    }

    public function form(){

        return view('form');
    }

    public function preview(Request $request){

        // let take data from form request
        // and use buit in db function
        // to insert it to table
        $data = [];
        $data['id'] = $request->id_code;
        $data['name'] = $request->full_name;
        $data['email'] = $request->email_address;
        $data['phone'] = $request->phone_number;

        // if u uncomment these line below
        // u cant insert a new data
        // and if u keep later codes of
        // db::get()
        // it will send all data to next page via compact
        DB::table('about')->insert($data);
        // lets get value

        // we can get all values
        // dd($request->all());

        // we can also get single value

        // $name = $request->name;
        // $email = $request->email;
        // $phone = $request->phone;

        // single dd is also good
        // dd($name);

        // lets not using $ sign to get value,
        // lets use database, get value from there

        // first will get the first data
        // lets use get to get all data
        // $result = DB::table('about')->first();
        // $result = DB::table('about')->get();

        // this is good
        // we didn't get this from - form submitted request
        // it will now get the first element of row
        // $name = $result[0]->name;
        // $email = $result[0]->email;
        // $phone = $result[0]->phone;

        // lets do something to loop through
        // data - change the form a bit

        //this is not working
        // $name = $result->name;
        // $email = $result->email;
        // $phone = $result->phone;


        // dd($result);


        // return view('preview',compact('name','email','phone'));
        // lets return the whole result

        // where there is a insert/update/delete has taken place
        // this method mustnot return view
        // otherwise it will always will do the insert per reload
        // same goes for update and delete
        // so lets change this


        // return view('preview',compact('result'));
        return redirect()->route('show');
    }

    public function show(){
        $result = DB::table('about')->get();
        return view('preview',compact('result'));
    }

    // php also support migration
    // it means u can create table structure in code
    // using php artisan make migration
    // the db table stucture will be save at
    // database -> migration folder
    // php artisan make:migration CreateAuthorTable --create=authors
    // CreateAuthorTable  - this is the class where our table is saved
    // since class name - use camel case
    // --create=authors
    // it will create table , try to put s after tablename
    // its a convention
}
