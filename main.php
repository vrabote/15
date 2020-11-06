<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
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
            <?php  echo '<img src="./img/1.jpg">'; ?>                    
        </div>

        <div class="fullname">
            <p> Меня зовут 
            <?php echo $name, ' ', $surname . '<br>'; 
                  echo 'город', ' ', $city; ?>                                      
            </p> 
   
            <p> Мне
            <?php  echo $age;   ?>          
            лет </p>
            <p>
                    - Высший менеджмент<br>
                    - Маркетинг, Реклама, PR<br>
                    - Информационные технологии<br>
                    - Антикризисное управление<br><br>
                    Привет! Меня зовут Алексей. Сфера моих интересов лежит
                    в пересечении: маркетинга, рекламы, строительства и IT.
                    Директор по развитию c опытом предпринимателя, программист,
                    запуск проектов с 0, поиск новых точек роста<br>
                    Считаю, что менеджер + Fullstack разработчик =
                    СуперСила!)<br><br>

                    Самый крупный проект, который создавался мной
                    это компания POS-Material.ru - рекламное и торговое
                    оборудование для магазинов FMCG<br>
                    В настоящее время начал работать над проектом vrabote.ru

                </p>
                <p>
                    Семейное положение: женат, есть дочь, сын и еще один сын)
                    Работаю и живу в Москве и Обнинске.
                    Увлекаюсь творчеством: мастерю из дерева и пишу картины.
                </p>
    
                <p>Если у Вас есть интересные проекты для разработки,
                    то свяжитесь со мной по контактам, указанным выше<br>
                    
        </div>
    </div>
    </div>
    <p> сюда можете не смотреть)</p>              
    <div class="knowledge">
             
            <?php  include 'knowledge.inc.php'; ?>
            <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                               
            <?php
                $a = 10;
                $b = 20;
                $c = $a + $b;
                echo '10 + 20 = ', $c;
            ?>   <br>                
             <?php
                echo $d;
            ?> 

    </div>

    <?php include 'footer.inc.php' ?>

</div>


</body>
</html>
