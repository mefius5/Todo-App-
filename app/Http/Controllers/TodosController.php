<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){
        
        
        $todos = Todo::where("user_id", "=", Auth::user()->id)->paginate(5);
//        dd($todos);
        return view('home', ['todos' => $todos]);
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
    
    public function update($id){
        $todo = Todo::find($id);
        return view('update')->with('todo', $todo);
    }
    
    public function save(Request $request, $id){
        $todo = Todo::find($id);
        
        $todo->body = $request->todo;
        $todo->save();

        
        return redirect()->route('home');
    }
    
    public function completed($id){
        $todo = Todo::find($id);
        $todo->completed = 1;
        $todo->save();
        
        
        return redirect()->back();
    }
    
    
}
