<?php

use Sami\Sami;
use Sami\RemoteRepository\GitHubRemoteRepository;
use Symfony\Component\Finder\Finder;

// Download sami via
//      curl -O http://get.sensiolabs.org/sami.phar
// and run
//      php sami.phar update sami-config.php

$iterator = Finder::create()
    ->files()
    ->name('*.php')
    ->exclude('Commands')
    ->exclude('Providers')
    ->in('./src');

return new Sami($iterator, array(
    'title'             => 'Hive API',
    'remote_repository' => new GitHubRemoteRepository('r3oath/hive', './'),
));