@extends('app')

@section('title')
Benvenuto
@stop

@section('content')
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contatti: 
                        <strong>La Cesta dei sapori</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <iframe width="100%" height="400" frameborder="0" allowfullscreen src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2862.1259055777446!2d12.33229691466555!3d44.16326442731722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132cba178fc03de3%3A0x4df5810e8bef2c15!2sVia+Capannaguzzo%2C+23%2C+Cesena+FC!5e0!3m2!1sit!2sit!4v1450430062473"></iframe>
                </div>
                <div class="col-md-4">
                    <p>Telefono:
                        <strong>333.45.98.238</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:stefano.gazzoni@libero.it">stefano.gazzoni@libero.it</a></strong>
                    </p>
                    <p>Indirizzo:
                        <strong>Via Capannaguzzo,23
                            <br>47042 Cesenatico (FC)</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

	<!-- 
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>form</strong>
                    </h2>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, vitae, distinctio, possimus repudiandae cupiditate ipsum excepturi dicta neque eaque voluptates tempora veniam esse earum sapiente optio deleniti consequuntur eos voluptatem.</p>
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea class="form-control" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="Contact">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
         -->

   
    <!-- /.container -->

@stop