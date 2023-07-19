<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-lg offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-1 mb-1 text-body-secondary text-uppercase fw-bold">
            <span>Data Master</span>
          </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link " href="#">
          
             Buku
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('category') ? 'active' : ''}} " href="/category">
              Kategori
            </a>
          </li>
        </ul>
       
      </div>
    </div>
  </div>
