@extends('layouts.app')

@section('title')
تعديل منتج
@endsection

@section('content')

<form method="POST" action="{{ url('/products/' . $product->id) }}" enctype="multipart/form-data">
@method('PATCH')
@csrf

  <div class="mb-3">
    <label class="form-label">الإسم</label>
    <input type="text" class="form-control" name="name" value="{{ $product->name }}">
  </div>

    <div class="mb-3">
    <label class="form-label">السعر</label>
    <input type="number" class="form-control" name="price" value="{{ $product->price }}">
  </div>

  <div class="mb-3">
    <label class="form-label">الصورة </label>

    <input type="file" class="form-control" name="image">

    @if ($product->image)
      <img height="100" src="{{ url($product->image) }}">
    @endif
  </div>

  <div class="mb-3">
    <label class="form-label">الصنف</label>
    <select class="form-control" name="category_id">
    <option disabled selected>-- Select Category --</option>
      @foreach ($categories as $category)
        <option value="{{ $category->id }}" @if ($category->id == $product->category_id) selected @endif>{{ $category->name }}</option>
      @endforeach
    </select>
  </div>

      <div class="mb-3">
    <label class="form-label">الوصف</label>

    <textarea class="form-control" name="description">{{ $product->description }}</textarea>
  </div>

  <button type="submit" class="btn btn-primary">موافق</button>
</form>

@endsection