<nav class="sidebar">
    <div class="sidebar-header">
      <a href="#" class="sidebar-brand">
        Chantha<span>IT</span>
      </a>
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="sidebar-body">
      <ul class="nav">
        <li class="nav-item nav-category">Main</li>
        <li class="nav-item">
          <a href="{{route('front.home')}}" class="nav-link" >
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title ">Dashboard</span>
          </a>
        </li>
        <li class="nav-item nav-category">Manage Customer</li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
            <i class="link-icon" data-feather="mail"></i>
            <span class="link-title">Manage Customer</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="emails">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{route('customer.index')}}" class="nav-link" >Customer Table</a>
              </li>
              <li class="nav-item">
                <a href="{{route('customerType.index')}}" class="nav-link" >Customer Type</a>
              </li>

            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a href="pages/apps/calendar.html" class="nav-link">
            <i class="link-icon" data-feather="calendar"></i>
            <span class="link-title">Calendar</span>
          </a>
        </li>
        <li class="nav-item nav-category">MANAGE ROOM</li>
        {{-- <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
            <i class="link-icon" data-feather="feather"></i>
            <span class="link-title">UI Kit</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="uiComponents">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="pages/ui-components/accordion.html" class="nav-link">Accordion</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/alerts.html" class="nav-link">Alerts</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/badges.html" class="nav-link">Badges</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/breadcrumbs.html" class="nav-link">Breadcrumbs</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/buttons.html" class="nav-link">Buttons</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/button-group.html" class="nav-link">Button group</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/cards.html" class="nav-link">Cards</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/carousel.html" class="nav-link">Carousel</a>
              </li>
              <li class="nav-item">
                  <a href="pages/ui-components/collapse.html" class="nav-link">Collapse</a>
                </li>
              <li class="nav-item">
                <a href="pages/ui-components/dropdowns.html" class="nav-link">Dropdowns</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/list-group.html" class="nav-link">List group</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/media-object.html" class="nav-link">Media object</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/modal.html" class="nav-link">Modal</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/navs.html" class="nav-link">Navs</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/navbar.html" class="nav-link">Navbar</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/pagination.html" class="nav-link">Pagination</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/popover.html" class="nav-link">Popovers</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/progress.html" class="nav-link">Progress</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/scrollbar.html" class="nav-link">Scrollbar</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/scrollspy.html" class="nav-link">Scrollspy</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/spinners.html" class="nav-link">Spinners</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/tabs.html" class="nav-link">Tabs</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/tooltips.html" class="nav-link">Tooltips</a>
              </li>
            </ul>
          </div>
        </li> --}}
        {{-- <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#advancedUI" role="button" aria-expanded="false" aria-controls="advancedUI">
            <i class="link-icon" data-feather="anchor"></i>
            <span class="link-title">Advanced UI</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="advancedUI">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="pages/advanced-ui/cropper.html" class="nav-link">Cropper</a>
              </li>
              <li class="nav-item">
                <a href="pages/advanced-ui/owl-carousel.html" class="nav-link">Owl carousel</a>
              </li>
              <li class="nav-item">
                <a href="pages/advanced-ui/sortablejs.html" class="nav-link">SortableJs</a>
              </li>
              <li class="nav-item">
                <a href="pages/advanced-ui/sweet-alert.html" class="nav-link">Sweet Alert</a>
              </li>
            </ul>
          </div>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#forms" role="button" aria-expanded="false" aria-controls="forms">
            <i class="link-icon" data-feather="inbox"></i>
            <span class="link-title">Room</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="forms">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{route('room.index')}}" class="nav-link " >Room Table</a>
              </li>
              <li class="nav-item">
                <a href="{{route('roomtype.index')}}" class="nav-link" >Room Type</a>
              </li>
            </ul>
          </div>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link"  data-bs-toggle="collapse" href="#charts" role="button" aria-expanded="false" aria-controls="charts">
            <i class="link-icon" data-feather="pie-chart"></i>
            <span class="link-title">Charts</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="charts">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="pages/charts/apex.html" class="nav-link">Apex</a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">ChartJs</a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">Flot</a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/morrisjs.html" class="nav-link">Morris</a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/peity.html" class="nav-link">Peity</a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/sparkline.html" class="nav-link">Sparkline</a>
              </li>
            </ul>
          </div>
        </li> --}}
        {{-- <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#tables" role="button" aria-expanded="false" aria-controls="tables">
            <i class="link-icon" data-feather="layout"></i>
            <span class="link-title">Table</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="tables">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="pages/tables/basic-table.html" class="nav-link">Basic Tables</a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data-table.html" class="nav-link">Data Table</a>
              </li>
            </ul>
          </div>
        </li> --}}

        <li class="nav-item nav-category">Transaction</li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" role="button" aria-expanded="false" aria-controls="general-pages">
            <i class="link-icon" data-feather="book"></i>
            <span class="link-title">Reservation</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="general-pages">
            <ul class="nav sub-menu">

              <li class="nav-item">
                <a href="{{route('front.Reservation')}}" class="nav-link" >Reservation Table</a>
              </li>
              <li class="nav-item">
                <a href="{{route('front.ReservationDetail')}}" class="nav-link" >ReservationDetail</a>
              </li>

            </ul>
          </div>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#authPages" role="button" aria-expanded="false" aria-controls="authPages">
            <i class="link-icon" data-feather="unlock"></i>
            <span class="link-title">Authentication</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="authPages">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="pages/auth/login.html" class="nav-link">Login</a>
              </li>
              <li class="nav-item">
                <a href="pages/auth/register.html" class="nav-link">Register</a>
              </li>
            </ul>
          </div>
        </li> --}}
        {{-- <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#errorPages" role="button" aria-expanded="false" aria-controls="errorPages">
            <i class="link-icon" data-feather="cloud-off"></i>
            <span class="link-title">Error</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="errorPages">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="pages/error/404.html" class="nav-link">404</a>
              </li>
              <li class="nav-item">
                <a href="pages/error/500.html" class="nav-link">500</a>
              </li>
            </ul>
          </div>
        </li> --}}
        {{-- <li class="nav-item nav-category">Docs</li>
        <li class="nav-item">
          <a href="https://www.nobleui.com/html/documentation/docs.html" target="_blank" class="nav-link">
            <i class="link-icon" data-feather="hash"></i>
            <span class="link-title">Documentation</span>
          </a>
        </li> --}}
      </ul>
    </div>
  </nav>
