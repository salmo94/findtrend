<?php

/** @var yii\web\View $this */

$this->title = 'Findtrend';
?>
<div>
    <div class="text-center">
        <div class="title">
            <h1>Minimize your tabs.</h1>
            <h1>Find the trends!</h1>
        </div>
        <div class="subtitile">
            <p>
                Don’t let your computer memories consumes all of those browser tabs. </br>
                Findtrend let you gathers all of your favorite website into one place.
            </p>
        </div>
        <div>
            <p>
                <button type="button" id="get-started" class="btn btn-rounded btn-green" data-bs-toggle="modal"
                        data-bs-target="#modal">
                    Get Started 🔥
                </button>
                <img class="mt-3" src="/images/img-hero.png" alt="#">
            </p>
        </div>
        <div id="rotated-items-content" class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="rotate-block row d-flex justify-content-center">
                    <div class="col-lg-3 rotated-element" style="z-index: 999">
                        <div class="rotated-block top-rotated-block">
                            <a><img src="/images/twitter96.svg"> Cryptopunk - Search</a>
                            <div class="close-btn"><img src="/images/chest.png"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 rotated-element" style="z-index: 998">
                        <div class="rotated-block bottom-rotated-block">
                            <a><img src="/images/pinterest.svg"> Popular Design - Search</a>
                            <div class="close-btn"><img src="/images/chest.png"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 rotated-element" style="z-index: 997">
                        <div class="rotated-block top-rotated-block">
                            <a><img src="/images/facebook.svg"> Product Design - Search</a>
                            <div class="close-btn"><img src="/images/chest.png"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 rotated-element" style="z-index: 996">
                        <div class="rotated-block bottom-rotated-block">
                            <a><img src="/images/ball.svg"> Elon Musk - Search</a>
                            <div class="close-btn"><img src="/images/chest.png"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?=$this->render('modal')?>