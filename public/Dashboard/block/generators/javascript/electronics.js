'use strict';

goog.provide('Blockly.JavaScript.electronics');

goog.require('Blockly.JavaScript');


Blockly.JavaScript['base_delay'] = function(block) {
  return"delay("+(Blockly.Arduino.valueToCode(this,"DELAY_TIME",Blockly.Arduino.ORDER_ATOMIC)||"1000")+");\n";
  
};



Blockly.JavaScript['PinMode'] = function(block) {
  var dropdown_pin = this.getFieldValue('PIN');
  var dropdown_stat = this.getFieldValue('STAT');
  var code = 'pinMode(' + dropdown_pin + ', ' + dropdown_stat + ');\n'
  return code;
};


Blockly.JavaScript['inout_digital_read'] = function(block) {
  var dropdown_pin = this.getFieldValue('PIN');
  var code = 'digitalRead(' + dropdown_pin + ')';
  return [code, Blockly.Arduino.ORDER_ATOMIC];
};



Blockly.JavaScript['inout_digital_write'] = function(block) {
  var dropdown_pin = this.getFieldValue('PIN');
  var dropdown_stat = this.getFieldValue('STAT');
  var code = 'digitalWrite(' + dropdown_pin + ', ' + dropdown_stat + ');\n'
  return code;
};

Blockly.JavaScript['inout_highlow'] = function(block) {
  // Boolean values HIGH and LOW.
  var code = (this.getFieldValue('BOOL') == 'HIGH') ? 'HIGH' : 'LOW';
  return [code, Blockly.Arduino.ORDER_ATOMIC];
};


Blockly.JavaScript['set_led'] = function(block) {
  // Search the text for a substring.
  var row = block.getFieldValue('row_drop') ;
  var col = block.getFieldValue('col_drop') ;
  var colour = block.getFieldValue('colour_drop') ;


  var code ='set(' + row + ',' + col + ',' + colour +');\n'; 
  return code;
};



Blockly.JavaScript['my_delay'] = function(block) {
  // Search the text for a substring.
  var delay = block.getFieldValue('delay') ;
      

  var code ='delay(' + delay +');\n'; 
  return code;
};


Blockly.JavaScript['my_set1_led'] = function(block) {
  // Operations 'and', 'or'.
  var row = block.getFieldValue('r');
  var col = block.getFieldValue('c');
  var color = block.getFieldValue('color');
  var code = "set(" + row + "," + col + "," + color + ");\n"
    return code ;
};




