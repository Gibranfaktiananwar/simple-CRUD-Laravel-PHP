@extends('layouts.theme')
@section('nyoba')

<!-- Container fluid -->
<div class="bg-primary pt-10 pb-21"></div>
            <div class="container-fluid mt-n22 px-6">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <!-- Page header -->
                        <div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mb-2 mb-lg-0">
                                    <h3 class="mb-0 text-white">Data Mahasiswa</h3>
                                </div>
                                <div class="mb-2 mb-lg-0 bg-white">
                                    <a href="">
                                        <a href="#" class="btn btn-white">Tambah</a>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row  -->
                <div class="row mt-6">
                    <div class="col-md-12 col-12">
                        <!-- card  -->
                        <div class="card">
                            <!-- card header  -->
                            <div class="card-header bg-white py-4">
                                <div class="table-responsive">
                                    <table class="table text-nowrap mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>NIM</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Jurusan</th>
                                                <th>Kelas</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="align-middle">
                                                    <div class="d-flex align-items-center">
                                                        <div class="ms-3 lh-1">
                                                            <h5 class="mb-1">
                                                                <a href="#" class="text-inherit">2105010</a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">bran</td>
                                                <td class="align-middle">
                                                    <span>bran@gmail.com</span>
                                                </td>
                                                <td class="align-middle">RPL</td>
                                                <td class="align-middle">D4 RPL 3A</td>
                                                <td class="align-middle">
                                                    <button class="btn-waring">Update</button>
                                                    <button class="btn-danger">Delete</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">
                                                    <div class="d-flex align-items-center">
                                                        <div class="ms-3 lh-1">
                                                            <h5 class="mb-1">
                                                                <a href="#" class="text-inherit">2105010</a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">bran2</td>
                                                <td class="align-middle">
                                                    <span>bran2@gmail.com</span>
                                                </td>
                                                <td class="align-middle">RPL</td>
                                                <td class="align-middle">D4 RPL 4A</td>
                                                <td class="align-middle">
                                                    <button class="btn-waring">Update</button>
                                                    <button class="btn-danger">Delete</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">
                                                    <div class="d-flex align-items-center">
                                                        <div class="ms-3 lh-1">
                                                            <h5 class="mb-1">
                                                                <a href="#" class="text-inherit">2105010</a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">bran3</td>
                                                <td class="align-middle">
                                                    <span>bran3@gmail.com</span>
                                                </td>
                                                <td class="align-middle">RPL</td>
                                                <td class="align-middle">D4 RPL 3A</td>
                                                <td class="align-middle">
                                                    <button class="btn-waring">Update</button>
                                                    <button class="btn-danger">Delete</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">
                                                    <div class="d-flex align-items-center">
                                                        <div class="ms-3 lh-1">
                                                            <h5 class="mb-1">
                                                                <a href="#" class="text-inherit">2105010</a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">bran4</td>
                                                <td class="align-middle">
                                                    <span>bran4@gmail.com</span>
                                                </td>
                                                <td class="align-middle">Teknik Informatika</td>
                                                <td class="align-middle">D4 RPL 3A</td>
                                                <td class="align-middle">
                                                    <button class="btn-waring">Update</button>
                                                    <button class="btn-danger">Delete</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">
                                                    <div class="d-flex align-items-center">
                                                        <div class="ms-3 lh-1">
                                                            <h5 class="mb-1">
                                                                <a href="#" class="text-inherit">2105010</a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">bran5</td>
                                                <td class="align-middle">
                                                    <span>bran5@gmail.com</span>
                                                </td>
                                                <td class="align-middle">Teknik Informatika</td>
                                                <td class="align-middle">D4 RPL 1A</td>
                                                <td class="align-middle">
                                                    <button class="btn-waring">Update</button>
                                                    <button class="btn-danger">Delete</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection