<?php

/*
 * Yii2 Asset Pnotify
 *
 * @link      https://github.com/hiqdev/yii2-asset-pnotify
 * @package   yii2-asset-pnotify
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (https://hiqdev.com/)
 */

namespace hiqdev\assets\pnotify;

/**
 * Yii2 asset bundle for PNotify JS plugin.
 *
 * @url https://github.com/sciactive/pnotify
 */
class PNotifyAsset extends \yii\web\AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@bower/pnotify/src';

    /**
     * {@inheritdoc}
     */
    public $css = [
        'pnotify.core.css',
        'pnotify.buttons.css',
    ];

    /**
     * {@inheritdoc}
     */
    public $js = [
        'pnotify.core.js',
        'pnotify.buttons.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
