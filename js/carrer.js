window.onload = function() {
    
     document.getElementById('listItem1').onclick = function() {  
         document.getElementById("listItem1").style.backgroundColor = "lightblue"
         document.getElementById("listItem2").style.backgroundColor = "#f2f2f2"
         document.getElementById("listItem3").style.backgroundColor = "white"
         document.getElementById("listItem4").style.backgroundColor = "#f2f2f2"
         
     }
     
     document.getElementById('listItem2').onclick = function() {        
        document.getElementById("listItem1").style.backgroundColor = "white"
         document.getElementById("listItem2").style.backgroundColor = "lightblue"
         document.getElementById("listItem3").style.backgroundColor = "white"
         document.getElementById("listItem4").style.backgroundColor = "#f2f2f2"
     }
     
     document.getElementById('listItem3').onclick = function() {        
         document.getElementById("listItem1").style.backgroundColor = "white"
         document.getElementById("listItem2").style.backgroundColor = "#f2f2f2"
         document.getElementById("listItem3").style.backgroundColor = "lightblue"
         document.getElementById("listItem4").style.backgroundColor = "#f2f2f2"
     }
     
     document.getElementById('listItem4').onclick = function() {        
         document.getElementById("listItem1").style.backgroundColor = "white"
         document.getElementById("listItem2").style.backgroundColor = "#f2f2f2"
         document.getElementById("listItem3").style.backgroundColor = "white"
         document.getElementById("listItem4").style.backgroundColor = "lightblue"
     }
         
    
    
}