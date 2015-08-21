<div id="main-content">
        
    <div id="leftColumn">
        <form action="sendmail.php" method="post" >
            <fieldset>
                <input type="text" onfocus="if(this.value == '<?=$name_russia;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$name_russia;?>';}" value="<?=$name_russia;?>" name="name" />
                <input type="text" onfocus="if(this.value == '<?=$email_russia;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$email_russia;?>';}" value="<?=$email_russia;?>" name="email" />
                <input type="text" onfocus="if(this.value == '<?=$phone_russia;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$phone_russia;?>';}" value="<?=$phone_russia;?>" name="phone" />
                <input type="text" onfocus="if(this.value == '<?=$amount_russia;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$amount_russia;?>';}" value="<?=$amount_russia;?>" name="amountOwed" />
                <textarea cols="" rows="" name="message" onfocus="if(this.value == '<?=$message_russia;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$message_russia;?>';}"><?=$message_russia;?></textarea>
                <input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR'] ?>" />
                <input type="image" src="<?=$btn_russia;?>" value="submit" name="submit" />
            </fieldset>
        </form>
    </div><!-- end #leftColumn -->
    
    <div id="rightColumn">
        <h1><?=$h1_russia;?></h1>
        <p><?=$p1_russia;?></p>
        <p><?=$p2_russia;?></p>
        <p><?=$p3_russia;?></p>
        <p><?=$p4_russia;?></p>
    </div><!-- end #rightColumn -->
    
    <img src="<?=$image_russia;?>" alt="" title="" class="flags" />
  
</div><!-- end #main-content -->