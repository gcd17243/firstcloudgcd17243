<html>
 <head>
  <title>a1</title>
 </head>
 <body>
 <?php echo '<p>Hello World </p>'; 
    putenv("DATABASE_URL=fred");
    echo getenv("DATABASE_URL")
 ?> 
     
 </body>
</html>