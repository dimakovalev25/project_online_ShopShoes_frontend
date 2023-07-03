@extends('layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>edit product</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <form method="POST" action="{{ route('product.update', $product) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product title</label>
                            <input value="{{$product->title}}" name="title" type="text" class="form-control" placeholder="title">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Product description</label>
                            <input value="{{$product->description}}" name="description" type="text" class="form-control" placeholder="description"></input>
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
                            <label for="exampleInputEmail1">Product price</label>
                            <input  value="{{$product->price}}" name="price" type="number" class="form-control" placeholder="price">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Product count</label>
                            <input value="{{$product->count}}" name="count" type="number" class="form-control" placeholder="count">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Product article</label>
                            <input value="{{$product->article}}" name="article" type="text" class="form-control" placeholder="description"></input>
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">Product is_published?</label>
                            <div class="form-check">
                                <input value="{{$product->is_published}}"  name="is_published" class="form-check-input" type="checkbox">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Product brand</label>
                            <select value="{{$product->brand}}"  name="brand" multiple="" class="form-control">
                                @foreach($brands as $brand)
                                    <option value="{{$brand->id}}">{{$brand->title}}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="form-group">
                            <label>Product category</label>
                            <select value="{{$product->category_id}}" name="category_id" multiple="" class="form-control">

                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="form-group">
                            <label>Product tags</label>
                            <select  name="tags[]" multiple="" class="form-control">
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
    </section>

@endsection