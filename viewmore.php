<?php
include 'includes/navbar.php';?>
<?php
if (isset($_GET['search'])) {
   $data = x($_GET['search']);
   $query = mysqli_query($db ,"SELECT * FROM `colect` WHERE `names` LIKE '%$data%'");
   if(mysqli_num_rows($query) > 0){  echo "<hr width='100%' style='height:1px;' class='text-info'>"; 
    echo "<p class='p-4 text-center text-info cantainer m-auto p-0'>results found search</p>"; ?> 
 
<div class="container-fluid px-4 px-lg-5 mt-5">
<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
<?php
while($row = mysqli_fetch_assoc($query)) { ?>
 <div class="col mb-5 border-0 ">
                        <div class="card h-100 border-0 ">
                            <!-- Product image-->
                            <img class="card-img-top" src="upload/<?php  echo $row['photo']; ?>" alt="...">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"> <?php echo x($row['names']); ?> </h5>
                                     <!-- Product price-->
                                     <p>  <?php echo $row['price'];  ?></p><br>
                                    <!-- zanyary zyatr -->
                                    <a href="viewmore.php?postid=<?php echo $row['id']; ?>" class="text-info">View More</a><br>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-info mt-auto " href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
<?php } ?>
</div>
</div>

<?php 
} else{
    echo "<hr width='100%' style='height:1px;' class='text-info'>";
    echo "<p class='p-4 text-center text-info cantainer m-auto pt-1 pb-5'>no results found</p>";
}
exit();
}
?>



<?php  
$postid = $_GET['postid'];
$query = mysqli_query($db , "SELECT * FROM `colect` WHERE `id` = '$postid'");
 while ($row = mysqli_fetch_assoc($query)) { ?>
 <div class="card m-5 border-0 cardyview" >
  <div class="row g-0 ">
       <!-- Product image-->
    <div class="col-md-4 ">
        <img class="img-fluid  h-100 w-100 rounded-start" src="upload/<?php echo $row['photo'] ?>" alt="...">
    </div>
        <!-- Product details-->
        <div class="col-md-8">
        <div class="card-body">
                <!-- Product name-->
                <h5 class="fw-bolder"><?php  echo $row['names'] ?></h5>
                <!-- zanyary zyatr -->
                    <p class="text-black text-left col-8"><?php echo $row['zanyary'] ?></p><br>
                                     <!-- Product price-->
                 <p class="text-left text-bold"> <?php echo $row['price'] ?></p>
            </div>
        </div>
                <!-- Product actions-->
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center"><button name="add" type="submit" class="btn btn-outline-info mt-auto ">Add to cart</button></div>
                </div>
        
    </div>
</div>
<?php
}
?>




