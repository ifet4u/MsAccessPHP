<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APPNAME ?></title>
    <!-- Bulma CSS  CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>
<body>

<section class="section">
    <div class="container">
        <h1 class="title"><?= $heading ?></h1>
        
        <nav class="breadcrumb" aria-label="breadcrumbs">
            <ul>
                <li ><a href="/" >Home</a></li>
                <li ><a href="/home/users">Users</a></li>
                <li ><a href="#" aria-current="page">User <?= $user['name'] ?></a></li>
            </ul>
        </nav>

        <p>User Data</p>
        	Name : <?= $user['name'] ?> <br>
        	Last Name : <?= $user['lastname'] ?> <br>
        	Email  : <?= $user['email'] ?> <br>
        	<br>
        	<a href="/home/users">Back</a>
    </div>
</section>

</body>
</html>