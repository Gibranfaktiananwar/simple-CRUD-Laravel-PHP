@extends('layouts.theme')
@section('nyoba')
    <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center g-0
        min-vh-100">
            <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">
                <!-- Card -->
                <div class="card smooth-shadow-md">
                    <!-- Card body --> 
                    <div class="card-body p-6">
                        <div class="mb-4">
                            <h1>Form Tambah Barang</h1>
                            <p class="mb-6">Masukan Data Barang</p>
                        </div>
                        <!-- Form -->
                        <form action="{{ route('input.get') }}" method="post">
                            @csrf
                            <!-- nama -->
                            <div class="mb-3">
                                <label for="" class="form-label">Nama Barang</label>
                                <input type="text" id="" class="form-control" name="name"
                                    placeholder="Masukan Nama Barang" required="">
                            </div>
                            <!-- type -->
                            <div class="mb-3">
                                <label for="" class="form-label">Type</label>
                                <input type="text" id="" class="form-control" name="type"
                                    placeholder="Masukan Type" required="">
                            </div>
                            <!-- condition -->
                            <div class="mb-3">
                                <label for="" class="form-label">Condition</label>
                                <input type="text" id="" class="form-control" name="condition"
                                    placeholder="Masukan Condition" required="">
                            </div>
                            <!-- quantity -->
                            <div class="mb-3">
                                <label for="number" class="form-label">Quantity</label>
                                <input type="" id="" class="form-control" name="quantity"
                                    placeholder="Masukan Quantity" required="">
                            </div>
                            <!-- condition -->
                            <div class="d-lg-flex justify-content-between align-items-center mb-4">


                            </div>
                            <div>
                                <!-- Button -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>

                                <div class="d-md-flex justify-content-between mt-4">
                                    <div class="mb-2 mb-md-0">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
