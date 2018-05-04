<div class="panel">
  <?php echo $this->beginContent("/config/toorbar",array("current" => 1)); ?>
  <?php echo $this->endContent(); ?>

  <div class="panel_body">
    <fieldset>
      <legend>ข้อมูลแผนก</legend>
      <?php
      $form = $this->beginWidget('CActiveForm',array(
        'id' => 'GroupSetting-form',
        'enableAjaxValidation' => false
      ));
       ?>
       <div>
          <?php echo $form->labelEx($model,"group_name"); ?>
          <?php echo $form->textField($model,"group_name",array("size" => 50)); ?>
          <?php echo $form->error($model,"group_name"); ?>
       </div>
       <div>
          <?php echo $form->labelEx($model,"group_id"); ?>
          <?php echo $form->textField($model,"group_id",array("size" => 50)); ?>
          <?php echo $form->error($model,"group_id"); ?>
       </div>
       <div>
         <label></label>
         <?php echo CHtml::submitButton("บันทึก"); ?>
       </div>
       <?php echo $form->hiddenField($model,"id"); ?>
       <?php $this->endWidget(); ?>
    </fieldset>
  </div>
</div>
