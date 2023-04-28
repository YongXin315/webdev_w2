<?php
    $myfile = fopen("header.txt", "r") or die("Unable to open file!");
    // Output one line until end-of-file
    while(!feof($myfile)) {
        echo fgets($myfile);
    }
    fclose($myfile);
?>

<div style="margin: 90px; text-align: center;">
    <img src="cat.png" style="width: 400px;" alt="cat head">
    <h1>CONTACT</h1>
</div>

<?php
    $myfile = fopen("footer.txt", "r") or die("Unable to open file!");
    // Output one line until end-of-file
    while(!feof($myfile)) {
        echo fgets($myfile);
    }
    fclose($myfile);
?>


