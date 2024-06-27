<!DOCTYPE html>
<html>
<head>
    <title>Add to Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-5">
            <!-- Logo home -->
    <div class="fixed-top" style="right: 10px; bottom: 10px;">
        <a href="web.php">
            <img src="img/logoTH.png" alt="Home" width="50" height="50">
        </a>
    </div>
    <h1>Your CART</h1>
        <div class="row">          
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">                  
                        <h5 class="card-title">Product Name</h5>
                        <p class="card-text">Product description goes here.</p>
                        <p class="card-text">Price: $120</p>
                        <form>
                            <div class="form-group">
                                <label for="quantity">Quantity:</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" value="1">
                            </div>
                            <a href="view-cart.php" class="btn btn-success">Add to Cart</a>
                            <a href="view-cart.php" class="btn btn-primary ml-2">View Cart</a>
                            <a href="index.php" class="btn btn-outline-primary ml-2">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
