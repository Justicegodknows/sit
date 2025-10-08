@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Sold Products</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Sold At</th>
                <th>Price</th>
                <th>Buyer</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->sold_at }}</td>
                    <td>${{ number_format($product->price, 2) }}</td>
                    <td>{{ $product->buyer_name }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No sold products found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection