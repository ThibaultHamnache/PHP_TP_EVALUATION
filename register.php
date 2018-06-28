<?php

$header = file_get_contents('./template/header.html');
echo str_replace('%test%', 'FunkoShop', $header);
?>
<div class="container">
    <div class="row">
        <div class="col-lg-4 offset-lg-1">
            <form>
                <div class="form-group">
                    <label for="pseudo">Pseudo</label>
                    <input type="text" class="form-control" id="pseudo" aria-describedby="pseudo" placeholder="Enter Pseusdo">
                    <small id="pseudo" class="form-text text-muted">We'll never share your pseudo with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Se connecter</button>
            </form>
        </div>
        <div class="col-lg-4 offset-lg-2">
            <form>
                <div class="form-group">
                    <label for="pseudo">Pseudo</label>
                    <input type="text" class="form-control" id="pseudo" aria-describedby="pseudo" placeholder="Enter Pseusdo">
                    <small id="pseudo" class="form-text text-muted">We'll never share your pseudo with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">S'inscrire</button>
            </form>
        </div>
    </div>
</div>
<?php
$footer = file_get_contents('./template/footer.html');
echo $footer;
?>

