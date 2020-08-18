<?php

namespace App\Http\Controllers;

use App\Answer;
use App\User;
use App\Question;
use App\Subject;
use Illuminate\Http\Request;

class AnswerController extends Controller
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
    public function create_answer(Question $question,$id)
    {
        $subject=Subject::find($id);
        $type_one=$question->where('type','المقرر')->get();
        $type_two=$question->where('type','مذكره كتاب المقرر')->get();
        $type_three=$question->where('type','اداره العمليه التعليميه بالقسم')->get();
        $type_four=$question->where('type','استاذ الماده')->get();
        return view('answer.create',compact('subject','type_one','type_two','type_three','type_four'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $subject=$request->subject_id;
            $inputs=$request->except('_method','_token','subject_id');
            foreach($inputs as $key=>$value){
            Answer::create(['question_id'=>$key,'subject_id'=>$subject,'rate'=>$value]);
            }
       
            return redirect()->route('survey.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function show($user,Answer $answer)
    {
        $users=User::find($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function edit(Answer $answer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Answer $answer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answer $answer)
    {
        //
    }
   
}