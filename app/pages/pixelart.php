<?php
$a=[1, 2, 3]; //pictures
$b=[
    ["19BFE0","","19BFE0","","19BFE0","","19BFE0",""],
    ["","19BFE0","","19BFE0","","19BFE0","","19BFE0"],
    ["19BFE0","","19BFE0","","19BFE0","","19BFE0",""],
    ["","19BFE0","","19BFE0","","19BFE0","","19BFE0"],
    ["19BFE0","","19BFE0","","19BFE0","","19BFE0",""],
    ["","19BFE0","","19BFE0","","19BFE0","","19BFE0"],
    ["19BFE0","","19BFE0","","19BFE0","","19BFE0",""],
    ["","19BFE0","","19BFE0","","19BFE0","","19BFE0"],
]; //pixels
?>
<div class="container">
    <div class="row">
        <?php
        foreach ($a as $ab) {
        ?>
            <div class="post col-xxl-4 col-lg-6 d-sm-flex" style="gap:5%;margin-bottom:2%;">
                <div class="border border-3 pic" style="width:240px;height:246px">
        <?php
                foreach ($b as $bb) {
        ?> 
                    <div class="line" style="display:flex;">
        <?php
                    foreach ($bb as $bbb) {
        ?>
                        <div class="pixel" style="background-color:#<?php echo $bbb?>;width:30px;height:30px"></div>
        <?php
                    }
        ?>
                    </div>
        <?php
        }
        ?>
                </div>
                <div class="text">
                    <h2>Title</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam et facilisis libero. Proin eu congue ex, et placerat nisi.</p>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>