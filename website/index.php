<?php include "includes/template.php";
/** @var $conn */ ?>


<title>Cyber City</title>






<div class = "wideBox">

        <div class = "title" >

            <h1>Rebels we need your help</h1>

            <?php

            if (isset($_SESSION["username"])) {
                echo
                "<h2 class=''>You're logged in, you may now contribute to the cause</h2>";

                ?>
                <?php
            } else {
                echo

                "<h2 class=''> Please log in or register to gain access to the cause</h2>";
            }
            ?>

        </div>

</div>


<div class = "wideBox">
    <div class ="subBoxWhite">
        <div class = "title" >
            <h2>Beginnings</h2>
            <p>In 1850 a rural town was created, referred to as Latafa. This town was a logging town bringing in great riches for those who controlled it. During its earlier years, the town was a hot spot for illegal testing as it was far from any other towns. During the Red Tuesday bushfires in 1898, the town was consumed by a blazing inferno destroying the town. Later on, the town was rebuilt and the surrounding forest continued to grow. The people started to live off the land requiring less outside help leading to isolation, eventually leading to the erasure of the town off of the current day maps, to this day the location remains unknown and lost to time.    </p>

        </div>
    </div>

    <div class ="subBoxWhite">
        <div class = "title" >
            <h2>currently</h2>
            <p>Oak-Crack is the remains of the town, the forest creating a natural barrier for which the TBW can hide. We at the LTC have found that the TBW is currently cultivating a super-virus in a French Bio-Lab by the name of Lab 404 deep underground.</p>

        </div>
    </div>




</div>



