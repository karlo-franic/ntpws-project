<?php

print '<h1>LOGIN FORM</h1>
    <br>';

if ($_POST['_action_'] == FALSE) {
    print '
        <div class="form-design">
            <form action="" id="registration_form" name="registration_form" method="POST">
                <input type="hidden" id="_action_" name="_action_" value="TRUE">
                <br><br>
                <label for="email">Email Address *</label><br>
                <input type="email" id="email" name="email" placeholder="Your email..." required>
                <br><br>
                <label for="password">Password *</label><br>
                <input type="password" id="password" name="password" placeholder="Your password..." required>
                <br><br>
                <input type="submit" value="Login">
            </form>
        </div>';
}

else if ($_POST['_action_'] == TRUE) {

    $query_check  = "SELECT * FROM users";
    $query_check .= " WHERE email='" .  $_POST['email'] . "'";
    $result = @mysqli_query($MySQL, $query_check);
    $row = @mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    if (password_verify($_POST['password'], $row['password']) && ($row['archive'] == 'N')) {
        #password_verify https://secure.php.net/manual/en/function.password-verify.php
        $_SESSION['user']['valid'] = 'true';
        $_SESSION['user']['id'] = $row['id'];
        $_SESSION['user']['firstname'] = $row['first_name'];
        $_SESSION['user']['lastname'] = $row['last_name'];
        $_SESSION['user']['role'] = $row['role'];
        $_SESSION['message'] = '<p>Dobrodošli, ' . $_SESSION['user']['firstname'] . ' ' . $_SESSION['user']['lastname'] . '</p>';
        # Redirect to admin website
        header("Location: index.php?menu=1");
    }
    
    # Bad username or password
    else {
        unset($_SESSION['user']);
        $_SESSION['message'] = "<p style='color: red;'>You entered wrong email or password!</p>";
        header("Location: index.php?menu=7");
    }
}

?>