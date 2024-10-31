@extends('layouts.app')
@section('content')
    <!--====================== MAIN ======================-->
    <main>
        <div class="max-w-[1400px] mx-auto px-4 sm:mt-10 mt-8">
            <!-- 1SEC -->
            <section>
                <!-- titles -->
                <div class="flex items-center justify-ceitems-center">
                    <span
                        class="text-[#2A2A2A] text-[20px] gap-4   font-medium flex items-center justify-center cursor-pointer">
                        <svg class="mt-2" width="11" height="15" viewBox="0 0 11 19" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.93438 9.70418L1.2039 2.97899C0.706123 2.48122 0.706123 1.67632 1.2039 1.18384C1.70167 0.686074 2.50657 0.69137 3.00434 1.18384L10.6298 8.80396C11.1116 9.28584 11.1222 10.059 10.6668 10.5567L3.00964 18.2298C2.76075 18.4787 2.43243 18.6005 2.10941 18.6005C1.78639 18.6005 1.45808 18.4787 1.20919 18.2298C0.711418 17.732 0.711418 16.9271 1.20919 16.4347L7.93438 9.70418Z"
                                fill="#2A2A2A" />
                        </svg>

                        رجوع

                    </span>
                </div>
                <div class="flex items-center justify-center  mb-10 lg:mr-96 mt-10 lg:mt-0 ">
                    <span
                        class="text-[#2A2A2A] text-right sm:text-[30px] text-[22px] font-medium relative after:content-[''] after:absolute after:w-full after:h-[2px] after:bg-[#E77E5C] after:bottom-[-10px] after:left-0">
                        الصورة الشخصية
                    </span>
                </div>



                <div class="flex flex-col lg:flex-row items-center justify-between gap-10">
                    <div
                        class="bg-white w-full relative  lg:w-1/5 h-[530px] lg:h-[726px] flex-shrink-0 drop-shadow-[0_15px_17px_rgba(0,0,0,0.03)] rounded-[20px] p-[30px] pt-10">
                        <x-user-menu />
                    </div>

                    <div
                        class="bg-white w-full lg:w-4/5 h-auto lg:h-[726px] flex-shrink-0 drop-shadow-[0_15px_17px_rgba(0,0,0,0.03)] rounded-[20px] pt-0 p-[30px] ">

                        <div class="w-full flex flex-col items-center justify-center gap-5">
                            <div class="border-b w-full flex item-center justify-center py-5 text-[#6A6565]">
                                أضف صورة لملفك الشخصي.
                            </div>
                            <div class="flex flex-col items-center justify-center gap-10">
                                <div class=" w-full flex item-center justify-center py-5 text-[#6A6565]">
                                    معاينة الصورة
                                </div>
                                @if (session('success'))
                                    <div class="mt-4 text-green-600">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <form class="flex flex-col w-full item-center justify-center"
                                    action="{{ route('settings.updateImage') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="flex flex-col items-center justify-center gap-5">
                                        <img id="preview" class="rounded-full w-[200px] h-[200px] object-cover"
                                            src="{{ auth()->user()->image ? asset('storage/profile_images/' . auth()->user()->image) : asset('assets/images/default.svg') }}"
                                            alt="صورة المستخدم" />
                                        <div>
                                            <button type="button" onclick="document.getElementById('image').click();"
                                                class="bg-transparent mt-3 border border-gray-500 rounded-lg px-10 py-2.5 text-[#2A2A2A]">
                                                تغيير الصورة
                                            </button>
                                            <input class="hidden" type="file" id="image" name="image"
                                                accept="image/*" required onchange="previewImage(event)" />
                                        </div>
                                    </div>

                                    <div class="mt-28 flex items-center justify-center">
                                        <button type="submit"
                                            class="text-white bg-[#E77E5C] hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-md px-14 py-2.5 text-center">
                                            حفظ
                                        </button>
                                    </div>
                                </form>





                            </div>
                        </div>



                    </div>


                </div>


            </section>
            <!-- END SEC1 -->
        </div>
    </main>
    <!--====================== END MAIN ======================-->

    <!--====================== Modal ======================-->
    <x-modal-logout />
    <!--====================== END Modal ======================-->
@endsection
