@extends('app')

@section('title')
Benvenuto
@stop

@section('content')
		<div class="row3">
            <div class="box">
                <div class="col-lg-10 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="/img/aq11.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="/img/aq13.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="/img/aq14.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="/img/aq15.jpg" alt="">
                            </div>                            
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Benvenuti In</small>
                    </h2>
                    <h1 class="brand-name">La Cesta Dei Sapori</h1>
                    <hr class="tagline-divider">
			<!--  
                    <h2>
                        <small>By
                            <strong>Start Bootstrap</strong>
                        </small>
                    </h2>
    <!-- /start bootstrapp -->      
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Chi siamo</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="/img/aq18.jpg" alt="">
                    <hr class="visible-xs">
                    <p>The boxes used in this template are nested inbetween a normal Bootstrap row and the start of your column layout. The boxes will be full-width boxes, so if you want to make them smaller then you will need to customize.</p>
                    <p>A huge thanks to <a href="http://join.deathtothestockphoto.com/" target="_blank">Death to the Stock Photo</a> for allowing us to use the beautiful photos that make this template really come to life. When using this template, make sure your photos are decent. Also make sure that the file size on your photos is kept to a minumum to keep load times to a minimum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Informazioni:
                        <strong>Come ordinare?</strong>
                    </h2>
                    <hr>
                    <p>Scegli la tua cesta di frutta e verdura biologica di stagione e la tipologia di cesta che preferisci.</p>
                    <p> Puoi scegliere tra quattro differenti capienze: 3 Kg, 5 Kg, 7 Kg e 9Kg.</p>
                    <p>Una volta individuata la dimensione della tua cesta ideale, puoi visionare tutti gli ortaggi e i frutti di tutte le stagioni che ti porteremo durante l'anno.</p>
                    <p>Informazioni sul servizio!</p>
                    <p>La Cesta Dei Sapori,è un servizio di consegna a domicilio, a tua scelta tutte le settimane oppure a richiesta.</p>
                     <p>Pagamento in contanti alla consegna.</p>
                </div>                
                <ul class="nav nav-pills">
  					<li role="presentation" class="active"><a href="{{URL::to('articles')}}">I nostri Prodotti</a></li>					
				</ul>           
            </div>
        </div>        
<div class="row">
 <div class="box">
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="/img/cesta2.jpg" alt="...">
      <div class="caption">
        <p align="center">Cesta Frutta e Verdura</p>
        <p align="center">(1-2 persone)</p>    
        <p align="center">3 Kg....Euro 15</p>
        <p align="center"><a class="btn btn-primary" href="{{URL::to('contact')}}" role="button">Richiedi la tua cesta &raquo;</a></p>        
      </div>
    </div>      
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="/img/cesta2.jpg" alt="...">
      <div class="caption">
        <p align="center">Cesta Frutta e Verdura</p>
        <p align="center">(1-2 persone)</p>    
        <p align="center">5 Kg....Euro 22</p>
        <p align="center"><a class="btn btn-primary" href="{{URL::to('contact')}}" role="button">Richiedi la tua cesta &raquo;</a></p>        
      </div>
    </div>    
  </div>  
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="/img/cesta2.jpg" alt="...">
      <div class="caption">
        <p align="center">Cesta Frutta e Verdura</p>
        <p align="center">(2-3 persone)</p>    
        <p align="center">7 Kg....Euro 26</p>
        <p align="center"><a class="btn btn-primary" href="{{URL::to('contact')}}" role="button">Richiedi la tua cesta &raquo;</a></p>        

      </div>
    </div>    
  </div>  
  <div class="col-sm-6 col-md-3"> 
    <div class="thumbnail">
      <img src="/img/cesta2.jpg" alt="...">
      <div class="caption">
        <p align="center">Cesta Frutta e Verdura</p>
        <p align="center">(3-4 persone)</p>    
        <p align="center">9 Kg....Euro 30</p>
        <p align="center"><a class="btn btn-primary" href="{{URL::to('contact')}}" role="button">Richiedi la tua cesta &raquo;</a></p>        
        
      </div>
    </div>
  </div>    
  </div>
 </div>  
               
        
       
        
        
        
@stop