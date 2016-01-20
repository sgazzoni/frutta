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
                     <h2 class="intro-text "><strong>La Cesta Dei Sapori,</strong></h2>                   
                    <p>è una iniziativa nata con lo scopo di dar vita nel territorio romagnolo a una filiera agricola corta, indipendente ed autonoma, attraverso cui i prodotti della terra coltivati in modo biologico ed artigianale, vengono raccolti giorno per giorno e portati direttamente ai clienti freschissimi.</p>
                     <h2 class="intro-text "><strong>Selezioniamo,</strong></h2> 
                    <p>i migliori produttori biologici della nostra zona e portiamo direttamente a casa vostra i frutti del loro duro lavoro, del loro impegno e del loro attaccamento ai valori della nostra terra. La consegna a domicilio dei prodotti freschi di giornata permette anche a chi, per motivi di lavoro e di tempo, non riesce a fare la spesa dal proprio “contadino di fiducia” ed è costretto a ricorrere alla grande distribuzione, pur desiderando seguire criteri di genuinità e freschezza degli alimenti.</p>
                     <h2 class="intro-text "><strong>Vogliamo,</strong></h2> 
                    <p>con il nostro lavoro, valorizzare ed aiutare chi sceglie oggi la strada dell’agricoltura biologica nel nostro territorio, seguendo i criteri di Stagionalità e “Chilometro Zero”, in modo da ridurre al massimo la filiera e l’impatto ambientale dovuto ai trasporti dei prodotti alimentari.
						Desideriamo sostenere l’economia locale avvicinando i consumatori alla nostra terra e valorizzando il lavoro ed i luoghi nei quali siamo cresciuti ed ora crescono i nostri figli.
						Crediamo infine che i rapporti umani siano fondamentali anche nella sfera lavorativa e commerciale, per questo desideriamo che i nostri clienti si sentano seguiti personalmente con cura e affetto</p>                
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
                    <p>La Cesta Dei Sapori, è un servizio di consegna a domicilio, a tua scelta tutte le settimane oppure a richiesta.</p>
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
        <p align="center"><a class="btn btn-primary" href="{{URL::to('Contact')}}" role="button">Richiedi la tua cesta &raquo;</a></p>        
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
        <p align="center"><a class="btn btn-primary" href="{{URL::to('Contact')}}" role="button">Richiedi la tua cesta &raquo;</a></p>        
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
        <p align="center"><a class="btn btn-primary" href="{{URL::to('Contact')}}" role="button">Richiedi la tua cesta &raquo;</a></p>        

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
        <p align="center"><a class="btn btn-primary" href="{{URL::to('Contact')}}" role="button">Richiedi la tua cesta &raquo;</a></p>        
        
      </div>
    </div>
  </div>    
  </div>
 </div>  
               
        
       
        
        
        
@stop