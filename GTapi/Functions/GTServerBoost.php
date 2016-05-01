<?php
/*
	* Name: GameTracker.rs API Script - Server Boosts
	* Author: MBS
	* Version: v1.0

	* Facebook: https://www.facebook.com/pages/MagicBrush-Software/666346276834469
	* GitHub: https://github.com/janka99/gt.rs-api
*/

function ServerBoost($ip, $type)
{
	$api = file_get_contents("http://api.gametracker.rs/demo/json/server_boosts/$ip/");
	$bdata = json_decode($api, true);

	if($bdata['apiError'] == 1)
	{
		return 'Server not found!';
	}

	switch($type)
	{
		case 'boost_list':
			$boosts = array();

			foreach($bdata['boosts'] as $boost)
			{
				$binfo['time'] = date("H:i - d.m.Y", $boost['boost']['time']);
				$binfo['name'] = $boost['boost']['name'];
				$binfo['number'] = $boost['boost']['phone'];
				$binfo['status'] = $boost['boost']['status'];

				$boosts[] = $binfo;
			}
			return $boosts;
		break;
		case 'total':
			return count($bdata['boosts']);
		break;
		case 'successful':
			foreach($bdata['boosts'] as $boost)
			{
				$statuss = $boost['boost']['status'];

				if($statuss == 'ok')
					$counter++;
			}
			return $counter;
		break;
		case 'failed':
			foreach($bdata['boosts'] as $boost)
			{
				$statuss = $boost['boost']['status'];

				if($statuss == 'failed')
					$counter++;
			}
			return $counter;
		break;
		case 'pending':
			foreach($bdata['boosts'] as $boost)
			{
				$statuss = $boost['boost']['status'];

				if($statuss == 'pending')
					$counter++;
			}
			return $counter;
		break;
	}
}