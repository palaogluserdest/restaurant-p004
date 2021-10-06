<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container mt-2">

    <div id="navbar">
        <div class="row">
            <div class="col-4">
                <img id="logo" src="img/LOGO.png" alt="">
            </div>
            <div class="col-8 ">
                <ul class="nav-menu">
                    <li>HOME</li>
                    <li>ABOUT</li>
                    <li>LOCATIONS</li>
                    <li>MENU</li>
                    <li>CONTACT</li>
                </ul>
            </div>
        </div>
    </div>

    <hr>

    <div id="main">
        <div style="width: 100%; height: 250px">slider</div>
        <div style="width: 100%; height: 500px">best dishes</div>
    </div>

require __DIR__.'/../vendor/autoload.php';

</div>

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = tap($kernel->handle(
    $request = Request::capture()
))->send();

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
