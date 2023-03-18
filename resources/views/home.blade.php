@extends('master')


@section('content')
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-1">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Product list</h4>
                            <h5>{{ session('message') }}</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive table-bordered table-hover">
                                <tr class="table table-active">
                                    <th >Serial</th>
                                    <th>name</th>
                                    <th>Category ID</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                @php $i=1 @endphp
                                @foreach($products as $product)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product-> cat_id}}</td>
                                    <td>{{ $product-> price}}</td>
                                    <td>
                                        <img src="{{ asset($product->image) }}" class="img-fluid">
                                    </td>
                                    <td>{{ $product->description }}</td>
                                    <td class=" btn btn-control">
                                        <a href="{{ route('edit.product',['id'=>$product->id]) }}" class="btn btn-primary" >Edit</a>

                                        <form action="{{ route('delete.product') }}" method="post" class="btn">
                                            @csrf
                                            <input type="hidden" value="{{ $product->id }}" name="id">
                                            <button type="submit" class="btn btn-danger" onclick=" return confirm('are you sure?')">Delete</button>
                                        </form>

                                    </td>
                                </tr>
                                @endforeach

                            </table>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
