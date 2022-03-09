<?php
$conn=mysqli_connect("localhost","root","","webexam");
if($conn)
{
    echo "connection established \r";
}
else
{
    echo "connection not established \r";
}
if(isset($_POST['submit']))
{
    $sname=$_POST['sname'];
    $sno=$_POST['sno'];
    $semail=$_POST['semail'];
    $spassword=$_POST['spassword'];
    $sgender=$_POST['sgender'];
    $sprogram=$_POST['sprogram'];
    $sdate=$_POST['sdate'];
    $scourse=$_POST['scourse'];
    $lower=preg_match('@[a-z]@',$spassword);
    $upper=preg_match('@[A-Z]@',$spassword);
    $special=preg_match('@[#%^&*]@',$spassword);

    if($sname=="")
    {
        echo "enter your name \r";
        $stat=0;
    }
    if($sno=="")
    {
        echo "enter your roll no \r";
        $stat=0;
    }
    if($semail=="")
    {
        echo "enter your email \r";
        $stat=0;
    }
    elseif(!filter_var($semail,FILTER_VALIDATE_EMAIL))
    {
        echo "enter valid email \r";
        $stat=0;
    }
    if($spassword=="")
    {
        echo "enter your password\r";
        $stat=0;
    }
    elseif(!$lower||!$upper||!$special)
    {
        echo "enter strong password";
        $stat=0;
    }
    if($sgender=="")
    {
        echo "enter your gender\r";
        $stat=0;
    }
    if($sprogram=="")
    {
        echo "enter your program \r";
        $stat=0;
    }
    if($sdate=="")
    {
        echo "enter your date \r";
        $stat=0;
    }
    if($scourse=="")
    {
        echo "enter your course \r";
        $stat=0;
    }
    else 
    {
       $stat=1;
    }
    if($stat=="1"){
       $query="INSERT INTO studdetails VALUES('{$sname}','{$sno}','{$semail}','{$spassword}','{$sgender}','{$sprogram}','{$sdate}','{$scourse}')";
        if(mysqli_query($conn,$query))
          {
             echo "data inserted ";
         }
        else {
             echo "data not inserted";
         }

        }
    } 
?>
<html>
    <head>
        <title>Student detials</title>
        <style>
            input{
                background-color: #fff;

            }
        </style>
    </head>
<body style="background-color: antiquewhite;">
    <center>
    <h1><u>Student Registration Form</u></h1>
    <br><br>
    <form name="frm1" action="" method="POST">
        <table border="1px" style="border-collapse:collapse;background-color:salmon;color: darkbrown;" cellpadding="10" >
            <tr>
                <td><label>Name</label></td>
                <td><input type="text" name="sname" placeholder="enter your name"></td>
            </tr>
            <tr>
                <td><label>Roll No</label></td>
                <td><input type="text" name="sno" placeholder="enter your roll no"></td>
            </tr>
            <tr>
                <td><label>Email</label></td>
                <td><input type="text" name="semail" placeholder="enter your email"></td>
            </tr>
            <tr>
                <td><label>password</label></td>
                <td><input type="password" name="spassword" placeholder="enter your phone password"></td>
            </tr>
            <tr>
                <td><label>Gender</label></td>
                <td><input type="radio" name="sgender" value="female">Female
                    <input type="radio" name="sgender" value="male">Male</td>
            </tr>
            <tr>
                <td><label>Program</label></td>
                <td><input type="checkbox" name="sprogram" value="ug">UG
                    <input type="checkbox" name="sprogram" value="pg">PG</td>
            </tr>
            <tr>
                <td><label>DOB</label></td>
                <td><input type="date" name="sdate" placeholder="enter your DOB"></td>
            </tr>
            <tr>
                <td><label>Course</label></td>
                <td><select  id="scourse" name="scourse">
                    <option selected="" value="default">Select a course</option>
                    <option  value="BCA">BCA</option>
                    <option value="btech">Btech</option>
                    <option value="MCA">MCA</option>
                </select></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center"; ><input type="submit" name="submit"value="Submit"></td>
            </tr>


        </table>
    </form>
        </center>
        </body>
</html>