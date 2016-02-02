'use strict';

goog.provide('Blockly.Blocks.electronics');

goog.require('Blockly.Blocks');

Blockly.Blocks.variables.HUE = 65;




Blockly.Blocks['set_led'] = {
  init: function() {
    this.appendDummyInput()
        .appendField(new Blockly.FieldDropdown([["1", "row1"], ["2", "row2"], ["3", "row3"], ["4", "row4"], ["5", "row5"], ["6", "row6"], ["7", "row7"], ["8", "row8"]]), "row_drop")
        .appendField(new Blockly.FieldDropdown(["1", "col1"], ["2", "col2"], ["3", "col3"], ["4", "col4"], ["5", "col5"], ["6", "col6"], ["7", "col7"], ["8", "col8"]]), "col_drop")
        .appendField(new Blockly.FieldDropdown([["RED", "col1"], ["GREEN", "col2"], ["BLUE", "col3"]]), "col_drop")
        .appendField(new Blockly.FieldImage("http://www.clipartsfree.net/svg/5504-led-lamp-download.svg", 40, 40, "*"));
    this.setInputsInline(true);
    this.setColour(65);
  }
};

