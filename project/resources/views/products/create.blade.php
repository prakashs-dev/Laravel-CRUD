@extends('layouts.main')
@section('main')

<h5><i class="bi bi-file-plus-fill"></i> Add New Product</h5> <hr /> <nav class="my-3">
        <ol class="breadcrumb"> <li class="breadcrumb-item"><a href="/products">Home</a></li> <li
            class="breadcrumb-item active">Add New Product</li>
            </ol> </nav> <form action="/products/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6">
            <div class="row mb-3">
                <div class="col-md-12">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name"
                    class="form-control @if($errors->has('name')) {{'is-invalid'}} @endif " 
                    placeholder="Enter Product Name" value="{{old('name')}}"/> 
                    @if ($errors->has ('name')) 
                    <div class="invalid-feedback">{{$errors->first("name")}}</div>
                    @endif
            </div>
            </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3">
                <label for="mrp" class="form-label">M.R.P</label>
                <input type="text" name="mrp" id="mrp" class="form-control @if($errors->has('mrp')) {{'is-invalid'}}
                    @endif"
                    placeholder="Enter M.R.P" value="{{old('mrp')}}" /> 
                    @if ($errors->has ('mrp')) 
                    <div class="invalid-feedback">{{$errors->first("mrp")}}</div>
                    @endif
                </div>

                <div class="col-md-3">
                <label for="price" class="form-label">Selling Price</label>
                <input type=" text" name="price" id="price" class="form-control @if($errors->has('price'))
                {{'is-invalid'}} @endif" placeholder="Enter Selling Price" value="{{old('price')}}" />
                @if ($errors->has ('price')) 
                    <div class="invalid-feedback">{{$errors->first("price")}}</div>
                    @endif
                </div>
                </div>

                <div class="row mb-3">
                    <div class=" col-md-6">
                <label for="description" class="form-label"> Description</label>
                <textarea name="description" id="description" style="resize: none; height: 150px" class="form-control
                @if($errors->has('description')) {{'is-invalid'}} @endif" 
                placeholder="Enter Description">{{old('description')}}</textarea>
                @if ($errors->has ('description')) 
                    <div class="invalid-feedback">{{$errors->first("description")}}</div>
                    @endif
                </div>
                </div>

                <div class="row mb-3">
                <div class=" col-md-6">
                <label for="image" class="form-label">Product Image</label>
                <input type="file" name="image" id="image" class="form-control @if($errors->has('image'))
                {{'is-invalid'}} @endif"/>
                @if ($errors->has('image')) 
                    <div class="invalid-feedback">{{$errors->first("image")}}</div>
                    @endif
            </div>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-dark">Save Product</button>
                <button type="reset" class="btn btn-danger mx-4">Clear All</button>
            </div>
            </form>


            @endsection