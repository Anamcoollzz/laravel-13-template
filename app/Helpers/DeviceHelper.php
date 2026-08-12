<?php

use Jenssegers\Agent\Agent;

/**
 * check if device is desktop
 *
 * @return bool
 */
function is_desktop()
{
    $agent = new Agent;

    return $agent->isDesktop();
}

/**
 * check if device is mobile
 *
 * @return bool
 */
function is_mobile()
{
    $agent = new Agent;

    return $agent->isMobile();
}
