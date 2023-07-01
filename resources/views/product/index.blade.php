@extends('layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Products</h1>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="{{route('product.create')}}">Create new product</a>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Count</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($products as $product)
                                        <tr>
                                            <td>
                                                {{$product->id}}
                                            </td>
                                            <td>
                                                {{$product->title}}
                                            </td>
                                            <td>
                                                {{$product->description}}
                                            </td>
                                            <td>
                                                {{$product->price}}
                                            </td>
                                            <td>
                                                {{$product->count}}
                                            </td>

                                            <td>
                                                <a href="{{route('product.show', $product)}}">
                                                    <button class="btn btn-info">show</button>
                                                </a>
                                            </td>

                                            <td>
                                                <a href="{{route('product.edit', $product)}}">
                                                    <button class="btn btn-success">edit</button>
                                                </a>
                                            </td>

                                            <td>
                                                <form method="post"
                                                      action="{{ route('product.delete', [$product->id]) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger">delete product!!!</button>
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
        </div>
    </section>

@endsection