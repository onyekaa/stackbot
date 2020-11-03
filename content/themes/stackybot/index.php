<?php
/**
 * The default template file.
 *
 * This file is yours to edit and replace.
 *
 * @package altis/skeleton
 */

get_header();

$folder_path = 'content/themes/stackybot';

if ( file_exists( '/etc/chassis-constants' ) ) {
	// phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents
	$json_string = file_get_contents( '/etc/chassis-constants' );
	$data = json_decode( $json_string, true );
	if ( ! empty( $data ) && ! empty( $data['synced_folders']['/chassis'] ) ) {
		$folder_path = $data['synced_folders']['/chassis'] . '/content/themes/stackybot';
		var_dump( $folder_path );
	}
}

?>
	<div id="" class="container mx-auto">
		<h2 class="text-2xl text-cyan ">StackyBot is live!</h2>
		<p><?php esc_html_e( 'Stackybot is ready to go.', 'stackybot' ); ?></p>
		<hr/>
		<?php
			while ( have_posts() ):
				the_post();
				?>
				<div class="my-4" id="post-<?php the_ID() ?>">
					<h2 class="text-xl text-cyan"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
					<div>
						<?php the_content() ?>
					</div>
				</div>
			<?php
			endwhile;
		?>

	</div>
<?php

get_footer();
