@extends('master')


@section('content')
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-1">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Add Product</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('add.product') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row my-3">
                                    <label class="col-form-label col-md-3" for="">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="name" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <lavel class="col-form-label col-md-3" for="">Category Id</lavel>
                                    <div class="col-md-9">
                                        <select name="cat_id" id="" class="form-control" >
                                            <option value="">Select a Category Id</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->cat_id }}">{{ $category->cat_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label class="col-form-label col-md-3" for="">Price</label>
                                    <div class="col-md-9">
                                        <input type="text" name="price" class="form-control" placeholder="Price">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <lavel class="col-form-label col-md-3" for="">Image</lavel>
                                    <div class="col-md-9">
                                        <input type="file" name="image" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <lavel class="col-form-label col-md-3" for="">Description</lavel>
                                    <div class="col-md-9">
                                        <textarea name="description" id="" class="form-control" ></textarea>
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <div class="col-md-12">
                                        <input type="submit" value="save info" class="form-control btn btn-primary" placeholder="">
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
