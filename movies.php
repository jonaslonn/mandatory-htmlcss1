<?php 
$id = 3;
$title = "Favoritfilmer";
include("header.php"); 
?>

        <div class="main" style="width:70%;">
            <h2>Mina favoritfilmer</h2>
            <p>
            <a href="">länk</a>


            </p>

        </div>
        <aside style="width:30%;">
        <img src="img/about.jpg" alt="Jonas Lönn" style="width:100%;box-sizing: border-box;padding:8px;border: solid 5px white;background-color:#FFFFFF;border-radius:4px;margin-bottom:20px;">
        <br>
                <h2>Bekväm med ..</h2>                
                    <ul>
                        <li> <p>HTML & CSS</p>
                        <li> <p>PHP</p>
                        <li> <p>MySQL</p>
                    </ul>      

                <h2>Mindre bra på  ..</h2>                
                    <ul>
                        <li> <p>Javascript</p>
                        <li> <p>jQuery</p>
                        <li> <p>AJAX</p>
                    </ul>    

                <h2>Ser fram emot ..</h2>                
                    <ul>
                        <li> <p>React</p>
                        <li> <p>ASP MVC</p>
                    </ul>           
        </aside>

        <div style="clear:both;"></div>
        
 <?php include("footer.php"); ?>