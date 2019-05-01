<?php
namespace paw\bootstrap4;

use yii\web\AssetBundle;

class BootstrapDatePickerStyleAsset extends AssetBundle
{
    public $minify = null;

    public function init()
    {
        parent::init();
        $this->sourcePath = dirname(__DIR__) . '/static';

        if ($this->minify === null) {
            $this->minify = (bool) !YII_DEBUG;
        }

        $this->css = [
            'css/' . ($this->minify ? 'bootstrap-datetimepicker.min.css' : 'bootstrap-datetimepicker.css'),
        ];
    }
}
