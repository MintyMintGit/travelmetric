<link rel="stylesheet/less" type="text/css" href="/public/css/navbar.less">
<link href="/public/css/theEnd.css" rel="stylesheet">
<link href="/public/css/notKnows.css" rel="stylesheet">

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid" id="specContainer">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo site_url('Home/index') ?>">
                    <img alt="Brand" id="logo" src="/public/img/logo.png" width="119px" height="19px">
                </a>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <h1>What kind of trip are you looking for?</h1>
    </div>

    <div class="container">
        <h3>Answer our short survey below so we can find you the best options!</h3>
    </div>

</header>



<div class="container questionnaire">
    <div class="form-group">
        <h2 for="formGroupExampleInput">Who are your travel companions?</h2>
        <div class="sliders" id="companions"></div>
        <input type="hidden" value="" id="companionsValue">
        <div class="someValues companionsValue">
            <p>A Group/ Friends </p>
            <p>Family/Kids</p>
            <p>Partner</p>
            <p>Me Myself & I</p>
        </div>
    </div>
    <div class="form-group">
        <h2 for="formGroupExampleInput">I want Snow and Mountains</h2>
        <div class="sliders" id="snow"></div>
        <input type="hidden" value="" id="snowValue">
        <div class="someValues snowValue">
            <p>Not important </p>
            <p>Neutral</p>
            <p>Very important</p>
        </div>
    </div>
    <div class="form-group">
        <h2 for="formGroupExampleInput">I want History, Culture, Museums</h2>
        <div class="sliders" id="history"></div>
        <input type="hidden" value="" id="historyValue">
        <div class="someValues historyValue">
            <p>Not important </p>
            <p>Neutral</p>
            <p>Very important</p>
        </div>
    </div>


    <div class="form-group">
        <h2 for="formGroupExampleInput">I want Sunshine, Swimming, Beaches & Sand</h2>
        <div class="sliders" id="beaches"></div>
        <input type="hidden" value="" id="beachesValue">
        <div class="someValues beachesValue">
            <p>Not important </p>
            <p>Neutral</p>
            <p>Very important</p>
        </div>
    </div>

    <div class="form-group">
        <h2 for="formGroupExampleInput">I’m on a Budget. Help me Pinch my Pennies!</h2>
        <div class="sliders" id="budget"></div>
        <input type="hidden" value="" id="budgetValue">
        <div class="someValues budgetValue">
            <p>Not important </p>
            <p>Neutral</p>
            <p>Very important</p>
        </div>
    </div>

</div>

<footer>
    <div class="container-fluid">
        <button id="submit" class="pull-right btn btn-default specButton" type="submit">See Destinations</button>
    </div>
</footer>