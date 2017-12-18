<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Графики занятий</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>


    @if(Session::has('message'))
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ Session::get('message') }}
        </div>
    @endif


    {{-- test table--}}

    @foreach($schedules as $key => $val)

    <div class="row">
        <div class="col-lg-10">

    <div class="panel-body">
    <div class="table-responsive">
        <h2>{{ $key }}</h2>
        <form method="post" action="">
            <input type="hidden" name="day" value="{{$key}}">
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>order</th>
                <th>class</th>
                <th>time</th>
                <th>отображать</th>
                <th>удалить</th>
            </tr>
            </thead>
            <tbody>
            @foreach($val as $item)
            <tr>
                <td>
                    <input name="order[]" value="{{ $item->order }}" class="form-control" >
                </td>

                <td>
                    <select name = "class[]" class="form-control">
                        @foreach($classes as $class)
                            <option  value="{{$class->id}}"
                                     @if($class->id == $item->classes->id)
                                     selected
                                    @endif
                            >
                                {{ $class->name }}
                            </option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <input name="time[]" value="{{ $item->time }}" class="form-control" >
                </td>
                <td>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="flag[]"
                                   @if($item->flag == 1)
                                   checked
                                   @endif
                                   value="1">да
                        </label>

                        <label class="checkbox-inline">
                            <input type="checkbox" name = "flag[]"
                                   @if($item->flag == 0)
                                   checked
                                   @endif
                                   value="0">нет
                        </label>

                </td>
                <td >
                    <a data-target="#myModal" class="text-danger delete_schedule"
                       href = "{{route('delete_schedule',['id' => $item->id])}}">
                        <i class="glyphicon glyphicon-trash" >  </i>  delete
                    </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
            {{ csrf_field() }}
            <button type="submit" class="btn btn-default">Submit Button</button>
            <button type="reset" class="btn btn-default">Reset Button</button>
        </form>
    </div>
    <!-- /.table-responsive -->
</div>

        </div>
    </div>
    {{-- end test table--}}


        {{--modal begin--}}

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Удаление!!!</h4>
                    </div>
                    <div class="modal-body">
                        <p>Вы действительно хотите удалить этот график;</p>
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

@endforeach



    {{--<div class="row">--}}
        {{--<div class="col-lg-12">--}}

            {{--@foreach($schedules as $key => $val)--}}

               {{--<div class="row">--}}
                   {{--<div class="col-lg-12">--}}
                       {{--<h2 class="page-header">{{ $key }}</h2>--}}
                   {{--</div>--}}
                   {{--<form method="post" action="" role="form">--}}
                   {{--@foreach($val as $item)--}}
                       {{--<input type="hidden" name="day" value="{{$key}}">--}}
                      {{--<div  class="row">--}}
                       {{--<div class="col-lg-12">--}}
                           {{--<div class="panel panel-default">--}}

                               {{--<div class="panel-body">--}}
                                   {{--<div class="row">--}}
                                       {{--<div class="col-lg-6">--}}
                                           {{--<div class="form-group">--}}
                                               {{--<label>class</label>--}}
                                               {{--<select name = "class[]" class="form-control">--}}
                                                   {{--@foreach($classes as $class)--}}
                                                       {{--<option  value="{{$class->id}}"--}}
                                                          {{--@if($class->id == $item->classes->id)--}}
                                                               {{--selected--}}
                                                           {{--@endif--}}
                                                       {{-->--}}
                                                           {{--{{ $class->name }}--}}
                                                       {{--</option>--}}
                                                    {{--@endforeach--}}
                                               {{--</select>--}}
                                           {{--</div>--}}

                                               {{--<div class="form-group">--}}
                                                   {{--<label>name</label>--}}
                                                   {{--<p>{{ $item->classes->name }}</p>--}}
                                               {{--</div>--}}
                                               {{--<div class="form-group">--}}
                                                   {{--<label>time</label>--}}
                                                   {{--<input name="time[]" value="{{ $item->time }}" class="form-control" >--}}
                                               {{--</div>--}}
                                               {{--<div class="form-group">--}}
                                                   {{--<label>order</label>--}}
                                                   {{--<input name="order[]" value="{{ $item->order }}" class="form-control" >--}}
                                               {{--</div>--}}

                                               {{--<div class="form-group">--}}
                                                   {{--<label>отображать</label>--}}

                                                   {{--<div class="checkbox">--}}
                                                       {{--<label>--}}
                                                           {{--<input type="checkbox" name="flag[]"--}}
                                                           {{--@if($item->flag == 1)--}}
                                                                   {{--checked--}}
                                                           {{--@endif--}}
                                                           {{--value="1">да--}}
                                                       {{--</label>--}}
                                                   {{--</div>--}}
                                                   {{--<div class="checkbox">--}}
                                                       {{--<label>--}}
                                                           {{--<input type="checkbox" name = "flag[]"--}}
                                                                  {{--@if($item->flag == 0)--}}
                                                                  {{--checked--}}
                                                                  {{--@endif--}}
                                                                  {{--value="0">нет                                                       </label>--}}
                                                   {{--</div>--}}

                                               {{--</div>--}}

                                       {{--</div>--}}
                                       {{--<!-- /.col-lg-6 (nested) -->--}}

                                       {{--<!-- /.col-lg-6 (nested) -->--}}
                                   {{--</div>--}}
                                   {{--<!-- /.row (nested) -->--}}
                               {{--</div>--}}
                               {{--<!-- /.panel-body -->--}}
                           {{--</div>--}}
                           {{--<!-- /.panel -->--}}
                       {{--</div>--}}
                       {{--<!-- /.col-lg-12 -->--}}
               {{--</div>--}}
                   {{--@endforeach--}}
                       {{--{{ csrf_field() }}--}}
                       {{--<button type="submit" class="btn btn-default">Submit Button</button>--}}
                       {{--<button type="reset" class="btn btn-default">Reset Button</button>--}}

                   {{--</form>--}}
               {{--</div>--}}


            {{--@endforeach--}}
        {{--</div>--}}
    {{--</div>--}}
    <!-- /.container-fluid -->
</div>