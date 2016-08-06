<style>
.carousel-wrapper{position:relative;margin-bottom:15px;}
.carousel-wrapper .carousel-item{position:absolute;top:0;bottom:0;left:0;right:0;padding:25px 50px;opacity:0;transition:all 0.5s ease-in-out}
.carousel-wrapper .carousel-item .arrow{position:absolute;top:0;display:block;width:50px;height:100%;-webkit-tap-highlight-color:transparent;background:url("http://dancort.es/assets/img/css-carousel/carousel-arrow-dark.png") 50% 50%/20px no-repeat}
.carousel-wrapper .carousel-item .arrow.arrow-prev{left:0}.carousel-wrapper .carousel-item .arrow.arrow-next{right:0;-webkit-transform:rotate(180deg);transform:rotate(180deg)}
.carousel-wrapper .carousel-item.light{color:white}
.carousel-wrapper .carousel-item.light .arrow{background:url("http://dancort.es/assets/img/css-carousel/carousel-arrow-light.png") 50% 50%/20px no-repeat}
@media (max-width: 500px){
	.carousel-wrapper .carousel-item .arrow,.carousel-wrapper .carousel-item.light .arrow{background-size:10px;background-position:10px 50%}}
	.carousel-wrapper [id^="target-item"]{display:none}
	.carousel-wrapper .item-1{z-index:2;opacity:1}
	.carousel-wrapper *:target ~ .item-1{opacity:0}
	.carousel-wrapper #target-item-1:target ~ .item-1{opacity:1}
	.carousel-wrapper #target-item-2:target ~ .item-2,.carousel-wrapper #target-item-3:target ~ .item-3{z-index:3;opacity:1}
</style>

<div class="carousel-wrapper" style="height: 400px;">
  <span class="hidden-target" id="target-item-1"></span>
  <span class="hidden-target" id="target-item-2"></span>
  <span class="hidden-target" id="target-item-3"></span>
  <div class="carousel-item item-1 light" style="background: rgb(120,120,120); 50% 50% / cover;">
    <h2>This is the first item</h2>
    <p>Idque Caesaris facere voluntate liceret: sese habere. Qui ipsorum lingua Celtae, nostra Galli appellantur. Inmensae subtilitatis, obscuris et malesuada fames.</p>
    <a class="arrow arrow-prev" href="#target-item-3"></a>
    <a class="arrow arrow-next" href="#target-item-2"></a>
  </div>
  <div class="carousel-item item-2">
    <h2>This is the second item</h2>
    <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus. Idque Caesaris facere voluntate liceret: sese habere. Cum sociis natoque penatibus et magnis dis parturient. Nihilne te nocturnum praesidium Palati, nihil urbis vigiliae.</p>
    <a class="arrow arrow-prev" href="#target-item-1"></a>
    <a class="arrow arrow-next" href="#target-item-3"></a>
  </div>
  <div class="carousel-item item-3 light" style="background: linear-gradient(to bottom, rgba(0,0,0,0.2), rgba(256,256,256,0.4)), url(/assets/img/css-carousel/harbor.jpg) 50% 50% / cover;">
    <h2>And finally, the third</h2>
    <p>Quis aute iure reprehenderit in voluptate velit esse. Cum ceteris in veneratione tui montes, nascetur mus. Prima luce, cum quibus mons aliud  consensu ab eo. Quam temere in vitiis, legem sancimus haerentia. Sed haec quis possit intrepidus aestimare tellus.</p>
    <a class="arrow arrow-prev" href="#target-item-2"></a>
    <a class="arrow arrow-next" href="#target-item-1"></a>
  </div>
</div>