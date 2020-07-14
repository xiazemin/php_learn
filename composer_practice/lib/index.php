<?php
/**
 * Created by PhpStorm.
 * Date: 19/10/19
 * Time: 21:50
 * @category Category
 * @package FileDirFileName
 * @author xiazemin <465474307@qq.com>
 * @link ${link}
 */
require '/Users/didi/PhpstormProjects/php/xiazemin/composer_practice/vendor/autoload.php';
$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));

$log->addWarning('Foo');
