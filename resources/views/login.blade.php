<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>KoMi</title>

</head>
<body>
    <br>
    <br>

    <div class="header-image text-center">
        <img src="{{ asset('images/logo.png') }}" alt="KoMi" class="img-fluid" width="400px" height="400px">
    </div>



    <form action="/dashboard" method="get">
        <div class="d-flex flex-column justify-content-center align-items-center ">
            <h1 class="text-center">Login</h1>
            <br>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="inputUsername" class="col-form-label fs-3">Username</label>
                </div>
                <div class="col-auto">
                    <input type="Username" id="inputUsername" name="username" class="form-control fs-4"
                        aria-describedby="passwordHelpInline" autocomplete="off">
                </div>
                <div class="col-auto">
                    <span id="passwordHelpInline" class="form-text">

                    </span>
                </div>
            </div>
            <br>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label fs-3">Password </label>
                </div>
                <div class="col-auto">
                    <input type="password" id="inputPassword6" name="password" class="form-control fs-4"
                        aria-describedby="passwordHelpInline" autocomplete="new-password">
                </div>
                <div class="col-auto">
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-outline-primary btn-lg">Login</button>
        </div>
        <br>
        <br>
    </form>

<x-footer />

</body>
</html>

