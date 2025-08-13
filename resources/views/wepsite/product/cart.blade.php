@extends('layouts.wep')
@section('content')
<style>
    /* خلفية الصفحة */
    .cart-page {
        background: #f4f6f9;
        padding: 40px 0;
        font-family: 'Segoe UI', sans-serif;
    }

    /* عنوان الصفحة */
    .cart-header {
        font-size: 28px;
        font-weight: bold;
        color: #333;
        margin-bottom: 25px;
        padding-left: 15px;
        border-left: 5px solid #4f46e5;
    }

    /* الجدول */
    .cart-table {
        width: 100%;
        border-collapse: collapse;
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0,0,0,0.08);
    }

    .cart-table th, .cart-table td {
        padding: 12px 15px;
        border-bottom: 1px solid #eee;
        text-align: center;
    }

    .cart-table th {
        background: #09080e;
        color: #fff;
        font-size: 16px;
    }

    /* حقول الكمية */
    input[type="number"] {
        width: 70px;
        padding: 6px;
        border-radius: 6px;
        border: 1px solid #ccc;
        text-align: center;
    }

    input[type="number"]:focus {
        border-color: #4f46e5;
        outline: none;
    }

    /* الأزرار */
    .btn-custom {
        padding: 6px 12px;
        border-radius: 6px;
        font-weight: bold;
        border: none;
        cursor: pointer;
        transition: 0.2s ease;
    }

    .btn-update {
        background: #16a34a;
        color: #fff;
    }

    .btn-update:hover {
        background: #15803d;
    }

    .btn-remove {
        background: #dc2626;
        color: #fff;
    }

    .btn-remove:hover {
        background: #b91c1c;
    }

    .btn-checkout {
        background: #08070e;
        color: #fff;
        padding: 10px 18px;
        border-radius: 8px;
        font-weight: bold;
        margin-top: 20px;
    }

    .btn-checkout:hover {
        background: #3730a3;
    }

    /* الإجمالي */
    .grand-total {
        font-weight: bold;
        font-size: 18px;
    }

</style>

<div class="cart-page">
    <div class="container">
        <h1 class="cart-header">Your Cart</h1>

        @if($cart->count() > 0)
            <table class="cart-table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php $grandTotal = 0; @endphp
                    @foreach($cart as $item)
                        @php 
                            $total = $item->product->price * $item->quantity;
                            $grandTotal += $total; 
                        @endphp
                        <tr>
                            <td>{{ $item->product->name }}</td>
                            <td>{{ $item->product->price }}</td>
                            <td>
                                <form action="{{ route('cart.update', $item->id) }}" method="POST" style="display: inline-flex; gap: 5px;">
                                    @csrf
                                    <input type="number" name="quantity" value="{{ $item->quantity }}" min="1">
                                    <button type="submit" class="btn-custom btn-update">Update</button>
                                </form>
                            </td>
                            <td>{{ $total }}</td>
                            <td>
                                <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-custom btn-remove">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="3" class="grand-total">Grand Total</td>
                        <td colspan="2" class="grand-total">{{ $grandTotal }}</td>
                    </tr>
                </tbody>
            </table>

            <form action="{{ route('order.checkout') }}" method="POST">
                @csrf
                <button type="submit" class="btn-checkout">Checkout</button>
            </form>
        @else
            <p>Your cart is empty.</p>
        @endif
    </div>
</div>
@endsection
