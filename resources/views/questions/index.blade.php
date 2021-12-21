
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            @foreach ($question as $questions)
            <div class="card mb-4">
                
                    
                
                  <div class="card-header">
                    Featured
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">{{ $questions->title }}</h5>
                    <p class="card-text"> {{ Str::limit($questions->body, 200) }} </p>
                    <a href="#" class="btn btn-primary">Show Details</a>
                  </div>
                  
            </div>
            @endforeach
             

              <div class="d-flex justify-content-center">
                {!! $question->links() !!}
             </div>
              
        </div>
    </div>
</div>
@endsection