<!DOCTYPE html>
<html>

<header>
<title>
Body Mass Index
</title>
<link rel="stylesheet" href="../css/styles.css"/>
</header>
<body>
<?php include('navigation/header2.php'); ?>
<h2>BMI formula</h2>
        <p class="para1">Below are the equations used for calculating <b>BMI</b> in the <em>International System of Units</em> (SI):</p>
    <br>

    <div class="formula">
    <table id="tb">
    <tr>
        <td>BMI = </td>
            <td>
                <table>
    	            <tr><td>mass (kg)</td></tr>
                    <tr><td><hr color="black"></td></tr>
                    <tr><td>height <sup>2</sup> (m)</td></tr>
                </table>
            </td>
    </tr>
    </table>
    </div>

<br><br>

    <table class="tb">
    <caption><h1>Submition Form</h1></caption>
    <form action="insert.php" method='POST'>

            <tr>
                <th> Name of Citizen</th>
                <td><input type='text' name='name' placeholder="Name..."></td>
            </tr>

            <tr>
                <th> Date of birth</th>
                <td><input type='date' name='dob'></td>
            </tr>

            <tr>
                <th> Age</th>
                <td><input type='number' name='age' placeholder="Age... (in years)"></td>
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
                <th> Country</th>
                <td>
                <select name="country" id="country">
                        <option value="">Select Country</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="USA">USA</option>
                        <option value="Canada">Canada</option>
                        <option value="Switzerland">Switzerland</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th colspan="2">
                <label for="review"> Review of BMI: &nbsp;&nbsp</label>
                <textarea name="message" rows="5" cols="20">comment here...</textarea>
                </th>
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