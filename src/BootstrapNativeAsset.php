<?php
namespace paw\bootstrap4;

use yii\web\AssetBundle;

class BootstrapNativeAsset extends AssetBundle
{
    public $js = [
        ['polyfill.js', 'position' => \yii\web\View::POS_HEAD],
        'bootstrap-native-v4.js',
    ];
    public function init()
    {
        parent::init();
        $this->sourcePath = dirname(__DIR__) . '/dist/bootstrap.native';
    }
}
