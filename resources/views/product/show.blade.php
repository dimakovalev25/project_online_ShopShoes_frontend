@extends('layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> show product</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title </th>
                            <th>Description </th>
                            <th>Article </th>
                            <th>Price </th>
                            <th>Count </th>
                            <th>Preview_image </th>
                            <th>Is_published </th>
                            <th>Edit </th>
                            <th>Delete </th>

                        </tr>
                        </thead>
                        <tbody>
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
                                {{$product->article}}
                            </td>
                            <td>
                                {{$product->price}}
                            </td>
                            <td>
                                {{$product->count}}
                            </td>
                            <td>
                                {{$product->preview_image}}
                            </td>
                            <td>
                                {{$product->is_published}}
                            </td>


                            <td>
                                <a href="{{route('product.edit', $product)}}">
                                    <button class="btn btn-success">edit</button>
                                </a>
                            </td>

                            <td>

                                <form method="post" action="{{ route('product.delete', [$product->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">delete product!!!</button>
                                </form>

                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

@endsection