<?php
$pixelNum=0;
$pic=[
    ["","","","","","","","","","","","","","","",""],
    ["","","","","","","","","","","","","","","",""],
    ["","","","","","","","","","","","","","","",""],
    ["","","","","","","","","","","","","","","",""],
    ["","","","","","","","","","","","","","","",""],
    ["","","","","","","","","","","","","","","",""],
    ["","","","","","","","","","","","","","","",""],
    ["","","","","","","","","","","","","","","",""],
    ["","","","","","","","","","","","","","","",""],
    ["","","","","","","","","","","","","","","",""],
    ["","","","","","","","","","","","","","","",""],
    ["","","","","","","","","","","","","","","",""],
    ["","","","","","","","","","","","","","","",""],
    ["","","","","","","","","","","","","","","",""],
    ["","","","","","","","","","","","","","","",""],
    ["","","","","","","","","","","","","","","",""]
];
?>
<div class="post d-flex justify-content-center" id="post">
    <div class="border border-3 mb-3 pic" oncontextmenu="return false;" style="width:480px">
<?php
        foreach ($pic as $row) {
?> 
            <div class="line" style="display:flex;">
<?php
                foreach ($row as $pixel) {
                    ?>
                        <div id="<?php echo $pixelNum?>" class="pixel border border-1" onclick="changeColor()"
                        style="background-color:#<?php echo $pixel?>;width:30px;height:30px"></div>
                    <?php
                    $pixelNum=$pixelNum + 1;
                }
?>
            </div>
<?php
        }
?>
    </div>
</div>
<form action="submitPicture" method="POST"> <!--willDo change to POST-->
    <input id="pic" name="pic" type="hidden" value="">
    <div class="container-fluid m-0 mt-4 mb-3">
        <div class="row mb-3">
            <div class="col-sm-6 col-12">
                <label class="form-label" for="colorpicker">Color Picker: <br></label>
                <input
                    class="container-fluid"
                    id="colorpicker"
                    type="color"
                    value="#19BFE0"
                    name="colorpicker"
                    required
                />
            </div>        
            <div class="col-sm-6 col-12">
                <label class="form-label" for="title">Title: <br></label>
                <input
                    class="container-fluid"
                    type="title"
                    name="title"
                    required
                />
            </div>
            <div class="col-12">
                <label class="form-label" for="text">Text: <br></label>
                <input
                    class="container-fluid"
                    type="text"
                    name="text"
                    required
                />
            </div>
        </div>
        <div class="row text-center p-2">
            <input id="submit" class="container-fluid" style="background-color:#19BFE0" type="submit" name="submit" value="Submit me!"/>
        </div>
    </div>
</form>
<script>
var passedArray = <?php echo json_encode($pic); ?>;
var colorPicker = document.getElementById("colorpicker");

function changeColor(){
    var id=event.target.id;
    var row=Math.trunc(id/16);
    var col=Math.trunc(id%16);

    event.target.style.backgroundColor=colorPicker.value;
    passedArray[row][col]=colorPicker.value;

    event.target.oncontextmenu = (e) => {
        e.preventDefault();
        event.target.style.backgroundColor="#FFFFFF";
        passedArray[row][col]="";
    }
}
document.getElementById('submit').addEventListener('click',
    ()=>{document.getElementById("pic").value=passedArray}
);
</script>