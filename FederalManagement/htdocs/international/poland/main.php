<div id="main-content">
        
    <div id="leftColumn">
        <form action="sendmail.php" method="post" >
            <fieldset>
                <input type="text" onfocus="if(this.value == '<?=$name_poland;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$name_poland;?>';}" value="<?=$name_poland;?>" name="name" />
                <input type="text" onfocus="if(this.value == '<?=$email_poland;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$email_poland;?>';}" value="<?=$email_poland;?>" name="email" />
                <input type="text" onfocus="if(this.value == '<?=$phone_poland;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$phone_poland;?>';}" value="<?=$phone_poland;?>" name="phone" />
                <input type="text" onfocus="if(this.value == '<?=$amount_poland;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$amount_poland;?>';}" value="<?=$amount_poland;?>" name="amountOwed" />
                <textarea cols="" rows="" name="message" onfocus="if(this.value == '<?=$message_poland;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$message_poland;?>';}"><?=$message_poland;?></textarea>
                <input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR'] ?>" />
                <input type="image" src="<?=$btn_poland;?>" value="submit" name="submit" />
            </fieldset>
        </form>
    </div><!-- end #leftColumn -->
    
    <div id="rightColumn">
        <h1><?=$h1_poland;?></h1>
        <p><?=$p1_poland;?></p>
        <p><?=$p2_poland;?></p>
        <p><?=$p3_poland;?></p>
        <p><?=$p4_poland;?></p>
    </div><!-- end #rightColumn -->
    
    <img src="<?=$image_poland;?>" alt="" title="" class="flags" />
  
</div><!-- end #main-content -->