<?php


/** @var $this \yii\web\View */
/** @var $model \common\models\Comment */

?>

<div class="d-flex">
    <div class="comment-wrapper">

        <?php echo $this->render('_comment_item', [
            'model' => $model
        ]) ?>

    </div>
    <div class="video-wrapper">
        <?php echo $this->render('@backend/views/video/_video_item', [
            'model' => $model->video
        ]) ?>
    </div>
</div>




