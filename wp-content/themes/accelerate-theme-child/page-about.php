<?php
/*
* Template name: page-about.php
* * The template for displaying about page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Wordpress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="home-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
		  <div class='homepage-hero'>
				<div class ="picCaption"><?php $site_description1 = get_the_content(); ?>
        <?php $arr = explode(' ',trim($site_description1)); ?>

          <h3><span class ="tealWord"><?php echo $arr[0]; ?></span>
          <?php echo ltrim($site_description1, $arr[0]); ?>
        </h3>

          </div>
     </div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->
<div class="site-content">

            <ul class = "homepage-featured-work">
            	<?php query_posts('posts_per_page=5 & post_type=AboutPage_template & order=ASC'); ?>
              <?php $count = 0;?>

		            <?php if (have_posts()): while (have_posts()) : the_post();
		                      $title = get_field('title');
                              $image_1 = get_field('greenpic');
                              $size = "medium";
                             ?>
                             <?php $count++;?>


                             <?php if ($count==1){
                             	$opentag ='<div class = "ourservices">';
                                $closingtag = '</div>';

                             }

                             elseif (( $count % 2 ) == 1 ) {

                           $opentag = '<div class = "oddpost">';
                           $closingtag = '</div>';
                          }
                        else {



                           $opentag = '<div class = "evenpost">';
                           '<div class = "evenpost">';
                           }

                        ?>

                      <li class= "individual-featured-work">
                        <?php echo $opentag;?>
                                     <span id = "title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
                                     <p id="description"><?php the_excerpt(); ?><p>
                        <?php echo $closingtag; ?>

                                <figure><?php echo wp_get_attachment_image($image_1,$size); ?></figure>

                      </li>







                      <?php endwhile;?>

                  <?php endif; ?>


            <?php wp_reset_query();?>


            <?php query_posts('posts_per_page=5 & post_type=AboutPage_template & order=ASC &name= work'); ?>
                  <?php if (have_posts()): while (have_posts()) : the_post();
                          $title = get_field('title');?>
                          <?php $count++;?>

                        <div id= "toWork">


                             <h2><?php the_title(); ?></h2>
                              <div class ="contactButton"><a class="button" href="<?php echo home_url(); ?>/blog">Contact Us</a></div>


                      </div>
                       <?php endwhile;?>

                  <?php endif; ?>


            <?php wp_reset_query();?>

            </ul>



</div>
<?php get_footer(); ?>

			  <!--<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			     	<div id="writing">
                <h3 id = "title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p id="description"><?php the_excerpt(); ?><p>
                </div>
                </div>-->







