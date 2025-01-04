<x-admin-layout>
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor mt-5 pt-5" id="kt_content">

        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                       اضافة مستخدم جديد
                    </h3>
                </div>
            </div>
            <!--begin::Form-->
            <form class="kt-form kt-form--label-right" method="post" action="{{route('users.store')}}" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <div class="kt-portlet__body">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label ">الاسم</label>
                        <div class="col-md-6 col-sm-12">
                            <input type="text" value="" name="name" id="title" class="form-control @error('name') is-invalid @enderror" placeholder="name">
                            @error('name')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label ">البريد الالكتروني</label>
                        <div class="col-md-6 col-sm-12">
                            <input type="text" value="" name="email" id="title" class="form-control @error('email') is-invalid @enderror" placeholder="email">
                            @error('email')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label ">كلمة المرور</label>
                        <div class="col-md-6 col-sm-12">
                            <input type="password" value="" name="password" id="title" class="form-control @error('password') is-invalid @enderror" placeholder="password">
                            @error('password')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                  
                    </div>
                    <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <div class="text-center">
                           
                                <button type="submit" class="btn btn-success">حفظ</button>
                                <a href="{{ route('users.index')}}" class="btn btn-secondary">الغاء</a>
                        </div>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
            </div>
</x-admin-layout>
