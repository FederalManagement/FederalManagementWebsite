<div id="main-content">
        
    <div id="leftColumn">
        <form action="sendmail.php" method="post" >
            <fieldset>
                <input type="text" onfocus="if(this.value == '<?=$name_arabic;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$name_arabic;?>';}" value="<?=$name_arabic;?>" name="name" />
                <input type="text" onfocus="if(this.value == '<?=$email_arabic;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$email_arabic;?>';}" value="<?=$email_arabic;?>" name="email" />
                <input type="text" onfocus="if(this.value == '<?=$phone_arabic;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$phone_arabic;?>';}" value="<?=$phone_arabic;?>" name="phone" />
                <input type="text" onfocus="if(this.value == '<?=$amount_arabic;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$amount_arabic;?>';}" value="<?=$amount_arabic;?>" name="amountOwed" />
                <textarea cols="" rows="" name="message" onfocus="if(this.value == '<?=$message_arabic;?>'){this.value = '';}" onblur="if(this.value == ''){this.value='<?=$message_arabic;?>';}"><?=$message_arabic;?></textarea>
                <input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR'] ?>" />
                <input type="image" src="<?=$btn_arabic;?>" value="submit" name="submit" />
            </fieldset>
        </form>
    </div><!-- end #leftColumn -->
    
    <div id="rightColumn">
        <h1><?=$h1_arabic;?></h1>
        <p><?=$p1_arabic;?></p>
        <p><?=$p2_arabic;?></p>
        <p><?=$p3_arabic;?></p>
        <p><?=$p4_arabic;?></p>
    </div><!-- end #rightColumn -->
    
    <img src="<?=$image_arabic;?>" alt="" title="" class="flags" />
  
</div><!-- end #main-content -->