<ul class="space-y-14">
    <li class="cursor-pointer menu-item text-[#6A6565] sm:text-[18px] text-[16px] font-medium {{ request()->routeIs('settings.account') ? 'active' : '' }}">
        <a href="{{ route('settings.account') }}">الحساب</a>
    </li>
    <li class="cursor-pointer menu-item text-[#6A6565] sm:text-[18px] text-[16px] font-medium">
        <a href="#">الإشتراكات والدورات</a>
    </li>
    <li class="cursor-pointer menu-item text-[#6A6565] sm:text-[18px] text-[16px] font-medium {{ request()->routeIs('settings.change-image') ? 'active' : '' }}">
        <a href="{{ route('settings.change-image') }}">تغيير الصورة الشخصية</a>
    </li>
    <li class="cursor-pointer menu-item text-[#6A6565] sm:text-[18px] text-[16px] font-medium {{ request()->routeIs('settings.change-password') ? 'active' : '' }}">
        <a href="{{ route('settings.change-password') }}">كلمة المرور</a>
    </li>
    <li class="cursor-pointer menu-item text-[#6A6565] sm:text-[18px] text-[16px] font-medium">
        <a href="#">طرق الدفع</a>
    </li>
    <li></li>
    <button id="deleteAccountButton" data-modal-target="deleteAccountModal"
        data-modal-toggle="deleteAccountModal"
        class="absolute bottom-5 mt-20 lg:mt-0 left-0 right-0 border-t pt-5 cursor-pointer menu-item text-[#6A6565] sm:text-[18px] text-[16px] font-medium">
        تعطيل حسابي
    </button>
</ul>
