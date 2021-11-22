<?php
    include 'core/auth.php';
    if(checkLogin()) {
        include 'include/header.php';
    }
    else {
        include 'include/header_notlogin.php';
    }
?>
<link rel="stylesheet" href="./assets/css/common.css">
<div class="container padding-top">
    <h2 class="title">404 Not Found</h2>
</div>

<?php
    include 'include/footer.php';
?>