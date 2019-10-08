<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Stripe Elements</title>


    <script src="https://js.stripe.com/v3/"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/base.css" />

</head>
<body>
<div class="globalContent">
    <form action="/charge" method="post" id="payment-form">
        {!! csrf_field() !!}
        <div class="form-row">
            <label for="card-element">
                Credit or debit card
            </label>
            <div id="card-element">
                <!-- A Stripe Element will be inserted here. -->
            </div>

            <!-- Used to display form errors. -->
            <div id="card-errors" role="alert"></div>
        </div>

        <button>Submit Payment</button>
    </form>
</div>

<script>
    var stripe = Stripe('{{ config('services.stripe.key') }}');
</script>
<script src="js/stripe.js" data-rel-js></script>

</body>
</html>