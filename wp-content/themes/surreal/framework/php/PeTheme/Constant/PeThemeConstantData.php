<?php

class PeThemeConstantData {
	public $yesno;
	public $delay;
	public $icons;
	public $fields;

	public function __construct() {
		$this->yesno = 
			array(
				  __pe("Yes")=>"yes",
				  __pe("No")=>"no"
				  );
		
		$this->delay = 
			array(
				  __pe("Don't Auto Rotate Slides")=>0,
				  "2" => 2,
				  "3" => 3,
				  "4" => 4,
				  "5" => 5,
				  "6" => 6,
				  "7" => 7,
				  "8" => 8,
				  "9" => 9,
				  "10" => 10,
				  "15" => 15,
				  "20" => 20,
				  "25" => 25,
				  "30" => 30
				  );

		$this->icons = 
			array(
				  "icon-adjust",
				  "icon-align-center",
				  "icon-align-justify",
				  "icon-align-left",
				  "icon-align-right",
				  "icon-arrow-down",
				  "icon-arrow-left",
				  "icon-arrow-right",
				  "icon-arrow-up",
				  "icon-asterisk",
				  "icon-backward",
				  "icon-ban-circle",
				  "icon-barcode",
				  "icon-bell",
				  "icon-bold",
				  "icon-book",
				  "icon-bookmark",
				  "icon-briefcase",
				  "icon-bullhorn",
				  "icon-calendar",
				  "icon-camera",
				  "icon-certificate",
				  "icon-check",
				  "icon-chevron-down",
				  "icon-chevron-left",
				  "icon-chevron-right",
				  "icon-chevron-up",
				  "icon-circle-arrow-down",
				  "icon-circle-arrow-left",
				  "icon-circle-arrow-right",
				  "icon-circle-arrow-up",
				  "icon-cog",
				  "icon-comment",
				  "icon-download",
				  "icon-download-alt",
				  "icon-edit",
				  "icon-eject",
				  "icon-envelope",
				  "icon-exclamation-sign",
				  "icon-eye-close",
				  "icon-eye-open",
				  "icon-facetime-video",
				  "icon-fast-backward",
				  "icon-fast-forward",
				  "icon-file",
				  "icon-film",
				  "icon-filter",
				  "icon-fire",
				  "icon-flag",
				  "icon-folder-close",
				  "icon-folder-open",
				  "icon-font",
				  "icon-forward",
				  "icon-fullscreen",
				  "icon-gift",
				  "icon-glass",
				  "icon-globe",
				  "icon-hand-down",
				  "icon-hand-left",
				  "icon-hand-right",
				  "icon-hand-up",
				  "icon-hdd",
				  "icon-headphones",
				  "icon-heart",
				  "icon-home",
				  "icon-inbox",
				  "icon-indent-left",
				  "icon-indent-right",
				  "icon-info-sign",
				  "icon-italic",
				  "icon-leaf",
				  "icon-list",
				  "icon-list-alt",
				  "icon-lock",
				  "icon-magnet",
				  "icon-map-marker",
				  "icon-minus",
				  "icon-minus-sign",
				  "icon-move",
				  "icon-music",
				  "icon-off",
				  "icon-ok",
				  "icon-ok-circle",
				  "icon-ok-sign",
				  "icon-pause",
				  "icon-pencil",
				  "icon-picture",
				  "icon-plane",
				  "icon-play",
				  "icon-play-circle",
				  "icon-plus",
				  "icon-plus-sign",
				  "icon-print",
				  "icon-qrcode",
				  "icon-question-sign",
				  "icon-random",
				  "icon-refresh",
				  "icon-remove",
				  "icon-remove-circle",
				  "icon-remove-sign",
				  "icon-repeat",
				  "icon-resize-full",
				  "icon-resize-horizontal",
				  "icon-resize-small",
				  "icon-resize-vertical",
				  "icon-retweet",
				  "icon-road",
				  "icon-screenshot",
				  "icon-search",
				  "icon-share",
				  "icon-share-alt",
				  "icon-shopping-cart",
				  "icon-signal",
				  "icon-star",
				  "icon-star-empty",
				  "icon-step-backward",
				  "icon-step-forward",
				  "icon-stop",
				  "icon-tag",
				  "icon-tags",
				  "icon-tasks",
				  "icon-text-height",
				  "icon-text-width",
				  "icon-th",
				  "icon-th-large",
				  "icon-th-list",
				  "icon-thumbs-down",
				  "icon-thumbs-up",
				  "icon-time",
				  "icon-tint",
				  "icon-trash",
				  "icon-upload",
				  "icon-user",
				  "icon-volume-down",
				  "icon-volume-off",
				  "icon-volume-up",
				  "icon-warning-sign",
				  "icon-wrench",
				  "icon-zoom-in",
				  "icon-zoom-out"
				  );
			
		$this->eicons = 
			array(
				  "icon-address",
				  "icon-adjust",
				  "icon-air",
				  "icon-alert",
				  "icon-archive",
				  "icon-arrow-combo",
				  "icon-arrows-ccw",
				  "icon-attach",
				  "icon-attention",
				  "icon-back",
				  "icon-back-in-time",
				  "icon-bag",
				  "icon-basket",
				  "icon-battery",
				  "icon-behance",
				  "icon-bell",
				  "icon-block",
				  "icon-book",
				  "icon-bookmark",
				  "icon-bookmarks",
				  "icon-book-open",
				  "icon-box",
				  "icon-briefcase",
				  "icon-brush",
				  "icon-bucket",
				  "icon-calendar",
				  "icon-camera",
				  "icon-cancel",
				  "icon-cancel-circled",
				  "icon-cancel-squared",
				  "icon-cc",
				  "icon-cc-by",
				  "icon-cc-nc",
				  "icon-cc-nc-eu",
				  "icon-cc-nc-jp",
				  "icon-cc-nd",
				  "icon-cc-pd",
				  "icon-cc-remix",
				  "icon-cc-sa",
				  "icon-cc-share",
				  "icon-ccw",
				  "icon-cc-zero",
				  "icon-cd",
				  "icon-chart-area",
				  "icon-chart-bar",
				  "icon-chart-line",
				  "icon-chart-pie",
				  "icon-chat",
				  "icon-check",
				  "icon-clipboard",
				  "icon-clock",
				  "icon-cloud",
				  "icon-cloud-thunder",
				  "icon-code",
				  "icon-cog",
				  "icon-comment",
				  "icon-compass",
				  "icon-credit-card",
				  "icon-cup",
				  "icon-cw",
				  "icon-database",
				  "icon-db-shape",
				  "icon-direction",
				  "icon-doc",
				  "icon-doc-landscape",
				  "icon-docs",
				  "icon-doc-text",
				  "icon-doc-text-inv",
				  "icon-dot",
				  "icon-dot-2",
				  "icon-dot-3",
				  "icon-down",
				  "icon-down-bold",
				  "icon-down-circled",
				  "icon-down-dir",
				  "icon-download",
				  "icon-down-open",
				  "icon-down-open-big",
				  "icon-down-open-mini",
				  "icon-down-thin",
				  "icon-dribbble",
				  "icon-dribbble-circled",
				  "icon-drive",
				  "icon-dropbox",
				  "icon-droplet",
				  "icon-erase",
				  "icon-evernote",
				  "icon-export",
				  "icon-eye",
				  "icon-facebook",
				  "icon-facebook-circled",
				  "icon-facebook-squared",
				  "icon-fast-backward",
				  "icon-fast-forward",
				  "icon-feather",
				  "icon-flag",
				  "icon-flash",
				  "icon-flashlight",
				  "icon-flattr",
				  "icon-flickr",
				  "icon-flickr-circled",
				  "icon-flight",
				  "icon-floppy",
				  "icon-flow-branch",
				  "icon-flow-cascade",
				  "icon-flow-line",
				  "icon-flow-parallel",
				  "icon-flow-tree",
				  "icon-folder",
				  "icon-forward",
				  "icon-gauge",
				  "icon-github",
				  "icon-github-circled",
				  "icon-globe",
				  "icon-google-circles",
				  "icon-gplus",
				  "icon-gplus-circled",
				  "icon-graduation-cap",
				  "icon-heart",
				  "icon-heart-empty",
				  "icon-help",
				  "icon-help-circled",
				  "icon-home",
				  "icon-hourglass",
				  "icon-inbox",
				  "icon-infinity",
				  "icon-info",
				  "icon-info-circled",
				  "icon-instagram",
				  "icon-install",
				  "icon-key",
				  "icon-keyboard",
				  "icon-lamp",
				  "icon-language",
				  "icon-lastfm",
				  "icon-lastfm-circled",
				  "icon-layout",
				  "icon-leaf",
				  "icon-left",
				  "icon-left-bold",
				  "icon-left-circled",
				  "icon-left-dir",
				  "icon-left-open",
				  "icon-left-open-big",
				  "icon-left-open-mini",
				  "icon-left-thin",
				  "icon-level-down",
				  "icon-level-up",
				  "icon-lifebuoy",
				  "icon-light-down",
				  "icon-light-up",
				  "icon-link",
				  "icon-linkedin",
				  "icon-linkedin-circled",
				  "icon-list",
				  "icon-list-add",
				  "icon-location",
				  "icon-lock",
				  "icon-lock-open",
				  "icon-login",
				  "icon-logo-db",
				  "icon-logout",
				  "icon-loop",
				  "icon-magnet",
				  "icon-mail",
				  "icon-map",
				  "icon-megaphone",
				  "icon-menu",
				  "icon-mic",
				  "icon-minus",
				  "icon-minus-circled",
				  "icon-minus-squared",
				  "icon-mixi",
				  "icon-mobile",
				  "icon-monitor",
				  "icon-moon",
				  "icon-mouse",
				  "icon-music",
				  "icon-mute",
				  "icon-network",
				  "icon-newspaper",
				  "icon-note",
				  "icon-note-beamed",
				  "icon-palette",
				  "icon-paper-plane",
				  "icon-pause",
				  "icon-paypal",
				  "icon-pencil",
				  "icon-phone",
				  "icon-picasa",
				  "icon-picture",
				  "icon-pinterest",
				  "icon-pinterest-circled",
				  "icon-play",
				  "icon-plus",
				  "icon-plus-circled",
				  "icon-plus-squared",
				  "icon-popup",
				  "icon-print",
				  "icon-progress-0",
				  "icon-progress-1",
				  "icon-progress-2",
				  "icon-progress-3",
				  "icon-publish",
				  "icon-qq",
				  "icon-quote",
				  "icon-rdio",
				  "icon-rdio-circled",
				  "icon-record",
				  "icon-renren",
				  "icon-reply",
				  "icon-reply-all",
				  "icon-resize-full",
				  "icon-resize-small",
				  "icon-retweet",
				  "icon-right",
				  "icon-right-bold",
				  "icon-right-circled",
				  "icon-right-dir",
				  "icon-right-open",
				  "icon-right-open-big",
				  "icon-right-open-mini",
				  "icon-right-thin",
				  "icon-rocket",
				  "icon-rss",
				  "icon-search",
				  "icon-share",
				  "icon-shareable",
				  "icon-shuffle",
				  "icon-signal",
				  "icon-sina-weibo",
				  "icon-skype",
				  "icon-skype-circled",
				  "icon-smashing",
				  "icon-sound",
				  "icon-soundcloud",
				  "icon-spotify",
				  "icon-spotify-circled",
				  "icon-star",
				  "icon-star-empty",
				  "icon-stop",
				  "icon-stumbleupon",
				  "icon-stumbleupon-circled",
				  "icon-suitcase",
				  "icon-sweden",
				  "icon-switch",
				  "icon-tag",
				  "icon-tape",
				  "icon-target",
				  "icon-thermometer",
				  "icon-thumbs-down",
				  "icon-thumbs-up",
				  "icon-ticket",
				  "icon-to-end",
				  "icon-tools",
				  "icon-to-start",
				  "icon-traffic-cone",
				  "icon-trash",
				  "icon-trophy",
				  "icon-tumblr",
				  "icon-tumblr-circled",
				  "icon-twitter",
				  "icon-twitter-circled",
				  "icon-up",
				  "icon-up-bold",
				  "icon-up-circled",
				  "icon-up-dir",
				  "icon-upload",
				  "icon-upload-cloud",
				  "icon-up-open",
				  "icon-up-open-big",
				  "icon-up-open-mini",
				  "icon-up-thin",
				  "icon-user",
				  "icon-user-add",
				  "icon-users",
				  "icon-vcard",
				  "icon-video",
				  "icon-vimeo",
				  "icon-vimeo-circled",
				  "icon-vkontakte",
				  "icon-volume",
				  "icon-water",
				  "icon-window"
				  );

		$this->fields = new StdClass();

		$this->fields->icon =
			array(
				  "label" => __pe("Icon Type"),
				  "type" => "Select",
				  "description" => __pe("Select the desired icon type. See the help documentation for a link to view the available icons"),
				  "single" => true,
				  "options" => $this->icons,
				  "default" => "icon-file"
				  );

		$this->fields->eicon =
			array(
				  "label" => __pe("Icon Type"),
				  "type" => "Select",
				  "description" => __pe("Select the desired icon type. See the help documentation for a link to view the available icons"),
				  "single" => true,
				  "options" => $this->eicons,
				  "default" => "icon-info"
				  );

	}
	
}

?>