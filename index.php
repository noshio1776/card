<?php require_once('card.php');?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./card.css">
    <script src="jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="jquery.quicksearch.js" type="text/javascript"></script>
</head>
<body>
   <header>
      <div class="container header-container">
            <img src="./img/logo.png" alt="" class="logo"> 
            <input type="text" class="search" id="search"  placeholder="カタカナ検索">
            <button id="open-modal">検索</button>
            <div id="search-modal">
               <div class="modal-wrp">
                    <input type="text" class="search"  placeholder="カタカナ検索">
                    <button id="close-modal">×</button>
               </div>
            </div>
      </div>
   </header>
    <main>
        <div class="container main-container">
           <?php foreach($items as $item):?>
                <div class="animal" id="<?php echo $item->getName();?>">
                    <a href="https://prog-8.com/dashboard">
                        <h2><?php echo $item->getName();?></h2>
                        <img src="<?php echo $item->getImg();?>" alt="<?php echo $item->getName();?>">
                    </a>
                </div>
           <?php endforeach?>
        </div>
    </main>
    <footer>
        <p>&copy;takahiro sakurai</p>
    </footer>
    <script src="card.js">
    </script>
</body>
</html>