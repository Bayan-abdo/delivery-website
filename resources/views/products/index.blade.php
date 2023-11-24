@extends('layouts.app')

@section('title')
    <b>قائمة الطعام</b>
@endsection

@section('content')

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        @foreach ($products as $product)
            <div class="col">
                <div class="card shadow-sm">
                    {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> --}}

                    @if ($product->image)
                        <img class="bd-placeholder-img card-img-top" src="{{ url('storage/' . $product->image) }}">
                    @endif

                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->category ? $product->category->name : 'Not Categorized' }}</p>
                        <p class="card-text">{{ $product->description }}</p>
                        <div class="d-flex justify-content-between align-products-center">
                            <div class="btn-group">
                                <a href="{{ url('show-product/' . $product->id) }}"
                                    class="btn btn-sm btn-outline-secondary">عرض</a>

                                @auth('customer')
                                    @if ($cartItems->pluck('product_id')->contains($product->id))
                                        <form action="{{ url('cart') }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <input type="submit" class="btn btn-sm btn-danger" value="إزالة من السلة">
                                        </form>
                                    @else
                                        <form action="{{ url('cart') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <input type="submit" class="btn btn-sm btn-primary" value="إضافة إلى السلة">
                                        </form>
                                    @endif
                                @endauth

                                @auth
                                    <a href="{{ url('edit-product/' . $product->id) }}"
                                        class="btn btn-sm btn-outline-secondary">تعديل</a>

                                    <form action="{{ url('products/' . $product->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <input type="submit" class="btn btn-sm btn-danger" value="حذف">
                                    </form>
                                @endauth
                            </div>
                            <small class="text-body-secondary">{{ $product->price }} LYD</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


    </div>
@endsection
