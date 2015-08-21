<?
	include "../languages.php";
	include "header.php";
?>
<div id="main-content">
        
    <div id="leftColumn">
        <!--form action="sendmail.php" method="post" >
            <fieldset>
                <input type="text" onfocus="if(this.value == '<?=$name_italy;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$name_italy;?>';}" value="<?=$name_italy;?>" name="name" />
                <input type="text" onfocus="if(this.value == '<?=$email_italy;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$email_italy;?>';}" value="<?=$email_italy;?>" name="email" />
                <input type="text" onfocus="if(this.value == '<?=$phone_italy;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$phone_italy;?>';}" value="<?=$phone_italy;?>" name="phone" />
                <input type="text" onfocus="if(this.value == '<?=$amount_italy;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$amount_italy;?>';}" value="<?=$amount_italy;?>" name="amountOwed" />
                <textarea cols="" rows="" name="message" onfocus="if(this.value == '<?=$message_italy;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$message_italy;?>';}"><?=$message_italy;?></textarea>
                <input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR'] ?>" />
                <input type="image" src="<?=$btn_italy;?>" value="submit" name="submit" />
            </fieldset>
        </form-->
        <img src="../images/success.png" alt="" title="" class="success" />
    </div><!-- end #leftColumn -->
    
    <div id="rightColumn">
        <h1><?=$success_title_italy;?></h1>
        <p><?=$success_p1_italy;?></p>
        <p><a href="index.php"><?=$link_back_italy;?></a></p>
    </div><!-- end #rightColumn -->
    
    <img src="<?=$image_italy;?>" alt="" title="" class="flags" />
  
</div><!-- end #main-content -->
<?
	include "footer.php";
?>