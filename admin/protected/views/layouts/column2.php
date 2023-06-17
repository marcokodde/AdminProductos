<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span-22">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span-4 last">
	<div id="sidebar">
		<div class="card">
			<?php
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title' => 'Acciones',
			));
			$this->widget('zii.widgets.CMenu', array(
				'items' => $this->menu,
				'htmlOptions' => array('class' => 'operations'),
			));
			$this->endWidget();
			?>
		</div>
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>