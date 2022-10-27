@extends('dashboard.default.site')

@section('content')


<div class="container">
    <div class="row">

        <div class="col-md-12">
            <p> Edit product - You editing product:</p>
            <h6 class="editing"> ID: {{$product->id}} |   Name: {{$product->name}} </h6>
        </div>
        <form class="" action="{{route('site.updateproduct',$product->id)}}" method="post">
        @csrf
            <div class="row">
        <div class="col-6">
            <br />
            <input class="form-control" type="text" name="nameProduct" placeholder="Product name" maxlength="32" required value='{{$product->name}}'>
            <br />
            <input class="form-control" type="text" name="priceProduct" placeholder="Price" maxlength="11" required value='{{$product->price}}'>
            <br />
            <input class="form-control" type="text" name="categoryProduct" placeholder="Category product" maxlength="11" required value='{{$product->category}}'>
            <br />
            <input class="form-control" type="text" name="inventoryProduct" placeholder="Inventory" maxlength="11" required value='{{$product->inventory}}'>
        </div>
        <!-- <br/>
        <div class="col-12">
            <input class="form-control" type="text" name="priceProduct" placeholder="Price" maxlength="11" required value='{{$product->price}}'>
        </div>
        <br />
        <div class="col-12">
            <input class="form-control" type="text" name="categoryProduct" placeholder="Category product" maxlength="11" required value='{{$product->category}}'>
        </div>
        <br />
        <div class="col-12">
            <input class="form-control" type="text" name="inventoryProduct" placeholder="Inventory" maxlength="11" required value='{{$product->inventory}}'>
        </div>
        <br /> -->
        <div class="col-12">
            <br />
            <button class="btn btn-warning" type="submit">Edit product</button>
        </div>
            </div>
        </form>
    </div>
</div>

@endsection