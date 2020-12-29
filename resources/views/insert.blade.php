@extends('view')
@section('title')
insertpage
@endsection
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card bg-light">
                <div class="card-header text-center  text-white bg-danger">
                    Insert Records of book
                </div>
                <div class="card-body">
                    <form action="{{route('book.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for=" ">title</label>
                            <input type="text" class="form-control" name="title" value="{{old('title')}}">
                            <small class="text-danger">{{$errors->first('title')}}</small>
                        </div>
                        <div class="form-group">
                            <label for=" ">author</label>
                            <input type="text" class="form-control" name="author" value="{{old('author')}}">
                            <small class="text-danger">{{$errors->first('author')}}</small>
                        </div>
                        <div class="form-group">
                            <label for="">publication</label>
                            <input type="text" class="form-control" name="publication" value="{{old('publication')}}">
                            <small class="text-danger">{{$errors->first('publication')}}</small>
                        </div>
                        <div class="form-group">
                            <label for=" ">description</label>
                            <textarea name="description" id="" cols=" " rows="10" class="form-control"></textarea>
                            <small class="text-danger">{{$errors->first('description')}}</small>
                        </div>
                        <div class="form-group">
                            <label for=" ">cover</label>
                            <input type="file" class="form-control" name="cover" value="{{old('cover')}}">
                            <small class="text-danger">{{$errors->first('cover')}}</small>
                        </div>
                        <div class="form-group">
                            <label for=" ">isbn_no</label>
                            <input type="text" class="form-control" name="isbn_no" value="{{old('isbn_no')}}">
                            <small class="text-danger">{{$errors->first('isbn_no')}}</small>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-danger btn-block" >
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
