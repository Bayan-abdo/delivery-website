@extends('layouts.app')

@section('title')
الطلبيات
@endsection

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">الزبون</th>
                <th scope="col">الإجمالي</th>
                <th scope="col">عرض</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <th scope="row">{{ $order->id }}</th>
                    <td>{{ $order->customer->name }}</td>
                    <td>{{ $order->total }}</td>
                    <td>
                        <a href="{{ url('orders/' . $order->id) }}" class="btn btn-info btn-sm">عرض</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
