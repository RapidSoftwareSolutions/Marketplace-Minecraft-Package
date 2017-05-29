[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Minecraft/functions?utm_source=RapidAPIGitHub_MinecraftFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)
# Minecraft Package
Minecraft API Web Service
* Domain: [minecraft.net](https://minecraft.net)
* Credentials: buycraftKey, marketKey

## How to get credentials: 
1. Sign in [buycraft.net](https://buycraft.net)
2. Navigate to profile->Api keys
3. Create new API key
 
## Minecraft.getPCServerStatus
Status of a PC server

| Field  | Type  | Description
|--------|-------|----------
| address| String| Used to provide the IP address & port of the server. Example: ```play.minesuperior.com```

## Minecraft.getSinglePCServerInfo
Information about a PC server

| Field  | Type  | Description
|--------|-------|----------
| address| String| Used to provide the IP address & port of the server. Example: ```play.minesuperior.com```

## Minecraft.getPCServersInfo
Information about multiple PC servers.

| Field  | Type| Description
|--------|-----|----------
| address| Array| Used to provide the IP address & port of the server. Example: ```['play.minesuperior.com','mc.arkhamnetwork.org']```

## Minecraft.getPCServerMOTD
The MOTD of a PC server.

| Field  | Type  | Description
|--------|-------|----------
| address| String| Used to provide the IP address & port of the server. Example: ```play.minesuperior.com```

## Minecraft.getPCServerPlayersAmount
The amount of players on a PC server.

| Field  | Type  | Description
|--------|-------|----------
| address| String| Used to provide the IP address & port of the server. Example: ```play.minesuperior.com```

## Minecraft.getPCServerFavicon
The favicon of a PC server.

| Field  | Type  | Description
|--------|-------|----------
| address| String| Used to provide the IP address & port of the server. Example: ```play.minesuperior.com```

## Minecraft.getSingleMCPEServerInfo
Information about a MCPE server.

| Field  | Type  | Description
|--------|-------|----------
| address| String| Used to provide the IP address & port of the server. Example: ```play.minesuperior.com```

## Minecraft.getMCPEServersInfo
Information about a MCPE servers.

| Field  | Type| Description
|--------|-----|----------
| address| Array| Used to provide the IP address & port of the server. Example: ```['pe.cookie-build.com','play.lbsg.net']```

## Minecraft.getSinglePCServerExtensiveInfo
Extensive information about a PC server.

| Field  | Type  | Description
|--------|-------|----------
| address| String| Used to provide the IP address & port of the server. Example: ```play.minesuperior.com```

## Minecraft.getPCServersExtensiveInfo
Extensive information about multiple PC servers

| Field  | Type| Description
|--------|-----|----------
| address| Array| Used to provide the IP address & port of the server. Example: ```play.minesuperior.com```

## Minecraft.getBuycraftRecentPayments
Recent payments made to the shop.

| Field      | Type  | Description
|------------|-------|----------
| buycraftKey| String| Key per server that Buycraft generates for you.

## Minecraft.getBuycraftPackages
Packages in the shop.

| Field      | Type  | Description
|------------|-------|----------
| buycraftKey| String| Key per server that Buycraft generates for you.

## Minecraft.getBuycraftShopInfo
Information about the shop.

| Field      | Type  | Description
|------------|-------|----------
| buycraftKey| String| Key per server that Buycraft generates for you.

## Minecraft.getMinecraftMarketPayments
Recent payments made to the shop.

| Field    | Type  | Description
|----------|-------|----------
| marketKey| String| Key per server that MinecraftMarket generates for you.

## Minecraft.getMinecraftMarketPackages
Packages that are viewable ingame

| Field    | Type  | Description
|----------|-------|----------
| marketKey| String| Key per server that MinecraftMarket generates for you.

## Minecraft.getBlockedServers
Array of servers blocked by Mojang

No arguments.

## Minecraft.getPlayersAvatar
Return player avatar

| Field   | Type   | Description
|---------|--------|----------
| username| String | Username of the player who you want an avatar of.
| helm    | Boolean| Boolean for changing if the helm layer is rendered.
| size    | Number | Number to change the size of the image.

## Minecraft.getPlayersSkin
2D image of player's skin

| Field   | Type   | Description
|---------|--------|----------
| username| String | Username of the player who you want an avatar of.
| helm    | Boolean| Boolean for changing if the helm layer is rendered.
| size    | Number | Number to change the size of the image.

## Minecraft.getPlayerSkinFile
Raw skin file of a user

| Field   | Type  | Description
|---------|-------|----------
| username| String| Username of the player who you want an avatar of.

## Minecraft.getMinecraftServicesStatus
Check the current status of Minecraft's services

No arguments.

## Minecraft.checkIsUp
Check the status of a IP/Domain

| Field   | Type  | Description
|---------|-------|----------
| endpoint| String| IP/Domain to check the status of.

## Minecraft.checkDomainDNS
Check the DNS of a domain

| Field | Type  | Description
|-------|-------|----------
| domain| String| Domain to check the DNS of.

