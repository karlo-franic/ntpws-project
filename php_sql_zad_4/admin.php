<?php 
	if ($_SESSION['user']['valid'] == 'true') {

        if ($_SESSION['user']['role'] == 'admin') {

            print '
            <h1>Administration</h1>
            <div class="tab">
                <a class="" href="index.php?menu=8&action=1">Users</a>
                <a class="" href="index.php?menu=8&action=2">News</a>
            </div>
            <div class="add-padding">';   

            if (isset($_GET['action'])) {
                if ($_GET['action'] == 1) { include("admin/users.php"); }
                
                else if ($_GET['action'] == 2) { include("admin/news.php"); }

                else if ($_GET['action'] == 3) { include("admin/news_edit.php"); }
            }
            print '
            </div>';
        }

        else if (($_SESSION['user']['role'] == 'editor') || ($_SESSION['user']['role'] == 'user')) {

            if (!isset($_GET['action'])) { include("admin/news.php"); }

            if (isset($_GET['action'])) {

                if ($_GET['action'] == 2) { include("admin/news.php"); }

                else if ($_GET['action'] == 3) { include("admin/news_edit.php"); }
            }
        }
	}
	else {
		$_SESSION['message'] = '<p>Please register or login using your credentials!</p>';
		header("Location: index.php?menu=6");
	}
?>