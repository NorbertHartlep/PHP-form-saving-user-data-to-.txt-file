<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Form with saving to txt file, and some Bootstrap</title>
</head>
<body>

<h1>Form</h1>
  
    <div id="container-fluid">
    <form method="post" action="inputs.php" id="form">
        <input id="name" type="text" placeholder="name"  name="name" required></input><br><br>
        <input id="email" type="email" placeholder="email" name="email" required></input> <br><br>
        <select name="options" id="optionss">
        <option value="" disabled selected>Choose option</option>
        <option name="print" value="save" id="option1">Write your inputs under the button and save them to .txt file</option>
        <option name="noprint" value="output" id="option2">Write your inputs under the button</option>
        </select><br><br>
        <button id="submit" type="Submit" name="formSubmit" >Send your data :D</button>
    </form> 
    <br><br> 
    </div>
</body>
</html>