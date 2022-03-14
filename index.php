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
                                <div class="text-center"><button class="btn btn-outline-info mt-auto "type="submit" name="add">Add to cart</button></div>
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

    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3 text-info"></h1>
                    <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2 text-info"></h1>
                    <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3 text-info"></h1>
                    <h5 class="font-weight-semi-bold m-0">10-Day Return</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3 text-info"></h1>
                    <h5 class="font-weight-semi-bold m-0">24/8 Support</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->

              <!-- Section-->
        <section class="py-5">
            <div class="container-fluid px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    
                  
                <?php
$query = mysqli_query($db,"SELECT * FROM `colect` ORDER BY `id` DESC");   
while($row = mysqli_fetch_assoc($query)){

?> 


                <div class="col mb-5 ">
                        <div class="card h-100 border-0 ">
                            <!-- Product image-->
                            <img class="card-img-top" src="upload/<?php echo $row['photo']?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"> <?php  echo x($row['names']) ;?></h5>
                                     <!-- Product price-->
                                     <p>  <?php  echo $row['price'] ; ?></p><br>
                                    <!-- zanyary zyatr -->
                                        <a href="viewmore.php?postid=<?php echo $row['id'];?>"class="text-info">View More</a><br>
                                   
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><buttom class="btn btn-outline-info mt-auto " name="add" type="submit">
                                    Add to cart</buttom></div>
                            </div>
                        </div>
                    </div>


                    <?php  } ?> 





                </div>
            </div>
        </section>
                  







            <!-- Vendor Start -->
    <div class="container-fluid py-3 px-1">
        <div class="row px-xl-5">
            <div class="col-12">
                <div class="owl-carousel vendor-carousel">
                    <div class="vendor-item border p-4">
                        <img src="img/sony.png" alt="" id="brand">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="img/toshiba.png" alt="" id="brand">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="img/apple.png" alt="" id="brand">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="img/deell.png" alt="" id="brand">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="img/hp.png" alt="" id="brand">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="img/lenovo.png" alt="" id="brand">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="img/samsung.png" alt="" id="brand">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="img/rayzer.png" alt="" id="brand">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="img/mi.png" alt="" id="brand">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->




    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-info font-weight-bold border border-white px-3 mr-1">TECHNO</span>Store</h1>
                </a>
                <p></p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-info mr-3"></i>305 Rozhallat, Slemani, Kurdistan, Iraq</p>
                <p class="mb-2"><i class="fa fa-envelope text-info mr-3"></i>zanyarosman91@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-info mr-3"></i>(+964)770 959 4323</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Products</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Laptop</a>
                            <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Mobile</a>
                            <a class="text-dark mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Tablet</a>
                            <a class="text-dark mb-2" href="checkout.html"><i class="fa fa-angle-right mr-2"></i>TV</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    
</body>
</html>