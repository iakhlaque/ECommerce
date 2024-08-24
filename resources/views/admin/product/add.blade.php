@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4> Add Product</h4> </div>
        <div class="card-body">
            <form action="{{ url('insert-product') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select class="form-select" name="cate_id" >
                            <option value="">Select a Category</option>
                            @foreach ($category as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="col-med-6">
                        <label>Slug</label>
                        <input type="text" class="form-control" name="slug">
                    </div>
                    <div class="col-med-6">
                        <label>Small_Desc</label>
                        <input type="text" class="form-control" name="small_desc">
                    </div>
                    <div class="col-md-12">
                    <textarea name="desc"  rows="3" class="form-control"></textarea>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Original_Price</label>
                    <input type="number" class="form-control" name="original_price">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Selling_Price</label>
                    <input type="number" class="form-control" name="selling_price">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Tax</label>
                    <input type="number" class="form-control" name="tax">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Quantity</label>
                    <input type="number" class="form-control" name="qty">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Status</label>
                    <input type="checkbox" name="status">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Trending</label>
                    <input type="checkbox" name="trending">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Meta_Title</label>
                    <input type="text" class="form-control" name="meta_title">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Meta_Desc</label>
                    <input type="text" class="form-control" name="meta_desc" rows="3">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Meta_Keywords</label>
                    <input type="text" class="form-control" name="meta_keywords" rows="3">
                </div>
                <div class="col-md-12">
                    <input type="file" name="image" class="form_control">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </div>
            </form>
            </div>        
    </div>
@endsection