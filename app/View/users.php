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
                <li class="is-active"><a href="/home/users" aria-current="page">Users</a></li>
            </ul>
        </nav>

        <p>User List</p>
        <?php foreach($users as $key => $user):?>
        	Name : <?= $user['name']." ".$user['lastname'] ?> <a href='/home/user/<?= $key ?>'>view user</a><br>
        <?php endforeach; ?> 
    </div>
</section>

</body>
</html>