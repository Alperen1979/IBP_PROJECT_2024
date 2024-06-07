<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h1>Product List</h1>
                        <a href="{{route('admin.product.create')}}" class="btn btn-primary ml-3" id="create-new-product">Add New</a>
                    </div>
                    <hr />
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary ml-auto">{{ __('Geri Dön') }}</a>

                    <hr />

                    <!-- Search Form -->
                    <form action="{{ route('admin.product.search') }}" method="GET" class="mb-3">
                        <div class="row">
                            <div class="col-md-9">
                                <input type="text" name="query" class="form-control" placeholder="Search all fields">
                            </div>
                            <div class="col-md-1">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </form>

                    <!-- Product List Table -->
                    <table class="table mt-3" id="product_datatable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name}}</td>
                                <td>{{ $product->category }}</td>
                                <td>{{ $product->price }}</td>
                                <td><img src="{{ $product->image }}" alt="Product Image" style="max-width: 100px;"></td>
                                <td>
                                    <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('admin.product.destroy', $product->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Product CRUD Operations -->
    <div class="modal fade" id="product_modal" aria-hidden="true">
        <!-- Modal content will be loaded dynamically via AJAX -->
    </div>
</x-app-layout>
