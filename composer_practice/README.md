使用ali镜像
composer config repo.packagist composer https://mirrors.aliyun.com/composer/

$ composer install
    1/12:       https://mirrors.aliyun.com/composer/p/provider-2019-07$9335bea6ef0c2f837b62b202407c083f6f80f1a29af254d28713fdc163600112.json

composer -vvv require monolog/monolog:1.0.*

:80/artifactory/api/composer/composer-github/p/alibabacloud/sdk.json" file could not be downloaded: php_network_ge
  taddresses: getaddrinfo failed: nodename nor servname provided, or not known
  failed to open stream: php_network_getaddresses: getaddrinfo failed: nodename nor servname provided, or not known

本地镜像和全局镜像同时存，但是冲突了，全局镜像无法链接拉取
composer clear cache

$mv ~/.composer/ ~/.composer.bak

