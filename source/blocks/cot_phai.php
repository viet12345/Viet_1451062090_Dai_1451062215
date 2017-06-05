<!-- box cat -->
<?php
$idLT=5;
?>

<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#"><?php echo TenLoaiTin($idLT) ?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        
        <?php
		$mottin= TinMoiNhat_TheoLoaiTin_MotTin($idLT);
		$row_mottin= mysql_fetch_array($mottin);
		?>
        	<div class="col1">
            	<div class="news">
                <h3 class="title" ><a href="index.php?p=chitiettiet&idTin=<?php echo $row_mottin['idTin']?>"> <?php echo $row_mottin['TieuDe']?> </a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $row_mottin['urlHinh']?>" align="left" />
                    <div class="des"><?php echo $row_mottin['TomTat']?> </div>
                  
                  
                    <div class="clear"></div>
                   
				</div>
            </div>
            <div class="col2">
            <?php
			$tinmoi_namtin= TinMoiNhat_TheoLoaiTin_NamTin($idLT);
			while ($row_tinmoi_namtin= mysql_fetch_array($tinmoi_namtin) ){
			?>
           <h3 class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo$row_tinmoi_namtin['idTin']?>"><?php echo$row_tinmoi_namtin['TieuDe']?> </a></h3>
            <?php
			}
			?>
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->


<!-- box cat -->
<?php
$idLT=4;
?>

<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#"><?php echo TenLoaiTin($idLT) ?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        
        <?php
		$mottin= TinMoiNhat_TheoLoaiTin_MotTin($idLT);
		$row_mottin= mysql_fetch_array($mottin);
		?>
        	<div class="col1">
            	<div class="news">
                <h3 class="title" ><a href="index.php?p=chitiettiet&idTin=<?php echo $row_mottin['idTin']?>"> <?php echo $row_mottin['TieuDe']?> </a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $row_mottin['urlHinh']?>" align="left" />
                    <div class="des"><?php echo $row_mottin['TomTat']?> </div>
                  
                  
                    <div class="clear"></div>
                   
				</div>
            </div>
            <div class="col2">
            <?php
			$tinmoi_namtin= TinMoiNhat_TheoLoaiTin_NamTin($idLT);
			while ($row_tinmoi_namtin= mysql_fetch_array($tinmoi_namtin) ){
			?>
           <h3 class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo$row_tinmoi_namtin['idTin']?>"><?php echo$row_tinmoi_namtin['TieuDe']?> </a></h3>
            <?php
			}
			?>
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->


<!-- box cat -->
<?php
$idLT=6;
?>

<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#"><?php echo TenLoaiTin($idLT) ?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        
        <?php
		$mottin= TinMoiNhat_TheoLoaiTin_MotTin($idLT);
		$row_mottin= mysql_fetch_array($mottin);
		?>
        	<div class="col1">
            	<div class="news">
                <h3 class="title" ><a href="index.php?p=chitiettiet&idTin=<?php echo $row_mottin['idTin']?>"> <?php echo $row_mottin['TieuDe']?> </a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $row_mottin['urlHinh']?>" align="left" />
                    <div class="des"><?php echo $row_mottin['TomTat']?> </div>
                  
                  
                    <div class="clear"></div>
                   
				</div>
            </div>
            <div class="col2">
            <?php
			$tinmoi_namtin= TinMoiNhat_TheoLoaiTin_NamTin($idLT);
			while ($row_tinmoi_namtin= mysql_fetch_array($tinmoi_namtin) ){
			?>
           <h3 class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo$row_tinmoi_namtin['idTin']?>"><?php echo$row_tinmoi_namtin['TieuDe']?> </a></h3>
            <?php
			}
			?>
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->


<!-- box cat -->
<?php
$idLT=2;
?>

<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#"><?php echo TenLoaiTin($idLT) ?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        
        <?php
		$mottin= TinMoiNhat_TheoLoaiTin_MotTin($idLT);
		$row_mottin= mysql_fetch_array($mottin);
		?>
        	<div class="col1">
            	<div class="news">
                <h3 class="title" ><a href="index.php?p=chitiettiet&idTin=<?php echo $row_mottin['idTin']?>"> <?php echo $row_mottin['TieuDe']?> </a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $row_mottin['urlHinh']?>" align="left" />
                    <div class="des"><?php echo $row_mottin['TomTat']?> </div>
                  
                  
                    <div class="clear"></div>
                   
				</div>
            </div>
            <div class="col2">
            <?php
			$tinmoi_namtin= TinMoiNhat_TheoLoaiTin_NamTin($idLT);
			while ($row_tinmoi_namtin= mysql_fetch_array($tinmoi_namtin) ){
			?>
           <h3 class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo$row_tinmoi_namtin['idTin']?>"><?php echo$row_tinmoi_namtin['TieuDe']?> </a></h3>
            <?php
			}
			?>
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->