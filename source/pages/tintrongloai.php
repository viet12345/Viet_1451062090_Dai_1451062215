<?php
$idLT = $_GET["idLT"];
settype ($idLT,"int");
?>
<?php
$vitri = ViTriDung($idLT);
$row_vitri = mysql_fetch_array($vitri);
?>
<div>
Trang chủ >> <?php echo $row_vitri['TenTL'] ?> >> <?php echo $row_vitri['Ten'] ?>
</div>


<?php
$sotin1trang = 4;
if (isset($_GET["trang"])) {
	$trang = $_GET["trang"];
	settype ($trang,"int");
}
	else
	{
		$trang = 1;
}
$from = ($trang - 1)*$sotin1trang;
$tintheoloaitin = TinTheoLoaiTin_PhanTrang($idLT, $from, $sotin1trang);
while ($row_tintheoloaitin = mysql_fetch_array($tintheoloaitin)) {
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

<style>
#phantrang{text-align:center}
#phantrang a {background-color:#000;color:#FF0; padding:5px; margin-right:3px;}
#phantrang a:hover{color:#F00;background-color:#0C0}
</style>
<div id = "phantrang">
<?php
$t = TinTheoLoaiTin($idLT);
$tongsotin = mysql_num_rows($t);
$tongsotrang = ceil($tongsotin/$sotin1trang);
for ($i=1; $i <= $tongsotrang; $i++)
{
?>
<a href = "index.php?p=tintrongloai&idLT=<?php echo $idLT ?>&trang=<?php echo $i ?>">
<?php echo $i ?></a>
<?php
}
?>
</div>
