<?php
  require_once 'connetion.php';
  $sql="select * from gallery ";
  $show= mysqli_query($conn,$sql) or die(mysql_error());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AKF Advertisement</title>
    <link rel="stylesheet" href="AKF.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
    <div class="update_form" id="update">
        <div class="update_box">
            <div class="update_card">
                <form method="POST" action="update.php" encty>
                    <fieldset>
                       <legend>update</legend>
                       <p>User Name:</p>
                       <input type="text" name="uname" value="" required>
                       <p>password:</p>
                       <input type="password" name="upass" value="" required>
                       <p>number:</p>
                       <input type="text" name="no" value="" required>
                       <p>Choose image:</p>
                       <input type="file" name="img_src" value="" required>
                       <p>Product Name:</p>
                       <input type="text" name="pname" value="" required>
                        <p>Description</p>
                       <textarea name="comment" id="textarea"  class="area"required  ></textarea>
                      <div class="btn">
                       <input type="submit" value="Submit">
                       <input type="reset" value="Cancle">
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <header>
        <div class="logo">
            <p>AK<span>F</span><strong>&nbsp;Advertisment</strong></p>
        </div>
        
        <nav class="navbar" id="navbar">
            <a href="#home">Home</a>
            <a href="#gallery">Gallery</a>
            <a href="#about">About</a>
            <a href="#service">Service</a>
            <a href="#review">Review</a>
            <a href="#contact">Contact</a>
            <a href="" id="close">X</a>
        </nav>
        
        <div class="icons">
            <i id="search" class="fa-solid fa-search-location"></i>
            <i id="user" class="fa-solid fa-user"></i>
        </div>
       <div id="mobile">
        <i id="bars" class="fa-solid fa-bars"></i>
       </div>
    </header>
    
    <section>
        <div class="home" id="home">
            <div class="home_content">
                <div class="home_text">
                    <h2>AKF<br><span>Advertisement</span></h2>
                    <p>
                        AKF advertising is full-Service advertising Agency performs a varity of client services including digital,
                        traditional, social media, radio and paint advertising campanigns.
                        The agency is established in Adiss Abeba Administration aimed to trace the opportunity that the absebce of 
                        well-structured advertising Company in the area and several trading companies in need to get advertising
                        services in Adiss Abeba city.Since AKF advertising is organized by kepping experienced workers with high work commitments and high qualified
                        machineries. our companies play a crucial role in helping businesses promote their products, services, or brands
                        to a target audience effectively.
                        The primary objective of our advertisement company is to develop creative and impactful 
                        advertising strategies that resonate with the target market and achieve the client's marketing goals. They work closely with their clients 
                        to understand their business objectives, target audience.
                    </p>
                </div>
                
                <div class="home_image">
                    <img src="akf image/-5902245050480442389_121.jpg" alt="Company Logo">
                </div>  

            </div>
             
            <div class="social_icons">
                <a href="https://facebook.com"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://t.me/AKFADVERTISE"><i class="fa-brands fa-telegram"></i></a>
                <a href="https://instagram.com/akfadvertising?igshid=OGQ5ZDc2ODk2ZA=="><i class="fa-brands fa-instagram"></i></a>
                <a href="https://tiktok.com"><i class="fa-brands fa-tiktok"></i></a>
                <a href="https://linkedin.com"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="https://mailto:Kiduskassahun27th@gmail.com"><i class="fa solid fa-envelope"></i></a>
                
            </div>
            <div class="button">
                    <a href="#">Advert with us</a>
                    <i class="fa solid fa-circle-chevron-right"></i>
            </div>
            <div id="mobile_icon">
                <a href="https://facebook.com"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://t.me/AKFADVERTISE"><i class="fa-brands fa-telegram"></i></a>
                <a href="https://instagram.com/akfadvertising?igshid=OGQ5ZDc2ODk2ZA=="><i class="fa-brands fa-instagram"></i></a>
                <a href="https://tiktok.com"><i class="fa-brands fa-tiktok"></i></a>
            </div>
           
        </div>
       <div class="gallery" id="gallery">
          <h1>Our<span>Gallery</span></h1>
          
           <div class="gallery_box">
               <?php
                 
                 while($row=mysqli_fetch_array($show)){
               ?>
               <div class="gallery_card">
                    <div class="gallery_image" >
                        <img src="<?php echo $row['img_src'];?> " alt="image is not found" id="image1">
                    </div>
                    <div class="gallery_info">
                        <h2><?php echo $row['name'];?></h2>
                        <p><?php echo $row['description'];?> </p>
                    </div>
                    <a href="#" class="btn" id="btn">Contact Us</a>
               </div>
               <?php
                 }
               ?>
            </div> 
        </div>

       <!--about us -->

       <div class="about" id="about">
            <h2>
                About<span>Us</span>
            </h2>
            
                <div class="about_main">
                    <div class="about_image">
                        <div class="about_small_image">
                            <img src="IMG_20230810_184302_979.jpg" class="small_card" alt="image is not found" onclick="functio(this)">
                            <img src="akf image/IMG_20230810_184213_051.jpg" class="small_card" alt="image is not found" onclick="functio(this)">
                            <img src="akf image/IMG_20230810_184302_979.jpg" class="small_card" alt="image is not found" onclick="functio(this)">
                            <img src="akf image/IMG_20230810_184303_459.jpg" class="small_card" alt="image is not found" onclick="functio(this)">
                         
                        </div>

                        <div class="about_continer_image">
                            <img src="akf image/-5902245050480442389_121.jpg" id="imagebox"alt="image is not found"> 
                        </div>
                    </div>

                    <div class="about_text">
                        <p>When you choose our advertisement company, you can expect a perfect blend of affordability and quality. 
                            We are dedicated to providing exceptional value for your investment, helping you achieve your advertising goals while staying within your budget. 
                            Let us help you create advertising campaigns that make a lasting impact and drive business growth.
                            At our advertisement company, we pride ourselves on delivering exceptional quality while offering competitive prices. We understand that businesses need effective advertising 
                            solutions that fit within their budget constraints without compromising on the quality of the services they receive.
                            We understand that the success of your advertising campaigns depends on the quality of the strategies, messages, 
                            and creative assets we provide. Therefore, we invest time and effort into thorough research, strategic planning,
                             and creative development to ensure that your advertising efforts stand out and resonate with your target audience

                        </p>

                             <div class="btn">
                                <a href="https://t.me/AKFADVERTISE">Advert<span>&nbsp;&nbsp;Now</span></a>
                             </div>  
                    </div>
                    
                </div> 
               </div>
            
       <script>
        function functio(small){
            var full=document.getElementById("imagebox");
            full.src=small.src;
            
         
        }
       </script>

       <!--Service-->
       <div class="service" id="service">
          <h1>Our&nbsp;&nbsp;<span>Service</span></h1>
              <div class="service_box">
                <div class="service_card">
                    <div class="service_image">
                         <img src="akf image/IMG_20230810_184303_068.jpg" alt="image is not found">
                    </div>
                    <div class="service_text">
                        <h2 class="name">Fast Delivery</h2>
                    </div>
                    <div class="service_social">
                        <a href="https://facebook.com"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://t.me/AKFADVERTISE"><i class="fa-brands fa-telegram"></i></a>
                        <a href="https://instagram.com/akfadvertising?igshid=OGQ5ZDc2ODk2ZA=="><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://mailto:Kiduskassahun27th@gmail.com"><i class="fa solid fa-envelope"></i></a>
                        <a href="https://tiktok.com"><i class="fa-brands fa-tiktok"></i></a>
                    </div>
                    <div class="service_contact">
                        <p>Click here</p>
                        <div class="service_logo">
                            <i class="fa-solid fa-truck-fast"></i><strong>+251 9447585</strong>
                            <hr>
                        </div>
                    </div>
    
                </div>
               
                <div class="service_card">
                    <div class="service_image">
                         <img src="akf image/IMG_20230810_184303_274.jpg" alt="image is not found">
                    </div>
                    <div class="service_text">
                        <h2 class="name">24 X 7 support</h2>
                    </div>
                    <div class="service_social">
                        <a href="https://facebook.com"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://t.me/AKFADVERTISE"><i class="fa-brands fa-telegram"></i></a>
                        <a href="https://instagram.com/akfadvertising?igshid=OGQ5ZDc2ODk2ZA=="><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://mailto:Kiduskassahun27th@gmail.com"><i class="fa solid fa-envelope"></i></a>
                        <a href="https://tiktok.com"><i class="fa-brands fa-tiktok"></i></a>
                    </div>

                    <div class="service_contact">
                        <p>Click here</p>
                        <div class="service_logo">
                            <i class="fa-solid fa-headset"></i><strong>Full time support</strong>
                        </div>
                    </div>
    
                </div>

                <div class="service_card">
                    <div class="service_image">
                         <img src="akf image/IMG_20230810_184302_977.jpg" alt="image is not found">
                    </div>
                    <div class="service_text">
                        <h2 class="name">1 Month Replecment</h2>
                    </div>
                    <div class="service_social">
                        <a href="https://facebook.com"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://t.me/AKFADVERTISE"><i class="fa-brands fa-telegram"></i></a>
                        <a href="https://instagram.com/akfadvertising?igshid=OGQ5ZDc2ODk2ZA=="><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://mailto:Kiduskassahun27th@gmail.com"><i class="fa solid fa-envelope"></i></a>
                        <a href="https://tiktok.com"><i class="fa-brands fa-tiktok"></i></a>
                    </div>

                    <div class="service_contact">
                        <p>Click here</p>
                        <div class="service_logo">
                            <i class="fa-solid fa-rotate-left"></i><strong>One&nbsp;Month&nbsp;guarantee</strong>
                        </div>
                    </div>
                </div>

                <div class="service_card">
                    <div class="service_image">
                         <img src="akf image/IMG_20230810_184303_459.jpg" alt="image is not found">
                    </div>
                    <div class="service_text">
                        <h2 class="name">For Gift</h2>
                    </div>
                    <div class="service_social">
                        <a href="https://facebook.com"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://t.me/AKFADVERTISE"><i class="fa-brands fa-telegram"></i></a>
                        <a href="https://instagram.com/akfadvertising?igshid=OGQ5ZDc2ODk2ZA=="><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://mailto:Kiduskassahun27th@gmail.com"><i class="fa solid fa-envelope"></i></a>
                        <a href="https://tiktok.com"><i class="fa-brands fa-tiktok"></i></a>
                    </div>

                    <div class="service_contact">
                        <p>Click here</p>
                        <div class="service_logo">
                            <i class="fa-solid fa-truck-fast"></i><strong>One&nbsp;Month&nbsp;guarantee</strong>
                        </div>
                    </div>
                </div>

                <div class="service_card">
                    <div class="service_image">
                         <img src="akf image/-5920434404482726635_121.jpg" alt="image is not found">
                    </div>
                    <div class="service_text">
                        <h2 class="name">For Unique Advertisment</h2>
                    </div>
                    <div class="service_social">
                        <a href="https://facebook.com"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://t.me/AKFADVERTISE"><i class="fa-brands fa-telegram"></i></a>
                        <a href="https://instagram.com/akfadvertising?igshid=OGQ5ZDc2ODk2ZA=="><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://mailto:Kiduskassahun27th@gmail.com"><i class="fa solid fa-envelope"></i></a>
                        <a href="https://tiktok.com"><i class="fa-brands fa-tiktok"></i></a>
                    </div>

                    <div class="service_contact">
                        <p>Click here</p>
                        <div class="service_logo">
                            <i class="fa-solid fa-truck-fast"></i><strong>One&nbsp;Month&nbsp;guarantee</strong>
                        </div>
                    </div>
                </div>

                <div class="service_card">
                    <div class="service_image">
                         <img src="akf image/-5902245050480442389_121.jpg" alt="image is not found">
                    </div>
                    <div class="service_text">
                        <h2 class="name">Print Advertising</h2>
                    </div>
                    <div class="service_social">
                        <a href="https://facebook.com"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://t.me/AKFADVERTISE"><i class="fa-brands fa-telegram"></i></a>
                        <a href="https://instagram.com/akfadvertising?igshid=OGQ5ZDc2ODk2ZA=="><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://mailto:Kiduskassahun27th@gmail.com"><i class="fa solid fa-envelope"></i></a>
                        <a href="https://tiktok.com"><i class="fa-brands fa-tiktok"></i></a>
                    </div>

                    <div class="service_contact">
                        <p>Click here</p>
                        <div class="service_logo">
                            <i class="fa-solid fa-truck-fast"></i><strong>&nbsp;Designing&nbsp;advertisements in paper,wood and other print publications.&nbsp;&nbsp;</strong>
                        </div>
                    </div>
                </div>
              </div>
              <div class="service_last_text">
                <p>You&nbsp;can&nbsp;Grow&nbsp;Your&nbsp;Buisness&nbsp;With&nbsp;Us&nbsp;Come&nbsp;and&nbsp;Advert<br>With&nbsp;The&nbsp;Lowest&nbsp;Price&nbsp;And<strong>click</strong> Here To Contact</p>
              </div>
               <div class="service_last_box">
                  <div class="service_last_card">
                     <div class="service_last_image">
                        <img src="akf image/20230814_154008.jpg" alt="image is not found">
                     </div>

                     <div class="service_last_icon">
                        <a href="https://facebook.com"><i class="fa-brands fa-facebook-f"></i></a>
                     </div>
                     <div class="service_last_icon_name">
                        <p>FaceBook</p>
                     </div>
                  </div>

                  <div class="service_last_card">
                    <div class="service_last_image">
                       <img src="akf image/20230814_154008.jpg" alt="image is not found">
                    </div>

                    <div class="service_last_icon">
                       <a href="https://instagram.com/akfadvertising?igshid=OGQ5ZDc2ODk2ZA=="><i class="fa-brands fa-instagram"></i></a>
                    </div>
                    <div class="service_last_icon_name">
                       <p>Instagram</p>
                    </div>
                 </div>

                 <div class="service_last_card">
                    <div class="service_last_image">
                       <img src="akf image/20230814_154008.jpg" alt="image is not found">
                    </div>

                    <div class="service_last_icon">
                       <a href="https://tiktok.com"><i class="fa-brands fa-tiktok"></i></a>
                    </div>
                    <div class="service_last_icon_name">
                       <p>TikTok</p>
                    </div>
                 </div>

                  <div class="service_last_card">
                     <div class="service_last_image">
                        <img src="akf image/20230814_154008.jpg" alt="image is not found">
                     </div>

                     <div class="service_last_icon">
                        <a href="https://t.me/AKFADVERTISE"><i class="fa-brands fa-telegram"></i></a>
                     </div>
                     <div class="service_last_icon_name">
                        <p>Telegram</p>
                     </div>
                  </div>
               </div>
       </div>
       
       <!--Review-->

       <div class="review" id="review">
           <h1>Customer&nbsp;<span>Review</span></h1>
             <div class="review_box">
                <div class="review_card">
                    <div class="card_top">
                        <div class="profile">
                            <div class="profile_image">
                               <img src="image\user.jfif">
                             </div>
                             <div class="name">
                                   <Strong class="email" name="email">Sami@gmail.com</Strong>
                                 <div class="like">
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-regular fa-star-half-stroke"></i>
                                     <i class="fa-regular fa-star-half-stroke"></i></i>
                                 </div>
                             </div>
                         </div> 
                     </div>
                     <div class="comment">
                          <p>
                           Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro ratione eaque distinctio exercitationem 
                           eum odit nisi autem architecto illo! Odit quia quis impedit explicabo. Quos asperiores sit reprehenderit harum quisquam.
                          </p>
                        </div>                
                 </div>
                 <div class="review_card">
                    <div class="card_top">
                        <div class="profile">
                            <div class="profile_image">
                               <img src="image\user.jfif">
                             </div>
                             <div class="name">
                                <Strong class="email" name="email">Sami@gmail.com</Strong>
                                 <div class="like">
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-regular fa-star-half-stroke"></i>
                                     <i class="fa-regular fa-star-half-stroke"></i></i>
                                 </div>
                             </div>
                         </div> 
                     </div>
                     <div class="comment">
                          <p>
                             this is test from the programmer
                          </p>
                     </div>                    
                 </div>
                 <div class="review_card">
                    <div class="card_top">
                        <div class="profile">
                            <div class="profile_image">
                               <img src="image\user.jfif">
                             </div>
                             <div class="name">
                                <Strong class="email" name="email">Sami@gmail.com</Strong>
                                 <div class="like">
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-regular fa-star-half-stroke"></i>
                                     <i class="fa-regular fa-star-half-stroke"></i></i>
                                 </div>
                             </div>
                         </div> 
                     </div>
                     <div class="comment">
                          <p>
                             this is test from the programmer
                          </p>
                     </div>
                 </div>
                 <div class="review_card">
                    <div class="card_top">
                        <div class="profile">
                            <div class="profile_image">
                               <img src="image\user.jfif">
                             </div>
                             <div class="name">
                                <Strong class="email" name="email">Sami@gmail.com</Strong>
                                 <div class="like">
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-regular fa-star-half-stroke"></i>
                                     <i class="fa-regular fa-star-half-stroke"></i></i>
                                 </div>
                             </div>
                         </div> 
                     </div>
                     <div class="comment">
                          <p>
                             this is test from the programmer
                          </p>
                        </div>                   
                 </div>
                 <div class="review_card">
                    <div class="card_top">
                        <div class="profile">
                            <div class="profile_image">
                               <img src="image\user.jfif">
                             </div>
                             <div class="name">
                                <Strong class="email" name="email">Sami@gmail.com</Strong>
                                 <div class="like">
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-regular fa-star-half-stroke"></i>
                                     <i class="fa-regular fa-star-half-stroke"></i></i>
                                 </div>
                             </div>
                         </div> 
                     </div>
                     <div class="comment">
                          <p>
                             this is test from the programmer
                          </p>
                     </div>        
                 </div>
                 <div class="review_card">
                    <div class="card_top">
                        <div class="profile">
                            <div class="profile_image">
                               <img src="image\user.jfif">
                             </div>
                             <div class="name">
                                <Strong class="email" name="email">Sami@gmail.com</Strong>
                                 <div class="like">
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-regular fa-star-half-stroke"></i>
                                     <i class="fa-regular fa-star-half-stroke"></i></i>
                                 </div>
                             </div>
                         </div> 
                     </div>
                     <div class="comment">
                          <p>   
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum numquam 
                             porro eius sapiente, nostrum distinctio esse laudantium perferendis possimus explicabo asperiores 
                             fuga rem eaque exercitationem mollitia facilis. Quos, provident enim?

                          </p>
                     </div>
                 </div>

                </div>
          <!--feedback-->
              <div class="feedback">
                <div class="feedback_main">
                    <h2>Give&nbsp;us<span>&nbsp;feedback</span></h2>
                    <div class="feedback_box">
                        <div class="feedback_card">
                              <div class="feedback_form">
                                <form method="POST" action="untitledakf.php">
                                   <fieldset>
                                      <legend>feedback</legend>
                                      <p>First Name:</p>
                                      <input type="text" name="fname" value="" required>
                                      <p>Last Name:</p>
                                      <input type="text" name="lname" value="" required>
                                      <p> Email:</p>
                                      <input type="email" name="uemail" value="" required>
                                      <p>Phone number:</p>
                                      <input type="number" name="uphone" value="" required>
                                      <p>Write YOur Comment</p>
                                      <textarea name="comment" id="textarea" required></textarea>
                                      <div class="btn">
                                        <input type="submit" value="Submit">
                                        <input type="reset" value="Cancle">
                                       </div>
                                   </fieldset>
                                </form>
                              </div>
                        </div>
                    </div>
                </div>
              </div>

       <!--footer-->
       <footer>
        <div class="contact" id="contact">
            <h1>Contact</h1>
        </div>
        <div class="footer_main">
            <div class="tag" id="contact">
                <h1>contact</h1>
                <a href="#"><i class="fa solid fa-house">&nbsp;Adiss Abeba/Kebena/aware/AKF advert</i></a>
                <a href=""><i class="fa solid fa-phone">&nbsp;+251 99 443 7585</i></a>
                <a href=""><i class="fa solid fa-phone">&nbsp;+251 94 306 7277</i></a>
                <a href="mailto:Kiduskassahun27th@gmail.com"><i class="fa solid fa-envelope">&nbsp;Kiduskassahun27th@gmail.com</i></a>
                <a href="mailto:Kiduskassahun27th@gmail.com"><i class="fa solid fa-envelope">&nbsp;zsami9017@gmail.com</i></a>
            </div>
            <div class="tag" id="shop">
                <h1>shop</h1>
                <p class="center">Kebena</p>
                <p class="center">Koteba</p>
                <p class="center">Returns</p>
                <p class="center">Payment Options</p>
            </div>
            <div class="tag" id="service">
                <h1>Our Service</h1>
                <p class="center">For gift</p>
                <p class="center">For office Decrotion</p>
                <p class="center">For product advertismsnet</p>
                <p class="center">With low price</p>
            </div>
            <div class="tag" id="follow">
                <h1>Follow Us</h1>
                <a href="https://facebook.com"><i class="fa-brands fa-facebook-f"></i><strong>&nbsp;Facebook</strong></a>
                <a href="mailto:Kiduskassahun27th@gmail.com"><i class="fa solid fa-envelope"></i><strong>&nbsp;Email</strong></a>
                <a href="https://instagram.com/akfadvertising?igshid=OGQ5ZDc2ODk2ZA=="> <i class="fa-brands fa-instagram"></i><strong>&nbsp;Instagram</strong</a>
                <a href="https://tiktok"> <i class="fa-brands fa-tiktok"></i><strong>&nbsp;TikTok</strong</a>
                <a href="https://t.me/AKFADVERTISE"> <i class="fa-brands fa-telegram"></i><strong>&nbsp;Telegram</strong</a>
            </div>
        </div>
     </footer>
    </section>
    <script src="akf.js"></script>
</body>
</html>