@extends('layouts.backend_master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- chart caard section start -->
            <div class="col-sm-6 col-xxl-3 col-lg-6">
                <div class="main-tiles border-5 border-0  card-hover card o-hidden">
                    <div class="custome-1-bg b-r-4 card-body">
                        <div class="media align-items-center static-top-widget">
                            <div class="media-body p-0">
                                <span class="m-0">Total Members</span>
                                <h4 class="mb-0 counter">
                                    {{ $members->count() }}
                                </h4>
                            </div>
                            <div class="align-self-center text-center">
                                <i class="fa fa-users"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xxl-3 col-lg-6">
                <div class="main-tiles border-5 card-hover border-0 card o-hidden">
                    <div class="custome-2-bg b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="media-body p-0">
                                <span class="m-0">Total Donation</span>
                                <h4 class="mb-0 counter">
                                    {{ $donations->count() }}
                                </h4>
                            </div>
                            <div class="align-self-center text-center">
                                <i class="ri-shopping-bag-3-line"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xxl-3 col-lg-6">
                <div class="main-tiles border-5 card-hover border-0  card o-hidden">
                    <div class="custome-3-bg b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="media-body p-0">
                                <span class="m-0">Total Donation Amount</span>
                                <h4 class="mb-0 counter">
                                    {{ $donations->sum('donation_amount') }}
                                </h4>
                            </div>

                            <div class="align-self-center text-center">
                                <i class="ri-chat-3-line"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xxl-3 col-lg-6">
                <div class="main-tiles border-5 card-hover border-0 card o-hidden">
                    <div class="custome-4-bg b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="media-body p-0">
                                <span class="m-0">Total Cost Amount</span>
                                <h4 class="mb-0 counter">
                                    {{ $costs->sum('cost_amount') }}
                                </h4>
                            </div>

                            <div class="align-self-center text-center">
                                <i class="ri-user-add-line"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xxl-3 col-lg-6">
                <div class="main-tiles border-5 border-0  card-hover card o-hidden">
                    <div class="custome-1-bg b-r-4 card-body">
                        <div class="media align-items-center static-top-widget">
                            <div class="media-body p-0">
                                <span class="m-0">Total Savings</span>
                                <h4 class="mb-0 counter">
                                    {{ $donations->sum('donation_amount') - $costs->sum('cost_amount') }}
                                </h4>
                            </div>
                            <div class="align-self-center text-center">
                                <i class="fa fa-users"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xxl-3 col-lg-6">
                <div class="main-tiles border-5 card-hover border-0 card o-hidden">
                    <div class="custome-2-bg b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="media-body p-0">
                                <span class="m-0"> Member Donation Amount</span>
                                <h4 class="mb-0 counter">
                                    {{ $donations->where('club_member','yes')->sum('donation_amount') }}
                                </h4>
                            </div>
                            <div class="align-self-center text-center">
                                <i class="ri-shopping-bag-3-line"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xxl-3 col-lg-6">
                <div class="main-tiles border-5 card-hover border-0  card o-hidden">
                    <div class="custome-3-bg b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="media-body p-0">
                                <span class="m-0">Without Member Donation Amount</span>
                                <h4 class="mb-0 counter">
                                    {{ $donations->where('club_member','no')->sum('donation_amount') }}
                                </h4>
                            </div>

                            <div class="align-self-center text-center">
                                <i class="ri-chat-3-line"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xxl-3 col-lg-6">
                <div class="main-tiles border-5 card-hover border-0 card o-hidden">
                    <div class="custome-4-bg b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="media-body p-0">
                                <span class="m-0">Total Savings</span>
                                <h4 class="mb-0 counter">4.6k
                                </h4>
                            </div>

                            <div class="align-self-center text-center">
                                <i class="ri-user-add-line"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xxl-3 col-lg-6">
                <div class="main-tiles border-5 border-0  card-hover card o-hidden">
                    <div class="custome-1-bg b-r-4 card-body">
                        <div class="media align-items-center static-top-widget">
                            <div class="media-body p-0">
                                <span class="m-0">Total Members</span>
                                <h4 class="mb-0 counter">
                                    {{ $members->count() }}
                                </h4>
                            </div>
                            <div class="align-self-center text-center">
                                <i class="fa fa-users"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xxl-3 col-lg-6">
                <div class="main-tiles border-5 card-hover border-0 card o-hidden">
                    <div class="custome-2-bg b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="media-body p-0">
                                <span class="m-0">Total Donation</span>
                                <h4 class="mb-0 counter">9856
                                </h4>
                            </div>
                            <div class="align-self-center text-center">
                                <i class="ri-shopping-bag-3-line"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xxl-3 col-lg-6">
                <div class="main-tiles border-5 card-hover border-0  card o-hidden">
                    <div class="custome-3-bg b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="media-body p-0">
                                <span class="m-0">Total Donation Amount</span>
                                <h4 class="mb-0 counter">893
                                    {{-- <a href="add-new-product.html" class="badge badge-light-secondary grow">
                                        ADD NEW</a> --}}
                                </h4>
                            </div>

                            <div class="align-self-center text-center">
                                <i class="ri-chat-3-line"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xxl-3 col-lg-6">
                <div class="main-tiles border-5 card-hover border-0 card o-hidden">
                    <div class="custome-4-bg b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="media-body p-0">
                                <span class="m-0">Total Customers</span>
                                <h4 class="mb-0 counter">4.6k
                                    <span class="badge badge-light-success grow">
                                        <i data-feather="trending-down"></i>8.5%</span>
                                </h4>
                            </div>

                            <div class="align-self-center text-center">
                                <i class="ri-user-add-line"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- lastest donation transactions start-->
            <div class="col-xxl-12">
                <div class="card o-hidden card-hover">
                    <div class="card-header card-header-top card-header--2 px-0 pt-0">
                        <div class="card-header-title">
                            <h4>Lastest Donation Transactions</h4>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <div>
                            <div class="table-responsive">
                                <table class="best-selling-table table border-0">
                                    <tbody>
                                        @forelse ($donations as $donation)
                                            <tr>
                                                <td>
                                                    <div class="best-product-box">
                                                        <div class="product-name">
                                                            <h6>Transaction ID</h6>
                                                            <h5>#{{ $donation->id }}</h5>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="product-detail-box">
                                                        <h6>Name</h6>
                                                        <h5>{{ $donation->name }}</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="product-detail-box">
                                                        <h6>Email</h6>
                                                        <h5>{{ $donation->email }}</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="product-detail-box">
                                                        <h6>Donation Amount</h6>
                                                        <h5>{{ $donation->donation_amount }}</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="product-detail-box">
                                                        <h6>Date</h6>
                                                        <h5>{{ $donation->created_at->format('d-m-Y h:i:s A') }}</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="product-detail-box">
                                                        <h6>Address</h6>
                                                        <h5>{{ $donation->address }}</h5>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td class="text-danger text-center">No Transaction Available !</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- lastest donation transactions end-->

            <!-- lastest cost start-->
            <div class="col-xxl-12">
                <div class="card o-hidden card-hover">
                    <div class="card-header card-header-top card-header--2 px-0 pt-0">
                        <div class="card-header-title">
                            <h4>Lastest Cost</h4>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <div>
                            <div class="table-responsive">
                                <table class="best-selling-table table border-0">
                                    <tbody>
                                        @forelse ($costs as $cost)
                                            <tr>
                                                <td>
                                                    <div class="best-product-box">
                                                        <div class="product-name">
                                                            <h5 class="text-primary"> Cost Reason: <span
                                                                    class="text-success">{{ $cost->cost_reason }}</span>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="product-detail-box">
                                                        <h5 class="text-primary">Cost Amount: <span
                                                                class="text-success">{{ $cost->cost_amount }}</span> </h5>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td class="text-danger text-center">No Costs Available !</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- lastest cost end-->

            <!-- lastest added member start-->
            <div class="col-xxl-12">
                <div class="card o-hidden card-hover">
                    <div class="card-header card-header-top card-header--2 px-0 pt-0">
                        <div class="card-header-title">
                            <h4>Lastest Added Members</h4>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <div>
                            <div class="table-responsive">
                                <table class="best-selling-table table border-0">
                                    <tbody>
                                        @forelse ($members as $member)
                                            <tr>
                                                <td>
                                                    <div class="best-product-box">
                                                        <div class="product-name">
                                                            <h6>Member ID</h6>
                                                            <h5>#{{ $member->id }}</h5>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="product-detail-box">
                                                        <h6>Member Name</h6>
                                                        <h5>{{ $member->name }}</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="product-detail-box">
                                                        <h6>Email</h6>
                                                        <h5>{{ $member->email }}</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="product-detail-box">
                                                        <h6>Father's Name</h6>
                                                        <h5>{{ $member->father_name }}</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="product-detail-box">
                                                        <h6>Mother's Name</h6>
                                                        <h5>{{ $member->mother_name }}</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="product-detail-box">
                                                        <h6>Blood Group</h6>
                                                        <h5 class="text-danger">{{ $member->blood_group }}</h5>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td class="text-danger text-center">No Members Available !</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- lastest added member end-->

            <!-- chart start-->
            <div class="col-xxl-12 col-md-6">
                <div class="h-100">
                    <div class="card o-hidden card-hover">
                        <div class="card-header border-0">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="card-header-title">
                                    <h4>Visitors</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="pie-chart">
                                <div id="pie-chart-visitors"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- chart end-->

        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection
