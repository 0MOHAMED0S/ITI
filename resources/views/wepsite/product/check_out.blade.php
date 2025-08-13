@extends('Layouts.wep')
@section('content')


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    
</head>

<body>




        <div class="row">
            <!-- Billing Details -->
            <div class="col-md-7">
                <h4>Billing Details</h4>
                <form>
                    <input type="text" class="form-control mb-3" placeholder="First Name*" required>
                    <input type="text" class="form-control mb-3" placeholder="Company Name">
                    <input type="text" class="form-control mb-3" placeholder="Street Address*" required>
                    <input type="text" class="form-control mb-3" placeholder="Apartment, floor, etc. (optional)">
                    <input type="text" class="form-control mb-3" placeholder="Town/City*" required>
                    <input type="tel" class="form-control mb-3" placeholder="Phone Number*" required>
                    <input type="email" class="form-control mb-3" placeholder="Email Address*" required>

                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" id="saveInfo" checked>
                        <label class="form-check-label" for="saveInfo">
                            Save this information for faster check-out next time
                        </label>
                    </div>
                </form>
            </div>

            <!-- Order Summary -->
            <div class="col-md-5">
                <div class="order-summary">
                    <div id="product-list"></div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>Subtotal:</span>
                        <span id="subtotal">$0</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span>Shipping:</span>
                        <span>Free</span>
                    </div>
                    <div class="d-flex justify-content-between fw-bold mt-2">
                        <span>Total:</span>
                        <span id="total">$0</span>
                    </div>

                    <div style="margin-top:14px">
                        <div>
                            <input type="radio" id="pay-bank" name="pay" value="bank">
                            <label for="pay-bank"> Bank</label>
                            <span class="payment-icons">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/4/41/Visa_Logo.png" alt="visa">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/0/04/Mastercard-logo.png"
                                    alt="mc">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/f/fd/Maestro_logo.png"
                                    alt="maestro">
                            </span>
                        </div>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="radio" name="payment" id="cod" value="cod" checked>
                            <label class="form-check-label" for="cod">
                                Cash on delivery
                            </label>
                        </div>
                    </div>

                    <div class="input-group mt-4 mb-3">
                        <input type="text" class="form-control" placeholder="Coupon Code">
                        <button class="btn btn-danger">Apply Coupon</button>
                    </div>

                    <a href="#" class="btn btn-danger w-100">Place Order</button> <a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection