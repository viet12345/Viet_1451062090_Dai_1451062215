<div id="slide-left">

<?php
	$tinmoinhat_mottin = TinMoiNhat_MotTin();
	$row_tinmoinhat_mottin = mysql_fetch_array($tinmoinhat_mottin);
?>

        	<div id="slideleft-main">
                <img src="upload/tintuc/<?php echo $row_tinmoinhat_mottin['urlHinh']?>"  /><br />
                <h2 class="title"><a href="index.php?p=chitiettin&idTin=<?php echo $row_tinmoinhat_mottin['urlHinh']?>"><?php echo $row_tinmoinhat_mottin['TieuDe']?></a> </h2>
                <div class="des">
                    <?php echo $row_tinmoinhat_mottin['TomTat']?> 
                </div>
       
        	</div>
            <div id="slideleft-scroll">
            	
              <div class="content_scoller width_common">
            <ul>
               <?php
				$tinmoinhat_namtin= TinMoiNhat_NamTin();
				while($row_tinmoinhat_namtin= mysql_fetch_array($tinmoinhat_namtin)) {
			?>
               <li>
                <div class="title_news">
               		<a href="index.php?p=chitiettin&idTin=<?php echo $row_tinmoinhat_namtin['idTin']  ?>" class="txt_link"><?php echo $row_tinmoinhat_namtin['TieuDe']  ?></a> 
                </div>
              </li>
              <?php
			  }?>
            </ul>
            </div>			
            
			<div id="gocnhin">
                <img alt="" src="images/1.png" width="100%"></a>
                <div class="title_news"></div>
            </div>
                
            </div>
</div>


     