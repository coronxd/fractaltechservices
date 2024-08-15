<?php
require('client.inc.php');

require_once INCLUDE_DIR . 'class.page.php';

$section = 'home';
include 'include\client\header.php';
?>
   <link rel="stylesheet" type="text/css" href="styles/about.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
<div class="about-container">
    <div class="section mission" data-aos="flip-right">
        <h2>About Us</h2>
        <p>Welcome to Fractal Tech Services, where innovation meets creativity. We are dedicated to providing exceptional services in web development, app development, video editing, and photo editing, all with a focus on 3D technology.</p>
    </div>
    <div class="section mission" data-aos="flip-right">
        <h3>Our Mission</h3>
        <p>At Fractal Tech Services, our mission is to empower businesses and individuals by delivering cutting-edge digital solutions that enhance their online presence and visual storytelling. We strive to push the boundaries of technology and creativity to offer our clients unparalleled service quality. Our focus on 3D technology allows us to provide unique and immersive experiences that set our clients apart in the digital landscape.</p>
    </div>
    <div class="section services">
        <h3>Our Services</h3>
        <div class="service-about" data-aos="flip-right">
            <img src="images/astro-web-head.gif" alt="Web Development">
            <div class="service-content">
                <h4>Web Development</h4>
                <p>Creating responsive, user-friendly, and visually appealing websites that stand out. Our team uses the latest technologies to ensure your site is both functional and beautiful. We focus on performance, security, and user experience to deliver websites that not only look great but also drive business growth.</p>
            </div>
        </div>
        <div class="service-about" data-aos="flip-right">
            <img src="images/app-development.jpg" alt="App Development">
            <div class="service-content">
                <h4>App Development</h4>
                <p>Developing innovative and functional mobile applications to meet your business needs. We specialize in creating apps that offer seamless user experiences and advanced functionalities. From concept to launch, we work closely with you to bring your app ideas to life, ensuring they are robust, scalable, and engaging.</p>
            </div>
        </div>
        <div class="service-about" data-aos="flip-right">
            <img src="images/video-editing.jpg" alt="Video Editing">
            <div class="service-content">
                <h4>Video Editing</h4>
                <p>Crafting professional and engaging video content with advanced editing techniques. From promotional videos to detailed tutorials, we ensure high-quality visuals and sound. Our video editing services include motion graphics, color grading, and 3D effects to create captivating content that resonates with your audience.</p>
            </div>
        </div>
        <div class="service-about" data-aos="flip-right">
            <img src="images/photo-editing.jpg" alt="Photo Editing">
            <div class="service-content">
                <h4>Photo Editing</h4>
                <p>Enhancing and transforming images to create stunning visual narratives. Our photo editing services include retouching, color correction, and 3D effects to bring your images to life. We work with high-resolution images to ensure every detail is perfect, creating visuals that are both impactful and aesthetically pleasing.</p>
            </div>
        </div>
    </div>
    <div class="section why-choose-us" data-aos="flip-right">
        <h3>Why Choose Us?</h3>
        <p>With a team of experienced professionals and a passion for excellence, Fractal Tech Services is your go-to partner for all your digital service needs. We are committed to delivering projects on time and within budget, ensuring your complete satisfaction. Our dedication to quality and innovation sets us apart from the competition. We believe in building long-term relationships with our clients, offering continuous support and updates to keep your digital presence ahead of the curve.</p>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  AOS.init();
</script>
<?php include 'include\client\footer.php'; ?>
