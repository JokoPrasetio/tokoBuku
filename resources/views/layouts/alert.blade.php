@if(session()->has('alertSuccess'))
    <div class="alert alert-success alert-icon" role="alert">
        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>
        <div class="alert-icon-aside">
            <i class="fas fa-circle-check fa-fw"></i>
        </div>
        <div class="alert-icon-content">
            <h6 class="alert-heading">{{ session('alertSuccess') }}</h6>
        </div>
    </div>
@endif

@if (session()->has('alertError'))
    <div class="alert alert-danger alert-icon" role="alert">
        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>
        <div class="alert-icon-aside">
            <i class="fas fa-circle fa-fw"></i>
        </div>
        <div class="alert-icon-content">
            <h6 class="alert-heading">{{ session('alertError')}}</h6>
        </div>
    </div>
@endif