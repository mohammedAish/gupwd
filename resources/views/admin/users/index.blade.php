<x-admin-layout>
    @if (session()->has('success'))
    <div class="alert alert-success my-5 text-center" style="font-size:23px;">
        {{ session()->get('success') }}
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
                        ادارة المستخدمين
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <div class="kt-portlet__head-wrapper">
                        <div class="dropdown dropdown-inline">
                            <a href="{{ route('users.create') }}" class="btn btn-brand btn-icon-sm">
                                <i class="fa fa-plus"></i> اضافة مستخدم جديد
                            </a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="kt-portlet__body kt-portlet__body--fit">

                <div class="kt-portlet__body">

                    <!--begin: Search Form -->
                    <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">


                    </div>

                    <!--end: Search Form -->
                </div>
                <!--begin: Datatable -->
                <table class="table table-striped table-bordered" style="width:100%" id="quiztable" >
                    <thead>
                      <tr>
                       <th> #</th>
                        <th> الاسم </th>
                        <th>البريد الالكتروني </th>
                         <th> الادوات </th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                           

                            <td class="d-flex"><a class="" href="{{route('users.edit',$user->id)}}"><i class="far fa-edit"></i></a>
                                <a class="mx-2" href="#" style="border-style:none;color: #1100ff;background-color: transparent"
                                data-toggle="modal" data-target="#delete_modal{{ $user->id }}">
                                   <i class="far fa-trash-alt"></i>
                               </a>


                               </td>
                               <div class="modal fade" id="delete_modal{{ $user->id }}" aria-hidden="true" role="dialog">
                                   <div class="modal-dialog modal-dialog-centered" role="document" >
                                       <div class="modal-content text-center">

                                           <form action="{{route('users.destroy',$user->id)}}" method="post">
                                               @csrf
                                               @method('delete')
                                               <div class="modal-body">
                                                   <div class="form-content p-2">

                                                       <h4 class="modal-title">حذف المستخدم</h4>
                                                       <p class="mb-4">هل تريد حذف المستخدم</p>
                                                       <button type="submit" class="btn btn-danger">حذف</button>
                                                       <button type="button" class="btn btn-info" data-dismiss="modal">الغاء</button>
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
            </div>
            </div>
        </div>
        <!-- end:: Content -->
    </div>
    </x-admin-layout>
