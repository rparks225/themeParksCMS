<!-- JS & CSS Compilers -->
<?php global $main;  $secHash = md5( date('Y/m/d:h:i').uniqid().rand(0,9999999) ); ?>

<div class="row">
    <div class="card blue-grey darken-1">
        <div class="card-content white-text">
            <span class="card-title">CSS Compiler</span>
                {-- if (file_exists(''.$main.'libraries/css/themeParks-styles.css')) --}
                    <p>Style sheet have successfully been compiled</p>
                {-- else --}
                    <p>You're Style sheets aren't compiled. Click the link below to begin. 
                {-- endif --}
        </div>
        <div class="card-action">
            {-- if (!file_exists(''.$main.'libraries/css/themeParks-styles.css')) --}
                <a href="{% echo ROOT %}tp-styles?compile={% echo $secHash %}">Compile CSS</a>
            {-- else --}
                <a target="_blank" href="libraries/css/themeParks-styles.css">View CSS</a><span style="margin-right:16px;">|</span> 
                <a href="tp-styles?compile={% echo $secHash %}&Delete={% echo $secHash %}">Delete CSS</a>    
            {-- endif --}
        </div>
    </div>
</div>

<div class="row">
    <div class="card blue-grey darken-1">
        <div class="card-content white-text">
            <span class="card-title">JS Compiler</span>
            {-- if (file_exists(''.$main.'libraries/js/themeParks-Scripts.js')) --}
                <p>JS sheet have successfully been compiled</p>
            {-- else --}
                <p>You're JS sheets aren't compiled. Click the link below to begin. 
            {-- endif --}
        </div>
        <div class="card-action">
            {-- if (!file_exists(''.$main.'libraries/js/themeParks-Scripts.js')) --}
                <a href="{% echo ROOT %}tp-js?compile={% echo $secHash %}">Compile JS</a>
            {-- else --}
                <a target="_blank" href="libraries/js/themeParks-Scripts.js">View Js</a><span style="margin-right:15px;">|</span>
                <a href="tp-js?compile={% echo $secHash %}&Delete={% echo $secHash %}">Delete JS</a> 
            {-- endif --}
        </div>
    </div>
</div>

<!-- JS & CSS Compilers -->