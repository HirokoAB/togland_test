<?php  
/*
Template Name: page-ryousi
*/
?>




<?php
$tests = $cfs->get('ryousi_loop');
foreach ($tests as $test) :
?>
            <li class="col-md-3 col-6 fisherman_img">
              <a href="<?php the_permalink(); ?>"><img src="<?php echo $test["ryousi_img"]; ?>" alt=""/></a>
                <p class="fisherman_name"><?php echo $test["ryousi_name"] ?></p>
                    <div class="mask">
                      <p class="caption"><?php echo $test["ryousi_ship"] ?></p>
                    </div>
            </li>


<?php endforeach; ?>





