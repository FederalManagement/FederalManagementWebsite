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

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pagetitle">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="pagetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">Author Archive</h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Blog Archives</h2>
 	  <?php } ?>


		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries') ?></div>
		</div>

		<?php while (have_posts()) : the_post(); ?>
		<div <?php post_class() ?>>
				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				<small><?php the_time('l, F jS, Y') ?></small>

				<div class="entry">
					<?php the_content() ?>
				</div>

				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>

			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries') ?></div>
		</div>
	<?php else :

		if ( is_category() ) { // If this is a category archive
			printf("<h2 class='center'>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h2 class='center'>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
		} else {
			echo("<h2 class='center'>No posts found.</h2>");
		}
		get_search_form();

	endif;
?>

	</div></td>
	<td rowspan="2" valign="top" nowrap bgcolor="#D6D6D6"><?php get_sidebar(); ?></td>
	    </tr>
   
    <tr> 

<?php get_footer(); ?>
