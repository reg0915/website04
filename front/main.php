<div class="di"
    style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">

    <div style="height:32px; display:block;"></div>
    <!--正中央-->

    <div style="width:100%; padding:2px; height:290px;">
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
        $("#mwww").html("<embed loop=true src='" + lin[now] + "' style='width:99%; height:100%;'></embed>")
        //$("#mwww").attr("src",lin[now])
        now++;
        if (now >= lin.length)
            now = 0;
    }

    ww();
    </script>

</div>