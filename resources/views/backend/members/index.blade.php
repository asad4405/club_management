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
                                            <th>Member ID</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Phone Number</th>
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
                                                        <img src="{{ asset('uploads/member_photo') }}/{{ $member->member_photo }}" class="img-fluid"
                                                            alt="">
                                                    </div>
                                                </td>

                                                <td>{{ $member->name }}</td>

                                                <td>{{ $member->phone_number }}</td>

                                                <td class="text-danger">{{ $member->blood_group }}</td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="{{ route('member.show', $member->id) }}"
                                                                class="btn btn-sm btn-warning">
                                                                Download
                                                            </a>
                                                        </li>

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
                                                            <form action="{{ route('member.destroy', $member->id) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-sm btn-secondary">Delete</button>
                                                            </form>
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
