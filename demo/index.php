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
                                <li>Total css built size: 25KB</li>
                                <li>Total js built size: 2KB</li>
                                <li>Support pure javascript without jQuery</li>
                            </ol>                       
                        </div>
                    </section>

                    <section class="main-section">
                        <h2 class="section-title" id="get-started">How to Use</h2>

                        <div class="content">
                            <p><b>CSS</b></p>
                            <p><pre><?= htmlentities($css, ENT_COMPAT, 'UTF-8')?></pre></p>
                            <p><b>JS</b></p>
                            <p><pre><?= htmlentities($js, ENT_COMPAT, 'UTF-8')?></pre></p>
                        </div>
                    </section>

                    <section class="main-section">
                        <h2 class="section-title" id="installation">Installation With Grunt</h2>

                        <div class="content">
                            <ol>
                                <li>Before you start installing this framework, make sure you have installed `grunt`, if you haven't already installed it please check <a href="https://gruntjs.com/getting-started first">https://gruntjs.com/getting-started first</a></li>
                                <li>Run `npm install` to install all dependencies</li>
                                <li>Run `grunt watch` to watch all changes and recompile the css/js file that you changed</li>
                                <li>Now you can edit sass/js files based on your needs and enjoy!</li>
                            </ol>                       
                        </div>
                    </section>

                    <section class="main-section">
                        <h2 class="section-title" id="build-system">Build System</h2>

                        <div class="content">
                            <p>For build system we use grunt, with dependencies:</p>
                            <ol>
                                <li>SASS, to compile file scss to css</li>
                                <li>Autoprefixer, if previously you often use vendor-prefix mixins, this time we remove vendor-prefix mixin and replace it with grunt autoprefixer module which automatically generates the vendor prefix for major browser support</li>
                                <li>Uglify, to minify js</li>
                                <li>Watch, to read our file changes and automatically run another dependencies</li>
                            </ol>                       
                        </div>
                    </section>

                    <section class="main-section">
                        <h2 class="section-title" id="js">JS</h2>

                        <div class="content">
                            <p>JS feature provided this time is only a collapse feature which is commonly used for responsive menus / headers</p>
                            <p>How to use is similar to bootstrap</p>

                            <h4>Button/Toggle</h4>
                            <p><pre lang="plaintext"> <?= htmlentities('<a class="collapsed" href="#" title="" data-toggle="collapse" data-target="#navbar" data-animation="false">Menu Toggle</a>', ENT_COMPAT, 'UTF-8')?> </pre></p>
                            <p>just use attribute <code>data-toggle="collapse"</code> and <code>data-target="#id-target"</code>, attribute <code>data-animation="false"</code> used to turn off animation <code>slideUp</code> and <code>slideDown</code> and only used <code>toggleClass</code></p>

                            <p><b>Example target collapse:</b></p>
                            <p><pre lang="plaintext"> <?= htmlentities('<div id="navbar"></div>', ENT_COMPAT, 'UTF-8') ?> </pre></p>

                            <p><b>Event: </b></p>
                            <p><pre lang="plaintext"><?= $jsEvent ?></pre></p>
                        </div>
                    </section>

                    <section class="main-section">
                        <h2 class="section-title" id="breakpoint">Breakpoint</h2>

                        <div class="content">
                            <p>Breakpoint used</p>
                            <p><pre><?= $breakpoint ?></pre></p>
                            <p><pre><?= $hasilBreakpointMin ?></pre></p>
                            <p><pre><?= $hasilBreakpointMax ?></pre></p>
                        </div>
                    </section>

                    <section class="main-section">
                        <h2 class="section-title" id="grid-example">Grid Example</h2>
                        
                        <div class="content">
                            <p>Use full feature bootstrap grid 4 <code>.container, .row, .col-*-*</code>. Another example you can refer to <a href="https://getbootstrap.com/docs/4.1/layout/grid/">https://getbootstrap.com/docs/4.1/layout/grid/</a></p>

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

                        <div class="content">
                            <p><b>Custom Row Gap</b></p>

                            <p>
                                <pre><?= htmlentities($custom_gap, ENT_COMPAT, 'UTF-8') ?></pre>
                            </p>
                        </div>
                        <div class="row gap-15">
                            <div class="col">
                                <div class="col-item"></div>
                            </div>
                            <div class="col">
                                <div class="col-item"></div>
                            </div>
                        </div>
                        <div class="row gap-40">
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
                        <div class="row gap-60">
                            <div class="col">
                                <div class="col-item"></div>
                            </div>
                            <div class="col">
                                <div class="col-item"></div>
                            </div>
                        </div>

                        <div class="content">
                            <p><b>Variable width content</b></p>

                            <p>
                                <pre><?= htmlentities($grid_var_width, ENT_COMPAT, 'UTF-8') ?></pre>
                            </p>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-2">
                                <div class="col-item"></div>
                            </div>
                            <div class="col-lg-auto">
                                <div class="col-item">Variable width content</div>
                            </div>
                            <div class="col-lg-2">
                                <div class="col-item"></div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col">
                                <div class="col-item"></div>
                            </div>
                            <div class="col-md-auto">
                                <div class="col-item">variable width content</div>
                            </div>
                            <div class="col-lg-2 col">
                                <div class="col-item"></div>
                            </div>
                        </div>
                    </section>

                    <section class="main-section">
                        <h2 class="section-title" id="utilities">Utilities</h2>

                        <div class="content">                            
                            <p>Utilities that are not used: <code>.col-offset-*, .col-push-*, .order-*-*</code> and other flex utilities. If needed, please enter manually in the file <code>src/sass/theme/_utilities.scss</code></p>
                            <p>Default utilities provided:</p>
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
                        <h2 class="section-title" id="breadcrumb">Breadcrumb</h2>

                        <div class="content">
                            <p><pre><?= htmlentities($breadcrumb, ENT_COMPAT, 'UTF-8') ?></pre></p>
                        </div>
                        <div class="breadcrumb">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Category</a></li>
                                <li><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</span></li>
                            </ul>
                        </div>
                    </section>

                    <section class="main-section">
                        <h2 class="section-title" id="icon">Icon</h2>

                        <div class="content">
                            <p>Built with <a href="https://ionicons.com/v2/" target="_blank">ionicons v2</a>. to reduce size we only use necessary icon, if you need to add another icon copy icon class in <code>src/sass/ionicons/_ionicons-icons-full.scss</code> and paste to <code>src/sass/ionicons/_ionicons-icons.scss</code></p>
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

                            <p>If you need sticky header just add class <code>header-fixed</code></p>
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