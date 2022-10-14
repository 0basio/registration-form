<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form post</title>
</head>
<body>
    <form method="POST" action="user_data.php">

    <left> <h1>Registration Form</h1></left>

        <label for="name">
            Name: <input type="text" name="name">
        </label> <br>
        <label for="email">
            Email: <input type="email" name="email">
        </label> <br>
        <label for="date of birth">
            Date Of Birth: <input type="date" name="date_of_birth">
        </label> <br>
        <label for="gender">
            Gender: <input type="radio" value="Male" name="gender" checked > Male
            <input type="radio" value="Female" name="gender"> Female  
        </label> <br>
        <label for="country">
            Country: <input type="text" name="country">
        </label> <br>

        <button type="submit">Submit</button>
    </form>



   
</body>
</html>