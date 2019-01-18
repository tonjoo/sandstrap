<?php include 'header.php'; ?>
<?php include 'pre-code.php'; ?>

    <div id="page-wrapper" class="page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="sidebar-wrap">
                        <?php @include 'sidebar.php'; ?>
                    </div>
                </div>
                <div class="col-md-8">
                    <section class="main-section">
                        <h2 class="section-title" id="advantages">Advantages</h2>

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

                        <div class="content">                            
                            <p>Utilities yang tidak digunakan: <code>.col-offset-*, .col-push-*, .order-*-*</code> dan utilities display flex lainnya. Apabila dibutuhkan silahkan masukan manual di file <code>src/sass/theme/_utilities.scss</code></p>
                            <p>Utilities default yang disediakan:</p>
                            <p><pre><?= htmlentities($utilities, ENT_COMPAT, 'UTF-8') ?></pre></p>
                        </div>
                    </section>
                    
                    <section class="main-section">
                        <h2 class="section-title" id="pagination">Pagination</h2>

                        <div class="content">
                            <p>Pagination element</p>

                            <p><pre><?= htmlentities($pagination, ENT_COMPAT, 'UTF-8') ?></pre></p>
                            <div class="pagination-wrapper">
                                <ul class="page-numbers">
                                    <li><a class="prev page-numbers" href="#"><span class="ion-chevron-left"></span></a></li>
                                    <li><span aria-current="page" class="page-numbers current">1</span></li>
                                    <li><a class="page-numbers" href="#">2</a></li>
                                    <li><a class="page-numbers" href="#">3</a></li>
                                    <li><a class="page-numbers" href="#">...</a></li>
                                    <li><a class="page-numbers" href="#">22</a></li>
                                    <li><a class="next page-numbers" href="#"><span class="ion-chevron-right"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <section class="main-section">
                        <h2 class="section-title" id="typography">Typography</h2>

                        <div class="content">
                            <p>Style for typography standard content editor, example: <a href="single.php">example-post</a></p>
                        </div>
                    </section>

                    <section class="main-section">
                        <h2 class="section-title" id="icon">Icon</h2>

                        <div class="content">
                            <p>Built with <a href="https://ionicons.com/v2/" target="_blank">ionicons v2</a>. for cuting size we just use necessary icon, if you need to add another icon copy class in <code>src/sass/ionicons/_ionicons-icons-full.scss</code> to <code>src/sass/ionicons/_ionicons-icons.scss</code></p>
                        </div>
                    </section>

                    <section class="main-section">
                        <h2 class="section-title" id="share">Share</h2>
                        
                        <div class="content">
                            <p><pre><?= htmlentities($share, ENT_COMPAT, 'UTF-8') ?></pre></p>
                        </div>
                        <div class="share-post d-flex justify-content-end">
                            <div class="share-post__item">
                                <a class="social-item social-facebook" href="#"><span class="social-item__icon"><i class="ion-social-facebook"></i></span></a>
                            </div>
                            <div class="share-post__item">
                                <a class="social-item social-twitter" href="#"><span class="social-item__icon"><i class="ion-social-twitter"></i></span></a>
                            </div>
                            <div class="share-post__item">
                                <a class="social-item social-google" href="#"><span class="social-item__icon"><i class="ion-social-googleplus"></i></span></a>
                            </div>
                            <div class="share-post__item">
                                <a class="social-item social-linkedin" href="#"><span class="social-item__icon"><i class="ion-social-linkedin"></i></span></a>
                            </div>
                            <div class="share-post__item">
                                <a href="#" class="social-item social-whatsapp"><i class="ion-social-whatsapp"></i></a>
                            </div>
                            <div class="share-post__item">
                                <a href="#" class="social-item social-instagram"><i class="ion-social-instagram"></i></a>
                            </div>
                        </div>                           
                    </section>

                    <section class="main-section">
                        <h2 class="section-title" id="button">Button</h2>

                        <div class="content">
                            <p><pre><?= htmlentities($btn, ENT_COMPAT, 'UTF-8') ?></pre></p>
                            <p>Want to make another button? use this.</p>
                            <p><pre><?= htmlentities($make_btn, ENT_COMPAT, 'UTF-8') ?></pre></p>
                        </div>

                        <a href="#" class="btn btn-primary">Example Button</a>
                    </section>

                    <section class="main-section">
                        <h2 class="section-title" id="form">Form</h2>
                        
                        <div class="content">
                            <p>Replace default style <code>select</code></p>
                            <p><pre><?= htmlentities($select, ENT_COMPAT, 'UTF-8') ?></pre></p>
                        </div>
                        <div class="select-box">
                            <select name="" id="">
                                <option value="">Date (newest)</option>
                                <option value="">Date (latest)</option>
                            </select>
                        </div>
                    </section>

                    <section class="main-section">
                        <h2 class="section-title" id="header-footer">Header Footer</h2>

                        <div class="content">
                            <p>Build with general header footer full responsive, use in this demo, and example single page <a href="single.php">example-post</a></p>
                        </div>
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