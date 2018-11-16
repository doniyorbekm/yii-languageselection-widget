<?php

namespace app\components;

use Yii;
use yii\base\Widget;

class langSelector extends Widget {

    public function run() {
        $curRoute = Yii::$app->request->absoluteUrl;
        $curLang = Yii::$app->language;
        $otherLang = [];
        foreach(Yii::$app->urlManager->languages as $lng) {
            if($lng !== $curLang) {
                array_push($otherLang, $lng);
            }
        }
        return $this->render('langSelector', compact('curLang', 'otherLang', 'curRoute'));
    }
}