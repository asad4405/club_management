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
                                    <h5>Update Cost</h5>
                                </div>

                                <form class="theme-form theme-form-2 mega-form" action="{{ route('cost.update',$cost->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            Cost Reason</label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('cost_reason') is-invalid @enderror" type="text" placeholder="Cost Reason"
                                                name="cost_reason" value="{{ $cost->cost_reason }}">
                                            @error('cost_reason')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            Cost Amount </label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('cost_amount') is-invalid @enderror" type="text" placeholder="Cost Amount"
                                                name="cost_amount" value="{{ $cost->cost_amount }}">
                                            @error('cost_amount')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0"></label>
                                        <div class="col-sm-9">
                                            <button type="submit" class="btn btn-success">Add Cost</button>
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
