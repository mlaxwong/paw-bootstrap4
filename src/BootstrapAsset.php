<?php
namespace paw\bootstrap4;

use yii\web\AssetBundle;

class BootstrapAsset extends AssetBundle
{
    public $css = [
        'css/bootstrap.css',
    ];
    public $depends = [
        \paw\bootstrap4\BootstrapNativeAsset::class,
        \paw\bootstrap4\BootstrapDatePickerStyleAsset::class,
    ];
    public function init()
    {
        parent::init();
        $this->sourcePath = dirname(__DIR__) . '/dist/bootstrap';
    }
}
