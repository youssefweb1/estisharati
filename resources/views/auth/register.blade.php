@extends('auth.layouts.master')
@section('content')
    <div class="right h-full bg-white flex flex-col justify-center items-center max-w-sm ">
        <div class="w-right ">

            <!-- login text -->
            <p class="text-[#E77E5C] text-center sm:mt-3 mt-10 font-[500] sm:text-[40px] text-[27px] leading-normal">
              إنشاء حساب جديد
            </p>

            <!-- socialest-phone  -->
            <div class="socialest-phone flex flex-col mt-10">

                <div class="flex flex-col gap-5">
                    <a href="{{ route('auth.social', ['provider' => 'google']) }}">
                        <div
                            class="relative cursor-pointer hover:bg-gray-100 duration-300   w-full sm:h-[54.014px] h-[45px] flex-shrink-0 rounded-[77px] border border-[#2A2A2A] bg-white flex items-center justify-center">
                            <img src="assets/images/google.svg" class=" w-[30px] h-[30px] ml-3 absolute left-2">
                            سجل بواسطة جوجل
                        </div>
                    </a>


                    <a href="{{ route('auth.social', ['provider' => 'facebook']) }}">
                        <div
                            class="relative cursor-pointer hover:bg-gray-100 duration-300   w-full sm:h-[54.014px] h-[45px] flex-shrink-0 rounded-[77px] border border-[#2A2A2A] bg-white flex items-center justify-center">
                            <img src="assets/images/facebook.svg" class="w-[30px] h-[30px] ml-3 absolute left-2">
                            سجل بواسطة فيسبوك
                        </div>
                    </a>
                </div>

                <div class="inline-flex items-center justify-center w-full relative">
                    <hr class="w-full h-px my-8 bg-gray-200 border-0">
                    <span class="absolute px-3 font-medium text-gray-900 -translate-x-1/2 bg-white left-1/2 ">أو</span>
                </div>

            </div>

            <form action="{{ route('register.submit') }}" method="POST"
                class="flex flex-col items-end mx-auto w-full sm:mt-10 mt-0">

                @csrf
                <!-- First Name and Last Name -->
                <div class="flex flex-row w-full mb-4 gap-4">
                    <!-- Last Name -->
                    <div class="relative w-1/2">
                        <span
                            class="block mb-2 mr-3 text-right text-[#2A2A2A] font-Questv1 sm:text-[17px] text-[15px] font-normal leading-normal">
                            الإسم الأخير
                        </span>
                        <input autocomplete="off" type="text" name="lname"
                            class="bg-white border border-[#2A2A2A] pr-4 rounded-[27px] w-full sm:h-[54.014px] h-[45px] text-[#2A2A2A] text-right sm:placeholder:text-[17px] placeholder:text-[15px] sm:text-[18px] text-[15px] placeholder:opacity-50"
                            placeholder="أدخل الإسم الأخير" value="{{ old('lname') }}" required />
                        @error('lname')
                            <div class="text-red-500 text-right mt-1 text-sm mr-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- First Name -->
                    <div class="relative w-1/2">
                        <span
                            class="block mb-2 mr-3 text-right text-[#2A2A2A] font-Questv1 sm:text-[17px] text-[15px] font-normal leading-normal">
                            الإسم الأول
                        </span>
                        <input autocomplete="off" type="text" name="fname"
                            class="bg-white border border-[#2A2A2A] pr-4 rounded-[27px] w-full sm:h-[54.014px] h-[45px] text-[#2A2A2A] text-right sm:placeholder:text-[17px] placeholder:text-[15px] sm:text-[18px] text-[15px] placeholder:opacity-50"
                            placeholder="أدخل الإسم الأول" value="{{ old('fname') }}" required />
                        @error('fname')
                            <div class="text-red-500 text-right mt-1 text-sm mr-2">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                <!-- Username -->
                <div class="relative w-full mb-4">
                    <span
                        class="block mb-2 mr-3 text-right text-[#2A2A2A] font-Questv1 sm:text-[17px] text-[15px] font-normal leading-normal">
                        إسم المستخدم
                    </span>
                    <div class="absolute sm:top-12 top-10 right-2 flex items-center pr-3 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="sm:w-[24px] sm:h-[24px] w-[20px] h-[20px]"
                            viewBox="0 0 25 26" fill="none">
                            <path
                                d="M12.4549 14.4922C16.3021 14.4922 19.4235 11.3709 19.4235 7.52371C19.4235 3.6765 16.3021 0.555176 12.4549 0.555176C8.6077 0.555176 5.48638 3.6765 5.48638 7.52371C5.48638 11.3709 8.6077 14.4922 12.4549 14.4922ZM18.6492 16.0408H15.9827C14.9084 16.5344 13.7131 16.8151 12.4549 16.8151C11.1967 16.8151 10.0063 16.5344 8.9271 16.0408H6.26066C2.8393 16.0408 0.0664062 18.8137 0.0664062 22.235V23.0093C0.0664062 24.2917 1.10685 25.3322 2.38925 25.3322H22.5206C23.803 25.3322 24.8434 24.2917 24.8434 23.0093V22.235C24.8434 18.8137 22.0705 16.0408 18.6492 16.0408Z"
                                fill="#D6D3D3" />
                        </svg>
                    </div>
                    <input autocomplete="off" type="text" name="username"
                        class="bg-white border border-[#2A2A2A] pr-14 rounded-[27px] w-full sm:h-[54.014px] h-[45px] text-[#2A2A2A] text-right sm:placeholder:text-[17px] placeholder:text-[15px] sm:text-[18px] text-[15px] placeholder:opacity-50"
                        placeholder="أدخل إسم المستخدم" value="{{ old('username') }}" required />
                    @error('username')
                        <div class="text-red-500 text-right mt-1 text-sm mr-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- email -->
                <div class="relative w-full mb-4">
                    <span
                        class="block mb-[3px] mr-3 sm:mr-5 text-right text-[#2A2A2A] font-Questv1 sm:text-[17px] text-[15px] font-normal leading-normal">
                        البريد الإلكتروني
                    </span>
                    <div class="absolute sm:top-10 top-9 right-2 flex items-center pr-3 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="sm:w-[24px] sm:h-[24px] w-[20px] h-[20px]"
                            viewBox="0 0 25 26" fill="none">
                            <path
                                d="M12.4549 14.4922C16.3021 14.4922 19.4235 11.3709 19.4235 7.52371C19.4235 3.6765 16.3021 0.555176 12.4549 0.555176C8.6077 0.555176 5.48638 3.6765 5.48638 7.52371C5.48638 11.3709 8.6077 14.4922 12.4549 14.4922ZM18.6492 16.0408H15.9827C14.9084 16.5344 13.7131 16.8151 12.4549 16.8151C11.1967 16.8151 10.0063 16.5344 8.9271 16.0408H6.26066C2.8393 16.0408 0.0664062 18.8137 0.0664062 22.235V23.0093C0.0664062 24.2917 1.10685 25.3322 2.38925 25.3322H22.5206C23.803 25.3322 24.8434 24.2917 24.8434 23.0093V22.235C24.8434 18.8137 22.0705 16.0408 18.6492 16.0408Z"
                                fill="#D6D3D3" />
                        </svg>
                    </div>
                    <input type="text" name="email" id="email" value="{{ old('email') }}"
                        class="bg-white border border-[#2A2A2A] pr-14 rounded-[27px] w-full sm:h-[54.014px] h-[45px] text-[#2A2A2A] text-right sm:placeholder:text-[17px] placeholder:text-[15px] sm:text-[18px] text-[15px] placeholder:opacity-50"
                        placeholder=" البريد الإلكتروني" required />
                    @error('email')
                        <div class="text-red-500 text-right mt-1 text-sm mr-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- password -->
                <div class="relative w-full mb-4">
                    <label for="password"
                        class="block mb-2 sm:text-[17px] text-[15px] mr-3 font-medium text-[#2A2A2A] text-right">كلمة
                        المرور</label>
                    <div class="absolute sm:top-12 top-10 right-2 flex items-center pr-3 pointer-events-none">
                        <!-- Icon for password field -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="sm:w-[24px] sm:h-[24px] w-[20px] h-[20px]"
                            viewBox="0 0 23 27" fill="none">
                            <path
                                d="M20.602 12.1062H19.4026V8.50829C19.4026 4.32066 15.9946 0.912598 11.8069 0.912598C7.61931 0.912598 4.21124 4.32066 4.21124 8.50829V12.1062H3.01192C1.68767 12.1062 0.613281 13.1806 0.613281 14.5049V24.0994C0.613281 25.4237 1.68767 26.4981 3.01192 26.4981H20.602C21.9262 26.4981 23.0006 25.4237 23.0006 24.0994V14.5049C23.0006 13.1806 21.9262 12.1062 20.602 12.1062ZM15.4049 12.1062H8.20898V8.50829C8.20898 6.52441 9.82306 4.91033 11.8069 4.91033C13.7908 4.91033 15.4049 6.52441 15.4049 8.50829V12.1062Z"
                                fill="#D6D3D3" />
                        </svg>
                    </div>
                    <input autocomplete="off" type="password" name="password" id="password"
                        class="bg-white border pr-14 border-[#2A2A2A] rounded-[27px] w-full sm:h-[54.014px] h-[45px] text-[#2A2A2A] text-right font-Questv1 sm:placeholder:text-[17px] placeholder:text-[15px] sm:text-[18px] text-[15px] placeholder:opacity-50"
                        placeholder="أدخل كلمة المرور" required />
                    <button type="button" id="togglePassword1"
                        class="absolute sm:top-11 top-9 left-5 flex items-center cursor-pointer">
                        <i id="eyeIcon1" class="sm:text-[28px] text-[25px] bi bi-eye"></i>
                    </button>
                    @error('password')
                        <div class="text-red-500 text-right mt-1 text-sm mr-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- confirm password -->
                <div class="relative w-full mb-4">
                    <label for="password_confirmation"
                        class="block mb-2 sm:text-[17px] text-[15px] mr-3 font-medium text-[#2A2A2A] text-right">تأكيد كلمة
                        المرور</label>
                    <div class="absolute sm:top-12 top-10 right-2 flex items-center pr-3 pointer-events-none">
                        <!-- Icon for confirm password field -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="sm:w-[24px] sm:h-[24px] w-[20px] h-[20px]"
                            viewBox="0 0 23 27" fill="none">
                            <path
                                d="M20.602 12.1062H19.4026V8.50829C19.4026 4.32066 15.9946 0.912598 11.8069 0.912598C7.61931 0.912598 4.21124 4.32066 4.21124 8.50829V12.1062H3.01192C1.68767 12.1062 0.613281 13.1806 0.613281 14.5049V24.0994C0.613281 25.4237 1.68767 26.4981 3.01192 26.4981H20.602C21.9262 26.4981 23.0006 25.4237 23.0006 24.0994V14.5049C23.0006 13.1806 21.9262 12.1062 20.602 12.1062ZM15.4049 12.1062H8.20898V8.50829C8.20898 6.52441 9.82306 4.91033 11.8069 4.91033C13.7908 4.91033 15.4049 6.52441 15.4049 8.50829V12.1062Z"
                                fill="#D6D3D3" />
                        </svg>
                    </div>
                    <input autocomplete="off" type="password" name="password_confirmation" id="password2"
                        class="bg-white border pr-14 border-[#2A2A2A] rounded-[27px] w-full sm:h-[54.014px] h-[45px] text-[#2A2A2A] text-right font-Questv1 sm:placeholder:text-[17px] placeholder:text-[15px] sm:text-[18px] text-[15px] placeholder:opacity-50"
                        placeholder="أدخل تأكيد كلمة المرور" required />
                    <button type="button" id="togglePassword2"
                        class="absolute sm:top-11 top-9 left-5 flex items-center cursor-pointer">
                        <i id="eyeIcon2" class="sm:text-[28px] text-[25px] bi bi-eye"></i>
                    </button>
                    @error('password_confirmation')
                        <div class="text-red-500 text-right mt-1 text-sm mr-2">{{ $message }}</div>
                    @enderror
                </div>


                <!-- privacy -->

                <p for="link-checkbox" class="ms- text-right text-[15px] font-normal  text-[#6A6565]">
                    أوافق على

                    <a href="#" class="text-[#E77E5C] text-[15px] font-normal underline">
                        الشروط والأحكام
                    </a>
                </p>

                <!-- login button -->
                <button
                    class="w-full sm:h-[60px] h-[52px] sm:text-[20px] text-[15px] flex-shrink-0 rounded-[40px] bg-[#E77E5C] shadow-[0px_6px_5.5px_0px_rgba(193,143,83,0.81)] text-white mt-5">
                    إنشاء الحساب
                </button>

            </form>




            <div class="socialest-desk flex flex-col">
                <div class="inline-flex items-center justify-center w-full relative">
                    <hr class="w-full h-px my-8 bg-gray-200 border-0">
                    <span class="absolute px-3 font-medium text-gray-900 -translate-x-1/2 bg-white left-1/2 ">أو</span>
                </div>

                <div class="flex flex-col gap-5">
                    <a href="{{ route('auth.social', ['provider' => 'google']) }}">
                        <div
                            class="relative cursor-pointer hover:bg-gray-100 duration-300 w-full sm:h-[54.014px] h-[45px] flex-shrink-0 rounded-[77px] border border-[#2A2A2A] bg-white flex items-center justify-center">
                            <img src="assets/images/google.svg" class="w-[30px] h-[30px] ml-3 absolute left-2">
                            سجل بواسطة جوجل
                        </div>
                    </a>

                    <a href="{{ route('auth.social', ['provider' => 'facebook']) }}">
                        <div
                            class="relative cursor-pointer hover:bg-gray-100 duration-300 w-full sm:h-[54.014px] h-[45px] flex-shrink-0 rounded-[77px] border border-[#2A2A2A] bg-white flex items-center justify-center">
                            <img src="assets/images/facebook.svg" class="w-[30px] h-[30px] ml-3 absolute left-2">
                            سجل بواسطة فيسبوك
                        </div>
                    </a>

                </div>
            </div>

            <p for="link-checkbox" class=" text-center sm:text-[18px] text-[15px] font-[500]  text-[#6A6565] my-10">
                لديك حساب بالفعل؟


                <a href="{{ route('login') }}" class="mx-1 text-[#E77E5C] sm:text-[18px] text-[15px] font-[500] ">
                    تسجيل الدخول
                </a>
            </p>

        </div>
    </div>
@endsection
