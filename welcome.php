<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body class="bg-grey">

<nav class="nav text-center bg-dark text-white p-3 ">
    <h1>HomePage</h1>
    
</nav>
    
<div class="container row">
    <div class="col-md-12 p-5 text-center">
        <h2>Welcome, <?php echo $_GET['name']; ?></h2>
    </div>
</div>


</body>
</html>