let bodyComponent = document.body.style ; 
function setPreference() { 

  let getprefrence = document.querySelectorAll("input[type ='radio'") ;
  console.log(getprefrence) 
   for (var i = 0; i < getprefrence.length; i++) {
         let pref =getprefrence[i]
    pref.addEventListener('change' ,function(ev){ 
       if (pref.checked) { 
        localStorage['prefernce'] = this.value; 
        bodyComponent.backgroundColor= localStorage['prefernce']; 
       }    

       if (localStorage['prefernce'] == '#343a40') { 
          localStorage['font_Color'] = "#868e96" ; 

       }else  if (localStorage['prefernce'] == "whitesmoke" ) { 
            localStorage['font_Color'] = "#343a40";
       }
    
     })

    

   }
}
setPreference();

(function (){

 if (localStorage['prefernce'] && localStorage['font_Color'])  { 

     bodyComponent.backgroundColor = localStorage['prefernce'] ; 
     bodyComponent.color = localStorage['font_Color']

     }


})()