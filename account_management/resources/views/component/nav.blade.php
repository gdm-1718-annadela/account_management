<nav class="nav">
    <div class="nav__content">
        <div class="nav__logos">
            <svg xmlns="http://www.w3.org/2000/svg" width="71.166" height="35.233" viewBox="0 0 71.166 35.233">
                <path d="M12.568,46.78.43,67.8H24.709Z" transform="translate(-0.43 -32.822)"/>
                <path d="M79.869,35.4H65.548L46.75.49H61.072Z" transform="translate(-32.929 -0.344)"/>
                <path d="M157.939,35.4H143.617L124.82.49h14.322Z" transform="translate(-87.705 -0.344)"/>
                <path d="M207.783,0H195.86l11.923,20.65Z" transform="translate(-137.549)"/>
                <line y1="29.273" x2="17.019" transform="translate(0 5.708)"/>
                <line y1="35.056" transform="translate(70.234)"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="35.056" height="35.056" viewBox="0 0 35.056 35.056">
                <path d="M19.1,0H0V35.056H35.056V0ZM30.926,23.656,20.662,3.141A14.741,14.741,0,0,1,32.251,17.528,14.676,14.676,0,0,1,30.926,23.656ZM2.8,2.8H17.36L29.2,26.5a14.747,14.747,0,0,1-11.674,5.756A14.722,14.722,0,0,1,2.8,17.528Zm0,29.447V27.042a17.572,17.572,0,0,0,5.209,5.209Zm24.238,0a17.56,17.56,0,0,0,3.534-3.022h0l1.507,3.022Zm0-29.447h5.209V8.014A17.572,17.572,0,0,0,27.042,2.8Z"/>
            </svg>
        </div>
        <ul class="nav__links">
            <li class="@if(Request::is('/')) nav__link-item--active @endif nav__link-item nav__link-item--dashboard">
                <a class="nav__link" href="/">
                    <svg class="nav__svg" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                        <path d="M10,0v6h8V0H10z M16,4h-4V2h4V4z"/>
                        <path d="M0,0v10h8V0H0z M6,8H2V2h4V8z"/>
                        <path d="M10,8v10h8V8H10z M16,16h-4v-6h4V16z"/>
                        <path d="M0,12v6h8v-6H0z M6,16H2v-2h4V16z"/>
                    </svg>
                    Dashboard
                </a>
            </li>
            <li class="{{ str_contains(request()->url(), '/accounts') ? 'nav__link-item--active' : '' }} nav__link-item nav__link-item--dashboard">
                <a class="nav__link" href="/accounts">
                    <svg class="nav__svg" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 16">
                        <path d="M15.7,9.1C17,10.1,18,11.3,18,13v3h4v-3C22,10.8,18.4,9.5,15.7,9.1z"/>
                        <path d="M14,8c2.2,0,4-1.8,4-4s-1.8-4-4-4c-0.5,0-0.9,0.1-1.3,0.2C13.5,1.3,14,2.6,14,4s-0.5,2.7-1.3,3.8C13.1,7.9,13.5,8,14,8z"/>
                        <path d="M8,8c2.2,0,4-1.8,4-4s-1.8-4-4-4S4,1.8,4,4S5.8,8,8,8z M8,2c1.1,0,2,0.9,2,2S9.1,6,8,6S6,5.1,6,4S6.9,2,8,2z"/>
                        <path d="M8,9c-2.7,0-8,1.3-8,4v3h16v-3C16,10.3,10.7,9,8,9z M14,14H2v-1c0.2-0.7,3.3-2,6-2s5.8,1.3,6,2V14z"/>
                    </svg>
                    Accounts
                </a>
                <div class="navsub">
                    <a href="/accounts" class="navsub__item navsub__overview">
                        <svg width="100%" height="100%" viewBox="0 0 75 50" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path
                                d="M0,50l75,0l0,-8.333l-75,-0l0,8.333Zm0,-20.833l75,-0l0,-8.334l-75,0l0,8.334Zm0,-29.167l0,8.333l75,0l0,-8.333l-75,0Z"
                                style="fill-rule:nonzero;" />
                        </svg>
                    </a>
                    <a href="/accounts" class="navsub__item navsub__add">
                        <svg width="100%" height="100%" viewBox="0 0 59 59" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path d="M58.333,33.333l-25,0l0,25l-8.333,0l0,-25l-25,0l0,-8.333l25,0l0,-25l8.333,0l0,25l25,0l0,8.333Z"
                                style="fill-rule:nonzero;" />
                        </svg>
                    </a>
                </div>
            </li>
            <li class="{{ str_contains(request()->url(), '/calendar') ? 'nav__link-item--active' : '' }} nav__link-item nav__link-item--dashboard">
                <a class="nav__link" href="/calendar">
                    <svg class="nav__svg" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 22">
                        <path d="M18,2h-1V0h-2v2H5V0H3v2H2C0.9,2,0,2.9,0,4v16c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V4C20,2.9,19.1,2,18,2z M18,20H2V9h16V20z M18,7H2V4h16V7z"/>
                    </svg>
                    Calendar
                </a>
            </li>
            <li class="{{ str_contains(request()->url(), '/variables') ? 'nav__link-item--active' : '' }} nav__link-item nav__link-item--dashboard">
                <a class="nav__link" href="/variables">
                    <svg class="nav__svg" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.5 20">
                        <path d="M17.2,11c0-0.3,0.1-0.6,0.1-1c0-0.3,0-0.7-0.1-1l2.1-1.6c0.2-0.1,0.2-0.4,0.1-0.6l-2-3.5C17.3,3.1,17.1,3,16.9,3
                        c-0.1,0-0.1,0-0.2,0l-2.5,1c-0.5-0.4-1.1-0.7-1.7-1l-0.4-2.7C12.2,0.2,12,0,11.7,0h-4C7.5,0,7.3,0.2,7.2,0.4L6.9,3.1
                        c-0.6,0.2-1.2,0.6-1.7,1l-2.5-1C2.6,3,2.6,3,2.5,3C2.3,3,2.2,3.1,2.1,3.3l-2,3.5C-0.1,6.9,0,7.2,0.2,7.4L2.3,9c0,0.3-0.1,0.6-0.1,1
                        c0,0.3,0,0.7,0.1,1l-2.1,1.6C0,12.8-0.1,13,0.1,13.3l2,3.5C2.2,16.9,2.3,17,2.5,17c0.1,0,0.1,0,0.2,0l2.5-1c0.5,0.4,1.1,0.7,1.7,1
                        l0.4,2.6c0,0.2,0.2,0.4,0.5,0.4h4c0.2,0,0.5-0.2,0.5-0.4l0.4-2.6c0.6-0.2,1.2-0.6,1.7-1l2.5,1c0.1,0,0.1,0,0.2,0
                        c0.2,0,0.3-0.1,0.4-0.2l2-3.5c0.1-0.2,0.1-0.5-0.1-0.6L17.2,11z M15.2,9.3c0,0.3,0,0.5,0,0.7c0,0.2,0,0.4,0,0.7L15,11.9l0.9,0.7
                        l1.1,0.8l-0.7,1.2L15,14.1l-1-0.4l-0.9,0.7c-0.4,0.3-0.8,0.6-1.2,0.7l-1.1,0.4l-0.2,1.1L10.4,18H9l-0.2-1.4l-0.2-1.1l-1.1-0.4
                        c-0.4-0.2-0.8-0.4-1.2-0.7l-0.9-0.7l-1.1,0.4l-1.3,0.5l-0.7-1.2l1.1-0.8l0.9-0.7l-0.1-1.1c0-0.3-0.1-0.5-0.1-0.7s0-0.4,0.1-0.7
                        l0.1-1.1L3.5,7.4L2.4,6.6l0.7-1.2l1.3,0.5l1,0.4l0.9-0.7c0.4-0.3,0.8-0.6,1.2-0.7l1.1-0.4l0.2-1.1L9,2h1.4l0.2,1.3l0.2,1.1l1.1,0.4
                        c0.4,0.2,0.8,0.4,1.2,0.7L14,6.3L15,5.9l1.3-0.5L17,6.6l-1.1,0.9L15,8.1C15,8.1,15.2,9.3,15.2,9.3z M9.7,6c-2.2,0-4,1.8-4,4
                        s1.8,4,4,4s4-1.8,4-4S11.9,6,9.7,6z M9.7,12c-1.1,0-2-0.9-2-2s0.9-2,2-2s2,0.9,2,2S10.8,12,9.7,12z"/>
                    </svg>
                    Variables
                </a>
            </li>
            <li class="{{ str_contains(request()->url(), '/transactions') ? 'nav__link-item--active' : '' }} nav__link-item nav__link-item--dashboard">
                <a class="nav__link" href="/transactions">
                    <svg class="nav__svg" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 14">
                        <polygon points="4,6 0,10 4,14 4,11 11,11 11,9 4,9 "/>
                        <polygon points="18,4 14,0 14,3 7,3 7,5 14,5 14,8 "/>
                    </svg>                
                    Transactions
                </a>
                <div class="navsub">
                    <a href="/transactions" class="navsub__item navsub__overview">
                        <svg width="100%" height="100%" viewBox="0 0 75 50" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path
                                d="M0,50l75,0l0,-8.333l-75,-0l0,8.333Zm0,-20.833l75,-0l0,-8.334l-75,0l0,8.334Zm0,-29.167l0,8.333l75,0l0,-8.333l-75,0Z"
                                style="fill-rule:nonzero;" />
                        </svg>
                    </a>
                    <a href="/transactions" class="navsub__item navsub__add">
                        <svg width="100%" height="100%" viewBox="0 0 59 59" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path d="M58.333,33.333l-25,0l0,25l-8.333,0l0,-25l-25,0l0,-8.333l25,0l0,-25l8.333,0l0,25l25,0l0,8.333Z"
                                style="fill-rule:nonzero;" />
                        </svg>
                    </a>
                </div>
            </li>
        </ul>
    </div>
    <img class="nav__love" src="./media/illustrations/love.svg" alt="love illustration">
</nav>
