<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Практическое задание 8.6 </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="fullname">
                    <p>Фамилия :  
                    <?php echo $surname,'<br>', 'Имя : ', $name,'<br>',
                          'Город : ', $city; ?>                                      
                    </p> 
           
                    <p> Возраст : 
                    <?php  echo $age;   ?>          
                    г. </p> <br> <br>
                    <p><u>Навыки :</u></p>
                    <p> ~ создание переменных <br>
                        ~ простые операции с переменными </p>
                </div>
                
                <div class="myImg">
                    <?php  echo '<img src="/img/photo.jpg">'; ?>                    
                </div>
            </div>
            
            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                        $a = 30;
                        $b = 40;
                        $c = $a + $b;
                        echo $c;
                    ?>   <br>                
                     <?php
                        echo $d, $intmin, ' и ', $intmax;
                    ?> 

            </div>

            <div class="article">
                <p class="text">
                    Здесь могла бы быть ваша реклама!
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>
