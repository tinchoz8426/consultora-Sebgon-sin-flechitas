<?php
 
/******************************************************************************
* html_form                                                                   *
*                                                                             *
* Version: 1.1                                                                *
* Date:    2011-10-21                                                         *
* Author:  Jose Quintero                                                      *
*******************************************************************************/
class html_form{ 
var $name;
var $class_campo;
var $action;
var $method;
var $enctype;
var $onsubmit;
var $form;
var $input;
var $type;
var $label;
var $value;
var $oForm;
var $cForm;
var $radio;
var $checkbox;
var $select;
var $texto;
var $fieldset;
var $legend;
var $widht;
 
    
    function openform($name='form1', $method='post', $action='#', $enctype='', $onsubmit=''){
        $this->action = $action;
        $this->method = $method;
        $this->name = $name;
        $this->enctype = $enctype;
        $this->onsubmit = $onsubmit;
        
        $this->oform = "<form name='".$this->name."' action='".$this->action."' method='".$this->method."' enctype='".$this->enctype."' onsubmit='".$this->onsubmit." '  autocomplete='off' >";
        return $this->oform;
    }
    
 
    function addInput($class_campo,$type, $name, $label='',$value=''){
        $this->class_campo = $class_campo;
		$this->type = $type;
        $this->name = $name;
        $this->label= $label;
        $this->value = $value;
 
        if($this->type == "submit" || $this->type=="reset"){
            $this->input = "<label></label>";
        }
        else{
            $this->input= "<label>".$this->label."</label><br>";
        }
        
        $this->input .= "<div class='form-group'><input type='".$this->type."' name='".$this->name."' value='".$this->value."' id='".$this->name."' class='".$this->class_campo."' /> </div>";
        
        return $this->input;
    }
    
    
    function addcheckradio($type,$name,$values,$selected=0){
    
        unset($this->radio);
        
        $this->value = $values;
        $this->selected = $selected;
        $this->type = $type;
        
        if ($this->type=="checkbox"){
            $this->name = $name."[]";
        }
        else{
            $this->name = $name;
        }
        
        $c=1;   
        while(list($val,$l)=each($this->value)){    
            if ($c==$this->selected){
                $this->check = " checked/>";
            }
            else{
                $this->check = " />";
            }
            
            $this->radio .=  "<label>".$this->value[$val]."</label><input type='".$this->type."' name='".$this->name."' value='".$val."'".$this->check."<br>";
            $c++;
        }
        return  $this->radio;
    }
    
    function addTextarea($name, $cols=20, $rows=5, $label='',$value=''){
        $this->name=$name;
        $this->row= $rows;
        $this->col= $cols;
        $this->value = $value;
        $this->label = $label;
        
        $this->textarea = "<label>".$this->label."</label><br><textarea name='".$this->name."' cols='".$this->col."' rows='".$this->row."'>".$this->value."</textarea>";
        return $this->textarea;
    }
 
    function addSelect($name, $values, $label='', $multiple=0){
        
        $this->values=$values;
        $this->name=$name;
        $this->label=$label;
        
        if($multiple==1){
            $this->select = "<label>".$this->label."</label><br><select name='".$this->name."[]' multiple='multiple'>";
        }
        else{
            $this->select = "<label>".$this->label."</label><br><select name='".$this->name."'>";
        }
        
        while(list($values, $text)=each($this->values))
        {       
            $this->select .= "<option value='".$values."'>".$this->values[$values]."</option>";
        }
            $this->select  .= "</select>";
 
        return $this->select;
    }
    
    
    
    function openfieldset($texto,$width='300'){
        $this->legend=$texto;
        $this->width=$width;
        
        $this->fieldset="<fieldset style='width:".$this->width."px;'><legend>".$this->legend."</legend>";
        //return $this->fieldset;
    }
    
    function closefieldset(){
        
        $this->fieldset="</fieldset>";
        return $this->fieldset;
    }
    
    function closeform(){
        $this->cform = "</form>";
        return $this->cform;
    }
}
?>