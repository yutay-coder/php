<?php
$company = htmlspecialchars($_GET['company'], ENT_QUOTES);
echo "会社名は" . $company . "ですね";
