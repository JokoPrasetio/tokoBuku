<div class="sidenav-menu-heading">Data Master</div>

{{-- menu --}}
<a href="javascript:void(0)" class="nav-link {{ Request::is('category') || Request::is('book') ? '' : 'collapsed'}} " data-bs-toggle="collapse" data-bs-target="#collapseLayoutsFirst" aria-expanded="false" aria-controls="collapseLayoutsFirst">
  <div class="nav-link-icon"><i class="fa-solid fa-book-open-reader"></i></div>
  Master Data 
  <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
</a>

<div class="collapse" id="collapseLayoutsFirst" data-bs-parent="#accordionSidenav">
  <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavLayout">
    <a href="/category" class="nav-link {{ Request::is('category') ? 'active' : '' }}">
      <div class="nav-link-icon">
        <i class="fa-solid fa-bookmark"></i>
      </div>
      Kategori
    </a>
    <a href="#" class="nav-link">
      <div class="nav-link-icon">
        <i class="fa-solid fa-book"></i>
      </div>
      Buku
    </a>
  </nav>
</div>