<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $dishes app\models\Dish[] */

$this->title = 'Dishes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dish-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Dish', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Day of Week</th>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($dishes as $dish): ?>
            <tr>
                <td><?= Html::encode($dish->id) ?></td>
                <td><?= Html::encode($dish->day_of_week) ?></td>
                <td><?= Html::encode($dish->title) ?></td>
                <td><?= Html::encode($dish->description) ?></td>
                <td><img src="<?= Html::encode($dish->image) ?>" alt="<?= Html::encode($dish->title) ?>" style="width: 100px;"></td>
                <td>
                    <?= Html::a('View', ['view', 'id' => $dish->id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Update', ['update', 'id' => $dish->id], ['class' => 'btn btn-warning']) ?>
                    <?= Html::a('Delete', ['delete', 'id' => $dish->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</div>
