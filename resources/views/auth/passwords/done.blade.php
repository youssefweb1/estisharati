@extends('auth.layouts.master')
@section('content')
    <div class="right h-full bg-white flex flex-col justify-center items-center max-w-sm ">
        <div class="w-right ">

            <!-- login text -->
            <p
                class="text-[#E77E5C] text-center sm:mt-3 my-20 font-[500] sm:text-[40px] text-[27px] leading-normal">
                إعادة تعيين كلمة المرور
            </p>

            <div class=" flex flex-col items-center justify-center  sm:my-20 my-10 gap-10 pt-10">

                <svg xmlns="http://www.w3.org/2000/svg" width="96" height="97" viewBox="0 0 96 97" fill="none">
                    <path
                        d="M93.3516 44.0448V48.2172C93.3402 68.3019 80.1194 85.9868 60.8589 91.6816C41.5984 97.3763 20.8863 89.7243 9.95462 72.8751C-0.977081 56.0259 0.475737 33.9933 13.5252 18.7254C26.5747 3.45754 48.1122 -1.40858 66.4582 6.76591"
                        stroke="#84AA44" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M93.3514 11.937L48 57.3338L34.3945 43.7284" stroke="#84AA44" stroke-width="5"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <p class="text-right font-[500]  sm:text-[30px] text-[20px] leading-normal"> تم إعادة تعيين كلمة
                    المرور بنجاح
                </p>


                <a href="{{ route('login') }}"
                    class="w-full sm:h-[60px] mb-64 h-[52px] sm:text-[20px] text-[15px]  flex-shrink-0 rounded-[40px] bg-[#E77E5C] shadow-[0px_6px_5.5px_0px_rgba(193,143,83,0.81)] text-white mt-5 text-center flex items-center justify-center">
                    تسجيل الدخول
                </a>

            </div>
        </div>
    </div>
@endsection
