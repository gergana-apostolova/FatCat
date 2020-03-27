<?php 
    session_start();     
    
    include './utils/user-managment.php';
    include './ui/market-managment.php';

?> 
<html>
    <head>
        <title>title</title>
        <link rel="stylesheet" href="style/dashboard.css">
    </head>
    <body>
       
        <header id="header">
            <?php  display_nickname(); ?>
            
        </header>
        <form method="POST">
            <select name="filter_category">
                <option value="all">Всички</option>
                <option value="buy">За покупка</option>
                <option value="sell">За продажба</option>
            </select>
            <input type="hidden" name="selection_tokken" value="1">
            <input type="submit" value="Филтрирай"> 
        </form>
        
        
        <h2>Fat Cat Market</h2>
        
        <?php 
                
            $catArtefactCollection = array(
                array(
                   'name'      => 'Maza',
                   'age'       => 16,
                   'img'       => 'cats/img1.jpg',
                   'address'   => 'Vidin 24',
                   '_action'   => 'buy'
                ),
               array(
                'name'      => 'Prusho',
                'age'       => 2,
                'img'       => 'cats/img2.jpg',
                'address'   => 'Plovdiv 24',
                '_action'   => 'buy'                   
                ),
                array(
                   'name'      => 'Vafla',
                   'age'       => 10,
                   'img'       => 'cats/img3.jpg',
                   'address'   => 'Haskovo 24',
                    '_action'   => 'sell'                   
                ),
               array(
                'name'      => 'Churchil',
                'age'       => 5,
                'img'       => 'cats/img7.jpg',
                'address'   => 'Pleven 16',
                   '_action'   => 'sell'                   
                )                
            );
      
            $filterCategory = 'all';
            if(isset($_POST['filter_category'])) {
                $filterCategory = $_POST['filter_category'];
            }
            
            display_item_collection_filter($catArtefactCollection, $filterCategory);
            
        ?>
        
    </body>
</html>
