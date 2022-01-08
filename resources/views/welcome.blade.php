<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>Post-Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    @include('Navbar');
    <div class="form-head">
    <div class="sub-head">
        <h2>Insert Data</h2>
    <form action="" method="POST">
        @csrf
        <div class="form-name">
        <input type="text" name="name" placeholder="Enter your name" /> <br/>
        </div>
        <div class="form-email">
        <input type="email" name="email" placeholder="Enter your email" /><br/>
        </div>
        <div class="form-phone">
        <input type="number" name="phone" placeholder="Enter phone number" /> <br/>
        </div>
        <div class="form-button">
        <button type="submit">Submit</button>
        </div>
        
    </form>
</div>
    </div>

</body>
</html>