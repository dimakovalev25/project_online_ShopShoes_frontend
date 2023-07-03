@extends('layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> show brand</h1>
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
                            <th>ID Brand</th>
                            <th>Title Brand</th>
                            <th>Edit Brand</th>
                            <th>Delete Brand</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                {{$brand->id}}
                            </td>
                            <td>
                                {{$brand->title}}
                            </td>

                            <td>
                                <a href="{{route('brand.edit', $brand)}}">
                                    <button class="btn btn-success">edit</button>
                                </a>
                            </td>

                            <td>

                                <form method="post" action="{{ route('brand.delete', [$brand->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">delete brand!!!</button>
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