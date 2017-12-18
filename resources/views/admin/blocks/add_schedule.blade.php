<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> добавить график</h1>
            </div>
            <!-- /.col-lg-12 -->

            @if(Session::has('message'))
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ Session::get('message') }}
                </div>
            @endif

            <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form method="post" action = "" role="form">
                                    <div class="form-group">
                                        <label>day</label>
                                        <select name = "day" class="form-control">
                                            @foreach($days as $day)
                                                <option value="{{$day}}">{{$day}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>time</label>
                                        <input class="form-control" name="time" placeholder="Enter time">
                                    </div>
                                    <div class="form-group">
                                        <label>Order</label>
                                        <input class="form-control" name="order" placeholder="Enter order">
                                    </div>
                                    <div class="form-group">
                                        <label>class</label>
                                        <select name = "class" class="form-control">
                                            @foreach($classes as $class)
                                                <option value="{{$class->id}}">{{$class->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-default">Submit Button</button>
                                    <button type="reset" class="btn btn-default">Reset Button</button>
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
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>