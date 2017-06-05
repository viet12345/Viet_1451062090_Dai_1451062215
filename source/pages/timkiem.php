<?php
$tukhoa = $_GET["q"];
$tin = TimKiem($tukhoa);
while ($row_tintheoloaitin = mysql_fetch_array($tin)) {
?>
<div class="box-cat">
	<div class="cat1">
    	
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col0 col1">
            	<div class="news">
                    <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $row_tintheoloaitin['idTin'] ?>"><?php echo $row_tintheoloaitin['TieuDe'] ?></a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $row_tintheoloaitin['urlHinh'] ?>" />
                    <div class="des"><?php echo $row_tintheoloaitin['TomTat'] ?></div>
                    <div class="clear"></div>
                   
				</div>
            </div>
            
        </div>
    </div>
</div>
<div class="clear"></div>
<!-- box cat-->
<?php
}
?>