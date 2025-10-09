
<x-site-layout>


{{-- The @extends directive and @section/@endsection should be used without <html>, <head>, or <body> tags in Blade views that extend a layout. 
     If you want to use a layout, remove the <html> and <body> tags from this file and let the layout handle them.
     If you want this file to be standalone, remove the @extends and @section directives and keep the HTML structure.
     Below is the correct Blade structure for extending a layout: --}}
@php
    // Remove the <html> tag above and move @extends to the top of the file.
@endphp

@section('content')
<div class="container">
    <h1>{{ $productcategory->exists ? 'Product Category Details' : 'Create New Product Category' }}</h1>
    <div class="card">
        <div class="card-body">
            @if($productcategory->exists)
                <h5 class="card-title">{{ $productcategory->name }}</h5>
                <p class="card-text"><strong>Description:</strong> {{ $productcategory->description }}</p>
                <p class="card-text"><strong>Created At:</strong> {{ $productcategory->created_at->format('Y-m-d') }}</p>
            @else
                <h5 class="card-title">New Product Category</h5>
                <p class="card-text">This is a new product category form.</p>
            @endif
            <a href="{{ route ('productcategories.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection 
</x-site-layout>