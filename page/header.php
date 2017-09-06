<?php echo "<!DOCTYPE html>
<html>
     <head>
        <title>index du site</title>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
       <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
       <style>
       body{
           margin: 0;
           padding:0;
             }
           
             header 
             {
                margin:0;
           background-color: #9A5315;
        color: #ffffff;  

             }
           .jumbotron
           {
          margin:0;
          background-color: #9A5315;
        color: #ffffff;  
           }
           
           nav.affix
           {
               top:0;
               width: 100%;
               z-index: 9999;
               
           }
           
           .affix + section
           {
               padding-top: 70px;
               
           }
           
         
         
         #tchat{
                    position: fixed;
                    bottom: 0;
                    right: 20px;
                   
                    height: 45%;
                    max-width: 20%;
                    background-color: #FFFBCC;
                    color: #036635;
                    
                }
         
         
         #tchat.affix
           {
          position: fixed;
               bottom: 0;
               right: 20px;
               height: 45%;
            max-width: 20%;
               z-index: 9999;
               
           }
  
           footer.jumbotron 
           {
               text-align:center;
               background-color:#DE6A1C;
               color: #FFFBCC;
           }
           
       </style>
</html>
<body data-spy= 'scroll' data-target='.navbar' data-offset='50'>

     <header>
    
        <div class='container'>
        
        <div class='jumbotron'>
        <hr>
        <h1>
        Le site d'un jeune entrepreneur.
        </h1>
        <p>Il faut un obstacle nouveau pour un savoir nouveau. <i>Henri Michaux</i></p>
        </div>
        
        </div>
       
        </header>
        ";
?>