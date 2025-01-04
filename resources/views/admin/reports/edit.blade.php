<x-admin-layout>
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor mt-5 pt-5" id="kt_content">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title ">
                        {{ __('home.edit_report') }}
                    </h3>
                </div>
            </div>
            <div class="container p-5">
                <form action="{{ route('reports.update', $report->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group ">
                                <label class=" col-form-label ">الاسم بالانجلزية</label>
                                <div class="">
                                    <input type="text" value="{{ old('name_en', $report->name_en) }}" name="name_en"
                                        id="name_en" class="form-control @error('name_en') is-invalid @enderror">
                                    @error('name_en')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group ">
                                <label class=" col-form-label ">الإسم بالعربي</label>
                                <div class="col-md- col-sm-12">
                                    <input type="text" value="{{ old('name_ar', $report->name_ar) }}" name="name_ar"
                                        id="name_ar" class="form-control @error('name_ar') is-invalid @enderror">
                                    @error('name_ar')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                  

                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group ">
                                <label class=" col-form-label ">التفاصيل بالانجليزية</label>
                                <div class="">
                                    <textarea name="description_en" class="form-control md-input" data-provide="markdown"
                                        rows="10" style="resize: none;">{!! old('description_en', $report->description_en) !!}</textarea>
                                    @error('description_en')
                                        <p class="invalid-feedback fs-3">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group ">
                                <label class=" col-form-label ">التفاصيل بالعربي</label>
                                <div class="col-md- col-sm-12">
                                    <textarea name="description_ar" class="form-control md-input" data-provide="markdown"
                                        rows="10" style="resize: none;">{!! old('description_ar', $report->description_ar) !!}</textarea>
                                    @error('description_ar')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group ">
                                    <label class=" col-form-label ">الصورة <span
                                            style="color:#FF0000">*</span></label>
                                    <div class="col-md- col-sm-12 file-loading">
                                        <input id="input-freqd-1" name="image"
                                            value="{{ old('image', $report->image) }}"
                                            class="form-control  @error('image')is-invalid @enderror"
                                            type="file" accept="image/*">
                                        @error('image')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                               
                            </div>
                            <div class="col-md-6 col-sm-12">
                               
                                <div class="px-4 pt-5">
                                <img src="{{ asset('assets/images//' . $report->image) }} "
                                height="100px" width="200px">
                                </div>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group ">
                                    <label class=" col-form-label ">تقرير <span
                                            style="color:#FF0000">*</span></label>
                                    <div class="col-md- col-sm-12 file-loading">
                                        <input id="input-freqd-2" name="file"
                                            value="{{ old('file', $report->file) }}"
                                            class="form-control  @error('file')is-invalid @enderror"
                                            type="file" >
                                        @error('file')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                               
                            </div>
                            <div class="col-md-6 col-sm-12">
                               
                                <div class="px-4 pt-5">
                                
    <embed src="{{ asset('assets/images//' . $report->file) }}" width="100%" height="600px" type="application/pdf">
</embed>

                                </div>
                            </div>
                            
                        </div>

                      

                      
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">تحديث</button>
                            <a href="{{ route('reports.index') }}"
                                class="btn btn-secondary">الغاء</a>
                        </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Add Modal -->
   
    <!-- /Edit Add Modal -->

    {{-- <script src="{{ asset('assets/admin/plugins/ckeditor/ckeditor.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        CKEDITOR.replace('desc_ar', {
            contentsLangDirection: 'rtl',
            filebrowserUploadUrl: "{{ url('', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
        });
        CKEDITOR.replace('desc', {
            contentsLangDirection: 'en',
            filebrowserUploadUrl: "{{ url('', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
        });
    </script> --}}
    @push('css')
        <link href="{{ asset('assets/admin/tagify/tagify.css') }}" rel="stylesheet" type="text/css" />
        @livewireStyles
    @endpush
    @push('js')
        <script>
             $("#input-freqd-2").fileinput({
                uploadUrl: "/file-upload-batch/2",
                showUpload: false,
                showRemove: false,
                required: true,
                validateInitialCount: 1,
                overwriteInitial: false,
                initialPreviewAsData: true,
               
            });

            $("#input-freqd-1").fileinput({
                uploadUrl: "/file-upload-batch/1",
                showUpload: false,
                showRemove: false,
                required: true,
                validateInitialCount: true,
                overwriteInitial: false,
                initialPreviewAsData: true,
                allowedFileExtensions: ["jpg", "png", "gif", "jpeg"]
            });
        </script>
        <script>
            < script src = "https://code.jquery.com/jquery-3.6.0.min.js"
            integrity = "sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin = "anonymous" >
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
        <script>
            var inputElm = document.querySelector('.tags2'),
                tagify = new Tagify(inputElm);
            $('.tags2').css('height', '100%');
            $('#options').click(function() {
                $('.options').toggle();
            });
        </script>

        <script>
            $(".tags").selectize({
                delimiter: ",",
                persist: false,
                create: function(input) {
                    return {
                        value: input,
                        text: input,
                    };
                },
            });
        </script>
        <script>
            $(".tags1").selectize({
                delimiter: ",",
                persist: false,
                create: function(input) {
                    return {
                        value: input,
                        text: input,
                    };
                },
            });
        </script>
        <script type="module" src="/js/js.cookie.min.js"></script>
        <script type="module">
            // import Cookies from 'js-cookie'
            //  import Cookies from "/js/js.cookie.min.js"

            let cartesian = (...arr) => arr.reduce((a, c) => a.map(e => c.map(f => e.concat([f]))).reduce((a, c) => a.concat(c),
                []), [
                []
            ]);

            $(document).ready(function() {
                // console.log( $("#price").val());
                Cookies.set('foo', $("#price").val())
                $(".tags").on("keyup", function(event) {
                    if (event.which == 13 || event.which == 188 || event.which == 1 || event.which == 8) {
                        console.log(Cookies.get('foo'));
                        var size = $("#size").val();
                        var color = $("#color").val();

                        var sizeArray = size.split(",");
                        var colorArray = color.split(",");


                        let anyarr = cartesian(sizeArray, colorArray)
                        console.log(anyarr);

                        var prevHtml = $("#tr").html();
                        //console.log(prevHtml);

                        var newArray = [0];
                        $("input:text[name=price]").each(function() {
                            newArray.unshift($(this).val());
                        });


                        // console.log( newArray);
                        var tag = $("#tr").text(null);



                        for (var i = 0; i < anyarr.length; i++) {

                            if (size.length > 0 && color.length > 0) {
                                if (newArray.length > 0) {
                                    var priceArr = newArray[i]
                                } else {
                                    priceArr = 0
                                }
                                var str = anyarr[i].toString().replace(',', ' / ')
                                // anyarr = null;
                                tag =
                                    "<tr>" +
                                    "<td>" + str + "</td>" +
                                    "<td class='col-md-3 text-center'><input type='text' name='variant[" + i +
                                    "][price_variant]' id='price' placeholder ='price' value='" + newArray[i] +
                                    "' class='form-control price' ></td>" +
                                    "<td class='col-md-3 text-center'><input type='text'  name='variant[" + i +
                                    "][quantity_variant]' placeholder ='quantity' value='' class='form-control ' ></td>" +
                                    "<td><input type='text' hidden name='variant[" + i +
                                    "][size]' id='price' placeholder ='price' value='" + anyarr[i][0] +
                                    "' class='form-control price col-md-3' ></td>" +
                                    "<td><input type='text' hidden name='variant[" + i +
                                    "][color]' id='price' placeholder ='price' value='" + anyarr[i][1] +
                                    "' class='form-control price col-md-3' ></td>"


                                "</tr>";

                                $("#tr").append(tag);

                            }
                        }
                        console.log($("#tr").html());
                    }
                });
            });
        </script>

        <script type="module">
            // import Cookies from 'js-cookie'
            //  import Cookies from "/js/js.cookie.min.js"

            let cartesian = (...arr) => arr.reduce((a, c) => a.map(e => c.map(f => e.concat([f]))).reduce((a, c) => a.concat(c),
                []), [
                []
            ]);

            $(document).ready(function() {
                // console.log( $("#price").val());
                Cookies.set('foo', $("#price1").val())
                $(".tags1").on("keyup", function(event) {
                    if (event.which == 13 || event.which == 188 || event.which == 1 || event.which == 8) {
                        console.log(Cookies.get('foo'));
                        var size = $("#size1").val();
                        var color = $("#color1").val();

                        var sizeArray = size.split(",");
                        var colorArray = color.split(",");


                        let anyarr = cartesian(sizeArray, colorArray)
                        console.log(anyarr);
                        var prevHtml = $("#tr1").html();
                        //console.log(prevHtml);
                        var newArray = [0];
                        $("input:text[name=price]").each(function() {
                            newArray.unshift($(this).val());
                        });
                        // console.log( newArray);
                        var tag = $("#tr1").text(null);
                        for (var i = 0; i < anyarr.length; i++) {

                            if (size.length > 0 && color.length > 0) {
                                if (newArray.length > 0) {
                                    var priceArr = newArray[i]
                                } else {
                                    priceArr = 0
                                }
                                var str = anyarr[i].toString().replace(',', ' / ')
                                // anyarr = null;
                                tag =
                                    "<tr>" +
                                    "<td>" + str + "</td>" +
                                    "<td class='col-md-3 text-center'><input type='text' name='variant[" + i +
                                    "][price_variant]' id='price1' placeholder ='price' value='" + newArray[i] +
                                    "' class='form-control price' ></td>" +
                                    "<td class='col-md-3 text-center'><input type='text'  name='variant[" + i +
                                    "][quantity_variant]' placeholder ='quantity' value='' class='form-control ' ></td>" +
                                    "<td><input type='text' hidden name='variant[" + i +
                                    "][size]' id='price1' placeholder ='price' value='" + anyarr[i][0] +
                                    "' class='form-control price col-md-3' ></td>" +
                                    "<td><input type='text' hidden name='variant[" + i +
                                    "][color]' id='price1' placeholder ='price' value='" + anyarr[i][1] +
                                    "' class='form-control price col-md-3' ></td>"


                                "</tr>";

                                $("#tr1").append(tag);

                            }
                        }
                        console.log($("#tr1").html());
                    }
                });
            });
        </script>
    @endpush

</x-admin-layout>
