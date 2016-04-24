<?php

use Sirius\Admin\Installer as InstallManager;


class Installer extends InstallManager
{

    public $routes = array(
        'tr' => array(
            'route' => array(
                '.*' => 'RedirectController/index',
            )
        )
    );

}