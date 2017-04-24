<?php
/**
 * CrawlerDetect plugin for Craft CMS
 *
 * Use CrawlerDetect to detect 1.000's of bots/crawlers/spiders in Craft.
 *
 * @author    Superbig
 * @copyright Copyright (c) 2017 Superbig
 * @link      https://superbig.co
 * @package   CrawlerDetect
 * @since     1.0.0
 */

namespace Craft;

class CrawlerDetectPlugin extends BasePlugin
{
    /**
     * @return mixed
     */
    public function init ()
    {
        parent::init();

        require_once __DIR__ . '/vendor/autoload.php';
    }

    /**
     * @return mixed
     */
    public function getName ()
    {
        return Craft::t('CrawlerDetect');
    }

    /**
     * @return mixed
     */
    public function getDescription ()
    {
        return Craft::t('Use CrawlerDetect to detect 1.000\'s of bots/crawlers/spiders in Craft.');
    }

    /**
     * @return string
     */
    public function getDocumentationUrl ()
    {
        return 'https://superbig.co/plugins/crawlerdetect';
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl ()
    {
        return 'https://superbig.co/plugins/crawlerdetect/feed';
    }

    /**
     * @return string
     */
    public function getVersion ()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getSchemaVersion ()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getDeveloper ()
    {
        return 'Superbig';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl ()
    {
        return 'https://superbig.co';
    }

}