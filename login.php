<html>

<!-- 
===============================================

#File: Main.php
#Function: Login page, sends the login details to the signin.php file to be processed.

===============================================
-->

<title>Log In</title>
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
        border: 1px solid #5ebeecbf;
        margin-top: 10%;
        width: 34%;
        background: #5ebeec7a;
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
    input:hover{
        background: #ffffff;
    }
    #submit{
        background: #046492;
        border: 0;
        border-radius: 5px;
        color: #ffffff;
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
            <form action="signIn.php" method="post">
            <h1 align="center" id="he_a"> SIGN IN</h1>
                <table width="500">
                <tr>
                    <td width="127" height="30" align="left"><p id="a_ee" style="font-size: 20px;"><b>E-mail:</b></p></td>
                    <td width="400" ><input id="textbox" type="email" name="email" style="width: 100%;" /></td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td height="30" align="left"><p id="a_pp" style="font-size: 20px;"><b>Password:</b></p></td>
                    <td width="400"><input id="textbox" type="password" name="password" style="width: 100%;"/></td>
                </tr>
                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr align="right">
                    <td><a class="back" name="back" href="home.php">BACK</a></td>
                    <td><input id="submit" type="submit" name="submit" value="SIGN IN"></td>
                </tr>    
                </table>
                <br><br>
                <a align="center" href="signUp.php" style="font-size: 25px;"> CREATE A NEW ACCOUNT </a>
                <br>
            </form> 
        </div>
        
    </body>

</html>