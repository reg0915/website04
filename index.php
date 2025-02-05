<?php include_once "api/db.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>地匠工坊</title>
    <!-- link css 順序 1.bs 2.self -->
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="./js/jquery-1.9.1.min.js"></script>
    <script src="./js/js.js"></script>

</head>

<body>

    <!-- nav -->

    <!-- 訊息滾動條 -->
    <div class="main-header">
        <marquee behavior="scroll" direction="left">
            <?php
    $ads=$Ad->all(['sh'=>1]);
    foreach($ads as $ad){
        echo $ad['text'];
        //echo "&nbsp;&nbsp;&nbsp;&nbsp;";
        echo str_repeat("&nbsp;",4);
    }
?>
        </marquee>
    </div>


    <nav class="navbar navbar-expand-sm navbar-dark bg-dark position: sticky top: 0 z-index: 1050 sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="javascript:void(0)">地匠工坊</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link highlight-hover" href="#home">首頁</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link highlight-hover" href="#page1">關於</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link highlight-hover" href="#page2">產品介紹</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Search">
                    <button class="btn btn-primary" type="button">開 始</button>
                </form>
            </div>
        </div>
    </nav>



    <div class="col">
        <div id="demo2" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo2" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo2" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo2" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div id="demo2" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" id="home">
                    <div style="width:100%; padding:2px; height: 800px;px;">
                        <div id="mwww" loop="true" style="width:100%; height:100%;">

                        </div>
                    </div>
                    <script>
                    var lin = new Array();
                    <?php 
                     $mvs=$Mvim->all(['sh'=>1]);
                     foreach($mvs as $mv){
                         echo "lin.push('upload/{$mv['img']}');";
                     }
                
                     ?>
                    var now = 0;
                    if (lin.length > 1) {
                        setInterval("ww()", 3000);
                        //now = 1;
                    }

                    function ww() {
                        // console.log("HI");
                        $("#mwww").html("<embed loop=true src='" + lin[now] +
                            "' style='width:99%; height:100%;'></embed>")
                        //$("#mwww").attr("src",lin[now])
                        now++;
                        if (now >= lin.length)
                            now = 0;
                    }

                    ww();
                    </script>


                </div>
                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo2" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo2" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


            <br id="page1">

            <!-- 公司位置 -->
            <div class="container my-5">
                <div class="row">
                    <div class="col-6">
                        <h2 class="text-center ">關於地匠工坊</h2>
                        <br>
                        <p>
                            地匠工坊專注於提供高品質的坐地板產品，無論是住宅、商業空間還是特殊場合，我們的坐地板都能為您的環境帶來舒適與美觀。我們以精湛的工藝和優質的材料為基礎，致力於創造出適合各種風格與需求的坐地板，並結合傳統手工藝與現代設計元素，為顧客提供個性化、耐用且具有藝術感的地板選擇。

                            地匠工坊的坐地板系列，擁有多種款式與顏色選擇，無論是自然木紋還是現代化的簡約風，都能與您的空間完美融合。專業的安裝團隊確保每一塊地板都精確無誤地鋪設，並提供長期的保養與售後服務，讓您的每一次使用都感受到質感與舒適。

                            選擇地匠工坊，就是選擇一個專業且用心的夥伴，為您的居家或商業空間打造一個溫馨且具設計感的環境。我們相信，地板不僅是空間的基礎，更是舒適生活的一部分，讓我們一起為您的空間帶來更多可能！
                        </p>
                    </div>
                    <div class="col-6 ">
                        <h1 class="text-center mb-4">銷售中心</h1>
                        <div class="ratio ratio-16x9" id="map-section">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7229.349693190919!2d121.41427608518516!3d25.04510638060116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a7bec9ad74b1%3A0xa639904a89f26435!2z5Yue5YuV6YOo5Yue5YuV5Yqb55m85bGV572y5YyX5Z-65a6c6Iqx6YeR6aas5YiG572y5rOw5bGx6IG35qWt6KiT57e05aC0!5e0!3m2!1szh-TW!2stw!4v1734594955792!5m2!1szh-TW!2stw"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>


                </div>
            </div>
            <hr class="my-5 thick-line" id="page2">

            <!-- 圖片滑動 -->



            <h3 class="text-center">產品介紹</h3>
            <br>
            <div class="row">
                <div class="row justify-content-center ">
                    <div class="col-2">
                        <div class="container-image">
                            <?php 
                    $imgs=$Image->all(['sh'=>1,'type' => 1]);
                    foreach($imgs as $idx => $img){
                        echo "<div class='im' id='ssaa{$idx}'>";
                        echo "<img src='./upload/{$img['img']}' style='width:300px;height:300px;border:3px solid orange'>";
                        echo "</div>";
                    }

                        ?>
                            <div class="overlay">
                                <p class="text">

                                    <?php

                                     $imgs=$Image->all(['sh'=>1,'type' => 1]);
                                     foreach($imgs as $img){
                                         echo $img['text'];
                                         
                                         echo str_repeat("&nbsp;",4);
                                     }
                                     ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="container-image">
                            <?php 
                    $imgs=$Image->all(['sh'=>1,'type' => 2]);
                    foreach($imgs as $idx => $img){
                        echo "<div class='im' id='ssaa{$idx}'>";
                        echo "<img src='./upload/{$img['img']}' style='width:300px;height:300px;border:3px solid orange'>";
                        echo "</div>";
                    }

                        ?>
                            <div class="overlay">
                                <p class="text">青金石藍</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="container-image">
                            <img src="https://www.lamett.com.tw/archive/%E7%94%A2%E5%93%81/%E6%B0%B4%E6%98%9F/%E5%90%8D%E8%B4%B5%E5%A4%A7%E7%90%86%E7%9F%B3%E7%B3%BB%E5%88%97/%E7%BE%A9%E5%A4%A7%E5%88%A9%E9%9B%B2%E7%9F%B3%E7%81%B0/%E5%A4%9A%E6%8B%BC.jpg"
                                alt="Image" class="image">
                            <div class="overlay">
                                <p class="text">格蘭雲天</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="container-image">
                            <img src="https://images.pexels.com/photos/220177/pexels-photo-220177.jpeg?auto=compress&cs=tinysrgb&w=600"
                                alt="Image" class="image">
                            <div class="overlay">
                                <p class="text">義大利雲石灰</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="row justify-content-center ">
                    <div class="col-2">
                        <div class="container-image">
                            <img src="https://www.lamett.com.tw/archive/%E7%94%A2%E5%93%81/%E6%B0%B4%E6%98%9F/%E7%8F%8D%E7%A8%80%E5%A4%A7%E7%90%86%E7%9F%B3%E7%B3%BB%E5%88%97/%E8%97%8D%E8%89%B2%E5%AF%B6%E7%9F%B3-A/%E5%A4%9A%E6%8B%BC.jpg"
                                alt="Image" class="image">
                            <div class="overlay">
                                <p class="text">藍色寶石</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="container-image">
                            <img src="https://www.lamett.com.tw/archive/%E7%94%A2%E5%93%81/%E5%A4%A9%E7%8E%8B%E6%98%9F/%E7%95%A2%E5%8D%A1%E7%B4%A2%E7%B3%BB%E5%88%97/%E5%B0%8F%E5%B1%8B%E6%A8%B9%E6%9C%A8/%E5%AE%98%E7%B6%B2-%E5%BA%AD%E5%9C%92%E5%B0%8F%E5%B1%8B_%E5%B7%A5%E4%BD%9C%E5%8D%80%E5%9F%9F%201.png"
                                alt="Image" class="image">
                            <div class="overlay">
                                <p class="text">庭園小屋Ⅱ</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="container-image">
                            <img src="https://www.lamett.com.tw/archive/%E7%94%A2%E5%93%81/%E5%A4%A9%E7%8E%8B%E6%98%9F/%E7%95%A2%E5%8D%A1%E7%B4%A2%E7%B3%BB%E5%88%97/%E6%9B%BC%E9%99%80%E6%9E%97/%E5%AE%98%E7%B6%B2-%E6%9B%BC%E9%99%80%E6%9E%97_%E5%B7%A5%E4%BD%9C%E5%8D%80%E5%9F%9F%201.png"
                                alt="Image" class="image">
                            <div class="overlay">
                                <p class="text">曼陀林</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="container-image">
                            <img src="https://www.lamett.com.tw/archive/%E7%94%A2%E5%93%81/%E5%A4%A9%E7%8E%8B%E6%98%9F/%E5%84%AA%E5%8B%9D%E7%BE%8E%E5%9C%B0%E6%A3%AE%E6%9E%97%E7%B3%BB%E5%88%97/%E5%9C%8B%E7%8E%8B%E9%87%91%E6%9D%89/%E5%AE%98%E7%B6%B2-%E5%9C%8B%E7%8E%8B%E9%87%91%E5%B1%B1_%E5%B7%A5%E4%BD%9C%E5%8D%80%E5%9F%9F%201.png"
                                alt="Image" class="image">
                            <div class="overlay">
                                <p class="text">國王金杉Ⅱ</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="row justify-content-center ">
                    <div class="col-2">
                        <div class="container-image">
                            <img src="https://www.lamett.com.tw/archive/%E7%94%A2%E5%93%81/%E5%A4%A9%E7%8E%8B%E6%98%9F/%E5%84%AA%E5%8B%9D%E7%BE%8E%E5%9C%B0%E6%A3%AE%E6%9E%97%E7%B3%BB%E5%88%97/%E5%8A%A0%E5%B7%9E%E9%87%91%E6%9C%A8/%E5%AE%98%E7%B6%B2-%E5%8A%A0%E5%B7%9E%E9%87%91%E6%9C%A8_%E5%B7%A5%E4%BD%9C%E5%8D%80%E5%9F%9F%201.png"
                                alt="Image" class="image">
                            <div class="overlay">
                                <p class="text">加州金木Ⅱ</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="container-image">
                            <img src="https://www.lamett.com.tw/archive/%E7%94%A2%E5%93%81/%E5%A4%A9%E7%8E%8B%E6%98%9F/%E5%84%AA%E5%8B%9D%E7%BE%8E%E5%9C%B0%E6%A3%AE%E6%9E%97%E7%B3%BB%E5%88%97/%E5%9C%8B%E7%8E%8B%E9%9B%AA%E6%9D%89/%E5%AE%98%E7%B6%B2-%E5%9C%8B%E7%8E%8B%E9%9B%AA%E6%9D%89_%E5%B7%A5%E4%BD%9C%E5%8D%80%E5%9F%9F%201.png"
                                alt="Image" class="image">
                            <div class="overlay">
                                <p class="text">國王雪杉Ⅱ</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="container-image">
                            <img src="https://www.lamett.com.tw/archive/%E7%94%A2%E5%93%81/%E5%A4%A9%E7%8E%8B%E6%98%9F/%E5%84%AA%E5%8B%9D%E7%BE%8E%E5%9C%B0%E6%A3%AE%E6%9E%97%E7%B3%BB%E5%88%97/%E8%9D%B4%E8%9D%B6%E7%B1%B3%E6%9D%89/%E5%AE%98%E7%B6%B2-%E8%9D%B4%E8%9D%B6%E7%B1%B3%E6%9D%89-02.png"
                                alt="Image" class="image">
                            <div class="overlay">
                                <p class="text">蝴蝶米杉Ⅱ</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="container-image">
                            <img src="https://www.lamett.com.tw/archive/%E7%94%A2%E5%93%81/%E5%A4%A9%E7%8E%8B%E6%98%9F/%E5%84%AA%E5%8B%9D%E7%BE%8E%E5%9C%B0%E6%A3%AE%E6%9E%97%E7%B3%BB%E5%88%97/%E8%9D%B4%E8%9D%B6%E6%9D%89/%E8%9D%B4%E8%9D%B6%E6%9D%89_%E5%B7%A5%E4%BD%9C%E5%8D%80%E5%9F%9F%201.png"
                                alt="Image" class="image">
                            <div class="overlay">
                                <p class="text">蝴蝶杉Ⅱ</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>














            <!-- js include 順序 1.bs 2.jq 3.self -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"
                integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
                integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>



            <script>
            const imageContainers = document.querySelectorAll('.container-image');

            imageContainers.forEach(container => {
                container.addEventListener('mouseenter', () => {
                    imageContainers.forEach(item => item.classList.add('hovered'));
                });
                container.addEventListener('mouseleave', () => {
                    imageContainers.forEach(item => item.classList.remove('hovered'));
                });
            });
            </script>




            <script>
            $(document).ready(function() {

                $(document).ready(function() {
                    let prevScrollPos = window.pageYOffset;
                    const navbar = $('#navbar');

                    $(window).on('scroll', function() {
                        const currentScrollPos = window.pageYOffset;

                        if (prevScrollPos > currentScrollPos) {
                            // 滾動向上，顯示 navbar
                            navbar.css('top', '0');
                        } else {
                            // 滾動向下，隱藏 navbar
                            navbar.css('top', '-80px');
                        }
                        prevScrollPos = currentScrollPos;
                    });
                });

            });
            </script>
</body>

</html>