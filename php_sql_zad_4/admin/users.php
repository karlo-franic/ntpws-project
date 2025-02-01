<?php
    print '
    <h2>Users</h2>
    <h3>Change users roles:</h3>
    <hr>
    ';

    if ($_POST['_action_'] == FALSE) {
        $sql_all_news = "SELECT * FROM users WHERE role != 'admin' AND archive = 'N'";
        $result = mysqli_query($MySQL, $sql_all_news);

        if (!$result) {
            die("Query failed: " . mysqli_error($MySQL));
        }

        while ($row = mysqli_fetch_assoc($result)) {
            print '
                <h4>'. $row['first_name'] .' '. $row['last_name'] .' ('. $row['role'] .')</h4>
                <form method="POST" action=""> 
                <input type="hidden" id="_action_" name="_action_" value="TRUE">
                    <p>Select the role you want to give to the user:</p>
                    <input type="hidden" name="user_id" value="'. $row['id'] .'">
                        <button type="submit" name="new_role" value="admin">Admin</button>
                ';

            if ($row['role'] == 'editor') {
                print '
                    <button type="submit" name="new_role" value="user">User</button>
                ';
            }
            if ($row['role'] == 'user') {
                print '
                    <button type="submit" name="new_role" value="editor">Editor</button>
                ';
            }
            print '<button type="submit" name="archive" value="1" class="archive-button">Achive</button>';
            print '</form>';
        }
    }
    else if ($_POST['_action_'] == TRUE) {

        if (isset($_POST['new_role'])) {
            
            $query_check  = "UPDATE users";
            $query_check .= " SET role='" .  $_POST['new_role'] . "'";
            $query_check .= " WHERE id='" .  $_POST['user_id'] . "'";
            $result = @mysqli_query($MySQL, $query_check);
            
            echo '<p>Role of user is successfully changed!</p>';
        }
        elseif (isset($_POST['archive'])) {

            $query_check  = "UPDATE users";
            $query_check .= " SET archive='Y'";
            $query_check .= " WHERE id='" .  $_POST['user_id'] . "'";
            $result = @mysqli_query($MySQL, $query_check);
            
            echo '<p>User is successfully archived!</p>';
        }
    }
?>