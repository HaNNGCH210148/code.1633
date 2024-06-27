<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card bg-secondary text-white">
                    <div class="card-header text-center">
                        <h2>Login</h2>
                    </div>
                    <div class="card-body">
                        <form method="post" action="">
                            <div class="form-group">
                                <label for="usn">Username</label>
                                <input type="text" class="form-control" id="usn" name="usn" required>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password</label>
                                <input type="password" class="form-control" id="pwd" name="pwd" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" name="login">Login</button>
                        </form>
                        <?php
                        if(isset($_POST['login']))
                        {
                            $usn = $_POST['usn'];
                            $pwd = $_POST['pwd'];
                            $rows = array(
                                array(1,"admin","123"),
                                array(2,"guest","456")
                            );
                            $n = 0;
                            for($i = 0; $i < count($rows); $i++)
                            {
                                if($usn === $rows[$i][1] && $pwd === $rows[$i][2])
                                    $n++;
                            }
                            if($n > 0)
                            {
                                header("Location: web.php");
                            }
                            else
                            {
                                echo "<h1 style='color: white; text-align: center; margin-top: 20px;'>Account is invalid</h1>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
