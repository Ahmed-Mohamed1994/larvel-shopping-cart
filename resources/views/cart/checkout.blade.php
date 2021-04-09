@extends('layouts.app')

@section('style')
    <link href="{{ asset('stripe/stripe.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <p>Total Amount is <strong>${{ $amount }}</strong></p>
                <form action="{{ route('chargeCart') }}" method="post" id="payment-form">
                    <div>
                        @csrf
                        <input type="hidden" name="amount" value="{{ $amount }}">
                        <label for="card-element">
                            Credit or debit card
                        </label>
                        <div id="card-element">
                            <!-- A Stripe Element will be inserted here. -->
                        </div>

                        <!-- Used to display form errors. -->
                        <div id="card-errors" role="alert"></div>
                    </div>
                    <p id="loading_msg" class="mt-2 mb-0" style="display: block;color: #761b18;"></p>
                    <button id="charge_submit" class="btn btn-primary mt-3">Submit Payment</button>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="https://js.stripe.com/v3/"></script>
    <script src="{{ asset('stripe/stripe.js') }}" defer></script>
@endsection
