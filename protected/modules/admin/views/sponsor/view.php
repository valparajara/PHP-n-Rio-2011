<?php
$this->breadcrumbs=array(
	'Patrocinadores'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Novo Patrocinador', 'url'=>array('create')),
	array('label'=>'Alterar Patrocinador', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Apagar Patrocinador', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Listar Patrocinadores', 'url'=>array('index')),
);
?>

<h1>Visualizar Patrocinador #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		array('name' => 'Foto', 'type' => 'image', 'value' => $model->getImageUrl("imageFile")),
	),
)); ?>
