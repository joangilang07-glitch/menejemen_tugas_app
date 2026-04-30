@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-users mr-2"></i>
        {{ $title }}
    </h1>
    <div class="card">
        <div class="card-body">
            <div class="crad-header d-flex d-wrap align-items-center justify-content-between bg-primary text-white py-2 px-3">
            <div class="mb-1 mr-2">
                <a href=""class="btn btn-sm btn-primary">
                <i class="fas fa-plus mr-2"></i>
                Tambah Data</a>
            </div>
             <div>
                <a href=""class="btn btn-sm btn-success">
                <i class="fas fa-file-excel mr-2"></i>
                Excel</a>
                <a href=""class="btn btn-sm btn-danger">
                <i class="fas fa-file-pdf mr-2"></i>
                PDF</a>
            </div>
            </div>
            <div class="crad-body">
             <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="bg-warning text-white">
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Jabatan</th>
                                            <th>Status</th>
                                            <th><i class="fas fa-cog"></i></th>
                                                
                                            </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <td text-center>1</td>
                                            <td>Bagas Katon</td>
                                            <td>bagaskaton@example.com</td>
                                            <td><span class="badge badge-dark">Admin</span></td>
                                            <td><span class="badge badge-success">Aktif</span></td>
                                            <td class="text-center"><a href="#" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a> <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a></td>
                                            
                                        </tr>
                                        <tr class="text-center">
                                            <td text-center>2</td>
                                            <td>Adhit</td>
                                            <td>adhit@example.com</td>
                                            <td><span class="badge badge-dark">Admin</span></td>
                                            <td><span class="badge badge-danger">Tidak Aktif</span></td>
                                            <td class="text-center"><a href="#" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a> <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a></td>
                                            
                                        </tr>
                                </table>
                            </div>
                
                </div>
            </div>

@endsection