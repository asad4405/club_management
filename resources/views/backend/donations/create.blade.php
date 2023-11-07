@extends('layouts.backend_master');
@section('content')
    <!-- New Product Add Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-8 m-auto">
                        @if (session('add-donation-success'))
                            <div class="alert alert-success">{{ session('add-donation-success') }}</div>
                        @endif
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Donation with Club Members</h5>
                                </div>

                                @if (session('add-member-success'))
                                    <div class="alert alert-success">{{ session('add-member-success') }}</div>
                                @endif

                                <form class="theme-form theme-form-2 mega-form" action="{{ route('donation.store') }}"
                                    method="POST">
                                    @csrf
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            Name</label>
                                        <div class="col-sm-9">
                                            <select class="js-example-basic-single w-100" name="name">
                                                <option value="">Select Members</option>
                                                @foreach ($members as $member)
                                                    <option value="{{ $member->id }}">#{{ $member->id }}. {{ $member->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            Donation Reason</label>
                                        <div class="col-sm-9">
                                            <select name="donation_reason" id="" class="form-select">
                                                <option value="">Select Donation Reason</option>
                                                <option value="">Club</option>
                                            </select>
                                            @error('donation_reason')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            Donation Amount</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="donation_amount"
                                                placeholder="Donation Amount">
                                            @error('donation_amount')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            Address </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="address" placeholder="Address">
                                            @error('address')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            Email </label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" name="email" placeholder="Email">
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            Club Member</label>
                                        <div class="col-sm-9">
                                            <select class="form-select" name="club_member">
                                                <option value="yes">Yes</option>
                                            </select>
                                            @error('club_member')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0"></label>
                                        <div class="col-sm-9">
                                            <button type="submit" class="btn btn-success">Add Donation</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Donation without Club Members</h5>
                                </div>

                                @if (session('add-member-success'))
                                    <div class="alert alert-success">{{ session('add-member-success') }}</div>
                                @endif

                                <form class="theme-form theme-form-2 mega-form" action="{{ route('donation.store') }}"
                                    method="POST">
                                    @csrf
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="name" placeholder="Name">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            Donation Reason</label>
                                        <div class="col-sm-9">
                                            <select name="donation_reason" id="" class="form-select">
                                                <option value="">Select Donation Reason</option>
                                                <option value="">Club</option>
                                            </select>
                                            @error('donation_reason')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            Donation Amount</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="donation_amount"
                                                placeholder="Donation Amount">
                                            @error('donation_amount')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            Address </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="address" placeholder="Address">
                                            @error('address')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" name="email" placeholder="Email">
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            Club Member</label>
                                        <div class="col-sm-9">
                                            <select class="form-select" name="club_member">
                                                <option value="no">No</option>
                                            </select>
                                            @error('club_member')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0"></label>
                                        <div class="col-sm-9">
                                            <button type="submit" class="btn btn-success">Add Donation</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
