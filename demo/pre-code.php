<?php 
$jsEvent = "document.getElementById('target').addEventListener('hidden.collapse', function () {
    // event saat target menghilang/hidden
});
document.getElementById('target').addEventListener('show.collapse', function () {
    // event saat target tampil/show
});";

$css = '<link rel="stylesheet" href="assets/css/sandstrap.min.css">';
$js = '<script src="assets/js/sandstrap.min.js"></script>';

$breakpoint = 'xs: 0,
sm: 576px,
md: 768px,
lg: 992px,
xl: 1200px';

$hasilBreakpointMin = '@include media-breakpoint-up(sm) -> @media (min-width: 576px)
@include media-breakpoint-up(md) -> @media (min-width: 768px)
@include media-breakpoint-up(lg) -> @media (min-width: 992px)
@include media-breakpoint-up(xl) -> @media (min-width: 1200px)';

$hasilBreakpointMax = '@include media-breakpoint-down(lg) -> @media (min-width: 1199.98px)
@include media-breakpoint-down(md) -> @media (min-width: 991.98px)
@include media-breakpoint-down(sm) -> @media (min-width: 767.98px)
@include media-breakpoint-down(xs) -> @media (min-width: 575.98px)';

$equalWidth = '<div class="row">
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
</div>';

$utilities = '.ml-auto {
    margin-left: auto !important;
}

.d-none {
    display: none !important;
}
.d-block {
    display: block !important;
}
.d-flex {
    display: flex !important;
}
.d-table {
    display: table !important;
}

.justify-content-center {
    justify-content: center;
}
.justify-content-end {
    justify-content: flex-end;
}
.justify-content-between {
    justify-content: space-between;
}
.justify-content-around {
    justify-content: space-between;
}
.align-items-center {
    align-items: center;
}

@include media-breakpoint-up(lg) {
    .ml-lg-auto,
    .mx-lg-auto {
        margin-left: auto !important;
    }
    .mr-lg-auto,
    .mx-lg-auto {
        margin-right: auto !important;
    }
    
    .d-lg-block {
        display: block !important;
    }
}
@include media-breakpoint-up(sm) {
    .d-sm-none {
        display: none !important;
    }
    .ml-sm-auto {
        margin-left: auto !important;
    }
}

.no-click {
    pointer-events: none;
}
.img-cover {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    display: block;
}
.img-contain {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: contain;
    display: block;
}
.text-uppercase {
    text-transform: uppercase;
}
.text-center {
    text-align: center;
}
.text-right {
    text-align: right;
}';

$pagination = '<div class="pagination-wrapper">
    <ul class="page-numbers">
        <li><a class="prev page-numbers" href="#"><span class="ion-chevron-left"></span></a></li>
        <li><span aria-current="page" class="page-numbers current">1</span></li>
        <li><a class="page-numbers" href="#">2</a></li>
        <li><a class="page-numbers" href="#">3</a></li>
        <li><a class="page-numbers" href="#">...</a></li>
        <li><a class="page-numbers" href="#">22</a></li>
        <li><a class="next page-numbers" href="#"><span class="ion-chevron-right"></span></a></li>
    </ul>
</div>';

$share = '<div class="share-post d-flex justify-content-end">
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
</div>';

$btn = '<a href="#" class="btn btn-primary">Example Button</a>';
$make_btn = '.btn-custom {
    @include make-btn($bg-color, $fill-color);
}';
$select = '<div class="select-box">
    <select name="" id="" class="form-input">
        <option value="">Date (newest)</option>
        <option value="">Date (latest)</option>
    </select>
</div>';
$custom_gap = '<div class="row gap-15">
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
</div>';
$breadcrumb = '<div class="breadcrumb">
    <ul>
        <li><a href="homepage.php">Beranda</a></li>
        <li><a href="berita.php">Agenda</a></li>
        <li><span>International Conference on Chemistry, Chemical Process and Engineering (IC3PE) 2019</span></li>
    </ul>
</div>';
$grid_var_width = '<div class="row justify-content-center">
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
</div>';
$form = '<form action="">
    <div class="form-box">
        <label for="name">Full Name</label>
        <input type="text" id="name" class="form-input" placeholder="Full Name">
    </div>
    <div class="form-box">
        <label for="email">Email</label>
        <input type="text" id="email" class="form-input" placeholder="Email">
    </div>
    <div class="form-box">
        <label for="dropdown">Example multiple select</label>
        <div class="select-box">
            <select id="dropdown" class="form-input">
                <option value="">Date (newest)</option>
                <option value="">Date (latest)</option>
            </select>
        </div>
    </div>
    <div class="form-box">
        <label for="address">Address</label>
        <textarea id="address" rows="3" class="form-input" placeholder="Address"></textarea>
    </div>
    <div class="form-box">
        <input type="submit" class="btn btn-primary form-submit" value="Submit">
    </div>
</form>';
?>