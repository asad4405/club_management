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

                        @if (session('update-cost-success'))
                            <div class="alert alert-success">{{ session('update-cost-success') }}</div>
                        @endif

                        <div>
                            <div class="table-responsive">
                                <table class="table all-package theme-table table-product" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>SL no.</th>
                                            <th>Cost Reason</th>
                                            <th>Cost Amount</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($costs as $cost)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>

                                                <td>{{ $cost->cost_reason }}</td>

                                                <td>{{ $cost->cost_amount }}</td>

                                                <td>{{ $cost->created_at->format('d-m-Y h:i:s A') }}</td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="{{ route('cost.edit', $cost->id) }}"
                                                                class="btn btn-sm btn-info">
                                                                Edit
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <form action="{{ route('cost.destroy', $cost->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-sm btn-secondary">Delete</button>
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
