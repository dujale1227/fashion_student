<html>

<!-- 
===============================================

#File: Main.php
#Function: Login page, sends the login details to the signin.php file to be processed.

===============================================
-->

<title>Sign Up</title>
    <style> 
    /* CSS Styling */

    * {font-family: sans-serif;}
    a:link {color: rgba(255, 255, 255, 0.8);text-decoration: none;}
    a:visited {color: rgba(255, 255, 255, 0.8);text-decoration: none;}
    a:hover {color:black;text-decoration: none;}
    a:active {color: black;text-decoration: none;}

    body{
        background-image: url("./images/background.png");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        position: relative;
    
    }
    .transparent{
        position: absolute;
        opacity: 0.3;
    }
    form{
        border: 1px solid #04649238;
        margin-top: 10%;
        width: 34%;
        background: #5ebeecbf;
        border-radius: 10px;
        filter: drop-shadow(10px 1px 19px rgba(76, 128, 134, 0.5));
    }
    input{
        height: 40px;
        border-radius: 5px;
        border: none;
        background: #d4e5f3;
        font-size: 20px;

    }
    #textbox{
        width: 100%;
    }
    input:hover{
        background: #ffffff;
    }
    #submit{
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 7px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 12px;
        float: right;
        border-radius: 5px;
       
    }
    #submit:hover{
        background: #ffffff;
        color: black
    }
    .center{
        text-align: center'
    }
    .back{
        background-color: #f44336; /* Green */
        border: none;
        color: white;
        padding: 7px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        float: left;
        border-radius: 5px;
    }
    .back:hover{
        background: #ffffff;
    }
    </style> 
    <body>
        <div class="transparent">
        </div>
        <div align="center" class="center">
            <form action="register.php" method="post">
            <h1 align="center" id="he_a">Customer SIGN UP</h1>
                <table width="500">
                <tr>
                    <td width="127" height="30" align="left"><p id="a_ee" style="font-size: 20px;"><b>Fullname:</b></p></td>
                    <td width="400"><input id="textbox" type="text" name="fullname" /></td>
                </tr>
                <tr></tr><tr></tr>
                <tr>
                    <td width="127" height="30" align="left"><p id="a_ee" style="font-size: 20px;"><b>Address:</b></p></td>
                    <td width="400" align="right"><input id="textbox" type="text" name="address" /></td>
                </tr>
                <tr></tr><tr></tr>
                <tr>
                    <td width="127" height="30" align="left"><p id="a_ee" style="font-size: 20px;"><b>Contact No.:</b></p></td>
                    <td width="400" align="right"><input id="textbox" type="text" name="contact" /></td>
                </tr>
                <tr></tr><tr></tr>
                <tr>
                    <td width="127" height="30" align="left"><p id="a_ee" style="font-size: 20px;"><b>E-mail:</b></p></td>
                    <td width="400" align="right"><input id="textbox" type="email" name="email" /></td>
                </tr>
                <tr></tr><tr></tr>
                <tr>
                    <td height="30" align="left"><p id="a_pp" style="font-size: 20px;"><b>Password:</b></p></td>
                    <td width="400"><input id="textbox" type="password" name="password" /></td>
                </tr>
                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr align="right">
                    <td><a class="back" name="back" href="login.php">BACK</a></td>
                    <td><input style="font-size: 20px;" id="submit" type="submit" name="submit" value="SUBMIT"></td></tr>
                </table>
                <br>
            </form> 
        </div>
        
    </body>

</html>