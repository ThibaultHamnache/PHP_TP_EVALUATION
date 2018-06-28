<?php

$header = file_get_contents('./template/header.html');
echo str_replace('%test%', 'FunkoShop', $header);
?>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="img_slide d-block img-fluid" src="./img/blackpanther_slide.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="img_slide d-block img-fluid" src="./img/khalgrogro.jpg" alt="Second slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="./img/dany&drogon.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <h3>Daenerys & Drogon</h3>
                            </h4>
                            <h5>25 €</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="add-button btn btn-success" onclick="addToCartJS(1, 25)"><a href="">Add</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="./img/viserion.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <h3>Viserion 16cm</h3>
                            </h4>
                            <h5>20 €</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="add-button btn btn-success" onclick="addToCartJS(2, 20)"><a href="">Add</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="./img/rhaegal.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <h3>Rhaegal 16cm</h3>
                            </h4>
                            <h5>20 €</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="add-button btn btn-success" onclick="addToCartJS(3, 20)"><a href="">Add</a></button>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="./img/hulkbuster.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <h3>Hulk Buster 16cm</h3>
                            </h4>
                            <h5>25 €</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="add-button btn btn-success" onclick="addToCartJS(4, 25)"><a href="">Add</a></button>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="./img/spiderman.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Spider-Man</a>
                            </h4>
                            <h5>15 €</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="add-button btn btn-success" onclick="addToCartJS(5, 15)"><a href="">Add</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="./img/blackpant.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Black Panthère</a>
                            </h4>
                            <h5>15 €</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="add-button btn btn-success" onclick="addToCartJS(6, 15)"><a href="">Add</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

$footer = file_get_contents('./template/footer.html');
echo $footer;
?>
