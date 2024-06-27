<?php
$rows = array(
	array(1,"img/michelin225_45.jpeg","Michelin 225/45 R18 Pilot Sport 4", "$170","The Michelin 245/45R18 Pilot Sport 4 tire is a product of the Michelin Pilot series - a sports tire for the road, providing strong driving sensations like on the track."),
	array(2,"img/mit1.webp","Michelin 255/55 R18 Sport 3", "$150", "Michelin 255/55R18 Latitude Sport 3 is a product of the Lattitude series, a tire line designed by Michelin exclusively for SUVs and Crossovers. The Latitude Sport 3 is highly regarded for its powerful drivability and outstanding level of safety."),
    array(3,"img/mit2.webp", "Michelin 215/60R16 Energy XM 2+","$120", "Michelin 215/60R16 Energy XM2 + is a tire product of the Energy series, produced by the famous Michelin company. Tires are designed to provide long-term safety and a smooth and comfortable driving experience."),
    array(4,"img/mit3.webp", "Michelin 235/70 R15 LTX Trail","$150", "Michelin 235/70R15 LTX Trail is a tire product of the Crugen HT51 series - a tire line designed for SUVs and light trucks. These tires provide year-round stable traction, excellent durability and a comfortable ride."),
	array(5,"img/brid1.webp","Bridgestone 175/50 R15 EP150", "$120", "Bridgestone 175/50R15 Ecopia EP150 is a product of the Bridgestone Ecopia series - Bridgestone's famous tire line with fuel economy. To do that, Bridgestone experts have improved wet grip and tread durability, giving you a unique experience."),
    array(6,"img/brid2.webp","Bridgestone 175/70 R13 Ecopia", "$150", "Bridgestone 175/70R13 Ecopia EP150 is a product of the Bridgestone Ecopia series - Bridgestone's famous tire line with fuel economy. To do that, Bridgestone experts have optimized the tire's rolling resistance to the lowest level, improving grip on wet roads and tread durability."),
	array(7,"img/brid3.webp","Bridgestone 205/45 R17 Potenza", "$200", "The Bridgestone 205/45 R17 Potenza is the newest and best-selling product of the Ecopia line - a tire famous for its fuel economy. Bridgestone experts have optimized the tire's rolling resistance to the lowest level."),
	array(8,"img/good1.webp","Goodyear 185/60 R14 Duraplus 2", "$100", "Goodyear 185/60 R14 Duraplus 2 is a product of the Ecsta PS31 series - extreme performance summer tires with impressive handling, reliable wet and dry grip. Built for sports coupes and sedans."),
	array(9,"img/good2.webp","Goodyear 255/70 R15 Wrangler", "$150", "Goodyear 255/70 R15 Wrangler is a product of the Bridgestone Turanza line – a tire line designed for luxury cars like the Lexus ES300. It offers a stable, comfortable ride and outstanding quietness."),
    array(10,"img/toyo1.webp","Toyo 225/55 R19 Proxes CF2", "$150", "Toyo 225/55R19 Proxes CF2 is used as original equipment for Mazda CX-5."),
    array(11,"img/toyo2.webp","Toyo 225/55 R19 Proxes R46", "$120", "Toyo 225/55R19 Proxes R19 is used as original equipment for Mazda CX-5."),
    array(12,"img/toyo3.webp","Toyo 185/60R15 NanoEnergy 3", "$250","Toyo 185/60R15 NanoEnergy 3 is a tire product for small and medium-sized sedans with safety, durability and effective fuel economy features.")
)

?>
<div class="row">
<?php
for($i = 0; $i<count($rows); $i++)
{
    if(isset($_GET['inforid'])){
        $inforid = $_GET['inforid'];
        if($inforid != $rows[$i][0])
        continue;
    }
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<div class="container">
    <div class="col-lg-8 border p-3 main-section bg-white">
        <div class="row hedding m-0 pl-3 pt-0 pb-3">
            Product Detail
        </div>
        <div class="row m-0">
            <div class="col-lg-4 left-side-product-box pb-3">
                <img src="<?=$rows[$i][1]?>" class="border p-3">
            </div>
            <div class="col-lg-8">
                <div class="right-side-pro-detail border p-3 m-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="m-0 p-0"><?=$rows[$i][2]?></p>
                        </div>
                        <div class="col-lg-12 mt-3">
                            <p  class="m-0 p-0 price-pro"><?=$rows[$i][3]?></p>
                            <hr class="p-0 m-0">
                        </div>
                        <div class="col-lg-12 pt-2 mt-5">
                            <h2>Tire information:</h2>
                            <span><?=$rows[$i][4]?></span>
                            <hr class="m-0 pt-2 mt-2">
                        </div>
                        <div class="col-lg-12">
                            <h4>Quantity :</h4>
                            <input type="number" class="form-control text-center w-100" value="1">
                        </div>
                        <div class="col-lg-12 mt-3">
                            <div class="row">
                                <div class="col-lg-6 pb-2">
                                    <a href="web_addcart.php" class="btn btn-danger w-100">Add To Cart</a>
                                </div>
                                <div class="col-lg-6">
                                    <a href="payment.php" class="btn btn-success w-100">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php    
}
?>
</div>
<style>
body {
    font-family: 'Roboto Condensed', sans-serif;
    background-color: #f5f5f5;
}

.hedding {
    font-size: 25px;
    color: #ab8181;
}

.main-section {
    position: absolute;
    left: 50%;
    right: 50%;
    transform: translate(-50%, 5%);
}

.left-side-product-box img {
    width: 100%;
}

.right-side-pro-detail p {
    font-size: 25px;
    color: black;
}

.right-side-pro-detail .price-pro {
    color: #E45641;
}

.pro-box-section .pro-box img {
    width: 100%;
    height: 200px;
}
.col-lg-8 {
    flex: 0 0 66.666667%;
    max-width: 100%;
    height: 560px;
}
.right-side-pro-detail{
    height: 450px;
}
.btn-danger{
    font-size: 15px;
}
.btn-success{
    font-size: 15px;
}
.right-side-pro-detail span{
    font-size: 18px;
}
.right-side-pro-detail h2{
    font-weight: bold;
}
</style>    
