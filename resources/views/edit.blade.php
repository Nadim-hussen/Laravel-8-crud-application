<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Edit-Page</title>
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
   
</head>
<body>
<nav>
<ul class="links">
            <li><a href="/">Home</a></li>
        </ul></nav>
 <div class="form-head">
     <div class="sub-head">
     <h2>Update User</h2>
 <form action="/edit" method="POST">
        @csrf
        <div class="form-name">
        <input type="hidden" name="id" value="{{$data['id']}}" /> <br/>
        </div>
        <div class="form-name">
        <input type="text" name="name" value="{{$data['name']}}" /> <br/>
        </div>
        <div class="form-email">
        <input type="email" name="email" value="{{$data['email']}}" /><br/>
        </div>
        <div class="form-phone">
        <input type="number" name="phone" value="{{$data['phone']}}"  /> <br/>
        </div>
        <div class="form-button">
        <button type="submit">Submit</button>
        </div>
    </form>
     </div>
     
 </div>

</body>
</html>