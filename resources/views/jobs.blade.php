@extends('layout.app')

@section('content')
<div style="height:70px;width:100vw;">

</div>
<div class="py-2 text-xs-center gradient-default">
    <h2 class="m-0 text-white">Trabalhe Conosco</h2>
</div>
<section class="container py-2">
    <div class="py-2 text-xs-center">
        <p class="display-5">Agradecemos seu interesse em fazer parte da equipe da DokaPack</p>
        @if(Session::has('message'))
            <small class="display-5 text-success">{{Session::get('message')}}</small>
        @endif
        @if(Session::has('errpr'))
            <small class="display-5 text-danger">{{Session::get('error')}}</small>
        @endif
    </div>
    <form action="{{url('/')}}/send-mail" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nome_completo">Nome Completo<span class="text-danger">*</span></label>
                <input type="text" class="py-1 form-control" id="nome_completo" name="nome_completo" required>
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="py-1 form-control" id="email" name="email" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="telefone">Telefone<span class="text-danger">*</span></label>
                <input type="text" class="py-1 form-control telefone-mask" id="telefone" name="telefone" required>
            </div>
            <div class="form-group col-md-6">
                <label for="cpf">CPF<span class="text-danger">*</span></label>
                <input type="text" class="cpf-mask py-1 form-control" id="cpf" name="cpf" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="interesse">Área de Interesse<span class="text-danger">*</span></label>
                <select id="interesse" name="interesse" class="form-control" style="height:54px;" required>
                    <option selected>Selecione</option>
                    <option>Opção 1</option>
                    <option>Opção 2</option>
                    <option>Opção 3</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="cargo">Cargo<span class="text-danger">*</span></label>
                <input type="text" class="py-1 form-control" id="cargo" name="cargo" required>
            </div>
        </div>
        <div class="form-row px-1">
            <div class="form-group">
                <div>
                <label class="custom-file-label" for="curriculo">Currículo<span class="text-danger">*</span></label>
                </div>
                <input type="file" id="curriculo" name="curriculo" required >
            </div>
            <div class="form-group col-md-6">
            </div>
        </div>
        <div class="form-row py-2 text-xs-center">
            <button type="submit" class="px-3 btn btn-success">Enviar</button>
        </div>
    </form>
</section>
<script>
    window.onload = function(){
        $(".telefone-mask").mask('(99) 99999-9999')
        $(".cpf-mask").mask('999.999.999-99')
    }
</script>
@endsection