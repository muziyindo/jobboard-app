<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\JobPost;

class RecruiterController extends Controller
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
    public function createJob()
    {

        $pageTitle = "Post Job";
        return view('recruiter/createJob', compact('pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeJob(Request $request)
    {
        /*
        $jobPost = new JobPost();
        $jobPost->title = $request->input('jobTitle'); 
        $jobPost->recruiter_id = rand(1,100);
        $jobPost->description = $request->input('jobDescription'); 
        $jobPost->closing_date = $request->input('jobClosingDate'); 
        $jobPost->save();
        */

        //inserting record through this method, requires that you set $protected fillable in model, to all the allowed fields
        $jobPost = JobPost::create([
            'title'=>$request->input('jobTitle'),
            'description'=>$request->input('jobDescription'),
            'recruiter_id'=>rand(1,100),
            'closing_date'=>$request->input('jobClosingDate')
        ]);


        return redirect('/site/jobs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
