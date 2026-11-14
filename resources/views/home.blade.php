@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="p-5 mb-4 bg-white rounded-3 shadow-sm">
        <h2 class="fw-bold">Products Records</h2>
        <p class="text-muted mb-4">A simple list of all products in the inventory.</p>

        <a href="{{ route('products.index') }}" class="btn btn-primary">View Products

        </a>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-sm-6"">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <div class="text-muted">Total Products</div>
                    <div class="display-6 fw-bold">{{ $productCount }}</div>
                </div>
            </div>
        </div>

         <div class="col-sm-6"">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <div class="text-muted">Total Brands</div>
                    <div class="display-6 fw-bold">{{ $brandCount }}</div>
                </div>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-body d-flex align-items-center gap-4">
                <img src="{{ asset('image/IMG.jpg') }}" width="96" height="96"
                 class="rounded-circle object-fit-cover mb-3">
                 
                 <div>
                <h5 class="card-title">Jayvee E. Alapide</h5>
                <div class="card-text">BSIT - 4th Year - Block 4C</div>
            </div>
            </div>
        </div>
@endsection