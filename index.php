<?php
include './index_header.php';
include './index_navbar.html';
include './index_head_form.html';
include './index_body.php';
// include './composition/test.html';
// include './composition/main.html';
include './index_footer.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
<script src="index.js?p=<?php echo filemtime('index.js'); ?>"></script>
