
@extends('master')


@section('content')
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-1">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Add Category</h4>
                            <h5>{{ session('message') }}</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('add.category') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row my-3">
                                    <label class="col-form-label col-md-3" for=""> Category Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="cat_name" class="form-control" placeholder="Name">
                                    </div>
                                </div>

                                <div class="form-group row my-3">
                                    <lavel class="col-form-label col-md-3" for="">Category Id</lavel>
                                    <div class="col-md-9">
                                        <input type="text" name="cat_id" class="form-control" placeholder="ID">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <div class="col-md-12">
                                        <input type="submit" value="Save Info" class="form-control btn btn-primary" placeholder="">
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
