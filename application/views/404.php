<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>404 Error</title>
  
  <style>
    body {
        background-color: #f7f7f7;
        font-family: Arial, sans-serif;
    }

        .container {
        text-align: center;
        margin-top: 200px;
    }

    h1 {
        font-size: 120px;
        color: #555;
        margin: 0;
    }

    p {
        font-size: 24px;
        color: #777;
        margin: 10px 0;
    }

    a {
        color: #333;
        text-decoration: none;
        font-size: 18px;
    }

  </style>

</head>
<body>
  <div class="container">
    <h1>404</h1>
    <p>Oops! The page you're looking for doesn't exist.</p>
    <a href="/">Go back to homepage</a>
  </div>
  
  <script>
    window.onload = function() {
    var homepageLink = document.querySelector('a');
    homepageLink.addEventListener('click', function(event) {
        event.preventDefault();
        window.location.href = '/';
    });
    };

  </script>
</body>
</html>