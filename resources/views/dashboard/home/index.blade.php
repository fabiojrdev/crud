@extends('dashboard.default.site')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <p> Olá bem vindo(a) $USUARIO este é seu painel.</p>
        </div>
        <div class="col-md-4"> 
            <!-- Balao 1 -->
            <div class="bloons-all">
                <h5 class="card-title" id="color-box">Products</h5>
                <h6 class="">{{ $countProduct }}</h6>
                    <div id="box">
                    <i class="bi bi-box-seam" id="box"></i>
                    </div>
                    
                <div class="bloons-footer-all">
                    <a href="#">Ver todos</a>
                </div>            
            </div>
            <br/>
            <!-- Balao 2 -->
            <div class="bloons-all">
                <h5 class="card-title" id="color-box">Requests</h5>
                    <h6 class="">10</h6>
                    <div id="box">
                    <i class="bi bi-clipboard-check" id="box"></i>
                    </div>
                <div class="bloons-footer-all">
                    <a href="#">Ver todos </i></a>
                </div>            
            </div>
            <br/>
            <!-- Balao 3 -->
            <div class="bloons-all">
                <h5 class="card-title" id="color-box">Clients</h5>
                    <h6 class="">{{ $countClient }}</h6>
                    <div id="box">
                    <i class="bi bi-people" id="box"></i>
                    </div>
                <div class="bloons-footer-all">
                    <a href="#">Ver todos</i></a>
                </div>            
            </div>
            <br/>
            <!-- Balao 4 -->
            <div class="bloons-all">
                <h5 class="card-title" id="color-box">Jobs</h5>
                    <h6 class="">10</h6>
                    <div id="box">
                    <i class="bi bi-bar-chart-line" id="box"></i>
                    </div>
                <div class="bloons-footer-all">
                <a href="#">Ver todos</i></a>
                </div>            
            </div>
            <!-- Aqui e as divs finais -->
         </div>
         <!-- aqui e o fim do col-md-3 -->
         <div class="col-md-8">
            
         </div>

        <!-- <div class="col-md-3"> 
            <div class="bloons-all">
                <h5 class="card-title" id="color-box">Requests</h5>
                    <h6 class="">10</h6>
                    <div id="box">
                    <i class="bi bi-clipboard-check" id="box"></i>
                    </div>
                <div class="bloons-footer-all">
                    <a href="#">Ver todos </i></a>
                </div>            
            </div>
        </div>
        <div class="col-md-3"> 
            <div class="bloons-all">
                <h5 class="card-title" id="color-box">Clients</h5>
                    <h6 class="">10</h6>
                    <div id="box">
                    <i class="bi bi-people" id="box"></i>
                    </div>
                <div class="bloons-footer-all">
                    <a href="#">Ver todos</i></a>
                </div>            
            </div>
        </div> 
        <div class="col-md-3"> 
            <div class="bloons-all">
                <h5 class="card-title" id="color-box">Jobs</h5>
                    <h6 class="">10</h6>
                    <div id="box">
                    <i class="bi bi-bar-chart-line" id="box"></i>
                    </div>
                <div class="bloons-footer-all">
                <a href="#">Ver todos</i></a>
                </div>            
            </div>
        </div>  -->

    </div>
</div>

@endsection

