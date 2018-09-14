<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdd4022d098026fd945d500cfef523512
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wsystem\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wsystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/wsystem/php-classes/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static $classMap = array (
        'EasyPeasyICS' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/EasyPeasyICS.php',
        'PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
        'PHPMailerOAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauth.php',
        'PHPMailerOAuthGoogle' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauthgoogle.php',
        'POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.pop3.php',
        'SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.smtp.php',
        'ntlm_sasl_client_class' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/ntlm_sasl_client.php',
        'phpmailerException' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdd4022d098026fd945d500cfef523512::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdd4022d098026fd945d500cfef523512::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitdd4022d098026fd945d500cfef523512::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitdd4022d098026fd945d500cfef523512::$classMap;

        }, null, ClassLoader::class);
    }
}
