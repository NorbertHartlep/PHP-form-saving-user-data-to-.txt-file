<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
    header('Clear-Site-Data: "cache", "cookies", "storage", "executionContexts"');  //clear cache
    $sent = "";
    $yourInp = "";
    $inpEmail = "";
    $name = "";
    $email = "";
    $option = "";
    if(isset($_POST["formSubmit"])){ //it checks form is submited
        $name = $_POST["name"]; //get name
        $email = $_POST["email"]; //get email
        $sent = "You succesfully sent the data, it will be stored in our txt file, or no , deepends about your choice 
        ";
        $yourInp = "Your inputted name ";
        $inpEmail = "Your inputed email ";
        if(!empty($_POST['options'])) {
            $option = $_POST["options"];
             echo 'You have chosen to ' . $option . ' data.';
if(($_POST['options']) == "save"){              // save inputs into txt
    $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
    fwrite($myfile,"Name:   ");
    fwrite($myfile,$name);
    fwrite($myfile,"   Email:   ");
    fwrite($myfile, $email);
    fwrite($myfile, PHP_EOL);
    fclose($myfile);
}

             
         } else {
             echo 'Please choose what to do with data.';
         }
        }
        //output the user's data
        echo"<br><br>";
        echo "<table id='table'>";
        echo  "<tr>";
        echo "<td id='col1'>$yourInp is:  $name</td>";
        echo  "</tr>";
        echo  "<tr>";
        echo "<td id='col2'>$inpEmail is: $email</td>";
        echo  "</tr>";
        echo "</table>";
    ?>  
    <button id="back">Go back to form.</button>

    <script type="text/javascript"> //back to main page
    document.getElementById("back").onclick = function () {
        location.href = "php form.php";
    };
</script>
<br><br>
<p>You wrote something wrong? Delete content of .txt file</p>

<form method="post">
    <button name="del">Delete data from txt</button>
</form>
    <?php
        if(isset($_POST['del']))
        {
            unlink("newfile.txt");
        }
    ?>
</body>
</html>