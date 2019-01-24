<?php
namespace paw\bootstrap4;

use yii\web\AssetBundle;

class BootstrapNativeAsset extends AssetBundle
{
    public $sourcePath = '@npm/bootstrap.native/dist';
    public $js = [
        ['polyfill.js', 'position' => \yii\web\View::POS_HEAD],
        'bootstrap-native-v4.js',
    ];
    public $depends = [
        \paw\bootstrap4\BootstrapNativeAsset::class,
    ];
}