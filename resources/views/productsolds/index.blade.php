<x-site-layout>

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
            @forelse($productsolds as $productsold)
                <tr>
                    <td>{{ $productsold->id }}</td>
                    <td>{{ $productsold->name }}</td>
                    <td>{{ $productsold->sold_at }}</td>
                    <td>${{ number_format($productsold->price, 2) }}</td>
                    <td>{{ $productsold->customer->name }}</td>
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
</x-site-layout>