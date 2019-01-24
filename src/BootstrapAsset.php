<?php
namespace paw\bootstrap4;

use yii\web\AssetBundle;

class BootstrapAsset extends AssetBundle
{
    public $sourcePath = '@npm/bootstrap/dist';
    public $css = [
        'css/bootstrap.css',
    ];
}