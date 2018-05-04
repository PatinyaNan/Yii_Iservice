<div class="panel">
  <?php echo $this->beginContent("/config/toorbar",array("current" => 5)); ?>
  <?php echo $this->endContent(); ?>
  <div class="panel_body">
    <?php $form = $this->beginWidget("CActiveForm");?>
    <div>
      <?php echo $form->labelEx($model,"employeee_group"); ?>
      <input type="text" value="<?php echo $model->groups->group_name; ?>" size = "100" disabled />
    </div>
    <div>
      <?php echo $form->labelEx($model,"employeee_sex"); ?>
      <input type="text" value="<?php echo Employee::getSexName($model->employee_sex) ?>" disabled />
    </div>
    <div>
      <?php echo $form->labelEx($model,"employeee_fname"); ?>
      <input type="text" value="<?php echo $model->employee_fname; ?>" disabled />
    </div>
    <div>
      <?php echo $form->labelEx($model,"employeee_lname"); ?>
      <input type="text" value="<?php echo $model->employee_lname; ?>" disabled />
    </div>
    <div>
      <?php echo $form->labelEx($model,"employeee_code"); ?>
      <input type="text" value="<?php echo $model->employee_code; ?>" disabled />
    </div>
    <div>
      <?php echo $form->labelEx($model,"employeee_username"); ?>
      <input type="text" value="<?php echo $model->employee_username; ?>" disabled />
    </div>
    <div>
      <?php echo $form->labelEx($model,"employeee_email"); ?>
      <input type="text" value="<?php echo $model->employee_email; ?>" size = "30" disabled />
    </div>
    <div>
      <?php echo $form->labelEx($model,"employeee_tel"); ?>
      <input type="text" value="<?php echo $model->employee_tel; ?>" disabled />
    </div>
    <?php if(!empty($model->employee_image)): ?>
    <div>
      <?php echo $form->labelEx($model,"employeee_image"); ?>
      <?php  echo CHtml::image("images/member_images/".$model->employee_image);?>
    </div>
  <?php endif ?>
    <?php $this->endWidget(); ?>
  </div>
</div>
