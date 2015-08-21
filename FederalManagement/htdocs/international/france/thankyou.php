<?
	include "../languages.php";
	include "header.php";
?>
<div id="main-content">
        
    <div id="leftColumn">
        <!--form action="sendmail.php" method="post" >
            <fieldset>
                <input type="text" onfocus="if(this.value == '<?=$name_france;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$name_france;?>';}" value="<?=$name_france;?>" name="name" />
                <input type="text" onfocus="if(this.value == '<?=$email_france;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$email_france;?>';}" value="<?=$email_france;?>" name="email" />
                <input type="text" onfocus="if(this.value == '<?=$phone_france;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$phone_france;?>';}" value="<?=$phone_france;?>" name="phone" />
                <input type="text" onfocus="if(this.value == '<?=$amount_france;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$amount_france;?>';}" value="<?=$amount_france;?>" name="amountOwed" />
                <textarea cols="" rows="" name="message" onfocus="if(this.value == '<?=$message_france;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$message_france;?>';}"><?=$message_france;?></textarea>
                <input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR'] ?>" />
                <input type="image" src="<?=$btn_france;?>" value="submit" name="submit" />
            </fieldset>
        </form-->
        <img src="../images/success.png" alt="" title="" class="success" />
    </div><!-- end #leftColumn -->
    
    <div id="rightColumn">
        <h1><?=$success_title_france;?></h1>
        <p><?=$success_p1_france;?></p>
        <p><a href="index.php"><?=$link_back_france;?></a></p>
    </div><!-- end #rightColumn -->
    
    <img src="<?=$image_france;?>" alt="" title="" class="flags" />
  
</div><!-- end #main-content -->
<?
	include "footer.php";
?>