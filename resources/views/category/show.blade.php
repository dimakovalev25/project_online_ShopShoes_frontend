@extends('layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> show category</h1>
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
                            <th>ID Category</th>
                            <th>Title Category</th>
                            <th>Edit Category</th>
                            <th>Delete Category</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                {{$category->id}}
                            </td>
                            <td>
                                {{$category->title}}
                            </td>

                            <td>
                                <a href="{{route('category.edit', $category)}}">
                                    <button class="btn btn-success">edit</button>
                                </a>
                            </td>

                            <td>

                                <form method="post" action="{{ route('category.delete', [$category->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">delete category!!!</button>
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