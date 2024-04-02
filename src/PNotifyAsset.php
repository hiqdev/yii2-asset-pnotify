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

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

/**
 * Yii2 asset bundle for PNotify JS plugin.
 *
 * @url https://github.com/sciactive/pnotify
 */
class PNotifyAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@bower/pnotify/src';

    /**
     * {@inheritdoc}
     */
    public $css = YII_DEBUG ? [
        'pnotify.core.css',
        'pnotify.buttons.css',
    ] : [
        'pnotify.core.min.css',
        'pnotify.buttons.min.css',
    ];

    /**
     * {@inheritdoc}
     */
    public $js = YII_DEBUG ? [
        'pnotify.core.js',
        'pnotify.buttons.js',
    ] : [
        'pnotify.core.min.js',
        'pnotify.buttons.min.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        JqueryAsset::class,
    ];
}
