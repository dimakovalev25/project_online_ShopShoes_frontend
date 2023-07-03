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

                    <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
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
                                <label for="exampleInputEmail1">Product article</label>
                                <input name="article" type="text" class="form-control" placeholder="description"></input>
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
                                <label for="exampleInputFile">Choose image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input name="preview_image" type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Product brand</label>
                                <select name="brand" multiple="" class="form-control">
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->title}}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <label>Product category</label>
                                <select name="category_id" multiple="" class="form-control">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>

                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <label>Product tags</label>
                                <select name="tags[]" multiple="" class="form-control">
                                    @foreach($tags as $tag)
                                        <option value="{{$tag->id}}">{{$tag->title}}</option>

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