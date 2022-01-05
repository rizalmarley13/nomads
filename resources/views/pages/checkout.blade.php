@extends('layouts.checkout')

@section('title', 'Checkout')

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
                <li class="breadcrumb-item">Details</li>
                <li class="breadcrumb-item active">Checkout</li>
                </ol>
            </nav>
            </div>
        </div>
        <div>
            <div class="row">
            <div class="col-lg-8 pl-lg-0">
                <div class="card card-details">
                <h1>Who is going?</h1>
                <p>Trip to Karimun, Jawa, Indonesia</p>
                <div class="attendee">
                    <table class="table table-responsive-sm text-center">
                    <thead>
                        <tr>
                        <td>Picture</td>
                        <td>Name</td>
                        <td>Nationality</td>
                        <td>Visa</td>
                        <td>Passport</td>
                        <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>
                            <img src="{{ url('frontend/images/avatar1.png') }}" height="60" />
                        </td>
                        <td class="align-middle">Rizal Marley</td>
                        <td class="align-middle">ID</td>
                        <td class="align-middle">N/A</td>
                        <td class="align-middle">Active</td>
                        <td class="align-middle">
                            <img src="{{ url('frontend/images/ic_remove.png') }}" alt="" />
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <img src="{{ url('frontend/images/avatar2.png') }}" height="60" />
                        </td>
                        <td class="align-middle">Ziggy Marley</td>
                        <td class="align-middle">JMK</td>
                        <td class="align-middle">30 Days</td>
                        <td class="align-middle">Active</td>
                        <td class="align-middle">
                            <img src="{{ url('frontend/images/ic_remove.png') }}" alt="" />
                        </td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                <div class="member mt-3">
                    <h2>Add Member</h2>
                    <form action="#" class="form-inline">
                    <label for="inputUser" class="sr-only">Name</label>
                    <input type="text" name="inputUser" class="form-control mb-2 mr-sm-2" id="inputUser" placeholder="Username" />
                    <label for="inputVisa" class="sr-only">Visa</label>
                    <select name="inputVisa" id="inputVisa" class="custom-select mb-2 mr-sm-2">
                        <option value="VISA" selected>VISA</option>
                        <option value="30 Days">30 Days</option>
                        <option value="N/A">N/A</option>
                    </select>

                    <label for="doePassport" class="sr-only">DOE Passport</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <input type="text" class="form-control datepicker" id="doePassport" width="210" placeholder="DOE Passport" />
                    </div>

                    <button type="submit" class="btn btn-add-now mb-2 px-4">Add Now</button>
                    </form>
                    <h3 class="mt-2 mb-0">Note</h3>
                    <p class="disclaimer mb-0">You are only able to invite member that has registered in Nomads.</p>
                </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-details card-right">
                <h2>Checkout informations</h2>
                <table class="trip-information">
                    <tr>
                    <th width="50%">Members</th>
                    <td width="50%" class="text-right">2 Person</td>
                    </tr>
                    <tr>
                    <th width="50%">Additional VISA</th>
                    <td width="50%" class="text-right">$ 190,00</td>
                    </tr>
                    <tr>
                    <th width="50%">Trip Price</th>
                    <td width="50%" class="text-right">$ 80,00 / person</td>
                    </tr>
                    <tr>
                    <th width="50%">Sub Total</th>
                    <td width="50%" class="text-right">$ 350,00</td>
                    </tr>
                    <tr>
                    <th width="50%">Total (+ Unique Code)</th>
                    <td width="50%" class="text-right text-total"><span class="text-blue">$ 350,</span><span class="text-red">33</span></td>
                    </tr>
                </table>
                <hr />
                <h2>Payment Intruction</h2>
                <p class="payment-intruction">You are only able to invite member that has registered in Nomads.</p>
                <div class="bank">
                    <div class="bank-item pb-3">
                    <img src="{{ url('frontend/images/ic_bank.png') }}" alt="" class="bank-image" />
                    <div class="description">
                        <h3>PT Nomads ID</h3>
                        <p>
                        0881 2456 3657
                        <br />
                        Bank BCA
                        </p>
                    </div>
                    <div class="clearfix"></div>
                    </div>
                    <div class="bank-item pb-3">
                    <img src="{{ url('frontend/images/ic_bank.png') }}" alt="" class="bank-image" />
                    <div class="description">
                        <h3>PT Nomads ID</h3>
                        <p>
                        377 1254 8547
                        <br />
                        Bank HSBC
                        </p>
                    </div>
                    <div class="clearfix"></div>
                    </div>
                </div>
                </div>
                <div class="join-container">
                <a href="{{ route('checkout-success') }}" class="btn btn-block btn-join-now mt-3 py-22"> I Have Made Payment</a>
                </div>
                <div class="text-center mt-3">
                <a href="{{ route('details') }}" class="text-muted">Cancel Booking</a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
</main>
    
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{ url('frontend/libraries/combined/css/gijgo.min.css') }}" />
@endpush

@push('addon-script')

<script src="{{ url('frontend/libraries/combined/js/gijgo.min.js') }}"></script>
    <!-- LOAD LIBRARIES GIJGO -->
<script>
    $(".datepicker").datepicker({
        uiLibrary: "bootstrap4",
        icon: {
        rightIcon: '<img src="{{ url('frontend/images/ic_doe.png') }}" />',
        },
    });
</script>
    
@endpush