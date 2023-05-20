@extends('frontend.index.index')
@section('title', 'Main')
@section('subtitle', 'Index')
@section('container')
    <!--begin::Banner-->
    @if (count($banner) > 0)
        <div class="row g-5 g-xl-8">
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" style="height: 250px;">
                <div class="carousel-inner">
                    @foreach ($banner as $menu_banner)
                        <div class="carousel-item @if ($loop->iteration == 1) active @endif">
                            <img src="{{ trim($menu_banner->images) }}" class="d-block w-100 h-100 rounded"
                                alt="{{ trim($menu_banner->images) }}"
                                style="max-height: 250px;width: 100%;object-fit: cover;">
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    @endif
    <!--end::Banner-->

    <!--begin::Menu Produk-->
    <div class="row g-4 mt-4">
        <div class="card card-flush h-xl-100">
            <div class="card-header pt-7">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Products</span>
                    <span class="text-muted mt-1 fw-bold fs-6">Daftar produk atau kelompok barang suma honda</span>
                </h3>
            </div>
            <div class="card-body pt-5">
                <div class="row">
                    @foreach ($produk as $menu_produk)
                        <div class="col-sm-6 col-md-4 col-lg-2">
                            <a href="#" class="fs-6 text-gray-800 fw-bolder text-hover-primary">
                                <div class="d-flex flex-center flex-column py-5">
                                    <div class="symbol symbol-100px text-center">
                                        <img src="{{ trim($menu_produk->images) }}"
                                            alt="{{ trim($menu_produk->description) }}"
                                            onError="this.onerror=null;this.src='{{ asset('images/resource/part_image_not_found.png') }}';">
                                    </div>
                                    <span class="pt-6 pb-6">{{ trim($menu_produk->description) }}</span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!--begin::End Produk-->
@endsection
