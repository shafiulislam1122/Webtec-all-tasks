<html>
<body>
    <h2>HTML Forms</h2>

    <from action="/action_page.php">
       
    <table>
    <tr>
            <td>First Name: </td>
            <td>
        <input type="text"first name= "first name" placeholder>
</td>
</tr>
        
            <tr>
            <td>last name: </td>
            <td>
        <input type="text" last name= "last name" placeholder= >
</td>
</tr>


            <tr>
            <td>Age: </td>
            <td> 
        <input type="text" age = "age" placeholder>
        </td>
</tr>
        
<tr>
            <td> Designation : </td>
            <td>
               
        <input type ="radio" name="designation ">junior programmer 
        <input type ="radio" name="designation ">senior programmer 
        <input type ="radio" name="designation ">project lead
        </td>
</tr>

<tr>
            <td> Preferred language: </td>
            <td>
<input type="checkbox" name="Preferred language">JAVA

<input type="checkbox" name="Preferred language">PHP
 
<input type="checkbox" name="Preferred language">C++

</td>
</tr>



<tr>
            <td> Email : </td>
            <td>

        <input type="text"email= "email" placeholder>
        </td>
</tr>
      
        <tr>
            <td>   Password : </td>
            <td>
        <input type="text"password= "password" placeholder>
        
        </td>
</tr>
 
<tr>
            <td>   Please choose a file: </td>
            <td>
<input type="submit"name="b" value="Choose File"> No file chosen
 
</td>
</tr>
<tr>
    <td>
<input type="submit"name="submit" value="Submit">
<input type="reset"name="reset" value="Reset">
</tr>
</td>

</table>
</form>

</body>
</html>