@extends('frontend.index.index')
@section('title','Main')
@section('subtitle','Index')
@section('container')
<!--begin::Row-->
<div class="row g-5 g-xl-8">
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" style="height: 250px;">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('assets/frontend/media/product-demos/demo1.png') }}" class="d-block w-100 h-100 rounded" alt="Image 1"
                style="max-height: 250px;width: 100%;object-fit: cover;">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('assets/frontend/media/product-demos/demo2.png') }}" class="d-block w-100 h-100 rounded" alt="Image 2"
            style="max-height: 250px;width: 100%;object-fit: cover;">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('assets/frontend/media/product-demos/demo3.png') }}" class="d-block w-100 h-100 rounded" alt="Image 3"
            style="max-height: 250px;width: 100%;object-fit: cover;">
          </div>
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
<!--end::Row-->

<div class="row g-5 g-xl-8 mt-4">
    <div class="col-sm-6 col-md-4 col-lg-2">
        <div class="card card-stretch">
            <a href="#" class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect x="8" y="9" width="3" height="10" rx="1.5" fill="currentColor"></rect>
                        <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="currentColor"></rect>
                        <rect x="18" y="11" width="3" height="8" rx="1.5" fill="currentColor"></rect>
                        <rect x="3" y="13" width="3" height="6" rx="1.5" fill="currentColor"></rect>
                    </svg>
                </span>Weekly Sales
            </a>
        </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-2">
        <div class="card card-stretch">
            <a href="#" class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect x="8" y="9" width="3" height="10" rx="1.5" fill="currentColor"></rect>
                        <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="currentColor"></rect>
                        <rect x="18" y="11" width="3" height="8" rx="1.5" fill="currentColor"></rect>
                        <rect x="3" y="13" width="3" height="6" rx="1.5" fill="currentColor"></rect>
                    </svg>
                </span>Weekly Sales
            </a>
        </div>
    </div>
</div>
@endsection
