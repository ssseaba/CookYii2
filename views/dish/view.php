<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Dish */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Dishes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dish-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'day_of_week',
            'title',
            'description:ntext',
            [
                'attribute' => 'image',
                'value' => Yii::getAlias('@web') . '/' . $model->image,
                'format' => ['image', ['width' => '100']],
            ],
            'created_at',
        ],
    ]) ?>

</div>
