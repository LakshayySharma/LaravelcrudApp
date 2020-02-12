<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class crud_app extends Controller
{
    //
    
function add(){
    return view('add');
  }
    function insert(Request $res){
      $this->validate($res,[
              'name' => 'required|max: 55',
              'email' => 'required|unique:students',
              'att'=>'required',
          ],
          [
              'name.required'=>"Name shoud be valid.",
              'email.required'=>"Email is required.",
              'email'=>"Email Format shoud be valid.",
              'att.required'=>"Attachement Required."
          ]
      );
  
      $image_name=rand().'.'.$res->file('att')->getclientOriginalExtension();
      $ob=new student();
      $ob->name=$res->name;
      $ob->email=$res->email;
      $ob->image=$image_name;
      if($res->file('att')->move(public_path()."/upload",$image_name))
      {
        $ob->save();
        return redirect ('add');
      }
      else{
        echo "registration falied";
      }
  
    }
    function fetch(){
        $use = student::all();
        return view('fetch',compact('use'));
    }
    function delete($id){
        $del = student::find($id);
        if($del->delete()){
            return redirect('/fetch')->with('msg','Record Deleted');
        }
    }
    function edit($id){
      $edit = student::find($id);
      return view('edit',compact('edit'));
    }
    function editPost($id, Request $res){
      $this->validate($res,[
        'name' => 'required|max: 55',
        'att'=>'required',
    ],
    [
        'name.required'=>"Name shoud be valid.",
        'att.required'=>"Attachement Required."
    ]
);

$image_name=rand().'.'.$res->file('att')->getclientOriginalExtension();
$ob = student::find($id);
$ob->name = $res->name;
$ob->email=$res->email;
$ob->image=$image_name;
if($res->file('att')->move(public_path()."/upload",$image_name))
{
  $ob->save();
  return redirect ('add');
}
else{
  echo "registration falied";
}

    }
      
}
