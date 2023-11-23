@extends('layouts.app')

@section('title')
إنشـاء منتج
@endsection

@section('content')

<form method="POST" action="/store-product" enctype="multipart/form-data">
@csrf

  <div class="mb-3">
    <label class="form-label">الإسم</label>
    <input type="text" class="form-control" name="name">
  </div>

    <div class="mb-3">
    <label class="form-label">السعر</label>
    <input type="number" class="form-control" name="price">
  </div>
  <div class="mb-3">
    <label class="form-label">الصورة</label>
    <input type="file" class="form-control" name="image">
  </div>
  
  <div class="mb-3">
    <label class="form-label">الصنف</label>
    <select class="form-control" name="category_id">
    <option disabled selected>-- Select Category --</option>
      @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
      @endforeach
    </select>
  </div>

      <div class="mb-3">
    <label class="form-label">الوصف</label>

    <textarea class="form-control" name="description"></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">موافق </button>
</form>

@endsection