
    <html>  <style>
        .floating-box {
            display: inline-block;
            width: 280px;
            height: 250px;
            margin: 10px;
            border: 0px solid #717068;  
        }



    </style>
    <div class="container">
      <h2>All Cuisines</h2>
        <?php
//            <a class="btn btn-secondary active" href='?controller=post&action=update&id=<?php echo $post->id; 

        foreach ($cuisines as $cuisine) {?>
      <div class='floating-box'> <?php echo $cuisine->name ?> <a href= '?controller=cuisine&action=readCuisine&id=<?php echo $cuisine->id ?>'> <img src= <?php echo $cuisine->image?>  width='290' height='200'>   </a> </div>
     <?php   } ?>
      
    </div>



</html>