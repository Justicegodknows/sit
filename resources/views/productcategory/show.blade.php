@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Product Category Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $productCategory->name }}</h5>
            <p class="card-text"><strong>Description:</strong> {{ $productCategory->description }}</p>
            <p class="card-text"><strong>Created At:</strong> {{ $productCategory->created_at->format('Y-m-d') }}</p>
            <a href="{{ route('productcategory.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection