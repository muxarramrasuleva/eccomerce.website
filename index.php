<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nike - Just Do It</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="image/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    <section class="main__page">
        <nav>
            <div class="logo">
                <h1>Shoe<span>s</span></h1>
                <h2>Created by Mukharram Rasuleva</h2>
            </div>

            <ul>
                <li><a href="#Home">Home</a></li>
                <li><a href="products.html">Products</a></li>
                <li><a href="#About">About</a></li>
                <li><a href="#Review">Review</a></li>
                <li><a href="#Servises">Servises</a></li>
                <li><a href="./CRUDCompleto/signUP.php">Sign Up</a></li>
                <li><a href="./CRUDCompleto/login.php">Login</a></li>
            </ul>

        </nav>

        <div class="main" id="Home">
            <div class="main_content">
                <div class="main_text">
                    <h1>NIKE<br><span>Collection</span></h1>
                    <p>
                        Our mission is what drives us to do everything possible to expand human potential.
                        We do that by creating groundbreaking sport innovations, by making our products more sustainably, by building a creative and diverse global team and by making a positive impact in communities where we live and work.
                        Based in Beaverton, Oregon, NIKE, Inc. includes the Nike, Converse, Hurley, and Jordan brands.
                        
                    </p>
                </div>
                <div class="main_image">
                    <img src="image/shoes.png">
                </div>
            </div>
            <div class="social_icon">
            <a href="https://www.facebook.com/profile.php?id=100090133355916"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://twitter.com/Nike"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://www.instagram.com/nk_uzbn/?hl=en"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/nike/"><i class="fa-brands fa-linkedin-in"></i></a> 
            </div>
            <div class="button" >
                <a href="products.html">SHOP NOW</a>
                <i class="fa-solid fa-chevron-right"></i>
            </div>
        </div>

    </section>

    <!--About-->

    <div class="about" id="About">
        
        <h1>Web<span>About</span></h1>

        <div class="about_main">
            <div class="about_image">
                <div class="about_small_image">
                    <img src="image/red_shoes1.png" onclick="functio(this)">
                    <img src="image/red_shoes2.png" onclick="functio(this)">
                    <img src="image/red_shoes3.png" onclick="functio(this)">
                    <img src="image/red_shoes4.png" onclick="functio(this)">
                </div>

                <div class="image_contaner">
                    <img src="image/red_shoes1.png" id="imagebox">
                </div>

            </div>

            <div class="about_text">
                <h2 class="title">PRODUCT DETAILS</h2>
                <p>
                    Brand: NIKE <br>
                    Model: Nike Revolution 5 <br>
                    Color: BLACK/ANTHRACITE <br>
                    Shoe Width: Standard <br>
                    Shoe Shaft Style: Low Top <br>
                    Pattern: Solid <br>
                    Clousure: Lace Up <br>
                    Occasion: Activewear <br>
                    Lining Material: Fabric <br>
                    Year Manufactured: 2020 <br>
                    Department: Men <br>
                    Type: Athletic <br>
                    Style: Sneaker <br>
                    Outsole Material: Rubber <br>
                    Features: Breathable <br>
                    Season: Fall <br>
                    Performance/Activity: Gym & Training
                </p>
            </div>

        </div>

        <a href="products.html" class="about_btn">Shop Now</a>

        <script>
            function functio(small){
                var full = document.getElementById("imagebox")
                full.src = small.src
            }
        </script>
        
    </div>



    <!--Review-->

    <div class="review" id="Review">
        <h1>Customer's<span>review</span></h1>
        
        <div class="review_box">
            <div class="review_card">
                <div class="card_top">
                    <div class="profile">

                        <div class="profile_image">
                            <img src="image/girl_dp1.jpg">
                        </div>

                        <div class="name">
                            <strong>Ranidi Lochana</strong>

                            <div class="like">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="comment">
                    <p>
                        Nike’s commitment to constant innovation is evident, and it’s no wonder athletes around the world trust this brand for their record-breaking achievements. Highly recommended for anyone serious about running!
                    </p>
                </div>
            </div>   

            <div class="review_card">
                <div class="card_top">
                    <div class="profile">

                        <div class="profile_image">
                            <img src="image/man_dp1.jpg">
                        </div>

                        <div class="name">
                            <strong>Sayuru Tharanga</strong>

                            <div class="like">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="comment">
                    <p>
                        Nike’s latest running shoes have truly raised the bar. The comfort and support they provide have made my daily runs much more enjoyable. Plus, the sleek design gets plenty of compliments!
                    </p>
                </div>
            </div>   

            <div class="review_card">
                <div class="card_top">
                    <div class="profile">

                        <div class="profile_image">
                            <img src="image/man_dp2.jpg">
                        </div>

                        <div class="name">
                            <strong>Senuda Dilwan</strong>

                            <div class="like">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="comment">
                    <p>
                        I’m really impressed with the durability of these Nike shoes. After months of regular use, they still look and feel great. The quality craftsmanship is evident in every detail.
                    </p>
                </div>
            </div>   

        </div>

        <div class="review_box">
            <div class="review_card">
                <div class="card_top">
                    <div class="profile">

                        <div class="profile_image">
                            <img src="image/gir_dp3.jpg">
                        </div>

                        <div class="name">
                            <strong>Kaveesha Vidurangi</strong>

                            <div class="like">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="comment">
                    <p>
                        The innovative cushioning technology in Nike’s shoes is a game-changer. It provides the perfect balance of softness and responsiveness, making every step feel effortless.
                    </p>
                </div>
            </div>   

            <div class="review_card">
                <div class="card_top">
                    <div class="profile">

                        <div class="profile_image">
                            <img src="image/gir_dp2.jpg">
                        </div>

                        <div class="name">
                            <strong>John Deo</strong>

                            <div class="like">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="comment">
                    <p>
                        Nike has outdone themselves with this model. The breathability and lightweight feel are perfect for long-distance runs, and the traction is reliable on various surfaces.
                    </p>
                </div>
            </div>   

            <div class="review_card">
                <div class="card_top">
                    <div class="profile">

                        <div class="profile_image">
                            <img src="image/man_dp3.jpg">
                        </div>

                        <div class="name">
                            <strong>Charith Aruna</strong>

                            <div class="like">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="comment">
                    <p>
                        As a long-time Nike customer, I’m always excited to see their new releases. These shoes did not disappoint – the fit is snug yet comfortable, and the performance is top-notch.
                    </p>
                </div>
            </div>   

        </div>

    </div>


    <!--Services-->

    <div class="services" id="Servises">
        <h1>our<span>services</span></h1>

        <div class="services_cards">
            <div class="services_box">
                <i class="fa-solid fa-truck-fast"></i>
                <h3>Fast Delivery</h3>
                <p>
                    Fast Delivery.
            </p>
            </div>

            <div class="services_box">
                <i class="fa-solid fa-rotate-left"></i>
                <h3>10 Days Replacement</h3>
                <p>
                    Feel free to get back in 10 days.
            </p>
            </div>

            <div class="services_box">
                <i class="fa-solid fa-headset"></i>
                <h3>24 x 7 Support</h3>
                <p>
                    Helpful operators.
            </p>
            </div>
        </div>

    </div>
    
     <div class="login_form">
            </form>
        </div>


    <!--Footer-->

    <footer>
        <div class="footer_main">
            <div class="tag">
                <h1>Contact</h1>
                <a href="#"><i class="fa-solid fa-house"></i>UZB/Tashkent/Mirobod</a>
                <a href="+998901285882"><i class="fa-solid fa-phone"></i>+998 90 1285882</a>
                <a href="https://www.icloud.com/mail/"><i class="fa-solid fa-envelope"></i>muxarramrasuleva774@icloud.com</a>
            </div>

            <div class="tag">
                <h1>Get Help</h1>
                <a href="./faqs.html" class="center">FAQ</a>
                <a href="https://www.nike.com/ma/en/" class="center">Shipping</a>
                <a href="https://www.nike.com/help/a/how-to-return" class="center">Returns</a>
                <a href="https://www.affirm.com/shopping/stores/nike" class="center">Payment Options</a>
            </div>

            <div class="tag">
                <h1>Our Stores</h1>
                <a href="https://g.co/kgs/aoueSDb" class="center">Sri Lanka</a>
                <a href="https://g.co/kgs/GSNacdf" class="center">USA</a>
                <a href="https://g.co/kgs/uQ7Jo9L" class="center">India</a>
                <a href="https://g.co/kgs/TvcuxEV" class="center">Japan</a>
            </div>

            <div class="tag">
                <h1>Follw Us</h1>
                <div class="social_link">
                    <a href="https://www.facebook.com/profile.php?id=100090133355916"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://twitter.com/Nike"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://www.instagram.com/nk_uzbn/?hl=en"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/nike/"><i class="fa-brands fa-linkedin-in"></i></a>                    
                </div>
            </div>

            <div class="tag">
                <h1>Newsletter</h1>
                <div class="search_bar">
                    <input type="text" placeholder="You email id here">
                    <button type="submit">Subscribe</button>
                </div>
            </div>

        </div>
    </footer>

    <!--Link To JS-->
    <script src="/script.js"></script>
    <script src="product.js"></script>
</body>
</html>