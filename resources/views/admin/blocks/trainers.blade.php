<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">trainers</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        @if(Session::has('message'))
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ Session::get('message') }}
            </div>
        @endif


        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th> Name</th>
                        <th>update</th>
                        <th>delete</th>
                    </tr>
                    </thead>
                    <tbody>

                    @php
                        $num = 1
                    @endphp

                    @foreach($trainers as $trainer)
                        <tr>
                            <td>{{ $num }}</td>
                            <td>{{ $trainer->name }}</td>
                            <td><a href="{{ route('update_trainer',['id' => $trainer->id]) }}"> <i class="fa fa-pencil" ></i> update </a> </td>
                            <td > <a data-target="#myModal" class="text-danger delete_trainer" href = "{{route('delete_trainer',['id' => $trainer->id])}}"> <i class="glyphicon glyphicon-trash" ></i>  delete </a></td>
                        </tr>

                        @php
                            $num++
                        @endphp
                    @endforeach

                    </tbody>
                </table>
            </div>

            {{--modal begin--}}

            <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Удаление!!!</h4>
                        </div>
                        <div class="modal-body">
                            <p>Вы действительно хотите удалить этого тренера?;</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Нет</button>
                            {{--<button type="button" class="btn btn-primary confirm_class_delete">Save changes</button>--}}
                            <a class = "btn btn-danger confirm_class_delete" href="">Да</a>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

        {{--modal end--}}
        <!-- /.table-responsive -->
        </div>
    </div>
    <!-- /.container-fluid -->
</div>