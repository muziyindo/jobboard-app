<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobPost;

use Illuminate\Support\Facades\DB; //must import to use DB

class JobController extends Controller
{
    //
    function index(){

        $pageTitle = "Ideal Job Board";
        return view('job/index',compact('pageTitle'));
    }

    function about(){

        $pageTitle = "About us";
        return view('job/about',compact('pageTitle'));
    }

    function signup(){

        $pageTitle = "Sign Up";
        return view('job/signup',compact('pageTitle'));
    }

    function login(){

        $pageTitle = "Login";
        return view('job/login',compact('pageTitle'));
    }

    //display the job creation form
    public function createJob()
    {

        $pageTitle = "Post Job";
        return view('job.createJob', compact('pageTitle'));
    }

    //insert Job into db table
    public function storeJob(Request $request)
    {
        //'email' => 'required|unique:cars', - where cars is the table name

        $request->validate([
            
            'jobTitle' => 'required',
            'jobDescripton' => 'required',
            'jobClosingDate' => 'required'
        ]);

        $jobPost = new JobPost();
        $jobPost->title = $request->input('jobTitle'); 
        $jobPost->recruiter_id = rand(1,100);
        $jobPost->description = $request->input('jobDescription'); 
        $jobPost->closing_date = $request->input('jobClosingDate'); 
        $jobPost->save();
        

        /*
        //inserting record through this method, requires that you set $protected fillable in model, to all the allowed fields
        $jobPost = JobPost::create([
            'title'=>$request->input('jobTitle'),
            'description'=>$request->input('jobDescription'),
            'recruiter_id'=>rand(1,100),
            'closing_date'=>$request->input('jobClosingDate')
        ]);
        */

        return redirect('/job/jobs');
    }

    function jobs(){

        //$jobs = DB::select("select * from job_posts order by created_at desc ");
        //$jobs = JobPost::where("id","=","14")->get(); //select * from job_post where id = "14"

        $jobs = JobPost::all(); //equivalent to (select * from job_posts)
        //dd($jobs->toArray());
        //$json_data = $jobs->toJson();
       // dd(json_decode($json_data));


            $pageTitle = "Available Jobs";
            return view('job/jobs',compact('jobs','pageTitle'));
    }

    function jobDetails($id){

        
        //$jobDetails = DB::select("select * from job_posts where id = ?",[$id]);
        //$jobDetails = JobPost::where("id","=",$id)->firstOrFail(); //returns first row where id=$id or return page not n=found
        
        //print_r(JobPost::where("id",$id)->count()); //return a count of records where is id = $id
        //print_r(JobPost::all()->count()); //return a count of all records
        //print_r(JobPost::sum('id')); //return a sum of all values in id column

        //dd($jobDetails);

        $jobDetails = JobPost::where("id","=",$id)->get(); 
        $pageTitle = $jobDetails[0]->title ;
        return view('job/jobDetails', compact('jobDetails','pageTitle'));
        

    }

    public function show($id)
    {
        //
    }

    
    public function editJob($id)
    {

        $jobDetails = DB::select("select * from job_posts where id = ?", [$id]);
        $pageTitle = "Edit Job";

        //dd($jobDetails);
        return view('job.editJob',compact('pageTitle','jobDetails'));
    }

    public function updateJob(Request $request, $id)
    {
        $jobPost = JobPost::where('id',$id)->update([
            'title'=>$request->input('jobTitle'),
            'description'=>$request->input('jobDescription'),
            //'recruiter_id'=>rand(1,100),
            'closing_date'=>$request->input('jobClosingDate')
        ]);

        return redirect('/job/jobs');
    }

    
    public function deleteJob($id )
    {
        $deleted = DB::delete("delete from job_posts where id = ?",[$id]);
        //dd($deleted);
        return redirect('/job/jobs');
    }


}
