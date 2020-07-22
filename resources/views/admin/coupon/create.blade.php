@extends('layouts.admin')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <form action="{{ route('coupon.store')}}" method="POST">
                @csrf
                <div class="row mt-3">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h3>Add Coupon</h3>
                            </div>
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="name">Coupom Name</label>
                                    <input class="form-control" type="text" name="name" id="name">
                                </div>

                                <div class="form-group">
                                    <label for="code">Coupom Code</label>
                                    <input class="form-control" type="text" name="code" id="code">
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="starts_at">Starts Date</label>
                                            <input class="form-control datetimepicker" type="text" id="starts_at" name="starts_at">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="expires_at">Expires Date</label>
                                            <input class="form-control datetimepicker" type="text" id="expires_at" name="expires_at">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea rows="8" class="form-control" name="description" id="description"></textarea>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 offset-md-1">
                        <div class="card">
                            <div class="card-header">
                                <h3>Status</h3>
                            </div>
                            <div class="card-body">
                                <select class="form-control" name="status" id="status">
                                    <option value="1">Active</option>
                                    <option value="1">Inactive</option>
                                </select>
                            </div>
                        </div>

                        

                        <div class="card">
                            <div class="card-header">
                                <h3>Fixed Amount</h3>
                            </div>
                            <div class="card-body">
                                <select class="form-control" name="is_fixed" id="is_fixed">
                                    <option value="1">Yes</option>
                                    <option value="1">No</option>
                                </select>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h3>Amount</h3>
                            </div>
                            <div class="card-body">
                                <input type="number" name="amount" id="amount" step="any" min="0" class="form-control">
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h3>Max Users</h3>
                            </div>
                            <div class="card-body">
                                <input type="number" name="max_uses" id="max_uses" step="1" min="1" class="form-control">
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <input type="submit" class="btn btn-primary text0light btn-block">
                            </div>
                        </div>

                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection