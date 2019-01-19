GitLab CI PHP Example
---------------------

Simple example of GitLab CI for PHP. 

It runs CI pipeline with two jobs in **PHP 7.1** and **PHP 7.2** with 3 steps:

1) PSR-2 coding standard check with [CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer)
2) Code static analysis with [PHPStan](https://github.com/phpstan/phpstan)
3) Run tests with [PHPUnit](https://phpunit.de)

Configuration is in `scripts` section of `composer.json`

[Example on GitLab](https://gitlab.com/sv331/gitlab-ci-php-example/pipelines/43999225)




