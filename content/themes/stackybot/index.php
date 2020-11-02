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
	<div id="welcome">
		<h2>StackyBot is live!</h2>
		<p><?php esc_html_e( 'Stackybot is ready to go.', 'stackybot' ); ?></p>

	</div>
<?php

get_footer();
