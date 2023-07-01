@extends('layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> show tag</h1>
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
                            <th>ID Tag</th>
                            <th>Title Tag</th>
                            <th>Edit Tag</th>
                            <th>Delete Tag</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                {{$tag->id}}
                            </td>
                            <td>
                                {{$tag->title}}
                            </td>

                            <td>
                                <a href="{{route('tag.edit', $tag)}}">
                                    <button class="btn btn-success">edit</button>
                                </a>
                            </td>

                            <td>

                                <form method="post" action="{{ route('tag.delete', [$tag->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">delete tag!!!</button>
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