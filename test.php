<?php
$data = mysql_result($result, 0, "file_data");
$type = mysql_result($result, 0, "file_type");
$fileName = mysql_result($result, 0, "file_name");
mysql_close($conn);$filePath = 'download/' . $userid . "/" . $fileName;
file_put_contents($fileName,$data);
header('Location: /download.php?fileName=' . $fileName . '&;file=' . $filePath);
/*//download.php$fileName = $_GET['fileName'];$file_dir = RelativePath . $_GET['file'];$file = @ fopen($file_dir, "r");if (!$file) { echo "File does not exist.";} else { ob_end_clean(); Header("Content-type: application/octet-stream"); Header("Content-Disposition: attachment; filename=" . $fileName); while (!feof($file)) { echo fread($file, 50000); } fclose($file);}*/?>