<?php
    include 'db.php';
    $result = mysqli_query($link, "SELECT * FROM `first`");
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Меню</title>
</head>
<body>

    <div class="header">
        <div class="container">
            <div class="row">
                <div class="logo col-md-6"> 
                    Логотип
                </div>
                <div class="lang">
                    <select>
                        <option value="ua">UA</option>
                        <option value="ru" selected >RU</option>
                        <option value="en">EN</option>
                    </select>
                </div>
                <div class="name col-md-4">
                    <select>
                        <option value="waiter" selected>Официант</option>
                        <option value="cook">Повар</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="section-title">
                <h1 class="section-title">Меню</h1>
            </div>
            
            <div class="menu">
                <?php

                    while($goods = mysqli_fetch_assoc($result))
                    {
                        ?>
                        <a href="menu.php?menu=<?php echo $goods['type']?>" class="eat">
                            <img src="./images/<?php echo $goods['image'] ?> " alt="image" class="image">
                            <div class="card-text">
                                <div class="card-head">
                                    <h3 class="card-title"> <?php echo $goods['name']?></h3>
                                    <span class="card-tag"><?php echo $goods['time']?></span>
                                </div>
                                <div class="card-info">
                                    <div class="card-name"><?php echo $goods['info']?> </div>
                                </div>
                            </div>
                        </a>
                <?php
                
                    }
                
                ?>
               
            </div>
        </div>
    </section>
</body>
</html> 