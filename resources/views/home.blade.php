@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Your todos:</h1>
            <div class="todo mb-3">
               
                @foreach (Auth::user()->todos as $todo)
                   <div class="card card-body mb-3">
                       <p class="card-text">{{$todo->id }}</p>
                       
                   </div>
                    @endforeach
            </div>
            
        </div>
    </div>
</div>
@endsection
