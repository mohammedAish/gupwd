<x-admin-layout>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor mt-5 pt-5" id="kt_content">
        <div class="kt-portlet">

            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title ">
                        شريك جديد
                    </h3>
                </div>
            </div>
            <div class="container p-5">
                <form action="{{ route('partners.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group ">
                                <label class=" col-form-label ">الاسم  <span
                                        style="color:#FF0000">*</span></label>
                                <div class="">
                                    <input type="text" value="{{ old('name') }}" name="name" id="name"
                                        class="form-control @error('name') is-invalid @enderror">
                                    @error('name')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                    </div>

                  
                 
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group ">
                                <label class=" col-form-label ">شعار الشريك <span
                                        style="color:#FF0000">*</span></label>
                                <div class="col-md- col-sm-12 file-loading">
                                    <input id="input-freqd-1" name="image"
                                        class="form-control  @error('image')is-invalid @enderror"  type="file"
                                        accept="image/*">
                                    @error('image')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                <hr>
                            </div>
                        </div>
                       
                    </div>
                
                  
                    <hr>
                  
                    </div>
                    

                    <div class="form-group mt-5 text-center">
                        <button type="submit" class="btn btn-success">حفظ</button>
                        <a href="{{ route('partners.index') }}"
                            class="btn btn-secondary">الغاء</a>
                    </div>
                </form>
            </div>
        </div>
    </div>




    @push('css')

    @endpush
    @push('js')
        <script>
           
            $("#input-freqd-1").fileinput({
                uploadUrl: "/file-upload-batch/2",
                showUpload: false,
                showRemove: false,
                required: true,
                validateInitialCount: 1,
                overwriteInitial: false,
                initialPreviewAsData: true,
                allowedFileExtensions: ["jpg", "png", "gif", "jpeg"]
            });
        </script>
        <script src="{{ asset('assets/admin/plugins/custom/ckeditor/ckeditor-document.bundle.js') }}" type="text/javascript">
        </script>

        <script src="{{ asset('assets/admin/js/pages/crud/forms/editors/ckeditor-document.js') }}" type="text/javascript">
        </script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
                integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/js/standalone/selectize.min.js"
                integrity="sha512-pF+DNRwavWMukUv/LyzDyDMn8U2uvqYQdJN0Zvilr6DDo/56xPDZdDoyPDYZRSL4aOKO/FGKXTpzDyQJ8je8Qw=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/js/selectize.min.js"
                integrity="sha512-JiDSvppkBtWM1f9nPRajthdgTCZV3wtyngKUqVHlAs0d5q72n5zpM3QMOLmuNws2vkYmmLn4r1KfnPzgC/73Mw=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/css/selectize.css"
            integrity="sha512-85w5tjZHguXpvARsBrIg9NWdNy5UBK16rAL8VWgnWXK2vMtcRKCBsHWSUbmMu0qHfXW2FVUDiWr6crA+IFdd1A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/css/selectize.bootstrap4.min.css"
            integrity="sha512-MMojOrCQrqLg4Iarid2YMYyZ7pzjPeXKRvhW9nZqLo6kPBBTuvNET9DBVWptAo/Q20Fy11EIHM5ig4WlIrJfQw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <script src="{{ asset('assets/admin/tagify/jQuery.tagify.min.js') }}" type="text/javascript"></script>
    

      
        <script type="module" src="/js/js.cookie.min.js"></script>
        <script type="module">
            // import Cookies from 'js-cookie'
            //  import Cookies from "/js/js.cookie.min.js"

            let cartesian = (...arr) => arr.reduce((a, c) => a.map(e => c.map(f => e.concat([f]))).reduce((a, c) => a.concat(c),
                []), [
                []
            ]);

         
        </script>
    @endpush

</x-admin-layout>
