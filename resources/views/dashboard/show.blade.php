<x-site-layout>
    <div class="container my-5">
        <h1 class="mb-4">Dashboard</h1>
        
        <div class="row">
            <!-- Product Categories Card -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        Product Categories
                    </div>
                    <div class="card-body">
                        @if(isset($productcategories) && count($productcategories))
                            <ul class="list-group">
                                @foreach($productcategories as $category)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        {{ $category->name }}
                                        <span class="badge bg-secondary">{{ $category->products_count ?? '' }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-muted">No product categories found.</p>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Products Sold Card -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-success text-white">
                        Products Sold
                    </div>
                    <div class="card-body">
                        @if(isset($productsolds) && count($productsolds))
                            <ul class="list-group">
                                @foreach($productsolds as $sold)
                                    <li class="list-group-item">
                                        <strong>{{ $sold->product_name ?? 'Product' }}</strong>
                                        <span class="float-end">Qty: {{ $sold->quantity ?? 1 }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-muted">No products sold yet.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Customers Card -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-info text-white">
                        Customers
                    </div>
                    <div class="card-body">
                        @if(isset($users) && count($users))
                            <ul class="list-group">
                                @foreach($users as $user)
                                    <li class="list-group-item">
                                        {{ $user->name }} <span class="text-muted">({{ $user->email }})</span>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-muted">No customers found.</p>
                        @endif
                    </div>
                </div>
            </div>
            <!-- Add more dashboard widgets here as needed -->
        </div>
    </div>
</x-site-layout>
