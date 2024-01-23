<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Museum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body class="bg-dark">
    <?php
    require "partials/_nav.php"; 
    ?>

    <div class="container bg-dark">
    <h2 class = "text-center mt-4 text-warning">Add new items</h2>
    <form action = "/loginsystem/crud_items.php" method = "post">
    <div class = "mb-4">
    <h4 class = "text-white">Item Category :</h4>
    <div class="form-check">
  <input class="form-check-input  text-white" type="radio" name="category" id="flexRadioDefault1" value = "coins" checked>
  <label class="form-check-label  text-white" for="flexRadioDefault1">
    Coins
  </label>
</div>
<div class="form-check ">
  <input class="form-check-input  text-white" type="radio" name="category" id="flexRadioDefault2" value = "paintings" >
  <label class="form-check-label  text-white" for="flexRadioDefault2">
    Paintings
  </label>
</div>
<div class="form-check">
  <input class="form-check-input  text-white" type="radio" name="category" id="flexRadioDefault3" value = "arch" >
  <label class="form-check-label  text-white" for="flexRadioDefault3">
    Archaeology
  </label>
</div>
<div class="form-check">
  <input class="form-check-input  text-white" type="radio" name="category" id="flexRadioDefault4" value = "manuscript">
  <label class="form-check-label  text-white" for="flexRadioDefault4">
    Manuscripts
  </label>
</div>
</div>

<div class="mb-4">
    <h4 class = "text-white">Item description : </h4>
        <textarea class="form-control" id="item_description" name="item_description" rows = "1"></textarea>
</div>
<div class="mb-">
<h4 class = "text-white">Upload image file: </h4>
  <input class="form-control" type="file" id="formFile">
</div>
  <div class = "d-flex justify-content-center">
  <button type="submit" class="btn btn-warning  text-white" >Submit</button>
</div>
</form>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>