@extends('layouts.backend_master');
@section('content')
    <!-- New Product Add Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-8 m-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Update Member</h5>
                                </div>

                                <form class="theme-form theme-form-2 mega-form" action="{{ route('member.update',$member->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            01. Full Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Full Name "
                                                name="name" value="{{ $member->name }}">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            02. Father's Name </label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('father_name') is-invalid @enderror" type="text" placeholder="Father's Name"
                                                name="father_name" value="{{ $member->father_name }}">
                                            @error('father_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            03. Mother's Name </label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('mother_name') is-invalid @enderror" type="text" placeholder="Mother's Name"
                                                name="mother_name" value="{{ $member->mother_name }}">
                                            @error('mother_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            04. Phone Number </label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('phone_number') is-invalid @enderror" type="text" placeholder="Phone Number"
                                                name="phone_number" value="{{ $member->phone_number }}">
                                            @error('phone_number')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            05. Email Address </label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('email') is-invalid @enderror" type="email" placeholder="Email Address"
                                                name="email" value="{{ $member->email }}">
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            06. Birthday Date </label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('date_of_birth') is-invalid @enderror" type="date"
                                            name="date_of_birth" value="{{ $member->date_of_birth }}">
                                            @error('date_of_birth')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            07. Present Address </label>
                                        <div class="col-sm-9">
                                            <textarea name="present_address" rows="4" class="form-control @error('present_address') is-invalid @enderror">
                                            {{ $member->present_address }}
                                            </textarea>
                                            @error('present_address')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            08. Permanent Address </label>
                                        <div class="col-sm-9">
                                            <textarea name="permanent_address" rows="4" class="form-control @error('permanent_address') is-invalid @enderror">
                                                {{ $member->permanent_address }}</textarea>
                                            @error('permanent_address')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            09. Voter ID No. / Birth Registration No. </label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('id_no') is-invalid @enderror" type="text" name="id_no" placeholder="Voter ID No. / Birth Registration No."
                                            value="{{ $member->id_no }}">
                                            @error('id_no')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            10. Nationality </label>
                                        <div class="col-sm-9">
                                            <select name="nationality" class="form-select">
                                                <option value="Bangladeshi">Bangladeshi</option>
                                            </select>
                                            @error('nationality')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            11. Religion </label>
                                        <div class="col-sm-9">
                                            <select name="religion" class="form-select">
                                                <option value="Islam">Islam</option>
                                            </select>
                                            @error('religion')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            12. Profession </label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('profession') is-invalid @enderror" type="text"
                                            name="profession" placeholder="Your Profession" value="{{ $member->profession }}">
                                            @error('profession')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">
                                            13. Blood Group</label>
                                        <div class="col-sm-9">
                                            <select class="js-example-basic-single w-100" name="blood_group" @selected(true)>
                                                <option value="">Select Blood Group</option>
                                                <option value="A+">A+</option>
                                                <option value="B+">B+</option>
                                                <option value="AB+">AB+</option>
                                                <option value="O+">O+</option>
                                                <option value="A-">A-</option>
                                                <option value="B-">B-</option>
                                                <option value="AB-">AB-</option>
                                                <option value="O-">O-</option>
                                            </select>
                                            @error('blood_group')
                                                <span class="text-danger">{{ $member->$message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            14. Education </label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('education') is-invalid @enderror" type="text"
                                            name="education" value="{{ $member->education }}">
                                            @error('education')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            15(a). Monthly Donation Amount (Numbers) </label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('donation_amount_numbers')
                                            @enderror" type="text" name="donation_amount_numbers"
                                            value="{{ $member->donation_amount_numbers }}">
                                            @error('donation_amount_numbers')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            15(b). Monthly Donation Amount (Words) </label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('donation_amount_words')
                                            @enderror" type="text" name="donation_amount_words"
                                            value="{{ $member->donation_amount_words }}">
                                            @error('donation_amount_words')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            16. Member's Photo </label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('member_photo') is-invalid @enderror" type="file" name="member_photo">
                                            <br>
                                            <span>[ Passport size Photo ]</span>
                                            <br>
                                            @error('member_photo')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div> --}}

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0"></label>
                                        <div class="col-sm-9">
                                            <button type="submit" class="btn btn-success">Update Member</button>
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
