<?
	include "../languages.php";
	include "header.php";
?>
<div id="main-content">
        
    <div id="leftColumn">
        <img src="../images/error.png" alt="" title="" class="error" />
    </div><!-- end #leftColumn -->
    
    <div id="rightColumn">
        <h1><?=$error_title_italy;?></h1>
        <p><?=$error_p1_italy;?></p>
        <p><a href="index.php"><?=$link_back_italy;?></a></p>
    </div><!-- end #rightColumn -->
    
    <img src="<?=$image_italy;?>" alt="" title="" class="flags" />
  
</div><!-- end #main-content -->
<?
	include "footer.php";
?>