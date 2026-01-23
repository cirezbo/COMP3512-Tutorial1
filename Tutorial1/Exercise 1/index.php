<!DOCTYPE html>
<html lang="en">

    <head>
        <title></title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
    </head>

    <body>

        <form method="POST" action="Tutorial1\Exercise 1\process.php"></form>

            <h1>Registration Form</h1>

            <br/><br/>

            <label>First Name:
                <br/> &ensp; &ensp;
                <input type="text" name="firstName" value="" placeholder="Enter your first name" required/>
            </label>

            <br/><br/>

            <label>Last Name:
                <br/> &ensp; &ensp;
                <input type="text" name="lastName" value="" placeholder="Enter your last name" required/>
            </label>

            <br/><br/>

            <label>Email Address:
                <br/> &ensp; &ensp;
                <input type="text" name="email" value="" placeholder="Enter your email" size="20" required/> 
            </label>

            <br/><br/>

            <label>Password:
                <br/> &ensp; &ensp;
                <input type="text" name="password" value="" placeholder="Enter a password" size="20" required/> 
            </label>

            <br/><br/>

            Program:
            <br/> &ensp; &ensp;
            <select name="program">
                <option>-- Select a program --</option>
                <option id="WD">Web Development</option>
                <option id="CIS">Computer Information Systems</option>
                <option id="CS">Computer Science</option>
            </select>

            <br/><br/>

            Study Mode:
             <br/>
             &ensp; &ensp;
            <label>
                <input type="radio" name="studyMode">Full-time
            </label>
            &ensp;
            <label>
                <input type="radio" name="studyMode">Part-time
            </label>

            <br/><br/>

            <button type="submit" value="Register">Register</button>

    </body>
</html>
