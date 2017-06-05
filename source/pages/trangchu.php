<?php
$theloai = DsTheLoai();
while ($row_theloai = mysql_fetch_array($theloai)) {
$idTL = $row_theloai['idTL'];
?>
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#"><?php echo $row_theloai['TenTL'] ?></a>
        </div>
        <div class="child-cat">
        <?php
			$loaitin = DsLoaiTin_Theo_TheLoai($idTL);
			while ($row_loaitin = mysql_fetch_array($loaitin)) {
		?>
        
        	<a href="index.php?p=tintrongloai&idLT=<?php echo $row_loaitin['idLT'] ?>"><?php echo $row_loaitin['Ten'] ?></a>
        <?php
			}
		?>    
        </div>
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col1">
            	<div class="news">
                <?php
					$tinbentrai = TinMoi_BenTrai($idTL);
					$row_tinbentrai = mysql_fetch_array($tinbentrai);
                ?>
                    <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $row_tinbentrai['idTin'] ?>"><?php echo $row_tinbentrai['TieuDe'] ?></a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $row_tinbentrai['urlHinh'] ?>" align="left" />
                    <div class="des"><?php echo $row_tinbentrai['TomTat'] ?> </div>
                    <div class="clear"></div>
                   
				</div>
            </div>
            <div class="col2">
            <?php
			$tinbenphai= TinMoi_BenPhai($idTL);
			while($row_tinbenphai= mysql_fetch_array($tinbenphai)) {
            ?>
             <p class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo $row_tinbenphai['idTin'] ?>"> <?php echo $row_tinbenphai['TieuDe'] ?></a>
                </a></p>
                <?php
				}	
				?>
            </div>    
        </div>
    </div>
</div>
<div class="clear"></div>
<!-- box cat-->
<?php
}
?>



