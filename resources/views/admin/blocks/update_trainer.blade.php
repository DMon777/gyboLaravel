<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{ $trainer->name }}</h1>
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

        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ $error }}
                </div>
            @endforeach
        @endif

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-10">
                            <form method="post" action="" role="form" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label> Name</label>
                                    <input type="text" name = "name" value="{{ $trainer->name }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label> phone</label>
                                    <input type="text" name = "phone" value="{{ $trainer->phone }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label> email</label>
                                    <input type="email" name = "email" value="{{ $trainer->email }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label> specialization</label>
                                    <input type="text" name = "specialization" value="{{ $trainer->specialization }}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label> description</label>
                                    <textarea name = "description" class="form-control" rows="3">{{ $trainer->description }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label> image</label>
                                    <img style="width:140px;height:140px;" src="{{ asset('assets/images/team/'.$trainer->img) }}" alt="{{ $trainer->name }}" class="img-circle admin-image">
                                </div>

                                <div class="form-group">
                                    <input type="hidden" name="old_img" value="{{ $trainer->img }}">
                                    <input type="file" name="img">
                                </div>

                                <div class="form-group">
                                    <label>Классы</label>
                                    @foreach($all_classes as $all_class)
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="classes[]"
                                                       @foreach($classes as  $class)
                                                       @if($all_class->id == $class->id)
                                                       checked
                                                       @endif
                                                       @endforeach
                                                       value="{{ $all_class->id }}">{{ $all_class->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>

                                {{--  =====================================    --}}
                                {{ csrf_field() }}

                                <button type="submit" class="btn btn-default">обновить</button>
                                <button type="reset" class="btn btn-default">сбросить</button>
                            </form>
                        </div>
                        <!-- /.col-lg-6 (nested) -->

                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>

</div>
<!-- /.container-fluid -->
</div>