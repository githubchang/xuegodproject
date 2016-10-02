<?php 
session_start(); 
session_destroy(); 
//echo "<script>alert('成功退出');window.location.href='../login.php'</script>";
header('Location:../login.php');
/*
  var r=confirm("Press a button")
  if (r==true)
    {
    document.write("You pressed OK!")
    }
  else
    {
    document.write("You pressed Cancel!")
    }
 */
