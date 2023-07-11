@extends('layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> show size</h1>
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
                            <th>ID Size</th>
                            <th>Size</th>
                            <th>Edit Size</th>
                            <th>Delete Size</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                {{$size->id}}
                            </td>
                            <td>
                                {{$size->size}}
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

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

@endsection