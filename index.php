<?php
require('controller/manager.class.php');
require('controller/users.class.php');
try
{
    if(isset($_GET['page']))
    {
        if($_GET['page'] == 'home')
        {
            home_page();
        }
        elseif($_GET['page'] == 'login')
        {
            login_page();
        }
        else
        {
            _404_Error_page();
        }
    }
    else
    {
        home_page();
    }
}
catch(PDOException $e)
{

}