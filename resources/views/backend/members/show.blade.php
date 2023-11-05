@extends('layouts.backend_master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="title-header option-title">
                            <h5>Details of - {{ $member->english_name }}</h5>
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
                                            <td>01(a). Name (Bangla)</td>
                                            <td>{{ $member->bangla_name }}</td>
                                        </tr>

                                        <tr>
                                            <td>01(a). Name (English)</td>
                                            <td>{{ $member->english_name }}</td>
                                        </tr>

                                        <tr>
                                            <td>02. Father's Name</td>
                                            <td>{{ $member->father_name }}</td>
                                        </tr>

                                        <tr>
                                            <td>03. Mother's Name</td>
                                            <td>{{ $member->mother_name }}</td>
                                        </tr>

                                        <tr>
                                            <td>03. Mother's Name</td>
                                            <td>{{ $member->mother_name }}</td>
                                        </tr>

                                        <tr>
                                            <td>04. Birthday Date</td>
                                            <td>{{ $member->date_of_birth }}</td>
                                        </tr>

                                        <tr>
                                            <td>05. Present Address</td>
                                            <td>{{ $member->present_address }}</td>
                                        </tr>

                                        <tr>
                                            <td>06. Permanent Address</td>
                                            <td>{{ $member->permanent_address }}</td>
                                        </tr>

                                        <tr>
                                            <td>07. Voter ID No. / Birth Registration No.</td>
                                            <td>{{ $member->id_no }}</td>
                                        </tr>

                                        <tr>
                                            <td>08. Nationality</td>
                                            <td>{{ $member->nationality }}</td>
                                        </tr>

                                        <tr>
                                            <td>09. Religion</td>
                                            <td>{{ $member->religion }}</td>
                                        </tr>

                                        <tr>
                                            <td>10. Profession</td>
                                            <td>{{ $member->profession }}</td>
                                        </tr>

                                        <tr>
                                            <td>11. Blood Group</td>
                                            <td>{{ $member->blood_group }}</td>
                                        </tr>

                                        <tr>
                                            <td>12. Education</td>
                                            <td>{{ $member->education }}</td>
                                        </tr>

                                        <tr>
                                            <td>13(a). Monthly Donation Amount (Numbers)</td>
                                            <td>{{ $member->donation_amount_numbers }}</td>
                                        </tr>

                                        <tr>
                                            <td>13(b). Monthly Donation Amount (Words)</td>
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
