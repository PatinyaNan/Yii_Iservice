<div class="panel">
  <?php echo $this->beginContent("/config/toorbar",array("current" => 1)); ?>
  <?php echo $this->endContent(); ?>
  <div class="panel_body">
    <a href="<?php echo $this->createUrl("config/GroupSettingForm");?>">
      <div><?php echo CHtml::image("images/edit_add.png"); ?></div>
    </a>

  <?php
    $this->widget('zii.widgets.grid.CGridView',array(
      'id' => 'repair-type-grid',
      'dataProvider' => $model->search(),
      'columns' => array(
        array(
          'name' => 'group_name',
          'htmlOptions' => array(
            'width' => '1030px'
          )
        ),
        array(
          'header' => 'edit',
          'class' => 'CLinkColumn',
          'imageUrl' => 'images/edit.png',
          'urlExpression' => 'Yii::app()->createUrl("Config/GroupSettingForm",array("id" => $data->id))',
          'htmlOptions' => array(
            'width' => '35px',
            'align' => 'center'
          )
        ),
        array(
          'header' => 'delete',
          'class' => 'CLinkColumn',
          'imageUrl' => 'images/delete.png',
          'urlExpression' => 'Yii::app()->createUrl("Config/GroupSettingDelete",array("id" => $data->id))',
          'htmlOptions' => array(
            'width' => '35px',
            'align' => 'center',
            'onclick' => 'return confirm("ยืนยันการลบรายการ")'
          )
        )
      ),
    ));
   ?>
   </div>
</div>
