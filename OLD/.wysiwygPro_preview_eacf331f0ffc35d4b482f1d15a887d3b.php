<?php
if ($_GET['randomId'] != "xKyYNYfiKnj4yMFip3tAK_hyA7fYrQXSa4InBpp3AHCz3Tt9GhE9fcCQGIr4xxFV") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
