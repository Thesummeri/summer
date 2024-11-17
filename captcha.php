[8:51 am, 17/11/2024] Hindu🍂: <?php
session_start();
$captcha=rand(1111,9999);
$_SESSION["captcha"]=$captcha;
$im=imagecreatetruecolor(50,25);
$bg=imagecolorallocate($im,22,86,165);
$fg=imagecolorallocate($im,255,255,255);
imagefill($im,0,0,$bg);
imagestring($im,rand(1,7),rand(1,7),rand(1,7),$captcha,$fg);
header('Content-type:image/png');
imagepng($im);
imagedestory($im);
?>

<?php
session_start();
$msg='';
if(isset($_POST['input']))
{
    if($_POST['input']==$_SESSION['captcha'])
    $msg='<span style="color:green">SUCCESSFUL!!!</span>';
    else
    $msg='<span style="color:red">CAPTCHA FAILED!!!</span>';
}
?>
<style>
    body{
        display:flex;
        flex-direction:column;
        align-items:center;
        justify-content:center;
    }
    </style>
    <body>
        <h2>PROVE THAT YOU ARE NOT ROBERT!!!</h2>
        <strong>
            enter the text in captcha image to prove that you are not a robert 
        </strong>
    <div style='margin:15px'>
        <img src="cap.php">
    </div>

    <form method="POST" action=
            "<?php echo $_SERVER['PHP_SELF'];?>">
        <input type="text" name="input"/>
        <input type="submit" value="submit" name="submit"/>
</form>
<div style='margin-bottom:5px'>
        <?php echo $msg;?>
    </div>
<div>
    can't read the image?click 
    <a href='<?php echo $_SERVER['PHP_SELF'];?>'>here</a>to refresh!
</div>
</body>