<?php

namespace App\Http\Controllers;

use App\Subject;
use App\User;
use App\Class_Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects=Subject::all();
        return view('admin.subject.index',compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        return view('admin.subject.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         $this->validate($request,array(
            'title'=>'required',
             
              'class_id'=>'required', 
        ));
        $subject=new Subject;
        $subject->title=$request->title;
        $subject->class_id=$request->class_id;
       
        $subject->save();
        return redirect()->route('subject.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show($user)
    {
         $users=User::find($user);
     

     
         $subjects=Subject::where('user_id',$users->id)->get();
  
       return view ('admin.answer.showsingle',compact('subjects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $subject=Subject::findOrFail($id);
    $classes=Class_Student::all();

    $class_array=array();
    foreach($classes as $class){
    $class_array[$class->id]=$class->name;
    }
    return view('admin.subject.edit',compact('subject','class_array'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $subject=Subject::find($id);
         $this->validate($request,array(
            'title'=>'required|max:255',
            
        ));
            
        $subject->title=$request->title;
      
        $subject->class_id=$request->class_id;
     
        $subject->save();
      
         Session::flash('success','The item was Succesfully updated');
        //redirect to another page
         return redirect()->route('subject.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $subject=Subject::findOrFail($id);
         
         $subject->delete();
         Session::flash('success','The item was Succesfully deleted');
         return redirect()->route('subject.index');
    }
}
