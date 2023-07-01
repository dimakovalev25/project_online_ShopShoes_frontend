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

                <form method="POST" action="{{ route('product.update', $product) }}">
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
                            <label for="exampleInputEmail1">Product preview_image</label>
                            <input  value="{{$product->preview_image}}" name="preview_image" type="text" class="form-control" placeholder="preview_image">
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
                            <label for="exampleInputEmail1">Product is_published?</label>
                            <div class="form-check">
                                <input value="{{$product->is_published}}"  name="is_published" class="form-check-input" type="checkbox">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Product category</label>
                            <select value="{{$product->category_id}}" name="category_id" multiple="" class="form-control">

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

{{--                <form method="POST" action="{{ route('product.update', $product) }}">--}}
{{--                    @csrf--}}
{{--                    @method('PATCH')--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="exampleInputEmail1">Category title</label>--}}
{{--                            <input value="{{$category->title}}" name="title" type="text" class="form-control" >--}}
{{--                        </div>--}}

{{--                        <div class="card-footer">--}}
{{--                            <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}


            </div>
        </div>
    </section>

@endsection