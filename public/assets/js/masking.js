//=================================================
// JS scripts
//
// @package malex
// @author  Ash Blue <https://codepen.io/ashblue/pen/LGeqx>
// @version 1 
//=================================================

//=================================================
// Default library
//=================================================
/*!
 * jQuery JavaScript Library v3.5.1
 * https://jquery.com/
 *
 *  
 *
 * Copyright (c) 2022 by Ash Blue (https://codepen.io/ashblue/pen/LGeqxx)
 * Released under the MIT license
 * https://jquery.org/license
 *
 * Date: January 21, 2016
 */
var value;
var $ssn = $('#ssn');
var $ssnVal = $('#ssn-val');

String.prototype.replaceAt=function(index, character) {
    return this.substr(0, index) + character + this.substr(index+character.length);
}

var ssn = {
  init: function () {
    this.bind();
  },
  
  bind: function () {
    $ssn.on('focus', this.syncInput)
      .on('input', this.syncInput)
      .on('change', this.syncInput)
      .on('blur', this.syncInput)
      .on('keydown', this.syncInput)
      .on('keyup', this.syncInput)
      .on('click', this.syncInput);
  },
  
  transformDisplay: function (val) {
    // Strip all non numbers
    var displayVal = val.replace(/[^0-9|\\*]/g, '');
    displayVal = displayVal.substr(0, 9);
    
    // Inject dashes
    if (displayVal.length >= 4) {
      displayVal = displayVal.slice(0, 3) + '-' + displayVal.slice(3);
    }
    
    if (displayVal.length >= 7) {
      displayVal = displayVal.slice(0, 6) + '-' + displayVal.slice(6);
    }
        
    // Replace all numbers with astericks
    displayVal = displayVal.replace(/[0-9]/g, '*');
    
    return displayVal;
  },
  
  transformValue: function (val) {
    if (typeof value !== 'string') {
      value = "";
    }
    
    if (!val) {
      value = null;
      return;
    }
    
    var cleanVal = val.replace(/[^0-9|\\*]/g, '');
    cleanVal = cleanVal.substr(0, 9);

    for (i = 0, l = cleanVal.length; i < l; i++) {
      if (/[0-9]/g.exec(cleanVal[i])) {
        // console.log('replaced', i, cleanVal[i]);
        value = value.replaceAt(i, cleanVal[i]);
      }
    }
    
    value = value.substr(0, cleanVal.length);
  },
  
  syncInput: function () {
    var $input = $(this);
    var val = $(this).val();
    var displayVal = ssn.transformDisplay(val);
    ssn.transformValue(val);
    
    this.setSelectionRange(val.length, val.length);
    
    $input.val(displayVal);
    $ssnVal.val(value);
    
    // console.log('value set', displayVal);
  },
  
  syncValue: function () {
    
  },
};

ssn.init();