<?php

//$Email=$_POST['$Email'];
//$Password=$_POST['$Password'];
if(isset($_GET['Submit']))
{
    if($_GET['Email']==""||$_GET['Password']=="")
    {
        echo 'username and password cannot be blanked';
    }
}

