<?php

namespace App\Http\Controllers;
use App\Survey;
use App\User;
use App\Doctor;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;
class SurveyController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctors=Doctor::all();
        $id_class=auth()->user()->class_id;
        $subjects=Subject::where('class_id',$id_class)->get();
        return view('subject.create',compact('doctors','subjects'));
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
            'subject_id'=>'required',
             'doctor_id'=>'required',  
             
        ));
        $survey=new Survey;
        $survey->subject_id=$request->subject_id;
        $survey->doctor_id=$request->doctor_id;
        $survey->user_id=auth()->user()->id;
        $survey->save();
        return redirect()->route('create_answer',$survey->subject_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show_survey_for_user($user)
    {
        $users=User::findOrFail($user);
     
         $surveys=Survey::where('user_id',$users->id)->get();
       return view ('admin.answer.showsingle',compact('surveys'));
    }
    public function show_subject_for_survey(){
        $subject =Subject::all();
        return view('admin.search_subject.show',compact('subject'));
    }
    
    public function show_survey_for_subject(Request $request){
        
        $q=$request->subject_id;
        $subject=Subject::find($q);
        $surveys=Survey::where('subject_id',$subject->id)->get();
        return view ('admin.search_subject.showsurvey',compact('q','surveys'));
}
    public function show_user_for_survey(){
        $users=User::all();
        return view('admin.answer.show',compact('users'));
    }
    public function pdf($q){
    
        $subject=Subject::find($q);
        $surveys=Survey::where('subject_id',$subject->id)->get();
        $pdf = PDF::loadView('admin.search_subject.showsurveypdf', compact('surveys'));
        return $pdf->download('invoice.pdf');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        //
    }
}