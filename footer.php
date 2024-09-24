 <!-- Footer********************************************************************************** -->
    <!-- Footer Section -->
     <style>
        /* General Styles */
.footer-div {
    padding: 20px;
    text-align: center;
    background-color: #f8f9fa;
    border-radius: 10px;
}

.footer-title {
    font-size: 24px;
    color: #333;
    animation: fadeInTitle 1s ease-in-out;
}

.footer-line {
    width: 50%;
    margin: 10px auto;
    border: 1px solid #ccc;
}

.contact-info {
    font-size: 18px;
    color: #555;
    animation: fadeInInfo 1.2s ease-in-out;
}

.contact-info i {
    display: block;
    margin-bottom: 10px;
    animation: iconPulse 1.5s infinite;
}

/* Icon Animations */
@keyframes iconPulse {
    0% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.1);
    }
    100% {
        transform: scale(1);
    }
}

/* Title Animation */
@keyframes fadeInTitle {
    0% {
        opacity: 0;
        transform: translateY(-20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Info Text Animation */
@keyframes fadeInInfo {
    0% {
        opacity: 0;
        transform: translateX(-20px);
    }
    100% {
        opacity: 1;
        transform: translateX(0);
    }
}

/* Responsive Styles */
@media (max-width: 768px) {
    .footer-title {
        font-size: 20px;
    }
    
    .contact-info {
        font-size: 16px;
    }

    .footer-line {
        width: 70%;
    }
}

@media (max-width: 480px) {
    .footer-title {
        font-size: 18px;
    }
    
    .contact-info {
        font-size: 14px;
    }

    .footer-line {
        width: 90%;
    }
}

     </style>
    <footer id="footer-container">
        <!-- First Div -->
        <div class="footer-div" id="exporting-section">
            <h2 class="footer-title">We Are Exporting</h2>
            <hr class="footer-line">
            <ul class="footer-links">
                <li class="footer-link" id="surgical-link">Surgical Instruments</li>
                <li class="footer-link" id="dental-link">Dental Instruments</li>
                <li class="footer-link" id="beauty-link">Beauty Instruments</li>
            </ul>
        </div>

        <!-- Second Div -->
        <div class="footer-div" id="location-section">
            <h2 class="footer-title">Location Map</h2>
            <hr class="footer-line">
            <div id="google-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3383.7244187851636!2d74.39270591483697!3d31.525020881376263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391904b0c4c33377%3A0x29e36d4166d7623b!2sMudassar%20Shaheed%20Road%2C%20Sialkot%2C%20Pakistan!5e0!3m2!1sen!2s!4v1691688699895!5m2!1sen!2s"
                    width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

        <!-- Third Div -->
        <div class="footer-div" id="contact-section">
            <h2 class="footer-title">Contact Us</h2>
            <hr class="footer-line">
            <p class="contact-info">
                <i class="fas  " id="ic-on-1">Tel: +92-4292513</i> <br>
                <i class="fas  " id="ic-on-2">Fax: +92-52-4292519</i> 
                <i class="fas  " id="ic-on-3"> </i> Email: markinstrument@gmail.com
            </p>
        </div>

        <!-- New Fourth Div -->
        <div class="footer-div" id="additional-section">
            <h2 class="footer-title">About Our Company</h2>
            <hr class="footer-line">
            <p class="footer-content">
                We are committed to providing high-quality instruments that meet international standards. With years of
                experience in exporting surgical, dental, and beauty instruments, we aim to deliver the best to our
                clients worldwide.
            </p>
        </div>
    </footer>

    <!-- Footer Bottom Line -->
    <hr id="footer-bottom-line">
    <!-- CopyRights********************************************************* -->
    <!-- Copyright Section -->
    <div id="copyright-footer">
        <p>Copyright &copy; 2012-2024 All Rights Reserved || <span id="brand-name">Mark Instruments</span></p>
    </div>

    <!-- JavaScript Linkages ***************************************** -->
    <?php wp_footer(); ?>
</body>

</html>
