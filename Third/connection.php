
<?php

//Database credentials
$user = "a30033719_appuser";
$pw = "30033719toiohomai";
$db = "a30033719_app";

//Database connection object 
$connection = new mysqli('localhost', $user, $pw, $db);

//variable that returns all records in the database
$all_records = $connection->query("select * from scp"); 


//code for insert data from our create form
//check if sumbit vaule has been sent via POST 
if(isset($_POST['submit']))
{
    //create variables from our form post data
    $item = mysqli_real_escape_string($connection,$_POST['item']);
    $object = mysqli_real_escape_string($connection,$_POST['object']);
    $scp = mysqli_real_escape_string($connection,$_POST['scp']);
    $des = mysqli_real_escape_string($connection,$_POST['des']);
    $img = mysqli_real_escape_string($connection,$_POST['img']);

    //create sql command to insert above values into our DB
    $insert = "insert into scp(item, object, scp, des, img) 
    values('$item', '$object', '$scp', '$des','$img')";

    if($connection->query($insert) === TRUE)
    {
        echo"
        <link rel = 'stylesheet' href='css/style.css' type ='text/css' >
     
        <div class='pt-tablecell page-home relative center'>
        <div class='page-title home text-center'>
                    <h2 class='maintitle' >Record added successfully</h2>
                    <h3><a href='index.php' class='btn btn-primary'>Return to index page</a></h3>
            </div>
            </div>
        ";
    }
    else
    {
        echo"
        <link rel = 'stylesheet' href='css/style.css' type ='text/css' >
     
        <div class='pt-tablecell page-home relative center'>
        <div class='page-title home text-center'>
            <h1>Error submitting data</h1>
            <p>{$connection->error()}<p>
            <h2><a href='index.php'>Return to index page</a><h2>
            </div>
            </div>
        ";
    }
}// end isset POST


if(isset($_POST['update']))
{
  //create the variables from our form post data
    $id = $_POST['id'];
    $item = mysqli_real_escape_string($connection,$_POST['item']);
    $object = mysqli_real_escape_string($connection,$_POST['object']);
    $scp = mysqli_real_escape_string($connection,$_POST['scp']);
    $des = mysqli_real_escape_string($connection,$_POST['des']);
    $img = mysqli_real_escape_string($connection,$_POST['img']);
  
  //create a sql update commend
  $update = "update scp set item ='$item', scp = '$scp', object = '$object', des = '$des',
            img = '$img' where id ='$id'";
  
  if($connection->query($update) === TRUE)
  {
      echo "
     
      <link rel = 'stylesheet' href='css/style.css' type ='text/css' >
     
      <div class='pt-tablecell page-home relative center'>
      <div class='page-title home text-center'>
            <h2 class='maintitle'>Record update successfully</h2>
            <h3><a href ='index.php'>Return to index page.</a></h3>
        </div>
        </div>
      ";
  }
  
  else
  {
    echo"
    <link rel = 'stylesheet' href='css/style.css' type ='text/css' >
     
    <div class='pt-tablecell page-home relative center'>
    <div class='page-title home text-center'>
        <h2>Record did not update</h2>
        <p>{$connection->error()}</p>
        <h3><a href ='index.php'>Return to index page.</a><h3>
        </div>
        </div>
    ";
  }
}

//delete record
if(isset($_GET['delete']))
{
    $id = $_GET['delete'];

    //delete sql command
    $del = "delete from scp where id = $id";

    if($connection->query($del) === TRUE)
    {
        echo "
        <link rel = 'stylesheet' href='css/style.css' type ='text/css' >
     
        <div class='pt-tablecell page-home relative center'>
        <div class='page-title home text-center'>
            <h2>Record Delete</h2>
            <h3><a href = 'index.php'>Back to index page</a></h3>
            </div>
        </div>
        ";

    }
    else
    {
        echo "
        <link rel = 'stylesheet' href='css/style.css' type ='text/css' >
     
        <div class='pt-tablecell page-home relative center'>
        <div class='page-title home text-center'>
            <h1>Error deleting record</h1>
            <p>{$connection->error()}</p>
            <p><a href ='index.php'>Return to index page.</a></p>
            </div>
            </div>
        ";
    }
}//end of delete 


?>