@extends('layouts.main')
@section('main')
<h5><i class="bi bi-tags-fill"></i> Product Details</h5>
<hr />
<nav class="my-2">
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/products">Home</a></li>
    <li class="breadcrumb-item active">View Product</li>
</ol>
</nav>

<div class="card">
    <img src="/pictures/{{$product->image}}"
        alt="{{$product->name}}" class="card-img-top" />
    <div class="card-body">
        <h5 class="card-title fw-bold">{{$product->name}}</h5>

        <p class="card-text text-secondary">
        {{$product->description}}
        </p>
        <p class="fw-bold">
            M.R.P
            <small class="text-danger text-decoration-line-through">Rs.{{$product->mrp}}</small>
        </p>
        <p class="fw-bold">
            Selling Price <small class="text-success">Rs.{{$product->price}}</small>
        </p>
    </div>
</div>



@endsection