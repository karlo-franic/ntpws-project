<?php
    print '<h2>News</h2>';

    print '
        <h3>Enter news:</h3>
        <form action="" id="insert_news_form" name="insert_news_form" method="POST" enctype="multipart/form-data">
            <input type="hidden" id="_action_" name="_action_" value="TRUE">
            <br>
            <label for="title">Title: *</label><br>
            <input type="text" id="title" name="title" placeholder="News title..." required>
            <br><br>
            <label for="text">Text: *</label><br>
            <textarea type="text" id="text" name="text" rows="5" cols="50" placeholder="Write text here..." required></textarea>
            <br><br>
            <label for="image">Upload the main Image: *</label><br>
            <input type="file" name="image" id="image" accept="image/*" required>
            <br><br>
            <label for="images">Upload additional Images:</label><br>
            <input type="file" name="images[]" id="images" accept="image/*" multiple>
            <br><br>
            <label>
                <input type="checkbox" name="archive" value="1"> Archive 
            </label>
            <br><br>
            <button type="submit" name="create_news">Create</button>
        </form>
    ';

    $uploadDir = "img/"; // Folder where images will be stored
    $allowedTypes = ["jpg", "jpeg", "png", "gif"];

    $image_id = null;
    $news_id = null;

    if (($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_POST['create_news']))) {
        $imageFileType = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));

        // Validate file type
        if (!in_array($imageFileType, $allowedTypes)) {
            die("Error: Only JPG, JPEG, PNG, and GIF files are allowed.");
        }

        // Generate a unique filename (e.g., image_605d417abc.jpg)
        $uniqueName = "image_" . uniqid() . "." . $imageFileType;
        $targetFile = $uploadDir . $uniqueName;

        // Move the uploaded file to the server folder
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            
            if ($_SESSION['user']['role'] == 'user') {
                $newsArchive = 1;
            } else {
                $newsArchive = isset($_POST['archive']) ? $_POST['archive'] : 0;
            }

            $title = mysqli_real_escape_string($MySQL, $_POST['title']);
            $text = mysqli_real_escape_string($MySQL, $_POST['text']);

            $query_check = "INSERT INTO news (title, picture, text, archive) VALUES ('$title', '$uniqueName', '$text', '$newsArchive')";
            if ($MySQL->query($query_check) === TRUE) {
                $news_id = $MySQL->insert_id;
            } else {
                echo " Database error: " . $conn->error;
            }
        } else {
            echo "Error uploading file.";
        }

        if (!isset($_FILES["images"]) || empty($_FILES["images"]["name"][0])) {}
        else {
            foreach ($_FILES["images"]["tmp_name"] as $key => $tmpName) {
                if ($_FILES["images"]["error"][$key] !== UPLOAD_ERR_OK) {
                    echo "Error uploading file: " . $_FILES["images"]["name"][$key] . "<br>";
                    continue;
                }

                $imageFileType = strtolower(pathinfo($_FILES["images"]["name"][$key], PATHINFO_EXTENSION));
        
                // Validate file type
                if (!in_array($imageFileType, $allowedTypes)) {
                    echo "Error: Only JPG, JPEG, PNG, and GIF files are allowed.<br>";
                    continue;
                }
        
                // Generate a unique filename
                $uniqueName = "image_" . uniqid() . "." . $imageFileType;
                $targetFile = $uploadDir . $uniqueName;
        
                // Move the uploaded file
                if (move_uploaded_file($tmpName, $targetFile)) {

                    // Insert images into the database
                    $query_check_2 = "INSERT INTO images (url) VALUES ('$uniqueName')";
                    if ($MySQL->query($query_check_2) === TRUE) {
                        $image_id = $MySQL->insert_id;
                    } else {
                        echo " Database error: " . $conn->error;
                    }

                    // Insert news_images into the database
                    $query_check_3 = "INSERT INTO news_images (news_id, image_id) VALUES ($news_id, $image_id)";
                    if ($MySQL->query($query_check_3) === TRUE) {
                    } else {
                        echo " Database error: " . $conn->error;
                    }

                } else {
                    echo "Error uploading file: " . $_FILES["images"]["name"][$key] . "<br>";
                }
            }
        }
        echo " Insert news to database was successful.";
    }

    // If Editor or Admin
    if ($_SESSION['user']['role'] != 'user') {

        print '<hr><br>';
        print '<h3>Change news:</h3>';

        $sql_all_news = "SELECT * FROM news";
        $result = mysqli_query($MySQL, $sql_all_news);

        if (!$result) {
            die("Query failed: " . mysqli_error($MySQL));
        }

        while ($row = mysqli_fetch_assoc($result)) {
            print '<form method="POST" action="">
                     <div class="news-item">
                        <div class="news-info">
                            <span class="title">'. $row["title"] .'</span>
                            <span class="date"><small>Published on: ' . substr($row['date_created'], 0, 10) . '</small></span>
                        </div>
                        <div class="buttons">
                            <input type="hidden" name="news_id" value="'. $row['id'] .'">
                            
                            <a class="edit-button" href="index.php?menu=8&action=3&id='. $row["id"] .'">Edit</a>';
            if ($row["archive"] == 0) {
                print '<button type="submit" name="action" value="archive" class="archive-button">Archive</button>';
                        
                if ($_SESSION['user']['role'] == 'admin'){
                    print '<button type="submit" name="action" value="delete" class="delete-button">Delete</button>';
                }
                
                print ' </div>
                        </div>
                    </form>';
            }  
            elseif ($row["archive"] == 1) {
                print '<button type="submit" name="action" value="unarchive" class="archive-button">Unarchive</button>';
                
                if ($_SESSION['user']['role'] == 'admin'){
                    print '<button type="submit" name="action" value="delete" class="delete-button">Delete</button>';
                }

                print '</div>
                        </div>
                    </form>';
            }
        }

        if (isset($_POST['action'])) {

            if ($_POST['action'] == "archive") {

                $query_check  = "UPDATE news";
                $query_check .= " SET archive=1";
                $query_check .= " WHERE id='" .  $_POST['news_id'] . "'";
                $result = @mysqli_query($MySQL, $query_check);
            }

            if ($_POST['action'] == "unarchive") {

                $query_check  = "UPDATE news";
                $query_check .= " SET archive=0";
                $query_check .= " WHERE id='" .  $_POST['news_id'] . "'";
                $result = @mysqli_query($MySQL, $query_check);
            }

            if ($_POST['action'] == "delete") {

                $query_check  = "DELETE FROM news";
                $query_check .= " WHERE id='" .  $_POST['news_id'] . "'";
                $result = @mysqli_query($MySQL, $query_check);
            }

            if ($_POST['action'] == "edit") {

            }

            echo '<meta http-equiv="refresh" content="0">';
        }
    }
?>