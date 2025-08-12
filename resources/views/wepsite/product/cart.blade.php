@extends('layouts.wep')
@section('content')

<div class="container">
    <h1>Your Cart</h1>

    @if($cart->count() > 0)
        <table class="table">
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
                    @php $total = $item->product->price * $item->quantity; @endphp
                    @php $grandTotal += $total; @endphp
                    <tr>
                        <td>{{ $item->product->name }}</td>
                        <td>{{ $item->product->price }}</td>
                        <td>
                            <form action="{{ route('cart.update', $item->id) }}" method="POST" style="display: inline-flex;">
                                @csrf
                                <input type="number" name="quantity" value="{{ $item->quantity }}" min="1" class="form-control me-2" style="width: 70px;">
                                <button type="submit" class="btn btn-sm btn-success">Update</button>
                            </form>
                        </td>
                        <td>{{ $total }}</td>
                        <td>
                            <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Remove</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="3"><strong>Grand Total</strong></td>
                    <td colspan="2"><strong>{{ $grandTotal }}</strong></td>
                </tr>
            </tbody>
        </table>

        <form action="{{ route('order.checkout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary">Checkout</button>
        </form>
    @else
        <p>Your cart is empty.</p>
    @endif
</div>
@endsection