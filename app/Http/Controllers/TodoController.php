<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Todo;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$todos = Todo::all();
        $todos = DB::select("select id,task from todos order by id asc");
        return response()->json($todos, 200) ;
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $todo = new Todo();
        // $todo->task = $request->input('task'); 
        // $todo->save();

        $todo = Todo::create([
            'task'=>$request->input('task'),
        ]);

        if($todo){
            $todos = DB::select("select id,task from todos order by id asc");
            return response()->json($todos, 200) ;
        }

        //return response()->json($todo, 200) ;
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
    public function delete($id)
    {
        $del = DB::delete("delete from todos where id = ?",[$id]);
        if($del == 1){
            $todos = DB::select("select id,task from todos order by id asc");
            return response()->json($todos, 200) ;
        }
        else{

            return response()->json([
                'message' => 'Nothing to delete'
            ], 404);
            
        }
        
    }
}
