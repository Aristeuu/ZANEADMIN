@extends('app')

@push('container')


            <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Adicionar Usuário <a href="{{route('showRegister')}}" class="btn btn-success"><i class="fas fa-plus mr-1" alt="Novo" title="Novo"></i></a>               
                
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
                  <form id="ctedForm" action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputFoto">Imagem</label>
                        <input type="file" name="img" class="form-control" id="exampleInputFoto" placeholder="Fulano" required>
                      </div>                                      
                        
                      <div class="form-group">
                        <label for="titulo">Titulo</label>
                        <input type="text" name="titulo" class="form-control" id="titulo" placeholder="" required>
                      </div>                                                                                 
                      <div class="form-group">
                        <label for="exampleInputEmail1">Descrição</label>
                        <textarea id="summernote6" name="descricao">
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
                    <th>Nome</th>
                    <th>Email</th>                    
                   
                </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>                       
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>                                            
                    </tr>                    
                    
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