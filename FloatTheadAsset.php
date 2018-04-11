<?php
/**
 * @link      https://github.com/bluezed/yii2-floatThead
 * @copyright Copyright (c) 2015 Thomas Geppert
 * @license   https://github.com/bluezed/yii2-floatThead/blob/master/LICENSE
 */

namespace bluezed\floatThead;

use yii\web\AssetBundle;

/**
 * Asset bundle for floatThead
 *
 * @author Thomas Geppert <bluezed.apps@gmail.com>
 */
class FloatTheadAsset extends AssetBundle
{
    public $sourcePath = '@bower/floatThead/dist';
    public $js = ['jquery.floatThead.min.js'];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
