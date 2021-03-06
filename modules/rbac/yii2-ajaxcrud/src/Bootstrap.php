<?php

namespace johnitvn\ajaxcrud;

use Yii;
use yii\base\Application;
use yii\base\BootstrapInterface;

/**
 * @author Nurbek Nurjanov nurbek.nurjanov@mail.ru
 * @link http://sakuracommerce.com/
 * @copyright Copyright (c) 2016 Sakuracommerce
 * @license http://sakuracommerce.com/license/
 * @since 1.0
 */
class Bootstrap implements BootstrapInterface {

    /**
     * Bootstrap method to be called during application bootstrap stage.
     *
     * @param Application $app the application currently running
     */
    public function bootstrap($app) {
        Yii::setAlias("@ajaxcrud", __DIR__);
        Yii::setAlias("@johnitvn/ajaxcrud", __DIR__);
        if ($app->hasModule('gii')) {
            if (!isset($app->getModule('gii')->generators['ajaxcrud'])) {
                $app->getModule('gii')->generators['ajaxcrud'] = 'johnitvn\ajaxcrud\generators\Generator';
            }
        }
    }

}
