  <!--begin::Aside-->
  <div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside"
      data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
      data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
      data-kt-drawer-toggle="#kt_aside_mobile_toggle" style="background-color: #00193d !important;">
      <!--begin::Brand-->
      <div class="aside-logo flex-column-auto" id="kt_aside_logo" style="background-color: #00193d !important;">
          <!--begin::Logo-->
          <a href="{{ route('homepage') }}">
              <img alt="Logo" src="{{ asset('backend/login/assets/logo/Logo_White.png') }}" class="img-fluid" />
          </a>
          <!--end::Logo-->
          <!--begin::Aside toggler-->
          <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
              data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
              data-kt-toggle-name="aside-minimize">
              <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
              <span class="svg-icon svg-icon-1 rotate-180">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                      fill="none">
                      <path opacity="0.5"
                          d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
                          fill="currentColor" />
                      <path
                          d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
                          fill="currentColor" />
                  </svg>
              </span>
              <!--end::Svg Icon-->
          </div>
          <!--end::Aside toggler-->
      </div>
      <!--end::Brand-->
      <!--begin::Aside menu-->
      <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
          data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
          data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu"
          data-kt-scroll-offset="0">
          <!--begin::Menu-->
          <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
              id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">
              <div class="menu-item">
                  <a class="menu-link {{ Route::is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                      <span class="menu-icon">
                          <?xml version="1.0" encoding="UTF-8"?>
                          <svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 29.93 27.44" width="20px" height="20px">
                              <defs>
                                  <style>
                                      .cls-1 {
                                          fill: #fff;
                                          stroke-width: 0px;
                                      }
                                  </style>
                              </defs>
                              <g id="Layer_1-2" data-name="Layer 1">
                                  <path class="cls-1"
                                      d="M17.46,11.22c0,1.22-.36,2.42-1.04,3.43l-3.95-3.95v-5.59c2.9.59,4.99,3.15,4.99,6.11ZM9.98,5.11c-3.37.69-5.55,3.98-4.86,7.36.59,2.9,3.15,4.99,6.11,4.99,1.22,0,2.42-.36,3.43-1.04l-4.68-4.68v-6.63ZM19.95,7.48h4.99v-2.49h-4.99v2.49ZM19.95,12.47h4.99v-2.49h-4.99v2.49ZM19.95,17.46h4.99v-2.49h-4.99v2.49ZM16.21,22.45v2.49h6.24v2.49H7.48v-2.49h6.24v-2.49H0V3.74C0,1.68,1.68,0,3.74,0h22.45c2.06,0,3.74,1.68,3.74,3.74v18.71h-13.72ZM2.49,19.95h24.94V3.74c0-.69-.56-1.25-1.25-1.25H3.74c-.69,0-1.25.56-1.25,1.25v16.21Z" />
                              </g>
                          </svg>
                      </span>

                      <span class="menu-title">Dashboard</span>
                  </a>
              </div>

              <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                  <span class="menu-link">
                      <span class="menu-icon">
                          <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                          <span class="svg-icon svg-icon-2">
                            <svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 30 27.5" width="15px" height="15px">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: #fff;
                                        stroke-width: 0px;
                                    }
                                </style>
                            </defs>
                            <g id="Layer_1-2" data-name="Layer 1">
                                <path class="cls-1"
                                    d="M23.75,0H6.25C2.8,0,0,2.8,0,6.25v15c0,3.45,2.8,6.25,6.25,6.25h17.5c3.45,0,6.25-2.8,6.25-6.25V6.25c0-3.45-2.8-6.25-6.25-6.25ZM27.5,21.25c0,2.07-1.68,3.75-3.75,3.75H6.25c-2.07,0-3.75-1.68-3.75-3.75V6.25c0-2.07,1.68-3.75,3.75-3.75h17.5c2.07,0,3.75,1.68,3.75,3.75v15ZM23.75,7.5c0,.69-.56,1.25-1.25,1.25h-8.75c-.69,0-1.25-.56-1.25-1.25s.56-1.25,1.25-1.25h8.75c.69,0,1.25.56,1.25,1.25ZM10,7.5c0,1.04-.84,1.88-1.88,1.88-1.04,0-1.88-.84-1.88-1.88h0c0-1.04.84-1.88,1.88-1.87s1.88.84,1.88,1.88ZM23.75,13.75c0,.69-.56,1.25-1.25,1.25h-8.75c-.69,0-1.25-.56-1.25-1.25s.56-1.25,1.25-1.25h8.75c.69,0,1.25.56,1.25,1.25ZM10,13.75c0,1.04-.84,1.88-1.88,1.88-1.04,0-1.88-.84-1.87-1.88s.84-1.88,1.88-1.88c1.04,0,1.88.84,1.87,1.88ZM23.75,20c0,.69-.56,1.25-1.25,1.25h-8.75c-.69,0-1.25-.56-1.25-1.25s.56-1.25,1.25-1.25h8.75c.69,0,1.25.56,1.25,1.25ZM10,20c0,1.04-.84,1.88-1.88,1.88-1.04,0-1.88-.84-1.88-1.88s.84-1.88,1.88-1.88c1.04,0,1.88.84,1.88,1.88h0Z" />
                            </g>
                        </svg>
                        
                          </span>
                          <!--end::Svg Icon-->
                      </span>
                      <span class="menu-title">Registered Events</span>
                      <span class="menu-arrow"></span>
                  </span>
                  <div class="menu-sub menu-sub-accordion">
                      <div class="menu-item">
                          <a class="menu-link {{ Route::is('user.all.event') ? 'active' : '' }}"
                              href="{{ route('user.all.event') }}">
                              <span class="menu-bullet">
                                  <span class="bullet bullet-dot"></span>
                              </span>
                              <span class="menu-title">All Events</span>
                          </a>
                      </div>
                  </div>
              </div>
              <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                  <span class="menu-link">
                      <span class="menu-icon">
                          <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                          <span class="svg-icon svg-icon-2">
                            <svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 27.5">
                                <defs>
                                  <style>
                                    .cls-1 {
                                      fill: #fff;
                                      stroke-width: 0px;
                                    }
                                  </style>
                                </defs>
                                <g id="Layer_1-2" data-name="Layer 1">
                                  <path class="cls-1" d="M23.75,0H6.25C2.8,0,0,2.8,0,6.25v15c0,3.45,2.8,6.25,6.25,6.25h17.5c3.45,0,6.25-2.8,6.25-6.25V6.25c0-3.45-2.8-6.25-6.25-6.25ZM27.5,21.25c0,2.07-1.68,3.75-3.75,3.75H6.25c-2.07,0-3.75-1.68-3.75-3.75V6.25c0-2.07,1.68-3.75,3.75-3.75h17.5c2.07,0,3.75,1.68,3.75,3.75v15ZM23.75,7.5c0,.69-.56,1.25-1.25,1.25h-8.75c-.69,0-1.25-.56-1.25-1.25s.56-1.25,1.25-1.25h8.75c.69,0,1.25.56,1.25,1.25ZM10,7.5c0,1.04-.84,1.88-1.88,1.88-1.04,0-1.88-.84-1.88-1.88h0c0-1.04.84-1.88,1.88-1.87s1.88.84,1.88,1.88ZM23.75,13.75c0,.69-.56,1.25-1.25,1.25h-8.75c-.69,0-1.25-.56-1.25-1.25s.56-1.25,1.25-1.25h8.75c.69,0,1.25.56,1.25,1.25ZM10,13.75c0,1.04-.84,1.88-1.88,1.88-1.04,0-1.88-.84-1.87-1.88s.84-1.88,1.88-1.88c1.04,0,1.88.84,1.87,1.88ZM23.75,20c0,.69-.56,1.25-1.25,1.25h-8.75c-.69,0-1.25-.56-1.25-1.25s.56-1.25,1.25-1.25h8.75c.69,0,1.25.56,1.25,1.25ZM10,20c0,1.04-.84,1.88-1.88,1.88-1.04,0-1.88-.84-1.88-1.88s.84-1.88,1.88-1.88c1.04,0,1.88.84,1.88,1.88h0Z"/>
                                </g>
                              </svg>
                          </span>
                          <!--end::Svg Icon-->
                      </span>
                      <span class="menu-title">Registered Course</span>
                      <span class="menu-arrow"></span>
                  </span>
                  <div class="menu-sub menu-sub-accordion">
                      <div class="menu-item">
                          <a class="menu-link {{ Route::is('user.register.course.list') ? 'active' : '' }}"
                              href="{{ route('user.register.course.list') }}">
                              <span class="menu-bullet">
                                  <span class="bullet bullet-dot"></span>
                              </span>
                              <span class="menu-title">Course List</span>
                          </a>
                      </div>
                  </div>
              </div>
          </div>
          <!--end::Menu-->
      </div>
      <!--end::Aside menu-->
      <div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
          <form action="{{ route('logout') }}" method="POST" class="w-100">
              @csrf
              <button type="submit"
                  class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100">
                  <span class="btn-label">
                      Log Out
                  </span>
                  <i class="fa-solid fa-right-from-bracket btn-icon fs-2 m-0"></i>
              </button>
          </form>
      </div>

  </div>
  <!--end::Aside-->
