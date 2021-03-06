<?php $customFields = get_post_custom(); ?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id="intro">
    <div class="container">
    <h1><?php echo the_title(); ?></h1>
    <?php if ($essayAuthor = $customFields['Essay Author(s)'][0]): ?>
    <span class="essay-author"><?php echo $essayAuthor; ?></span>
    <?php endif; ?>
    <?php if ($essayDate = $customFields['Essay Date'][0]): ?>
    <span class="essay-date"><?php echo $essayDate; ?></span>
    <?php endif; ?>
    </div>
</div>

<div class="container">
    <?php if ($essayPubInfo = $customFields['Essay Publication Info'][0]): ?>
    <p class="publication-note"><?php echo $essayPubInfo; ?></p>
    <?php endif; ?>
    <?php echo the_content(); ?>
    <a href="<?php echo get_post_type_archive_link( 'essay' ); ?>" class="button">Back to essays</a>
</div>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>