<?php


class IncludeCss
{
    private $pluginDir;

    public function __construct()
    {
        add_action('wp_enqueue_scripts', array($this, 'start'));
    }

    public function start(){
        $this->pluginDir = $this->getPluginDir();
        $this->addCSS();
    }

    private function getPluginDir(){
        return plugins_url().'/'.Plugin::$name.'/';
    }

    private function addCSS(){
        echo "addCSS";
        wp_enqueue_style( 'topicCustomQuotesCSS', $this->pluginDir.'css/style.css', false );
    }
}