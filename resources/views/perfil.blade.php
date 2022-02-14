@section('content')




<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Snippet - BBBootstrap</title>
                                <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='' rel='stylesheet'>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <style>body {
    background: rgb(99, 39, 120)
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}</style>
                                </head>
                                <body oncontextmenu='return false' class='snippet-body'>
                                <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-2"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{auth()->user()->name}}</span><span class="text-black-50">{{auth()->user()->email}}</span><span></span><span class="text-black-50">{{auth()->user()->nascimento}} Anos</span><span>    <br />
                 
<div class="btn-group-vertical p-5 py-0">
<a class="btn btn-secondary" href="atualizar.php?id=?+terre{{auth()->user()->id}}-25488" role="button">Editar Perfil</a>
<a class="btn btn-secondary" href="classes/logado.php?logout=ok" role="button">Mapa do Terreno</a>
<a class="btn btn-secondary" href="classes/logado.php?logout=ok" role="button">Valores</a>
<a class="btn btn-secondary" href="classes/logado.php?logout=ok" role="button">Sair do Sistema</a>


  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Apoio Social
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
	  <a class="dropdown-item" href="https://adoracao.net" target="_blank">Radio Adoração </a>
      <a class="dropdown-item" href="https://msolucoes.org"target="_blank">Msolucoes</a>
      <a class="dropdown-item" href="https://fome.click"target="_blank">Fome.click</a>

    </div>
  </div>
</div>
        </div></div>
		
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Infomações Pessoais</h4>
                </div>
                <div class="row mt-2">

                    <div class="col-md-6"><label class="labels">CPF</label><input type="text" class="form-control" placeholder="{{auth()->user()->cpf}}" value="" readonly></div>
                    <div class="col-md-6"><label class="labels">Data de nascimento</label><input type="text" class="form-control" placeholder="{{auth()->user()->nascimento}}" value="" readonly></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Nome do cônjuge</label><input type="text" class="form-control" placeholder="{{auth()->user()->conjugue}}" value="" readonly></div>
                    <div class="col-md-12"><label class="labels">CPF do cônjuge</label><input type="text" class="form-control" placeholder="{{auth()->user()->cpfconjugue}}" value="" readonly></div>
                    <div class="col-md-12"><label class="labels">Data de Nascimento</label><input type="text" class="form-control" placeholder="{{auth()->user()->dateconjugue}}" value="" readonly></div>
                    <div class="col-md-12"><label class="labels">Quantidade de Adultos</label><input type="text" class="form-control" placeholder="{{auth()->user()->adultos}}" value="" readonly></div>
                    <div class="col-md-12"><label class="labels">Quantidade de Crianças</label><input type="text" class="form-control" placeholder="{{auth()->user()->criancas}}" value="" readonly></div>
                    <div class="col-md-12"><label class="labels">Quantidade de Crianças</label><input type="text" class="form-control" placeholder="{{auth()->user()->criancas}}" value="" readonly></div>
				    <div class="col-md-12"><label class="labels">Quantidade de Moradores</label><input type="text" class="form-control" placeholder="teste" value="" readonly></div>
                    <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="{{auth()->user()->email}}" value="" readonly></div>
                    <div class="col-md-12"><label class="labels">Telefone</label><input type="text" class="form-control" placeholder="{{auth()->user()->telefone}}" value="" readonly></div>
                    <div class="col-md-12"><label class="labels">Localização do Terreno</label><input type="text" class="form-control" placeholder="{{auth()->user()->terreno}}" value="" readonly></div>
                    <div class="col-md-12"><label class="labels">Quadra</label><input type="text" class="form-control" placeholder="{{auth()->user()->quadra}}" value="" readonly></div>
																																										

                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Endereço Atual</label><input type="text" class="form-control" placeholder="{{auth()->user()->endereço}}" value="" readonly value=""></div>
                    <div class="col-md-6"><label class="labels">N°</label><input type="text" class="form-control" value="" placeholder="{{auth()->user()->numero}}" value="" readonly></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <h5 class="d-flex justify-content-between align-items-center experience"><span>Informações sobre contribuição </span></h5><br>
               <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">Valores Arrecadados</div>
  <div class="card-body">
    <h5 class="card-title">TOTAL R$ echo total</h5>
    <p class="card-text">Valor Total que Você contribuiu</p>
  </div>
</div>
<div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
  <div class="card-header">AGUA</div>
  <div class="card-body">
    <h5 class="card-title">R${{auth()->user()->agua}} </h5>
    <p class="card-text">Valor referente a agua recadado no dia {{auth()->user()->agua}}</p>
  </div>
</div>
<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
  <div class="card-header">LUZ</div>
  <div class="card-body">
    <h5 class="card-title">R${{auth()->user()->luz}} </h5>
    <p class="card-text">Valor referente a LUZ recadado no dia {{auth()->user()->luz}}</p>
  </div>
</div>
<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
  <div class="card-header">Advogado</div>
  <div class="card-body">
    <h5 class="card-title">R${{auth()->user()->advogado}}</h5>
    <p class="card-text">Valor referente ao Advogado recadado no dia {{auth()->user()->advogado}}</p>
  </div>
</div>
    </div>
</div>
</div>
</div>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript' src=''></script>
                                <script type='text/javascript' src=''></script>
                                <script type='text/Javascript'></script>
                                </body>
                            </html>
							

