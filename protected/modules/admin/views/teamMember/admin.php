<?php
$this->breadcrumbs=array(
	'Membros'=>array('index'),
	'Listar',
);

$this->menu=array(
	array('label'=>'Novo Membro', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('team-member-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Listar Membros</h1>

<p>
Você pode opcionalmente inserir um operador de comparação (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b> or <b>=</b>) no começo de cada um dos campos de busca para especificar como a comparação deve ser feita.
</p>

<?php echo CHtml::link('Busca Avançada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'team-member-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		array('header' => 'Foto', 'type' => 'image', 'value' => '$data->getImageUrl("imageFile",true)'),
		'name',
		'description',
		array('header' => 'Twitter', 'type' => 'url', 'value' => '$data->twitterLink'),
		array('header' => 'Portifólio', 'type' => 'url', 'value' => '$data->portifolio'),
		array('class'=>'CButtonColumn'),
	),
)); ?>
