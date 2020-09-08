<?php

/* @var $this yii\web\View */
/* @var $email shop\entities\other\contacts\Email */
/* @var $model shop\forms\manage\other\contacts\EmailForm */

$this->title = 'Изменить почту: ' . $email->email;
$this->params['breadcrumbs'][] = ['label' => 'Почта', 'url' => ['index']];
?>
<div class="brand-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
