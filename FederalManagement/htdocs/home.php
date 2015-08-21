	<section id="slider">
    	<ul class="bxslider">
            <li><img src="images/2015/slider/slide01.jpg" alt="Federal Management Commercial Debt Collection" /></li>
            <li><img src="images/2015/slider/slide02.jpg" alt="Consumer Debt Recovery from Federal Management" /></li>
            <li><img src="images/2015/slider/slide03.jpg" alt="Leading International Debt Collectors - Federal Management" /></li>
        </ul>
    </section>
    
    <section id="enquire-now">
    	<a href="<?php echo $depth; ?>contact_us.php"><p>Click here to Enquire Now</p></a>
    </section>
    
    <section id="promo-boxes">
    	<div class="box">
        	<img src="images/2015/interface/commercial-debt-collection-img.jpg" alt="" title="" />
            <span class="shadow"></span>         
            <h2>Commercial Debt Collection</h2>
            <p>Our ISO9001 award winning Recovery services achieve unrivalled results whilst minimising the cost to our clients.</p>
            <span class="promo-btn"><a href="<?php echo $depth; ?>debt_collection/commercial_collection.php">Read More</a></span>
        </div>
        
        <div class="box">
        	<img src="images/2015/interface/private-debt-collection-img.jpg" alt="" title="" />
            <span class="shadow"></span>          
            <h2>Private &amp; VIP Debt Collection</h2>
            <p>Professional, pragmatic &amp; prudent. Our specialist VIP Accounts team cater for the prestige industry.</p>
            <span class="promo-btn"><a href="<?php echo $depth; ?>debt_collection/private_collection.php">Read More</a></span>
        </div>
        
        <div class="box">
        	<img src="images/2015/interface/international-debt-collection-img.jpg" alt="" title="" />
            <span class="shadow"></span>         
            <h2>International Debt Collection</h2>
            <p>Expert global recovery services provided by our overseas recovery team &amp; network of trusted partners.</p>
            <span class="promo-btn"><a href="<?php echo $depth; ?>debt_collection/international_collection.php">Read More</a></span>
        </div>
    </section>
    
    <section id="leftColumn">
    	<h1>First choice for debt collection</h1>
        <p>Federal Management is the UK's leading Commercial Debt Collection Agency successfully recovering millions of pounds annually on behalf of our clients. Our award winning services are 'low fixed fee' and are used by SME's and large PLC's.</p>
        <p>Whether it is unpaid invoices or overdue accounts, our specialist recovery teams deal with any scenario imaginable. Our diligent and pragmatic approach ensure we achieve a maximum recovery rate that is unrivalled in terms of results and cost.</p>
        <p>We operate across the UK, EU and on a truly global scale. Wherever there is a debt to be collected, we will collect it. Speak to one of our expert advisers now by calling us on 0844 875 4022 for free advice and assistance.</p>
        
        <ul id="aux-boxes">
            <li>
            	<a href="<?php echo $depth; ?>other_services/other_services.php">
            	<img src="images/2015/interface/icon-mouse.jpg" alt="" title="" style="margin-top:19px!important;" />
                <h4>Other Services</h4>
                <p>More services we can offer</p>
                </a>
            </li>
            
            <li>
            	<a href="<?=$depth; ?>contact_us.php" class="tTip" title="This link will take you to our contact page from where you will be able to complete our enquiry form.">
            	<img src="images/2015/interface/icon-question.jpg" alt="" title="" />
                <h4>Enquire Now!</h4>
                <p>Fill in our quick enquiry form</p>
                </a>
            </li>
            
            <li>
            	<a href="http://portal.federalmanagement.co.uk:85" class="tTip" title="This link will take you to a login window for the client section.">
            	<img src="images/2015/interface/icon-door.jpg" alt="" title="" />
                <h4>Online Access</h4>
                <p>Click here for client access</p>
                </a>
            </li>
        </ul>
        
        <h2 class="h1-like">Trust &amp; Accreditation</h2>
        <p>Federal Management are an organisation of the highest pedigree, proudly assisting British &amp; Global Businesses since 2004. We are proud long serving members of the Credit Services Association also.</p>
        <p>Our revered services have been awarded the ISO9001 accreditation, Investors in People and the CAI award from the Credit Services Association. We are the professionals that are used by the professionals.</p>
    </section>
    
    <section id="rightColumn">
    	<h2 class="h1-like">Watch our corporate video</h2>
        <iframe width="452" height="254" src="https://www.youtube.com/embed/o7oa2PnX9GI?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen style="margin-top:16px;"></iframe>
        
        <div id="news-box">
        	<div class="newsbox-title">Company News</div>
        	<?php
			include('news/wp-blog-header.php');
			query_posts('showposts=1');
			while (have_posts()) : the_post(); ?>
			<p class="news-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span class="date"><?php the_time('F jS, Y') ?></span></p>
			<?php 
				//$text = $post->post_excerpt;
				$text = the_excerpt();
				if (strlen($text) > 250) {
				$text = substr($text,0,strpos($text,' ',250)); } ;
				//$text = $text . '...';
				echo apply_filters('the_excerpt',$text);
			?>
			<?php endwhile; ?>
        </div>
        
        <div class="banner">
        	<a href="http://portal.federalmanagement.co.uk:85/REFER_FRIEND.HTM" target="_blank">
        		<img src="images/2015/interface/recommend-our-services.jpg" alt="Recommend our services image" title="Recommend our services and earn FREE gift vouchers" />
            </a>
        </div>
    </section>
    
    <div class="clearfix"></div>