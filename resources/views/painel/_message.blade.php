<!--MOSTRA MENSAGENS DE ERRO-->
<div id="message">
    @if(Session::has('successMessage'))
        <br/>
        <div class="alert alert-success alert-dismissible col-md-10 col-md-offset-1" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong><i class="glyphicon glyphicon-ok"></i></strong>
            {{ Session::get('successMessage') }}
        </div>
    @elseif(Session::has('errorMessage'))
        <br/>
        <div class="alert alert-danger alert-dismissible col-md-10 col-md-offset-1" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong><i class="glyphicon glyphicon-remove"></i></strong>
            {{ Session::get('errorMessage') }}
        </div>
    @elseif(Session::has('warningMessage'))
        <br/>
        <div class="alert alert-warning alert-dismissible col-md-10 col-md-offset-1" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong><i class="glyphicon glyphicon-exclamation-sign"></i></strong>
            {{ Session::get('warningMessage') }}
        </div>
    @endif
</div>