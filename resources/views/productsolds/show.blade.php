<x-site-layout>
<div class="container">
    <h1>Product Details</h1>
    @if(isset($product))
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text"><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
                <p class="card-text"><strong>Description:</strong> {{ $product->description }}</p>
                <p class="card-text"><strong>Sold At:</strong> {{ $product->sold_at }}</p>
            </div>
        </div>
        <a href="{{ route('productsold.index') }}" class="btn btn-secondary">Back to List</a>
    @else
        <p>Product not found.</p>
    @endif
</div>
</x-site-layout>