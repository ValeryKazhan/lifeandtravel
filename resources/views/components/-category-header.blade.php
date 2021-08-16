@props(['category'])

<div class="page-header">
    <div class="page-header-bg" style="background-image: url(&quot;/img/header-2.jpg&quot;); background-position: 0% 0%;" data-stellar-background-ratio="0.5"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-10 text-center">
                <h1 class="text-uppercase">{{$category->name}}</h1>
            </div>
        </div>
    </div>
</div>
