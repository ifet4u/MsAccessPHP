<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APPNAME ?></title>
    <!-- Bulma CSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <style>
        
        .section {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 50px auto;
            max-width: 600px;
            text-align: center;
        }
        h1 {
            color: #ff3860;
            font-size: 2.5em; /* Povećava veličinu naslova */
            margin-bottom: 20px; /* Dodajemo razmak ispod naslova */
        }
        p {
            color: #333;
            font-size: 1.2em; /* Povećava veličinu paragrafa */
            margin-bottom: 30px; /* Dodajemo razmak ispod paragrafa */
        }
        a {
            color: #3273dc;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<section class="section">
    <div class="container">
        <h1 class="title">404 - no need to explain!</h1>
        <p> <?= $msg ?> <br><br>
            • Check your URI<br />
            • Check Class names<br />
            • Check again<br /><br /><br /></p>
        <h3><a href="/">Go to homepage </a></h3>
    </div>
</section>

</body>
</html>
