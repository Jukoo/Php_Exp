/**
 *_____________________________________________________
 *
 *  Support ES6 or ECMASript2015 for current browser 
 * ____________________________________________________
 *
 * see if the current Browser support ES6  stop Executing App 
 * the script run if only Es6 module is Declared  
 

 var isES6_supported  = function () {
    try {
        
        if (new Function("(a = 1)=>a") == undefined ) return true 
        
    }catch( err) {
        
        return  false 
    }
 }
*/

"use strict" 

function isECMAScript_supported (){


    this.isES6_supported = function () {
        try {
            if(new Funtion("(a = 1) => a ")) {return true }
        }catch(err){
            return false
        }
    }
}

// support Form Version  5 

var Current_appVersion = 5 // or higher 

if("userAgent" in navigator) {

    // get current appVersion 
    var currentV_extrate = parseFloat(navigator["appVersion"].substr(0, navigator["appVersion"].indexOf(" ")))
    
    if ( currentV_extrate  >= Current_appVersion) console.log(" your browser is  up to date")
    
    else console.warn("update your browser")
} 
