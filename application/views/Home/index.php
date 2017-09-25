<link href="/public/css/home.css" rel="stylesheet">
<div class="container-fluid header">
    <div class="container">
        <a href="#">
            <div class="logo"><img src="/public/img/logo.png" alt="Head Logo"></div>
        </a>
    </div>
</div>

<div class="container-fluid home-hero-bg">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-6 left"></div>
        <div class="col-md-6 col-sm-6 col-xs-6 right"></div>
    </div>
</div>

<div class="container hero-content">
    <div class="inner">
        <h1>Where would you like to go?</h1>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6 you">
                <a href="<?php echo base_url() ?>home/notKnows">
                    <div class="inner">
                        <table>
                            <tr>
                                <td>
                                    <h3>You Tell Me</h3>
                                    <h4>We’ll help you plan your plan next destination</h4>
                                </td>
                        </table>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 me">
                <a href="<?php echo base_url() ?>home/knowsAlready">
                    <div class="inner">
                        <table>
                            <tr>
                                <td><h3>I’ll Tell You!</h3>
                                    <h4>Already know where you want to go?<br>
                                        We’ll tell you what’s good!</h4>
                                </td>
                        </table>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid main-content">

    <div class="container how">
        <div>
            <h2>How can Gettravely help you?</h2>
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12 item item-1">
                    <p>Book your Flights!
                        Book Accommodation!
                        Best Activities!
                        Travel Tips & Tricks!</p>
                    <img src="/public/img/car.jpg" alt="car">
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 item item-2">
                    <img src="/public/img/ship.jpg" alt="ship">
                    <p>Budget advice!
                        Weather & Climate Index!
                        Best time of year to travel!
                        News & Current Events!</p>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 item item-3">
                    <p>Price Index!
                        Tourist Safety Index!
                        Sights & Sounds!
                        Local Events & Festival!</p>
                    <img src="/public/img/girl.jpg" alt="girl">
                </div>
            </div>
        </div>
    </div>

    <div class="container places">
        <h2>All your info & itineraries in one place!</h2>
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <a href="<?php echo base_url() ?>/auth" class="footerLink">
                    <div class="item">
                        <img src="/public/img/sf.jpg" alt="city-photo">
                        <h3>San Francisko</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <a href="<?php echo base_url() ?>/auth" class="footerLink">
                    <div class="item" class="footerLink">
                        <img src="/public/img/lv.jpg" alt="city-photo">
                        <h3>Las Vegas</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <a href="<?php echo base_url() ?>/auth" class="footerLink">
                    <div class="item" >
                        <img src="/public/img/bos.jpg" alt="city-photo">
                        <h3>Boston</h3>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <a href="<?php echo base_url() ?>/auth" class="footerLink">
                    <div class="item">
                        <img src="/public/img/sf.jpg" alt="city-photo">
                        <h3>San Francisko</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <a href="<?php echo base_url() ?>/auth" class="footerLink">
                    <div class="item">
                        <img src="/public/img/lv.jpg" alt="city-photo">
                        <h3>Las Vegas</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <a href="<?php echo base_url() ?>/auth" class="footerLink">
                    <div class="item">
                        <img src="/public/img/bos.jpg" alt="city-photo">
                        <h3>Boston</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>