<?php
$servername = "localhost";
$username = "sdpyyidp_andreb";
$password = "-dm#AyMKM&!S";
$dbname = "sdpyyidp_personalwebsitedb";

if(isset($_REQUEST['file'])){
    // Get parameters
    $file = urldecode($_REQUEST['file']); // Decode URL-encoded string

    /* Check if the file name includes illegal characters
    like "../" using the regular expression */
    if(preg_match('/^[^.][-a-z0-9_.]+[a-z]$/i', $file)){
        $filepath = "files/" . $file;

        // Process download
        if(file_exists($filepath)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            //header('Content-Length: ' . filesize($filepath));
            flush(); 
            readfile($filepath);

            $link = mysqli_connect($servername, $username, $password, $dbname);

            // Check connection
            if($link === false){
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }

            $file = mysqli_real_escape_string($link, $file);
            $sql = "INSERT INTO FileDownloads (file) VALUES ('$file')";
            if(mysqli_query($link, $sql)){
                echo "Record added successfully.";
            } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }
            die();
        } else {
            http_response_code(404);
            die();
        }
    } else {
        die("Invalid file name...");
    }
}
?>
