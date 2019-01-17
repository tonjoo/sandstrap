<?php include 'header.php'; ?>
<?php include 'pre-code.php'; ?>

    <div id="page-wrapper" class="page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="sidebar-wrap">
                        <div class="sidebar">
                            <ul>
                                <li class="js-target-scroll"><a href="#keunggulan">Keunggulan</a></li>
                                <li class="js-target-scroll"><a href="#build-system">Build System</a></li>
                                <li class="js-target-scroll"><a href="#js">JS</a></li>
                                <li class="js-target-scroll"><a href="#breakpoint">Breakpoint</a></li>
                                <li class="js-target-scroll"><a href="#grid-example">Grid Example</a></li>
                                <li class="js-target-scroll"><a href="#utilities">Utilities</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <section class="main-section">
                        <h2 class="section-title" id="keunggulan">Keunggulan</h2>

                        <div class="content">
                            <ol>
                                <li>Ukuran file css yang dihasilkan: 23KB</li>
                                <li>Ukurann file js yang dihasilkan: 2KB</li>
                                <li>Support pure javascript tanpa jQuery</li>
                            </ol>                       
                        </div>
                    </section>

                    <section class="main-section">
                        <h2 class="section-title" id="build-system">Build System</h2>

                        <div class="content">
                            <p>Build system menggunakan grunt, module yang digunakan:</p>
                            <ol>
                                <li>SASS, untuk compile file scss ke css</li>
                                <li>Autoprefixer, kalo sebelumnya sering menggunakan mixin vendor-prefix kali ini kita menghilangkan mixin tersebut dan menggantinya dengan module grunt autoprefixer yang otomatis generate prefix vendor agar support major browser</li>
                                <li>Uglify, untuk minify js</li>
                                <li>Watch, fitur watch untuk membaca perubahan file kita dan otomatis menjalankan module yang lain</li>
                            </ol>                       
                        </div>
                    </section>

                    <section class="main-section">
                        <h2 class="section-title" id="js">JS</h2>

                        <div class="content">
                            <p>Fitur js yang disediakan kali ini cuma fitur collapse yang biasa digunakan untuk responsive menu/header</p>
                            <p>Cara menggunakan mirip dengan punya bootstrap</p>

                            <h4>Button/Toggle</h4>
                            <p><pre lang="plaintext"> <?= htmlentities('<a class="collapsed" href="#" title="" data-toggle="collapse" data-target="#navbar" data-animation="false">Menu Toggle</a>', ENT_COMPAT, 'UTF-8')?> </pre></p>
                            <p>cukup memakai attribute <code>data-toggle="collapse"</code> dan <code>data-target="#id-target"</code>, attribut <code>data-animation="false"</code> digunakan untuk mematikan animasi <code>slideUp</code> dan <code>slideDown</code> dan hanya memakai <code>toggleClass</code></p>

                            <p><b>Contoh target collapse:</b></p>
                            <p><pre lang="plaintext"> <?= htmlentities('<div id="navbar"></div>', ENT_COMPAT, 'UTF-8') ?> </pre></p>

                            <p><b>Event: </b></p>
                            <p><pre lang="plaintext"><?= $jsEvent ?></pre></p>
                        </div>
                    </section>

                    <section class="main-section">
                        <h2 class="section-title" id="breakpoint">Breakpoint</h2>

                        <div class="content">
                            <p>Breakpoint yg digunakan</p>
                            <p><pre><?= $breakpoint ?></pre></p>
                            <p><pre><?= $hasilBreakpointMin ?></pre></p>
                            <p><pre><?= $hasilBreakpointMax ?></pre></p>
                        </div>
                    </section>

                    <section class="main-section">
                        <h2 class="section-title" id="grid-example">Grid Example</h2>
                        
                        <div class="content">
                            <p>Menggunakan full fitur grid bootstrap 4 <code>.container, .row, .col-*-*</code>.</p>

                            <p><b>Equal Width</b></p>

                            <p>
                                <pre><?= htmlentities($equalWidth, ENT_COMPAT, 'UTF-8') ?></pre>
                            </p>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="col-item"></div>
                            </div>
                            <div class="col">
                                <div class="col-item"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="col-item"></div>
                            </div>
                            <div class="col">
                                <div class="col-item"></div>
                            </div>
                            <div class="col">
                                <div class="col-item"></div>
                            </div>
                        </div>
                    </section>

                    <section class="main-section">
                        <h2 class="section-title" id="utilities">Utilities</h2>
                        <p>Utilities yang tidak digunakan: <code>.col-offset-*, .col-push-*, .order-*-*</code> dan utilities display flex lainnya. Apabila dibutuhkan silahkan masukan manual di file <code>src/sass/theme/_utilities.scss</code></p>
                        <p>Utilities default yang disediakan:</p>
                        <p><pre><?= htmlentities($utilities, ENT_COMPAT, 'UTF-8') ?></pre></p>
                    </section>

                </div>
                <!-- .col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#page-wrapper -->

<?php include 'footer.php'; ?>

<script>
    headerScroll();

    $('.js-target-scroll > a').click(function(e) {
        var direction = $(this).attr('href');
        var heightHeader = $('#main-header.header-fixed').length ? $('#main-header.header-fixed').innerHeight() + 30 : 30;

        $('.js-target-scroll').removeClass('active');
        $(this).parent().addClass('active');

        if(direction == '#top') {
            $('html, body').animate({
                scrollTop: 0
            }, 1000);
        } else {
            $('html, body').animate({
                scrollTop: $(direction).offset().top - heightHeader
            }, 1000);
        }

        e.preventDefault();
    });

    $(window).scroll( function() {
        headerScroll();
    });

    function headerScroll(event) {
        var scrollTop = $(window).scrollTop();
        if(scrollTop > 0.1) {
            $('.sidebar').addClass('sidebar--scrolled');
        } else {
            $('.sidebar').removeClass('sidebar--scrolled');
        }
    }
</script>