@extends('auth.layouts.master')
@section('content')
    <div class="right h-full bg-white flex flex-col justify-center items-center max-w-sm ">
        <div class="w-right ">
            <p class="text-[#E77E5C] text-center sm:mt-3 my-20 font-[500] sm:text-[40px] text-[27px] leading-normal">
                إعادة تعيين كلمة المرور
            </p>

            <div class="flex flex-col sm:my-20 my-10 leading-[200%]">
                <p class="text-right font-[500] text-[20px] leading-normal">لقد أرسلنا رمز إعادة التعيين إلى بريدك الإلكتروني</p>
                <div class="flex items-center justify-end gap-4">
                    <a href="{{ route('password.reset') }}" class="text-[#E77E5C] text-[18px]">تغيير</a>
                    <span>{{ substr($email, 0, 1) . str_repeat('*', max(0, strpos($email, '@') - 1)) . substr($email, strpos($email, '@')) }}</span>

                </div>
            </div>

            <form action="{{ route('password.verify.otp') }}" method="POST" class="flex flex-col items-end mx-auto w-full sm:mt-10 mt-0">
                @csrf
                <input type="hidden" name="email" value="{{ $email }}">
                <div class="relative w-full mb-4">
                    <span class="block mb-[3px] mr-3 sm:mr-5 text-right text-[#2A2A2A] font-Questv1 sm:text-[17px] text-[15px] font-normal leading-normal">
                        أدخل الرمز
                    </span>
                    <input type="text" name="otp_code" class="bg-white border border-[#2A2A2A] pr-5 rounded-[27px] w-full sm:h-[54.014px] h-[45px] text-[#2A2A2A] text-right sm:placeholder:text-[17px] placeholder:text-[15px] sm:text-[18px] text-[15px] placeholder:opacity-50" placeholder="أدخل رمز إعادة التعيين" required />
                    @error('otp_code')
                        <div class="text-red-500 text-right mt-1 text-sm mr-2">{{ $message }}</div>
                    @enderror
                </div>
            
                <button class="w-full sm:h-[60px] h-[52px] sm:text-[20px] text-[15px] flex-shrink-0 rounded-[40px] bg-[#E77E5C] shadow-[0px_6px_5.5px_0px_rgba(193,143,83,0.81)] text-white mt-5">
                    تحقق من الرمز
                </button>
            </form>
            

            <a href="javascript:void(0);" onclick="history.back();" class="flex items-center justify-center sm:text-[20px] text-[16px] font-[500] my-10 mb-48">
                رجوع
            </a>
            
        </div>
    </div>
@endsection
