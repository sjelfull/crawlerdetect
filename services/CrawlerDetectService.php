<?php
/**
 * CrawlerDetect plugin for Craft CMS
 *
 * CrawlerDetect Service
 *
 * @author    Superbig
 * @copyright Copyright (c) 2017 Superbig
 * @link      https://superbig.co
 * @package   CrawlerDetect
 * @since     1.0.0
 */

namespace Craft;

use Jaybizzle\CrawlerDetect\CrawlerDetect;


class CrawlerDetectService extends BaseApplicationComponent
{
    protected $crawlerDetect;

    public function init ()
    {
        parent::init();

        $this->crawlerDetect = new CrawlerDetect;
    }

    public function isCrawler ($userAgent = null)
    {
        return $this->crawlerDetect->isCrawler($userAgent);
    }

    public function getMatches ()
    {
        return $this->crawlerDetect->getMatches();
    }

}