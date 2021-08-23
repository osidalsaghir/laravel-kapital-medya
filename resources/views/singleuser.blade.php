
  @extends('layout.main')

  @section('content')
  
  
  
  
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{$singleuser["data"]["avatar"]}}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{$singleuser["data"]["first_name"]}} {{$singleuser["data"]["last_name"]}}</h5>
          <p class="card-text">{{$singleuser["data"]["email"]}}</p>
          <p class="card-text"><small class="text-muted">This is a single user page</small></p>
        </div>
      </div>
    </div>
  </div>


  

@stop