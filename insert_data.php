
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="insert_data.css">
</head>
<body>
<form action="includes/submit.inc.php" method="POST">
        <H1> PERSONAL DETAILS FORM</H1>

        <H5> KINDLY FILL IN THE FOLLOWING FORM CAREFULLY : </H5>
        <h4> 1. ENTER YOUR FIRST NAME  </h4>
        <INPUT ID= "TXT1" name="first" placeholder= "first name"> 
        <br>
        <h4> 1. ENTER YOUR LAST NAME  </h4>
        <INPUT ID= "TXT12" name="last" placeholder= "first name"> 
        <br>
        <h4> 2. ENTER YOUR REGISTRATION NUMBER  </h4>
        <INPUT ID= "txt3" name="registration" placeholder= "reg. no."> 
        <br>
        <h4> 3. ENTER YOUR STREAM </h4>
        <INPUT ID= "txt4" name="stream" placeholder= "stream">
        <br>
        <!--select name="stream" id= "selectbox">
                    <option value = "cs"> CSE </option>
                    <option value = "it"> IT </option>
                    <option value = "mechanical"> MECHANICAL </option>

                </select-->
        <br>
        

        <h4> 5. ENTER YOUR CITY  </h4>
        <INPUT ID= "txt5" name="city" placeholder= "city">
        <br>
        <!--select name="city" id= "selectbox">
            <option value ="dl"> DELHI </option>
            <option value ="jp"> JAIPUR </option>
            <option value ="mp"> MADHYA PRADESH </option>

        </select-->
        <br>
        <br> 
        
        <button type="submit" name="submit"> SUBMIT </button>

        <footer>
            <ul class ="list">
                <li> <i>about</i> </li>
                <li> <i>contact us</i></li>
                <li> <i>help</i></li>

            </ul>

        </footer>
        
</form>

</body>
</html>
