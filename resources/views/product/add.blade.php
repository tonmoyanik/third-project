@extends('master')

@section('title')
    Add Product Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-dark text-center text-white">
                            <h2>Add Product Form</h2>
                        </div>
                        <div class="card-body">
                            <p class="text-center">{{ Session::get('message') }}</p>
                            <form action="{{ 'new-product' }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Product Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Product Category</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="category"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Product Brand</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="brand"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Product Price</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="price"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Product Description</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Product Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control-file" name="image"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success" value="Create New Product"/>
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
