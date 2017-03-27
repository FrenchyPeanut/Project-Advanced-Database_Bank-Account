<?php
include("config.php");
session_start();
//if(isset($_SESSION['login']) && $_SESSION['login'] != ''){
if(isset($_SESSION['login'])){
    header ("Location: index.php");
    exit; // stop further executing, very important
}

?>

<head>
    <link href="css/styles.css" rel="stylesheet" type="text/css"  media="screen">

</head>

<body>
    <div>
        test
    </div>
    <form action="_login.php" method="POST">
        </br>
    <div>
        <label>Gender</label>
        <select name="sexe">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
    </div>
    </br>
<div>
    <label>First Name</label>
    <input>
</div>
</br>
<div>
    <label>Last Name</label>
    <input>
</div>
</br>
<div>
    <label>address</label>
    <input>
</div>
</br>
<div>
    <label>Phone</label>
    <input>
    <label>Mobile</label>
    <input>
</div>
</br>
<div>
    <label>Password</label>
    <input>
</div>
</br>
<div>
    <label>Confirm Password</label>
    <input>
</div>

</form>

</body>
