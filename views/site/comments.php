<?php
/**
 * Created by PhpStorm.
 * User: karpov
 * Date: 14.11.2016
 * Time: 12:30
 */
?>
<?php
use yii\widgets\LinkPager;

?>

    <h1> Комментарии</h1>
<b>Ранее вы просматривали профиль <a href="<?= Yii::$app->urlManager->createUrl(['site/user', 'name' => $name]) ?>"><?=$name?>.</b>
    <ul>
        <?php foreach ($comments as $comment) { ?>
            <li>
                <b><a href="<?= Yii::$app->urlManager->createUrl(['site/user', 'name' => $comment->name]) ?>"><?= $comment->name ?></a>:</b> <?= $comment->text ?>
            </li>
        <?php } ?>
    </ul>
<?= LinkPager::widget(['pagination' => $pagination]) ?>