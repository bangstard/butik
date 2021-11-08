@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Products') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('product:edit', $product) }}">
                        @csrf

                        <div class="md-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="{{ $product-> name }}">
                        </div>
                        <div class="md-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" name="price" class="form-control" id="price" placeholder="{{ $product-> price }}">
                        </div>
                        <div class="md-3">
                            <label for="name" class="form-label">Description</label>
                            <input type="text" name="description" class="form-control" id="description" placeholder="{{ $product-> description }}">
                        </div>
                        <div class="md-3">
                            <label for="image" class="form-label">Image</label>
                            <div>
                                <input type="file" name="image" class="" id="image" placeholder="{{ $product->image }}">
                            </div>
                        </div>


                        <input type="submit" class="form-control" placeholder="">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
