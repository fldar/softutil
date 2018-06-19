<div class="card tabelas">
    <div class="card-body">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-12">

                <div class="input-group md-form form-sm form-2 pl-0 mb-0">
                    <input class="form-control my-0 py-1 grey-border" type="text" placeholder="Search (ainda não funciona)" aria-label="Search">
                    <div class="input-group-append">
                        <span class="input-group-text waves-effect grey lighten-3" id="basic-addon1">
                            <a><i class="fa fa-search text-grey" aria-hidden="true"></i></a>
                        </span>
                    </div>
                </div>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <!--Table-->
        <table class="table table-striped table-bordered">

            <!--Table head-->
            <thead>
                <tr>
                    <th>Site</th>
                    <th>Link</th>
                    <th>Ir</th>
                </tr>
            </thead>
            <!--Table head-->

            <!--Table body-->
            <tbody>
              @foreach($registro_link as $link)
                <tr>
                    <th scope="row">{{$link->site}}</th>
                    <td>{{$link->link}}</td>
                    <td>
                          <a href="{{$link->link}}" class="btn btn-primary btn-sm" target="_blank">
                              <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                          </a>
                      @if(Auth::guest())
                      @else
                          <button type="button" class="btn btn-danger btn-sm" data-href="{{route('links.deletar', $link->id)}}" data-toggle="modal" data-target="#deletar-links">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                          </button>
                      @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
            <!--Table body-->
        </table>
        <!--Table-->

    </div>
</div>
