@extends('master')

@section('title')
    Blogs Information
@endsection


@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">Blogs Information</div>
                        <div class="card-body">
                            <p class="text-success text-center">{{Session::get('message')}}</p>
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Sl. No</th>
                                    <th>Blog ID</th>
                                    <th>Blog title</th>
                                    <th>Author name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$blog->id}}</td>
                                        <td>{{$blog->title}}</td>
                                        <td>{{$blog->author}}</td>
                                        <td>{{$blog->description}}</td>
                                        <td>
                                            <a href="{{route('edit-blog',['id'=> $blog->id])}}" class="btn btn-outline-success btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="" class="btn btn-outline-danger btn-sm" onclick="deleteBlog({{$blog->id}})">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                            <form method="POST" action="{{route('delete-blog',['id'=> $blog->id])}}" id="deleteBlogForm{{$blog->id}}">
                                                @csrf
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function deleteBlog(id)
        {
            event.preventDefault();
            var check = confirm('Are you sure to delete this?');
            if(check)
            {
                document.getElementById('deleteBlogForm'+id).submit();
            }

        }
    </script>

@endsection
