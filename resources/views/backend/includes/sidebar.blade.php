<div class="br-logo"><a href="{{ url('admin/dashboard') }}"><span>[</span>Horizon<i> Solution</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
      <ul class="br-sideleft-menu">
        <li class="br-menu-item">
          <a href="{{ url('admin/dashboard') }}" class="br-menu-link {{ Request::is('admin/dashboard') ? 'active' : ''}}">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Dashboard</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->

        <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Manage</label>

          <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub {{ Request::is('admin/admin*') ? 'show-sub' : ''}}">
              <i class="menu-item-icon icon ion-android-person tx-24"></i>
              <span class="menu-item-label">Services</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub" style="{{ Request::is('admin/category*') ? 'display: block;' : 'display: none;'}}">
              <li class="sub-item">
                <a href="{{ url('/admin/service/manage') }}" class="sub-link {{ Request::is('admin/service/manage') ? 'active' : ''}}">Manage</a>
              </li>
              <li class="sub-item">
                <a href="{{ url('/admin/service/create') }}" class="sub-link {{ Request::is('admin/service/create') ? 'active' : ''}}">Add</a>
              </li>
            </ul>
          </li>
          <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub {{ Request::is('admin/admin*') ? 'show-sub' : ''}}">
              <i class="menu-item-icon icon ion-android-list tx-24"></i>
              {{-- <i class="menu-item-icon fa fa-star tx-16"></i> --}}
              <span class="menu-item-label">Technology</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub" style="{{ Request::is('admin/brand*') ? 'display: block;' : 'display: none;'}}">

              <li class="sub-item">
                <a href="{{ url('admin/technology/manage') }}" class="sub-link {{ Request::is('admin/technology/manage') ? 'active' : ''}}">Manage</a>
              </li>
              <li class="sub-item">
                <a href="{{ url('admin/technology/create') }}" class="sub-link {{ Request::is('admin/technology/create') ? 'active' : ''}}">Add</a>
              </li>
            </ul>
          </li>

          <li class="br-menu-item">
              <a href="#" class="br-menu-link with-sub {{ Request::is('admin/admin*') ? 'show-sub' : ''}}">
                  <i class="menu-item-icon icon ion-android-list tx-24"></i>
                  {{-- <i class="menu-item-icon fa fa-star tx-16"></i> --}}
                  <span class="menu-item-label">Career</span>
              </a><!-- br-menu-link -->
              <ul class="br-menu-sub" style="{{ Request::is('admin/brand*') ? 'display: block;' : 'display: none;'}}">

                  <li class="sub-item">
                      <a href="{{ url('admin/career/manage') }}" class="sub-link {{ Request::is('admin/career/manage') ? 'active' : ''}}">Manage</a>
                  </li>
                  <li class="sub-item">
                      <a href="{{ url('admin/career/create') }}" class="sub-link {{ Request::is('admin/career/create') ? 'active' : ''}}">Add</a>
                  </li>
              </ul>
          </li>
          <li class="br-menu-item">
              <a href="#" class="br-menu-link with-sub {{ Request::is('admin/admin*') ? 'show-sub' : ''}}">
                  <i class="menu-item-icon icon ion-android-list tx-24"></i>
                  {{-- <i class="menu-item-icon fa fa-star tx-16"></i> --}}
                  <span class="menu-item-label">Mission & Vision</span>
              </a><!-- br-menu-link -->
              <ul class="br-menu-sub" style="{{ Request::is('admin/brand*') ? 'display: block;' : 'display: none;'}}">
                  <li class="sub-item">
                      <a href="{{ url('admin/mission/vision/manage/1') }}" class="sub-link {{ Request::is('admin/mission/vision/manage/1') ? 'active' : ''}}">Manage</a>
                  </li>
              </ul>
          </li>

          <li class="br-menu-item">
              <a href="#" class="br-menu-link with-sub {{ Request::is('admin/admin*') ? 'show-sub' : ''}}">
                  <i class="menu-item-icon icon ion-android-list tx-24"></i>
                  {{-- <i class="menu-item-icon fa fa-star tx-16"></i> --}}
                  <span class="menu-item-label">About</span>
              </a><!-- br-menu-link -->
              <ul class="br-menu-sub" style="{{ Request::is('admin/brand*') ? 'display: block;' : 'display: none;'}}">
                  <li class="sub-item">
                      <a href="{{ url('admin/about/manage/1') }}" class="sub-link {{ Request::is('admin/about/manage/1') ? 'active' : ''}}">Manage</a>
                  </li>
              </ul>
          </li>

          <li class="br-menu-item">
              <a href="#" class="br-menu-link with-sub {{ Request::is('admin/admin*') ? 'show-sub' : ''}}">
                  <i class="menu-item-icon icon ion-android-list tx-24"></i>
                  {{-- <i class="menu-item-icon fa fa-star tx-16"></i> --}}
                  <span class="menu-item-label">Industry Service</span>
              </a><!-- br-menu-link -->
              <ul class="br-menu-sub" style="{{ Request::is('admin/brand*') ? 'display: block;' : 'display: none;'}}">
                  <li class="sub-item">
                      <a href="{{ url('admin/industry/create') }}" class="sub-link {{ Request::is('admin/industry/create') ? 'active' : ''}}">Add</a>
                  </li>
                  <li class="sub-item">
                      <a href="{{ url('admin/industry/manage') }}" class="sub-link {{ Request::is('admin/industry/manage') ? 'active' : ''}}">Manage</a>
                  </li>
              </ul>
          </li>

          <li class="br-menu-item">
              <a href="#" class="br-menu-link with-sub {{ Request::is('admin/admin*') ? 'show-sub' : ''}}">
                  <i class="menu-item-icon icon ion-android-list tx-24"></i>
                  {{-- <i class="menu-item-icon fa fa-star tx-16"></i> --}}
                  <span class="menu-item-label">Solution</span>
              </a><!-- br-menu-link -->
              <ul class="br-menu-sub" style="{{ Request::is('admin/brand*') ? 'display: block;' : 'display: none;'}}">
                  <li class="sub-item">
                      <a href="{{ url('admin/solution/manage/1') }}" class="sub-link {{ Request::is('admin/solution/manage/1') ? 'active' : ''}}">Manage</a>
                  </li>
              </ul>
          </li>

          <li class="br-menu-item">
              <a href="#" class="br-menu-link with-sub {{ Request::is('admin/admin*') ? 'show-sub' : ''}}">
                  <i class="menu-item-icon icon ion-android-list tx-24"></i>
                  {{-- <i class="menu-item-icon fa fa-star tx-16"></i> --}}
                  <span class="menu-item-label">Consult</span>
              </a><!-- br-menu-link -->
              <ul class="br-menu-sub" style="{{ Request::is('admin/brand*') ? 'display: block;' : 'display: none;'}}">
                  <li class="sub-item">
                      <a href="{{ url('admin/consult/manage/1') }}" class="sub-link {{ Request::is('admin/consult/manage/1') ? 'active' : ''}}">Manage</a>
                  </li>
              </ul>
          </li>

          <li class="br-menu-item">
              <a href="#" class="br-menu-link with-sub {{ Request::is('admin/admin*') ? 'show-sub' : ''}}">
                  <i class="menu-item-icon icon ion-android-list tx-24"></i>
                  {{-- <i class="menu-item-icon fa fa-star tx-16"></i> --}}
                  <span class="menu-item-label">Experts</span>
              </a><!-- br-menu-link -->
              <ul class="br-menu-sub" style="{{ Request::is('admin/brand*') ? 'display: block;' : 'display: none;'}}">
                  <li class="sub-item">
                      <a href="{{ url('admin/expert/create') }}" class="sub-link {{ Request::is('admin/expert/create') ? 'active' : ''}}">Add</a>
                  </li>
                  <li class="sub-item">
                      <a href="{{ url('admin/expert/manage') }}" class="sub-link {{ Request::is('admin/expert/manage') ? 'active' : ''}}">Manage</a>
                  </li>
              </ul>
          </li>

          <li class="br-menu-item">
              <a href="#" class="br-menu-link with-sub {{ Request::is('admin/admin*') ? 'show-sub' : ''}}">
                  <i class="menu-item-icon icon ion-android-list tx-24"></i>
                  {{-- <i class="menu-item-icon fa fa-star tx-16"></i> --}}
                  <span class="menu-item-label">Testimonial</span>
              </a><!-- br-menu-link -->
              <ul class="br-menu-sub" style="{{ Request::is('admin/brand*') ? 'display: block;' : 'display: none;'}}">
                  <li class="sub-item">
                      <a href="{{ url('admin/testimonial/create') }}" class="sub-link {{ Request::is('admin/testimonial/create') ? 'active' : ''}}">Add</a>
                  </li>
                  <li class="sub-item">
                      <a href="{{ url('admin/testimonial/manage') }}" class="sub-link {{ Request::is('admin/testimonial/manage') ? 'active' : ''}}">Manage</a>
                  </li>
              </ul>
          </li>

      </ul><!-- br-sideleft-menu -->
      <br>
    </div><!-- br-sideleft -->
