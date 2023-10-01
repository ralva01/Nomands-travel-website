@extends('layouts.checkout')
@section('title', 'checkout')


@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    Paket Travel
                                </li>
                                <li class="breadcrumb-item">
                                    Details
                                </li>
                                <li class="breadcrumb-item active">
                                    Checkout
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
<!--Details Wisata-->
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details">

                            
                            @if ($errors->any())

                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)

                                            <li>{{ $error }}</li>
                                            
                                        @endforeach
                                    </ul>
                                </div>
                                
                            @endif
                            

                            <h1>Who is Going?</h1>
                            <p>Trip To {{$item->travel_package->title}}, {{$item->travel_package->location}}</p>

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
                                       
                                       @forelse ($item->details as $detail)
                                             <tr>
                                            <td><img src="https://ui-avatars.com/api/?name={{ $detail->username }}"
                                            height="60" class="rounded-circle">
                                            </td>
                                            <td class="align-middle">
                                                {{$detail->username}}
                                            </td>
                                            <td class="align-middle">
                                                {{$detail->nationality}}
                                            </td>
                                            <td class="align-middle">
                                                {{$detail->is_visa ? '30 Days' : 'N/A'}}
                                            </td>
                                            <td class="align-middle">
                                                {{\Carbon\Carbon::createFromDate($detail->doe_passport) >
                                                \Carbon\Carbon::now() ? 'Active' : 'Inactive'}}
                                            </td>
                                            <td class="align-middle">
                                                <a href="{{ route('checkout-remove', $detail->id) }}">
                                                    <img src="{{ url('Frontend/images/Silang.png')}}" alt="">
                                                </a>
                                            </td>
                                        </tr>
                                       @empty
                                        <tr>
                                            <td colspan="6" class="text-center">
                                                No Visitor
                                            </td>
                                        </tr>
                                       @endforelse
                                       
                                    </tbody>
                                </table>
                            </div>

                            <div class="member mt-3">
                                <h2>Add Member</h2>
                                <form class="form-inline">
                                    <label for="inputUsername" class="sr-only">Name</label>
                                    <input type="text" name="inputUsername" class="form-control mb-2 mr-sm-2" 
                                    id="inputUsername" placeholder="Username">

                                    <label for="inputVisa" class="sr-only">Visa</label>
                                    <select name="inputVisa" id="inputVisa" class="custom-select mb-2 mr-sm-2">
                                        <option value="Visa" selected>Visa</option>
                                        <option value="30 Days">30 Days</option>
                                        <option value="N/A">N/A</option>
                                    </select>

                                    <label for="deoPassport" class="sr-only">DOE Passport</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <input type="text" class="form-control datepicker"
                                        id="deoPassport" placeholder="DOE Passport">
                                    </div>

                                    <button type="submit" class="btn btn-add-now mb-2 px-3">
                                        Add Now
                                    </button>  
                                </form>
                                <h3 class="mt-2 mb-0">Note</h3>
                                <p class="disclaimer mb-0">
                                    You are only able invite member that has registed in Nomads.
                                </p>
                            </div>
                   </div>
                    </div>

<!--Right Content-->
                        <div class="col-lg-4">
                            <div class="card card-details card-right">
                                <h2>Checkout information</h2>
                                <table class="trip-information">
                                    <tr>
                                        <th width="50%">Members</th>
                                        <td width="50%" class="text-right">
                                            2 Person
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Additional VISA</th>
                                        <td width="50%" class="text-right">
                                            $190,00
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Trip Price</th>
                                        <td width="50%" class="text-right">
                                            &80,00 / Person
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Sub Total</th>
                                        <td width="50%" class="text-right">
                                            $280,00 / Person
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Total (+Unique)</th>
                                        <td width="50%" class="text-right text-total">
                                            <span class="text-blue">$279,</span>
                                            <span class="text-orange">33</span>
                                        </td>
                                    </tr>
                                </table>
                                <hr>
<!--Payment-->
                                <h2>Payment Instructions</h2>
                                    <p class="payment-instruction">Please conplete your payment 
                                    before continue the wonderful trip</p>
                                
                                <div class="bank">
                                    <div class="bank-item pb-3">
                                     <img src="{{ url('Frontend/images/Bank-bca.png')}}" alt="" class="bank-images">
                                        <div class="description">
                                            <h3>PT Nomands ID</h3>
                                            <p>
                                             0881 88299 8809
                                                <br>
                                                Bank Central Asia
                                            </p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="bank-item pb-3">
                                        <img src="{{ url('Frontend/images/Bank-hsbc.png')}}" alt="" class="bank-images">
                                           <div class="description">
                                               <h3>PT Nomands ID</h3>
                                               <p>
                                                0899 8501 7888
                                                   <br>
                                                Bank HSBC
                                               </p>
                                           </div>
                                           <div class="clearfix"></div>
                                       </div>
                                </div>
                            </div>
                            <div class="join-container">
                                <a href="{{ route('checkout-success', $item->id)}}" class="btn btn-block btn-join-now mt-3 py-2">
                                    I Have Made Payment
                                </a>
                            </div>

                            <div class="text-center mt-3">
                                <a href="{{ route('details', $item->travel_packages->slug) }}" class="text-muted">
                                    Cencel Booking
                                </a>
                            </div>

                        </div>
                    
                </div>
            </div>
    </section>
    
</main>
@stop



@push('prepend-style')
   <link rel="stylesheet" href="{{ url('Frontend/libraries/combined/css/gijgo.css') }}">
@endpush

@push('addon-script')
    <script src="{{ url('Frontend/libraries/combined/js/gijgo.min.js') }}"></script>
    
    <script>
    $(document).ready(function() {

        $('.datepicker').datepicker({
            uiLibrary: 'bootstrap4',
            icons: {
                rightIcon: '<img src="{{ url('Frontend/images/Icon-Calendar.png')}}" />'
            }
        })
    });
</script>

@endpush
