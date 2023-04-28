<?php
    $myfile = fopen("header.txt", "r") or die("Unable to open file!");
    // Output one line until end-of-file
    while(!feof($myfile)) {
        echo fgets($myfile);
    }
    fclose($myfile);
?>

<div style="background-image: url('catbg.webp'); height: 100%; background-repeat: no-repeat; background-size: cover; justify-content: center; display: flex;">
    <div style="border-radius: 200px; margin-top: 95px; height: 80%; width: 400px; background-color: rgba(255, 255, 255 , 0.7); text-align: center;">
        <h1 style="font-size: 90px;  color: #9b4b00; text-shadow: 2px 2px #ffbf91; margin-top: 80px; margin-bottom: 30px;">Mao.</h1>
        <h2>mao mao mao mao mao<br>mao mao mao mao mao</h2>
        <a href="page2.php">
            <button class="navbarbtn"><span>PRODUCT</span></button>
        </a>
        <br>
        <a href="page3.php">
            <button class="navbarbtn"><span>SERVICE</span></button>
        </a>
    </div>
</div>

<?php
    $myfile = fopen("footer.txt", "r") or die("Unable to open file!");
    // Output one line until end-of-file
    while(!feof($myfile)) {
        echo fgets($myfile);
    }
    fclose($myfile);
?>


