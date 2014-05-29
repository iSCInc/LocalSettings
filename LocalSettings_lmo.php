<?php

$wgSitename = "LEGO Minifigures Online Wiki";
$wgMetaNamespace = "LEGO_Minifigures_Online_Wiki";
$wgNamespaceAliases['LMOW'] = NS_PROJECT;
$wgPasswordSender = "lmo";
$wgPasswordSenderName = "LEGO Minifigures Online Wiki";
$wgLanguageCode = "en";
$wgDefaultSkin = "refreshed";
$wgFavicon = "http://images.brickimedia.org/favicons/lmo.ico";

# SocialProfile
$wgUserStatsPointValues['edit'] = 5; // Points awarded on a mainspace edit
$wgUserStatsPointValues['vote'] = 1; // Points awarded for voting for an article
$wgUserStatsPointValues['comment'] = 1; // Points awarded for leaving a comment
$wgUserStatsPointValues['comment_plus'] = 2; // Points awarded if your comment gets a thumbs up
$wgUserStatsPointValues['comment_ignored'] = 0; // Points awarded if another user ignores your comments
$wgUserStatsPointValues['opinions_created'] = 5; // Points awarded for writing a blog article
$wgUserStatsPointValues['opinions_pub'] = 10; // Points awarded for having that article hit the "Blogs" page
$wgUserStatsPointValues['referral_complete'] = 0; // Points awarded for recruiting a new user
$wgUserStatsPointValues['points_winner_weekly'] = 20; // Points awarded for having the most points for a week
$wgUserStatsPointValues['points_winner_monthly'] = 50; // Points awarded for having the most points for a month
$wgUserStatsPointValues['user_image'] = 5; // Points awarded for adding your first avatar
$wgNamespacesForEditPoints = array( 0, ); // Array of namespaces that can earn you points. Use numerical keys. 0 is mainspace, 4 is project
// The actual user level definitions -- key is simple: 'Level name' => points needed
$wgUserLevels = array(
	'Newcomer' => 0,
	'Beginner' => 500,
	'Novice' => 1000,
	'Amateur' => 1500,
	'Thinking With Bricks' => 2000,
	'Bricktastic' => 2500,
	'Building Bigger' => 5000,
	'Brick Master' => 7500,
	'Master Builder' => 10000,
	'LEGO Wizard' => 12500,
	'Outstanding Brickipedian' => 15000,
	'Honorable Brickipedian' => 20000,
	'Legendary Brickipedian' => 25000,
);

# Refreshed
$wgRefreshedHeader = array(
	'url' => 'http://lmo.brickimedia.org/wiki/Main_Page',
	'img' => $refreshedLmo,
	'dropdown' => array(
		'http://meta.brickimedia.org/wiki/Main_Page' => $refreshedMeta,
		'http://en.brickimedia.org/wiki/Main_Page' => $refreshedEn,
		'http://customs.brickimedia.org/wiki/Main_Page' => $refreshedCustoms,
		'http://stories.brickimedia.org/wiki/Main_Page' => $refreshedStories,
		'http://ideas.brickimedia.org/wiki/Main_Page' => $refreshedIdeas,
		'http://books.brickimedia.org/wiki/Main_Page' => $refreshedBooks,
	)
);

# #brickimedia-rc-lmo IRC
$wgRC2UDPAddress = '127.0.0.1';
$wgRC2UDPPort = '51666';
$wgRC2UDPPrefix = "";
