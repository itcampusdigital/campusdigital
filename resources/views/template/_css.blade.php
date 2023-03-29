<!-- <style type="text/css">
:root{ 
	--primary: #46157a;
	--primary-s: #e1c7fd;
	--primary-ss: #F2E9FB;
	--secondary: #fdd100; 
	--secondary-s: #FFF6C8;
	--shadow: 0 .125rem .25rem rgba(0,0,0,.075);
	--transition: .25s ease;
	--red: #DC3545;
	--red-s: #FAE3E5;
	--green: #28A745;
	--green-s: #CBF2D4;
	--blue: #17A2B8;
	--blue-s: #D9F6FA;
	--yellow: #ffc107;
	--yellow-s: #FFFBED;
	--primary-f: invert(17%) sepia(30%) saturate(4368%) hue-rotate(253deg) brightness(90%) contrast(112%);
	--red-f: invert(30%) sepia(55%) saturate(3274%) hue-rotate(336deg) brightness(89%) contrast(92%);
	--green-f: invert(48%) sepia(76%) saturate(476%) hue-rotate(82deg) brightness(93%) contrast(87%);
	--blue-f: invert(58%) sepia(40%) saturate(6271%) hue-rotate(154deg) brightness(95%) contrast(82%);
	--yellow-f: invert(88%) sepia(25%) saturate(5407%) hue-rotate(350deg) brightness(101%) contrast(105%);
}
html, body {}
html{scroll-behavior: smooth;}
p {font-size: 1rem;}
.btn-link-primary {color: #46157a;}
.btn-link-primary:hover {color: #46157a; text-decoration: underline;}
.btn-link-secondary {color: #fdd100;}
.btn-link-secondary:hover {color: #fdd100; text-decoration: underline;}
.site-btn {color: #fff; background-color: #46157a; border: 2px solid #46157a; transition: .2s ease}
.site-btn:hover {color: #46157a; background-color: transparent;}
.icon-box-item .ib-icon {color: unset; border-color: unset; border: unset;}
.icon-box-item:hover .ib-icon {color: unset; background-color: unset;}
.sb-whatsapp {color: #333; background-color: #25D366; border-color: #25D366;}
.sb-whatsapp:hover {color: #25D366; background-color: transparent;}
.transition{transition: var(--transition);}
.card{border-radius: .5rem!important;}
.card .card-img-top{border-radius: .5rem .5rem 0 0!important;}
.card .card-footer{border-radius: 0 0 .5rem .5rem!important;}
.set-bg {background-repeat: no-repeat; background-size: cover; background-position: bottom right;}
.text-truncate-2{overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;}
.text-truncate-3{overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;}
.text-truncate-4{overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical;}

.pagination{box-shadow: var(--shadow);}
.page-link,
.page-item.disabled .page-link,
.page-item.active .page-link{border: unset;}
.page-item.active .page-link{color: #fff; background-color: #46157a;}
.page-link{color: #46157a}
.page-link:hover{color: #46157a}
.page-link:focus{box-shadow:0 0 0 .25rem var(--primary-s);}

.navbar .navbar-nav .nav-item {margin-left: .3rem; margin-right: .3rem;}
.navbar .navbar-nav .nav-link {color: #333; font-size: 17px; font-weight: 600;}
.navbar .navbar-nav .nav-link:hover {color: #46157a;}
.navbar .navbar-nav .active > .nav-link {color: #46157a;}
.navbar.shrink{box-shadow: var(--shadow);}

.collapse.navbar-collapse.show{height: calc(100vh - 3rem)!important; overflow-y: auto;}
.btn-collapse, .btn-collapse .fa-angle-up{transition: var(--transition);}
.btn-collapse[aria-expanded="true"]{color: var(--primary); font-weight: bold;}
.btn-collapse.collapsed .fa-angle-up{transform: rotate(180deg)}
.btn-navbar {font-size: 17px; font-weight: 600; margin-left: .5rem; margin-right: .5rem;}
.btn-login {background-color: #46157a; border: 2px solid #46157a; color: #fff; padding: 1rem; border-radius: 0;}
.btn-login:hover {background-color: transparent; color: #46157a;}
.btn-register {background-color: #fdd100; border: 2px solid #fdd100; color: #46157a; font-weight: 600; padding: 1rem; border-radius: 0;}
.btn-register:hover {background-color: transparent; color: #46157a;}
.btn-register-2 {font-size: 1rem; text-transform: uppercase; font-weight: 600; background-color: #fdd100; border: 2px solid #fdd100; color: #46157a; padding: 1rem 2rem; border-radius: 0; transition: .2s ease;}
.btn-register-2:hover {background-color: transparent; color: #fdd100;}
.navbar .navbar-toggler {background-color: transparent; border-width: 2px; border-color: transparent; color: var(--dark); font-size: 1.5rem;}
.navbar .navbar-toggler:hover {background-color: transparent; color: var(--dark); border-color: var(--primary-s);}
.navbar .navbar-brand img{height: 60px;}
.map .shadow{box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;}
.map iframe{height: 200px;}
.bg-theme-2{background-color: var(--secondary);}
/*.page-top-section {border-top: 5px solid #fdd100!important;}*/

.front-card img{transition: 0.2s;}
.front-card:hover img{transform: scale(0.8)}
.front-card-zoom{position: relative; margin: auto; overflow: hidden;}
.front-card-zoom img{transition: 0.2s; display: block;}
.front-card-zoom:hover .img-hover{transform: scale(1.1)}
.front-card-zoom .img-hover{transition: 0.2s; display: block;}
.front-card-zoom:hover img{transform: scale(1.1)}
.overlay-galery{opacity: 1; position: absolute; width: 100%; height: 200px; background-color: rgba(2,48,71,0.5); transition: 0.2s}
.overlay-banner{opacity: 1; position: absolute; width: 100%; height: 300px; background-color: rgba(2,48,71,0.5); transition: 0.2s}
.overlay-galery-content{color: #fff; font-size: 5rem; position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); width:100%; transition: 0.2s}
.banner-video{height: 300px; background-position: center; background-size: cover;}

.footer-section {background-color: #46157a;}
.footer-widget ul li {margin-bottom: 5px;}

/*Buttod*/
.btn-primary{color:var(--primary);background-color:var(--primary-s);border-color:var(--primary-s)}
.btn-primary:hover{color:var(--white);background-color:var(--primary);border-color:var(--primary)}
.btn-check:focus+.btn-primary,
.btn-primary:focus{color:var(--white);background-color:var(--primary);border-color:var(--primary);box-shadow:0 0 0 .25rem var(--primary-s)}
.btn-secondary{color:var(--secondary);background-color:var(--secondary-s);border-color:var(--secondary-s)}
.btn-secondary:hover{color:var(--white);background-color:var(--secondary);border-color:var(--secondary)}
.btn-check:focus+.btn-secondary,
.btn-secondary:focus{color:var(--white);background-color:var(--secondary);border-color:var(--secondary);box-shadow:0 0 0 .25rem var(--secondary-s)}
.btn-success{color:var(--green);background-color:var(--green-s);border-color:var(--green-s)}
.btn-success:hover{color:var(--white);background-color:var(--green);border-color:var(--green)}
.btn-check:focus+.btn-succes,
.btn-success:focus{color:var(--white);background-color:var(--green);border-color:var(--green);box-shadow:0 0 0 .25rem var(--green-s)}
.btn-info{color:var(--blue);background-color:var(--blue-s);border-color:var(--blue-s)}
.btn-info:hover{color:var(--white);background-color:var(--blue);border-color:var(--blue)}
.btn-check:focus+.btn-succes,
.btn-info:focus{color:var(--white);background-color:var(--blue);border-color:var(--blue);box-shadow:0 0 0 .25rem var(--blue-s)}
.btn-warning{color:var(--yellow);background-color:var(--yellow-s);border-color:var(--yellow-s)}
.btn-warning:hover{color:var(--white);background-color:var(--yellow);border-color:var(--yellow)}
.btn-check:focus+.btn-succes,
.btn-warning:focus{color:var(--white);background-color:var(--yellow);border-color:var(--yellow);box-shadow:0 0 0 .25rem var(--yellow-s)}
.btn-danger{color:var(--red);background-color:var(--red-s);border-color:var(--red-s)}
.btn-danger:hover{color:var(--white);background-color:var(--red);border-color:var(--red)}
.btn-check:focus+.btn-succes,
.btn-danger:focus{color:var(--white);background-color:var(--red);border-color:var(--red);box-shadow:0 0 0 .25rem var(--red-s)}

.btn-primary:not(:disabled):not(.disabled).active,
.btn-primary:not(:disabled):not(.disabled):active,
.show>.btn-primary.dropdown-toggle{color: var(--white);background-color: var(--primary);border-color: var(--primary);}
.btn-primary:not(:disabled):not(.disabled).active:focus,
.btn-primary:not(:disabled):not(.disabled):active:focus,
.show>.btn-primary.dropdown-toggle:focus{box-shadow:0 0 0 .25rem var(--primary-s);}
.btn-check:active+.btn-primary,
.btn-check:checked+.btn-primary,
.btn-primary.active,
.btn-primary:active,
.show>.btn-primary.dropdown-toggle{color:var(--white);background-color:var(--primary);border-color:var(--primary)}
.btn-check:active+.btn-primary:focus,
.btn-check:checked+.btn-primary:focus,
.btn-primary.active:focus,
.btn-primary:active:focus,
.show>.btn-primary.dropdown-toggle:focus{box-shadow:0 0 0 .25rem var(--primary-s);}
.btn-primary.disabled,.btn-primary:disabled{color:var(--primary);background-color:var(--white);border-color:var(--primary-s)}



/* style own */
.rounded-15{border-radius: .5rem!important}
.rounded-1{border-radius: 1em!important}
.rounded-2{border-radius: 2em!important}
.rounded-3{border-radius: 3em!important}
.rounded-4{border-radius: 4em!important}
.rounded-5{border-radius: 5em!important}

/*.navbar{border-bottom: 3px solid #fdd100}*/
.navbar .navbar-nav .nav-link.active, .navbar .navbar-nav .show>.nav-link {color: #46157a;}
.feature-section .owl-item{margin-top: 1em; margin-bottom: 1em; padding: 4em 0 1em 0;}
.mitra-section .owl-item{margin-top:.2em; margin-bottom: .2em; padding: 4em 0 1em 0;}

.btn-link-primary:hover{color: #46157a; text-decoration: none;}

/*beasiswa*/
.page-top-section {
    height: auto;
    padding: 3em 0em;
    margin-top: 5em;
}
.account.dropdown-toggle:after{display: none;}
.dropdown-item.active, .dropdown-item:active {text-decoration: none; color: #fff; background: #46157a}
.dropdown-menu{border: unset; box-shadow: var(--shadow); border-radius: .5rem;}
.dropdown-item{padding: .75rem 1.5rem;}
.owl-carousel .owl-item img{margin: auto; width: 80%}
.sticky-sidebar{position: sticky; top: 6em; height: fit-content}
.package .list-group-item{background: unset; border: unset;}
/*----------------------------------------------------------*/
.custom-shape-divider-bottom-1619236286 {bottom: 0;  left: 0;  width: 100%;  overflow: hidden;  line-height: 0;  transform: rotate(180deg);}
.custom-shape-divider-bottom-1619236286 svg {position: relative; display: block; width: calc(100% + 1.3px); height: 100px;}
.custom-shape-divider-bottom-1619236286 .shape-fill {fill: var(--light)}
/*--------------------------------------------------------*/
.custom-shape-divider-top-1615970510 {
position: absolute;
left: 0;
width: 100%;
overflow: hidden;
line-height: 0;
transform: rotate(180deg);
}

.custom-shape-divider-top-1615970510 svg {
position: relative;
display: block;
width: calc(100% + 1.3px);
height: 89px;
}

.custom-shape-divider-top-1615970510 .shape-fill {
fill: #FFFFFF;
box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
}

/*----------------------------------------------------*/
.custom-shape-divider-bottom-1615971570 {
position: absolute;
left: 0;
width: 100%;
overflow: hidden;
line-height: 0;
transform: rotate(0deg);
}

.custom-shape-divider-bottom-1615971570 svg {
position: relative;
display: block;
width: calc(100% + 1.3px);
height: 89px;
}

.custom-shape-divider-bottom-1615971570 .shape-fill {
fill: #FDD100;
}
/*--------------------------------------------------*/
.custom-shape-divider-top-1616034455 {
position: absolute;
left: 0;
width: 100%;
overflow: hidden;
line-height: 0;
}

.custom-shape-divider-top-1616034455 svg {
position: relative;
display: block;
width: calc(100% + 1.3px);
height: 150px;
}

.custom-shape-divider-top-1616034455 .shape-fill {
fill: #FDD100;
}
/*----------------------------------------------------*/
.custom-shape-divider-bottom-1616034763 {
position: absolute;
left: 0;
width: 100%;
overflow: hidden;
line-height: 0;
}

.custom-shape-divider-bottom-1616034763 svg {
position: relative;
display: block;
width: calc(100% + 1.3px);
height: 150px;
}

.custom-shape-divider-bottom-1616034763 .shape-fill {
fill: #FFF;
}
[v-cloak] { display: none; }
.img-header{max-width: 400px;}
@media (max-width: 991.98px){
	h1{font-size: 40px;}
    .icon-box-item .ib-icon {width: 76px; margin: 0 auto;}
    .icon-box-item:hover .ib-icon{color: #340369; background-color: transparent;}
    .ib-text{text-align: center}
    .owl-carousel .owl-item img{margin: auto; width: 60%}
    .account.dropdown-toggle:after{display: inline-block;}
    .sticky-sidebar{position: unset; top: unset; height: unset;}
	.img-header{max-width: 100%;}
	.navbar .navbar-brand img{height: 40px;}
	.overlay-banner,
	.banner-video{height: 180px;}
}
@media (min-width: 768px) {
	.d-md-box{display: -webkit-box!important}
}
@media (max-width: 767.98px) {
	.overlay-banner,
	.banner-video{height: 180px;}
}
@keyframes fab{
    0% {transform: scale(1);}
    25% {transform: scale(1);}
    50% {transform: scale(.9);}
    75% {transform: scale(1);}
    100% {transform: scale(1);}
}
</style> -->