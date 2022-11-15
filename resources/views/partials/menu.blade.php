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
        @can('contact_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.contacts.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/contacts") || request()->is("admin/contacts/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-envelope c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.contact.title') }}
                </a>
            </li>
        @endcan
        @can('country_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.countries.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/countries") || request()->is("admin/countries/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-flag c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.country.title') }}
                </a>
            </li>
        @endcan
        @can('department_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.departments.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/departments") || request()->is("admin/departments/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-hospital-alt c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.department.title') }}
                </a>
            </li>
        @endcan
        @can('office_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.offices.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/offices") || request()->is("admin/offices/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-building c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.office.title') }}
                </a>
            </li>
        @endcan
        @can('newmark_career_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/opportunities*") ? "c-show" : "" }} {{ request()->is("admin/personal-history-forms*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fab fa-envira c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.newmarkCareer.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('opportunity_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.opportunities.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/opportunities") || request()->is("admin/opportunities/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-solar-panel c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.opportunity.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('personal_history_form_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.personal-history-forms.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/personal-history-forms") || request()->is("admin/personal-history-forms/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user-tie c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.personalHistoryForm.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('setting_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/videos*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.setting.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('video_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.videos.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/videos") || request()->is("admin/videos/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-video c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.video.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('general_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/clients*") ? "c-show" : "" }} {{ request()->is("admin/newsletter-subscribers*") ? "c-show" : "" }} {{ request()->is("admin/sectors*") ? "c-show" : "" }} {{ request()->is("admin/galleries*") ? "c-show" : "" }} {{ request()->is("admin/testimonials*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-compress c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.general.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('client_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.clients.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/clients") || request()->is("admin/clients/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user-clock c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.client.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('newsletter_subscriber_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.newsletter-subscribers.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/newsletter-subscribers") || request()->is("admin/newsletter-subscribers/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-envelope-open c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.newsletterSubscriber.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('sector_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.sectors.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/sectors") || request()->is("admin/sectors/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-map-marked c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.sector.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('gallery_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.galleries.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/galleries") || request()->is("admin/galleries/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-images c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.gallery.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('testimonial_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.testimonials.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/testimonials") || request()->is("admin/testimonials/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.testimonial.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('our_expertise_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.our-expertises.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/our-expertises") || request()->is("admin/our-expertises/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-caret-right c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.ourExpertise.title') }}
                </a>
            </li>
        @endcan
        @can('insight_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.insights.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/insights") || request()->is("admin/insights/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-newspaper c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.insight.title') }}
                </a>
            </li>
        @endcan
        @can('user_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/permissions*") ? "c-show" : "" }} {{ request()->is("admin/roles*") ? "c-show" : "" }} {{ request()->is("admin/users*") ? "c-show" : "" }} {{ request()->is("admin/teams*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('permission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.users.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('team_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.teams.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/teams") || request()->is("admin/teams/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.team.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @if(\Illuminate\Support\Facades\Schema::hasColumn('teams', 'owner_id') && \App\Models\Team::where('owner_id', auth()->user()->id)->exists())
            <li class="c-sidebar-nav-item">
                <a class="{{ request()->is("admin/team-members") || request()->is("admin/team-members/*") ? "c-active" : "" }} c-sidebar-nav-link" href="{{ route("admin.team-members.index") }}">
                    <i class="c-sidebar-nav-icon fa-fw fa fa-users">
                    </i>
                    <span>{{ trans("global.team-members") }}</span>
                </a>
            </li>
        @endif
        @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            @can('profile_password_edit')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}" href="{{ route('profile.password.edit') }}">
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