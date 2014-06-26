<?php
spl_autoload_register(function ($className) {
    $directories = array(
        ROUTES_DIR,
        UTILITY_DIR
    );
    foreach ($directories as $directory) {
        $fileName = $directory . DS . $className . '.php';
        if (file_exists($fileName)) {
            include_once($fileName);
        }
    }
});

require_once(LIB_DIR . DS . 'MysqliDb.php');
require_once(LIB_DIR . DS . 'Smarty' . DS . 'Smarty.class.php');