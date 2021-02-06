
@@ -1,16 +1,13 @@
<?php 
  
 
$user = 'root'; 
$password = '';  
$dbhost = 'localhost';


// Database name is gfg 
$database = 'books_db';  

// Server is localhost with 
// port number 3308 
$servername='localhost'; 
$mysqli = new mysqli($servername, $user,  
                $password, $database); 
@@ -100,4 +97,4 @@
    </section> 
</body> 

</html>  
</html> 
