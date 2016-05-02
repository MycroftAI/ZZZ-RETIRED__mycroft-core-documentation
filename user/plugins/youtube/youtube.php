<?php
/**
 * YouTube
 *
 * This plugin embeds YouTube video from markdown URLs
 *
 * Licensed under MIT, see LICENSE.
 */

namespace Grav\Plugin;

use Grav\Common\Data\Data;
use Grav\Common\Plugin;
use Grav\Common\Page\Page;
use Grav\Common\Twig\Twig;
use Grav\Plugin\Youtube\Twig\YoutubeTwigExtension;
use RocketTheme\Toolbox\Event\Event;

class YoutubePlugin extends Plugin
{
    const YOUTUBE_REGEX = '(?:https?:\/{2}www.youtube(?:-nocookie)?\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})';

    /**
     * Return a list of subscribed events.
     *
     * @return array    The list of events of the plugin of the form
     *                      'name' => ['method_name', priority].
     */
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0],
        ];
    }

    /**
     * Initialize configuration.
     */
    public function onPluginsInitialized()
    {
        if ($this->isAdmin()) {
            if ($this->config->get('plugins.youtube.add_editor_button')) {
                $this->grav['assets']->addJs($this->grav['base_url_absolute'] . '/user/plugins/youtube/admin/editor-button/js/button.js');
            }
            $this->active = false;
            return;
        }

        $this->enable([
            'onPageContentRaw' => ['onPageContentRaw', 0],
            'onTwigExtensions' => ['onTwigExtensions', 0],
            'onTwigSiteVariables' => ['onTwigSiteVariables', 0],
            'onTwigTemplatePaths' => ['onTwigTemplatePaths', 0],
        ]);
    }

    /**
     * Add content after page content was read into the system.
     *
     * @param  Event  $event An event object, when `onPageContentRaw` is fired.
     */
    public function onPageContentRaw(Event $event)
    {
        /** @var Page $page */
        $page = $event['page'];
        /** @var Twig $twig */
        $twig = $this->grav['twig'];
        /** @var Data $config */
        $config = $this->mergeConfig($page, TRUE);

        if ($config->get('enabled')) {
            // Get raw content and substitute all formulas by a unique token
            $raw = $page->getRawContent();

            // build an anonymous function to pass to `parseLinks()`
            $function = function ($matches) use ($twig, $config) {
                $search = $matches[0];

                // double check to make sure we found a valid YouTube video ID
                if (!isset($matches[1])) {
                    return $search;
                }

                // build the replacement embed HTML string
                $replace = $twig->processTemplate('partials/youtube.html.twig', array(
                    'player_parameters' => $config->get('player_parameters'),
                    'privacy_enhanced_mode' => $config->get('privacy_enhanced_mode'),
                    'video_id' => $matches[1],
                ));

                // do the replacement
                return str_replace($search, $replace, $search);
            };

            // set the parsed content back into as raw content
            $page->setRawContent($this->parseLinks($raw, $function, $this::YOUTUBE_REGEX));
        }
    }

    /**
     * Add Twig Extensions.
     */
    public function onTwigExtensions()
    {
        require_once __DIR__ . '/classes/Twig/YoutubeTwigExtension.php';
        $this->grav['twig']->twig->addExtension(new YoutubeTwigExtension());
    }

    /**
     * Set needed variables to display breadcrumbs.
     */
    public function onTwigSiteVariables()
    {
        if ($this->config->get('plugins.youtube.built_in_css')) {
            $this->grav['assets']->add('plugin://youtube/css/youtube.css');
        }
    }

    /**
     * Add current directory to twig lookup paths.
     */
    public function onTwigTemplatePaths()
    {
        $this->grav['twig']->twig_paths[] = __DIR__ . '/templates';
    }
}
