<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">classes</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

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

                    @foreach($classes as $class)
                        <tr>
                            <td>{{ $num }}</td>
                            <td>{{ $class->name }}</td>
                            <td><a href="{{ route('update_class',['id' => $class->id]) }}"> <i class="fa fa-pencil" ></i> update </a> </td>
                            <td > <a class="text-danger" href = ""> <i class="glyphicon glyphicon-trash" ></i>  delete </a></td>
                        </tr>

                        @php
                            $num++
                        @endphp
                    @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
    </div>
    <!-- /.container-fluid -->
</div>