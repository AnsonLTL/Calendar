<!DOCTYPE html>
<html>
   <head> </head>
   <body>
      <p id="try">Change this text.</p>
      <button id="but" type="button">Change Content</button>


   <script>
      document.getElementById("but").onclick = function(){loadDoc("yo");};
      function loadDoc(button) {
         //alert("bye");
         var xhttp;
         if (window.XMLHttpRequest) {
            xhttp = new XMLHttpRequest();
         } else {
            xhttp = new ActiveXObject("Microsoft.XMLHTTP");
         }

         xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
               document.getElementById("try").innerHTML = xhttp.responseText;
            }
         };

         xhttp.open("POST", "test2.php", true);
         xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xhttp.send("name=ABC"+button);
      }
   </script>
   </body>
</html>

