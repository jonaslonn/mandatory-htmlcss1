<?php
    if(!isset($id))
    {
        $id = 1;
    }
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="style.css" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Abel|Bebas+Neue&display=swap" rel="stylesheet">  
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <title>EC-UTBILDARNA / Helsingborg / Jonas / <?php echo $title; ?></title>
    </head>
<body>

    <header>
        <div class="content">
            <div style="float:left;padding:15px;"><img src="img/about.jpg" alt="Jonas"></div>
            <div class="headerTitle">
                <h1><span style="color:#FFFF00">{</span> Jonas Lönn <span style="color:#FFFF00">}</span></h1>                
            </div>
            <div class="headerInfo">
               <strong>WIN 19 - EC UTBILDARNA HELSINGBORG</strong>
            </div>            
        </div>        
    </header>
        <nav>
            <div class="content">
                <ul>
                    <?php                    
                    if($id == 1)
                    { 
                        echo "<li class=\"off\"><i class=\"fas fa-home\" style=\"color: #3d3d3d\"></i> &nbsp; Hem</li>";
                    }
                    else 
                    {
                        echo "<a href=\"index.php\"><li><i class=\"fas fa-home\" style=\"color: #39c8db\"></i> &nbsp; Hem</li></a>";
                    }

                    if($id == 2)
                    { 
                        echo "<li class=\"off\"><i class=\"fas fa-user-circle\" style=\"color: #3d3d3d\"></i> &nbsp; Om</li>";
                    }
                    else 
                    {
                        echo "<a href=\"about.php\"><li><i class=\"fas fa-user-circle\" style=\"color: #39c8db\"></i> &nbsp; Om</li></a>";
                    }

                    if($id == 3)
                    { 
                        echo "<li class=\"off\"><i class=\"fas fa-book-dead\" style=\"color: #3d3d3d\"></i> &nbsp; Filmer</li>";
                    }
                    else 
                    {
                        echo "<a href=\"movies.php\"><li><i class=\"fas fa-book-dead\" style=\"color: #39c8db\"></i> &nbsp; Filmer</li></a>";
                    }

                    if($id == 4)
                    { 
                        echo "<li class=\"off\"><i class=\"fas fa-link\" style=\"color: #3d3d3d\"></i> &nbsp; Länkar</li>";
                    }
                    else 
                    {
                        echo "<a href=\"links.php\"><li><i class=\"fas fa-link\" style=\"color: #39c8db\"></i> &nbsp; Länkar</li></a>";
                    }

                    if($id == 5)
                    { 
                        echo "<li class=\"off\"><i class=\"far fa-address-card\" style=\"color: #3d3d3d\"></i> &nbsp; Kontakt</li>";
                    }
                    else 
                    {
                        echo "<a href=\"contact.php\"><li><i class=\"far fa-address-card\" style=\"color: #39c8db\"></i> &nbsp; Kontakt</li></a>";
                    }


                    ?>
                </ul>   
            </div>
        </nav>

    <div class="content">