<?php
$routes = [
    'metadata',
    'getPCServerStatus',
    'getSinglePCServerInfo',
    'getPCServersInfo',
    'getPCServerMOTD',
    'getPCServerPlayersAmount',
    'getPCServerFavicon',
    'getSingleMCPEServerInfo',
    'getMCPEServersInfo',
    'getSinglePCServerExtensiveInfo',
    'getPCServersExtensiveInfo',
    'getBuycraftRecentPayments',
    'getBuycraftPackages',
    'getBuycraftShopInfo',
    'getMinecraftMarketPayments',
    'getMinecraftMarketPackages',
    'getBlockedServers',
    'getPlayersAvatar',
    'getPlayersSkin',
    'getPlayerSkinFile',
    'getMinecraftServicesStatus',
    'checkIsUp',
    'checkDomainDNS'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

