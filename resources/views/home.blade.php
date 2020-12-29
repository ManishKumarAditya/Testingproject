@extends('view')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3">
            <div class="list-group mt-5">
                <a href="" class=" list-group-item list-group-item-action bg-danger text-white">Book Categories:-</a>
                <a href="" class=" list-group-item list-group-item-action bg-dark text-white">Action and Adventure</a>
                <a href="" class="list-group-item list-group-item-action bg-dark text-white ">Classics</a>
                <a href="" class="list-group-item list-group-item-action bg-dark text-white">Comic Book or Graphic Novel</a>
                <a href="" class="list-group-item list-group-item-action bg-dark text-white">FDetective and Mystery</a>
                <a href="" class="list-group-item list-group-item-action bg-dark text-white">Historical Fiction.</a>
                <a href="" class="list-group-item list-group-item-action bg-dark text-white">Literary Fiction</a>
                <a href="" class="list-group-item list-group-item-action bg-dark text-white">Technical Institutes and Professional</a>
                <a href="" class="list-group-item list-group-item-action bg-dark text-white">Computers</a>
                <a href="" class="list-group-item list-group-item-action bg-dark text-white">Software-programming</a>
            </div>
        </div>
        <div class="col-lg-9 mt-3">
            <div class="row">
                @foreach ($records  as $p)
                <div class="col-lg-6">
                    <div class="card mt-3 bg-light">
                        <div class="card-header bg-info">
                            <h5 class="text-white ">(Publication):-{{$p->publication}}</h5>
                        </div>
                        <div class="card-body bg-light">
                            <img src="{{asset('images/' .$p->cover)}}" alt="" class="float-right" height="180px"
                                width="200px">
                            <h4 class="">{{$p->title}}</h4>
                            <hr>
                            <h6 class="">ISBN NO:-{{$p->isbn_no}}</h6>
                            <h6 class="lead text-danger">Author Name:-{{$p->author}}</h6>
                            <hr>
                            <h6 class="lead">
                                <h5 class="text-warning">Description:-</h5>{{$p->description}}
                            </h6>
                           <div class="row mt-2 ml-2 float-right">
                            <a href="" class="btn btn-success mr-2">Buy now</a>
                            <form action="{{route('book.destroy',['book'=>$p->id])}}" method="POST">
                            @csrf
                            @method("delete")
                            <input type="submit" value="delete" class="btn btn-danger float-right">
                        </form>
                           </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>  
        </div>
    </div>

</div>
@endsection
