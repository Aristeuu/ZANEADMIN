@extends('app')

@push('container')


            <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Adicionar Depoimento <a href="http://" data-toggle="modal" onclick="editor(6)" data-target="#modal-default"><i class="fas fa-plus mr-1" alt="Novo" title="Novo"></i></a>
                
            </h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <!--li class="breadcrumb-item active">DataTables</li-->
            </ol>
        </div>

        <div class="modal fade" id="modal-default">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title">Novo</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                         <!-- form start -->
                  <form id="ctedForm" action="{{route('depoimentos.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputFoto">Imagem</label>
                        <input type="file" name="img" class="form-control" id="exampleInputFoto" placeholder="Fulano" required>
                      </div>                                      
                        
                      <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" class="form-control" id="nome" placeholder="" required>
                      </div>                                                                                 
                      <div class="form-group">
                        <label for="exampleInputEmail1">Descri????o</label>
                        <textarea id="summernote6" name="texto">
                          Place <em>some</em> <u>text</u> <strong>here</strong>
                        </textarea>
                        </div>                                      
                    </div>
                  <!-- /.card-body -->                            
                  </form>
                </div>
                <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" form="ctedForm">Save</button>
                </div>
            </div>
            <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


        </div>
    </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-12">
            <div class="card">
            <div class="card-header">
                <div class="card-tools">
                    <ul class="pagination pagination-sm float-right">             
                      {{ $data->links() }}
                    </ul>
                    
                  </div>
            </div-->
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Foto</th>
                    <th>Nome</th>                    
                    <th>Descri????o</th>
                    <th>Op????es</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>                        
                        <td><img src="{{asset('/images')}}/{{$item->foto}}" class="rounded-circle" width="50" height="60" /></td>
                        <td>{{$item->nome}}</td>
                        <td>{!!$item->texto!!}</td>                                               
                        <td> 
                            <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#modal-default-edit{{$item->id}}" onclick="editor({{$item->id}})">
                                <i class="fas fa-pen"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#modal-default-delete{{$item->id}}"  title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </td>  
                    </tr>
                    
                    <!--edit-->                    
                  <div class="modal fade" id="modal-default-edit{{$item->id}}">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Editando</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                         
                          <form id="editForm{{$item->id}}" action="{{route('depoimentos.update', $item->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputFoto">Imagem</label>
                                    <input type="file" name="img" class="form-control" id="exampleInputFoto" placeholder="Fulano">
                                  </div>                                      
                                    
                                  <div class="form-group">
                                    <label for="nome">Titulo</label>
                                    <input type="text" name="nome" class="form-control" id="nome" placeholder="" value="{{$item->nome}}" >
                                  </div>                                                                                 
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Descri????o</label>
                                    <textarea id="summernote{{$item->id}}" name="texto">
                                        {!!$item->texto!!}
                                    </textarea>
                                    </div>                          
                            </div>
                          <!-- /.card-body -->                            
                          </form>

                        </div>
                        <div class="modal-footer justify-content-between">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary" form="editForm{{$item->id}}">Save changes</button>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                    
                    <!--delete-->
                    <div class="modal fade" id="modal-default-delete{{$item->id}}">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Tem certeza que deseja eliminar este registo?</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form action="{{route('depoimentos.delete', $item->id)}}" method="post" id="destroyForm{{$item->id}}">
                                @method('delete')
                                @csrf
                              </form>
                                  
                            </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary" form="destroyForm{{$item->id}}">Sim</button>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                    
                    
                    @endforeach
                </tbody>
                
                </table>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
    
@endpush

@push('scripts')
    
    <script>
      function editor(id){

        $(function() {
          // Summernote
          $('#summernote'+id).summernote()

          // CodeMirror
          CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
              mode: "htmlmixed",
              theme: "monokai"
          });
      });

      }      
  </script>
@endpush