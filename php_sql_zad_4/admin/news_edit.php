<?php

    echo '<h3>Edit News</h3>';

    if (isset($_GET['id'])) {
        
        $query_check  = "SELECT * FROM news";
        $query_check .= " WHERE id='" .  $_GET['id'] . "'";
        $result = @mysqli_query($MySQL, $query_check);

        while ($row = mysqli_fetch_assoc($result)) {

            print '
            <form action="" id="update_news_form" name="update_news_form" method="POST">
                <input type="hidden" id="_action_" name="_action_" value="TRUE">
                <br>
                <label for="title">Title: *</label><br>
                <input type="text" id="title" name="title" value="'. $row["title"] .'" required>
                <br><br>
                <label for="text">Text: *</label><br>
                <textarea type="text" id="text" name="text" rows="5" cols="50" required>'. $row["text"] .'</textarea>
                <br><br>
                <button type="submit" name="edit_news">Edit</button>
            </form>';
        }

            if (($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_POST['edit_news']))) {

                $query_check  = "UPDATE news";
                $query_check .= " SET title='". $_POST['title'] ."', text='". $_POST['text']."'";
                $query_check .= " WHERE id='" .  $_GET['id'] . "'";
                $result = @mysqli_query($MySQL, $query_check);

                header("Location: index.php?menu=8&action=2");
            }
    }

?>