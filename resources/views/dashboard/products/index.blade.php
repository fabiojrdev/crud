@extends('dashboard.default.site')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 clearfix">
            <h2>Products</h2>
        </div>

    </div>
</div>

<br />
<br />

<div class="container">
    <div class="row">
        <div class="col-md-12">
            
            <table class="table table-priority table-dark table-hover table-responsive-sm">
                <thead>
                    <tr>
                        <th scope="col" id="table-name-products">#</th>
                        <th scope="col" id="table-name-products">Name</th>
                        <th scope="col" id="table-name-products">Category</th>
                        <th scope="col" id="table-name-products">Price</th>
                        <th scope="col" id="table-name-products">Inventory</th>
                        <th scope="col" id="table-name-products">Edit</th>
                        <th scope="col" id="table-name-products"><a href="{{route('site.createproduct')}}" class="btn btn-warning"><i class="bi bi-plus-square"></i></a></th>
                        <th scope="col" id="table-name-products"><a href="{{route('site.showproduct')}}" class="btn btn-warning"><i class="bi bi-question-square"></i></a></th>
                    </tr>
                </thead>
                @if(isset($products))
                @if(count($products) > 0)
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category }}</td>
                        <td>$ {{ $product->price }}</td>
                        <td>{{ $product->inventory }}</td>
                        <td><a href="{{ route('site.editproduct', ['id' => $product->id]) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a></td>
                        <td><a href="{{ route('site.delproduct', ['id' => $product->id]) }}" class="btn btn-danger"><i class="bi bi-trash"></i></a></td>
                        <td></td>
                    </tr>
                @endforeach
                @else

                                    <tr><td>Nenhum registro encontrado.</td></tr>
                                @endif
                    <!-- <tr>
                        <th scope="row">2</th>
                        <td>Iphone 12 ProMax</td>
                        <td>Smartphone</td>
                        <td>$ 799,90</td>
                        <td>5</td>
                        <td><button class="btn btn-primary"><i class="bi bi-pencil-square"></i></button></td>
                        <td><button class="btn btn-danger"><i class="bi bi-trash"></i></button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Xiaomi Note 10+</td>
                        <td>Smartphone</td>
                        <td>$ 399,90</td>
                        <td>5</td>
                        <td><button class="btn btn-primary"><i class="bi bi-pencil-square"></i></button></td>
                        <td><button class="btn btn-danger"><i class="bi bi-trash"></i></button></td>
                    </tr> -->
                </tbody>
            </table>
            @endif
</div>
    </div>
</div>
</div>


@endsection