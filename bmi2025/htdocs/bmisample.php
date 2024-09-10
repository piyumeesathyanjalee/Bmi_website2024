<!DOCTYPE html>
<html>

<header>
<title>
Body Mass Index
</title>
</header>
<body>
<?php include('navigation/header2.php'); ?>

    <table class="tb">
    <caption><h1>Submition Form</h1></caption>
    <form action="input.php" method='POST'>

            <tr>
                <th> Name of Citizen</th>
                <td><input type='text' name='name' placeholder="Name..."></td>
            </tr>

            <tr>
                <th> Height</th>
                <td><input type='number' name='height' placeholder="Height... (in cm)"></td>
            </tr>

            <tr>
                <th> Weight</th>
                <td><input type='number' name='weight' placeholder="Weight... (in kg)"></td>
            </tr>

            <tr>
                <th> Email</th>
                <td><input type='email' name='email' placeholder="username@domain"></td>
            </tr>


           
            <tr>
                <th> Gender</th>
                <td><input type='radio' name='gender' value='M'> Male</td>
            </tr>


            <tr>
                <th></th>
                <td><input type='radio' name='gender' value='F'> Female</td>
            </tr>

            <tr>
			<th><input type='reset' value='Reset'></th>
			<td><input type='submit' name='submit' value='Submit'></td>
		</tr>          
</tr>





</form>
</table>
</body>
</html>