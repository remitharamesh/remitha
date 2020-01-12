<!DOCTYPE html>
<html lang="en">
<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="GET">

    
    <table class="table">
        <tr><td>
            name
        </td>
        <td>
            <input class="form-control" type="text"name="getname">
        </td>
    </tr>
    <tr><td> rollno</td>
    
        <td>
            <input class="form-control" type="text"name="getroll">
        </td>
    </tr>
    <tr><td>college</td>
        <td>
            <input class="form-control" type="text"name="getcollege">
        </td>
    </tr>
    <tr><td
        >admission no</td>
    <td><input class="form-control" type="text"name="getadmno"></td></tr>
    <tr>
        <td></td>
        <td>
            <Button class="btn btn-warning"type="submit"name="getsubmit">submit</Button>
        </td>
    </tr>
    </table>
    </form>
</body>
</html>
<?php
if(isset($_GET["getsubmit"]))
{
    $name=$_GET["getname"];
    $rollno=$_GET["getroll"];
    $college=$_GET["getcollege"];
    $admissionno=$_GET["getadmno"];
    echo $name;
    echo"<br>";
    echo $rollno;
    echo"<br>";
    echo $college;
    echo"<br>";
    echo $admissionno;
}
?>