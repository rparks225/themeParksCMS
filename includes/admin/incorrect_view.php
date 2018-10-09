<!-- Open Content area-->
{# $ips = new secPage() #}

{-- if ( $ips->authorize() == 'true' ) --}

<!--Form with header-->
<div class="card wow fadeInDown" data-wow-delay="0.3s">
    <div class="card-body">

        <form action="" 
              id="loginform"  
              method="post" 
              role="form" 
              autocomplete="off">
            <!--Header-->
            <div class="form-header" style="text-align:center;">
                <img src="{% echo ROOT %}includes/admin/assets/images/logo.png" style="width:50%;margin:0 auto;">
            </div>
            &nbsp;
            <span>{# newEE('wrong') #}</span>

            <!--Body-->
            <div class="md-form">
                <i class="fa fa-user prefix white-text"></i>
                <input style="height:40px;color:white;" type="text" class="username form-control"  id="username">
                <label for="username">Your name</label>
            </div>

            <div class="md-form">
                <i class="fa fa-lock prefix white-text"></i>
                <input style="height:40px;color:white;" type="password" class="password form-control" id="password">
                <label for="password">Your password</label>
            </div>
            &nbsp;
            <div class="text-center">
                <button class="btn btn-primary btn-lg">Login</button>
                <hr>
                <div class="inline-ul text-center d-flex justify-content-center">
                    <a class="p-2 m-2 fa-lg tw-ic"><i class="fa fa-twitter white-text"></i></a>
                    <a class="p-2 m-2 fa-lg li-ic"><i class="fa fa-linkedin white-text"> </i></a>
                    <a class="p-2 m-2 fa-lg ins-ic"><i class="fa fa-instagram white-text"> </i></a>
                </div>
            </div>
        </form>

    </div>
</div>
{-- else --}

<div style="text-align:center;">
    <h1 class="text-white">Sorry!</h1>
    <p class="text-white">You are not authorized to use this app</p>
</div>

{-- endif --}
<!--/Form with header-->

<!-- Close Content area-->
