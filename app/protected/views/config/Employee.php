<div class="panel">
  <?php echo $this->beginContent("/config/toorbar",array("current" => 5)); ?>
  <?php echo $this->endContent(); ?>
  <div class="panel_body">
      <div><?php echo CHtml::link("+ เพิ่มผู้ใช้งาน" ,array("member/register"),array("class" => "button")); ?></div>
  <?php
    $this->widget('zii.widgets.grid.CGridView',array(
      'id' => 'wmployee-grid',
      'dataProvider' => $model->search(),
      'columns' => array(
        array(
          'name' => 'code',
          'type' => 'html',
          'value' => 'CHtml::link($data->employee_code,array("Config/EmployeeView","id" => $data ->id))',
          'htmlOptions' => array(
            'width' => '1030px'
          )
        ),
        'employee_fname',
        'employee_lname',
        'groups.group_name',
        'employee_level',
        array(
          'header' => 'edit',
          'class' => 'CLinkColumn',
          'imageUrl' => 'images/edit.png',
          'urlExpression' => 'Yii::app()->createUrl("member/register",array("id" => $data->id))',
          'htmlOptions' => array(
            'width' => '35px',
            'align' => 'center'
          )
        ),
        array(
          'header' => 'delete',
          'class' => 'CLinkColumn',
          'imageUrl' => 'images/delete.png',
          'urlExpression' => 'Yii::app()->createUrl("config/EmployeeDelete",array("id" => $data->id))',
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
