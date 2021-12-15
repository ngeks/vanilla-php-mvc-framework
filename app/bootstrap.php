<?php

// Load config
require_once 'config/config.php';

// Load helpers
require_once 'helpers/redirect.php';

// Autoload core libraries
spl_autoload_register(function ($className) {
    require_once 'libraries/' . $className . '.php';
});
