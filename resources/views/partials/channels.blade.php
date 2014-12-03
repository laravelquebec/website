<section class="navbar-channels">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <ul class="nav nav-pills">
                    <li class="active"><a href="signed.html">Tout</a></li>
                    <li><a href="#">Général</a></li>
                    <li><a href="#">Amélioration du site</a></li>
                    <li><a href="#">Trucs &amp; Astuces</a></li>
                    <li><a href="#">Aide</a></li>
                    <li><a href="#">Anonces</a></li>
                    <li><a href="#">Packages</a></li>
                </ul>
            </div>

            <div class="col-md-3 text-right">
                @if (Auth::check())
                    <button class="btn btn-primary" data-toggle="modal" data-target="#new-conversation">
                        <i class="fa fa-comment fa-fw"></i>
                        Nouvelle discussion
                    </button>
                @endif
            </div>
        </div>
    </div>
</section>
