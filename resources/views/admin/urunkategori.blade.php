@extends('layouts.adminpanelanasayfa')

@section('icerik')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Kategoriler</h1>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <a class="btn btn-info btn-sm" href="{{route('admin_category_add')}}">
                                <i class="fas fa-folder">
                                </i>
                                Yeni Ekle
                            </a>

                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">

                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th style="width: 1%">
                                ID
                            </th>
                            <th style="width: 20%">
                                Kategori Adı
                            </th>
                            <th style="width: 30%">
                                Team Members
                            </th>
                            <th>
                                Kısa İsim (Slug)
                            </th>
                            <th style="width: 8%" class="text-center">
                                Yayın Durumu
                            </th>
                            <th style="width: 20%">
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($kategorilist as $katlistele)
                        <tr>
                            <td>
                                {{$katlistele->id}}
                            </td>
                            <td>
                                <h5>
                                <a>
                                    {{$katlistele->title}}
                                </a>
                                </h5>
                                <br/>

                            </td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="{{asset('assets')}}/back/dist/img/avatar.png">
                                    </li>
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="{{asset('assets')}}/back/dist/img/avatar2.png">
                                    </li>
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="{{asset('assets')}}/back/dist/img/avatar3.png">
                                    </li>
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="{{asset('assets')}}/back/dist/img/avatar4.png">
                                    </li>
                                </ul>
                            </td>
                            <td class="project_progress">
                                <h6>
                                    {{$katlistele->slug}}
                                </h6>
                            </td>
                            <td class="project-state">
                                @if($katlistele->status == 'Aktif')
                                <span class="badge badge-success">Aktif</span>
                                @else
                                <span class="badge badge-danger">Pasif</span>
                                @endif

                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="#">
                                    <i class="fas fa-folder">
                                    </i>
                                    Görüntüle
                                </a>
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Düzenle
                                </a>
                                <a class="btn btn-danger btn-sm" href="{{route('admin_category_delete', ['id' => $katlistele->id ])}}" onclick="return confirm('Silmek istediğinizden emin misiniz?')">
                                    <i class="fas fa-trash">
                                    </i>
                                    Sil
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection

