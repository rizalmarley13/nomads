@extends('layouts.app')

@section('title', 'Detail Travel')    

@section('content')

<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
        <div class="row">
            <div class="col pl-lg-0 pl-sm-2">
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item">Paket Travel</li>
                <li class="breadcrumb-item active">Details</li>
                </ol>
            </nav>
            </div>
        </div>
        <div>
            <div class="row">
            <div class="col-lg-8 pl-lg-0">
                <div class="card card-details">
                <h1>Karimun</h1>
                <p>Republic of Indonesia</p>
                <div class="gallery">
                    <div class="xzoom-container">
                    <img src="frontend/images/karimun1.jpg" class="xzoom" id="xzoom-default" xoriginal="frontend/images/karimun1.jpg" />
                    </div>
                    <div class="xzoom-thumbs">
                    <a href="frontend/images/karimun1.jpg">
                        <img src="frontend/images/karimun2.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/karimun1.jpg" />
                    </a>
                    <a href="frontend/images/karimun3.jpg">
                        <img src="frontend/images/karimun3.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/karimun3.jpg" />
                    </a>
                    <a href="frontend/images/karimun4.jpg">
                        <img src="frontend/images/karimun4.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/karimun4.jpg" />
                    </a>
                    <a href="frontend/images/karimun5.jpg">
                        <img src="frontend/images/karimun5.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/karimun5.jpg" />
                    </a>
                    <a href="frontend/images/karimun6.jpg">
                        <img src="frontend/images/karimun6.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/karimun6.jpg" />
                    </a>
                    </div>
                </div>
                <h2>Tentang Wisata</h2>
                <p>
                    Karimunjawa is an archipelago in the Java Sea which is included in Jepara Regency, Central Java. With a land area of ​​± 1,500 hectares and waters of ± 110,000 hectares, Karimunjawa is now being developed into a marine
                    park tourism charm that is starting to be popular with local and foreign tourists.
                </p>
                <p>
                    Karimunjawa is very suitable as a vacation, after months of busy work, so that Karimunjawa can refresh the mind. Karimunjawa seems to be on vacation all the time, because of its beautiful and exotic nature. The beauty of
                    the Karimunjawa Islands is like the Caribbean. Karimunjawa has other similarities with the Caribbean which is consisting of several small islands, therefore the Dutch gave the nickname as Caribbean van Java.
                </p>
                <div class="features row">
                    <div class="col-md-4">
                    <img src="frontend/images/icon_event 1.png" alt="" class="features-image" />
                    <div class="description"></div>
                    <div class="description">
                        <h3>Featured Event</h3>
                        <p>No Event</p>
                    </div>
                    </div>
                    <div class="col-md-4 border-left">
                    <img src="frontend/images/icon_bahasa 1.png" alt="" class="features-image" />
                    <div class="description">
                        <h3>Language</h3>
                        <p>Bahasa Indonesia</p>
                    </div>
                    </div>
                    <div class="col-md-4 border-left">
                    <img src="frontend/images/icon_food 1.png" alt="" class="features-image" />
                    <div class="description">
                        <h3>Foods</h3>
                        <p>Local Foods</p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-details card-right">
                <h2>Members are going</h2>
                <div class="member my-2">
                    <img src="frontend/images/member1.png" class="member-image mr-1" />
                    <img src="frontend/images/member2.png" class="member-image mr-1" />
                    <img src="frontend/images/member3.png" class="member-image mr-1" />
                    <img src="frontend/images/member4.png" class="member-image mr-1" />
                    <img src="frontend/images/member5.png" class="member-image mr-1" />
                </div>
                <hr />
                <h2>Trip informations</h2>
                <table class="trip-information">
                    <tr>
                    <th width="50%">Date of departure</th>
                    <td width="50%" class="text-right">22 Nov, 2021</td>
                    </tr>
                    <tr>
                    <th width="50%">Duration</th>
                    <td width="50%" class="text-right">4D 3N</td>
                    </tr>
                    <tr>
                    <th width="50%">Type of trip</th>
                    <td width="50%" class="text-right">Open trip</td>
                    </tr>
                    <tr>
                    <th width="50%">Price</th>
                    <td width="50%" class="text-right">$80,00 / Person</td>
                    </tr>
                </table>
                </div>
                <div class="join-container">
                <a href="{{ route('checkout') }}" class="btn btn-block btn-join-now mt-3 py-22"> Join Now </a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
</main>

@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}" />
@endpush

@push('addon-script')

<script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
    <!-- LOAD LIBRARIES XZOOM -->
<script>
$(document).ready(function () {
$(".xzoom, .xzoom-gallery").xzoom({
    zoomWidth: 500,
    title: false,
    tint: "#333",
    xoffset: 15,
});
});
</script>
    
@endpush