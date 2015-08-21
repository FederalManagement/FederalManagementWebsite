<div id="main-content">
        
    <div id="leftColumn">
        <form action="sendmail.php" method="post" >
            <fieldset>
                <input type="text" onfocus="if(this.value == '<?=$name_spain;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$name_spain;?>';}" value="<?=$name_spain;?>" name="name" />
                <input type="text" onfocus="if(this.value == '<?=$email_spain;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$email_spain;?>';}" value="<?=$email_spain;?>" name="email" />
                <input type="text" onfocus="if(this.value == '<?=$phone_spain;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$phone_spain;?>';}" value="<?=$phone_spain;?>" name="phone" />
                <input type="text" onfocus="if(this.value == '<?=$amount_spain;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$amount_spain;?>';}" value="<?=$amount_spain;?>" name="amountOwed" />
                <textarea cols="" rows="" name="message" onfocus="if(this.value == '<?=$message_spain;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$message_spain;?>';}"><?=$message_spain;?></textarea>
                <input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR'] ?>" />
                <input type="image" src="<?=$btn_spain;?>" value="submit" name="submit" />
            </fieldset>
        </form>
    </div><!-- end #leftColumn -->
    
    <div id="rightColumn">
        <h1><?=$h1_spain;?></h1>
        <p><?=$p1_spain;?></p>
        <p><?=$p2_spain;?></p>
        <p><?=$p3_spain;?></p>
        <p><?=$p4_spain;?></p>
    </div><!-- end #rightColumn -->
    
    <img src="<?=$image_spain;?>" alt="" title="" class="flags" />
  
</div><!-- end #main-content -->