<?php
namespace Craft;

class LoggedInCookiePlugin extends BasePlugin
{
    private $cookieName = 'CraftLoggedIn';

    private $existingCookie = false;

    function getName()
    {
        return Craft::t('Logged-In Cookie');
    }

    function getVersion()
    {
        return '1.0.0';
    }

    function getDeveloper()
    {
        return 'Kevin Smith';
    }

    function getDeveloperUrl()
    {
        return 'https://kevinsmith.io';
    }

    function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/kevinsmith/craft-logged-in-cookie/master/releases.json';
    }

    function init()
    {
        $this->existingCookie = (bool) craft()->request->getCookie($this->cookieName);

        // Set the cookie
        craft()->on('userSession.onLogin', function() {
            $this->setCookie();
        });

        // Remove the cookie
        craft()->on('userSession.onLogout', function() {
            $this->deleteCookie();
        });

        // Test whether current request has a user logged-in or not
        if (is_null(craft()->userSession->getUser())) {
            $this->deleteCookie();
        } else {
            $this->setCookie();
        }
    }

    private function deleteCookie()
    {
        craft()->request->deleteCookie($this->cookieName);

        if ($this->existingCookie) {
            LoggedInCookiePlugin::log("Removed {$this->cookieName} cookie.");
        }
    }

    private function setCookie()
    {
        $duration = craft()->config->getUserSessionDuration(true) ?: 0;

        $cookie = new HttpCookie($this->cookieName, 'true');
        $cookie->expire = time() + $duration;

        craft()->request->getCookies()->add($cookie->name, $cookie);

        if (! $this->existingCookie) {
            LoggedInCookiePlugin::log("Added {$this->cookieName} cookie.");
        } else{
            LoggedInCookiePlugin::log("Extended expiry on {$this->cookieName} cookie.");
        }
    }
}
