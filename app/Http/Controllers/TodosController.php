<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){
        
        $todos = Todo::all();
        return view('todos')->with('todos', $todos);
    }
    public function store(Request $request){
//    
//        dd($request);

        
        $todo = new Todo;

        $todo->body = $request->todo;
        $todo->user_id = Auth::user()->id;
        $todo->save();
        
        
        return redirect()->back();
    }
    
    public function delete($id){
        $todo = Todo::find($id);
        
        $todo->delete();
        
        return redirect()->back();
    }
}
