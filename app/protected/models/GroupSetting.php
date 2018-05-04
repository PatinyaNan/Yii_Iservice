<?php
class GroupSetting extends CActiveRecord{
  public static function model($className = __CLASS__){
    return parent::model($className);
  }
  public function tableName(){
    return "groups";
  }
  public function attributes(){
    return array(
      "group_name" => "ชื่อแผนก",
      "group_id" => "รหัส"
    );
  }
  public function search(){
    $criteria = new CDbCriteria;
    return new CActiveDataProvider($this,array(
              'criteria' => $criteria,
    ));
  }
  public static function getOptions(){
    $model = GroupSetting::model()->findAll();
    $arr = array();

    foreach ($model as $r){
      $arr[$r->id] = $r->group_name;
    }
    return $arr;
  }
}
?>
