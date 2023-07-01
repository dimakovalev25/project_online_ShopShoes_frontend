@extends('layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>categories</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Add new category</h3>
        </div>

        <form method="POST" action="{{ route('category.store') }}">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Category title</label>
                    <input name="title" type="text" class="form-control" placeholder="title">
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
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
                                        <th>ID Category</th>
                                        <th>Title Category</th>
                                        <th>Show Category</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($categories as $category)
                                        <tr>
                                            <td>
                                                {{$category->id}}
                                            </td>
                                            <td>
                                                {{$category->title}}
                                            </td>

                                            <td>
                                                <a href="{{route('category.show', $category)}}">
                                                    <button class="btn btn-info">show</button>
                                                </a>
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