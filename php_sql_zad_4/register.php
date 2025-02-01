<?php

print '<h1>REGISTRATION FORM</h1>
    <br>';

if ($_POST['_action_'] == FALSE) {
    print '
        <div class="form-design">
            <form action="" id="registration_form" name="registration_form" method="POST">
                <input type="hidden" id="_action_" name="_action_" value="TRUE">
                <br><br>
                <label for="fname">First Name *</label><br>
                <input type="text" id="fname" name="firstname" placeholder="Your name..." required>
                <br><br>
                <label for="lname">Last Name *</label><br>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..." required>
                <br><br>
                <label for="email">Email Address *</label><br>
                <input type="email" id="email" name="email" placeholder="Your email..." required>
                <br><br>
                <label for="password">Password *</label><br>
                <input type="password" id="password" name="password" placeholder="Your password..." required>
                <br><br>
                <label for="city">City/Town *</label><br>
                <input type="text" id="city" name="city" placeholder="Your City/Town..." required>
                <br><br>
                <label for="address">Address *</label><br>
                <input type="text" id="address" name="address" placeholder="Your address..." required>
                <br><br>
                 <label for="birthday">Birthday *</label><br>
                <input type="date" id="birthday" name="birthday"> 
                <br><br>
                <label for="country">Country</label><br>
                <select id="country" name="country">
                    <option value="">Select your country</option>';

    $sql_all_countries = "SELECT * FROM countries";
    $result = mysqli_query($MySQL, $sql_all_countries);

    if (!$result) {
        die("Query failed: " . mysqli_error($MySQL));
    }

    while ($row = mysqli_fetch_assoc($result)) {
        print '<option value="' . $row['country_code'] . '">' . htmlspecialchars($row['country_name']) . '</option>';
    }

    print '</select>
                <br><br><br>
                
                <input type="submit" value="Submit">
            </form>
        </div>';
        /*<button type="submit">Submit</button>*/ 
}

else if ($_POST['_action_'] == TRUE) {

    $query_check  = "SELECT * FROM users";
    $query_check .= " WHERE email='" .  $_POST['email'] . "'";
    $result = @mysqli_query($MySQL, $query_check);
    $row = @mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    if (is_null($row)) {
        # password_hash https://secure.php.net/manual/en/function.password-hash.php
        # password_hash() creates a new password hash using a strong one-way hashing algorithm
        $pass_hash = password_hash($_POST['password'], PASSWORD_DEFAULT, ['cost' => 12]);
        
        $query_check  = "INSERT INTO users (first_name, last_name, email, password, country, city, address, date_of_birth, role)";
        $query_check .= " VALUES ('" . $_POST['firstname'] . "', '" . $_POST['lastname'] . "', '" . $_POST['email'] . "', '" . $pass_hash . "', '" . $_POST['country'] . "', '" . $_POST['city'] . "', '" . $_POST['address'] . "', '" . $_POST['birthday'] . "', 'user')";
        $result = @mysqli_query($MySQL, $query_check);
        
        echo '<p>' . ucfirst(strtolower($_POST['firstname'])) . ' ' .  ucfirst(strtolower($_POST['lastname'])) . ', thank you for registration </p>
        <hr>';
    }
    else {
        echo '<p>User with this email or username already exist!</p>';
    }
}

?>