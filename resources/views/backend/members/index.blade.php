@extends('layouts.backend_master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="title-header option-title">
                            <h5>Member List</h5>
                            <div class="right-options">
                                <ul>
                                    <li>
                                        <a class="btn btn-solid" href="{{ route('member.create') }}">Add New Member</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        @if (session('member-update-success'))
                            <div class="alert alert-success">{{ session('member-update-success') }}</div>
                        @endif

                        <div>
                            <div class="table-responsive">
                                <table class="table all-package theme-table table-product" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>Invoice ID</th>
                                            <th>Member Photo</th>
                                            <th>Member Name</th>
                                            <th>Father's Name</th>
                                            <th>Mother's Name</th>
                                            <th>Blood Group</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($members as $member)
                                            <tr>
                                                <td>#{{ $member->id }}</td>
                                                <td>
                                                    <div class="table-image">
                                                        <img src="assets/images/product/1.png" class="img-fluid"
                                                            alt="">
                                                    </div>
                                                </td>

                                                <td>{{ $member->name }}</td>

                                                <td>{{ $member->father_name }}</td>

                                                <td>{{ $member->mother_name }}</td>

                                                <td class="text-danger">{{ $member->blood_group }}</td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="{{ route('member.show', $member->id) }}"
                                                                class="btn btn-sm btn-primary">
                                                                Show
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="{{ route('member.edit', $member->id) }}"
                                                                class="btn btn-sm btn-info">
                                                                Edit
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="" class="btn btn-sm btn-secondary">
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        @endforeach
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
