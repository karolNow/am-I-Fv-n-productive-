//skech of grid for 90 years 

@extends('layouts.app')
    <?php 
    $ilrow = 365;
    $ilcol = 90;
    $sw = 95;
    $sh = 100;
    $dlpoj = $sw/$ilrow;
    $wpoj = $sh/$ilcol;
    ?>

<div style="margin:auto; position: relative; width:<?php echo $sw;?>vw; height:<?php echo $sh;?>vh;">
    <?php 
      for($i=1; $i<=$ilcol; $i++) { ?>
        <div id="i=<?php echo $i ?>" style="position:relative; width:100%; height:<?php echo $wpoj;?>vh; background:transparent;"><?php
        for($j=1; $j<=$ilrow; $j++) {  ?>
          <div id="j=<?php echo $j ?>" style="position:absolute; left:<?php echo $j*$dlpoj;?>vw; width:<?php echo $dlpoj;?>vw; height:<?php echo $wpoj;?>vh; border: solid 1px black; ">
            </div>
          <?php
        }?>
          </div>
      <?php
      }
    ?> 
</div>



