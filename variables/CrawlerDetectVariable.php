<?php
/**
 * CrawlerDetect plugin for Craft CMS
 *
 * CrawlerDetect Variable
 *
 * @author    Superbig
 * @copyright Copyright (c) 2017 Superbig
 * @link      https://superbig.co
 * @package   CrawlerDetect
 * @since     1.0.0
 */

namespace Craft;

class CrawlerDetectVariable
{
    public function isCrawler ($userAgent = null)
    {
        return craft()->crawlerDetect->isCrawler($userAgent);
    }

    public function getMatches ()
    {
        return craft()->crawlerDetect->getMatches();
    }
}