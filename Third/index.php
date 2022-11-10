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
  
  
  </head>
  <body class = "container" >


      <?php include 'connection.php'; ?>
    
  
          <ul class="nav navbar-dark bg-dark">
            <!-- run php loop through scp and display model field here-->
              <?php foreach($all_records as $link): ?>
              
                <li class="nav-item active"><a class="nav-link text-light" href="index.php?link='<?php echo $link['item'] ?>'"><?php echo $link['item'] ?></a></li>

              <?php endforeach; ?>
                <li class="nav-item"><a class="nav-link text-light" href="form.php">New record</a></li>
            </ul>


  <?php 

    

      if(isset($_GET['link']))
      {
        //trim the single quote from get value but it shows %27 in address
        $item = trim($_GET['link'], "'");

        //run sql command to retrieve record based on GET value

        $record = $connection->query("select * from scp where item = '$item'");

        //turn recoed into an associative array
        $array = $record->fetch_assoc();

        //get the id field and save value
        $id = $array['id'];
        //create get value based in the id
        $update = "update.php?update=" . $id;
        $delete = "connection.php?delete=" . $id;
        
        //display individual parts of the array in HTML
        echo "
            <div>
            <p><img src='{$array['img']}' class='text-center img-fluid'></p>
              <div>
              <h2><b>{$array['item']}</b></h2>
              <h3><b>{$array['object']}<b/></h3>
              <h4>{$array['scp']}</h4>
              </div>
            <p>{$array['des']}</p>
            <p><a href='{$update}' class= 'btn btn-warning'>Update</a>
            <a href='{$delete}' class= 'btn btn-danger'>Delete</a>
            </p>
            </div>
        
        ";
      }
    
      else
      {
        //default veiw when user first visits the site
        echo"

          <div class='pt-tablecell page-home relative '>
                  <h2 class='maintitle' style='color:red'>SCP-Foundation</h2>
                  <h2 class='maintitle' style='color:red'>WARNING: THE FOUNDATION DATABASE IS</h2>             
                  <h2 class='maintitle' style='color:red'> CLASSIFIED </h2>
                  <br>
                  <h2 class='maintitle' style='color:red'>Access by unauthorized persons is strictly prohibited</h2>      
            
            </div>
              <div class= 'row-hero'>                 
                  <video height ='500px' width='600px'playsinline autoplay muted loop >
                    <source src='video/background.mp4' type='video/mp4'>
                  </video>
                </div>
                
        ";
      }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>