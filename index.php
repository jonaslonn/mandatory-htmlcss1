<?php
$id = 1;
$title = "Välkommen";
include("header.php"); 
?>
        <div class="main">

            <article>
                <div class="sectionHeader">
                <i class='fas fa-wrench' style='color: #39c8db'></i> &nbsp; Om mig uppdaterad 
                </div>
                <section>              
                    <p>
                    Mitt innehåll

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis rerum qui, nulla fuga explicabo minus vel hic rem. Sapiente error dolor beatae. Delectus cum, impedit exercitationem perspiciatis odit itaque error.<br><br>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio quis fuga harum id pariatur quia necessitatibus quo maxime tenetur eaque nesciunt obcaecati dignissimos est, voluptatem facilis illo non, veniam perspiciatis!  
                    </p>    
                </section>

                <div class="sectionHeader">
                <i class='fas fa-home' style='color: #39c8db'></i> &nbsp; Hemsidan lanserad!
                </div>
                <section>    
                    <p>
                    Mitt innehåll

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis rerum qui, nulla fuga explicabo minus vel hic rem. Sapiente error dolor beatae. Delectus cum, impedit exercitationem perspiciatis odit itaque error.<br><br>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio quis fuga harum id pariatur quia necessitatibus quo maxime tenetur eaque nesciunt obcaecati dignissimos est, voluptatem facilis illo non, veniam perspiciatis!  
                    
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia, facere fugit non nemo maiores doloremque corrupti eveniet, eum minima optio quas veritatis. Labore minus deserunt possimus odio sed a tempora! 
                    <br><br>

                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis dolorem vel atque voluptas, optio reprehenderit debitis ut voluptate perferendis id autem eaque, natus laboriosam, neque cum! Dolore facere itaque rem!  
                    </p>    
                </section>
            </article>

        </div>
        <aside>
      
                <h2>Om</h2>
                
                <div class="movies" style="float:right;width:100px;padding:0 0 10px 10px;">
                    <div class="movieInfo" style="padding:5px;">
                        <a href="movies.php"><img src="img/about.jpg"></a>
                    </div>          
                </div>
                <p>                                    
                    Vill du vet mer om mig?<br>
                    Klicka in dig på "<a href="om.php">Om</a>" för en beskrivning om vem jag är och vad jag hittar på om dagarna!                 
                </p>

                <br><br><hr><br>


                <h2>Kontakta mig</h2>
                <div style="float:right;padding:5px;">
                    <a href="contact.php"><i class="far fa-envelope" style="color: #39c8db;font-size:36px;padding:0;margin:0;"></i></a>
                </div>    
                <p>
                    Vill du komma i kontakt med mig?<br>
                    Fyll i formuläret så återkommer jag så fort jag kan!                    
                </p>

                <br><hr><br>

                <div class="movies" style="float:right;width:110px;padding:0 0 10px 10px;">
                    <div class="movieInfo" style="padding:5px;">
                        <a href="movies.php"><img src="img/movie.jpg"></a>
                    </div>          
                </div>
                <h2>Favoritfilmer</h2>
                <p>
                    Jag vill gärna presentera några utav mina favoritfilmer för er, ta en titt under "<a href="movies.php">filmer</a>"    
                </p>



                <br><hr><br>

                <h2>Länktips</h2>                                
                <div style="float:right;padding:5px;">
                    <a href="links.php"><i class="fas fa-link" style="color: #39c8db;font-size:36px;padding:0;margin:0;"></i></a>
                </div>    
                <p>
                    Under <a href="links.php">länkar</a> så presenterar jag några utav mina favoritersajter på nätet som jag gärna vill rekommendera till er!               
                </p>                          
        </aside>

        <div class="clearFix"></div>
        
 <?php include("footer.php"); ?>