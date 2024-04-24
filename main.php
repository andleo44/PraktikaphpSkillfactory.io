<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Практика PHP</title>
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
                <div class="myImg">
                    <img src="img/0NufCg.jpg">;                 
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'город', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    лет </p>
                    <p> Я научился создавать переменные и изучил простые операции с ними </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                        $a = 10;
                        $b = 20;
                        $c = $a + $b;
                        echo $c;
                    ?>   <br>                
                     <?php
                        echo $d;
                    ?> 

            </div>

            <div class="article">
                <p class="text">
                    Данный сайт был написан мной, Леонтьевым Андреем, студентом группы HACKER-60.Данный сайт был написан мной, Леонтьевым Андреем, студентом группы HACKER-60.Данный сайт был написан мной, Леонтьевым Андреем, студентом группы HACKER-60.Данный сайт был написан мной, Леонтьевым Андреем, студентом группы HACKER-60.Данный сайт был написан мной, Леонтьевым Андреем, студентом группы HACKER-60.Данный сайт был написан мной, Леонтьевым Андреем, студентом группы HACKER-60.Данный сайт был написан мной, Леонтьевым Андреем, студентом группы HACKER-60.Данный сайт был написан мной, Леонтьевым Андреем, студентом группы HACKER-60.Данный сайт был написан мной, Леонтьевым Андреем, студентом группы HACKER-60.
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>
            <img src='img/RZfOfMz0jnE.jpg'>

    </div>


</body>
</html>