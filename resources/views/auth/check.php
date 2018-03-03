<?php

if(isset($_GET['Submit']))
{
    if($_GET['Email']==""||$_GET['Password']=="")
    {
        echo 'username and password cannot be blanked';
    }
}

