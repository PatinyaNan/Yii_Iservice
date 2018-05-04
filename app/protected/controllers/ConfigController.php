<?php
  class ConfigController extends Controller{
    public function actionIndex(){
      $this->render("index");
    }
    public function actionRepairType(){
      $model = new RepairType();

      $this->render("RepairType",array(
        "model" => $model
      ));
    }
    public function actionRepairTypeForm($id = null){
      if(!empty($_POST["RepairType"])){
        $repairType = new RepairType();
        $id = $_POST["RepairType"]["id"];

          if(!empty($id)){
            $repairType = RepairType::model()->findByPk($id);
          }
          $repairType->_attributes = $_POST["RepairType"];

          if($repairType->save()){
            $this->redirect(array("RepairType"));
              }
          }
            $model = new RepairType();

            if(!empty($id)){
              $model = RepairType::model()->findByPk($id);
            }
              $this->render("RepairTypeForm",array(
                "model" => $model
              ));
            }
    public function actionRepairTypeDelete($id){
      RepairType::model()->deleteByPk($id);
      $this->redirect(array("RepairType"));
    }
    public function actionProjectType(){
      $model = new ProjectType();
      $this->render("ProjectType",array(
        "model" => $model
      ));
    }
    public function actionProjectTypeForm($id = null){
      if(!empty($_POST["ProjectType"])){
        $projectType = new ProjectType();
        $id = $_POST["ProjectType"]["id"];

          if(!empty($id)){
            $projectType = ProjectType::model()->findByPk($id);
          }
          $projectType->_attributes = $_POST["ProjectType"];

          if($projectType->save()){
            $this->redirect(array("ProjectType"));
              }
          }
            $model = new ProjectType();

            if(!empty($id)){
              $model = ProjectType::model()->findByPk($id);
            }
              $this->render("ProjectTypeForm",array(
                "model" => $model
              ));
    }
    public function actionProjectTypeDelete($id){
      ProjectType::model()->deleteByPk($id);
      $this->redirect(array("ProjectType"));
    }
    public function actionDeviceType(){
      $model = new DeviceType();
      $this->render("DeviceType",array(
        "model" => $model
      ));
    }
    public function actionDeviceTypeForm($id = null){
      if(!empty($_POST["DeviceType"])){
        $deviceType = new DeviceType();
        $id = $_POST["DeviceType"]["id"];

          if(!empty($id)){
            $deviceType = DeviceType::model()->findByPk($id);
          }
          $deviceType->_attributes = $_POST["DeviceType"];

          if($deviceType->save()){
            $this->redirect(array("DeviceType"));
              }
          }
            $model = new DeviceType();

            if(!empty($id)){
              $model = DeviceType::model()->findByPk($id);
            }
              $this->render("DeviceTypeForm",array(
                "model" => $model
              ));
    }
    public function actionDeviceTypeDelete($id){
      DeviceType::model()->deleteByPk($id);
      $this->redirect(array("DeviceType"));
    }
    public function actionGroupSetting(){
      $model = new GroupSetting();
      $this->render("GroupSetting",array(
        "model" => $model
      ));
    }
    public function actionGroupSettingForm($id = null){
      if(!empty($_POST["GroupSetting"])){
        $deviceType = new GroupSetting();
        $id = $_POST["GroupSetting"]["id"];

          if(!empty($id)){
            $deviceType = GroupSetting::model()->findByPk($id);
          }
          $deviceType->_attributes = $_POST["GroupSetting"];

          if($deviceType->save()){
            $this->redirect(array("GroupSetting"));
              }
          }
            $model = new GroupSetting();

            if(!empty($id)){
              $model = GroupSetting::model()->findByPk($id);
            }
              $this->render("GroupSettingForm",array(
                "model" => $model
              ));
    }
    public function actionGroupSettingDelete($id){
      GroupSetting::model()->deleteByPk($id);
      $this->redirect(array("GroupSetting"));
    }
    public function actionEmployee(){
      $model = new Employee();
      $this->render("Employee",array(
        "model" => $model
      ));
    }
    public function actionEmployeeDelete($id){
      Employee::model()->deleteByPk($id);
      $this->redirect(array("Employee"));
    }
    public function actionEmployeeView($id){
      $model = Employee::model()->findByPk($id);
      $this->render("EmployeeView",array(
        "model" => $model
      ));
    }
  }
 ?>
