<link rel="stylesheet/less" type="text/css" href="/public/css/navbar.less">
<link href="/public/css/notKnows.css" rel="stylesheet">
<link href="/public/css/theEnd.css" rel="stylesheet">

<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid" id="specContainer">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <img alt="Brand" src="/public/img/logo.png" width="119px" height="19px" style="margin-top: 41px; margin-left: 82px;">
                </a>
            </div>
        </div>
    </nav>
</header>
<input type="hidden" id="storeCSV" value="<?=base_url()?>Auth/storeDataCSV">
<input type="hidden" id="get_csrf_token_name" value="<?php echo $this->security->get_csrf_token_name(); ?>">
<input type="hidden" id="get_csrf_hash" value="<?php echo $this->security->get_csrf_hash(); ?>">
<div id="page-wrap">
    <h1>404</h1>
    <h2>Sorry, page not found. Go to <a href="<?php echo site_url('Home/index') ?>">Home page</a></h2>
</div>
