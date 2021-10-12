<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

<div class="container-fluid mt-2">

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
        <div class="container-fluid">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
                <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                            <div class="col-6">
                                <h1>What is Pasta?</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda consectetur explicabo fugiat harum nemo nesciunt quas quasi vel voluptates. Deleniti doloribus eius eum fuga nesciunt non totam? Ab aliquam deleniti expedita magni omnis voluptate voluptatem voluptatibus. Ab facilis numquam velit!</p>
                            </div>
                            <div class="col-6">
                                <img class="float-left d-block" src="./img/slideimg.png" alt="First slide">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                            <div class="row">
                                <div class="col-6">
                                    <h1>What is Pasta?</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium asperiores autem culpa delectus doloremque eaque earum eligendi esse ex exercitationem fugit hic id incidunt ipsa minima molestias officiis perferendis, placeat quidem quis repellat sed voluptas voluptatum. Aliquam enim eum mollitia?</p>
                                </div>
                                <div class="col-6">
                                    <img class="float-left d-block" src="./img/slideimg.png" alt="Second Slide">
                                </div>
                            </div>
                    </div>
                    <div class="carousel-item">
                            <div class="row">
                                <div class="col-6">
                                    <h1>What is Pasta?</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto dolore, earum explicabo facilis ipsum, nemo placeat quod quos ratione repellendus similique, sit vel. Consequatur eligendi enim hic incidunt ipsam laboriosam laudantium molestias? Aperiam fugit harum ipsum, maiores recusandae repellat!</p>
                                </div>
                                <div class="col-5">
                                    <img class="float-left d-block" src="./img/slideimg.png" alt="Third Slide">
                                </div>
                            </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true">
                        <img src="img/arrowleft.png" alt="arrLeft">
                    </span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true">
                        <img src="img/arrowright.png" alt="arrLeft">
                    </span>
                    <span class="sr-only">Next</span>
                </a>
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
            </div>
            <hr>
            <div class="container-fluid mt-1">
                <div id="bestDishes">
                    <div class="d-flex justify-content-center pt-4">
                        <div class="p-2 align-self-center mb-2">
                            <hr style="border:5px solid #FE5A0B;width:150px">
                        </div>ı
                        <div class="p-2">
                            <h1 style="font-family:Oswald;letter-spacing: 4px;color: white;font-size: xx-large">BEST DISHES</h1>
                        </div>
                        <div class="p-2 align-self-center mb-2">
                            <hr style="border:5px solid #FE5A0B;width: 150px">
                        </div>
                    </div>
                    <div class="container mt-4" id="containBestDishes">
                        <div class= "row items" id="bestDishesRow">
                            <div class="col-md-4">
                                <img src="./img/thumb2.jpg" alt="" style="background-color: white;padding: 5px">
                                <h1 id="pastaHeader">PASTA PILLUS</h1>
                            </div>
                            <div class="col-md-4">
                                <img src="./img/thumb3.png" alt="" style="background-color: white;padding: 5px">
                                <h1 id="pastaHeader">PASTA FUSILLI</h1>
                            </div>
                            <div class="col-md-4">
                                <img src="./img/thumb1.png" alt="" style="background-color: white;padding: 5px">
                                <h1 id="pastaHeader">PASTA CAPELLINI</h1>
                            </div>
                            <div class="col-md-4">
                                <img src="./img/tagliolini_wp.jpg" alt="" style="background-color: white;padding: 5px ;height: 237px">
                                <h1 id="pastaHeader">PASTA TAGLIOLINI</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function (){
        $('.items').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3
        });
    });
</script>

</body>
</html>
