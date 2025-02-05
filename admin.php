<?php include_once "api/db.php";?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>地匠工坊</title>
    <!-- link css 順序 1.bs 2.self -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="./js/jquery-1.9.1.min.js"></script>
    <script src="./js/js.js"></script>

    <style>

    </style>
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
                        <a class="nav-link highlight-hover" href="index.php">首頁</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link highlight-hover" href="#page1">關於</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link highlight-hover" href="?do=image">產品圖片管理</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link highlight-hover" href="?do=mvim">輪播圖片管理</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link highlight-hover" href="?do=menu">選單管理</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link highlight-hover" href="?do=bottom">頁尾版權資料管理</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link highlight-hover" href="?do=ad">動態文字廣告管理</a>
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

        <?php
        $do=$_GET['do']??'title';
        $file="./backend/{$do}.php";

        if(file_exists($file)){
            include $file;
        }else{
            include "./backend/title.php";
        }
        ?>
    </div>
    </div>





</body>

</html>