@extends('layouts.app')

@section('content')
    <div class="home-cont d-flex">
        @foreach ($products as $product)
        <div>
            @include('partials.product-card')
        </div>
        @endforeach
        
    </div>
@endsection