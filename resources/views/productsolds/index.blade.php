<x-site-layout>
<div class="container border-2 border-black rounded-lg p-4, bottom-2">
    <a href="{{ route('productsolds.index') }}" class="btn btn-secondary">Back to Products</a>
    |
    <a href="{{ route('productsolds.create') }}" class="btn btn-primary">Create Product</a>
</div>


<div class="container text-center, text-white, bg-black, font-bold, text-2xl">
    <h1>Sold Products</h1>
</div>



<div class="container text-center, text-white, bg-black, font-bold, text-2xl">
    <h1>Sold Products</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Sold At</th>
                <th>Customer</th>
            </tr>
        </thead>
    </table>
    </div>

</div>

<div class="container border-2 border-black rounded-lg p-4, bottom-2">
    @if(isset($productsolds) && $productsolds->count() > 0)
        <div class="row">
            @foreach($productsolds as $productsold)
                <div class="col-md-6 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $productsold->name }} text-center</h5>
                            <p class="card-text"><strong>Product ID:</strong> {{ $productsold->id }}</p>
                            <p class="card-text"><strong>Product Name:</strong> {{ $productsold->product->name ?? 'N/A' }}</p>
                            <p class="card-text"><strong>Price:</strong> ${{ number_format($productsold->price, 2) }}</p>
                            <p class="card-text"><strong>Sold At:</strong> {{ $productsold->sold_at }}</p>
                            <p class="card-text"><strong>Customer:</strong> {{ $productsold->customer->name ?? 'N/A' }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="card">
            <div class="card-body">
                <p class="card-text text-center">No sold products found.</p>
            </div>
        </div>
    @endif
</div>
</div>
</x-site-layout>