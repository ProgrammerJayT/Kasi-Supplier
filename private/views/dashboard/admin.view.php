<!DOCTYPE html>
<html lang="en" style="background: #000000;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Kasi-Suppliers</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background: rgb(0,0,0);">
    <div class="d-lg-flex d-xl-flex d-xxl-flex flex-column align-items-lg-center align-items-xl-center align-items-xxl-center">
    <div class="d-lg-flex justify-content-lg-end" style="width: 100%;margin-top: 20px;margin-right: 50px;">
            <a class="btn d-lg-flex flex-column justify-content-lg-center align-items-lg-center" role="button" style="color: rgb(255,255,255);" href="Login?action=logout">
                <i class="fas fa-sign-out-alt" style="color: rgb(255,255,255);font-size: 50px;"></i>LOGOUT</a>
    </div>
        <img src="assets/img/kasi_supplier.png" style="width: 20%;">
        <h1 style="color: var(--bs-red);">Administrator Account</h1><button class="btn" type="button" style="background: #ffffff;border-radius: 20px;width: 20%;margin-top: 20px;color: var(--bs-body-color);">Add admin account</button>
    </div>
    <div class="table-responsive" style="margin-top: 50px;">
        <table class="table table-striped table tablesorter" id="ipi-table">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center" style="color: rgb(255,255,255);">Email</th>
                    <th class="text-center" style="color: rgb(255,255,255);">Type</th>
                    <th class="text-center" style="color: rgb(255,255,255);">Status</th>
                    <th class="text-center filter-false sorter-false" style="color: rgb(255,255,255);">Action</th>
                </tr>
            </thead>
            <tbody class="text-center">

            <?php

            foreach ($accountData as $key => $value) {
                if ($value->type != 'admin' && $value->status == 'pending') {
                    echo /** @lang text */
                    '<tr>
                        <td style="color: rgb(255,255,255);">'.$value->email.'</td>
                        <td style="color: rgb(255,255,255);">'.$value->type.'</td>
                        <td style="color: rgb(255,255,255);">'.$value->status.'</td>
                        
                        <td class="text-center align-middle" style="max-height: 60px;height: 60px;">
                            <a class="btn btnMaterial btn-flat success semicircle" role="button" id="approve" href="Approve?id='.$value->id.'&action=approve">
                                <i class="fas fa-check" style="color: rgb(51,255,0);"></i>
                            </a>
                            <a class="btn btnMaterial btn-flat accent btnNoBorders checkboxHover" role="button" id="reject" style="margin-left: 5px;" 
                                href="Approve?id='.$value->id.'&action=reject"><i class="fas fa-trash btnNoBorders" style="color: #DC3545;"></i>
                            </a>
                        </td>
                    </tr>
                    ';
                }
            }
                ?>
            </tbody>
        </table>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>