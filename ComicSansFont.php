<?php
class ComicSansFont {
	public static function onParserFirstCallInit( Parser $parser ) {
		// Fixed: Changed setTagHook to setHook
		$parser->setHook( 'csf', 'ComicSansFont::renderTag' );
		return true;
	}

	public static function renderTag( $input, array $args, Parser $parser, PPFrame $frame ) {
		// Sanitize input to prevent HTML/script injection issues
		$safeInput = htmlspecialchars( $input, ENT_QUOTES, 'UTF-8' );
		
		// Wrap text in a span forcing Comic Sans font
		return '<span style="font-family: \'Comic Sans MS\', \'Comic Sans\', cursive; font-size: 1.1em;">' . $safeInput . '</span>';
	}
}
