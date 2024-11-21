<?php

namespace app\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];

    public $js = [
        'js/scripts.js',];
        
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
