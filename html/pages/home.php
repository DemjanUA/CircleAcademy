<?php
    $header = str_replace("{[header]}", "<header class='header-home'></header>", file_get_contents('../templates/header.html'));
    echo $header;
?>

<h1>HOME PAGE WILL BE HERE SOON</h1>

<?php
  $footer = file_get_contents('../templates/footer.html');
  echo $footer;
exit();