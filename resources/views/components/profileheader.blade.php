@props(['pageImage','pagetitle'])
<div class="header-for-bg">
    <div class="background-header position-relative">
        <img src="{{asset('images/page-img/')}}/{{$pageImage}}" class="img-fluid w-100" alt="header-bg">
        <div class="title-on-header">
            <div class="data-block">
                <h2>{{$pagetitle}}</h2>
            </div>
        </div>
    </div>
</div>