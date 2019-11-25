<?php 
$id = 5;
$title = "Kontakta";
include("header.php"); 
?>

        <div class="main">
    
            <form method="post" action="contact.php">
                <fieldset>
                <legend>Kontakta Jonas</legend>
                    
                    <p>Fyll i formuläret nedan och klicka på skicka för att komma i kontakt med mig!</p>
                    <br><br>
                    <div>
                        <p><label for="name">Namn:</label></p>
                        <input type="text" name="name" id="name" placeholder="För och efternamn" required>
                    </div>
                    <div>
                        <p><label for="email">Epostadress:</label></p>
                        <input type="email" name="email" id="email" placeholder="Ange e-postadress" required>
                    </div>
                    <div>
                        <p><label for="subject">Du kontaktar mig angående:</label></p>
                        <select name="subject" id="subject" required>
                        <option selected disabled>Välj alternativ nedan</option>
                        <option value="Hemsidan">Hemsidan</option>
                        <option value="Utbildningsinformation">Utbildningsinformation</option>
                        <option value="Programmering">Programmering</option>
                        </select>
                    </div>
                    <div>
                        <br>
                        <p><label for="information">Beskriv ditt ärende:</label></p>
                        <textarea name="information" id="information" placeholder="Beskriv ditt ärende här" required>
                        </textarea>
                    </div>
                    <div>
                        <div style="float:right;">
                            <input type="submit" name="submit" id="submit" value="Skicka formulär">
                        </div>
                    </div>
                </fieldset>
            </form>   
        

        </div>
        <aside>

        <div class="movies" style="float:right;width:100px;padding:0 0 10px 10px;">
            <div class="movieInfo" style="padding:5px;">
                <a href="about.php"><img src="img/about.jpg"></a>
            </div>          
        </div>        
                <h2>Om mig</h2>                
                <p>
                Vill du veta mer om mig?<br>
                Klicka in dig på undersidan "<a href="about.php">om</a>" för att ta reda på vem jag är!
                </p> 
                
                <br><hr><br>

                <h2>FAQ.</h2>                
                <p>
                Vanligtvis svarar jag på meddelande via hemsidan inom 5dagar.<br><br>
                Oseriösa meddelande hamnar i skräpposten.
                </p>               
        </aside>

        <div style="clear:both;"></div>
        
 <?php include("footer.php"); ?>