<?php
include "../Control/RegCheck.php";
?>
<!DOCTYPE html>
<head>
<h1>Registration Form</h1>
</head>
<body  text="black">
	<hr>
	<form action= "" method ="post" enctype="multipart/form-data">
        <fieldset>
            <table >
                <tr>
                    <td>FirstName:</td>
                    <td><input type="text" name="FirstName"></td>
                    <td>
                        <?php
                        echo $fnameerr;
                        ?>
                    </td>
	     	    </tr>
                <tr></tr><tr></tr>
			    <tr>
                    <td>LastName:</td>
                    <td><input type="text" name="LastName"></td>
                    <td>
                        <?php
                        echo $lnameerr;
                        ?>
                    </td>
                </tr>
                <tr></tr><tr></tr>
                <tr>
                    <td>Age:</td>
                    <td><input type="number" name="Age"></td> 
                    <td>
                        <?php
                        echo $ageerr;
                        ?>
                    </td>
                </tr>
                <tr></tr><tr></tr>  
                <tr>
                    <td>Email:</td>
                    <td><input type="Email" name="Email"></td>
                    <td>
                        <?php
                        echo $emailerr;
                        ?>
                    </td>
                </tr>
                <tr></tr><tr></tr> 
                <tr>
                    <td>Password:</td>
                    <td><input type="Password" name="Password"></td>
                    <td>
                        <?php
                        echo $passerr;
                        ?>
                    </td>
                </tr> 
                <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                <tr>
                    <td>Designation:</td>
                <td>•<input type="radio" name="Designation" value="junior Programmer">Junior Programmer</td></tr>
                <tr><td><td>•<input type="radio" name="Designation"value="Senior Programmer">Senior Programmer</td></td></tr>
                <tr><td><td>•<input type="radio" name="Designation"value="Project Leader">Project Lead</td></td></tr>
                    <td>
                        <?php
                        echo $derr;
                        ?>
                    </td>
                </tr>
                <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                <tr>
                    <td>
                        Prefferred language:
                    </td>
                    <td>•<input type="checkbox" name="java" value="JAVA">JAVA</td></tr>
                <tr><td><td>•<input type="checkbox" name="php" value="PHP">PHP</td></td></tr>
                <tr><td><td>•<input type="checkbox" name="c++" value="C++">C++</td></td></tr>
                    </td>
                    <td>
                        <?php
                        echo $lerr;
                        ?>
                    </td>
                </tr>
                <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                <tr>
                    <td>
                        please choose a file:
                    </td>
                    <td><input type="file" name="myfile"></td>
                    <td>
                        <?php
                        echo $fileerr;
                        ?>
                    </td>
                </tr> 
            </table>
            <h2 >
                <input type="submit" name="Submit" >
                <input type="reset" name="Reset">
            </h2>
        </fieldset>
    </form>
</hr>
</body>
</html>