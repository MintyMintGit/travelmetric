1. composer install
2. /application/config/config.php need to change $config['base_url'] = 'http://travelmetric.loc'; to url host
3. need to check .htaccess in root folder. If it is don't, create it and put
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php/$1 [L]
4. open browser https://www.google.com/recaptcha/intro/android.html press Get reCAPTCHA
and register Register a new site, reCAPTCHA V2; Get the site key and put it to 
/application/views/Auth/index.php change value sitekey': '6LeRuzEUAAAAANQ0F6K5-p_5VIPR9OL5ugjVsTKS' to new
5. facebook config - https://developers.facebook.com/apps register web app; get secret key and 
going to application/config/facebook.php,  change facebook_app_id and facebook_app_secret and facebook_login_redirect_url and facebook_logout_redirect_url
