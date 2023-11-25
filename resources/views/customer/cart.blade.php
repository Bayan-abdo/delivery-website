@extends('customer.layouts.app')

@section('title')
    السلة
@endsection

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th width="30%" scope="col">اسم المنتج</th>
                <th width="10%" scope="col">سعر المنتج</th>
                <th width="15%" scope="col">الكمية</th>
                <th width="15%" scope="col">إجمالي العنصر</th>
                <th width="30%" scope="col">خيارات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cartItems as $item)
                <tr>
                    <form action="{{ url('cart') }}" method="POST">
                        <td>{{ $item->product->name }}</td>
                        <td>{{ $item->product->price }}</td>
                        <td>
                            <input type="number" class="form-control" name="quantity" value="{{ $item->quantity }}">
                        </td>
                        <td>{{ $item->totalItemPrice }}</td>
                        <td>
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="product_id" value="{{ $item->product->id }}">
                            <input type="submit" class="btn btn-sm btn-warning" value="تحديث">
                        </td>
                    </form>
                </tr>
            @endforeach
        </tbody>
    </table>

    <p>الإجمالي: {{ $cartItems->sum('totalItemPrice') }}</p>

    @if ($cartItems->count())
        <form action="{{ url('order') }}" method="POST">
            @csrf
            <div class="row">
                <label class="col-md-4 col-form-label text-md-end">طريقة الاستلام</label>

                <div class="col-md-6">
                    <select class="form-control" name="reception_type">
                        <option value="في المطعم">في المطعم</option>
                        <option value="طلب خارجي">طلب خارجي</option>
                        <option value="توصيل">توصيل</option>
                    </select>
                </div>
            </div>

            <div class="text-center pt-5">
                <input type="submit" class="btn btn-md btn-primary" value="إتمام الطلب">
            </div>
        </form>
    @endif
@endsection
