<?php include 'header.php'; ?>

<!-- Large Button Start -->
<div class="large-btn">
                    <div class="content-inner">
                        <a class="btn" href="#"><i class="fa fa-download"></i>Resume</a>
                        <a class="btn" href="#contact"><i class="fa fa-hands-helping"></i>Hire Me</a>
                    </div>
                </div>
                <!-- Large Button End -->
                
                <!-- About Start -->
                <div class="about" id="about">
                    <div class="content-inner">
                        <div class="content-header">
                            <?php 
                            $sql = $db->link->query("SELECT * FROM about_us WHERE `id`=1");
                            
                            if($sql)
                            {
                                $showdata = $sql->fetch_assoc();
                            }
                            ?>
                            <h2>About Me</h2>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6 col-lg-5">
                                <img src="../backend/asset/img/about_us/<?php print $showdata['image']; ?>" alt="Image">
                            </div>
                            <div class="col-md-6 col-lg-7">
                                <p>
                                    <?php echo $showdata['description']; ?>
                                </p>
                                <a class="btn" href="#contact">Hire Me</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="skills">
                                    <div class="skill-name">
                                        <p>HTML</p><p>95%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="skill-name">
                                        <p>CSS</p><p>70%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skills">
                                    <div class="skill-name">
                                        <p>PHP</p><p>60%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="skill-name">
                                        <p>LARAVEL</p><p>01%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="01" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About End -->
                
                <!-- Education Start -->
                <div class="education" id="education">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>Education</h2>
                        </div>
                        <div class="row align-items-center">
                            <?php
                            $sql = $db->link->query("SELECT * FROM `education` LIMIT 4");
                            if($sql)
                            {
                                while ($showdata = $sql->fetch_array())
                                {
                                    ?>
                                    <div class="col-md-6">
                                        <div class="edu-col">
                                            <span><?php echo $showdata['from']; ?> <i>to</i> <?php echo $showdata['to']; ?></span>
                                            <h3><?php echo $showdata['degree']; ?></h3>
                                            <p><?php echo $showdata['description']; ?></p>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }

                            ?>
                        </div>
                    </div>
                </div>
                <!-- Education Start -->
                
                <!-- Experience Start -->
                <div class="experience" id="experience">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>Experience</h2>
                        </div>
                        <div class="row align-items-center">
                            <?php
                            $sql = $db->link->query("SELECT * FROM `experience` LIMIT 4");
                            if($sql)
                            {
                                while ($showdata = $sql->fetch_array())
                                {
                                    ?>
                                    <div class="col-md-6">
                                        <div class="exp-col">
                                            <span><?php echo $showdata['from']; ?> <i>to</i> <?php echo $showdata['to']; ?></span>
                                            <h3><?php echo $showdata['company']; ?></h3>
                                            <h4><?php echo $showdata['location']; ?></h4>
                                            <h5><?php echo $showdata['title']; ?></h5>
                                            <p><?php echo $showdata['description']; ?></p>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }

                            ?>
                        </div>
                    </div>
                </div>
                <!-- Experience Start -->
                
                <!-- Service Start -->
                <div class="service" id="service">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>Service</h2>
                        </div>
                        <div class="row align-items-center">
                            <?php
                            $sql = $db->link->query("SELECT * FROM `service` LIMIT 4");
                            if($sql)
                            {
                                while ($showdata = $sql->fetch_array())
                                {
                                    ?>
                                    <div class="col-md-6">
                                        <div class="srv-col">
                                            <i class="<?php echo $showdata['icon']; ?>"></i>
                                            <h3><?php echo $showdata['title']; ?></h3>
                                            <p><?php echo $showdata['description']; ?></p>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }

                            ?>
                        </div>
                    </div>
                </div>
                <!-- Service Start -->
                
                <!-- Portfolio Start -->
                <div class="portfolio" id="portfolio">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>Portfolio</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <ul id="portfolio-flters">
                                    <li data-filter="*" class="filter-active">All</li>
                                    <?php
                                    $sql = $db->link->query("SELECT * FROM `add_topic`");
                                    if($sql)
                                    {
                                        while ($showdata = $sql->fetch_assoc())
                                        {
                                            ?>

                                    <li data-filter=".<?php echo $showdata['id']; ?>"><?php echo $showdata['topics']; ?></li>
                                    <?php
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="row portfolio-container">
                            <?php 
                            $sql = $db->link->query("SELECT portfolio.*,add_topic.topics FROM `portfolio` INNER JOIN `add_topic` ON portfolio.topic=add_topic.id ORDER BY `id` DESC");
                            if($sql)
                            {
                                while($showdata = $sql->fetch_assoc())
                                {
                                    $showtopic = $db->link->query("SELECT * FROM `add_topic` WHERE `id`='{$showdata['topic']}'");
                                    if($showtopic)
                                    {
                                        $showtag = $showtopic->fetch_assoc();
                                    }
                                    ?>
                            
                            <div class="col-lg-4 col-md-6 portfolio-item <?php echo $showtag['id']; ?>">
                                <div class="portfolio-wrap">
                                    <figure>
                                        <img src="../backend/asset/img/portfolio/<?php print $showdata['image']; ?>" class="img-fluid" alt="">
                                        <a href="../backend/asset/img/portfolio/<?php print $showdata['image']; ?>" data-lightbox="portfolio" data-title="Project Name" class="link-preview" title="Preview"><i class="fa fa-eye"></i></a>
                                        <a href="#" class="link-details" title="More Details"><i class="fa fa-link"></i></a>
                                        <a class="portfolio-title" href="#"><?php print $showdata['project_name']; ?> <span><?php print $showdata['topics']; ?></span></a>
                                    </figure>
                                </div>
                            </div>
                            <?php 
                            }
                        }
                        ?>

                        </div>
                    </div>
                </div>
                <!-- Portfolio Start -->
                
                <!-- Review Start -->
                <!-- <div class="review" id="review">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>Review</h2>
                        </div>
                        <div class="row align-items-center review-slider">
                            <div class="col-md-12">
                                <div class="review-slider-item">
                                    <div class="review-text">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci. Donec molestie velit id libero blandit, quis suscipit urna suscipit. Donec aliquet erat eu lacinia iaculis. Ut tempor tellus eu sem pharetra feugiat.
                                        </p>
                                    </div>
                                    <div class="review-img">
                                        <img src="../assets/img/review-1.jpg" alt="Image">
                                        <div class="review-name">
                                            <h3>Client Name</h3>
                                            <p>Profession</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="review-slider-item">
                                    <div class="review-text">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci. Donec molestie velit id libero blandit, quis suscipit urna suscipit. Donec aliquet erat eu lacinia iaculis. Ut tempor tellus eu sem pharetra feugiat.
                                        </p>
                                    </div>
                                    <div class="review-img">
                                        <img src="../assets/img/review-2.jpg" alt="Image">
                                        <div class="review-name">
                                            <h3>Client Name</h3>
                                            <p>Profession</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="review-slider-item">
                                    <div class="review-text">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci. Donec molestie velit id libero blandit, quis suscipit urna suscipit. Donec aliquet erat eu lacinia iaculis. Ut tempor tellus eu sem pharetra feugiat.
                                        </p>
                                    </div>
                                    <div class="review-img">
                                        <img src="../assets/img/review-3.jpg" alt="Image">
                                        <div class="review-name">
                                            <h3>Client Name</h3>
                                            <p>Profession</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- Review End -->
                
                <!-- Contact Start -->
                <div class="contact" id="contact">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>Contact</h2>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="contact-info">
                                    <?php 
                                    $sql = $db->link->query("SELECT * FROM profile_information WHERE `id`=1");
                                    if($sql)
                                    {
                                        $showdata = $sql->fetch_assoc();
                                    }
                                    ?>
                                    <p><i class="fa fa-tag"></i><?php echo $showdata['title']; ?></p>
                                    <p><i class="fa fa-envelope"></i><?php echo $showdata['email']; ?></p>
                                    <p><i class="fa fa-phone"></i><?php echo $showdata['phone']; ?></p>
                                    <p><i class="fa fa-map-marker"></i><?php echo $showdata['address']; ?></p>
                                    <div class="social">
                                        <a class="btn" href="<?php echo $showdata['facebook']; ?>"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn" href="<?php echo $showdata['twitter']; ?>"><i class="fab fa-twitter"></i></a>
                                        <a class="btn" href="<?php echo $showdata['instagram']; ?>"><i class="fab fa-instagram"></i></a>
                                        <a class="btn" href="<?php echo $showdata['discord']; ?>"><i class="fab fa-discord"></i></a>
                                        <a class="btn" href="<?php echo $showdata['linkedin']; ?>"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form">
                                        <?php
                                        if(isset($_POST['save']))
                                        {
                                            $name = $_POST['name'];
                                            $mail = $_POST['mail'];
                                            $subject = $_POST['subject'];
                                            $review = $_POST['review'];

                                            $db->insert('review',['name'=>$name,'mail'=>$mail,'subject'=>$subject,'review'=>$review]);
                                        }
                                           
                                        ?>
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <input type="text" name="name" class="form-control" placeholder="Your Name" />
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="email" name="mail" class="form-control" placeholder="Your Email" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="subject" class="form-control" placeholder="Subject" />
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" name="review" rows="5" placeholder="Review"></textarea>
                                        </div>
                                        <div><button class="btn" name="save" type="submit">Send Review</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contact End -->

<?php include 'footer.php'; ?>