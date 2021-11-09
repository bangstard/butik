@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Products') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('product:update', $product) }}" enctype="multipart/form-data">
                        @csrf

                        <div class="md-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{ $product-> name }}">
                        </div>
                        <div class="md-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" name="price" class="form-control" id="price" value="{{ $product-> price }}">
                        </div>
                        <div class="md-3">
                            <label for="name" class="form-label">Description</label>
                            <input type="text" name="description" class="form-control" id="description" value="{{ $product-> description }}">
                        </div>
                        <div class="md-3">
                            <label for="image" class="form-label">Image</label>
                            <div>
                                <input type="file" name="image" class="" id="image" value="{{ $product->image }}">
                            </div>
                        </div>
                        <br>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-success" placeholder="">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
