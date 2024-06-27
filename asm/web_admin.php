<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ADMIN</title>
    <style>
        body{
            width: 100%;
            margin-bottom: 100px;
        }
        div.header{
            width: 100%;
            height: 250px;
            background-color: #000066;
        }
        img{
            width: 100%;
            height: 200px;
        }
        table, th, td {
            border: 1px solid black;
        }
        table{
            margin-left: 150px;
            width: 80%;
        }
        th, td{
            text-align: center;
        }
        h3{
            margin-left: 200px;
            color: white;
            background-color: #000066;
            width: 300px;
            height: 50px;
            text-align: center;
            padding-top: 8px;
            margin-top: 40px;
            border: 2px solid #009966;
        }
        .total p{
            margin-left: 200px;
            font-size: 15px;
        }
        .header a {
            font-size: 24px; 
            color: white; 
            margin-left: 100px; 
            margin-top: 20px; 
            text-decoration: none;
        }
        .main h2{
            text-align: center; 
            padding-top: 20px; 
            color:#003366;
        }
        .main h5{
            margin-left: 200px; 
            padding-top: 20px; 
            color:#6699FF;
        }
        .table img{
            width: 200px; 
            height: 200px;
        }
        .name{
            width: 300px;
        }
        td {
            width: 200px;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="img/logo.png" alt="logo">
        <a href="web.php"><i class="fa fa-home"></i>HOME</a>
    </div>
    <div class="main">
        <h2>Management page</h2>
        <h5>Product Management Panel:</h5>
    </div>
    <div class="table">
        <table>
            <tr>
                <th>Products</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Add</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <tr>
                <td class="name"><img src="img/mit1.webp" alt=""><p>Michelin 255/55 R18 Sport 3</p></td>
                <td>100 pieces</td>
                <td>$150</td>
                <td><button type="button">Add product</button></td>
                <td><button type="button">Edit product</button></td>
                <td><button type="button">Delete product</button></td>
            </tr>
            <tr>
                <td class="name"><img src="img/mit2.webp" alt=""><p>Michelin 215/60R16 Energy XM 2+</p></td>
                <td>70 pieces</td>
                <td>$120</td>
                <td><button type="button">Add product</button></td>
                <td><button type="button">Edit product</button></td>
                <td><button type="button">Delete product</button></td>
            </tr>
            <tr>
                <td class="name"><img src="img/brid1.webp" alt=""><p>Bridgestone 175/50 R15 EP150</p></td>
                <td>68 pieces</td>
                <td>$120</td>
                <td><button type="button">Add product</button></td>
                <td><button type="button">Edit product</button></td>
                <td><button type="button">Delete product</button></td>
            </tr>
            <tr>
                <td class="name"><img src="img/good1.webp" alt=""><p>Goodyear 185/60 R14 Duraplus 2</p></td>
                <td>160 pieces</td>
                <td>$100</td>
                <td><button type="button">Add product</button></td>
                <td><button type="button">Edit product</button></td>
                <td><button type="button">Delete product</button></td>
            </tr>
        </table>
    </div>  
    <div class="total">
        <h3>Total revenue each month:</h3>
        <p>January: $234000.000</p>
        <p>February: $196000.000</p>
        <p>March: $14600.000</p>
    </div>  
</body>
</html>