<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="js/viewer.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css?0916">

    <script src='https://code.jquery.com/jquery-latest.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src="https://fastly.jsdelivr.net/npm/echarts@5/dist/echarts.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/3.2.37/vue.global.prod.min.js"></script>

</head>
<?php
require 'vendor/autoload.php';
require 'includes/view.php';

?>

<body>
    <aside class="side-nav" id="show-side-navigation1">

        <div class="heading" style="margin-top: 70px;">
            <!--<img src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907008/medium/1501685726/enhance" alt="">-->
            <div class="info">
                <h3><a href="#">Title</a></h3>
                <!--<p>Lorem ipsum dolor sit amet consectetur.</p>-->
            </div>

        </div>

        <div style="color: #ffc107;margin: 15px 30px;">
            <?php
                function getUserIP()
                {
                    $client = @$_SERVER['HTTP_CLIENT_IP'];
                    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
                    $remote = $_SERVER['REMOTE_ADDR'];

                    if (filter_var($client, FILTER_VALIDATE_IP)) {
                        $ip = $client;
                    } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
                        $ip = $forward;
                    } else {
                        $ip = $remote;
                    }

                    return $ip;
                }

                $user_ip = getUserIP();
                echo "IP: " . $user_ip . "<BR/>";
                ?>
        </div>
        <div class="search">
            <input type="text" placeholder="MENU"><i class="fa fa-search"></i>
        </div>
        <ul class="categories">
            <li><i class="fa fa-home fa-fw" aria-hidden="true"></i><a href="#"> System</a>
                <ul class="side-nav-dropdown">
                    <li><a href="#">MES</a></li>
                    <li><a href="#">EFGP</a></li>
                    <li><a href="#">SSRS</a></li>
                    <li><a href="#">KM</a></li>
                </ul>
            </li>
            <li><i class="fa fa-support fa-fw"></i><a href="#"> SOP</a>
                <ul class="side-nav-dropdown">
                    <li><a href="#">EFGP</a></li>
                    <li><a href="#">MES</a></li>
                </ul>
            </li>
            <p>:</p>
            <li><i class="fa fa-envelope-open-o fa-fw"></i><a href="#"> Messages <span class="num dang">56</span></a>
            </li>
            <li><i class="fa fa-wrench fa-fw"></i><a href="#"> Settings <span class="num prim">6</span></a>
                <ul class="side-nav-dropdown">
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">ipsum dolor</a></li>
                    <li><a href="#">dolor ipsum</a></li>
                    <li><a href="#">amet consectetur</a></li>
                    <li><a href="#">ipsum dolor sit</a></li>
                </ul>
            </li>
        </ul>
    </aside>
    <section id="contents">

        <nav class="navbar navbar-default sticky-top shadow p-3 mb-5" style="z-index: 9999;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <!--                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">-->
                    <!--                        <i class="fa fa-align-right"></i>-->
                    <!--                    </button>-->
                    <a id="Button" class="navbar-brand fa fa-bars show-side-btn" href="#"
                        data-show="show-side-navigation1"></a>
                    <script>
                    $('#Button').click(function() {
                        // $('#container').masonry({
                        //     isFitWidth: true
                        // });
                    });
                    document.getElementById('Button').addEventListener('click', function() {

                    });
                    </script>
                    <a class="navbar-brand" href="#">#<span class="main-color">Dashboard</span></a>
                </div>
                <form class="form-inline">

                    <!-- <li class="nav-item dropdown">
                        <a class="text-white  nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li> -->
                    <!-- <div><a href="#"><i class="text-white fa fa-comments"></i><span class="text-white">23</span></a></div>
                    <div><a href="#"><i class="text-white fa fa-bell-o"></i><span class="text-white">98</span></a></div> -->
                </form>
            </div>
        </nav>
        <!-- a block container is required -->

        <div id="container" style="margin: 0 auto;">

            <?php

            use Symfony\Component\Finder\Finder;


            $i = "0";
            switch ($i) {
                case "0":
                    b4_linechart();
                    b4_table();
                    b4_chart();
                    b4_barchart();
                    b4_gradechart();
                    b4_list();


                    break;
                case "b4_chart":
                    b4_chart();
                    break;
                case "b4_barchart":
                    b4_barchart();
                    break;
            }

            $finder = new Finder();
            $finder->in("img");

            foreach ($finder as $file) {

                $absoluteFilePath = $file->getRealPath();
                $fileNameWithExtension = $file->getRelativePathname();
                b4_box("img/" . $file->getRelativePathname());
            }

            ?>
        </div>
        <nav>
            <ul id="pagination" class="pagination justify-content-center fixed-bottom">
                <li class="page-item-disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>



    </section>

</body>


<script src="js/viewer.min.js"></script>
<script src='js/main.js?0208'></script>
<script>
$(function() {
    let $container = $('#container');

    // var reMasonry = function() {
    //     $container.masonry();
    // };

    $container.masonry({
        isFitWidth: true,
        columnWidth: 5,
        animate: true
    });

    $('.box').click(function() {
        return;
        let $this = $(this);
        let xsize = parseInt($this.width()) * 1.1;
        let ysize = parseInt($this.height()) * 1.1;
        let all = document.getElementsByClassName('box');
        for (let i = 0; i < all.length; i++) {
            all[i].style.height = ysize * (100 + getRandomInt(1, 100)) * 0.01.toString() + "px";
            all[i].style.width = xsize.toString() + "px";
            // all[i].style.backgroundColor = "#" + getRandomInt(1,999999).toString() ;
            all[i].style.backgroundColor = HSLToHex(getRandomInt(0, 360), 75, 50);
        }

        function getRandomInt(min, max) {
            min = Math.ceil(min);
            max = Math.floor(max);
            return Math.floor(Math.random() * (max - min)) + min;
        }
        $('#container').masonry({
            isFitWidth: true
        });
    });

    function HSLToHex(h, s, l) {
        s /= 100;
        l /= 100;

        let c = (1 - Math.abs(2 * l - 1)) * s,
            x = c * (1 - Math.abs((h / 60) % 2 - 1)),
            m = l - c / 2,
            r = 0,
            g = 0,
            b = 0;

        if (0 <= h && h < 60) {
            r = c;
            g = x;
            b = 0;
        } else if (60 <= h && h < 120) {
            r = x;
            g = c;
            b = 0;
        } else if (120 <= h && h < 180) {
            r = 0;
            g = c;
            b = x;
        } else if (180 <= h && h < 240) {
            r = 0;
            g = x;
            b = c;
        } else if (240 <= h && h < 300) {
            r = x;
            g = 0;
            b = c;
        } else if (300 <= h && h < 360) {
            r = c;
            g = 0;
            b = x;
        }
        // Having obtained RGB, convert channels to hex
        r = Math.round((r + m) * 255).toString(16);
        g = Math.round((g + m) * 255).toString(16);
        b = Math.round((b + m) * 255).toString(16);

        // Prepend 0s, if necessary
        if (r.length == 1)
            r = "0" + r;
        if (g.length == 1)
            g = "0" + g;
        if (b.length == 1)
            b = "0" + b;

        return "#" + r + g + b;
    }
});
</script>

</html>