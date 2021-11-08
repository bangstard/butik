@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <br>
            <div class="card">
                <div class="card-header">{{ __('Add Products') }}</div>
                <div class="card-body">
                    <a href="{{ route('product:index') }}" >Index</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
