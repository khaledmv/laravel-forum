
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
           
            <div class="card mb-4">
                
                    
                
                  <div class="card-header">
                    Featured
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">{{ $question->title }}</h5>
                   
                    <p class="card-text"> {{ $question->body }} </p>
                    
                  </div>
                  
            </div>
           
             

             
              
        </div>
    </div>
</div>
@endsection