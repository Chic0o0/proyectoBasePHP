<?php
$a=[1, 2]; //pictures
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

foreach ($a as $ab) {
    ?>
    <div class="post" style="display:flex; gap:5%; margin-bottom:2%">
        <div class="border border-3 pic">   
<?php
        foreach ($b as $bb) {
?>
            <div class="line" style="display:flex;">
<?php
            foreach ($bb as $bbb) {
?>
                <div class="pixel" style="background-color:#<?php echo $bbb?>;width:35px;height:35px"></div>
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
            <p>Text</p>
        </div>
    </div>
    <?php
}
