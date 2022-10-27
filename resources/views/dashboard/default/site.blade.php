<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CRUD SYSTEM</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{asset('css/all.css')}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    </head>
    <body>
    <div class="sidebar">
    <div class="logo-details">
    <i class="bi bi-shop"></i>
    
        <div class="logo-text">Market</div>
        <i class="bi bi-list" id="btn"></i>
    </div>
    <ul class="nav-list">
      <li>
      <i class="bi bi-search"></i>
         <input type="text" placeholder="Pesquisar...">
         <span class="tooltip">Pesquisar</span>
      </li>
      <li>
        <a href="{{route('site.index')}}">
            <i class="bi bi-speedometer2"></i>
          <span class="links-sidebar">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="{{route('site.products')}}">
        <i class="bi bi-box-seam"></i>
         <span class="links-sidebar">Products</span>
       </a>
       <span class="tooltip">Products</span>
     </li>
      <li>
       <a href="{{route('site.clients')}}">
       <i class="bi bi-person"></i>
         <span class="links-sidebar">Client</span>
       </a>
       <span class="tooltip">Client</span>
     </li>
     <li>
       <a href="{{route('site.requests')}}">
       <i class="bi bi-bookmark-star"></i>
         <span class="links-sidebar">Requests</span>
       </a>
       <span class="tooltip">Requests</span>
     </li>
     <li>
       <a href="#">
       <i class="bi bi-gear"></i>
         <span class="links-sidebar">Settings</span>
       </a>
       <span class="tooltip">Settings</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <img src="https://icons-for-free.com/iconfiles/png/512/avatar+human+people+profile+user+icon-1320168139431219590.png" alt="profileImg">
           <div class="name_job">
             <div class="name">Fábio Alves</div>
             <div class="job">Front-end</div>
           </div>
         </div>
         <i class="bi bi-door-open" id='log_out'></i>
     </li>
    </ul>
  </div>
  <section class="home-section">
      <div class="text">@yield('content')</div>
  </section>


    <script src="{{asset('js/js.js')}}"></script>
     <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
     </body>
</html>