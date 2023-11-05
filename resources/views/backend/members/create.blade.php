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
                                    <h5>Member Information</h5>
                                </div>

                                @if (session('add-member-success'))
                                    <div class="alert alert-success">{{ session('add-member-success') }}</div>
                                @endif

                                <form class="theme-form theme-form-2 mega-form" action="{{ route('member.store') }}"
                                    method="POST">
                                    @csrf
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            01(a). Name (Bangla)</label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('bangla_name') is-invalid @enderror" type="text" placeholder="Full Name (Bangla)"
                                                name="bangla_name" value="{{ old('bangla_name') }}">
                                            @error('bangla_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            01(b). Name (English)</label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('english_name') is-invalid @enderror" type="text" placeholder="Full Name (English)"
                                                name="english_name" value="{{ old('english_name') }}">
                                            @error('english_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            02. Father's Name </label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('father_name') is-invalid @enderror" type="text" placeholder="Father's Name"
                                                name="father_name" value="{{ old('father_name') }}">
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
                                                name="mother_name" value="{{ old('mother_name') }}">
                                            @error('mother_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            04. Birthday Date </label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('date_of_birth') is-invalid @enderror" type="date"
                                            name="date_of_birth" value="{{ old('date_of_birth') }}">
                                            @error('date_of_birth')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            05. Present Address </label>
                                        <div class="col-sm-9">
                                            <textarea name="present_address" rows="4" class="form-control @error('present_address') is-invalid @enderror">
                                            {{ old('present_address') }}
                                            </textarea>
                                            @error('present_address')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            06. Permanent Address </label>
                                        <div class="col-sm-9">
                                            <textarea name="permanent_address" rows="4" class="form-control @error('permanent_address') is-invalid @enderror">
                                                {{ old('permanent_address') }}</textarea>
                                            @error('permanent_address')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            07. Voter ID No. / Birth Registration No. </label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('id_no') is-invalid @enderror" type="text" name="id_no" placeholder="Voter ID No. / Birth Registration No."
                                            value="{{ old('id_no') }}">
                                            @error('id_no')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            08. Nationality </label>
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
                                            09. Religion </label>
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
                                            10. Profession </label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('profession') is-invalid @enderror" type="text"
                                            name="profession" placeholder="Your Profession" value="{{ old('profession') }}">
                                            @error('profession')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">
                                            11. Blood Group</label>
                                        <div class="col-sm-9">
                                            <select class="js-example-basic-single w-100" name="blood_group">
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
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            12. Education </label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('education') is-invalid @enderror" type="text"
                                            name="education" value="{{ old('education') }}">
                                            @error('education')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            13(a). Monthly Donation Amount (Numbers) </label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('donation_amount_numbers')
                                            @enderror" type="text" name="donation_amount_numbers"
                                            value="{{ old('donation_amount_numbers') }}">
                                            @error('donation_amount_numbers')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            13(b). Monthly Donation Amount (Words) </label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('donation_amount_words')
                                            @enderror" type="text" name="donation_amount_words"
                                            value="{{ old('donation_amount_words') }}">
                                            @error('donation_amount_words')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            14. Member's Photo </label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('member_photo') is-invalid @enderror" type="file" name="member_photo">
                                            <br>
                                            <span>[ Passport size Photo ]</span>
                                            <br>
                                            @error('member_photo')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            15. Member's signature </label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('member_signature') is-invalid @enderror" type="file" name="member_signature">
                                            <br>
                                            <span>[ Signature size 300*80 px ]</span>
                                            <br>
                                            @error('member_signature')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0"></label>
                                        <div class="col-sm-9">
                                            <button type="submit" class="btn btn-success">Add New Member</button>
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
