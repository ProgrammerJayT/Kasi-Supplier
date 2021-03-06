<!DOCTYPE html>
<html lang="en" style="height: 100%;width: 100%;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Kasi-Suppliers</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body class="d-lg-flex flex-column align-items-lg-center" style="height: 100%;width: 100%;background: rgb(0,0,0);">
    <div class="container" style="height: 100%;margin-left: 0px;margin-right: 0px;width: 100%;padding: 0px;">
        <div class="row" style="height: 100%;">
            <div class="col-md-6 d-lg-flex flex-column align-items-lg-center">
                <img src="assets/img/Hello-rafiki.png" style="width: 80%;margin-top: 100px;">
                <h1 style="font-family: Acme, sans-serif;color: rgb(255,255,255);"><?=$name?></h1>
                <a class="btn btn-primary" role="button" style="margin-top: 50px;width: 50%;border-radius: 20px;background: rgb(255,255,255);color: var(--bs-gray-900);font-weight: bold;" href="Login?action=logout">Logout</a>
            </div>
            <div class="col-md-6 d-lg-flex flex-column align-items-lg-center" style="background: #ffffff;border-radius: 20px;margin-top: 100px;margin-bottom: 100px;">
            <img src="assets/img/Delivery-amico.png" style="width: 35%;">
                <p style="font-size: 25px;color: var(--bs-info);font-weight: bold;">Running out of stock?</p>
                <a class="btn" role="button" style="width: 50%;background: var(--bs-info);border-radius: 20px;color: rgb(255,255,255);font-weight: bold;" href="Market">Place order</a>
                <img src="assets/img/Completed-amico.png" style="width: 35%;">
                <p style="font-size: 25px;color: var(--bs-indigo);font-weight: bold;">Wanna view your purchase history?</p>
                <a class="btn" role="button" style="width: 50%;background: var(--bs-indigo);border-radius: 20px;color: var(--bs-body-bg);font-weight: bold;" href="Market">My Orders</a>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>