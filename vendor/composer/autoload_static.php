<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5748b66abe6b6367eae34e451e2ed586
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
    );

    public static $classMap = array (
        'Upadd\\Asyncp\\Http' => __DIR__ . '/..' . '/Upadd/Async/Http.php',
        'Upadd\\Bin\\Alias' => __DIR__ . '/..' . '/Upadd/Bin/Alias.php',
        'Upadd\\Bin\\Application' => __DIR__ . '/..' . '/Upadd/Bin/Application.php',
        'Upadd\\Bin\\Cache\\CacheRoute' => __DIR__ . '/..' . '/Upadd/Bin/Cache/CacheRoute.php',
        'Upadd\\Bin\\Cache\\Mem' => __DIR__ . '/..' . '/Upadd/Bin/Cache/Mem.php',
        'Upadd\\Bin\\Config\\Configuration' => __DIR__ . '/..' . '/Upadd/Bin/Config/Configuration.php',
        'Upadd\\Bin\\Config\\GetConfiguration' => __DIR__ . '/..' . '/Upadd/Bin/Config/GetConfiguration.php',
        'Upadd\\Bin\\Db\\Db' => __DIR__ . '/..' . '/Upadd/Bin/Db/Db.php',
        'Upadd\\Bin\\Db\\LinkPdoMysql' => __DIR__ . '/..' . '/Upadd/Bin/Db/LinkPdoMysql.php',
        'Upadd\\Bin\\Factory' => __DIR__ . '/..' . '/Upadd/Bin/Factory.php',
        'Upadd\\Bin\\Http\\Data' => __DIR__ . '/..' . '/Upadd/Bin/Http/Data.php',
        'Upadd\\Bin\\Http\\Request' => __DIR__ . '/..' . '/Upadd/Bin/Http/Request.php',
        'Upadd\\Bin\\Http\\Route' => __DIR__ . '/..' . '/Upadd/Bin/Http/Route.php',
        'Upadd\\Bin\\Loader' => __DIR__ . '/..' . '/Upadd/Bin/Loader.php',
        'Upadd\\Bin\\Package\\Config' => __DIR__ . '/..' . '/Upadd/Bin/Package/Config.php',
        'Upadd\\Bin\\Package\\Data' => __DIR__ . '/..' . '/Upadd/Bin/Package/Data.php',
        'Upadd\\Bin\\Package\\Log' => __DIR__ . '/..' . '/Upadd/Bin/Package/Log.php',
        'Upadd\\Bin\\Package\\Routes' => __DIR__ . '/..' . '/Upadd/Bin/Package/Routes.php',
        'Upadd\\Bin\\Package\\Session' => __DIR__ . '/..' . '/Upadd/Bin/Package/Session.php',
        'Upadd\\Bin\\Response\\Json' => __DIR__ . '/..' . '/Upadd/Bin/Response/Json.php',
        'Upadd\\Bin\\Response\\Run' => __DIR__ . '/..' . '/Upadd/Bin/Response/Run.php',
        'Upadd\\Bin\\Response\\View' => __DIR__ . '/..' . '/Upadd/Bin/Response/View.php',
        'Upadd\\Bin\\Response\\Xml' => __DIR__ . '/..' . '/Upadd/Bin/Response/Xml.php',
        'Upadd\\Bin\\Session\\SessionFile' => __DIR__ . '/..' . '/Upadd/Bin/Session/SessionFile.php',
        'Upadd\\Bin\\Session\\getSession' => __DIR__ . '/..' . '/Upadd/Bin/Session/getSession.php',
        'Upadd\\Bin\\Tool\\Log' => __DIR__ . '/..' . '/Upadd/Bin/Tool/Log.php',
        'Upadd\\Bin\\Tool\\PageData' => __DIR__ . '/..' . '/Upadd/Bin/Tool/PageData.php',
        'Upadd\\Bin\\Tool\\Security' => __DIR__ . '/..' . '/Upadd/Bin/Tool/Security.php',
        'Upadd\\Bin\\Tool\\Session' => __DIR__ . '/..' . '/Upadd/Bin/Tool/Session.php',
        'Upadd\\Bin\\Tool\\Upload' => __DIR__ . '/..' . '/Upadd/Bin/Tool/Upload.php',
        'Upadd\\Bin\\Tool\\Verify' => __DIR__ . '/..' . '/Upadd/Bin/Tool/Verify.php',
        'Upadd\\Bin\\Tool\\View' => __DIR__ . '/..' . '/Upadd/Bin/Tool/View.php',
        'Upadd\\Bin\\UpaddException' => __DIR__ . '/..' . '/Upadd/Bin/UpaddException.php',
        'Upadd\\Bin\\View\\Tag' => __DIR__ . '/..' . '/Upadd/Bin/View/Tag.php',
        'Upadd\\Bin\\View\\Templates' => __DIR__ . '/..' . '/Upadd/Bin/View/Templates.php',
        'Upadd\\Frame\\Action' => __DIR__ . '/..' . '/Upadd/Frame/Action.php',
        'Upadd\\Frame\\Check' => __DIR__ . '/..' . '/Upadd/Frame/Check.php',
        'Upadd\\Frame\\Model' => __DIR__ . '/..' . '/Upadd/Frame/Model.php',
        'Upadd\\Frame\\ProcessingSql' => __DIR__ . '/..' . '/Upadd/Frame/ProcessingSql.php',
        'Upadd\\Frame\\Query' => __DIR__ . '/..' . '/Upadd/Frame/Query.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5748b66abe6b6367eae34e451e2ed586::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5748b66abe6b6367eae34e451e2ed586::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5748b66abe6b6367eae34e451e2ed586::$classMap;

        }, null, ClassLoader::class);
    }
}
