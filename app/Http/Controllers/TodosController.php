<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$todos=Todo::All();
        $todos=Todo::orderBy('created_at','desc')->get();
        return view('Todos.index')->with('todos',$todos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Todos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'text'=>'required',
            'due'=>'required',
        ]);
        $todo=new Todo();
        $todo->tetx=$request->input('text');
        $todo->body=$request->input('body');
        $todo->due=$request->input('due');

        $todo->save();
        return redirect('/')->with('success','Todo created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return 123;
        $todo = Todo::find($id);
        return view('Todos.show')->with('todo',$todo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todo = Todo::find($id);
        return view('Todos.edit')->with('todo',$todo);
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
        $todo=Todo::find($id);
        $todo->tetx=$request->input('text');
        $todo->body=$request->input('body');
        $todo->due=$request->input('due');

        $todo->save();
        return redirect('/')->with('success','Todo updated');
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
