<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

$coreProperties = $this->context->getCoreProperties();
$this->title 	= $coreProperties->getSiteTitle() . ' | Widget - ' . $model->name;

// Sidebar
$this->params['sidebar-parent'] = 'sidebar-sdebar';
$this->params['sidebar-child'] 	= 'widget';
?>
<section class="wrap-content container clearfix">
	<div class="cud-box">
		<h2>Update Widget Meta</h2>
		<?php $form = ActiveForm::begin( ['id' => 'frm-widget-meta', 'options' => ['class' => 'frm-split' ] ] );?>

		<?= $form->field( $model, 'metaMap[title]')->label( 'Title' ); ?>
    	<?= $form->field( $model, 'metaMap[content]')->label( 'Content' ); ?>

		<div class="box-filler"></div>

		<?=Html::a( "Back", [ '/cmgcms/widget/all' ], ['class' => 'btn' ] );?>
		<input type="submit" value="Update" />

		<?php ActiveForm::end(); ?>
	</div>
</section>