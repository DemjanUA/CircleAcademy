<?php
    $header = str_replace("{[header]}", "<header class='front-end'></header>", file_get_contents('../templates/header.html'));
    echo $header;
?>
<h1>FRONT_END COURSE PAGE WILL BE HERE SOON</h1>

<?php
  $footer = file_get_contents('../templates/footer.html');
  echo $footer;
exit();