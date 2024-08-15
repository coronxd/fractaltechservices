<?php
/*********************************************************************
    index.php

    Helpdesk landing page. Please customize it to fit your needs.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
require('client.inc.php');

require_once INCLUDE_DIR . 'class.page.php';

$section = 'home';
include 'include\client\header.php';
?>
<section>
        <div class="hero">
            <div class="hero-text">
                <h1>WELCOME TO <br>Fractal Tech Services</h1>
                <p> Your Gateway to Digital Excellence<br> Euro Truck Simulator 2 and American Truck Simulator.</p>
                <div class="hero-buttons">
                    <a href="https://" class="join-us">Book Now</a>
                    
                </div>
            </div>
        </div>
    </section>
       <div class="service H2">
     <h2>Our Services</h2>
   </div> 
    <div class="services-section">
        <div class="service-card">
            <h3>Web Development</h3>
            <p>Professional web development services to build and enhance your online presence.</p>
            <button class="learn-more">Learn More</button>
        </div>
        <div class="service-card">
            <h3>App Development</h3>
            <p>Custom app development tailored to meet your business needs and objectives.</p>
            <button class="learn-more">Learn More</button>
        </div>
        <div class="service-card">
            <h3>Video Editing</h3>
            <p>High-quality video editing services to create compelling and engaging videos.</p>
            <button class="learn-more">Learn More</button>
        </div>
        <div class="service-card">
            <h3>Modify a Landing Page</h3>
            <p>Expert modifications to your landing page to improve user experience and conversion rates.</p>
            <button class="learn-more">Learn More</button>
        </div>
    </div>
</div>
<section id="about">
        <div class="about-content">
            <img src="https://odysseyvtc.com/assets/aboutme.png" alt="About Image" class="about-img">
            <div class="about-text">
                <h1>About Us</h1>
                <p>At Fractal Tech Services, we’re dedicated to transforming ideas into reality through cutting-edge 3D technology. 
                Whether you need a stunning website, a dynamic app, or immersive media content, our expert team has the skills and creativity to bring your vision to life. 
                We specialize in web development, app development, video editing, and photo editing, all with a focus on leveraging the latest advancements in 3D technology
                to create unique, engaging, and visually striking products.<br><br>Our commitment to excellence drives us to push the boundaries of what's possible. We believe
                 in the power of innovation to make a lasting impact, which is why we constantly explore new techniques and tools to deliver exceptional results. With Fractal 
                 Tech Services, you’re not just getting a service—you’re getting a partnership that values creativity, precision, and innovation. Let us help you stand out in 
                 the digital world with solutions that truly reflect the essence of your brand.

</p>
            </div>
        </div>
    </section>
    <div class="contact-form">
        <form action="submit_form.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="service">Service:</label>
            <select id="service" name="service" required>
                <option value="" disabled selected>Select a service</option>
                <option value="web_development">Web Development</option>
                <option value="app_development">App Development</option>
                <option value="video_editing">Video Editing</option>
                <option value="photo_editing">Photo Editing</option>
                <option value="other">Other</option>
            </select>

            <label for="country">Country:</label>
<select id="country" name="country" required>
    <option value="" disabled selected>Select your country</option>
    <option value="afghanistan">Afghanistan</option>
    <option value="albania">Albania</option>
    <option value="algeria">Algeria</option>
    <option value="andorra">Andorra</option>
    <option value="angola">Angola</option>
    <option value="antigua_and_barbuda">Antigua and Barbuda</option>
    <option value="argentina">Argentina</option>
    <option value="armenia">Armenia</option>
    <option value="australia">Australia</option>
    <option value="austria">Austria</option>
    <option value="azerbaijan">Azerbaijan</option>
    <option value="bahamas">Bahamas</option>
    <option value="bahrain">Bahrain</option>
    <option value="bangladesh">Bangladesh</option>
    <option value="barbados">Barbados</option>
    <option value="belarus">Belarus</option>
    <option value="belgium">Belgium</option>
    <option value="belize">Belize</option>
    <option value="benin">Benin</option>
    <option value="bhutan">Bhutan</option>
    <option value="bolivia">Bolivia</option>
    <option value="bosnia_and_herzegovina">Bosnia and Herzegovina</option>
    <option value="botswana">Botswana</option>
    <option value="brazil">Brazil</option>
    <option value="brunei">Brunei</option>
    <option value="bulgaria">Bulgaria</option>
    <option value="burkina_faso">Burkina Faso</option>
    <option value="burundi">Burundi</option>
    <option value="cabo_verde">Cabo Verde</option>
    <option value="cambodia">Cambodia</option>
    <option value="cameroon">Cameroon</option>
    <option value="canada">Canada</option>
    <option value="central_african_republic">Central African Republic</option>
    <option value="chad">Chad</option>
    <option value="chile">Chile</option>
    <option value="china">China</option>
    <option value="colombia">Colombia</option>
    <option value="comoros">Comoros</option>
    <option value="congo">Congo</option>
    <option value="congo_democratic_republic">Congo, Democratic Republic</option>
    <option value="costa_rica">Costa Rica</option>
    <option value="cote_divoire">Côte d'Ivoire</option>
    <option value="croatia">Croatia</option>
    <option value="cuba">Cuba</option>
    <option value="cyprus">Cyprus</option>
    <option value="czech_republic">Czech Republic</option>
    <option value="denmark">Denmark</option>
    <option value="djibouti">Djibouti</option>
    <option value="dominica">Dominica</option>
    <option value="dominican_republic">Dominican Republic</option>
    <option value="ecuador">Ecuador</option>
    <option value="egypt">Egypt</option>
    <option value="el_salvador">El Salvador</option>
    <option value="equatorial_guinea">Equatorial Guinea</option>
    <option value="eritrea">Eritrea</option>
    <option value="estonia">Estonia</option>
    <option value="eswatini">Eswatini</option>
    <option value="ethiopia">Ethiopia</option>
    <option value="fiji">Fiji</option>
    <option value="finland">Finland</option>
    <option value="france">France</option>
    <option value="gabon">Gabon</option>
    <option value="gambia">Gambia</option>
    <option value="georgia">Georgia</option>
    <option value="germany">Germany</option>
    <option value="ghana">Ghana</option>
    <option value="greece">Greece</option>
    <option value="grenada">Grenada</option>
    <option value="guatemala">Guatemala</option>
    <option value="guinea">Guinea</option>
    <option value="guinea_bissau">Guinea-Bissau</option>
    <option value="guyana">Guyana</option>
    <option value="haiti">Haiti</option>
    <option value="honduras">Honduras</option>
    <option value="hungary">Hungary</option>
    <option value="iceland">Iceland</option>
    <option value="india">India</option>
    <option value="indonesia">Indonesia</option>
    <option value="iran">Iran</option>
    <option value="iraq">Iraq</option>
    <option value="ireland">Ireland</option>
    <option value="israel">Israel</option>
    <option value="italy">Italy</option>
    <option value="jamaica">Jamaica</option>
    <option value="japan">Japan</option>
    <option value="jordan">Jordan</option>
    <option value="kazakhstan">Kazakhstan</option>
    <option value="kenya">Kenya</option>
    <option value="kiribati">Kiribati</option>
    <option value="north_korea">Korea, North</option>
    <option value="south_korea">Korea, South</option>
    <option value="kuwait">Kuwait</option>
    <option value="kyrgyzstan">Kyrgyzstan</option>
    <option value="laos">Laos</option>
    <option value="latvia">Latvia</option>
    <option value="lebanon">Lebanon</option>
    <option value="lesotho">Lesotho</option>
    <option value="liberia">Liberia</option>
    <option value="libya">Libya</option>
    <option value="liechtenstein">Liechtenstein</option>
    <option value="lithuania">Lithuania</option>
    <option value="luxembourg">Luxembourg</option>
    <option value="madagascar">Madagascar</option>
    <option value="malawi">Malawi</option>
    <option value="malaysia">Malaysia</option>
    <option value="maldives">Maldives</option>
    <option value="mali">Mali</option>
    <option value="malta">Malta</option>
    <option value="marshall_islands">Marshall Islands</option>
    <option value="mauritania">Mauritania</option>
    <option value="mauritius">Mauritius</option>
    <option value="mexico">Mexico</option>
    <option value="micronesia">Micronesia</option>
    <option value="moldova">Moldova</option>
    <option value="monaco">Monaco</option>
    <option value="mongolia">Mongolia</option>
    <option value="montenegro">Montenegro</option>
    <option value="morocco">Morocco</option>
    <option value="mozambique">Mozambique</option>
    <option value="myanmar">Myanmar</option>
    <option value="namibia">Namibia</option>
    <option value="nauru">Nauru</option>
    <option value="nepal">Nepal</option>
    <option value="netherlands">Netherlands</option>
    <option value="new_zealand">New Zealand</option>
    <option value="nicaragua">Nicaragua</option>
    <option value="niger">Niger</option>
    <option value="nigeria">Nigeria</option>
    <option value="north_macedonia">North Macedonia</option>
    <option value="norway">Norway</option>
    <option value="oman">Oman</option>
    <option value="pakistan">Pakistan</option>
    <option value="palau">Palau</option>
    <option value="palestine">Palestine</option>
    <option value="panama">Panama</option>
    <option value="papua_new_guinea">Papua New Guinea</option>
    <option value="paraguay">Paraguay</option>
    <option value="peru">Peru</option>
    <option value="philippines">Philippines</option>
    <option value="poland">Poland</option>
    <option value="portugal">Portugal</option>
    <option value="qatar">Qatar</option>
    <option value="romania">Romania</option>
    <option value="russia">Russia</option>
    <option value="rwanda">Rwanda</option>
    <option value="saint_kitts_and_nevis">Saint Kitts and Nevis</option>
    <option value="saint_lucia">Saint Lucia</option>
    <option value="saint_vincent_and_the_grenadines">Saint Vincent and the Grenadines</option>
    <option value="samoa">Samoa</option>
    <option value="san_marino">San Marino</option>
    <option value="sao_tome_and_principe">Sao Tome and Principe</option>
    <option value="saudi_arabia">Saudi Arabia</option>
    <option value="senegal">Senegal</option>
    <option value="serbia">Serbia</option>
    <option value="seychelles">Seychelles</option>
    <option value="sierra_leone">Sierra Leone</option>
    <option value="singapore">Singapore</option>
    <option value="slovakia">Slovakia</option>
    <option value="slovenia">Slovenia</option>
    <option value="solomon_islands">Solomon Islands</option>
    <option value="somalia">Somalia</option>
    <option value="south_africa">South Africa</option>
    <option value="south_sudan">South Sudan</option>
    <option value="spain">Spain</option>
    <option value="sri_lanka">Sri Lanka</option>
    <option value="sudan">Sudan</option>
    <option value="suriname">Suriname</option>
    <option value="sweden">Sweden</option>
    <option value="switzerland">Switzerland</option>
    <option value="syria">Syria</option>
    <option value="taiwan">Taiwan</option>
    <option value="tajikistan">Tajikistan</option>
    <option value="tanzania">Tanzania</option>
    <option value="thailand">Thailand</option>
    <option value="timor_leste">Timor-Leste</option>
    <option value="togo">Togo</option>
    <option value="tonga">Tonga</option>
    <option value="trinidad_and_tobago">Trinidad and Tobago</option>
    <option value="tunisia">Tunisia</option>
    <option value="turkey">Turkey</option>
    <option value="turkmenistan">Turkmenistan</option>
    <option value="tuvalu">Tuvalu</option>
    <option value="uganda">Uganda</option>
    <option value="ukraine">Ukraine</option>
    <option value="united_arab_emirates">United Arab Emirates</option>
    <option value="united_kingdom">United Kingdom</option>
    <option value="united_states">United States</option>
    <option value="uruguay">Uruguay</option>
    <option value="uzbekistan">Uzbekistan</option>
    <option value="vanuatu">Vanuatu</option>
    <option value="vatican_city">Vatican City</option>
    <option value="venezuela">Venezuela</option>
    <option value="vietnam">Vietnam</option>
    <option value="yemen">Yemen</option>
    <option value="zambia">Zambia</option>
    <option value="zimbabwe">Zimbabwe</option>
</select>


            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <input type="submit" value="Submit">
        </form>
    </div>

<?php include 'include\client\footer.php'; ?>
