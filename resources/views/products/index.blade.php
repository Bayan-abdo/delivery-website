@extends(auth('customer')->user() ? 'customer.layouts.app' : 'layouts.app')

@section('title')
    <h1>قائمة الطعام</h1>
@endsection

@section('content')

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5" id="foodCategories">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav" style="margin: 0 auto">
      @foreach ($categories as $category)
      <li class="nav-item">
        <a class="nav-link" href="{{ url("products?category_id={$category->id}") }}">{{ $category->name}}</a>
      </li>
      @endforeach
    </ul>
  </div>
</nav>

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
                                    @if ($cartItems && $cartItems->pluck('product_id')->contains($product->id))
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
