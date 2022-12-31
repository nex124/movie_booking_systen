<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movie_model;
use App\Models\ticket_models;
use App\Models\user_model;
use Illuminate\Support\Facades\DB;

class movie_controller extends Controller
{
    public function table_info1()
    {
         $data = \App\Models\movie_model::all();
         return view('mainpage',['data'=> $data]);
    }

    public function checkout(Request $request)
    {
        \App\Models\ticket_models::create($request->all());
         return redirect('/');
         
    }



    public function table_info2()
    {
         $mydata = \App\Models\ticket_models::all();
         return view('view',['mydata'=> $mydata]);
    }
 
    public function delete($ticket_ID)
    {
        $ticket_ID=\App\Models\ticket_models::find($tickets_ID);
        $data = \App\Models\ticket_models::where('ticket_ID',$ticket_ID)->delete();
        return redirect('/view')->with('success','Data Successfully Deleted');
    }

    public function edit($id)
    {
        $data= \App\Models\user_model::find($id);
         return view('/edit',['data'=>$data]);
         
    }

    public function table_info3()
    {
         $mydata2 = \App\Models\user_model::all();
         return view('/personal',['mydata2'=> $mydata2]);
    }

    public function update(Request $request,$id)
    {
        $data= \App\Models\user_model::find($id);
        $data->update($request->all());
         return redirect('/personal');
         
    }

    public function spiderman()
    {
         $mydata = \App\Models\ticket_models::all()->where('movie_name','=','Spiderman No Way Home');
         return view('/view',['mydata'=> $mydata]);
    }

    public function encanto()
    {
         $mydata = \App\Models\ticket_models::all()->where('movie_name','=','Encanto');
         return view('/view',['mydata'=> $mydata]);
    }

    public function kings()
    {
         $mydata = \App\Models\ticket_models::all()->where('movie_name','=','The Kings Man');
         return view('/view',['mydata'=> $mydata]);
    }

    public function venom()
    {
         $mydata = \App\Models\ticket_models::all()->where('movie_name','=','Venom 2');
         return view('/view',['mydata'=> $mydata]);
    }

    public function kungfu()
    {
         $mydata = \App\Models\ticket_models::all()->where('movie_name','=','New Kung Fu Cult Master 1');
         return view('/view',['mydata'=> $mydata]);
    }

    public function nightmare()
    {
         $mydata = \App\Models\ticket_models::all()->where('movie_name','=','Nightmare Alley');
         return view('/view',['mydata'=> $mydata]);
    }

    public function notime()
    {
         $mydata = \App\Models\ticket_models::all()->where('movie_name','=','No Time To Die');
         return view('/view',['mydata'=> $mydata]);
    }
}
