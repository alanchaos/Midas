<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.home") }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('user_management_access')
            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('permission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.users.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('audit_log_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.audit-logs.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/audit-logs") || request()->is("admin/audit-logs/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-file-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.auditLog.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('resident_access')
            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-home c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.resident.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('unit_access')
                        <li class="c-sidebar-nav-dropdown">
                            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                                <i class="fa-fw fas fa-home c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.unit.title') }}
                            </a>
                            <ul class="c-sidebar-nav-dropdown-items">
                                @can('add_unit_access')
                                    <li class="c-sidebar-nav-item">
                                        <a href="{{ route("admin.add-units.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/add-units") || request()->is("admin/add-units/*") ? "active" : "" }}">
                                            <i class="fa-fw fas fa-plus-circle c-sidebar-nav-icon">

                                            </i>
                                            {{ trans('cruds.addUnit.title') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('add_block_access')
                                    <li class="c-sidebar-nav-item">
                                        <a href="{{ route("admin.add-blocks.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/add-blocks") || request()->is("admin/add-blocks/*") ? "active" : "" }}">
                                            <i class="fa-fw fas fa-plus-circle c-sidebar-nav-icon">

                                            </i>
                                            {{ trans('cruds.addBlock.title') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('unit_management_access')
                                    <li class="c-sidebar-nav-item">
                                        <a href="{{ route("admin.unit-managements.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/unit-managements") || request()->is("admin/unit-managements/*") ? "active" : "" }}">
                                            <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                            </i>
                                            {{ trans('cruds.unitManagement.title') }}
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    @can('family_access')
                        <li class="c-sidebar-nav-dropdown">
                            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                                <i class="fa-fw fas fa-child c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.family.title') }}
                            </a>
                            <ul class="c-sidebar-nav-dropdown-items">
                                @can('add_family_member_access')
                                    <li class="c-sidebar-nav-item">
                                        <a href="{{ route("admin.add-family-members.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/add-family-members") || request()->is("admin/add-family-members/*") ? "active" : "" }}">
                                            <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                            </i>
                                            {{ trans('cruds.addFamilyMember.title') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('activity_log_access')
                                    <li class="c-sidebar-nav-item">
                                        <a href="{{ route("admin.activity-logs.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/activity-logs") || request()->is("admin/activity-logs/*") ? "active" : "" }}">
                                            <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                            </i>
                                            {{ trans('cruds.activityLog.title') }}
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    @can('tenant_access')
                        <li class="c-sidebar-nav-dropdown">
                            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.tenant.title') }}
                            </a>
                            <ul class="c-sidebar-nav-dropdown-items">
                                @can('add_tenant_access')
                                    <li class="c-sidebar-nav-item">
                                        <a href="{{ route("admin.add-tenants.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/add-tenants") || request()->is("admin/add-tenants/*") ? "active" : "" }}">
                                            <i class="fa-fw fas fa-plus-circle c-sidebar-nav-icon">

                                            </i>
                                            {{ trans('cruds.addTenant.title') }}
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    @can('facility_access')
                        <li class="c-sidebar-nav-dropdown">
                            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.facility.title') }}
                            </a>
                            <ul class="c-sidebar-nav-dropdown-items">
                                @can('facility_category_access')
                                    <li class="c-sidebar-nav-item">
                                        <a href="{{ route("admin.facility-categories.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/facility-categories") || request()->is("admin/facility-categories/*") ? "active" : "" }}">
                                            <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                            </i>
                                            {{ trans('cruds.facilityCategory.title') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('facility_management_access')
                                    <li class="c-sidebar-nav-item">
                                        <a href="{{ route("admin.facility-managements.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/facility-managements") || request()->is("admin/facility-managements/*") ? "active" : "" }}">
                                            <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                            </i>
                                            {{ trans('cruds.facilityManagement.title') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('facility_book_access')
                                    <li class="c-sidebar-nav-item">
                                        <a href="{{ route("admin.facility-books.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/facility-books") || request()->is("admin/facility-books/*") ? "active" : "" }}">
                                            <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                            </i>
                                            {{ trans('cruds.facilityBook.title') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('check_facility_access')
                                    <li class="c-sidebar-nav-item">
                                        <a href="{{ route("admin.check-facilities.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/check-facilities") || request()->is("admin/check-facilities/*") ? "active" : "" }}">
                                            <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                            </i>
                                            {{ trans('cruds.checkFacility.title') }}
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    @can('visitor_access')
                        <li class="c-sidebar-nav-dropdown">
                            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.visitor.title') }}
                            </a>
                            <ul class="c-sidebar-nav-dropdown-items">
                                @can('add_visitor_access')
                                    <li class="c-sidebar-nav-item">
                                        <a href="{{ route("admin.add-visitors.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/add-visitors") || request()->is("admin/add-visitors/*") ? "active" : "" }}">
                                            <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                            </i>
                                            {{ trans('cruds.addVisitor.title') }}
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    @can('defect_access')
                        <li class="c-sidebar-nav-dropdown">
                            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.defect.title') }}
                            </a>
                            <ul class="c-sidebar-nav-dropdown-items">
                                @can('add_defect_access')
                                    <li class="c-sidebar-nav-item">
                                        <a href="{{ route("admin.add-defects.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/add-defects") || request()->is("admin/add-defects/*") ? "active" : "" }}">
                                            <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                            </i>
                                            {{ trans('cruds.addDefect.title') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('status_control_access')
                                    <li class="c-sidebar-nav-item">
                                        <a href="{{ route("admin.status-controls.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/status-controls") || request()->is("admin/status-controls/*") ? "active" : "" }}">
                                            <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                            </i>
                                            {{ trans('cruds.statusControl.title') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('defect_category_access')
                                    <li class="c-sidebar-nav-item">
                                        <a href="{{ route("admin.defect-categories.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/defect-categories") || request()->is("admin/defect-categories/*") ? "active" : "" }}">
                                            <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                            </i>
                                            {{ trans('cruds.defectCategory.title') }}
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    @can('acess_management_access')
                        <li class="c-sidebar-nav-dropdown">
                            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.acessManagement.title') }}
                            </a>
                            <ul class="c-sidebar-nav-dropdown-items">
                                @can('gate_access')
                                    <li class="c-sidebar-nav-item">
                                        <a href="{{ route("admin.gates.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/gates") || request()->is("admin/gates/*") ? "active" : "" }}">
                                            <i class="fa-fw fas fa-door-closed c-sidebar-nav-icon">

                                            </i>
                                            {{ trans('cruds.gate.title') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('history_access')
                                    <li class="c-sidebar-nav-item">
                                        <a href="{{ route("admin.histories.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/histories") || request()->is("admin/histories/*") ? "active" : "" }}">
                                            <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                            </i>
                                            {{ trans('cruds.history.title') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('qr_access')
                                    <li class="c-sidebar-nav-item">
                                        <a href="{{ route("admin.qrs.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/qrs") || request()->is("admin/qrs/*") ? "active" : "" }}">
                                            <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                            </i>
                                            {{ trans('cruds.qr.title') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('location_access')
                                    <li class="c-sidebar-nav-item">
                                        <a href="{{ route("admin.locations.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/locations") || request()->is("admin/locations/*") ? "active" : "" }}">
                                            <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                            </i>
                                            {{ trans('cruds.location.title') }}
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    @can('form_access')
                        <li class="c-sidebar-nav-dropdown">
                            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.form.title') }}
                            </a>
                            <ul class="c-sidebar-nav-dropdown-items">
                                @can('form_category_access')
                                    <li class="c-sidebar-nav-item">
                                        <a href="{{ route("admin.form-categories.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/form-categories") || request()->is("admin/form-categories/*") ? "active" : "" }}">
                                            <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                            </i>
                                            {{ trans('cruds.formCategory.title') }}
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('e_billing_access')
            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-dollar-sign c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.eBilling.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('maintenance_access')
                        <li class="c-sidebar-nav-dropdown">
                            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.maintenance.title') }}
                            </a>
                            <ul class="c-sidebar-nav-dropdown-items">
                                @can('maintenances_payment_access')
                                    <li class="c-sidebar-nav-item">
                                        <a href="{{ route("admin.maintenances-payments.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/maintenances-payments") || request()->is("admin/maintenances-payments/*") ? "active" : "" }}">
                                            <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                            </i>
                                            {{ trans('cruds.maintenancesPayment.title') }}
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    @can('facility_fee_access')
                        <li class="c-sidebar-nav-dropdown">
                            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.facilityFee.title') }}
                            </a>
                            <ul class="c-sidebar-nav-dropdown-items">
                                @can('facility_payment_access')
                                    <li class="c-sidebar-nav-item">
                                        <a href="{{ route("admin.facility-payments.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/facility-payments") || request()->is("admin/facility-payments/*") ? "active" : "" }}">
                                            <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                            </i>
                                            {{ trans('cruds.facilityPayment.title') }}
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    @can('payment_method_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.payment-methods.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/payment-methods") || request()->is("admin/payment-methods/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.paymentMethod.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('feedback_access')
            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.feedback.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('add_feedback_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.add-feedbacks.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/add-feedbacks") || request()->is("admin/add-feedbacks/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.addFeedback.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('feedback_category_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.feedback-categories.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/feedback-categories") || request()->is("admin/feedback-categories/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.feedbackCategory.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('resident_setting_access')
            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.residentSetting.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('family_setting_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.family-settings.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/family-settings") || request()->is("admin/family-settings/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.familySetting.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('tenant_setting_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.tenant-settings.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/tenant-settings") || request()->is("admin/tenant-settings/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.tenantSetting.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('notice_access')
            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw far fa-calendar-check c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.notice.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('user_alert_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.user-alerts.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/user-alerts") || request()->is("admin/user-alerts/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-bell c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.userAlert.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('notice_board_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.notice-boards.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/notice-boards") || request()->is("admin/notice-boards/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-table c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.noticeBoard.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('event_access')
            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.event.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('event_category_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.event-categories.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/event-categories") || request()->is("admin/event-categories/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.eventCategory.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('event_control_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.event-controls.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/event-controls") || request()->is("admin/event-controls/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.eventControl.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('event_enroll_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.event-enrolls.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/event-enrolls") || request()->is("admin/event-enrolls/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.eventEnroll.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('mall_access')
            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-shopping-basket c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.mall.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">

                </ul>
            </li>
        @endcan
        @php($unread = \App\Models\QaTopic::unreadCount())
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.messenger.index") }}" class="{{ request()->is("admin/messenger") || request()->is("admin/messenger/*") ? "active" : "" }} c-sidebar-nav-link">
                    <i class="c-sidebar-nav-icon fa-fw fa fa-envelope">

                    </i>
                    <span>{{ trans('global.messages') }}</span>
                    @if($unread > 0)
                        <strong>( {{ $unread }} )</strong>
                    @endif

                </a>
            </li>
            @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                @can('profile_password_edit')
                    <li class="c-sidebar-nav-item">
                        <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" href="{{ route('profile.password.edit') }}">
                            <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                            </i>
                            {{ trans('global.change_password') }}
                        </a>
                    </li>
                @endcan
            @endif
            <li class="c-sidebar-nav-item">
                <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
    </ul>

</div>