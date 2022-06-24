<!DOCTYPE html>
<html lang="en" style="background: #000000;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Kasi-Suppliers</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme&amp;display=swap">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background: rgb(0,0,0);padding-bottom: 100px;">
    <div class="d-lg-flex d-xl-flex d-xxl-flex flex-column align-items-lg-center align-items-xl-center align-items-xxl-center" style="margin-top: 100px;"><img src="assets/img/kasi_supplier.png"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-lg-flex d-xl-flex d-xxl-flex flex-column justify-content-lg-center align-items-lg-end align-items-xl-end align-items-xxl-end"><img style="width: 400px;height: 400px;" src="assets/img/In%20no%20time-amico.png"></div>
            <div class="col">
                <form method="post" class="d-lg-flex flex-column align-items-lg-center">
                    <div class="d-lg-flex d-xl-flex d-xxl-flex flex-column align-items-lg-center align-items-xl-center align-items-xxl-center" style="color: rgb(255,255,255);width: 100%;">
                        <h1 style="font-family: Acme, sans-serif;font-size: 50px;">Login</h1>
                    </div>
                    <div style="margin-top: 10px;width: 80%;">
                    <input class="form-control" type="email" style="border-radius: 20px;text-align: center;" required="" 
                    name="email" placeholder="Registered mail address" inputmode="email"></div>
                    <div style="margin-top: 10px;width: 80%;">
                    <input class="form-control" type="password" style="border-radius: 20px;text-align: center;" required="" 
                    name="password" placeholder="Password" minlength="8" maxlength="15"></div>
                    <div style="margin-top: 10px;margin-bottom: 20px;width: 80%;"><select class="form-select" style="border-radius: 20px;text-align: center;" name="user" required="">
                            <option value="admin" selected="">Who are you?</option>
                            <option value="customer">Customer</option>
                            <option value="supplier">Supplier</option>
                        </select></div>
                    <div class="d-lg-flex flex-column align-items-lg-center" style="width: 80%;"><button class="btn" type="submit" style="width: 40%;color: rgb(0,0,0);background: #ffffff;font-weight: bold;font-size: 20px;border-radius: 20px;">Submit</button></div>
                    <div class="d-lg-flex flex-column align-items-lg-center" style="margin-top: 20px;width: 100%;"><a href="Registration" style="color: rgb(255,255,255);">Don't have an account yet? Create new account</a></div>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>