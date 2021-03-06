<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb01d6ebc6d3e803bfb70aaa3e80c7111
{
    public static $files = array (
        '2cffec82183ee1cea088009cef9a6fc3' => __DIR__ . '/..' . '/ezyang/htmlpurifier/library/HTMLPurifier.composer.php',
        '2c102faa651ef8ea5874edb585946bce' => __DIR__ . '/..' . '/swiftmailer/swiftmailer/lib/swift_required.php',
    );

    public static $prefixLengthsPsr4 = array (
        'y' => 
        array (
            'yii\\swiftmailer\\' => 16,
            'yii\\redactor\\' => 13,
            'yii\\mongodb\\' => 12,
            'yii\\jui\\' => 8,
            'yii\\httpclient\\' => 15,
            'yii\\gii\\' => 8,
            'yii\\faker\\' => 10,
            'yii\\debug\\' => 10,
            'yii\\composer\\' => 13,
            'yii\\codeception\\' => 16,
            'yii\\bootstrap\\' => 14,
            'yii\\authclient\\' => 15,
            'yii\\apidoc\\' => 11,
            'yii\\' => 4,
        ),
        'c' => 
        array (
            'cebe\\markdown\\latex\\' => 20,
            'cebe\\markdown\\' => 14,
            'cebe\\jssearch\\' => 14,
        ),
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'yii\\swiftmailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-swiftmailer',
        ),
        'yii\\redactor\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiidoc/yii2-redactor',
        ),
        'yii\\mongodb\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-mongodb',
        ),
        'yii\\jui\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-jui',
        ),
        'yii\\httpclient\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-httpclient',
        ),
        'yii\\gii\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-gii',
        ),
        'yii\\faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-faker',
        ),
        'yii\\debug\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-debug',
        ),
        'yii\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-composer',
        ),
        'yii\\codeception\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-codeception',
        ),
        'yii\\bootstrap\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-bootstrap',
        ),
        'yii\\authclient\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-authclient',
        ),
        'yii\\apidoc\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-apidoc',
        ),
        'yii\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2',
        ),
        'cebe\\markdown\\latex\\' => 
        array (
            0 => __DIR__ . '/..' . '/cebe/markdown-latex',
        ),
        'cebe\\markdown\\' => 
        array (
            0 => __DIR__ . '/..' . '/cebe/markdown',
        ),
        'cebe\\jssearch\\' => 
        array (
            0 => __DIR__ . '/..' . '/cebe/js-search/lib',
        ),
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static $prefixesPsr0 = array (
        'p' => 
        array (
            'phpDocumentor' => 
            array (
                0 => __DIR__ . '/..' . '/phpdocumentor/reflection-docblock/src',
                1 => __DIR__ . '/..' . '/phpdocumentor/reflection/src',
                2 => __DIR__ . '/..' . '/phpdocumentor/reflection/tests/unit',
                3 => __DIR__ . '/..' . '/phpdocumentor/reflection/tests/mocks',
            ),
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 
            array (
                0 => __DIR__ . '/..' . '/psr/log',
            ),
            'PHPParser' => 
            array (
                0 => __DIR__ . '/..' . '/nikic/php-parser/lib',
            ),
        ),
        'M' => 
        array (
            'MikeVanRiel' => 
            array (
                0 => __DIR__ . '/..' . '/mikevanriel/text-to-latex/src',
                1 => __DIR__ . '/..' . '/mikevanriel/text-to-latex/tests/unit',
            ),
        ),
        'H' => 
        array (
            'Highlight\\' => 
            array (
                0 => __DIR__ . '/..' . '/scrivo/highlight.php',
            ),
            'HTMLPurifier' => 
            array (
                0 => __DIR__ . '/..' . '/ezyang/htmlpurifier/library',
            ),
        ),
        'D' => 
        array (
            'Diff' => 
            array (
                0 => __DIR__ . '/..' . '/phpspec/php-diff/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb01d6ebc6d3e803bfb70aaa3e80c7111::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb01d6ebc6d3e803bfb70aaa3e80c7111::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitb01d6ebc6d3e803bfb70aaa3e80c7111::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
