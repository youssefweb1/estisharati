@extends('auth.layouts.master')
@section('content')
    <div class="right h-full bg-white flex flex-col justify-center items-center max-w-sm ">
        <div class="w-right ">

            <!-- login text -->
            <p
                class="text-[#E77E5C] text-center sm:mt-3 my-20 font-[500] sm:text-[40px] text-[27px] leading-normal">
                إعادة تعيين كلمة المرور
            </p>

            <p class=" text-center sm:my-20 my-10 font-[500]  text-[20px] leading-normal">
                سنقوم بإرسال رمز إعادة التعيين إلى بريدك الإلكتروني
            </p>


            <!-- form -->
            <form class="flex flex-col items-end mx-auto w-full sm:mt-10 mt-0" action="{{ route('password.email') }}" method="POST">
                @csrf
                <!-- البريد الإلكتروني -->
                <div class="relative w-full mb-4">
                    <span class="block mb-[3px] mr-3 sm:mr-5 text-right text-[#2A2A2A] font-Questv1 sm:text-[17px] text-[15px] font-normal leading-normal">
                        البريد الإلكتروني
                    </span>
            
                    <div class="absolute sm:top-11 top-9 right-2 flex items-center pr-3 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="sm:w-[24px] sm:h-[24px] w-[20px] h-[20px]" viewBox="0 0 29 21" fill="none">
                            <path d="M0.779297 19.0655V2.45229C0.779297 2.43306 0.805669 2.25039 0.858413 1.90428L9.79856 10.2686L0.884786 19.6423C0.81446 19.3731 0.779297 19.1808 0.779297 19.0655ZM1.96604 0.750589C2.08911 0.692904 2.23855 0.664062 2.41437 0.664062H26.4921C26.6503 0.664062 26.8086 0.692904 26.9668 0.750589L18.0003 9.14371L16.8135 10.182L14.4664 12.2875L12.1193 10.182L10.9326 9.14371L1.96604 0.750589ZM1.99241 20.7672L10.9853 11.3357L14.4664 14.4219L17.9475 11.3357L26.9404 20.7672C26.7998 20.8249 26.6503 20.8537 26.4921 20.8537H2.41437C2.27372 20.8537 2.13307 20.8249 1.99241 20.7672ZM19.1343 10.2686L28.0481 1.90428C28.1008 2.07734 28.1272 2.26 28.1272 2.45229V19.0655C28.1272 19.2385 28.1008 19.4308 28.0481 19.6423L19.1343 10.2686Z" fill="#D6D3D3" />
                        </svg>
                    </div>
                    
                    <input type="email" name="email" id="username" class="bg-white border border-[#2A2A2A] pr-14 rounded-[27px] w-full sm:h-[54.014px] h-[45px] text-[#2A2A2A] text-right sm:placeholder:text-[17px]  placeholder:text-[15px]  sm:text-[18px] text-[15px] placeholder:opacity-50" placeholder="أدخل البريد الإلكتروني" required />
            
                    <!-- Error Message Display -->
                    @error('email')
                        <span class="text-red-500 text-[14px] mt-1 block text-right">{{ $message }}</span>
                    @enderror
                </div>
            
                <!-- زر الإرسال -->
                <button class="w-full sm:h-[60px] h-[52px] sm:text-[20px] text-[15px] flex-shrink-0 rounded-[40px] bg-[#E77E5C] shadow-[0px_6px_5.5px_0px_rgba(193,143,83,0.81)] text-white mt-5">
                    إرسال
                </button>
            </form>
            
            



            <a href="javascript:void(0);" onclick="history.back();" class="flex items-center justify-center sm:text-[20px] text-[16px] font-[500] my-10 mb-48">
                رجوع
            </a>
            

        </div>
    </div>
@endsection
