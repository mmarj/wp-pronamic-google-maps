<?php

$pgm = pronamic_get_google_maps_meta();

wp_nonce_field( 'save-post', Pronamic_Google_Maps_Maps::NONCE_NAME );

?>
<div id="pgm">
	<input id="pgm-map-type-field" name="_pronamic_google_maps_map_type" value="<?php echo esc_attr( $pgm->mapType ); ?>" type="hidden" />
	<input id="pgm-zoom-field" name="_pronamic_google_maps_zoom" value="<?php echo esc_attr( $pgm->zoom ); ?>" type="hidden" />

	<table class="form-table">
		<tr>
			<th scope="row">
				<label for="pgm-active-field"><?php _e( 'Active', 'pronamic_google_maps' ); ?></label>
			</th>
			<td>
				<input id="pgm-active-field" name="_pronamic_google_maps_active" value="true" type="checkbox" <?php checked( $pgm->active ); ?> />
				<label for="pgm-active-field"><?php _e( 'Show Google Maps', 'pronamic_google_maps' ); ?></label>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="pgm-title-field"><?php _e( 'Title', 'pronamic_google_maps' ); ?></label>
			</th>
			<td>
				<input id="pgm-title-field" name="_pronamic_google_maps_title" value="<?php echo esc_attr( $pgm->title ); ?>" class="regular-text" type="text" />
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="pgm-description-field"><?php _e( 'Description', 'pronamic_google_maps' ); ?></label>
			</th>
			<td>
				<textarea id="pgm-description-field" name="_pronamic_google_maps_description" rows="3" cols="50"><?php echo esc_attr( $pgm->description ); ?></textarea>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="pgm-address-field"><?php _e( 'Address', 'pronamic_google_maps' ); ?></label>
			</th>
			<td>
				<textarea id="pgm-address-field" name="_pronamic_google_maps_address" rows="3" cols="50"><?php echo esc_textarea( $pgm->address ); ?></textarea>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<?php _e( 'Geocoder', 'pronamic_google_maps' ); ?>
			</th>
			<td>
				<input id="pgm-geocode-button" type="submit" value="<?php _e( 'Geocode &darr;', 'pronamic_google_maps' ); ?>" class="button" name="pgm_geocode" />

				<input id="pgm-reverse-geocode-button" type="submit" value="<?php echo esc_attr_e( 'Reverse Geocode &uarr;', 'pronamic_google_maps' ); ?>" class="button" name="pgm_reverse_geocode" />
			</td>
		</tr>
		<tr>
			<th scope="row">
				<?php _e( 'Location', 'pronamic_google_maps' ); ?>
			</th>
			<td>
				<input id="pgm-lat-field" name="_pronamic_google_maps_latitude" value="<?php echo esc_attr( $pgm->latitude ); ?>" type="text" />
				&deg;
				<input id="pgm-lng-field" name="_pronamic_google_maps_longitude" value="<?php echo esc_attr( $pgm->longitude ); ?>" type="text" />
				&deg;
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<span class="description"><?php _e( 'Tip: Change the zoom level and map type to your own wishes.', 'pronamic_google_maps' ); ?></span>
			</td>
		</tr>
	</table>

	<div id="pgm-canvas" style="width: 100%; height: 500px;"></div>
</div>
