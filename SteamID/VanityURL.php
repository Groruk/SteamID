<?php

namespace SteamID;

class VanityURL
{
    public static function resolve($url, $steamApiKey)
    {
        $endpoint = "https://api.steampowered.com/ISteamUser/ResolveVanityURL/v1/?key=$steamApiKey&vanityurl=$url";

        //TODO: Rewrite with curl
        $data = json_decode(file_get_contents($endpoint), true);
        if ($data['response']['success'] === 1) {
            return $data['response']['steamid'];
        }
        return false;
    }
}
