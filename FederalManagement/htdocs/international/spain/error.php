<?
	include "../languages.php";
	include "header.php";
?>
<div id="main-content">
        
    <div id="leftColumn">
        <img src="../images/error.png" alt="" title="" class="error" />
    </div><!-- end #leftColumn -->
    
    <div id="rightColumn">
        <h1><?=$error_title_spain;?></h1>
        <p><?=$error_p1_spain;?></p>
        <p><a href="index.php"><?=$link_back_spain;?></a></p>
    </div><!-- end #rightColumn -->
    
    <img src="<?=$image_spain;?>" alt="" title="" class="flags" />
  
</div><!-- end #main-content -->
<?
	include "footer.php";
?>