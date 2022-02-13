<?php
class formulario_{ 
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
var $abre_box;
var $cierra_box;
var $box_formulario;
var $close_box_formulario;
var $legend;
var $widht;
 
    
    function openform($name='form1', $method='post', $action='#', $enctype='', $onsubmit=''){
        $this->action = $action;
        $this->method = $method;
        $this->name = $name;
        $this->enctype = $enctype;
        $this->onsubmit = $onsubmit;
        
        $this->oform = "<form class='form-horizontal row-border' name='".$this->name."' action='".$this->action."' method='".$this->method."' enctype='".$this->enctype."' onsubmit='".$this->onsubmit." '  autocomplete='off' >";
        return $this->oform;
    }
    
 
    function addInput($class_campo,$type, $name, $label='',$value='',$celdas,$atributos){
        $this->class_campo = $class_campo;
		$this->type = $type;
        $this->name = $name;
        $this->label= $label;
        $this->value = $value;
		$this->celdas = $celdas;
		$this->atributos = $atributos;
        $this->input ="";       
        if ($type<>"submit")
		{$this->input .= "<div class='".$this->celdas."'><input type='".$this->type."' name='".$this->name."' value='".$this->value."' id='".$this->name."' class='".$this->class_campo."' ".$this->atributos." /> <span class='help-block'>".$this->label."</span></div>";}
        else
		{$this->input .= "<button type='".$this->type."' name='".$this->name."' value='".$this->value."' id='".$this->name."' class='".$this->class_campo."'  /> test </button> ";}
			
        return $this->input;
    }
	
	function addBoton($boton)
	{
        
        $this->input =$boton;       
        //$this->input .= "<button type='".$this->type."' name='".$this->name."' value='".$this->value."' id='".$this->name."' class='".$this->class_campo."'  /> test </button> ";
			
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
 
    function addSelect($name, $values, $label='', $multiple=0,$celdas,$atributos,$cod_defecto,$nombre_defecto){
        
        $this->values=$values;
        $this->name=$name;
        $this->label=$label;
		$this->celdas=$celdas;
		$this->atributos = $atributos;
        
        if($multiple==1){}
        else
		{
            $this->select = "<select name='".$this->name."' class='select2-select-00 col-md-12 full-width-fix' ". $this->atributos."/>" ;
        }
        $this->select .= "<option value='".$cod_defecto."'>".$nombre_defecto."</option>";
        while(list($values, $text)=each($this->values))
        {       
            $this->select .= "<option value='".$values."'>".$this->values[$values]."</option>";
        }
            $this->select  .= "</select>";
			//$this->select  .= "<div class='col-md-4'".$this->select."</div>";
 
        return "<div class='".$this->celdas."'>".$this->select."</div>";
    }
    
    
    function box_formulario($texto,$width)
	
	{
		$this->legend=$texto;
		$this->width=$width;
	$this->abre_box=
	'<div class="add-listing-box mt-0">
	<div class="listing-box-header">
	<h3><i class="far fa-copy"></i> '.$this->legend.'</h3>
							</div> <div class="">' ;
   return $this->abre_box; 	
	
	}
	
	
	function close_box_formulario()
	
	{
   $this->cierra_box='</div></div></div>';
   return  $this->cierra_box ; 	
	
	}
	
	
	function abre_div()
	
	{
   $this->cierra_box='<div class="form-group">';
   return  $this->cierra_box ; 	
	
	}
	
	function cierra_div()
	
	{
   $this->cierra_box='</div>';
   return  $this->cierra_box ; 	
	
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