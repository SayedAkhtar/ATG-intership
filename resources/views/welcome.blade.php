<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.2/css/mdb.min.css" rel="stylesheet">
    </head>
    <body>
        <!-- Default form subscription -->
        <div class="mx-auto w-50 mt-3">

            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{session()->get('success')}}
                  </div>
            @endif
            @if (session()->has('failed'))
                <div class="alert alert-danger" role="alert">
                    {{session()->get('failed')}}
                </div>               
            @endif
        <form class="text-center border border-light p-5" method="post" action="/submit">
            @csrf

            <p class="h4 mb-4">Subscribe To ATG</p>

            <p>Join ATG for the latest content around the web.</p>

            <!-- Name -->
            <input type="text" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="Name" name="name">

            <!-- Email -->
            <input type="text" id="defaultSubscriptionFormEmail" class="form-control mb-4" placeholder="E-mail" name="email">

            <!-- Pincode -->
            <input type="text" id="defaultSubscriptionFormPincode" class="form-control mb-4" placeholder="Pincode" name="pincode" maxlength="6">

            <!-- Sign in button -->
            <button class="btn btn-info btn-block" type="submit">Submit</button>

            @if ($errors->any())
                <div class="alert alert-danger mt-2">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>
        </div>
        <!-- Default form subscription -->


<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.2/js/mdb.min.js"></script>
    </body>
</html>
