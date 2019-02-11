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
        <div class="col-md-8">
            <h1>Your todos:</h1>
            <div class="todo mb-3">
               
                @foreach (Auth::user()->todos as $todo)
                  <div class="row">
                      <div class="card card-body mb-1">
                           <h4 class="card-title">{{$todo->body }}</h4>
                           <div class="bg-light">{{$todo->created_at}}</div>
                            
                       </div>
                       <button class="btn btn-delete"><i class="far fa-times-circle fa-3x"></i></button>
                      
                  </div>
                   
                    @endforeach
            </div>
            
        </div>
    </div>
</div>
@endsection
