@extends('master')

@section('title')
    Update Student Information
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-dark text-center text-white">Update Student Information</div>
                        <div class="card-body">
                            <h1>{{Session::get('message')}}</h1>
                            <form action="{{route('update-student', ['id'=>$student->id])}}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" value="{{$student->name}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" name="email" class="form-control" value="{{$student->email}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Mobile</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="mobile" value="{{$student->mobile}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" readonly class="btn btn-outline-success"  value="Update Student Info" />
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
