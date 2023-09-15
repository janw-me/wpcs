<?php

function wpcs_esc_str_rev( $str ) {
	return esc_html( strrev( $str ) );
}

class Helpers {
	public static function wpcs_esc_str_rev( $str ) {
		return esc_html( strrev( $str ) );
	}
}

echo wpcs_esc_str_rev( 'Hello World!' );
echo Helpers::wpcs_esc_str_rev( 'Hello World!' );
