
<?php
$servername = "localhost";
$username = "ctyrholm_blog";
$password = "F4nNoJgd7tAkOsa";
$dbname = "ctyrholm_blog";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM blog ORDER BY date_day DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {

    ?>

    <br><br>
    <div class = "row" style = "border-bottom: 1px #f1f1f1 solid;">
    <div class = "col-xs-1 text-center">
    </div>
        <div class = "col-xs-1 text-center" style = "background-color: #555555; font-size:11px; color: white; padding-left: 0px; padding-right: 0px;">
            <h3><?=$row['date_day']?><br></h3>
            <?=$row['date_month']?>, <?=$row['date_year']?>
            <img src = "images/date_pic.jpg">
        </div>
        <div class = "col-xs-5">
        <img src ="<?=$row['mypic']?>" class = "img-responsive" style = "width: 100%;">               
        </div>
        <br> 
        <div class = "col-xs-5 text-left">
            <h3><?=$row['title']?></h3><br>
            <p><?=$row['blurb']?></p>
            <br><br><br>
            <div class = "text-right"><a href = "#" alt = "">Find out More &gt; </a></div>
            
        </div>
    </div>
<?php
}
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
