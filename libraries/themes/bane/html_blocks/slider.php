<!-- Open Carousel -->
    <?php 
        $pages = array('abbott-house','hancock-park','devereux-house');
        $facilityLocations = array('facility','baneNorth');

        if(title() == 'home'){
            
            echo '<div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div style="text-align:center;" class="carousel-inner" role="listbox">
        <div class="item active">
          <img width="1140" height="400" class="first-slide" src="images/slides/BaneCare-Home-Slider1.jpg" alt="First slide">
          <div class="container">
            <!--<div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you\'re viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>-->
          </div>
        </div>
        <div class="item">
          <img width="1140" height="400" class="second-slide" src="images/slides/BaneCare-Home-Slider2.jpg" alt="Second slide">
          <div class="container">
            <!--<div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>-->
          </div>
        </div>
        <div class="item">
          <img width="1140" height="400" class="third-slide" src="images/slides/BaneCare-Home-Slider3.jpg" alt="Third slide">
          <div class="container">
            <!--<div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>-->
          </div>
        </div>
        <div class="item">
          <img width="1140" height="400" class="third-slide" src="images/slides/BaneCare-Home-Slider4.jpg" alt="Third slide">
          <div class="container">
            <!--<div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>-->
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
                    
            </div>
        </div>
    </div>
</div>';
            
        }else{
            
            
        if (title() == 'facility' || title() == 'baneNorth' || title() == 'baneSouth' || title() == 'baneMetroBoston' || title() == 'baneWest') {
    echo '
      <style>
        @media print {
          body * {
            visibility: hidden;
          }
          #printDirections * {
            visibility: visible;
          }
          #printDirections {
            position: absolute;
            top: 40px;
            left: 30px;
          }
          #side_box_center {
            display: none;
          }
        }
      </style>
      <div id="printDirections">
        <div id="map_canvas"></div>
        <div id="panelBanner">
          <div class="directions-form--wrapper" id="directionPanel">
            <div id="directionButton" class="pull-right directions-form--container">
              <input type="text" placeholder="Enter your address here" id="startAddress" class="form-control">
              <select class="form-control" id="centerChosen">
                <option value="">Select Center</option>
                <option value="lynn">Abbott House Skilled Nursing Home & Rehabilitation</option>
                <option value="marblehead">Devereux House Skilled Nursing Home & Rehabilitation</option>
                <option value="peabody">Rosewood Skilled Nursing Home & Rehabilitation</option>
                <option value="duxbury">Bay Path Rehabilitation & Nursing Center</option>
                <option value="weymouth">Colonial Rehabilitation & Nursing Center</option>
                <option value="quincy">Hancock Park Rehabilitation & Nursing Center</option>
                <option value="braintree">John Scott House Rehabilitation & Nursing Center</option>
                <option value="hingham">Harbor House Rehabilitation & Nursing Center</option>
                <option value="mayflower">Mayflower Place</option>
                <option value="bostonian">The Bostonian Skilled Nursing Home & Rehabilitation</option>
                <option value="brighton">Brighton House Rehabilitation & Nursing Center</option>
                <option value="hyde">Park Place Skilled Nursing Home & Rehabilitation</option>
                <option value="dalton1">Craneville Place Skilled Nursing Home & Rehabilitation</option>
                <option value="pittsfield">Springside Skilled Nursing Home & Rehabilitation</option>
                <option value="dalton">Sugar Hill Skilled Nursing Home & Rehabilitation</option>
              </select>

              <div class="GetDirectionButton">
                <div>
                  <a >Get Directions</a>
                </div>
              </div>
              <div id="printDirectionButton" class="print-directions--btn">
                <div>
                  <a>Print Directions</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="directions" class="print-direction--container"></div>
      </div>
    ';
  }else if(file_exists('images/slides/banecare-'.title().'.jpg')){
                 echo '
<header>
    <div class="container">
        <div class="row">
        <img class="col-md-12 img-responsive" src="images/slides/banecare-'.title().'.jpg">
        </div>
    </div>
</header>

';}else if(file_exists('images/slides/'.title(2).'-skilled-nursing-slider.jpg')){
                 echo '
<header>
    <div class="container">
        <div class="row">
        <img class="col-md-12 img-responsive" src="images/slides/'.title(2).'-skilled-nursing-slider.jpg">
        </div>
    </div>
</header>

';}else{
                
                echo '';
                
            }
        };

    ?>
<!-- Close Carousel -->