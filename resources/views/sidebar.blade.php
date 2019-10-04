<!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/panel')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Panel</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Ürünler</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(5px, 56px, 0px);">
          <h6 class="dropdown-header"></h6>
          <a class="dropdown-item" href="{{url('urun')}}">Tüm Ürünler</a>
          <a class="dropdown-item" href="{{url('kategoriler')}}">Kategoriler </a>
          <a class="dropdown-item" href="{{url('birimler')}}">Birimler</a>
          
        </div>
      </li>
    </ul>