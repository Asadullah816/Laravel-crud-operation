<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use DB;

class Usercontroller extends Controller
{
    //
   function show(Request $req)
   {
        $data= Member::all();
        return view('list',['members'=>$data]);
   } 
   function addmem(Request $req)
   {
        $member= new Member;
        $member->name=$req->name;
        $member->email=$req->email;
        $member->address=$req->address;
        $member->save();
        return redirect('list');
   }
   

   function delete($id)
   {
        $data = Member::find($id);
        $data->delete();
        return back()->with('message:success', 'Deleted');
   }
   function showData($id)
   {
     $data = Member::find($id);
     return view('edit',['data'=>$data]);
   }

   function update(Request $req)
   {
     $data = Member::find($req->id);
     $data->name=$req->name;
     $data->email=$req->email;
     $data->address=$req->address;
     $data->save();
     return redirect('list');

   }
//    =======================Query-builder===============
//    function qbshowdata()
//    {
//      $data = DB::table('members')->get();
//      return view('qblist',['data'=>$data]);
//    }
//    function qbshowdata()
//    {
//      $data = DB::table('members')->where('id',10)->get();
//      return view('qblist',['data'=>$data]);
//    }
//    function qbshowdata()
//    {
//      return (array) DB::table('members')->find(3);
//      // return view('qblist',['data'=>$data]);
//    }
//    function qbshowdata()
//    {
//      return  DB::table('members')->count();
//      // return view('qblist',['data'=>$data]);
//    }
//    function qbshowdata()
//    {
//      return  DB::table('members')->insert([
//           'name'=>'Hasnain khan',
//           'email'=>'hasnain@gmail.com',
//           'address'=>'Watky'
//      ]);
//    function qbshowdata()
//    {
//      return  DB::table('members')->where('id',14)->update([
//           'name'=>'Hasnain khan',
//           'email'=>'hasnain@gmail.com',
//           'address'=>'Mingora'
//      ]);
   function qbshowdata()
   {
     return  DB::table('members')->where('id',14)->delete();
     
   }

}
