<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function blogs()
    {
        $blogs = DB::table('blogs')->get();
        return view('blogs', compact('blogs'));
    }
    function abouts()
    {
        $name = "Pirada";
        $date = "6 กรกฏาคม 2569";
        return view("abouts", compact("name", "date"));
    }
   
    function create()
    {
        return view("form");
    }
    function form()
    {
        return view("form");
    }
    function claim()
    {
        return redirect()->route('form');
    }
    function insert(Request $request)
    {
        $request->validate([
            'title' => 'required|max:50',
            'content' => 'required'
        ],[
            'title.required' => 'กรุณากรอกชื่อบทความ',
            'title.max' => 'ชื่อบทความห้ามเกิน 50 ตัวอักษร',
            'content.required' => 'กรุณากรอกเนื้อหาบทความ'
        ]);
        $data=[
            'title'=>$request->title,
            'content'=>$request->content,
    
        ];
      DB::table("blogs")->insert($data);
return redirect('/blogs');
    }
    function delete($id){
        DB::table("blogs")->where('id',$id)->delete();
        return redirect()->route('blogs');
    }
    function change($id){
        $blogs = DB::table("blogs")->where('id',$id)->first();
        $data = [
            'status'=>$blogs->status
        ];
        if($blogs->status == 0){
            $data = ['status'=>1];
        }else{
            $data = ['status'=>0];
        }
        DB::table("blogs")->where('id',$id)->update($data);
        return redirect('/blogs');
    }
    function update(Request $request,$id){
        $request->validate([
            'title' => 'required|max:50',
            'content' => 'required'
        ],[
            'title.required' => 'กรุณากรอกชื่อบทความ',
            'title.max' => 'ชื่อบทความห้ามเกิน 50 ตัวอักษร',
            'content.required' => 'กรุณากรอกเนื้อหาบทความ'
        ]);
        $data=[
            'title'=>$request->title,
            'content'=>$request->content,
    
        ];
      DB::table("blogs")->where('id',$id)->update($data);
return redirect('/blogs');
    }
    
    function edit($id)
    {
        $blogs = DB::table('blogs')->where('id', $id)->first();
        return view('edit', compact('blogs'));
    }
    
    function claimInsert(Request $request)
    {
        $request->validate([
            'serial_number' => 'required',
            'email' => 'required|email',
            'symptoms' => 'required',
            'urgency' => 'required|in:low,medium,high'
        ],[
            'serial_number.required' => 'กรุณากรอกรหัสสินค้า',
            'email.required' => 'กรุณากรอกอีเมลผู้ติดต่อ',
            'email.email' => 'กรุณากรอกรูปแบบอีเมลที่ถูกต้อง',
            'symptoms.required' => 'กรุณากรอกอาการชำรุด',
            'urgency.required' => 'กรุณาเลือกระดับความเร่งด่วน',
            'urgency.in' => 'ระดับความเร่งด่วนไม่ถูกต้อง'
        ]);
        
        return redirect()->route('claim')->with('success', 'ส่งข้อมูลแจ้งเคลมสินค้าสำเร็จเรียบร้อยแล้ว!');
    }
}