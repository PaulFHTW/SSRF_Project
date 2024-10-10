<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/contact.css"> 
        <title>SSRF Blog</title>
    </head>

    <body>
        <?php include 'includes/navbar.php';?>

        <form action="contact.php" method="post">
            <div class="container">
                <label for="name"><b>Name</b></label>
                <input type="text" placeholder="First Name" name="name" required>

                <label for="email"><b>E-Mail</b></label>
                <input type="email" placeholder="Enter E-Mail" name="email" required>

                <label for="Website"><b>Website</b></label>
                <input type="text" placeholder="www.mypersonalsite.com" name="url" required>
                <button type="submit">Submit</button>
            </div>
        </form>

        <?php
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $url = $_POST['url'];
                $name = $_POST['name'];
                $email = $_POST['email'];

                // create a new cURL resource
                $ch = curl_init();

                // set URL and other appropriate options
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_HEADER, 0);

                // grab URL and pass it to the browser
                curl_exec($ch);

                // close cURL resource, and free up system resources
                curl_close($ch);
            }
        ?> 

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</hmtl>