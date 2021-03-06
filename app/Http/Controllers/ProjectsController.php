<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Projects;

class ProjectsController extends Controller
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
         return view('projects.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        $pr = new Projects;
        $pr->title = $request->input('title');
        $pr->description = $request->input('description');
        $pr->reference = $request->input('reference');
        $pr->user_id = $user->id;

        $pr->save();

        $pr = $user->projects;

        return view('projects.create',compact('pr'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       $user = Auth::user();
           $pr = $user->projects;
           
        return view('projects.show',compact('pr'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pr = Projects::whereUserId(Auth::user()->id)->whereId($id)->first();
        return view('projects.edit',compact('pr'));
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
        $user = Auth::user();

        $pr = Projects::findOrFail($id);
        $pr->title = $request->input('title');
        $pr->description = $request->input('description');
        $pr->reference = $request->input('reference');
        $pr->user_id = $user->id;

        $pr->save();

        $pr = $user->projects;

        return redirect('projects/show')->with('status','Projects successfully updated');
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
