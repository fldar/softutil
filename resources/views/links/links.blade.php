@extends('layout.site')

@section('titulo','Home')

@section('conteudo')

<div class="container home table-link">

  <div class="row justify-content-md-center">
    <h3>Links</h3>
  </div>

  <div calss="row">
    <table class="table table-bordered">
      <thead class="thead-dark">
        <tr>
          <th scope="col">SITE</th>
          <th scope="col">LINK</th>
          <th class="ir" scope="col">IR</th>
        </tr>
      </thead>
      <tbody>
        @foreach($registro_link as $link)
        <tr>
          <th scope="row">{{$link->site}}</th>
          <td>{{$link->link}}</td>
          <td class="ir">
            <a href="{{$link->link}}" target="_blank">
    					<button type="button" class="btn btn-primary" aria-label="Left 	Align">
    						<i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
    					</button>
  				  </a>
            @if(Auth::guest())
            @else
            <a href="{{route('links.deletar',$link->id) }}">
    					<button type="button" class="btn btn-danger" aria-label="Left 	Align">
    						<i class="fa fa-trash-o" aria-hidden="true"></i>
    					</button>
  				  </a>
            @endif
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <div class="row justify-content-md-center">
    @if(Auth::guest())
    @else
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#link_modal" data-whatever="@mdo">Novo</button>
    @endif

    <div class="modal fade" id="link_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Novo Link</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="link" action="{{route('links.salvar')}}" method="post" >
              {{ csrf_field() }}
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Site</label>
                <input type="text" class="form-control" id="site" name="site">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Link</label>
                <input type="text" class="form-control" id="link" name="link">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="submit" form="link"class="btn btn-primary">Salvar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container home table-link">

  <div class="row justify-content-md-center">
    <h3>Uteis</h3>
  </div>

  <div calss="row">
    <table class="table table-bordered">
      <thead class="thead-dark">
        <tr>
          <th scope="col">DESCRIÇÃO</th>
          <th scope="col">CONTEUDO</th>
          @if(Auth::guest())
          @else
          <th scope="col">EXCLUIR</th>
          @endif
        </tr>
      </thead>
      <tbody>
        @foreach($registros_uteis as $uteis)
        <tr>
          <th scope="row">{{$uteis->descricao}}</th>
          <td>{{$uteis->conteudo}}</td>
          @if(Auth::guest())
          @else
          <td>
            <a href="{{route('uteis.deletar',$uteis->id) }}">
              <button type="button" class="btn btn-danger" aria-label="Left 	Align">
                <i class="fa fa-trash-o" aria-hidden="true"></i>
              </button>
            </a>
          </td>
          @endif
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <div class="row justify-content-md-center table-link">
    @if(Auth::guest())
    @else
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#util_modal" data-whatever="@mdo">Novo</button>
    @endif

    <div class="modal fade" id="util_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Novo Link</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="uteis" action="{{route('uteis.salvar')}}" method="post" >
              {{ csrf_field() }}
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Descrição</label>
                <input type="text" class="form-control" id="descricao" name="descricao">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Conteudo</label>
                <input type="text" class="form-control" id="conteudo" name="conteudo">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="submit" form="uteis"class="btn btn-primary">Salvar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




@endsection
