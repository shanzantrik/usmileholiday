<?php
/**
 * Trip Card - Duration Component.
 *
 * @since 5.5.4
 */

$trip_duration_unit   = 'days';
$trip_duration        = 0;
$trip_duration_nights = 0;
$set_duration_type    = 'both';
$is_block_layout      = false;
$is_featured_widget   = false;
$is_booking_detail    = false;

extract( $args );

$label_mapping = array(
	'days'   => array( __( 'Day', 'wp-travel-engine' ), __( 'Days', 'wp-travel-engine' ) ),
	'nights' => array( __( 'Night', 'wp-travel-engine' ), __( 'Nights', 'wp-travel-engine' ) ),
	'hours'  => array( __( 'Hour', 'wp-travel-engine' ), __( 'Hours', 'wp-travel-engine' ) ),
);


$duration_label = array();
if ( ( 'days' !== $trip_duration_unit ) || ( 'days' === $trip_duration_unit && $trip_duration && in_array( $set_duration_type, array( 'both', 'days' ) ) ) ) {
	$duration_label[] = sprintf(
		_nx( '%1$d %2$s', '%1$d %3$s', (int) $trip_duration, 'trip duration', 'wp-travel-engine' ),
		(int) $trip_duration,
		$label_mapping[ $trip_duration_unit ][0],
		$label_mapping[ $trip_duration_unit ][1]
	);
}

if ( 'days' === $trip_duration_unit && $trip_duration_nights && in_array( $set_duration_type, array( 'both', 'nights' ) ) ) {
	$duration_label[] = sprintf( _nx( '%1$d Night', '%1$d Nights', (int) $trip_duration_nights, 'trip duration night', 'wp-travel-engine' ), (int) $trip_duration_nights );
}

if ( ! isset( $duration_label[0] ) ) {
	return;
}

if ( $is_block_layout ) {
	?>
	<span class="wpte-trip-meta wpte-trip-duration">
		<i><svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.4375 0.625C5.99123 0.625 4.57743 1.05387 3.3749 1.85738C2.17236 2.66089 1.2351 3.80294 0.681634 5.13913C0.128168 6.47531 -0.0166435 7.94561 0.265511 9.3641C0.547665 10.7826 1.24411 12.0855 2.26678 13.1082C3.28946 14.1309 4.59242 14.8273 6.0109 15.1095C7.42939 15.3916 8.89969 15.2468 10.2359 14.6934C11.5721 14.1399 12.7141 13.2026 13.5176 12.0001C14.3211 10.7976 14.75 9.38377 14.75 7.9375C14.75 6.97721 14.5609 6.02632 14.1934 5.13913C13.8259 4.25193 13.2872 3.44581 12.6082 2.76678C11.9292 2.08775 11.1231 1.54912 10.2359 1.18163C9.34868 0.814143 8.39779 0.625 7.4375 0.625ZM7.4375 13.7875C6.28048 13.7875 5.14944 13.4444 4.18742 12.8016C3.22539 12.1588 2.47558 11.2451 2.03281 10.1762C1.59004 9.10725 1.47419 7.93101 1.69991 6.79622C1.92563 5.66143 2.48279 4.61906 3.30093 3.80092C4.11907 2.98279 5.16144 2.42563 6.29622 2.19991C7.43101 1.97418 8.60725 2.09003 9.6762 2.5328C10.7451 2.97558 11.6588 3.72539 12.3016 4.68741C12.9444 5.64944 13.2875 6.78048 13.2875 7.9375C13.2875 9.48901 12.6712 10.977 11.5741 12.0741C10.477 13.1712 8.98902 13.7875 7.4375 13.7875ZM9.70438 8.39819L8.16875 7.51337V4.28125C8.16875 4.08731 8.09171 3.90131 7.95457 3.76418C7.81744 3.62704 7.63144 3.55 7.4375 3.55C7.24356 3.55 7.05757 3.62704 6.92043 3.76418C6.78329 3.90131 6.70625 4.08731 6.70625 4.28125V7.9375C6.70625 7.9375 6.70625 7.996 6.70625 8.02525C6.71058 8.07563 6.72293 8.125 6.74282 8.1715C6.75787 8.21488 6.77748 8.25655 6.80131 8.29581C6.82132 8.33737 6.84585 8.37661 6.87444 8.41281L6.99144 8.50787L7.05725 8.57369L8.9585 9.67056C9.06995 9.73373 9.19603 9.76651 9.32413 9.76562C9.48604 9.76676 9.64375 9.71412 9.77252 9.61596C9.90129 9.51781 9.99385 9.3797 10.0357 9.22328C10.0775 9.06686 10.0662 8.90098 10.0036 8.75166C9.94101 8.60233 9.83062 8.47801 9.68975 8.39819H9.70438Z" /></svg></i>
		<span>
		<?php echo esc_html( implode( ' - ', $duration_label ) ); ?>
		</span>
	</span>
	<?php
} elseif ( $is_featured_widget ) {
	?>
	<span class="category-trip-dur">
		<i>
			<svg xmlns="http://www.w3.org/2000/svg" width="17.332" height="15.61" viewBox="0 0 17.332 15.61">
				<g id="Group_773" data-name="Group 773" transform="translate(283.072 34.13)">
				<path id="Path_23383" data-name="Path 23383" d="M-283.057-26.176h.1c.466,0,.931,0,1.4,0,.084,0,.108-.024.1-.106-.006-.156,0-.313,0-.469a5.348,5.348,0,0,1,.066-.675,5.726,5.726,0,0,1,.162-.812,5.1,5.1,0,0,1,.17-.57,9.17,9.17,0,0,1,.383-.946,10.522,10.522,0,0,1,.573-.96c.109-.169.267-.307.371-.479a3.517,3.517,0,0,1,.5-.564,6.869,6.869,0,0,1,1.136-.97,9.538,9.538,0,0,1,.933-.557,7.427,7.427,0,0,1,1.631-.608c.284-.074.577-.11.867-.162a7.583,7.583,0,0,1,1.49-.072c.178,0,.356.053.534.062a2.673,2.673,0,0,1,.523.083c.147.038.3.056.445.1.255.07.511.138.759.228a6.434,6.434,0,0,1,1.22.569c.288.179.571.366.851.556a2.341,2.341,0,0,1,.319.259c.3.291.589.592.888.882a4.993,4.993,0,0,1,.64.85,6.611,6.611,0,0,1,.71,1.367c.065.175.121.352.178.53s.118.348.158.526c.054.242.09.487.133.731.024.14.045.281.067.422a.69.69,0,0,1,.008.1c0,.244.005.488,0,.731s-.015.5-.04.745a4.775,4.775,0,0,1-.095.5c-.04.191-.072.385-.128.572-.094.312-.191.625-.313.926a7.445,7.445,0,0,1-.43.9c-.173.3-.38.584-.579.87a8.045,8.045,0,0,1-1.2,1.26,5.842,5.842,0,0,1-.975.687,8.607,8.607,0,0,1-1.083.552,11.214,11.214,0,0,1-1.087.36c-.19.058-.386.1-.58.137-.121.025-.245.037-.368.052a12.316,12.316,0,0,1-1.57.034,3.994,3.994,0,0,1-.553-.065c-.166-.024-.33-.053-.5-.082a1.745,1.745,0,0,1-.21-.043c-.339-.1-.684-.189-1.013-.317a7,7,0,0,1-1.335-.673c-.2-.136-.417-.263-.609-.415a6.9,6.9,0,0,1-.566-.517.488.488,0,0,1-.128-.331.935.935,0,0,1,.1-.457.465.465,0,0,1,.3-.223.987.987,0,0,1,.478-.059.318.318,0,0,1,.139.073c.239.185.469.381.713.559a5.9,5.9,0,0,0,1.444.766,5.073,5.073,0,0,0,.484.169c.24.062.485.1.727.154a1.805,1.805,0,0,0,.2.037c.173.015.346.033.52.036.3.006.6.01.9,0a3.421,3.421,0,0,0,.562-.068c.337-.069.676-.139,1-.239a6.571,6.571,0,0,0,.783-.32,5.854,5.854,0,0,0,1.08-.663,5.389,5.389,0,0,0,.588-.533,8.013,8.013,0,0,0,.675-.738,5.518,5.518,0,0,0,.749-1.274,9.733,9.733,0,0,0,.366-1.107,4.926,4.926,0,0,0,.142-.833c.025-.269.008-.542.014-.814a4.716,4.716,0,0,0-.07-.815,5.8,5.8,0,0,0-.281-1.12,5.311,5.311,0,0,0-.548-1.147,9.019,9.019,0,0,0-.645-.914,9.267,9.267,0,0,0-.824-.788,3.354,3.354,0,0,0-.425-.321,5.664,5.664,0,0,0-1.048-.581c-.244-.093-.484-.2-.732-.275a6.877,6.877,0,0,0-.688-.161c-.212-.043-.427-.074-.641-.109a.528.528,0,0,0-.084,0c-.169,0-.338,0-.506,0a5.882,5.882,0,0,0-1.177.1,6.79,6.79,0,0,0-1.016.274,6.575,6.575,0,0,0-1.627.856,6.252,6.252,0,0,0-1.032.948,6.855,6.855,0,0,0-.644.847,4.657,4.657,0,0,0-.519,1.017c-.112.323-.227.647-.307.979a3.45,3.45,0,0,0-.13.91,4.4,4.4,0,0,1-.036.529c-.008.086.026.1.106.1.463,0,.925,0,1.388,0a.122.122,0,0,1,.08.028c.009.009-.005.051-.019.072q-.28.415-.563.827c-.162.236-.33.468-.489.705-.118.175-.222.359-.339.535-.1.144-.2.281-.3.423-.142.2-.282.41-.423.615-.016.023-.031.047-.048.069-.062.084-.086.083-.142,0-.166-.249-.332-.5-.5-.746-.3-.44-.6-.878-.9-1.318q-.358-.525-.714-1.051c-.031-.045-.063-.09-.094-.134Z" transform="translate(0 0)"/>
				<path id="Path_23384" data-name="Path 23384" d="M150.612,112.52c0,.655,0,1.31,0,1.966a.216.216,0,0,0,.087.178,4.484,4.484,0,0,1,.358.346.227.227,0,0,0,.186.087q1.616,0,3.233,0a.659.659,0,0,1,.622.4.743.743,0,0,1-.516,1.074,1.361,1.361,0,0,1-.323.038q-1.507,0-3.013,0a.248.248,0,0,0-.216.109,1.509,1.509,0,0,1-.765.511,1.444,1.444,0,0,1-1.256-2.555.218.218,0,0,0,.09-.207q0-1.916,0-3.831a.784.784,0,0,1,.741-.732.742.742,0,0,1,.761.544.489.489,0,0,1,.015.127Q150.612,111.547,150.612,112.52Z" transform="translate(-423.686 -141.471)"/>
				</g>
			</svg>
		</i>
		<?php echo esc_html( implode( ' - ', $duration_label ) ); ?>
	</span>
	<?php
} elseif ( $is_booking_detail ) {
	echo esc_html( implode( ' - ', $duration_label ) );
} else {
	?>
<span class="category-trip-dur">
	<i><svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.4375 1.625C6.99123 1.625 5.57743 2.05387 4.3749 2.85738C3.17236 3.66089 2.2351 4.80294 1.68163 6.13913C1.12817 7.47531 0.983357 8.94561 1.26551 10.3641C1.54767 11.7826 2.24411 13.0855 3.26678 14.1082C4.28946 15.1309 5.59242 15.8273 7.0109 16.1095C8.42939 16.3916 9.89969 16.2468 11.2359 15.6934C12.5721 15.1399 13.7141 14.2026 14.5176 13.0001C15.3211 11.7976 15.75 10.3838 15.75 8.9375C15.75 7.97721 15.5609 7.02632 15.1934 6.13913C14.8259 5.25193 14.2872 4.44581 13.6082 3.76678C12.9292 3.08775 12.1231 2.54912 11.2359 2.18163C10.3487 1.81414 9.39779 1.625 8.4375 1.625ZM8.4375 14.7875C7.28048 14.7875 6.14944 14.4444 5.18742 13.8016C4.22539 13.1588 3.47558 12.2451 3.03281 11.1762C2.59004 10.1072 2.47419 8.93101 2.69991 7.79622C2.92563 6.66143 3.48279 5.61906 4.30093 4.80092C5.11907 3.98279 6.16144 3.42563 7.29622 3.19991C8.43101 2.97418 9.60725 3.09003 10.6762 3.5328C11.7451 3.97558 12.6588 4.72539 13.3016 5.68741C13.9444 6.64944 14.2875 7.78048 14.2875 8.9375C14.2875 10.489 13.6712 11.977 12.5741 13.0741C11.477 14.1712 9.98902 14.7875 8.4375 14.7875ZM10.7044 9.39819L9.16875 8.51337V5.28125C9.16875 5.08731 9.09171 4.90131 8.95457 4.76418C8.81744 4.62704 8.63144 4.55 8.4375 4.55C8.24356 4.55 8.05757 4.62704 7.92043 4.76418C7.78329 4.90131 7.70625 5.08731 7.70625 5.28125V8.9375C7.70625 8.9375 7.70625 8.996 7.70625 9.02525C7.71058 9.07563 7.72293 9.125 7.74282 9.1715C7.75787 9.21488 7.77748 9.25655 7.80131 9.29581C7.82132 9.33737 7.84585 9.37661 7.87444 9.41281L7.99144 9.50787L8.05725 9.57369L9.9585 10.6706C10.0699 10.7337 10.196 10.7665 10.3241 10.7656C10.486 10.7668 10.6437 10.7141 10.7725 10.616C10.9013 10.5178 10.9938 10.3797 11.0357 10.2233C11.0775 10.0669 11.0662 9.90098 11.0036 9.75166C10.941 9.60233 10.8306 9.47801 10.6898 9.39819H10.7044Z" fill="currentColor" fill-opacity="0.3"/></svg></i>
	<span>
	<?php echo esc_html( implode( ' - ', $duration_label ) ); ?>
	</span>
</span>
	<?php
}
