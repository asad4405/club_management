@extends('layouts.backend_master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="title-header option-title">
                            <h5>Details of - {{ $member->name }}</h5>
                        </div>
                        <div>
                            <div class="table-responsive">
                                <table class="table all-package theme-table table-product">
                                    <thead>
                                        <tr>
                                            <th>Header</th>
                                            <th>Details</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>Invoice ID</td>
                                            <td>#{{ $member->id }}</td>
                                        </tr>
                                        <tr>
                                            <td>Name</td>
                                            <td>{{ $member->name }}</td>
                                        </tr>

                                        <tr>
                                            <td>Father's Name</td>
                                            <td>{{ $member->father_name }}</td>
                                        </tr>

                                        <tr>
                                            <td>Mother's Name</td>
                                            <td>{{ $member->mother_name }}</td>
                                        </tr>

                                        <tr>
                                            <td>Phone Number</td>
                                            <td>{{ $member->phone_number }}</td>
                                        </tr>

                                        <tr>
                                            <td>Email Address</td>
                                            <td>{{ $member->email }}</td>
                                        </tr>

                                        <tr>
                                            <td>Mother's Name</td>
                                            <td>{{ $member->mother_name }}</td>
                                        </tr>

                                        <tr>
                                            <td>Birthday Date</td>
                                            <td>{{ $member->date_of_birth }}</td>
                                        </tr>

                                        <tr>
                                            <td>Present Address</td>
                                            <td>{{ $member->present_address }}</td>
                                        </tr>

                                        <tr>
                                            <td>Permanent Address</td>
                                            <td>{{ $member->permanent_address }}</td>
                                        </tr>

                                        <tr>
                                            <td>Voter ID No. / Birth Registration No.</td>
                                            <td>{{ $member->id_no }}</td>
                                        </tr>

                                        <tr>
                                            <td>Nationality</td>
                                            <td>{{ $member->nationality }}</td>
                                        </tr>

                                        <tr>
                                            <td>Religion</td>
                                            <td>{{ $member->religion }}</td>
                                        </tr>

                                        <tr>
                                            <td>Profession</td>
                                            <td>{{ $member->profession }}</td>
                                        </tr>

                                        <tr>
                                            <td>Blood Group</td>
                                            <td>{{ $member->blood_group }}</td>
                                        </tr>

                                        <tr>
                                            <td>Education</td>
                                            <td>{{ $member->education }}</td>
                                        </tr>

                                        <tr>
                                            <td>Monthly Donation Amount (Numbers)</td>
                                            <td>{{ $member->donation_amount_numbers }}</td>
                                        </tr>

                                        <tr>
                                            <td>Monthly Donation Amount (Words)</td>
                                            <td>{{ $member->donation_amount_words }}</td>
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
    <!-- Container-fluid Ends-->
@endsection
