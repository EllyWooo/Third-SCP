<!doctype html>
<html lang="en">
  <head>
   
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SCP Foundation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <script src='http://use.edgefonts.net/butcherman.js'></script>
      <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">
  
  <!-- Theme Stylesheet -->
  <link rel="stylesheet" href="#" id="color-changer">  </head>
  <body class="container">

        <h1>New item record</h1>

        <form class="form-group" method="post" action="connection.php">
            <label>Item Name:</label>
            <br>
            <input type="text" class="form-control" name="item" placeholder ="SCP_Name" required>
            <br><br>
            <label>Object Class:</label>
            <br>
            <input type="text" class="form-control" name="object" placeholder ="Class" required>
            <br><br>
            <label>Special Containment Procedures:</label>
            <br>
            <input type="text" class="form-control" name="scp" required>
            <br><br>
            <label>Description: </label>
            <br>
            <textarea type="text" class="form-control" name="des" required></textarea>
            <br><br>
            <label>Image </label>
            <br>
            <input type="text" class="form-control" name="img" placeholder="Image One">
            <br><br>
            <div class="d-grid gap-2 d-md-block">
            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
            <a href="index.php" class="btn btn-primary">Main</a>
            </div>
        </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>