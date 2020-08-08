<?php
/**
 * The Loop section of Mynote theme.
 *
 * @author Terry Lin
 * @link https://terryl.in/
 *
 * @package WordPress
 * @subpackage Mynote-AntonioMartin.info
 * @since 1.0.0
 * @version 1.0.7.0
 */

?>
<?php if ( have_posts() ) : ?>

  <div class="row my-4">
    <?php $numberOfPost = 0; ?>
    <?php while (have_posts()) : ?>
        <?php $numberOfPost++; ?>
        <?php the_post(); ?>

      <div class="col-sm-12">
        <article id="post-<?php the_ID(); ?>" class="article-list">
          <div class="row my-2">
            <div class="col-sm-2">
                <?php mynote_author_posted_date(); ?>
            </div>
            <div class="col-sm-2">
                <?php if (mynote_is_post_card_header() && has_post_thumbnail()) : ?>
                  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                      <?php mynote_post_thumbnail(); ?>
                  </a>
                <?php endif; ?>
            </div>
            <div class="col-sm-8">
              <h5 class="card-title"><a href="<?php the_permalink(); ?>"
                                        title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
              <p class="card-text"><?php mynote_excerpt(); ?></p>
            </div>
          </div>
        </article>
      </div>

      <?php endwhile; ?>

  </div>

<?php else : ?>

  <article>

    <h2><?php esc_html_e('Sorry, nothing to display.', 'mynote'); ?></h2>

  </article>

<?php endif; ?>
