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
                        <h3 class="card-title">افزودن مشتری</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('customer.store') }}" method="post" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
                            <div class="col-md-6">
                                <label for="name" class="form-label">نام</label>
                                <input type="text" name="name" class="form-control" id="name" required value="{{ old('name') }}">
                                <div class="invalid-feedback">لطفا نام را وارد کنید</div>
                            </div>
                            <div class="col-md-6">
                                <label for="url" class="form-label">لینک</label>
                                <input type="text" name="url" class="form-control" id="url" value="{{ old('url') }}">
                                <div class="invalid-feedback">لطفا لینک را وارد کنید</div>
                            </div>

                            <div class="col-md-12">
                                <label for="logo" class="form-label">لوگو</label>
                                <input type="file" name="logo" class="form-control" aria-label="لوگو" id="logo" accept="image/*" required>
                                <div class="invalid-feedback">لطفا لوگو را انتخاب کنید</div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">ارسال فرم</button>
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
