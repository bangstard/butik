@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br>
            <div class="card">
                <div class="card-header">{{ __('Product Index') }}</div>
                <div class="card-body">

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                            <th scope="col" class="text-center">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ( $products as $keys => $product )
                          <tr>
                            <td>{{ $keys+1 }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->image }}</td>
                            <td class="text-center">
                              <a href="{{ route('product:destroy', $product) }}" type="button" class="btn btn-danger">Delete</a>
                              <a href="{{ route('product:edit', $product) }}" type="button" class="btn btn-info">Edit</a>
                            </td>
                          </tr>

                          @endforeach
                          
                        </tbody>
                      </table>
                      <div align= right>
                        <a href="{{ route('product:create') }}" type="button" class="btn btn-primary">+</a>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
