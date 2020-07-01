<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <form action="/welcome" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <h1>Buat Account Baru!</h1>
            <h4>Sign Up Form</h4>
            <p>First name:</p>
            <input type="text" id="first_name" name="first">
            <p>Last name:</p>
            <input type="text" id="last_name" name="last">

            <p>Gender:</p>
            <input type="radio" name="gender" value="0">Male <br>
            <input type="radio" name="gender" value="1">Female <br>
            <input type="radio" name="gender" value="2">Other <br>

            <p>Nationality:</p>
            <select>
                <option value="indonesia">Indonesia</option>
                <option value="Singapore">Singapore</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Australia">Australia</option>
            </select>

            <p>Language Spoken:</p>
            <input type="checkbox" name="language" value="0">Bahasa Indonesia <br>
            <input type="checkbox" name="language" value="1">English <br>
            <input type="checkbox" name="language" value="2">Other <br>

            <p>Bio:</p>
            <textarea name="bio" id="bio" cols="30" rows="10"></textarea>
            <br>
            <input type="submit" value="Sign Up">
    </form>
</body>

</html>