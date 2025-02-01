<?php

print '<h1>NEWS</h1>';

$sql_all_news_images = "SELECT * FROM news_images WHERE news_id=". $_GET['news'];
$result_news_images = mysqli_query($MySQL, $sql_all_news_images);

if (!$result_news_images) {
    die("Query failed: " . mysqli_error($MySQL));
}

while ($row_news_images = mysqli_fetch_assoc($result_news_images)) {
    
    $sql_all_images = "SELECT * FROM images WHERE id=". $row_news_images['image_id'];
    $result_images = mysqli_query($MySQL, $sql_all_images);

    if (!$result_images) {
        die("Query failed: " . mysqli_error($MySQL));
    }

    while ($row_images = mysqli_fetch_assoc($result_images)) {
        print '
            <a href="img/'. $row_images["url"] .'" target="_blank">
                <figure class="fig-gallery">
                    <img class="fig-img" src="img/'. $row_images["url"] .'" alt="'. $row_images["description"] .'">
                    <figcaption class="figcap-img">'. $row_images["description"] .'</figcaption>
                </figure>
            </a>
        ';
    }
}

print '<hr style="clear: both;">';

$sql_all_news = "SELECT * FROM news WHERE id=". $_GET['news'];
$result = mysqli_query($MySQL, $sql_all_news);

if (!$result) {
    die("Query failed: " . mysqli_error($MySQL));
}

while ($row = mysqli_fetch_assoc($result)) {
    print '
        <p><small>Published on: '. substr($row['date_created'], 0, 10) .'</small></p>
        <h1>'. $row['title'] .'</h1>
        <p>'. $row['text'] .'</p>
        <a href="index.php?menu=2">Back to news</a>
    ';
}
?>