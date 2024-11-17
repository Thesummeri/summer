<html>
<head>
    <title>Read and Write File</title>
</head>
<body>
        <h2>Write to file</h2>
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
            <textarea name="content" rows="5" cols="40" placeholder="Enter content here"></textarea><br><br>
            <input type="submit" name="write" style="color:blue;" value="Write">
        </form>
        <h2>Read content from a file</h2>
        <?php
        $fp=fopen("data.doc",'w+');
        if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['write']))
        {
            if(flock($fp,LOCK_EX))
            {
                $content=$_POST['content'];
                fwrite($fp,$content);
                fclose($fp);
            }
        }
        if(file_exists('Data.doc'))
        {
            $readContent=file_get_contents('Data.doc');
            echo "<pre>$readContent";
        }
        else
        echo "file not found";
        ?>
</body>
</html>