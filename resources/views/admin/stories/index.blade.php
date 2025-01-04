<x-admin-layout>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
 <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor mt-5 pt-5" id="kt_content">
    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head kt-portlet__head--lg">
                <div class="kt-portlet__head-label">
                    <span class="kt-portlet__head-icon">
                        <i class="kt-font-brand flaticon2-line-chart"></i>
                    </span>
                    <h3 class="kt-portlet__head-title">
                        ادارة القصص الناجحة
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <div class="kt-portlet__head-wrapper">
                        <div class="kt-portlet__head-actions">

                            <a href="{{ route('stories.create') }}" class="btn btn-brand btn-icon-sm">
                                <i class="fa fa-plus"></i>  قصة جديد
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kt-portlet__body">

                <!--begin: Datatable -->
                <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                    <thead>
                        <tr>
                            <th> صورة</th>
                            <th> الاسم </th>
                            <th> name</th>
                            <th> الحالة</th>
                            <th> الأدوات </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($stories as $story)
                        <tr>
                            <td><img src="{{ asset('assets/images/' . $story->image) }} "
                                height="80px" width="80px"></td>
                            <td>{{$story->name_ar}}</td>
                            <td>{{ $story->name_en }}</td>

                            @if($story->status == "0")
                            <td class="status"><a href="{{route('stories.status',$story->id)}}"><i class="fa fa-times mx-2"></i></a>غير فعال</td>
                            @else
                            <td class="status"><a href="{{route('stories.status',$story->id)}}"><i class="fa fa-check mx-2" style="color:green"></i></a>فعال</td>
                            @endif
                            <td class=""><a style="border-style:none;color: #1100ff;background-color: transparent" href="{{route('stories.edit',$story->id)}}"><i class="far fa-edit"></i></a>

                                <a class="mx-2" href="#" style="border-style:none;color: #1100ff;background-color: transparent"
                                 data-toggle="modal" data-target="#delete_modal{{ $story->id }}">
                                    <i class="far fa-trash-alt"></i>
                                </a>


                                </td>
                                <div class="modal fade" id="delete_modal{{ $story->id }}" aria-hidden="true" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered" role="document" >
                                        <div class="modal-content">

                                            <form action="{{route('stories.destroy',$story->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <div class="modal-body">
                                                    <div class="form-content p-2">
                                                       
                                                        <h4 class="modal-title">الحذف</h4>
                                                        <p class="mb-4">هل تريد  الحذف</p>
                                                        <button type="submit" class="btn btn-danger">حذف</button>
                                                        <button type="button" class="btn btn-info" data-dismiss="modal">اغلاق</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!--end: Datatable -->
             {{--    {{$stories->links()}} --}}
            </div>
        </div>
    </div>
    <!-- end:: Content -->
</div>

			<!-- Delete Modal -->

			<!-- /Delete Modal -->
</x-admin-layout>
