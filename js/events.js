window.onload = function() {
           
    document.getElementById('event01').onclick = function() { 
        document.getElementById("event01").style.backgroundColor = "lightblue";
        document.getElementById("event02").style.backgroundColor = "#ecf0f1";
        loadConten('event01');   
}
    document.getElementById('event02').onclick = function() {   
        document.getElementById("event01").style.backgroundColor = "#ecf0f1";
        document.getElementById("event02").style.backgroundColor = "lightblue";
        loadConten('event02');   
}
    
    function loadConten(data) {
        var client = new XMLHttpRequest();
        
        client.open('GET', '/templates/edeka/sites/' + data + '.html');        
        client.onreadystatechange = function() {        
            document.getElementById('divMainContent').innerHTML =  client.responseText;
}
        client.send();       
    
    } 
    loadConten('event01');
    document.getElementById("event01").style.backgroundColor = "lightblue";
}
 

    



