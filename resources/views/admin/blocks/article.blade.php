<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{ $article->name }}</h1>
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


        @can('delete-article',$article)




        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-10">
                            <form method="post" action="" role="form" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Название</label>
                                    <input type="text" name = "name" value="{{ $article->name }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>intro</label>
                                    <textarea name = "intro" class="form-control" rows="3">{{ $article->intro }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label> Статья</label>
                                    <textarea name = "text" id = "editor" class="form-control" rows="6">{{ $article->text }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label> image</label>
                                    <img style="width:140px;height:140px;" src="{{ asset('assets/images/blog/'.$article->image) }}" alt="{{ $article->name }}" class="img-circle admin-image">
                                </div>

                                <div class="form-group">
                                    <input type="hidden" name="old_img" value="{{ $article->image }}">
                                    <input type="file" name="img">
                                </div>

                                <div class="form-group">
                                    <label> Категория</label>
                                    <select name = "category" class="form-control">
                                        @foreach($categories as $category)
                                            <option  value="{{$category->id}}"
                                                     @if($category->id == $article->category->id)
                                                     selected
                                                    @endif
                                            >
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Теги</label>
                                    @foreach($tags as $tag)
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="tags[]"
                                                       @foreach($article->tags as  $item)
                                                       @if($tag->id == $item->id)
                                                       checked
                                                       @endif
                                                       @endforeach
                                                       value="{{ $tag->id }}">{{ $tag->name }}
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
            
            @else
                <div class="alert alert-danger">
                    Вы не можете редактировать статью автором которой вы не являетесь!!!
                </div>

            @endcan



    </div>
    <script>
        CKEDITOR.replace( 'editor' );
    </script>
</div>
<!-- /.container-fluid -->
</div>