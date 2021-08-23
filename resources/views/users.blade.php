@extends('layout.main')

@section('content')





    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach ($users['data'] as $user)
            <div class="col">
                <a href="/users/single/{{$user["id"]}}">
             
                <div class="card">
                    <img src={{$user["avatar"]}} class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$user["first_name"]}} {{$user["last_name"]}}  </h5>
                        <p class="card-text">{{$user["email"]}} email</p>
                    </div>
                </div>
                       
            </a>
            </div>
        @endforeach

    </div>
<br>
    {{-- <nav aria-label="...">
        <ul class="pagination pagination-lg">
             
            ${{users['total_pages']}}
            @for($i=1;$i < ${{users['total_pages']}};$i++)

          <li class="page-item active" aria-current="page">
            <span class="page-link">1</span>
          </li>
          <li class="page-item"><a class="page-link" href="#">i</a></li>
        </ul>
      </nav> --}}



@stop
