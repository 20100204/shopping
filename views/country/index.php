<?php
 use yii\helpers\Html;
 use yii\widgets\LinkPager;
use kartik\date\DatePicker;
use app\components\HelloWidget;
?>
<h1> countries</h1>
<ul>
    <?php foreach($countries as $country): ?>
        <li>
            <?= Html::encode("{$country->name}({$country->code})") ?>:
            <?= $country->population ?>
        </li>
    <?php endforeach;?>
</ul>
<?= LinkPager::widget(['pagination'=>$page])?>
<?php HelloWidget::begin()?>
这个中间是输出
<?php HelloWidget::end()?>

<?Php
use kartik\datetime\DateTimePicker;


echo '<label>Start Date/Time</label>';
echo DateTimePicker::widget([
    'name' => 'datetime_10',
    'language'=>'zh-CN',
    'options' => ['placeholder' => 'Select operating time ...'],
    'convertFormat' => true,
    'pluginOptions' => [
        'format' => 'yyyy-mm-dd h:i:s',
        'startDate' => '01-Mar-2014 12:00 AM',
        'todayHighlight' => true
    ]
]);
?>
