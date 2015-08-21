<?
	include "../languages.php";
	include "header.php";
?>
<div id="main-content">
        
    <div id="leftColumn">
        <!--form action="sendmail.php" method="post" >
            <fieldset>
                <input type="text" onfocus="if(this.value == '<?=$name_germany;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$name_germany;?>';}" value="<?=$name_germany;?>" name="name" />
                <input type="text" onfocus="if(this.value == '<?=$email_germany;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$email_germany;?>';}" value="<?=$email_germany;?>" name="email" />
                <input type="text" onfocus="if(this.value == '<?=$phone_germany;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$phone_germany;?>';}" value="<?=$phone_germany;?>" name="phone" />
                <input type="text" onfocus="if(this.value == '<?=$amount_germany;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$amount_germany;?>';}" value="<?=$amount_germany;?>" name="amountOwed" />
                <textarea cols="" rows="" name="message" onfocus="if(this.value == '<?=$message_germany;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$message_germany;?>';}"><?=$message_germany;?></textarea>
                <input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR'] ?>" />
                <input type="image" src="<?=$btn_germany;?>" value="submit" name="submit" />
            </fieldset>
        </form-->
        <img src="../images/success.png" alt="" title="" class="success" />
    </div><!-- end #leftColumn -->
    
    <div id="rightColumn">
        <h1><?=$success_title_germany;?></h1>
        <p><?=$success_p1_germany;?></p>
        <p><a href="index.php"><?=$link_back_germany;?></a></p>
    </div><!-- end #rightColumn -->
    
    <img src="<?=$image_germany;?>" alt="" title="" class="flags" />
  
</div><!-- end #main-content -->
<?
	include "footer.php";
?>