# Disclaimer
This is a propriatary internal library that is useful for Quadrotech only.

# Introduction
This library is used to access CMS from PHP

# Usage
To use the library, the first thing you need is an Access Token from the Identity Service.<br>
This can be easily accomplished by using the league/oauth2-client package.

You then need to set the Token and the URL to the CMS Api for the client, after which you can use it.

Sample usage:

`$url = "https://apiBaseUrl.com/";
$token = "akldjalekjawlefjwlfwjkef";`

$cmsClient = new CMSClient($url, $token);
$result = $cmsClient->getSubscriptions($accountId);

