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
            <input type="submit" class="btn btn-md btn-primary" value="إتمام الطلب">
        </form>
    @endif
@endsection
