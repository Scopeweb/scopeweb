<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3dd0f8d48a81da0a3c9fdc59d11c5654
{
    public static $files = array (
        '52e181473ddd523a649d74860143e341' => __DIR__ . '/..' . '/meenie/javascript-packer/class.JavaScriptPacker.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WyriHaximus\\HtmlCompress\\' => 25,
            'WebSharks\\CssMinifier\\' => 22,
        ),
        'P' => 
        array (
            'Patchwork\\' => 10,
        ),
        'M' => 
        array (
            'MatthiasMullie\\PathConverter\\' => 29,
            'MatthiasMullie\\Minify\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WyriHaximus\\HtmlCompress\\' => 
        array (
            0 => __DIR__ . '/..' . '/wyrihaximus/html-compress/src',
        ),
        'WebSharks\\CssMinifier\\' => 
        array (
            0 => __DIR__ . '/..' . '/websharks/css-minifier/src/includes/classes',
        ),
        'Patchwork\\' => 
        array (
            0 => __DIR__ . '/..' . '/patchwork/jsqueeze/src',
        ),
        'MatthiasMullie\\PathConverter\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/path-converter/src',
        ),
        'MatthiasMullie\\Minify\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/minify/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'Y' => 
        array (
            'YUI' => 
            array (
                0 => __DIR__ . '/..' . '/jalle19/php-yui-compressor/lib',
            ),
        ),
        'J' => 
        array (
            'JShrink' => 
            array (
                0 => __DIR__ . '/..' . '/tedivm/jshrink/src',
            ),
        ),
    );

    public static $classMap = array (
        'CssAtCharsetParserPlugin' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssAtCharsetToken' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssAtFontFaceDeclarationToken' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssAtFontFaceEndToken' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssAtFontFaceParserPlugin' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssAtFontFaceStartToken' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssAtImportParserPlugin' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssAtImportToken' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssAtKeyframesEndToken' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssAtKeyframesParserPlugin' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssAtKeyframesRulesetDeclarationToken' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssAtKeyframesRulesetEndToken' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssAtKeyframesRulesetStartToken' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssAtKeyframesStartToken' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssAtMediaEndToken' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssAtMediaParserPlugin' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssAtMediaStartToken' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssAtPageDeclarationToken' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssAtPageEndToken' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssAtPageParserPlugin' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssAtPageStartToken' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssAtVariablesDeclarationToken' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssAtVariablesEndToken' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssAtVariablesParserPlugin' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssAtVariablesStartToken' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssCommentParserPlugin' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssCommentToken' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssCompressColorValuesMinifierPlugin' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssCompressExpressionValuesMinifierPlugin' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssCompressUnitValuesMinifierPlugin' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssConvertFontWeightMinifierPlugin' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssConvertHslColorsMinifierPlugin' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssConvertLevel3AtKeyframesMinifierFilter' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssConvertLevel3PropertiesMinifierFilter' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssConvertNamedColorsMinifierPlugin' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssConvertRgbColorsMinifierPlugin' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssError' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssExpressionParserPlugin' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssImportImportsMinifierFilter' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssMin' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssMinifier' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssNullToken' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssOtbsFormatter' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssParser' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssRemoveCommentsMinifierFilter' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssRemoveEmptyAtBlocksMinifierFilter' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssRemoveEmptyRulesetsMinifierFilter' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssRemoveLastDelarationSemiColonMinifierFilter' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssRulesetDeclarationToken' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssRulesetEndToken' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssRulesetParserPlugin' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssRulesetStartToken' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssSortRulesetPropertiesMinifierFilter' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssStringParserPlugin' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssUrlParserPlugin' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssVariablesMinifierFilter' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssVariablesMinifierPlugin' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'CssWhitesmithsFormatter' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'JSMin' => __DIR__ . '/..' . '/linkorb/jsmin-php/src/jsmin-1.1.1.php',
        'JSMinException' => __DIR__ . '/..' . '/linkorb/jsmin-php/src/jsmin-1.1.1.php',
        'aCssAtBlockEndToken' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'aCssAtBlockStartToken' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'aCssDeclarationToken' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'aCssFormatter' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'aCssMinifierFilter' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'aCssMinifierPlugin' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'aCssParserPlugin' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'aCssRulesetEndToken' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'aCssRulesetStartToken' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
        'aCssToken' => __DIR__ . '/..' . '/natxet/CssMin/src/CssMin.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3dd0f8d48a81da0a3c9fdc59d11c5654::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3dd0f8d48a81da0a3c9fdc59d11c5654::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit3dd0f8d48a81da0a3c9fdc59d11c5654::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit3dd0f8d48a81da0a3c9fdc59d11c5654::$classMap;

        }, null, ClassLoader::class);
    }
}
