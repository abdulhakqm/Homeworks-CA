<?php
class Select{
    //Property
    //Create String variable $name.
    //Create Array variable $value.
    public $name = "";
    public $value = [];
   
    //Methods
    // create methods getName() and  setName($name)
    //The string set by this method will be the name of the select field.

    public function setName($name){
      $this->name=$name;
    }
    public function getName(){
      return $this->name;
    }

   
    //Create method setVallue($value)
    //This methods provides the values used for the options
    //in the select field and checks to be sure the value is an array. 

    public function setValue($value){
      if(is_array($value)){
        foreach ($value as $key => $brow){
          $this->value[]=$brow;
        }
      }
    }


    //Create method getValue()
   
    public function getValue(){
      return $this->value;
    }
    // Create method makeOptions($value)
    //This method creates the actual select options. It is private, 
    //since there is no need for it outside the operations of the class.
    
    private function makeOptions($values){
      foreach ($values as $key)
      echo "<option value='".$key."'>".$key."</option>";
    }



    // Create method makeSelect()
    //This method puts it all together to create the select field.

    public function makeSelect(){
     
      echo "<select name='".$this->getName()."'>";
      echo "<option value='choose'></option>";
      $this->makeOptions($this->getValue());
      echo "</select>";
    }

    

  } 


  $browsers = ['Firefox', 'Chrome', 'Internet Explorer', 'Safari', 'Opera', 'Other'];


  $newObj = new Select();
  $newObj->setName('selector');
  $newObj->setValue($browsers);


  ?>

 

  

 

  
  
  
  