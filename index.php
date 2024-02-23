<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="wrapper">
        <h2> CLASSIFICATION OF STUDENT RESULTS</h2>
        <form action="#" method="post">
            <div class="row">
            <div class="LBlittle">
                <label> Math scores </label>
            </div>
            <div class="LBlinput">
            <input type="number" name="math"value="<?php echo isset($_POST['math'])?
$_POST['math'] : "" ; ?>"/>
            </div>
            </div>
            	<!-- Physics -->
            <div class="row">
         <div class="lbltitle">
             <label> Physics scores</label>
           </div>
            <div class="lblinput">

            <input type="number" name="physics"
value="<?php echo isset($_POST['physics']) ?
$_POST['physics'] : "" ; ?>" />

</div>
</div>
<!-- Chemistry -->
<div class="row">
<div class="lbltitle">
<label> Chemistry scores</label>
</div>
<div class="lblinput">
<input type="number" name="chemistry"
value="<?php echo isset($_POST['chemistry']) ? 
$_POST['chemistry'] : "" ; ?>" />

</div>
</div>
<div class="row">
<div class="lbltitle">
<label> Select an area</label>
</div>
<div class="lblinput">
<select name="khuvuc">
    <option value="0" <?php echo isset($_POST['khu_vuc']) && $_POST['khuvuc'] == '0' ? "selected" : "" ?>> Select an area </option>
    <option value="1" <?php echo isset($_POST['khu_vuc']) && $_POST['khuvuc'] == '1' ? "selected" : "" ?>> Area 1 </option>
    <option value="2" <?php echo isset($_POST['khu_vuc']) && $_POST['khuvuc'] == '2' ? "selected" : "" ?>> Area 2 </option>
    <option value="3" <?php echo isset($_POST['khu_vuc']) && $_POST['khuvuc'] == '3' ? "selected" : "" ?>> Area 3</option>
    <option value="4" <?php echo isset($_POST['khu_vuc']) && $_POST['khuvuc'] == '4' ? "selected" : "" ?>> Area 4</option>
    <option value="5" <?php echo isset($_POST['khu_vuc']) && $_POST['khuvuc'] == '5' ? "selected" : "" ?>> Area 5 </option>
</select>



</div>
</div>
<!-- Form send button, command button to send results -->
<div class="row">
<div class="submit">
<input type="submit" name="btnsubmit" value="Ratings" />
        </form>
        <!-- Results -->
        <div class="result">
          <h2>Rating results</h2>
          <div class="row">
<div class="lbltitle">
<label>Total points</label>
</div>
<div class="lbloutput">
<?php echo isset($_POST['btnsubmit']) ? $_POST['math']

+ $_POST['physics'] + $_POST['chemistry'] : "" ; ?>

</div>
</div>
    <div class="row">
    <div class="lbltitle"> 
    <label>Rating</label>
    </div>
      <div class="lbloutput">
        <?php
        if(isset($_POST['btnsubmit'])){
            $totalpoints = $_POST['math'] + $_POST['physics']
            
            + $_POST['chemistry'];
            if($totalpoints >= 24) echo "Very Good";
            elseif($totalpoints >= 21) echo "Good";
            elseif($totalpoints >= 15) echo "Average";
            else echo "Weak";
            } ?>
      </div>
       
    </div>

    <!-- Priority Points -->
<div class="row">
    <div class="ibtitle">
        <label> priority points</label>
    </div>
    <div class="lbloutput">
        <?php 
        if (isset($_POST['btnsubmit'])){
            $priority_points = $_POST['khuvuc'];
            switch ($priority_points){
                case 0:
                case 4:
                case 5:   

                echo"0";
                break;

                case 1:
                case 2:
                echo"5";
                break;

                case 3:
                echo"3";
                break;
            default:
            echo "0";
            break;
                }
        }
   ?>

    </div>
</div> 
</div>
    
</body>
</html>