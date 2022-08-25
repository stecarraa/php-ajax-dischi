<?php
require __DIR__ . '/database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    
    <title>Document</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <?php
            
                foreach($disks as $disk){     
                    echo '<div class="box">';        
                        echo "<img src='".$disk['poster']."'>";          
                        echo "<h2>". $disk['title']."</h2>";    
                        echo "<div class='text'>". $disk['author']."</div>";    
                        echo "<div class='text'>". $disk['genre']."</div>";   
                        echo "<div class='text'>". $disk['year']."</div>"; 
                    echo"</div>";
                }
                
            ?>

        </div>

    </main>
</body>
</html>