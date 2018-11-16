<?php

use yii\helpers\Html;

foreach($otherLang as $lng) {
    switch($lng) {
        case 'uz':
            $language = 'O\'zbek tili';
            $flag = 'uz.png';
            break;
        case 'ru':
            $language = 'Русский язык';
            $flag = 'ru.png';
            break;
        default:
            $language = 'Русский язык';
            $flag = 'ru.png';
            break;
    }
}

$curUrl = str_replace('/'.$curLang, '/'.$lng, $curRoute);
?>
<a href="<?=$curUrl?>" id="chLng" data-toggle="tooltip" data-placement="bottom" class="my-tooltip" style="margin-right: 20px" title="<?=$language?>"><?=Html::img('/web/img/icons/'.$flag); ?></a>