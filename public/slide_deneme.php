<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>Deneme Slide Efekti</title>
    <link rel="stylesheet" href="./deneme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>


    <div class= "row items">
        <div class="col-md-4"><img src="./img/thumb1.png" alt=""></div>
        <div class="col-md-4"><img src="./img/thumb2.jpg" alt=""></div>
        <div class="col-md-4"><img src="./img/thumb3.png" alt=""></div>
    </div>


<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $(document).ready(function (){
           $('.items').slick({
               centerMode: true,
               centerPadding: '60px',
               slidesToShow: 2,
               responsive: [
                   {
                       breakpoint: 768,
                       settings: {
                           arrows: false,
                           centerMode: true,
                           centerPadding: '40px',
                           slidesToShow: 2
                       }
                   },
                   {
                       breakpoint: 480,
                       settings: {
                           arrows: false,
                           centerMode: true,
                           centerPadding: '40px',
                           slidesToShow: 1
                       }
                   }
               ]
           });
        });
    </script>
</body>
</html>
