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
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-lg-flex d-xl-flex d-xxl-flex flex-column justify-content-lg-center align-items-lg-end align-items-xl-end align-items-xxl-end">
                <div class="d-lg-flex d-xl-flex d-xxl-flex flex-column align-items-lg-center align-items-xl-center align-items-xxl-center" style="width: 100%;"><img src="assets/img/kasi_supplier.png"></div><img style="width: 400px;height: 400px;" src="assets/img/Subscriber-bro.png">
            </div>
            <div class="col">
                <form class="d-lg-flex flex-column align-items-lg-center" style="margin-top: 50px;" method="post">
                    <div class="d-lg-flex d-xl-flex d-xxl-flex flex-column align-items-lg-center align-items-xl-center align-items-xxl-center" style="color: rgb(255,255,255);width: 100%;">
                        <h1 style="font-family: Acme, sans-serif;font-size: 50px;">Registration Form</h1>
                    </div>
                    <div style="margin-top: 25px;width: 80%;">
                        <p style="color: rgb(255,255,255);font-weight: bold;font-family: Acme, sans-serif;margin-bottom: 5px;">Name</p><input class="form-control" type="text" name="name" required="" style="text-align: center;border-radius: 20px;">
                    </div>
                    <div style="margin-top: 10px;width: 80%;">
                        <p style="color: rgb(255,255,255);font-weight: bold;font-family: Acme, sans-serif;margin-bottom: 5px;">Surname</p><input class="form-control" type="text" name="surname" required="" style="text-align: center;border-radius: 20px;">
                    </div>
                    <div style="margin-top: 10px;width: 80%;">
                        <p style="color: rgb(255,255,255);font-weight: bold;font-family: Acme, sans-serif;margin-bottom: 5px;">ID Number</p><input class="form-control" type="number" name="id" step="1" required="" style="text-align: center;border-radius: 20px;">
                    </div>
                    <div style="margin-top: 10px;width: 80%;">
                        <p style="color: rgb(255,255,255);font-weight: bold;font-family: Acme, sans-serif;margin-bottom: 5px;">Phone</p><input class="form-control" type="number" name="phone" step="1" required="" style="text-align: center;border-radius: 20px;">
                    </div>
                    <div style="margin-top: 10px;width: 80%;">
                        <p style="color: rgb(255,255,255);font-weight: bold;font-family: Acme, sans-serif;margin-bottom: 5px;">Residential address</p><input class="form-control" type="text" name="address" required="" style="text-align: center;border-radius: 20px;">
                    </div>
                    <div style="margin-top: 50px;width: 80%;">
                        <p style="color: rgb(255,255,255);font-weight: bold;font-family: Acme, sans-serif;margin-bottom: 5px;">Email</p><input class="form-control" type="email" style="border-radius: 20px;text-align: center;" required="" name="email" inputmode="email">
                    </div>
                    <div style="margin-top: 10px;width: 80%;">
                        <p style="color: rgb(255,255,255);font-weight: bold;font-family: Acme, sans-serif;margin-bottom: 5px;">Password</p><input class="form-control" type="password" name="password" required="" minlength="8" maxlength="15" style="border-radius: 20px;text-align: center;">
                    </div>
                    <div style="margin-top: 10px;width: 80%;margin-bottom: 25px;">
                        <p style="color: rgb(255,255,255);font-weight: bold;font-family: Acme, sans-serif;margin-bottom: 5px;">User type</p><select class="form-select" style="border-radius: 20px;text-align: center;" name="user" required="">
                            <option value="admin" selected=""></option>
                            <option value="customer">Customer</option>
                            <option value="supplier">Supplier</option>
                        </select>
                    </div>
                    <div class="d-lg-flex flex-column align-items-lg-center" style="width: 80%;"><button class="btn" type="submit" style="width: 40%;color: rgb(0,0,0);background: #ffffff;font-weight: bold;font-size: 20px;border-radius: 20px;">Submit</button></div>
                    <div class="d-lg-flex flex-column align-items-lg-center" style="margin-top: 20px;width: 100%;"><a href="Login" style="color: rgb(255,255,255);">Not a new user? Login</a></div>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>