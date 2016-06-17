</div>
<!--Close Content Area-->


</div>
</div>
<!--Close Main Area-->

<?php tpCompile('js'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
    <script async src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
    <script src="<?php echo ROOT; ?>apps/_ee/editease.jquery.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {

            /*====================================================
                        load editEase login link and data into the page
                    ======================================================*/
            $('#loginform').editease();
            $('#loginform').submit(function () {
                return doLogin(loginform);
            });

            $('.gone').click(function () {

                $('ul li b').toggle();
                $('div.wrap').delay(1000).toggleClass('col-md-1 col-md-2');
                $('div.container').toggleClass('col-md-11 col-md-10');


            });

            //Materialize scripts
            $('.parallax').parallax();
            $(".button-collapse").sideNav();
            Materialize.updateTextFields();
            $('select').material_select();
            $('.modal-trigger').leanModal();
            $('.datepicker').pickadate({
                selectMonths: true, // Creates a dropdown to control month
                selectYears: 15 // Creates a dropdown of 15 years to control year
            });


        });
    </script>

    </body>

    </html>