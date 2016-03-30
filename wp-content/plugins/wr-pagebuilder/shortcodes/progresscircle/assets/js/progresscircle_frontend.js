/**
 * @version    $Id$
 * @package    WR PageBuilder
 * @author     WooRockets Team <support@woorockets.com>
 * @copyright  Copyright (C) 2012 woorockets.com. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Websites: http://www.woorockets.com
 * Technical Support:  Feedback - http://www.woorockets.com
 */

(function ($) {
	
	$(document).ready(function () {
		if ( typeof( $.fn.lazyload ) == 'function' ) {
			$( '.wr-progress-circle' ).lazyload({
				effect: 'fadeIn'
			});
			$( '.wr-progress-circle' ).on( 'appear', function () {
				if ( typeof ( $.fn.circliful ) == "function" ) {
					var html_content = $( this ).html();
					if ( ! html_content ) {
						$( this ).circliful();
					}
				}
			} );
		} else {
			if ( typeof ( $.fn.circliful ) == "function" ) {
				$(".wr-progress-circle").circliful();
			}
		}

	});
	
})(jQuery);