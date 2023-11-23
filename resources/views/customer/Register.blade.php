@extends('layouts.app')

@section('title')
إنشاء حساب
@endsection

@section('content')

<form method="POST" action="" enctype="multipart/form-data">
@csrf

  <div class="mb-3">
    <label class="form-label"> اسم المستخدم</label>
    <input type="name" class="form-control" name="name">
  </div>

    <div class="mb-3">
    <label class="form-label">رقم الهاتف</label>
    <input type="number" class="form-control" name="phone">
  </div>
  <div class="mb-3">
    <label class="form-label">كلمة المرور</label>
    <input type="password" class="form-control" name="password">
  </div>
  
  
  <button type="submit" class="btn btn-primary">إنشاء</button>
</form>

@endsection