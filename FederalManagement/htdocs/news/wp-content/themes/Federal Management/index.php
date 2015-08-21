<?php get_header(); ?>

	  </td>
      <td bgcolor="#D6D6D6" > </td>
    </tr>
    <tr> 
      <td valign="top" width="154" height="485"><table width="154" border="0" cellspacing="0" cellpadding="0" height="366">
          <tr> 
          </tr>
          <tr> 
            <td class="vrd_11_pd1" height="160"> <p><b><img src="http://www.federalmanagement.co.uk/graphics/arr_red.gif" width="11" height="8">FAQs<br>
                </b><a href="http://www.federalmanagement.co.uk/faqs.html">Debt Recovery</a></p>
              <p><b><img src="http://www.federalmanagement.co.uk/graphics/arr_red.gif" width="11" height="8">FAQs<br>
                </b><a href="http://www.federalmanagement.co.uk/legal.html">Litigation</a></p>

              <p><b><img src="http://www.federalmanagement.co.uk/graphics/arr_red.gif" width="11" height="8">Other 
                services<br>
                </b><a href="http://www.federalmanagement.co.uk/commercial_investigation.html">Commercial<br>
                investigation</a><br>
                <b> </b> </p>
              <p><a href="http://www.federalmanagement.co.uk/process_serving.html">Process serving</a></p>
              <p><a href="http://www.federalmanagement.co.uk/links.html">Links</a></p><br>

              </td>
          </tr>
          <tr> 
            <td height="130"> 
              <p><strong><font size="3" color="#ff0000"><img src="http://www.federalmanagement.co.uk/pics/fdcol_2.jpg" alt="debt collection agency" width="154" height="279"></font></strong></p>
              </td>
          </tr>
        </table></td>
	  <td rowspan="2" valign="top" nowrap bgcolor="#D6D6D6">&nbsp;</td>
	  
	  
      <td height="485" valign="top">
	  
	  
	  <div id="content" class="narrowcolumn">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<small class="date"><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>

				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>

				<p class="postmetadata"><?php the_tags('Tags: ',', ','<br/>'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments ', '1 Comment', '% Comments'); ?></p>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>

	</div></td>
	<td rowspan="2" valign="top" nowrap bgcolor="#D6D6D6"><?php get_sidebar(); ?></td>
	    </tr>
   
    <tr> 

<?php get_footer(); ?>
