<div class="di" style="height:800px; ; width:76.5%; margin:2px 0px 0px 0px; float:left; position:relative; left:150px;">
    <!--正中央-->
    <?php include_once "logout.php";?>
    <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
        <p class="t cent botli">產品圖片管理</p>
        <form method="post" action="./api/edit.php">
            <table width="100%">
                <tbody>
                    <tr class="yel">
                        <td width="35%">產品圖片</td>
                        <td width="35%">產品文字</td>
                        <td width="10%">顯示</td>
                        <td width="10%">刪除</td>
                        <td></td>
                    </tr>
                    <?php
                    $div=3;
                    $total=$Image->count();
                    $pages=ceil($total/$div);
                    $now=$_GET['p']??1;
                    $start=($now-1)*$div;

                    $rows=$Image->all(" limit $start,$div");
                    foreach($rows as $row){
                    ?>
                    <tr>
                        <td>
                            <img src="./upload/<?=$row['img'];?>" style="width:50%;height:50%;">
                        </td>
                        <td>
                            <input type="text" name="text[]" value="<?=$row['text'];?>" style="width:95%">
                        </td>
                        <td>
                            <input type="checkbox" name="sh[]" value="<?=$row['id'];?>"
                                <?=($row['sh']==1)?'checked':'';?>>
                        </td>
                        <td>
                            <input type="checkbox" name="del[]" value="<?=$row['id'];?>">
                        </td>
                        <td>
                            <input type="button"
                                onclick="op('#cover','#cvr','./modal/upload_<?=$do;?>.php?id=<?=$row['id'];?>&table=<?=$do;?>')"
                                value="更換圖片">
                        </td>
                        <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <div class="cent">
                <div class="cent">
                    <?php

                if(($now-1)>0){
                    $prev=$now-1;
                    echo "<a href='?do=$do&p=$prev'> < </a>";
                }

                
                for($i=1;$i<=$pages;$i++){
                    $size=($i==$now)?"24px":"16px";
                    echo "<a href='?do=$do&p=$i' style='font-size:$size'> ";
                    echo $i;
                    echo " </a>";
                }

                if(($now+1)<=$pages){
                    $next=$now+1;
                    echo "<a href='?do=$do&p=$next'> > </a>";
                }

            ?>
                </div>
            </div>
            <table style="margin-top:40px; width:70%;">
                <tbody>
                    <tr>
                        <td width="200px">
                            <input type="button"
                                onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;./modal/image.php?table=<?=$do;?>&#39;)"
                                value="新增產品圖片">
                        </td>
                        <td class="cent">
                            <input type="hidden" name="table" value="<?=$do;?>">
                            <input type="submit" value="修改確定">
                            <input type="reset" value="重置">
                        </td>
                    </tr>
                </tbody>
            </table>

        </form>
    </div>
</div>