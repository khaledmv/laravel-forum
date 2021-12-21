
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 ">
            @foreach ($question as $questions)
            <div class="card mb-4">
                
                    
                
                  <div class="card-header">
                    Featured
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><a href="{{ $questions->url  }}">{{ $questions->title }}</a></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Asked by <a href="{{ $questions->user->url }}"> {{ $questions->user->name }} </a>
                        <small class="card-subtitle mb-2 text-muted"> {{ $questions->created_date }} </small>
                    </h6>
                    

                    <p class="card-text"> {{ Str::limit($questions->body, 200) }} </p>
                    <a href="{{ $questions->url }}" class="btn btn-primary">Show Details</a>
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