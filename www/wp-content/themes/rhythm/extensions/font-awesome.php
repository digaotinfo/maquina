<?php
/**
 * Get icons list (font-awesome)
 * @return array
 */
function ts_get_icons_array() {
	
	//Below code allows you to get fresh icons list
	
	/*if (file_exists(get_template_directory().'/css/font-awesome.min.css'))
	{
		$pattern = '/\.(fa-(?:\w+(?:-)?)+):before{content:/';

		$subject = file_get_contents(get_template_directory().'/css/font-awesome.min.css');

		preg_match_all($pattern, $subject, $matches, PREG_SET_ORDER);

		foreach($matches as $match){
			echo "'".str_replace('fa fa-','',$match[1])."' => '".$match[1]."',<br>";
		}
	}*/
		
	$icons = array(
		'glass' => 'fa fa-glass',
		'music' => 'fa fa-music',
		'search' => 'fa fa-search',
		'envelope-o' => 'fa fa-envelope-o',
		'heart' => 'fa fa-heart',
		'star' => 'fa fa-star',
		'star-o' => 'fa fa-star-o',
		'user' => 'fa fa-user',
		'film' => 'fa fa-film',
		'th-large' => 'fa fa-th-large',
		'th' => 'fa fa-th',
		'th-list' => 'fa fa-th-list',
		'check' => 'fa fa-check',
		'times' => 'fa fa-times',
		'search-plus' => 'fa fa-search-plus',
		'search-minus' => 'fa fa-search-minus',
		'power-off' => 'fa fa-power-off',
		'signal' => 'fa fa-signal',
		'cog' => 'fa fa-cog',
		'trash-o' => 'fa fa-trash-o',
		'home' => 'fa fa-home',
		'file-o' => 'fa fa-file-o',
		'clock-o' => 'fa fa-clock-o',
		'road' => 'fa fa-road',
		'download' => 'fa fa-download',
		'arrow-circle-o-down' => 'fa fa-arrow-circle-o-down',
		'arrow-circle-o-up' => 'fa fa-arrow-circle-o-up',
		'inbox' => 'fa fa-inbox',
		'play-circle-o' => 'fa fa-play-circle-o',
		'repeat' => 'fa fa-repeat',
		'refresh' => 'fa fa-refresh',
		'list-alt' => 'fa fa-list-alt',
		'lock' => 'fa fa-lock',
		'flag' => 'fa fa-flag',
		'headphones' => 'fa fa-headphones',
		'volume-off' => 'fa fa-volume-off',
		'volume-down' => 'fa fa-volume-down',
		'volume-up' => 'fa fa-volume-up',
		'qrcode' => 'fa fa-qrcode',
		'barcode' => 'fa fa-barcode',
		'tag' => 'fa fa-tag',
		'tags' => 'fa fa-tags',
		'book' => 'fa fa-book',
		'bookmark' => 'fa fa-bookmark',
		'print' => 'fa fa-print',
		'camera' => 'fa fa-camera',
		'font' => 'fa fa-font',
		'bold' => 'fa fa-bold',
		'italic' => 'fa fa-italic',
		'text-height' => 'fa fa-text-height',
		'text-width' => 'fa fa-text-width',
		'align-left' => 'fa fa-align-left',
		'align-center' => 'fa fa-align-center',
		'align-right' => 'fa fa-align-right',
		'align-justify' => 'fa fa-align-justify',
		'list' => 'fa fa-list',
		'outdent' => 'fa fa-outdent',
		'indent' => 'fa fa-indent',
		'video-camera' => 'fa fa-video-camera',
		'picture-o' => 'fa fa-picture-o',
		'pencil' => 'fa fa-pencil',
		'map-marker' => 'fa fa-map-marker',
		'adjust' => 'fa fa-adjust',
		'tint' => 'fa fa-tint',
		'pencil-square-o' => 'fa fa-pencil-square-o',
		'share-square-o' => 'fa fa-share-square-o',
		'check-square-o' => 'fa fa-check-square-o',
		'arrows' => 'fa fa-arrows',
		'step-backward' => 'fa fa-step-backward',
		'fast-backward' => 'fa fa-fast-backward',
		'backward' => 'fa fa-backward',
		'play' => 'fa fa-play',
		'pause' => 'fa fa-pause',
		'stop' => 'fa fa-stop',
		'forward' => 'fa fa-forward',
		'fast-forward' => 'fa fa-fast-forward',
		'step-forward' => 'fa fa-step-forward',
		'eject' => 'fa fa-eject',
		'chevron-left' => 'fa fa-chevron-left',
		'chevron-right' => 'fa fa-chevron-right',
		'plus-circle' => 'fa fa-plus-circle',
		'minus-circle' => 'fa fa-minus-circle',
		'times-circle' => 'fa fa-times-circle',
		'check-circle' => 'fa fa-check-circle',
		'question-circle' => 'fa fa-question-circle',
		'info-circle' => 'fa fa-info-circle',
		'crosshairs' => 'fa fa-crosshairs',
		'times-circle-o' => 'fa fa-times-circle-o',
		'check-circle-o' => 'fa fa-check-circle-o',
		'ban' => 'fa fa-ban',
		'arrow-left' => 'fa fa-arrow-left',
		'arrow-right' => 'fa fa-arrow-right',
		'arrow-up' => 'fa fa-arrow-up',
		'arrow-down' => 'fa fa-arrow-down',
		'share' => 'fa fa-share',
		'expand' => 'fa fa-expand',
		'compress' => 'fa fa-compress',
		'plus' => 'fa fa-plus',
		'minus' => 'fa fa-minus',
		'asterisk' => 'fa fa-asterisk',
		'exclamation-circle' => 'fa fa-exclamation-circle',
		'gift' => 'fa fa-gift',
		'leaf' => 'fa fa-leaf',
		'fire' => 'fa fa-fire',
		'eye' => 'fa fa-eye',
		'eye-slash' => 'fa fa-eye-slash',
		'exclamation-triangle' => 'fa fa-exclamation-triangle',
		'plane' => 'fa fa-plane',
		'calendar' => 'fa fa-calendar',
		'random' => 'fa fa-random',
		'comment' => 'fa fa-comment',
		'magnet' => 'fa fa-magnet',
		'chevron-up' => 'fa fa-chevron-up',
		'chevron-down' => 'fa fa-chevron-down',
		'retweet' => 'fa fa-retweet',
		'shopping-cart' => 'fa fa-shopping-cart',
		'folder' => 'fa fa-folder',
		'folder-open' => 'fa fa-folder-open',
		'arrows-v' => 'fa fa-arrows-v',
		'arrows-h' => 'fa fa-arrows-h',
		'bar-chart' => 'fa fa-bar-chart',
		'twitter-square' => 'fa fa-twitter-square',
		'facebook-square' => 'fa fa-facebook-square',
		'camera-retro' => 'fa fa-camera-retro',
		'key' => 'fa fa-key',
		'cogs' => 'fa fa-cogs',
		'comments' => 'fa fa-comments',
		'thumbs-o-up' => 'fa fa-thumbs-o-up',
		'thumbs-o-down' => 'fa fa-thumbs-o-down',
		'star-half' => 'fa fa-star-half',
		'heart-o' => 'fa fa-heart-o',
		'sign-out' => 'fa fa-sign-out',
		'linkedin-square' => 'fa fa-linkedin-square',
		'thumb-tack' => 'fa fa-thumb-tack',
		'external-link' => 'fa fa-external-link',
		'sign-in' => 'fa fa-sign-in',
		'trophy' => 'fa fa-trophy',
		'github-square' => 'fa fa-github-square',
		'upload' => 'fa fa-upload',
		'lemon-o' => 'fa fa-lemon-o',
		'phone' => 'fa fa-phone',
		'square-o' => 'fa fa-square-o',
		'bookmark-o' => 'fa fa-bookmark-o',
		'phone-square' => 'fa fa-phone-square',
		'twitter' => 'fa fa-twitter',
		'facebook' => 'fa fa-facebook',
		'github' => 'fa fa-github',
		'unlock' => 'fa fa-unlock',
		'credit-card' => 'fa fa-credit-card',
		'rss' => 'fa fa-rss',
		'hdd-o' => 'fa fa-hdd-o',
		'bullhorn' => 'fa fa-bullhorn',
		'bell' => 'fa fa-bell',
		'certificate' => 'fa fa-certificate',
		'hand-o-right' => 'fa fa-hand-o-right',
		'hand-o-left' => 'fa fa-hand-o-left',
		'hand-o-up' => 'fa fa-hand-o-up',
		'hand-o-down' => 'fa fa-hand-o-down',
		'arrow-circle-left' => 'fa fa-arrow-circle-left',
		'arrow-circle-right' => 'fa fa-arrow-circle-right',
		'arrow-circle-up' => 'fa fa-arrow-circle-up',
		'arrow-circle-down' => 'fa fa-arrow-circle-down',
		'globe' => 'fa fa-globe',
		'wrench' => 'fa fa-wrench',
		'tasks' => 'fa fa-tasks',
		'filter' => 'fa fa-filter',
		'briefcase' => 'fa fa-briefcase',
		'arrows-alt' => 'fa fa-arrows-alt',
		'users' => 'fa fa-users',
		'link' => 'fa fa-link',
		'cloud' => 'fa fa-cloud',
		'flask' => 'fa fa-flask',
		'scissors' => 'fa fa-scissors',
		'files-o' => 'fa fa-files-o',
		'paperclip' => 'fa fa-paperclip',
		'floppy-o' => 'fa fa-floppy-o',
		'square' => 'fa fa-square',
		'bars' => 'fa fa-bars',
		'list-ul' => 'fa fa-list-ul',
		'list-ol' => 'fa fa-list-ol',
		'strikethrough' => 'fa fa-strikethrough',
		'underline' => 'fa fa-underline',
		'table' => 'fa fa-table',
		'magic' => 'fa fa-magic',
		'truck' => 'fa fa-truck',
		'pinterest' => 'fa fa-pinterest',
		'pinterest-square' => 'fa fa-pinterest-square',
		'google-plus-square' => 'fa fa-google-plus-square',
		'google-plus' => 'fa fa-google-plus',
		'money' => 'fa fa-money',
		'caret-down' => 'fa fa-caret-down',
		'caret-up' => 'fa fa-caret-up',
		'caret-left' => 'fa fa-caret-left',
		'caret-right' => 'fa fa-caret-right',
		'columns' => 'fa fa-columns',
		'sort' => 'fa fa-sort',
		'sort-desc' => 'fa fa-sort-desc',
		'sort-asc' => 'fa fa-sort-asc',
		'envelope' => 'fa fa-envelope',
		'linkedin' => 'fa fa-linkedin',
		'undo' => 'fa fa-undo',
		'gavel' => 'fa fa-gavel',
		'tachometer' => 'fa fa-tachometer',
		'comment-o' => 'fa fa-comment-o',
		'comments-o' => 'fa fa-comments-o',
		'bolt' => 'fa fa-bolt',
		'sitemap' => 'fa fa-sitemap',
		'umbrella' => 'fa fa-umbrella',
		'clipboard' => 'fa fa-clipboard',
		'lightbulb-o' => 'fa fa-lightbulb-o',
		'exchange' => 'fa fa-exchange',
		'cloud-download' => 'fa fa-cloud-download',
		'cloud-upload' => 'fa fa-cloud-upload',
		'user-md' => 'fa fa-user-md',
		'stethoscope' => 'fa fa-stethoscope',
		'suitcase' => 'fa fa-suitcase',
		'bell-o' => 'fa fa-bell-o',
		'coffee' => 'fa fa-coffee',
		'cutlery' => 'fa fa-cutlery',
		'file-text-o' => 'fa fa-file-text-o',
		'building-o' => 'fa fa-building-o',
		'hospital-o' => 'fa fa-hospital-o',
		'ambulance' => 'fa fa-ambulance',
		'medkit' => 'fa fa-medkit',
		'fighter-jet' => 'fa fa-fighter-jet',
		'beer' => 'fa fa-beer',
		'h-square' => 'fa fa-h-square',
		'plus-square' => 'fa fa-plus-square',
		'angle-double-left' => 'fa fa-angle-double-left',
		'angle-double-right' => 'fa fa-angle-double-right',
		'angle-double-up' => 'fa fa-angle-double-up',
		'angle-double-down' => 'fa fa-angle-double-down',
		'angle-left' => 'fa fa-angle-left',
		'angle-right' => 'fa fa-angle-right',
		'angle-up' => 'fa fa-angle-up',
		'angle-down' => 'fa fa-angle-down',
		'desktop' => 'fa fa-desktop',
		'laptop' => 'fa fa-laptop',
		'tablet' => 'fa fa-tablet',
		'mobile' => 'fa fa-mobile',
		'circle-o' => 'fa fa-circle-o',
		'quote-left' => 'fa fa-quote-left',
		'quote-right' => 'fa fa-quote-right',
		'spinner' => 'fa fa-spinner',
		'circle' => 'fa fa-circle',
		'reply' => 'fa fa-reply',
		'github-alt' => 'fa fa-github-alt',
		'folder-o' => 'fa fa-folder-o',
		'folder-open-o' => 'fa fa-folder-open-o',
		'smile-o' => 'fa fa-smile-o',
		'frown-o' => 'fa fa-frown-o',
		'meh-o' => 'fa fa-meh-o',
		'gamepad' => 'fa fa-gamepad',
		'keyboard-o' => 'fa fa-keyboard-o',
		'flag-o' => 'fa fa-flag-o',
		'flag-checkered' => 'fa fa-flag-checkered',
		'terminal' => 'fa fa-terminal',
		'code' => 'fa fa-code',
		'reply-all' => 'fa fa-reply-all',
		'star-half-o' => 'fa fa-star-half-o',
		'location-arrow' => 'fa fa-location-arrow',
		'crop' => 'fa fa-crop',
		'code-fork' => 'fa fa-code-fork',
		'chain-broken' => 'fa fa-chain-broken',
		'question' => 'fa fa-question',
		'info' => 'fa fa-info',
		'exclamation' => 'fa fa-exclamation',
		'superscript' => 'fa fa-superscript',
		'subscript' => 'fa fa-subscript',
		'eraser' => 'fa fa-eraser',
		'puzzle-piece' => 'fa fa-puzzle-piece',
		'microphone' => 'fa fa-microphone',
		'microphone-slash' => 'fa fa-microphone-slash',
		'shield' => 'fa fa-shield',
		'calendar-o' => 'fa fa-calendar-o',
		'fire-extinguisher' => 'fa fa-fire-extinguisher',
		'rocket' => 'fa fa-rocket',
		'maxcdn' => 'fa fa-maxcdn',
		'chevron-circle-left' => 'fa fa-chevron-circle-left',
		'chevron-circle-right' => 'fa fa-chevron-circle-right',
		'chevron-circle-up' => 'fa fa-chevron-circle-up',
		'chevron-circle-down' => 'fa fa-chevron-circle-down',
		'html5' => 'fa fa-html5',
		'css3' => 'fa fa-css3',
		'anchor' => 'fa fa-anchor',
		'unlock-alt' => 'fa fa-unlock-alt',
		'bullseye' => 'fa fa-bullseye',
		'ellipsis-h' => 'fa fa-ellipsis-h',
		'ellipsis-v' => 'fa fa-ellipsis-v',
		'rss-square' => 'fa fa-rss-square',
		'play-circle' => 'fa fa-play-circle',
		'ticket' => 'fa fa-ticket',
		'minus-square' => 'fa fa-minus-square',
		'minus-square-o' => 'fa fa-minus-square-o',
		'level-up' => 'fa fa-level-up',
		'level-down' => 'fa fa-level-down',
		'check-square' => 'fa fa-check-square',
		'pencil-square' => 'fa fa-pencil-square',
		'external-link-square' => 'fa fa-external-link-square',
		'share-square' => 'fa fa-share-square',
		'compass' => 'fa fa-compass',
		'caret-square-o-down' => 'fa fa-caret-square-o-down',
		'caret-square-o-up' => 'fa fa-caret-square-o-up',
		'caret-square-o-right' => 'fa fa-caret-square-o-right',
		'eur' => 'fa fa-eur',
		'gbp' => 'fa fa-gbp',
		'usd' => 'fa fa-usd',
		'inr' => 'fa fa-inr',
		'jpy' => 'fa fa-jpy',
		'rub' => 'fa fa-rub',
		'krw' => 'fa fa-krw',
		'btc' => 'fa fa-btc',
		'file' => 'fa fa-file',
		'file-text' => 'fa fa-file-text',
		'sort-alpha-asc' => 'fa fa-sort-alpha-asc',
		'sort-alpha-desc' => 'fa fa-sort-alpha-desc',
		'sort-amount-asc' => 'fa fa-sort-amount-asc',
		'sort-amount-desc' => 'fa fa-sort-amount-desc',
		'sort-numeric-asc' => 'fa fa-sort-numeric-asc',
		'sort-numeric-desc' => 'fa fa-sort-numeric-desc',
		'thumbs-up' => 'fa fa-thumbs-up',
		'thumbs-down' => 'fa fa-thumbs-down',
		'youtube-square' => 'fa fa-youtube-square',
		'youtube' => 'fa fa-youtube',
		'xing' => 'fa fa-xing',
		'xing-square' => 'fa fa-xing-square',
		'youtube-play' => 'fa fa-youtube-play',
		'dropbox' => 'fa fa-dropbox',
		'stack-overflow' => 'fa fa-stack-overflow',
		'instagram' => 'fa fa-instagram',
		'flickr' => 'fa fa-flickr',
		'adn' => 'fa fa-adn',
		'bitbucket' => 'fa fa-bitbucket',
		'bitbucket-square' => 'fa fa-bitbucket-square',
		'tumblr' => 'fa fa-tumblr',
		'tumblr-square' => 'fa fa-tumblr-square',
		'long-arrow-down' => 'fa fa-long-arrow-down',
		'long-arrow-up' => 'fa fa-long-arrow-up',
		'long-arrow-left' => 'fa fa-long-arrow-left',
		'long-arrow-right' => 'fa fa-long-arrow-right',
		'apple' => 'fa fa-apple',
		'windows' => 'fa fa-windows',
		'android' => 'fa fa-android',
		'linux' => 'fa fa-linux',
		'dribbble' => 'fa fa-dribbble',
		'skype' => 'fa fa-skype',
		'foursquare' => 'fa fa-foursquare',
		'trello' => 'fa fa-trello',
		'female' => 'fa fa-female',
		'male' => 'fa fa-male',
		'gittip' => 'fa fa-gittip',
		'sun-o' => 'fa fa-sun-o',
		'moon-o' => 'fa fa-moon-o',
		'archive' => 'fa fa-archive',
		'bug' => 'fa fa-bug',
		'vk' => 'fa fa-vk',
		'weibo' => 'fa fa-weibo',
		'renren' => 'fa fa-renren',
		'pagelines' => 'fa fa-pagelines',
		'stack-exchange' => 'fa fa-stack-exchange',
		'arrow-circle-o-right' => 'fa fa-arrow-circle-o-right',
		'arrow-circle-o-left' => 'fa fa-arrow-circle-o-left',
		'caret-square-o-left' => 'fa fa-caret-square-o-left',
		'dot-circle-o' => 'fa fa-dot-circle-o',
		'wheelchair' => 'fa fa-wheelchair',
		'vimeo-square' => 'fa fa-vimeo-square',
		'try' => 'fa fa-try',
		'plus-square-o' => 'fa fa-plus-square-o',
		'space-shuttle' => 'fa fa-space-shuttle',
		'slack' => 'fa fa-slack',
		'envelope-square' => 'fa fa-envelope-square',
		'wordpress' => 'fa fa-wordpress',
		'openid' => 'fa fa-openid',
		'university' => 'fa fa-university',
		'graduation-cap' => 'fa fa-graduation-cap',
		'yahoo' => 'fa fa-yahoo',
		'google' => 'fa fa-google',
		'reddit' => 'fa fa-reddit',
		'reddit-square' => 'fa fa-reddit-square',
		'stumbleupon-circle' => 'fa fa-stumbleupon-circle',
		'stumbleupon' => 'fa fa-stumbleupon',
		'delicious' => 'fa fa-delicious',
		'digg' => 'fa fa-digg',
		'pied-piper' => 'fa fa-pied-piper',
		'pied-piper-alt' => 'fa fa-pied-piper-alt',
		'drupal' => 'fa fa-drupal',
		'joomla' => 'fa fa-joomla',
		'language' => 'fa fa-language',
		'fax' => 'fa fa-fax',
		'building' => 'fa fa-building',
		'child' => 'fa fa-child',
		'paw' => 'fa fa-paw',
		'spoon' => 'fa fa-spoon',
		'cube' => 'fa fa-cube',
		'cubes' => 'fa fa-cubes',
		'behance' => 'fa fa-behance',
		'behance-square' => 'fa fa-behance-square',
		'steam' => 'fa fa-steam',
		'steam-square' => 'fa fa-steam-square',
		'recycle' => 'fa fa-recycle',
		'car' => 'fa fa-car',
		'taxi' => 'fa fa-taxi',
		'tree' => 'fa fa-tree',
		'spotify' => 'fa fa-spotify',
		'deviantart' => 'fa fa-deviantart',
		'soundcloud' => 'fa fa-soundcloud',
		'database' => 'fa fa-database',
		'file-pdf-o' => 'fa fa-file-pdf-o',
		'file-word-o' => 'fa fa-file-word-o',
		'file-excel-o' => 'fa fa-file-excel-o',
		'file-powerpoint-o' => 'fa fa-file-powerpoint-o',
		'file-image-o' => 'fa fa-file-image-o',
		'file-archive-o' => 'fa fa-file-archive-o',
		'file-audio-o' => 'fa fa-file-audio-o',
		'file-video-o' => 'fa fa-file-video-o',
		'file-code-o' => 'fa fa-file-code-o',
		'vine' => 'fa fa-vine',
		'codepen' => 'fa fa-codepen',
		'jsfiddle' => 'fa fa-jsfiddle',
		'life-ring' => 'fa fa-life-ring',
		'circle-o-notch' => 'fa fa-circle-o-notch',
		'rebel' => 'fa fa-rebel',
		'empire' => 'fa fa-empire',
		'git-square' => 'fa fa-git-square',
		'git' => 'fa fa-git',
		'hacker-news' => 'fa fa-hacker-news',
		'tencent-weibo' => 'fa fa-tencent-weibo',
		'qq' => 'fa fa-qq',
		'weixin' => 'fa fa-weixin',
		'paper-plane' => 'fa fa-paper-plane',
		'paper-plane-o' => 'fa fa-paper-plane-o',
		'history' => 'fa fa-history',
		'circle-thin' => 'fa fa-circle-thin',
		'header' => 'fa fa-header',
		'paragraph' => 'fa fa-paragraph',
		'sliders' => 'fa fa-sliders',
		'share-alt' => 'fa fa-share-alt',
		'share-alt-square' => 'fa fa-share-alt-square',
		'bomb' => 'fa fa-bomb',
		'futbol-o' => 'fa fa-futbol-o',
		'tty' => 'fa fa-tty',
		'binoculars' => 'fa fa-binoculars',
		'plug' => 'fa fa-plug',
		'slideshare' => 'fa fa-slideshare',
		'twitch' => 'fa fa-twitch',
		'yelp' => 'fa fa-yelp',
		'newspaper-o' => 'fa fa-newspaper-o',
		'wifi' => 'fa fa-wifi',
		'calculator' => 'fa fa-calculator',
		'paypal' => 'fa fa-paypal',
		'google-wallet' => 'fa fa-google-wallet',
		'cc-visa' => 'fa fa-cc-visa',
		'cc-mastercard' => 'fa fa-cc-mastercard',
		'cc-discover' => 'fa fa-cc-discover',
		'cc-amex' => 'fa fa-cc-amex',
		'cc-paypal' => 'fa fa-cc-paypal',
		'cc-stripe' => 'fa fa-cc-stripe',
		'bell-slash' => 'fa fa-bell-slash',
		'bell-slash-o' => 'fa fa-bell-slash-o',
		'trash' => 'fa fa-trash',
		'copyright' => 'fa fa-copyright',
		'at' => 'fa fa-at',
		'eyedropper' => 'fa fa-eyedropper',
		'paint-brush' => 'fa fa-paint-brush',
		'birthday-cake' => 'fa fa-birthday-cake',
		'area-chart' => 'fa fa-area-chart',
		'pie-chart' => 'fa fa-pie-chart',
		'line-chart' => 'fa fa-line-chart',
		'lastfm' => 'fa fa-lastfm',
		'lastfm-square' => 'fa fa-lastfm-square',
		'toggle-off' => 'fa fa-toggle-off',
		'toggle-on' => 'fa fa-toggle-on',
		'bicycle' => 'fa fa-bicycle',
		'bus' => 'fa fa-bus',
		'ioxhost' => 'fa fa-ioxhost',
		'angellist' => 'fa fa-angellist',
		'cc' => 'fa fa-cc',
		'ils' => 'fa fa-ils',
		'meanpath' => 'fa fa-meanpath',
	);
	
	return $icons;
}



