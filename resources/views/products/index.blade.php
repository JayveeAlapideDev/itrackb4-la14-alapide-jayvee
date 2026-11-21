@extends('layouts.app')

@section('title', 'All Products')
@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Products</h3>

    
    <a href="{{ route('products.create') }}" class="btn btn-primary">+Add Product</a>
    
</div>
 


<nav>
    <h6>BRAND</h6>
    <a href="{{ route('products.index') }}">ALL</a> |
    @foreach ($brands as $brand)
    <a href="{{ route('products.index', ['brand_id' => $brand->id]) }}">{{ strtoupper($brand->name) }}</a> |

    @endforeach
</nav>

<form method="GET" action="{{ route('products.index') }}"
 class="d-flex flex-wrap align-items-center gap-2 mb-3">
    <input type="text" name="search" value="{{ request('search') }}"
     class="form-control w-auto" placeholder="Search">


    <select name="brand_id" class="form-select w-auto">
        <option value="">All Brands</option>
        @foreach ($brands as $brand)
        <option value="{{ $brand->id }}"
            @selected(request('brand_id')==$brand->id)>{{ $brand->name }}</option>
        @endforeach
    </select>

    <select name="sort" class="form-select w-auto">
        <option value="name" @selected(request('sort')==='name' )>Sort by Name</option>
        <option value="package" @selected(request('sort')==='package' )>Sort by Package</option>
    </select>


    <button type="submit" class="btn btn-primary">Filter</button>
    <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">Clear</a>
</form>


<table class="table table-borderd table-striped" border="1" cellpadding="8">
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Brand</th>
        <th>Package</th>
        
        <th>Action</th>
        
    </tr>

    @foreach ($products as $product)
    <tr>
        <td><a href="{{ route('products.show', $product['id'])}}"> {{ $product['name']}}</a></td>
        <td>{{ $product['price'] }}</td>
        <td>{{ $product['stock'] }}</td>
        <td>{{ $product->brand->name }}</td>
        <td>{{ $product['package'] }}</td>

        
        <td>
            <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-outline-primary">Edit</a>
            <form action="{{ route('products.destroy', $product) }}" method="POST"
                onsubmit="return confirm('SIGURADO KA?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
        

    </tr>
    @endforeach
</table>
{{ $products->links() }}

@endsection