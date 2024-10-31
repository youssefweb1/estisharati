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
                        <ul class="space-y-14">
                            <x-user-menu />
                    </div>

                    <div
                        class="bg-white w-full lg:w-4/5 h-auto lg:h-[726px] flex-shrink-0 drop-shadow-[0_15px_17px_rgba(0,0,0,0.03)] rounded-[20px] pt-0 p-[30px] ">

                        <div class="w-full flex flex-col items-center justify-center gap-5">
                            <div class="border-b w-full flex item-center justify-center py-5 text-[#6A6565] text-center">
                                قم بتغيير كلمة المرور الخاصة بك هنا
                            </div>
                        </div>

                        <div class="flex flex-col items-start justify-start gap-10 lg:p-10 w-full">
                            @if (session('success'))
                                <div class="bg-green-100 text-green-800 px-4 py-3 rounded mt-4">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <form action="{{ route('settings.updatePassword') }}" method="POST" class="w-full">
                                @csrf
                                <!-- Current Password Field -->
                                <div class="relative w-full ">
                                    <div class="relative w-full lg:max-w-sm mt-5">
                                        <span for="current-password"
                                            class="block mb-[10px] text-[16px] font-medium text-[#2A2A2A] text-right">
                                            كلمة المرور الحالية
                                        </span>

                                        <!-- Icon inside input field -->
                                        <div class="absolute top-12 right-2 flex items-center pr-3 pointer-events-none">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="sm:w-[24px] sm:h-[24px] w-[20px] h-[20px]" viewBox="0 0 23 27"
                                                fill="none">
                                                <path
                                                    d="M20.602 12.1062H19.4026V8.50829C19.4026 4.32066 15.9946 0.912598 11.8069 0.912598C7.61931 0.912598 4.21124 4.32066 4.21124 8.50829V12.1062H3.01192C1.68767 12.1062 0.613281 13.1806 0.613281 14.5049V24.0994C0.613281 25.4237 1.68767 26.4981 3.01192 26.4981H20.602C21.9262 26.4981 23.0006 25.4237 23.0006 24.0994V14.5049C23.0006 13.1806 21.9262 12.1062 20.602 12.1062ZM15.4049 12.1062H8.20898V8.50829C8.20898 6.52441 9.82306 4.91033 11.8069 4.91033C13.7908 4.91033 15.4049 6.52441 15.4049 8.50829V12.1062Z"
                                                    fill="#D6D3D3" />
                                            </svg>
                                        </div>

                                        <input type="password" name="current_password"
                                            class="password-field bg-white border pr-[50px] border-[#2A2A2A] rounded-[27px] w-full h-[50px] text-[#2A2A2A] text-right sm:placeholder:text-[17px] placeholder:text-[15px] sm:text-[18px] text-[15px] placeholder:opacity-50"
                                            placeholder="أدخل كلمة المرور الحالية" required />

                                        <!-- Toggle password visibility -->
                                        <button type="button"
                                            class="toggle-password absolute top-10 left-5 flex items-center cursor-pointer">
                                            <i class="eye-icon sm:text-[28px] text-[25px] bi bi-eye"></i>
                                        </button>

                                        <!-- Error message -->
                                        @error('current_password')
                                            <span class="text-red-500 text-sm mt-2.5 mr-4">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- New Password Field -->
                                <div class="relative w-full my-5">
                                    <div class="relative w-full lg:max-w-sm ">
                                        <span for="new_password"
                                            class="block mb-[10px] text-[16px] font-medium text-[#2A2A2A] text-right">
                                            كلمة المرور الجديدة
                                        </span>

                                        <!-- Icon inside input field -->
                                        <div class="absolute top-12 right-2 flex items-center pr-3 pointer-events-none">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="sm:w-[24px] sm:h-[24px] w-[20px] h-[20px]" viewBox="0 0 23 27"
                                                fill="none">
                                                <path
                                                    d="M20.602 12.1062H19.4026V8.50829C19.4026 4.32066 15.9946 0.912598 11.8069 0.912598C7.61931 0.912598 4.21124 4.32066 4.21124 8.50829V12.1062H3.01192C1.68767 12.1062 0.613281 13.1806 0.613281 14.5049V24.0994C0.613281 25.4237 1.68767 26.4981 3.01192 26.4981H20.602C21.9262 26.4981 23.0006 25.4237 23.0006 24.0994V14.5049C23.0006 13.1806 21.9262 12.1062 20.602 12.1062ZM15.4049 12.1062H8.20898V8.50829C8.20898 6.52441 9.82306 4.91033 11.8069 4.91033C13.7908 4.91033 15.4049 6.52441 15.4049 8.50829V12.1062Z"
                                                    fill="#D6D3D3" />
                                            </svg>
                                        </div>

                                        <input type="password" name="new_password"
                                            class="password-field bg-white border pr-[50px] border-[#2A2A2A] rounded-[27px] w-full h-[50px] text-[#2A2A2A] text-right sm:placeholder:text-[17px] placeholder:text-[15px] sm:text-[18px] text-[15px] placeholder:opacity-50"
                                            placeholder="أدخل كلمة المرور الجديدة" required />

                                        <!-- Toggle password visibility -->
                                        <button type="button"
                                            class="toggle-password absolute top-10 left-5 flex items-center cursor-pointer">
                                            <i class="eye-icon sm:text-[28px] text-[25px] bi bi-eye"></i>
                                        </button>

                                        <!-- Error message -->
                                        @error('new_password')
                                            <span class="text-red-500 text-sm mt-2.5 mr-4">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Confirm New Password Field -->
                                <div class="relative w-full ">
                                    <div class="relative w-full lg:max-w-sm ">
                                        <span for="confirm_password"
                                            class="block mb-[10px] text-[16px] font-medium text-[#2A2A2A] text-right">
                                            إعادة كتابة كلمة السر الجديدة
                                        </span>

                                        <!-- Icon inside input field -->
                                        <div class="absolute top-12 right-2 flex items-center pr-3 pointer-events-none">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="sm:w-[24px] sm:h-[24px] w-[20px] h-[20px]" viewBox="0 0 23 27"
                                                fill="none">
                                                <path
                                                    d="M20.602 12.1062H19.4026V8.50829C19.4026 4.32066 15.9946 0.912598 11.8069 0.912598C7.61931 0.912598 4.21124 4.32066 4.21124 8.50829V12.1062H3.01192C1.68767 12.1062 0.613281 13.1806 0.613281 14.5049V24.0994C0.613281 25.4237 1.68767 26.4981 3.01192 26.4981H20.602C21.9262 26.4981 23.0006 25.4237 23.0006 24.0994V14.5049C23.0006 13.1806 21.9262 12.1062 20.602 12.1062ZM15.4049 12.1062H8.20898V8.50829C8.20898 6.52441 9.82306 4.91033 11.8069 4.91033C13.7908 4.91033 15.4049 6.52441 15.4049 8.50829V12.1062Z"
                                                    fill="#D6D3D3" />
                                            </svg>
                                        </div>

                                        <input type="password" name="new_password_confirmation"
                                            class="password-field bg-white border pr-[50px] border-[#2A2A2A] rounded-[27px] w-full h-[50px] text-[#2A2A2A] text-right sm:placeholder:text-[17px] placeholder:text-[15px] sm:text-[18px] text-[15px] placeholder:opacity-50"
                                            placeholder="أعد إدخال كلمة المرور الجديدة" required />

                                        <!-- Toggle password visibility -->
                                        <button type="button"
                                            class="toggle-password absolute top-10 left-5 flex items-center cursor-pointer">
                                            <i class="eye-icon sm:text-[28px] text-[25px] bi bi-eye"></i>
                                        </button>

                                        <!-- Error message -->
                                        @error('new_password_confirmation')
                                            <span class="text-red-500 text-sm mt-2.5 mr-4">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                        </div>

                        <!-- Save Button -->
                        <div class="w-full flex item-end justify-end mt-20">
                            <button type="submit"
                                class="text-white bg-[#E77E5C] hover:bg-primary-800 focus:ring-4  focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-md px-10 py-2.5 text-center">
                                حفظ
                            </button>
                        </div>

                        </form>

                        <script>
                            document.querySelectorAll('.toggle-password').forEach(button => {
                                button.addEventListener('click', function() {
                                    const passwordField = this.previousElementSibling;
                                    const icon = this.querySelector('.eye-icon');
                                    if (passwordField.type === 'password') {
                                        passwordField.type = 'text';
                                        icon.classList.replace('bi-eye', 'bi-eye-slash');
                                    } else {
                                        passwordField.type = 'password';
                                        icon.classList.replace('bi-eye-slash', 'bi-eye');
                                    }
                                });
                            });
                        </script>

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
