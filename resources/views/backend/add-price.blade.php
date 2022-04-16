@extends('backend.layouts.main')
@section('backend-section')
    <div class="main-content">
        <form name="add_banner" method="post" enctype="multipart/form-data" action={{ url('/admin/price/add')}}>
            @csrf
            <section class="section">
                <div class="section-body">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>{{ $title }}</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Select Food Type</label>
                                        <select name="food_type" id="" class="form-control" >
                                            <option value="with_food"> With Food</option>
                                            <option value="without_food"> Without Food</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="card-body">
                                        <div class="form-group">
                                            <label>Select Tent Type</label>
                                            <select name="tent_type" id="" class="form-control" >
                                                <option value="single">Single</option>
                                                <option value="grouped">Grouped</option>

                                            </select>
                                        </div>
                                </div>
                                <div class="card-body">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="text" class="form-control" name="price">

                                        </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                                    <button class="btn btn-secondary" type="reset">Reset</button>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </section>
        </form>
    @endsection
