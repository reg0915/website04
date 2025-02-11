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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="./js/jquery-1.9.1.min.js"></script>
    <script src="./js/js.js"></script>



</head>

<body>
       <!-- nav -->
       <div id="cover" style="display:none; ">
        <div id="coverr">
            <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"
                onclick="cl(&#39;#cover&#39;)">X</a>
            <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
        </div>
    </div>

  

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
                        <a class="nav-link highlight-hover" href="#home"><i class="fa-solid fa-house"></i>首頁</a>
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


    <table style=" width:70%; bor; border: #000;">
                <tbody>
                    <tr>
                        <td width="200px">
                            <input type="button"
                                onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;./modal/login.php?table=login&#39;)"
                                value="新增網站標題圖片">

                        </td>
                        <td class="cent">
                            <input type="hidden" name="table" value="<?=$do;?>">
                            <input type="submit" value="修改確定">
                            <input type="reset" value="重置">
                        </td>
                    </tr>
                </tbody>
            </table>






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
                            <?php
    $abouts=$About->all(['sh'=>1]);
    foreach($abouts as $about){
        echo $about['text'];
        //echo "&nbsp;&nbsp;&nbsp;&nbsp;";
        echo str_repeat("&nbsp;",4);
    }
?>
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
                                <p class="text">
                                    <?php

                                     $imgs=$Image->all(['sh'=>1,'type' => 2]);
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
                    $imgs=$Image->all(['sh'=>1,'type' => 3]);
                    foreach($imgs as $idx => $img){
                        echo "<div class='im' id='ssaa{$idx}'>";
                        echo "<img src='./upload/{$img['img']}' style='width:300px;height:300px;border:3px solid orange'>";
                        echo "</div>";
                    }
                        ?>
                            <div class="overlay">
                                <p class="text">
                                    <?php

$imgs=$Image->all(['sh'=>1,'type' => 3]);
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
                    $imgs=$Image->all(['sh'=>1,'type' => 4]);
                    foreach($imgs as $idx => $img){
                        echo "<div class='im' id='ssaa{$idx}'>";
                        echo "<img src='./upload/{$img['img']}' style='width:300px;height:300px;border:3px solid orange'>";
                        echo "</div>";
                    }
                        ?>
                            <div class="overlay">
                                <p class="text">
                                    <?php

$imgs=$Image->all(['sh'=>1,'type' => 4]);
foreach($imgs as $img){
    echo $img['text'];
    
    echo str_repeat("&nbsp;",4);
}
?>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="row justify-content-center ">
                    <div class="col-2">
                        <div class="container-image">
                            <?php 
                    $imgs=$Image->all(['sh'=>1,'type' => 5]);
                    foreach($imgs as $idx => $img){
                        echo "<div class='im' id='ssaa{$idx}'>";
                        echo "<img src='./upload/{$img['img']}' style='width:300px;height:300px;border:3px solid orange'>";
                        echo "</div>";
                    }
                        ?>
                            <div class="overlay">
                                <p class="text">
                                    <?php
                                $imgs=$Image->all(['sh'=>1,'type' => 5]);
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
                    $imgs=$Image->all(['sh'=>1,'type' => 6]);
                    foreach($imgs as $idx => $img){
                        echo "<div class='im' id='ssaa{$idx}'>";
                        echo "<img src='./upload/{$img['img']}' style='width:300px;height:300px;border:3px solid orange'>";
                        echo "</div>";
                    }
                        ?>
                            <div class="overlay">
                                <p class="text">
                                    <?php
                                $imgs=$Image->all(['sh'=>1,'type' => 6]);
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
                    $imgs=$Image->all(['sh'=>1,'type' => 7]);
                    foreach($imgs as $idx => $img){
                        echo "<div class='im' id='ssaa{$idx}'>";
                        echo "<img src='./upload/{$img['img']}' style='width:300px;height:300px;border:3px solid orange'>";
                        echo "</div>";
                    }
                        ?>
                            <div class="overlay">
                                <p class="text">
                                    <?php
                                $imgs=$Image->all(['sh'=>1,'type' => 7]);
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
                    $imgs=$Image->all(['sh'=>1,'type' => 8]);
                    foreach($imgs as $idx => $img){
                        echo "<div class='im' id='ssaa{$idx}'>";
                        echo "<img src='./upload/{$img['img']}' style='width:300px;height:300px;border:3px solid orange'>";
                        echo "</div>";
                    }
                        ?>
                            <div class="overlay">
                                <p class="text">
                                    <?php
                                $imgs=$Image->all(['sh'=>1,'type' => 8]);
foreach($imgs as $img){
    echo $img['text'];
    
    echo str_repeat("&nbsp;",4);
}
?>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="row justify-content-center ">
                    <div class="col-2">
                        <div class="container-image">
                            <?php 
                    $imgs=$Image->all(['sh'=>1,'type' => 9]);
                    foreach($imgs as $idx => $img){
                        echo "<div class='im' id='ssaa{$idx}'>";
                        echo "<img src='./upload/{$img['img']}' style='width:300px;height:300px;border:3px solid orange'>";
                        echo "</div>";
                    }
                        ?>
                            <div class="overlay">
                                <p class="text">
                                    <?php
                                $imgs=$Image->all(['sh'=>1,'type' => 9]);
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
                    $imgs=$Image->all(['sh'=>1,'type' => 10]);
                    foreach($imgs as $idx => $img){
                        echo "<div class='im' id='ssaa{$idx}'>";
                        echo "<img src='./upload/{$img['img']}' style='width:300px;height:300px;border:3px solid orange'>";
                        echo "</div>";
                    }
                        ?>
                            <div class="overlay">
                                <p class="text">
                                    <?php
                                $imgs=$Image->all(['sh'=>1,'type' => 10]);
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
                    $imgs=$Image->all(['sh'=>1,'type' => 11]);
                    foreach($imgs as $idx => $img){
                        echo "<div class='im' id='ssaa{$idx}'>";
                        echo "<img src='./upload/{$img['img']}' style='width:300px;height:300px;border:3px solid orange'>";
                        echo "</div>";
                    }
                        ?>
                            <div class="overlay">
                                <p class="text">
                                    <?php
                                $imgs=$Image->all(['sh'=>1,'type' => 11]);
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
                    $imgs=$Image->all(['sh'=>1,'type' => 12]);
                    foreach($imgs as $idx => $img){
                        echo "<div class='im' id='ssaa{$idx}'>";
                        echo "<img src='./upload/{$img['img']}' style='width:300px;height:300px;border:3px solid orange'>";
                        echo "</div>";
                    }
                        ?>
                            <div class="overlay">
                                <p class="text">
                                    <?php
                                $imgs=$Image->all(['sh'=>1,'type' => 12]);
foreach($imgs as $img){
    echo $img['text'];
    
    echo str_repeat("&nbsp;",4);
}
?>
                                </p>
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