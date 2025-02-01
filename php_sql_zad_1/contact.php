<?php
print '
    <h1>CONTACT FORM</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9926.445511291293!2d-0.026737962837662676!3d51.53868739742361!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761d6975e8b559%3A0xe7fca44605b6ce94!2sOlimpijski%20stadion%20u%20Londonu!5e0!3m2!1shr!2shr!4v1735474863669!5m2!1shr!2shr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="form-design">
        <form id="contactForm">
            <br>
            <label for="fname">First Name *</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..." required>
            <br>
            <label for="lname">Last Name *</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name..." required>
            <br>
            <label for="email">Email Address *</label>
            <input type="email" id="email" name="email" placeholder="Your email..." required>
            <br>
            <br>
            <button type="submit">Submit</button>
        </form>
    </div>
';
?>