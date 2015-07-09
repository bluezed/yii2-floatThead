<?php
/**
 * @link      https://github.com/bluezed/yii2-floatThead
 * @copyright Copyright (c) 2015 Thomas Geppert
 * @license   https://github.com/bluezed/yii2-floatThead/blob/master/LICENSE
 */

namespace bluezed\floatThead;

use yii\helpers\Html;
use yii\helpers\Json;
use yii\base\Widget;

/**
 * The yii2-floatThead is a Yii 2 wrapper for the jquery.floatThead
 * See more: http://mkoryak.github.io/floatThead/
 *
 * @author Thomas Geppert <bluezed.apps@gmail.com>
 */
class FloatTheadWidget extends Widget
{
	/**
	 * @var string
	 */
	public $tableId;
	
    /**
     * @var array
     */
    public $options = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->registerAssets();
    }

    /**
     * Registers the needed assets
     */
    public function registerAssets()
    {
        $view = $this->getView();
		FloatTheadAsset::register($view);
        $options = Json::encode($this->options);
		$view->registerJs('$("#'.$this->tableId.'").floatThead(' .$options .');', $view::POS_READY);
    }
}