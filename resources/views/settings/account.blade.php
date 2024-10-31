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
                <div class="flex items-center justify-center  mb-10  lg:mr-96 mt-10 lg:mt-0 ">
                    <span
                        class="text-[#2A2A2A] text-right sm:text-[30px] text-[22px] font-medium relative after:content-[''] after:absolute after:w-full after:h-[2px] after:bg-[#E77E5C] after:bottom-[-10px] after:left-0">
                        الحساب
                    </span>
                </div>



                <div class="flex flex-col lg:flex-row items-center justify-between gap-10">
                    <div
                        class="bg-white w-full  lg:w-1/5 h-auto lg:h-[726px] flex-shrink-0 drop-shadow-[0_15px_17px_rgba(0,0,0,0.03)] rounded-[20px] p-[30px] pt-10">
                        <x-user-menu />
                    </div>

                    <div
                        class="bg-white w-full lg:w-4/5 h-auto lg:h-[726px] flex-shrink-0 drop-shadow-[0_15px_17px_rgba(0,0,0,0.03)] rounded-[20px] pt-0 p-[30px] ">

                        <div class="w-full flex flex-col items-center justify-center gap-5">
                            <div class="border-b w-full flex item-center justify-center py-5 text-[#6A6565] text-center">
                                قم بتغيير إسم المستخدم والبريد الإلكتروني الخاص بك هنا
                            </div>

                        </div>

                        <div class="flex flex-col items-start justify-start gap-6 lg:p-10 w-full">
                            @if (session('success'))
                            <div class="bg-green-100 text-green-800 px-4 py-3 rounded mt-4">
                                {{ session('success') }}
                            </div>
                        @endif
                            <form action="{{ route('settings.updateAccount') }}" method="POST" class="w-full">
                                @csrf
                                @method('PUT')
                            <!-- First Name and Last Name -->
                            <div class="relative w-full lg:max-w-sm mt-5">
                                <div class="flex flex-row w-full gap-4">
                                    <!-- First Name -->
                                    <div class="relative w-1/2">
                                        <span class="block mb-2 mr-3 text-right text-[#2A2A2A] font-Questv1 sm:text-[17px] text-[15px] font-normal leading-normal">
                                            الإسم الأول
                                        </span>
                                        <input autocomplete="off" type="text" name="fname"
                                            class="bg-white border border-[#2A2A2A] pr-4 rounded-[27px] w-full h-[50px] text-[#2A2A2A] text-right sm:placeholder:text-[17px] placeholder:text-[15px] sm:text-[18px] text-[15px] placeholder:opacity-50"
                                            placeholder="أدخل الإسم الأول" value="{{ $user->fname }}" required />
                                    </div>
                        
                                    <!-- Last Name -->
                                    <div class="relative w-1/2">
                                        <span class="block mb-2 mr-3 text-right text-[#2A2A2A] font-Questv1 sm:text-[17px] text-[15px] font-normal leading-normal">
                                            الإسم الأخير
                                        </span>
                                        <input autocomplete="off" type="text" name="lname"
                                            class="bg-white border border-[#2A2A2A] pr-4 rounded-[27px] w-full h-[50px] text-[#2A2A2A] text-right sm:placeholder:text-[17px] placeholder:text-[15px] sm:text-[18px] text-[15px] placeholder:opacity-50"
                                            placeholder="أدخل الإسم الأخير" value="{{ $user->lname }}" required />
                                    </div>
                                </div>
                            </div>
                        
                            <!-- Username -->
                            <div class="relative w-full my-5">
                                <div class="relative w-full lg:max-w-sm">
                                    <span for="username" class="block mb-[10px] text-[16px] font-medium text-[#2A2A2A] text-right">
                                        إسم المستخدم
                                    </span>
                                    <div class="absolute top-12 right-2 flex items-center pr-3 pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="sm:w-[24px] sm:h-[24px] w-[20px] h-[20px]" viewBox="0 0 26 26" fill="none">
                                            <path d="M13.2054 14.9146C14.5838 14.9146 15.9312 14.5058 17.0773 13.74C18.2233 12.9742 19.1166 11.8857 19.644 10.6123C20.1715 9.33878 20.3094 7.93749 20.0404 6.58561C19.7714 5.23373 19.1076 3.99198 18.1329 3.01738C17.1581 2.04279 15.9163 1.37914 14.5644 1.11035C13.2125 0.841564 11.8112 0.979716 10.5378 1.50734C9.26439 2.03496 8.17605 2.92835 7.41041 4.07452C6.64477 5.2207 6.23621 6.56818 6.23641 7.94657C6.23694 9.79461 6.97137 11.5668 8.27823 12.8735C9.58508 14.1801 11.3574 14.9143 13.2054 14.9146ZM19.3994 16.4636H16.7324C15.6262 16.9737 14.4226 17.2379 13.2044 17.2379C11.9862 17.2379 10.7826 16.9737 9.67641 16.4636H7.01041C5.36765 16.4636 3.79219 17.1161 2.63059 18.2777C1.46899 19.4393 0.816406 21.0148 0.816406 22.6576L0.816406 23.4316C0.816406 24.0477 1.06115 24.6385 1.4968 25.0742C1.93244 25.5098 2.52331 25.7546 3.13941 25.7546H23.2704C23.8865 25.7546 24.4774 25.5098 24.913 25.0742C25.3487 24.6385 25.5934 24.0477 25.5934 23.4316V22.6576C25.5934 21.8442 25.4332 21.0387 25.1219 20.2872C24.8106 19.5357 24.3544 18.8529 23.7792 18.2777C23.2041 17.7026 22.5212 17.2463 21.7697 16.9351C21.0183 16.6238 20.2128 16.4636 19.3994 16.4636Z" fill="#D6D3D3" />
                                        </svg>
                                    </div>
                                    <input type="text" name="username"
                                        class="bg-white border pr-14 border-[#2A2A2A] rounded-[27px] w-full h-[50px] text-[#2A2A2A] text-right font-Questv1 sm:placeholder:text-[17px] placeholder:text-[15px] sm:text-[18px] text-[15px] placeholder:opacity-50"
                                        value="{{ $user->username }}" required />
                                </div>
                            </div>
                        
                            <!-- Email -->
                            <div class="relative w-full">
                                <div class="relative w-full lg:max-w-sm">
                                    <span for="email" class="block mb-[10px] text-[16px] font-medium text-[#2A2A2A] text-right">
                                        البريد الإلكتروني
                                    </span>
                                    <div class="absolute top-12 right-2 flex items-center pr-3 pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="sm:w-[24px] sm:h-[24px] w-[20px] h-[20px]" viewBox="0 0 28 21" fill="none">
                                            <path d="M0.529297 18.961V2.34795C0.529297 2.32862 0.55563 2.14595 0.608297 1.79996L9.5483 10.164L0.634297 19.538C0.578048 19.3501 0.542833 19.1566 0.529297 18.961ZM1.7163 0.646955C1.85746 0.585492 2.01039 0.555791 2.1643 0.559955H26.2423C26.4045 0.560769 26.5653 0.590222 26.7173 0.646955L17.7503 9.03996L16.5633 10.078L14.2163 12.183L11.8693 10.078L10.6823 9.03996L1.7163 0.646955ZM1.7423 20.664L10.7353 11.233L14.2163 14.319L17.6973 11.232L26.6903 20.663C26.5481 20.7211 26.3959 20.7506 26.2423 20.75H2.1643C2.01927 20.7491 1.87585 20.7195 1.7423 20.663V20.664ZM18.8843 10.164L27.7983 1.79996C27.8517 1.97769 27.8783 2.16238 27.8773 2.34795V18.961C27.8745 19.1558 27.848 19.3495 27.7983 19.538L18.8843 10.164Z" fill="#D6D3D3" />
                                        </svg>
                                    </div>
                                    <input type="email" name="email"
                                        class="bg-white border pr-14 border-[#2A2A2A] rounded-[27px] w-full h-[50px] text-[#2A2A2A] text-right sm:placeholder:text-[17px] placeholder:text-[15px] sm:text-[18px] text-[15px] placeholder:opacity-50"
                                        placeholder="أدخل البريد الإلكتروني" value="{{ $user->email }}" required />
                                </div>
                            </div>


                            <div class="relative w-full mt-5 border-t mt-10">
                                <div class="text-[#6A6565] text-start my-5 text-sm">
                                    أدخل كلمة المرور الخاصة بك لحفظ التعديلات
                                </div>
                                <div class="relative mb-4 w-full lg:max-w-sm">
                                    <span for="password"
                                        class="block mb-[10px] mr-3 sm:mr-5 text-[16px] font-medium text-[#2A2A2A] text-right">كلمة المرور</span>
                                    <div class="absolute top-12 right-2 flex items-center pr-3 pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="sm:w-[24px] sm:h-[24px] w-[20px] h-[20px]"
                                            viewBox="0 0 23 27" fill="none">
                                            <path d="M20.602 12.1062H19.4026V8.50829C19.4026 4.32066 15.9946 0.912598 11.8069 0.912598C7.61931 0.912598 4.21124 4.32066 4.21124 8.50829V12.1062H3.01192C1.68767 12.1062 0.613281 13.1806 0.613281 14.5049V24.0994C0.613281 25.4237 1.68767 26.4981 3.01192 26.4981H20.602C21.9262 26.4981 23.0006 25.4237 23.0006 24.0994V14.5049C23.0006 13.1806 21.9262 12.1062 20.602 12.1062ZM15.4049 12.1062H8.20898V8.50829C8.20898 6.52441 9.82306 4.91033 11.8069 4.91033C13.7908 4.91033 15.4049 6.52441 15.4049 8.50829V12.1062Z"
                                                fill="#D6D3D3" />
                                        </svg>
                                    </div>
                                    <input type="password" id="password2" name="current_password"
                                        class="bg-white border pr-14 border-[#2A2A2A] rounded-[27px] w-full h-[50px] text-[#2A2A2A] text-right font-Questv1 sm:placeholder:text-[17px] placeholder:text-[15px] sm:text-[18px] text-[15px] placeholder:opacity-50"
                                        placeholder="أدخل كلمة المرور" required />
                                    <button type="button" id="togglePassword2"
                                        class="absolute top-10 left-5 flex items-center cursor-pointer">
                                        <i id="eyeIcon2" class="sm:text-[28px] text-[25px] bi bi-eye"></i>
                                    </button>
                                </div>
                            
                                <!-- reset password -->
                                <a href="{{route('password.reset')}}"
                                    class="mr-5 text-right sm:text-[16px] text-[15px] font-normal text-[#E77E5C]">
                                    نسيت كلمة المرور؟
                                </a>
                            
                                
                            </div>
                            
                            <div class="w-full flex item-end justify-end mt-10">
                                <button type="submit"
                                    class="text-white bg-[#E77E5C] hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-md px-10 py-2.5 text-center">
                                    حفظ
                                </button>
                            </div>
                            </form>

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
