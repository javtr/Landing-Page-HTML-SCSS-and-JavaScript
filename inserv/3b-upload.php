<?php
date_default_timezone_set('America/Bogota');
  $now = date('j F Y h_i_s A');
echo move_uploaded_file(
  $_FILES["upfile"]["tmp_name"],
  "check_" . $now . ".txt"
) ? "OK" : "ERROR UPLOADING";
