<?php
namespace Craft;

class LoggedInCookiePlugin extends BasePlugin
{
    function getName()
    {
        return Craft::t('Logged-In Cookie');
    }

    function getVersion()
    {
        return '0.1';
    }

    function getDeveloper()
    {
        return 'Kevin Smith';
    }

    function getDeveloperUrl()
    {
        return 'https://kevinsmith.io';
    }
}
