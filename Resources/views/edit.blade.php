
@extends('layouts.admin')

@section('content')
    <!-- CONTAINER -->
    <div class="main-container container-fluid">
        <!-- PAGE-HEADER -->
        @include('customer::partial.header')
        <!-- PAGE-HEADER END -->

        <!-- ROW -->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">ویرایش مشتری</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('customer.update', $customer->id) }}" method="post" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
                            <div class="col-md-6">
                                <label for="name" class="form-label">نام</label>
                                <input type="text" name="name" class="form-control" id="name" required value="{{ $customer->name }}">
                                <div class="invalid-feedback">لطفا نام را وارد کنید</div>
                            </div>
                            <div class="col-md-6">
                                <label for="url" class="form-label">لینک</label>
                                <input type="text" name="url" class="form-control" id="url" value="{{ $customer->url }}">
                                <div class="invalid-feedback">لطفا لینک را وارد کنید</div>
                            </div>

                            <div class="col-md-11">
                                <label for="logo" class="form-label">لوگو</label>
                                <input type="file" name="logo" class="form-control" aria-label="لوگو" id="logo" accept="image/*" @if(!$customer->logo) required @endif>
                                <div class="invalid-feedback">لطفا لوگو را انتخاب کنید</div>
                            </div>
                            <div class="col-md-1">
                                @if($customer->logo)
                                    <img src="{{ url($customer->logo) }}" class="w-100">
                                @endif
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">ارسال فرم</button>
                                @method('PATCH')
                                @csrf
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ROW CLOSED -->


    </div>
@endsection
