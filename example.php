<?php

$steamid = [
    'Steam2' => 'STEAM_0:1:47783783',
    'Steam3' => '[U:1:95567567]',
    'Steam64' => '76561198055833295'
];

var_dump($steamid);

require_once('SteamID/bootstrap.php');

//If you use SQL querys to make calculations you have to set a valid Database object in the init() function
//TODO: Make the SteamID lib compatible with PDO
SteamID\SteamID::init();

foreach ($steamid as $type => $id) {
    print "$type to Steam2: ".SteamID\SteamID::toSteam2($id);
    print "<br/>";
    print "$type to Steam3: ".SteamID\SteamID::toSteam3($id);
    print "<br/>";
    print "$type to Steam64: ".SteamID\SteamID::toSteam64($id);
    print "<br/>";
}
