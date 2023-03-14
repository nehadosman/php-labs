<?php
require_once('vendor/autoload.php');
require_once("views/form.php");

use Aws\s3\s3Client;
use Aws\Credentials\Credentials;
use Aws\Exception\AwsException;

// Check if post request and there is file in req
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"])) {

    // set AWS Credentials 
    $credentials = new Credentials(_ACCESS_KEY_, _SECRET_KEY_);

    $s3 = new s3Client([
        'version' => 'latest',
        'region' => _BUKET_REGION_,
        'credentials' => $credentials
    ]);

    $file_name = $_FILES["file"]["name"];
    $ext = pathinfo($file_name, PATHINFO_EXTENSION);
    $new_file_name = uniqid() . ".$ext";
    $file_temp = $_FILES['file']['tmp_name'];

    try {
        $result = $s3->putObject([
            'Bucket' => _BUCKET_NAME_,
            'Key' => $new_file_name,
            'Body' => fopen($file_temp, 'r')
        ]);

        echo ($result['ObjectURL']);
    } catch (AwsException $e) {
        echo $e->getMessage();
    }
}
