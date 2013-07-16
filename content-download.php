<?php
/**
 * Default output for a download via the [download] shortcode
 */

global $dlm_download;
?>
<a class="downloadbtn" title="<?php if ( $dlm_download->has_version_number() ) printf( __( 'Version %s', 'download_monitor' ), $dlm_download->get_the_version_number() ); ?>" href="<?php $dlm_download->the_download_link(); ?>" rel="nofollow">
	<span><?php $dlm_download->the_title(); ?></span>
</a>