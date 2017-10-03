window.onload = function() {
           
    document.getElementById('event01').onclick = function() {        
        loadConten('event01');   
}
    document.getElementById('event02').onclick = function() {        
        loadConten('event02');   
}
    
    function loadConten(data) {
        var client = new XMLHttpRequest();
        
        client.open('GET', '/edeka/templates/edeka/sites/' + data + '.html');        
        client.onreadystatechange = function() {        
            document.getElementById('divMainContent').innerHTML =  client.responseText;
}
        client.send();       
    
    }    
}
 

    



