<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use App\Note;
use Auth;

class NoteController extends Controller
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
		$validator = Validator::make($request->all(), []);
		if($validator->fails()){}

		$note = new Note;
		$note->content = $request->note['content'];
		$noteboardGroup = Auth::user()->projects()->find($request->projectId)->noteboard->noteboardGroups->find($request->groupId);
		$noteboardGroup->notes()->save($note);
		return response()->json($note);
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
		$validator = Validator::make($request->all(), []);
		if($validator->fails()){}

		$noteboardGroup = Auth::user()->projects()->find($request->projectId)->noteboard->noteboardGroups->find($request->groupId);
		$note = $noteboardGroup->notes->find($id);
		$note->content = $request->note['content'];
		$note->save();
        return response()->json($note);
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
