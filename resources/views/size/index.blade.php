@extends('layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sizes</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-primary">
{{--        <div class="card-header">--}}
{{--            <h3 class="card-title">Add new category</h3>--}}
{{--        </div>--}}

        <form method="POST" action="{{ route('size.store') }}">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Add new size</label>
                    <input name="size" type="text" class="form-control" placeholder="size">
                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                </div>

{{--                <div class="card-footer">--}}
{{--                </div>--}}
            </div>
        </form>
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
                                        <th>ID </th>
                                        <th></th>
                                        <th> Size</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($sizes as $size)
                                        <tr>
                                            <td>
                                                {{$size->id}}
                                            </td>
                                            <td></td>
                                            <td>
                                                {{$size->size}}
                                            </td>

                                            <td>
                                                <a href="{{route('size.show', $size)}}">
                                                    <button class="btn btn-info">show</button>
                                                </a>
                                            </td>

                                            <td>
                                                <a href="{{route('size.edit', $size)}}">
                                                    <button class="btn btn-success">edit</button>
                                                </a>
                                            </td>

                                            <td>
                                                <form method="post" action="{{ route('size.delete', [$size->id]) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger">delete size!!!</button>
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