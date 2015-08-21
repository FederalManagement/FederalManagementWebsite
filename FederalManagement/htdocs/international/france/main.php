<div id="main-content">
        
    <div id="leftColumn">
        <form action="sendmail.php" method="post" >
            <fieldset>
                <input type="text" onfocus="if(this.value == '<?=$name_france;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$name_france;?>';}" value="<?=$name_france;?>" name="name" />
                <input type="text" onfocus="if(this.value == '<?=$email_france;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$email_france;?>';}" value="<?=$email_france;?>" name="email" />
                <input type="text" onfocus="if(this.value == '<?=$phone_france;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$phone_france;?>';}" value="<?=$phone_france;?>" name="phone" />
                <input type="text" onfocus="if(this.value == '<?=$amount_france;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$amount_france;?>';}" value="<?=$amount_france;?>" name="amountOwed" />
                <textarea cols="" rows="" name="message" onfocus="if(this.value == '<?=$message_france;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$message_france;?>';}"><?=$message_france;?></textarea>
                <input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR'] ?>" />
                <input type="image" src="<?=$btn_france;?>" value="submit" name="submit" />
            </fieldset>
        </form>
    </div><!-- end #leftColumn -->
    
    <div id="rightColumn">
        <h1><?=$h1_france;?></h1>
        <p><?=$p1_france;?></p>
        <p><?=$p2_france;?></p>
        <p><?=$p3_france;?></p>
        <p><?=$p4_france;?></p>
    </div><!-- end #rightColumn -->
    
    <img src="<?=$image_france;?>" alt="" title="" class="flags" />
  
</div><!-- end #main-content -->