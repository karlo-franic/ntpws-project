<?php

print '<h1>NEWS</h1>';

$sql_all_news = "SELECT * FROM news";
$result = mysqli_query($MySQL, $sql_all_news);

if (!$result) {
    die("Query failed: " . mysqli_error($MySQL));
}

while ($row = mysqli_fetch_assoc($result)) {
    if ($row['archive'] != 1) {
        print ' <div class="article">
                <a href="index.php?news=' . $row['id'] . '"><img src="img/' . $row['picture'] . '" alt="' . $row['title'] . '"></a>
                <div class="article-content">
                    <h2><a href="index.php?news=' . $row['id'] . '">' . $row['title'] . '</a></h2>
                    <p><small>Published on: ' . substr($row['date_created'], 0, 10) . '</small></p>
                    <p>' . substr($row['text'],0,120) . '...</p>
                    <a href="index.php?news=' . $row['id'] . '">Read more</a>
                </div>
            </div>';
    }
}

?>