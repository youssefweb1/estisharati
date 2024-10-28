@extends('auth.layouts.master')
@section('content')
    <div class="right h-full bg-white flex flex-col justify-center items-center max-w-sm ">
        <div class="w-right ">

            <!-- login text -->
            <p class="text-[#E77E5C] text-center sm:mt-3 my-20 font-[500] sm:text-[40px] text-[27px] leading-normal">
                إعادة تعيين كلمة المرور
            </p>


            @if ($errors->any())
            <div class="text-red-500 text-right mt-1 text-sm mr-2">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
            <form class="flex flex-col items-end mx-auto w-full sm:mt-10 mt-0" method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="email" value="{{ $email }}">

            
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
                    <input autocomplete="off" type="password" name="password_confirmation" id="password_confirmation"
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
            
                <!-- Reset Password Button -->
                <button type="submit"
                    class="w-full sm:h-[60px] h-[52px] sm:text-[20px] text-[15px] flex-shrink-0 rounded-[40px] bg-[#E77E5C] shadow-[0px_6px_5.5px_0px_rgba(193,143,83,0.81)] text-white mt-5">
                    إعادة تعيين كلمة المرور
                </button>
            </form>
            





            <a href="javascript:void(0);" onclick="history.back();" class="flex items-center justify-center sm:text-[20px] text-[16px] font-[500] my-10 mb-48">
                رجوع
            </a>
            
        </div>
    </div>
@endsection
