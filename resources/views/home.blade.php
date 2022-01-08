<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>Home</title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
@include('Navbar');
    <div class="table-head">
    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Operation</th>
        </tr>
        </thead>
       <tbody>
       @foreach($data as $member)
    <tr>
        <td>{{$member['name']}}</td>
        <td>{{$member['email']}}</td>
        <td>{{$member['phone']}}</td>
        <td>
            <a class="edit" href={{"edit/".$member['id']}}>Edit</a>
            <a href={{"delete/".$member['id']}}>Delete</a>
        </td>
    </tr>
    @endforeach
       </tbody>
   
    </table>
    </div>
    
 
</body>
</html>