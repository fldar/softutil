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
