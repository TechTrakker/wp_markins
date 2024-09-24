<?php
/*
Template Name: Contact Us
*/
get_header(); ?>

<!-- Header -->
<div id="header">
    <a href="<?php echo home_url(); ?>">Home</a>
    <h1>Contact Us</h1>
</div>

<!-- Main Content -->
<div id="main">
    <!-- Categories Section -->
    <div class="box">
        <h2>Categories</h2>
        <div>
            <!-- Surgical Instruments Section -->
            <div class="category">Surgical Instruments</div>
            <div class="dropdown" style="display: none;">
            <a href="#">Diagnostics</a>
                    <a href="#">Anesthesia</a>
                    <a href="#">Scalpels</a>
                    <a href="#">Scissors</a>
                    <a href="#">Forceps</a>
                    <a href="#">Retactors</a>
                    <a href="#">Probes</a>
                    <a href="#">Suture</a>
                    <a href="#">Dressings</a>
                    <a href="#">Bone surgery</a>
                    <a href="#">Cardiovascular Surgery</a>
                    <a href="#">Eurosurgery, Laminectomy</a>
                    <a href="#">Tracheotomy</a>
                    <a href="#">Dermatology</a>
            </div>

            <!-- Dental Instruments Section -->
            <div class="category">Dental Instruments</div>
            <div class="dropdown" style="display: none;">
            <a href="#">Extracting Forceps</a>
                    <a href="#">Root Elevators</a>
                    <a href="#">Explores, Delicate</a>
                    <a href="#">Amalgon Pistolen</a>
                    <a href="#">Scallers, Currets</a>
                    <a href="#">Micro Scalpels</a>
                    <a href="#"> Periodontal Surgery</a>
                    <a href="#">Mouth Mirrors</a>
                    <a href="#">Titan handels,Working tips</a>
                    <a href="#">Grinding Stones, Sterilizable</a>
                    <a href="#">Periodontal Instruments</a>
                    <a href="#">Bone Rongeurs</a>
                    <a href="#">Needle Holders</a>
                    <a href="#">Aspira-Plus, Water Syringe</a>
                    <a href="#"> Osteotomes & Mallets</a>
                    <a href="#">Reposition Forceps</a>

            <!-- Beauty Instruments Section -->
            <div class="category">Beauty Instruments</div>
            <div class="dropdown" style="display: none;">
            <a href="#">Barracuda Hair Scissors</a>
                    <a href="#">Super Cut Hair Scissors</a>
                    <a href="#"> Barber and Dressing</a>
                    <a href="#"> Professional Thinning</a>
                    <a href="#">Nail and Cuticle Scissor</a>
                    <a href="#">Fancy and Printed Scissors</a>
                    <a href="#">House Hold and Taylor</a>
                    <a href="#">Multi-Purpose Plastic</a>
                    <a href="#">Multi-Purpose Tweezers</a>
                    <a href="#">Face Black Head Cleaners</a>
                    <a href="#">Cuticle and Nail Pushers</a>
                    <a href="#">Nail Care Products</a>
                    <a href="#"> Cuticle Nail Nippers</a>
                    <a href="#"> Nail Cutters</a>
                    <a href="#">Acrylic Nail Cutters</a>
                    <a href="#">Shaving Razors & Belts</a>
                    <a href="#">Gift Packs</a>
            </div>
        </div>
    </div>

    <!-- Contact Details Section -->
    <div class="box">
        <h2>Contact Details</h2>
        <hr>
        <div class="contact-info">
            <p>Mark Instruments</p>
            <p><span class="fas fa-user"></span> Contact Person: <span style="color: red;">(C.E.O)</span></p>
            <p><span class="fas fa-phone"></span> Mobile: +92-4292513</p>
            <p><span class="fas fa-fax"></span> Fax: +92-52-4292519</p>
            <p><span class="fas fa-envelope"></span> Email: <a href="mailto:markinstrument@gmail.com" style="text-decoration: none;">markinstrument@gmail.com</a></p>
        </div>
    </div>

    <!-- Feedback Form Section -->
    <div class="box">
        <h2>Feedback Form</h2>
        <hr>
        <form action="<?php echo admin_url('admin-post.php'); ?>" method="post">
            <input type="text" name="first-name" placeholder="First Name" required>
            <input type="text" name="last-name" placeholder="Last Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="tel" name="mobile" placeholder="Mobile" required>
            
            <!-- Extended Country List -->
            <select name="country" required>
                <option value="">Select Country</option>
                <!-- Add more options as needed -->
                <option value="Pakistan">Pakistan</option>
                <!-- More countries here -->
            </select>
            
            <textarea name="message" placeholder="Message" rows="5" required></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>
</div>

<!-- GOOGLE MAP -->
<div id="map-container">
    <iframe id="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3393.312109747973!2d74.52169851496156!3d32.49057430693226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391f29ed92b41799%3A0x269847b7cfcd631f!2sMudassar%20Shaheed%20Road%2C%20Muslim%20Town%2C%20Sialkot%2C%20Punjab%2051310%2C%20Pakistan!5e0!3m2!1sen!2sus!4v1694240723332!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <div id="zoom-controls">
        <button id="zoom-in">+</button>
        <button id="zoom-out">-</button>
    </div>
</div>

<!-- SUBSCRIPTIONS -->
<div class="main-container">
    <!-- Subscription Section -->
    <div class="subscription-section">
        <h2>SUBSCRIPTION</h2>
        <form>
            <input type="email" placeholder="Enter your email">
            <button type="submit">SUBSCRIBE</button>
        </form>
        <p>Stay Connected</p>
        <div class="social-icons">
            <a href="#" class="social-icon facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-icon instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" class="social-icon twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-icon pinterest"><i class="fab fa-pinterest-p"></i></a>
        </div>
    </div>

    <!-- News & Updates Section -->
    <div class="news-updates-section">
        <h2>News & Updates</h2>
        <div class="news-update">
            <h3 style="color: red;">New Web Site</h3>
            <p>2024-07-01</p>
            <p>Our New Web Site is Launched on 1st July 2024 with new Product Categories.</p>
        </div>
    </div>

    <!-- Tags Section -->
    <div class="tags-section">
        <h2>TAG</h2>
        <div class="tags">
            <a href="#">Foot Files</a>
            <a href="#">Abdominal Retractors</a>
            <a href="#">Tattoo & Marking Pliers</a>
            <a href="#">Hair Clippers</a>
            <a href="#">Mouth Gags</a>
            <a href="#">Dragon Handle</a>
            <a href="#">Shears Neurosurgery</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>
