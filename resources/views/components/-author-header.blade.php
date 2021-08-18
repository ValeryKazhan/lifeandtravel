@props(['author'])

<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-10 text-center">
                <div class="author">
                    <img class="author-img center-block" src="/img/avatar-1.jpg" alt="">
                    <h1 class="text-uppercase">{{$author->name}}</h1>
                    <p class="lead">{{($postsNumber=count($author->posts))>0 ? $postsNumber : "No"}} posts</p>
                    <ul class="author-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
