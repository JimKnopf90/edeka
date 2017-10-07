window.onload = function() {
    
    $("#divContent1").on("click", function() {
        $(".triggerC1").toggleClass("clicked");
        if(document.getElementById('frontContent1').style.display !='none') {           
            document.getElementById('frontContent1').style.display = 'none';
            document.getElementById('backContent1').style.display = 'unset';
            $("#backContent1").css({'transform': 'scaleX(-1)'});           
           } else {
               document.getElementById('frontContent1').style.display = 'unset';
               document.getElementById('backContent1').style.display = 'none';          
           }
        
    });
    
    $("#divContent2").on("click", function() {
        $(".triggerC2").toggleClass("clicked");
       if(document.getElementById('frontContent2').style.display !='none') {           
            document.getElementById('frontContent2').style.display = 'none';
            document.getElementById('backContent2').style.display = 'unset';
            $("#backContent2").css({'transform': 'scaleX(-1)'});           
           } else {
               document.getElementById('frontContent2').style.display = 'unset';
               document.getElementById('backContent2').style.display = 'none';          
           }
    });
    
    $("#divContent3").on("click", function() {
        $(".triggerC3").toggleClass("clicked");
        if(document.getElementById('frontContent3').style.display !='none') {           
            document.getElementById('frontContent3').style.display = 'none';
            document.getElementById('backContent3').style.display = 'unset';
            $("#backContent3").css({'transform': 'scaleX(-1)'});           
           } else {
               document.getElementById('frontContent3').style.display = 'unset';
               document.getElementById('backContent3').style.display = 'none';          
           }
    });
    
    $("#divContent4").on("click", function() {
        $(".triggerC4").toggleClass("clicked");
       if(document.getElementById('frontContent4').style.display !='none') {           
            document.getElementById('frontContent4').style.display = 'none';
            document.getElementById('backContent4').style.display = 'unset';
            $("#backContent4").css({'transform': 'scaleX(-1)'});           
           } else {
               document.getElementById('frontContent4').style.display = 'unset';
               document.getElementById('backContent4').style.display = 'none';          
           }
    });
    
    
    
}


                    