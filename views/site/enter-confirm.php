<?php
 use yii\helpers\Html;
?>
<p>输入下列信息:</p>
<ul>
    <li>
        <label>name</label>:
        <?= Html::encode($model->name)?>
    </li>
    <li>
        <label>email</label>:
        <?= Html::encode($model->email)?>
    </li>
</ul>
