@extends('layouts.backend_master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="title-header option-title">
                            <h5>Donations List</h5>
                            <div class="right-options">
                                <ul>
                                    <li>
                                        <a class="btn btn-solid" href="{{ route('donation.create') }}">Add Donation</a>
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
                                            <th>Transaction ID</th>
                                            <th>Member ID</th>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Donation Amount</th>
                                            <th>Address</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($donations as $donation)
                                            <tr>
                                                <td>#{{ $donation->id }}</td>

                                                <td>
                                                    @if ($donation->club_member == 'yes')
                                                        #{{ $donation->name }}
                                                    @else
                                                        Not Club Member
                                                    @endif
                                                </td>

                                                <td>
                                                    @if ($donation->club_member == 'yes')
                                                        {{ App\Models\Member::find($donation->name)->name }}
                                                    @else
                                                        {{ $donation->name }}
                                                    @endif
                                                </td>
                                                <td>{{ $donation->created_at->format('d-m-Y h:i:s A') }}</td>

                                                <td>{{ $donation->donation_amount }} taka</td>

                                                <td>{{ $donation->address }}</td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="{{ route('download.donation_invoice', $donation->id) }}"
                                                                class="btn btn-sm btn-info">
                                                                Download
                                                            </a>
                                                        </li>

                                                        {{-- <li>
                                                            <a href="{{ route('donation.edit',$donation->id) }}" class="btn btn-sm btn-info">
                                                                Edit
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <form action="{{ route('donation.destroy', $donation->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-sm btn-secondary">Delete</button>
                                                            </form>
                                                        </li> --}}
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
