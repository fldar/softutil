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
