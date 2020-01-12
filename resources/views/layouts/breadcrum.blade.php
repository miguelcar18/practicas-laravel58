<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">{{ $title ?? 'Inicio' }}</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route(trans('pages/sections/left-bar.home.route')) }}">{{ trans('pages/sections/left-bar.home.text') }}</a></li>
                        @if(!empty($title))
                        <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                        @endif
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
