@extends('dashboard.default.site')

@section('content')


<div class="container">
    <div class="row">

        <div class="col-md-12">
            <p> Create product.</p>
        </div>
        <form class="" action="{{route('site.create')}}" method="post">
        {{csrf_field()}}
            <div class="row">
        <div class="col-6">
            <br />
            <input class="form-control" type="text" name="nameProduct" placeholder="Product name" maxlength="32" required>
            <br/>
            <input class="form-control" type="text" name="priceProduct" placeholder="Price" maxlength="11" required>
            <br />
            <input class="form-control" type="text" name="categoryProduct" placeholder="Category product" maxlength="11" required>
            <br />
            <input class="form-control" type="text" name="inventoryProduct" placeholder="Inventory" maxlength="11" required>
        </div>
        <!-- <br/>
        <div class="col-12">
            <input class="form-control" type="text" name="priceProduct" placeholder="Price" maxlength="11" required>
        </div>
        <br />
        <div class="col-12">
            <input class="form-control" type="text" name="categoryProduct" placeholder="Category product" maxlength="11" required>
        </div>
        <br />
        <div class="col-12">
            <input class="form-control" type="text" name="inventoryProduct" placeholder="Inventory" maxlength="11" required>
        </div> -->
        <div class="col-12">
        <br />
            <button class="btn btn-warning" type="submit">Create product</button>
        </div>
            </div>
        </form>
    </div>
</div>

@endsection