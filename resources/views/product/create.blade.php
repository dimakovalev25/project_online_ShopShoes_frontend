@extends('layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>create product</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add new product</h3>
                    </div>

                    <form method="POST" action="{{ route('product.store') }}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product title</label>
                                <input name="title" type="text" class="form-control" placeholder="title">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Product description</label>
                                <textarea name="description" type="text" class="form-control" placeholder="description"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Product preview_image</label>
                                <input name="preview_image" type="text" class="form-control" placeholder="preview_image">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Product price</label>
                                <input name="price" type="number" class="form-control" placeholder="price">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Product count</label>
                                <input name="count" type="number" class="form-control" placeholder="count">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Product is_published?</label>
                                <div class="form-check">
                                    <input name="is_published" class="form-check-input" type="checkbox">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Product category</label>
                                <select name="category_id" multiple="" class="form-control">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>

                                    @endforeach

                                </select>
                            </div>


                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection