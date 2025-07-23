{!! Theme::partial('header') !!}
<div id="main-content">
    <div class="page-header">
        <div class="page-breadcrumbs">
            <div class="container-xl">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">Home</a>
                        <span class="extra-breadcrumb-name"></span>
                    </li>
                        <li class="breadcrumb-item active" aria-current="page">
                        <span>Review</span>
                    </li>
                    </ol>
                </nav>

            </div>
        </div> 
    </div>
    <div class="container-xl">
        <div class="mb-5">
            @include('plugins.request-review::form')
        </div>
    </div>
</div>
{!! Theme::partial('footer') !!}