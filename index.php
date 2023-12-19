<?php require "config/config.php"; ?>
<?php require "libs/App.php"; ?>
<?php require "includes/header.php"; ?>
<?php 


    $query = "SELECT * FROM foods WHERE meal_id=1";
    $app = new App;
    $meals_1 = $app->selectAll($query);


    $query = "SELECT * FROM foods WHERE meal_id=2";
    $app = new App;
    $meals_2 = $app->selectAll($query);

    $query = "SELECT * FROM foods WHERE meal_id=3";
    $app = new App;
    $meals_3 = $app->selectAll($query);


    $query = "SELECT * FROM reviews";
    $app = new App;
    $reviews = $app->selectAll($query);

?>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">Enjoy Our Night </h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">ยินดีต้อนรับทุกท่านเข้าสู่ Space Bar ร้านเหล้าแนวใหม่ที่จะให้ทุกท่าน ร่วมกันเฟ้นหา ค็อกเทลที่อร่อยที่สุดเพื่อเสริฟให้ท่านบอสเหมียวลึกลับ!!!</p>
                            <a href="<?php echo APPURL; ?>/booking.php" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A Table</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="img\ferryrotate.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                
                                <h5>Spacial Drink</h5>
                                <p>Mee drink hai choose mai sum khrai</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                
                                <h5>Happy hour</h5>
                                <p>Mee kwam suk nai took took hour</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                
                                <h5>concert Every Friday</h5>
                                <p>Wan suk ja tong mai ngao </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                
                                <h5>Hank out </h5>
                                <p>pob pa phu kon dai ta lod wae la tee want</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img\cocktail1.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img\cocktail2.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img\cocktail3.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img\cocktail4.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                        <h1 class="mb-4">Welcome to our space </h1>
                        <p class="mb-4">จุดเริ่มต้นของ Space Bar เกิดมาจากบอสเหมียวลึกลับ ที่อยู่ดีๆก็เกิดอาการเบื่อเครื่องดื่มทั้งหลายบนดาวเหมียวขึ้นมา!!!</p>
                        <p class="mb-4">Ferry จึงได้รับภารกิจให้บินมายังโลกมนุษย์ เพื่อเปิดร้าน Space Barขึ้นมา เพื่อเฟ้นหาค็อกเทลที่อร่อยที่สุดและนำไปเสิร์ฟให้บอสเหมียวลึกลับที่กำลังนั่งเบื่อหน่ายอยู่ที่ดาวเหมียวนั่นเองงง</p>
                        
                            
                        <a href="<?php echo APPURL; ?>/about.php" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">READ MORE</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Our menu </h5>
                    <h1 class="mb-5">Most Popular Items</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                
                                <div class="ps-3">
                                    <small class="text-body">Popular</small>
                                    <h6 class="mt-n1 mb-0">Appetizer</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                
                                <div class="ps-3">
                                    <small class="text-body">Special</small>
                                    <h6 class="mt-n1 mb-0">Drink</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                                
                                <div class="ps-3">
                                    <small class="text-body">Lovely</small>
                                    <h6 class="mt-n1 mb-0">dessert</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <?php foreach($meals_1 as $meal_1) : ?>
                                    <div class="col-lg-6">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="<?php echo APPIMAGES; ?>/<?php echo $meal_1->image; ?>" alt="" style="width: 80px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span><?php echo $meal_1->name; ?></span>
                                                    <span class="text-primary">$<?php echo $meal_1->price; ?></span>
                                                </h5>
                                                <small class="fst-italic"><?php echo $meal_1->description; ?></small>
                                                <a type="button" href="<?php echo APPURL; ?>/food/add-cart.php?id=<?php echo $meal_1->id; ?>" class="btn btn-primary py-2 top-0 end-0 mt-2 me-2">view</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                             
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                            <?php foreach($meals_2 as $meal_2) : ?>

                                <div class="col-lg-6">
                                        <div class="d-flex align-items-center">
                                                <img class="flex-shrink-0 img-fluid rounded" src="<?php echo APPIMAGES; ?>/<?php echo $meal_2->image; ?>" alt="" style="width: 80px;">
                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                        <span><?php echo $meal_2->name; ?></span>
                                                        <span class="text-primary">$<?php echo $meal_2->price; ?></span>
                                                    </h5>
                                                    <small class="fst-italic"><?php echo $meal_2->description; ?></small>
                                                    <a type="button" href="<?php echo APPURL; ?>/food/add-cart.php?id=<?php echo $meal_2->id; ?>" class="btn btn-primary py-2 top-0 end-0 mt-2 me-2">view</a>
                                                </div>
                                        </div>
                                </div>
                                <?php endforeach; ?>
                            </div>    
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <?php foreach($meals_3 as $meal_3) : ?>

                                        <div class="col-lg-6">
                                                <div class="d-flex align-items-center">
                                                        <img class="flex-shrink-0 img-fluid rounded" src="<?php echo APPIMAGES; ?>/<?php echo $meal_3->image; ?>" alt="" style="width: 80px;">
                                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                                <span><?php echo $meal_3->name; ?></span>
                                                                <span class="text-primary">$<?php echo $meal_3->price; ?></span>
                                                            </h5>
                                                            <small class="fst-italic"><?php echo $meal_3->description; ?></small>
                                                            <a type="button" href="<?php echo APPURL; ?>/food/add-cart.php?id=<?php echo $meal_3->id; ?>" class="btn btn-primary py-2 top-0 end-0 mt-2 me-2">view</a>
                                                        </div>
                                                </div>
                                        </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->


        <!-- Reservation Start -->
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                    <img class="img-fluid" src="img\star.png" alt="">
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>
                        <h1 class="text-white mb-4">Book A Table Online</h1>
                        <form method="POST" action="booking-table.php">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input name="email" type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input name="date_booking" type="text" class="form-control datetimepicker-input" id="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                        <label for="datetime">Date & Time</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select name="num_people" class="form-select" id="select1">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                          <option value="6">6</option>
                                          <option value="7">7</option>
                                          <option value="8">8</option>
                                          <option value="9">9</option>
                                          <option value="10">10</option>
                                        </select>
                                        <label for="select1">No Of People</label>
                                      </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea name="special_request" class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                        <label for="message">Special Request</label>
                                    </div>
                                </div>
                                <?php if(isset($_SESSION['user_id'])) : ?>
                                    <div class="col-12">
                                        <button name="submit" class="btn btn-primary w-100 py-3" type="submit">Book Now</button>
                                    </div>
                                <?php else : ?>
                                    <p>login to book a table</p>
                                <?php endif; ?>        
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Reservation Start -->


        <!-- Team Start -->
        <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
                    <h1 class="mb-5"> Bartender </h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img\Yanisa.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Yanisa</h5>
                            <small>ลูกจ้างแทนหนึ่ง</small>
                            <div >
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img\Ganyawee.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Ganyawee</h5>
                            <small>ลูกจ้างนัมเบอร์ 2 </small>
                            <div class="d-flex justify-content-center mt-3">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img\Sarita.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Sarita</h5>
                            <small>มัมหมีferry</small>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img\Ferry.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Ferry</h5>
                            <small> CEO Ferry </small>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
                    <h1 class="mb-5">Our Clients Say!!!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <?php foreach($reviews as $review) : ?>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>
                            <?php echo $review->review; ?>
                        </p>
                        <div class="d-flex align-items-center">
                            <!-- <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" style="width: 50px; height: 50px;"> -->
                            <div class="ps-3">
                                <h5 class="mb-1"><?php echo $review->username; ?></h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        

 <?php require "includes/footer.php"; ?>    