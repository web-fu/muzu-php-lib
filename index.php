<?
/*
 *
 * Muzu PHP Library
 *
 * Test Page.
 *
 * Muzu PHP Library is licensed under the Creative Commons Attribution-ShareAlike 3.0 Unported License. 
 * Copyright (C) 2012 Gabriele Manganello <info at web-fu dot it>
 * To view a copy of this license, visit http://creativecommons.org/licenses/by-sa/3.0/ or 
 * send a letter to Creative Commons, 444 Castro Street, Suite 900, Mountain View, California, 94041, USA.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 */

define('MUZU_API_KEY', 'your-api-key');
define('MUZU_PARTNER_ID', 'your-partner-id');

require_once 'lib/xmlstr_to_array.inc.php';
require_once 'lib/muzu.lib.php';

$muzu = new Muzu(MUZU_API_KEY, MUZU_PARTNER_ID);

/*
 * For complete usage of the APIs, warranties and restriction, please visit:
 * http://www.muzu.tv/api/
 */

/*
 *
 * This method returns listings that match the browse criteria.
 * Specify the parameters to refine the results.
 * More infos : http://www.muzu.tv/api/browseDoc/
 *
 */
 
$muzu->browse(
  array(
		'g'			=> 'rock',
		'ob'		=> 'views',
		'af'		=> 's',
		'l'			=> 10,
		'of'		=> 20,
		'country'	=> 'it'
	)
);

/*
 *
 * This method returns details for a particular artist.
 * More infos : http://www.muzu.tv/api/artistLookupDoc/
 *
 */
 
$muzu->artist(
	array(
		'artist_name'	=> 'U2'
	)
);

/*
 *
 * This method returns details for a particular channel on MUZU.
 * More infos : http://www.muzu.tv/api/channelLookupDoc/
 *
 */

$muzu->channel(
	array(
		'channel_token'	=> 'your-channel-token'
	)
);

// OR //

$muzu->channel(
	array(
		'vanity_name'	=> 'your-channel-vanity-name'
	)
);

/*
 *
 * This method returns details for a particular video on MUZU.
 * More infos : http://www.muzu.tv/api/videoLookupDoc/
 *
 */

$muzu->video(
	array(
		'id' 		=> 1061154, 
		'width' 	=> 640, 
		'height'	=> 366,
		'autostart' => 'y'
	)
);

// OR //

$muzu->video(
	array(
		'aname'		=> 'U2',
		'tname'		=> 'Vertigo Live From Somerville', 
		'width' 	=> 640, 
		'height'	=> 366,
		'autostart' => 'y'
	)
);

/*
 *
 * This method returns an image for a video on MUZU.
 * More infos : http://www.muzu.tv/api/imageLookupDoc/
 *
 */

$muzu->image_video(
	array(
		'id' 		=> 1061154, 
	)
);

/*
 *
 * This method returns an image for a channel on MUZU.
 * More infos : http://www.muzu.tv/api/imageLookupDoc/
 *
 */

$muzu->image_channel(
	array(
		'channel' 		=> 'your-channel-token', 
	)
);

/*
 *
 * This method returns listings that match the search criteria
 * Specify the parameters to refine the results.
 * More infos : http://www.muzu.tv/api/searchDoc/
 *
 */

$muzu->search(
	array(
		'mySearch'	=> 'The Killers'
	)
);
?>
