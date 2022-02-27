@extends('master')

@section('title')
    Update Blog Page
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-dark text-center text-white">Edit Blog Form</div>
                        <div class="card-body">
                            <h1>{{Session::get('message')}}</h1>
                            <form action="{{route('update-blog', ['id'=>$blog->id])}}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Blog Title</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="title" value="{{$blog->title}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Author</label>
                                    <div class="col-md-9">
                                        <input type="text" name="author" class="form-control" value="{{$blog->author}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Description</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="description">{{$blog->description}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" readonly class="btn btn-outline-success"  value="Create New Blog" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
