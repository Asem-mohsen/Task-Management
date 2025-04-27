<div class="app-navbar flex-shrink-0">					

    <div class="app-navbar-item ms-1 ms-md-4" id="kt_header_user_menu_toggle">
        <!--begin::Menu wrapper-->
        <div class="cursor-pointer symbol symbol-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <div style=" width: 38px; height: 38px; background-color: #e8e8e8; border-radius: 5px; text-align: center; display: flex; align-items: center; justify-content: center; ">
                {{-- <span style="color: #d51f28; font-size: 15px;">{{ auth()->user()->name }}</span> --}}
            </div>
        </div>
        <!--begin::User account menu-->
        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <div class="menu-content d-flex align-items-center px-3">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-50px me-5">
                        <div style=" width: 38px; height: 38px; background-color: #e8e8e8; border-radius: 5px; text-align: center; display: flex; align-items: center; justify-content: center; ">
                            {{-- <span style="color: #d51f28; font-size: 15px;">{{ auth()->user()->name }}</span> --}}
                        </div>
                    </div>
                    <!--end::Avatar-->

                    <!--begin::Username-->
                    <div class="d-flex flex-column">
                        <div class="fw-bold d-flex align-items-center fs-5">
                            {{-- {{ auth()->user()->name }} --}}
                        </div>
                        {{-- <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">{{ auth()->user()->email }}</a> --}}
                    </div>
                    <!--end::Username-->
                </div>
            </div>
            <!--end::Menu item-->

        </div>
    </div>
</div>