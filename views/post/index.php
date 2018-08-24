<?php if(!empty($posts)):?>
    <?php foreach ($posts as $post):?>
        <div class="panel panel-default">
            <h3 class="panel-title"><a href="<?php echo yii\helpers\Url::to(['post/view', 'id' => $post->id])?>"><?php echo $post->title?></a></h3>
        </div>
        <div class="panel-body">
            <?php echo $post->text?>
        </div>
    <?php endforeach;?>

<?php endif;?>
<?php echo \yii\widgets\LinkPager::widget(['pagination' => $pages])?>
