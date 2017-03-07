<?php

namespace Kanboard\Plugin\RefactorTheme;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base
{
    public function initialize()
    {
        $this->hook->on("template:layout:css", array("template" => "plugins/RefactorTheme/Asset/css/refactorTheme.min.css"));
    }

    public function getPluginName()
    {
        return 'Refactor Theme';
    }

    public function getPluginDescription()
    {
        return t('Provides a better look and feel');
    }

    public function getPluginAuthor()
    {
        return 'Geovanni Pacheco';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/geovannikun/Kanboard-RefactorTheme';
    }
}
