<?php

require 'aws-app/start.php';

if(isset($_FILES['file'])){
  $file = $_FILES['file'];

  //file details
  $filename = $file['name'];
  $tmp_name = $file['tmp_name'];

  $extension = explode('.', $filename);
  $extension = strtolower(end($extension));

  //Tmp details
  $key = uniqid(rand());
  $tmp_file_name = "{$key}.{$extension}";
  $tmp_file_path = "temp/{$tmp_file_name}";

  //Move file
  move_uploaded_file($tmp_name, $tmp_file_path);

  try {
    $s3-> putObject([
      'Bucket' => $config['s3']['bucket'],
      'Key' => "uploads/{$tmp_file_name}",
      'Body' => fopen($tmp_file_path,'rb'),
      'ACL' => 'public-read'
    ]);

    //remove temp file
    unlink($tmp_file_path);

  } catch (S3Exception $e) {
    echo "Error while uploading file";
  }

}

echo '<br>upload<br>';

 ?>
 <html>
<head>
  <title>Upload to AWS</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
  <input type="file" name="file" />
  <input type="submit" value="Upload" />
</form>
</body>
 </html>
