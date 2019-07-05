<?php

// $app = [];
// $app['config'] = require 'config.php';
App::bind('config', require 'config.php');

/**
 * Since we added the autoload in ./index.php,
 * so the following requires can be removed
 */
// require 'core/Router.php';
// require 'core/Request.php';
// require 'core/database/Connection.php';
// require 'core/database/QueryBuilder.php';

// $app['database'] = new QueryBuilder(
//     Connection::make($app['config']['database'])
// );
App::bind('database', new QueryBuilder(
        Connection::make(App::get('config')['database'])
));