/* Introduction
This takes 3 functions to complete the inactive session task.

1. We need to check if the person is actually logged in using our isLogged function
2. We need the function to check the time the page loaded, and when the last page was loaded
3. We need a function to log the user out after inactivity.

It is reccomended that you place the 3 functions in the same file, and have this file
included on EVERY page that requires a login to view the page.

Function sessionX() MUST come after session_start() */

<?php 
# Start a session 
session_start(); 
# Check if a user is logged in 
function isLogged(){ 
    if($_SESSION['logged']){ # When logged in this variable is set to TRUE 
        return TRUE; 
    }else{ 
        return FALSE; 
    } 
} 

# Log a user Out 
function logOut(){ 
    $_SESSION = array(); 
    if (isset($_COOKIE[session_name()])) { 
        setcookie(session_name(), '', time()-42000, '/'); 
    } 
    session_destroy(); 
} 

# Session Logout after in activity 
function sessionX(){ 
    $logLength = 1800; # time in seconds :: 1800 = 30 minutes 
    $ctime = strtotime("now"); # Create a time from a string 
    # If no session time is created, create one 
    if(!isset($_SESSION['sessionX'])){  
        # create session time 
        $_SESSION['sessionX'] = $ctime;  
    }else{ 
        # Check if they have exceded the time limit of inactivity 
        if(((strtotime("now") - $_SESSION['sessionX']) > $logLength) && isLogged()){ 
            # If exceded the time, log the user out 
            logOut(); 
            # Redirect to login page to log back in 
            header("Location: /login.php"); 
            exit; 
        }else{ 
            # If they have not exceded the time limit of inactivity, keep them logged in 
            $_SESSION['sessionX'] = $ctime; 
        } 
    } 
} 
# Run Session logout check 
sessionX(); 
?>
