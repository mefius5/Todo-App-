@extends('layouts.app')

@section('content')


<div class="container">
   
    <div class="row justify-content-center">
<!--       <div class="row">-->
       <div class="col-lg-6 col-lg-offset-3 mb-2">
           <form action="/create/todo" method="post">
              {{ csrf_field()}}
               <input type="text" class="form-control input-lg text-center" name="todo" placeholder="your new todo...">
           </form>
       </div>
   </div>
        <div class="col-md-12">
            <h1>Your todos:</h1>
            <div class="todo mb-3">
               
                @foreach (Auth::user()->todos as $todo)
                  <div class="row">
                      <div class="card card-body">
                           <h4 class="card-title">{{$todo->body }}</h4>
                           <div class="bg-light">{{$todo->created_at}}</div>
                            
                       </div>
                       <a href="{{ route('todo.delete' , ['id' => $todo->id]) }}"><i class="far fa-times-circle fa-2x mt-3 mr-3"></i></a>
                       
                        <a href="{{ route('todo.update' , ['id' => $todo->id]) }}"><i class="fas fa-edit fa-2x mt-3 mr-3"></i></a>
                        @if(!$todo->completed)
                            <a href="{{route('todos.completed', ['id' => $todo->id])}}"><i class="fas fa-check fa-2x mt-3"></i></a>
                        @else
                           <h3 class = "mt-3">Completed</h3>
                            
                        @endif

                  </div>
                  
                  <hr class="mt-0 mb-0">
                   
                    @endforeach
            </div>
            
        </div>
    </div>
</div>
@endsection
