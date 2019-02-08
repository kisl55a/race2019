<?php include "header.php"; ?>
<div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
         <img src="" class="img-fluid col-md-3 " alt="">
        <h1 class="display-3">Fluid jumbo heading</h1>
        <p class="lead">Jumbo helper text</p>
        <hr class="my-2">
        <p>More info</p>
        <p class="lead">
        </p>
    </div>
</div>
<form>
  <div class="form-group">
    <label for="formGroupExampleInput"><h2>Type in your weight</h2></label>
    <input type="text" class="form-control" id="weight" placeholder="Example input" onchange="fatPercent()">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><h2>Type in your height</h2></label>
    <input type="text" class="form-control" id="height" placeholder="Another input" onchange="fatPercent()">
  </div>
</form>
<select name="ew" class="element" id="gender" onchange="fatPercent()">
          <option value="0">Male</option>
          <option value="1">Female</option>
          
        </select> <br>
        
</div>
</div>
<h1>Your result</h1>
<h5><div class="" id="result"></div></h5>

<script src="calculator.js"></script>
<?php include "footer.php"; ?>