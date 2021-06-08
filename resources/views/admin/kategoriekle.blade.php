@extends('layouts.adminpanelanasayfa')

@section('icerik')
    <body class="hold-transition sidebar-mini">
    <div class="wrapper">


        <!-- Main Sidebar Container -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Kategori Ekleme</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Ana Sayfa</a></li>
                                <li class="breadcrumb-item active">Kategori Ekleme</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Quick Example</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Başlık</label>
                                            <input type="text" class="form-control" id="exampleInputKategori" placeholder="Kategori Başlığını Giriniz">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Kısa İsim (Slug)</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Kısa İsim (Slug)">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Ana Kategori (CTRL tuşu ile çoklu seçim yapabilirsiniz. CTRL ile de seçimi iptal edebilirsiniz.)</label>
                                            <select multiple="" class="form-control">
                                                @foreach($kategorilist as $katlistele)
                                                <option>{{$katlistele->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Kategori Resmi</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Dosya Seç</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Yükle</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Kaydet</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->






                        </div>

                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

@endsection

@section('css')

@endsection

@section('js')

@endsection
