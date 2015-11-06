<?php
/* @var $this PersonaController */
/* @var $model Persona */

$this->breadcrumbs=array(
	'Personas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Persona', 'url'=>array('index')),
	array('label'=>'Gestionar Persona', 'url'=>array('admin')),
);
?>

<h1>Crear Persona</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>