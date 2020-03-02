<html>
    <head>
        <title>My Now Amazing Webpage</title>
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    </head>
    <body>

        <div class="carousel">
            <div><img src="https://i.imgur.com/3aIutJi.png" alt="js" /></div>
            <div><img src="https://i.imgur.com/rWtGeQ0.png" alt="java" /></div>
            <div><img src="https://i.imgur.com/8946bSF.png" alt="python"/></div>
            <div><img src="https://i.imgur.com/9Hc7hjb.png" alt="kotlin" /></div>
            <div><img src="https://i.imgur.com/uZDEpjX.png" alt="scala" /></div>
            <div><img src="https://i.imgur.com/eQoyQjy.png" alt="C#" /></div>
            <div><img src="https://i.imgur.com/ko3iAbu.png" alt="PHP" /></div>
            <div><img src="https://i.imgur.com/Afkz5od.png" alt="dotnet" /></div>
        </div>



        <script type="text/javascript">
            $(document).ready(function () {
                $('.carousel').slick({
                    dots: true,
                    infinite: true,
                    speed: 500,
                    slidesToShow: 4,
                    slidesToScroll: 4,
                });
            });
        </script>

    </body>
</html>