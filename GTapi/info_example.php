<?php
// THIS IS ONLY EXAMPLE PAGE

// Connect with script
include_once("Functions/GTServerInfo.php");

// Your server IP
$ip = '';

$Players = array(); // Get players online in array
$Players = ServerInfo($ip, 'players_list');

echo ServerInfo($ip, 'name'); // Server name
echo '<br>';
echo ServerInfo($ip, 'game'); // Game server type
echo '<br>';
echo ServerInfo($ip, 'mode'); // Server mode
echo '<br>';
echo ServerInfo($ip, 'status'); // Server status
echo '<br>';
echo ServerInfo($ip, 'server_added'); // Time when server wa added
echo '<br>';
echo ServerInfo($ip, 'server_adder'); // Server adder
echo '<br>';
echo ServerInfo($ip, 'server_owner'); // Server owner
echo '<br>';
echo ServerInfo($ip, 'country'); // Server country
echo '<br>';
echo '<img src="'.ServerInfo($ip, 'country_flag').'" />'; // Country flag (image url)
echo '<br>';
echo '<br>';

echo ServerInfo($ip, 'slots'); // Number of slots
echo '<br>';
echo ServerInfo($ip, 'players'); // Number of online players
echo '<br>';
echo ServerInfo($ip, 'daily_av_players'); // Average number of players daily
echo '<br>';
echo ServerInfo($ip, 'weekly_av_players'); // Average number of players weekly
echo '<br>';
echo ServerInfo($ip, 'monthly_av_players'); // Average number of players monthly
echo '<br>';
echo '<br>';

echo ServerInfo($ip, 'world_rank'); // World rank
echo '<br>';
echo ServerInfo($ip, 'balcan_rank'); // Balcan rank
echo '<br>';
echo ServerInfo($ip, 'montly_av_rank'); // Average monthly rank
echo '<br>';
echo ServerInfo($ip, 'best_rank'); // The best rank
echo '<br>';
echo ServerInfo($ip, 'worst_rank'); // The worst rank
echo '<br>';
echo '<br>';

// Players online
foreach($Players as $Player) {
  echo $Player['nick'];
  echo $Player['score'];
  echo $Player['time'];
  echo '<br>';
}

echo '<br>';
echo '<br>';

echo ServerInfo($ip, 'last_map'); // Last map
echo '<br>';
echo ServerInfo($ip, 'map'); // Current map
echo '<br>';
echo '<img src="'.ServerInfo($ip, 'map_image').'" />'; // Map image url
echo '<br>';

echo '<img src="'.ServerInfo($ip, 'day_graph').'" />'; // Daily graph (image url)
echo '<br>';
echo '<img src="'.ServerInfo($ip, 'week_graph').'" />'; // Weekly graph (image url)
echo '<br>';
echo '<img src="'.ServerInfo($ip, 'month_graph').'" />'; // Monthly graph (image url)
echo '<br>';
echo '<img src="'.ServerInfo($ip, 'rank_graph').'" />'; // Rank graph (image url)
?>
