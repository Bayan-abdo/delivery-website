@extends('layouts.app')

@section('title')
الطلبية رقم #{{ $order->id }}
@endsection

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th width="30%" scope="col">اسم المنتج</th>
                <th width="10%" scope="col">سعر المنتج</th>
                <th width="15%" scope="col">الكمية</th>
                <th width="15%" scope="col">إجمالي العنصر</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->items as $item)
                <tr>
                    <form action="{{ url('cart') }}" method="POST">
                        <td>{{ $item->product->name }}</td>
                        <td>{{ $item->sold_price }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->totalItemPrice }}</td>
                    </form>
                </tr>
            @endforeach
        </tbody>
    </table>

    <p>الإجمالي: {{ $order->total }}</p>
@endsection
