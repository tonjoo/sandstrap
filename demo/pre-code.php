<?php 
$jsEvent = "$('#target').on('hidden.collapse', function () {
    // event saat target menghilang/hidden
});
$('#target').on('show.collapse', function () {
    // event saat target tampil/show
});";

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
}';
?>