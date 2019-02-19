@extends('layouts.app')

@section('content')


<div class="container">
   
    <div class="row justify-content-center">
<!--       <div class="row">-->
       <div class="col-lg-6 col-lg-offset-3 mb-2 mt-3">
           <form action="{{route('todos.save', ['id' => $todo->id ]) }}" method="post">
              {{ csrf_field()}}
               <input type="text" class="form-control input-lg text-center" name="todo"  value = "{{$todo->body}}" placeholder="update todo...">
           </form>
       </div>
   </div>
    
    </div>
</div>
@endsection
