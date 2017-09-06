
        <style>
       .carousel-inner > .item  > img,
       .carousel-inner > .item > a > img
       {
           width: 70%;
           margin: auto;
       }
   </style>
   
        <?php 
        include("page/header.php");
        include("page/nav.php");?>
        
            <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!--indicator-->
                <ol class="carousel-indicators">
                    <?php
                     $doss_img  ="uploads/";
                     $i = 0;
                    if (is_dir($doss_img))
            {
                if ($dh = opendir($doss_img))
                {
                    while(($file = readdir($dh))!== false)
                    {
                        if (getimagesize("uploads/".$file))
                        {
                            if ($i==0)
                            {
                            echo "<li data-target='#myCarousel' data-slide-to='0' class='active'></li>";
                            $i++;
                            }
                            else 
                            {
                                echo "<li data-target='#myCarousel' data-slide-to=".$i."></li>";
                                $i++;
                            }
                        }
                    }
                    
                }
                
            }
                    ?>
                    
                </ol>
                <!--image du slide-->
            <?php
            $j = 0;
            $doss_img  ="uploads/";
            // ouvre un dossier bien connu et liste tous les fichiers
            if (is_dir($doss_img))
            {
                if ($dh = opendir($doss_img))
                {
                    while(($file = readdir($dh))!== false)
                    {
                        if (getimagesize("uploads/".$file))
                        {
                            if ($j==0)
                            {
                                echo "<div class='carousel-inner' role='listbox'>
                                            <div class='item active'>
                                            <img src='uploads/".$file."' alt=".$j." >
                                                    <div class='carousel-caption'>
                                                    <h3>".$file."</h3>
                                                    <p>fichier :". $file." : type - :  " . filetype($doss_img . $file)."- image numéro - ".$j."</p>
                                                    </div>
                                            </div>
                                    
                                ";
                                $j++;
                                
                            }
                            else 
                            {
                                echo "
                                            <div class='item'>
                                            <img src='uploads/".$file."' alt=".$j." >
                                                    <div class='carousel-caption'>
                                                    <h3>".$file."</h3>
                                                    <p>fichier :". $file." : type - :  " . filetype($doss_img . $file)."- image numéro - ".$j."</p>
                                                    </div>
                                            </div>
                                    
                                ";
                                $j++;
                            }
                        }
                    }
                    closedir($dh);
                }
            }
            ?>
            <!-- contrôle droite et gauche-->
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Prev</span>
            </a>
             <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            
            </div>
            </div>
            
   
  <?php include("page/footer.php");?>