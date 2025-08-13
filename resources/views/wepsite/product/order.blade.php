@extends('layouts.wep')
@section('content')

<style>
    .orders-container {
        max-width: 1000px;
        margin: 40px auto;
        background: #fff;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    }

    .orders-title {
        font-size: 26px;
        font-weight: bold;
        color: #333;
        margin-bottom: 25px;
        text-align: center;
        border-bottom: 2px solid #eee;
        padding-bottom: 10px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 15px;
    }

    thead {
        background-color: #f8f9fa;
    }

    th, td {
        padding: 14px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }

    th {
        font-weight: 600;
        color: #555;
    }

    tr:hover {
        background-color: #f9f9f9;
    }

    .status {
        font-weight: bold;
        padding: 6px 10px;
        border-radius: 6px;
    }

    .status.pending {
        color: #856404;
        background-color: #fff3cd;
    }

    .status.completed {
        color: #155724;
        background-color: #d4edda;
    }

    .status.cancelled {
        color: #721c24;
        background-color: #f8d7da;
    }

    .no-orders {
        text-align: center;
        font-size: 18px;
        color: #888;
        padding: 20px;
    }
</style>

<div class="orders-container">
    <h1 class="orders-title">Your Orders</h1>

    @if($orders->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>#{{ $order->id }}</td>
                        <td>${{ number_format($order->total, 2) }}</td>
                        <td>
                            <span class="status {{ strtolower($order->status) }}">
                                {{ ucfirst($order->status) }}
                            </span>
                        </td>
                        <td>{{ $order->created_at->format('Y-m-d H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="no-orders">You have no orders.</p>
    @endif
</div>

@endsection
