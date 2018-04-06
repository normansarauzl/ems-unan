<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TipoPersona */

$this->title = Yii::t('app', 'Create Tipo Persona');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tipo Personas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-persona-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>