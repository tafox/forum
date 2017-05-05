<!DOCTYPE html>
<html>
    <head>
        <title>Register!</title>
    </head>
    <h1>Input your registration information below!</h1>
    <body>
        <form action="/" method="post">
            User Name:
            <input type="text" name="userName">
            <br>
            Email:
            <input type="text" name="email">
            <br>
            Password:
            <input type="password" name="password">
            <br>
            Date of Birth:  
            <input type="text" name="dayDOB"> 
            <select name="monthDOB">
                <option value="jan">Jan</option>
                <option value="feb">Feb</option>
                <option value="mar">Mar</option>
                <option value="may">May</option>
                <option value="jun">Jun</option>
                <option value="jul">Jul</option>
                <option value="aug">Aug</option>
                <option value="sep">Sep</option>
                <option value="oct">Oct</option>
                <option value="nov">Nov</option>
                <option value="dec">Dec</option>
            </select>
            <input type="text" name="year"> 
            <br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
