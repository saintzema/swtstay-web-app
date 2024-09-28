<div>
    <aside
        class="bg-cover bg-no-repeat min-h-screen select-none fixed top-0 left-0 z-40 w-96 h-screen pt-0 transition-transform -translate-x-full  md:translate-x-0"
        style="background-image: url('{{ asset('assets/regSide.svg') }}');">
        <div class="flex flex-col pt-44  px-16  mx-auto md:h-screen">
            <a href="{{ route('index') }}" wire:navigate class="flex items-start mb-8">
                <svg width="140" height="40" viewBox="0 0 192 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M2.41599 26.7672L3.37177 25.7224L4.24259 26.7672C3.96648 27.0806 3.64788 27.4358 3.35053 27.7702L2.41599 26.7672ZM5.11342 26.2866C5.11342 26.6418 5.32581 26.8507 5.68688 26.8507C6.02671 26.8507 6.34531 26.5791 6.34531 26.2866C6.34531 25.994 6.09043 25.7433 5.7506 25.7224C5.36829 25.7433 5.11342 25.9731 5.11342 26.2866ZM40.8808 34.7702C40.8808 41.6866 34.1691 45.4895 25.0361 45.6149C24.8874 45.6149 24.7387 45.6149 24.5901 45.6149C15.9243 45.6149 10.5295 40.4746 8.02323 37.2985C5.96299 37.2985 3.88152 37.2985 1.82129 37.2985C1.48146 37.2985 1.2903 37.3403 1.22658 37.7373C1.20534 37.9045 0.95047 38.1343 0.780554 38.1552C0.610638 38.1761 0.334521 38.0507 0.207084 37.8836C0.0796469 37.7373 0.0159296 37.4657 0.0159296 37.2567C-0.00530988 36.4627 -0.00530988 35.6896 0.0159296 34.8955C0.0159296 34.2687 0.29204 34.0179 0.907986 34.0179C3.0107 34.0179 5.11341 33.997 7.21613 34.0388C7.32233 34.0388 7.44976 34.0388 7.55596 34.0597C9.23388 34.1224 10.8906 34.3522 12.4835 34.8537C13.1632 35.0627 13.8216 35.2925 14.5013 35.5642C15.011 35.7522 15.5208 35.9612 16.0305 36.1493C16.2642 36.2328 16.4766 36.4418 16.7102 36.5672C16.8164 36.609 17.0288 36.6299 17.0713 36.5463C17.5598 35.9612 18.027 35.3761 18.5793 34.7075C18.0695 34.2269 17.5598 33.6836 16.9863 33.2239C15.8394 32.3045 14.5225 31.7403 13.142 31.3015C13.0782 31.2806 12.9933 31.2597 12.9083 31.2388C12.6747 31.1761 12.4623 31.0925 12.2287 31.0298C9.87107 30.3821 7.44976 30.0895 5.00722 30.2567C3.45673 30.3612 1.92749 30.6537 0.461961 31.197C0.355763 31.2388 0.228324 31.2597 0.100886 31.2806C0.0796469 31.2597 0.0584048 31.2179 0.0584048 31.197C0.143363 31.1343 0.207083 31.0507 0.292041 30.9881C1.2903 30.3194 2.41599 29.9224 3.58417 29.6507C5.36829 29.2537 7.15241 29.2746 8.95777 29.3582C9.46752 29.3791 9.95602 29.4627 10.4658 29.5254C10.6569 29.5463 10.7844 29.5045 10.7631 29.2746C10.6357 28.5433 10.8481 27.8746 11.1879 27.2269C11.2941 27.0388 11.3154 26.809 11.3366 26.6C11.3791 26.4119 11.3366 26.1821 11.4216 26.0358C11.5702 25.8269 11.7826 25.5552 11.995 25.5343C12.1649 25.5134 12.3561 25.8269 12.5685 25.9731C12.6747 26.0567 12.7809 26.1612 12.9083 26.1612C14.9686 26.1612 17.05 26.1612 19.1103 26.1612C19.2377 26.1612 19.4076 26.0567 19.4713 25.9522C19.6413 25.7433 19.7687 25.4925 20.0448 25.4925C20.066 25.4925 20.1085 25.4925 20.151 25.4925C20.5545 25.5761 20.6607 25.9104 20.682 26.2866C20.682 27.7701 20.682 29.2537 20.682 30.7373C20.682 32.8895 20.682 35.0418 20.6607 37.194C20.6607 37.2985 20.6607 37.403 20.6607 37.5075C20.597 37.8418 20.4484 38.1343 20.0873 38.1552C19.7262 38.197 19.4713 37.9672 19.4076 37.6119C19.3439 37.3194 19.1952 37.2567 18.9191 37.2776C18.7067 37.2985 18.4943 37.2985 18.2819 37.2776C17.8147 37.2358 17.4323 37.2985 17.2412 37.8209C17.1562 38.0507 16.9863 38.0716 16.7739 37.9045C16.3279 37.5493 15.8394 37.3612 15.3084 37.2985C17.1137 40.9761 20.1722 44.7582 25.0361 44.7582C30.0061 44.7582 32.4699 40.8507 32.4699 37.2358C32.4699 32.4925 27.6486 29.0866 22.3812 25.6806C21.8289 25.3254 21.2555 24.9702 20.7032 24.594C15.2022 21.0209 9.34008 16.6328 9.34008 10.7821C9.34008 4.78507 14.8199 0.940301 21.9139 0.146271C22.7847 0.0417936 23.698 0 24.6325 0C27.6061 0 30.0911 0.50149 32.0876 1.21194C36.1656 2.65373 36.8453 8.02389 33.277 10.4269C33.277 10.4269 30.8982 0.856718 22.6148 0.856718C22.4236 0.856718 22.2112 0.877609 21.9988 0.898505C19.8961 1.17015 16.6252 2.8 16.6252 7.10448C16.6252 11.9313 21.1705 14.8985 27.4362 19.5164C33.3832 23.8418 40.8808 28.3761 40.8808 34.7702ZM18.1332 30.3821C18.1757 29.609 18.1757 28.8358 18.6218 28.1463C18.643 28.1045 18.643 28.0209 18.6642 27.9373C18.4943 27.9373 18.3456 27.9373 18.197 27.9164C17.6023 27.8537 17.0075 27.791 16.4128 27.6866C15.3084 27.4776 14.1827 27.2687 13.057 27.394C12.4835 27.4567 12.08 27.7284 11.8676 28.2298C11.7401 28.5642 11.6339 28.8985 11.5277 29.2328C11.464 29.4209 11.3791 29.6298 11.6764 29.7343C11.9313 29.8388 12.1012 29.7552 12.2074 29.5045C13.0782 27.7493 15.2659 27.8746 16.7314 28.7731C15.2659 28.794 13.8216 28.6895 12.7172 29.9433C14.48 30.3612 16.0518 30.9672 17.4323 31.9701C17.6235 32.1164 17.7722 32.0746 17.8359 31.8657C17.9633 31.3642 18.112 30.8627 18.1332 30.3821ZM19.3014 33.7463C19.3439 33.7254 19.3651 33.7254 19.4076 33.7045V31.2388C19.0465 31.7403 18.728 32.1791 18.4094 32.6179C18.3881 32.6597 18.3669 32.7642 18.3881 32.806C18.6855 33.1194 19.0041 33.4328 19.3014 33.7463ZM11.7189 36.0448C11.5915 35.9612 11.549 35.9403 11.5065 35.9194C10.6994 35.7522 9.87107 35.5015 9.04273 35.4179C8.23563 35.3343 7.40728 35.2716 6.57894 35.209C6.00547 35.1672 5.43201 35.1463 4.85854 35.1045C4.64614 35.1045 4.45499 35.0836 4.24259 35.0836C3.39301 35.0418 2.52219 35.1045 1.65137 35.1463C1.43897 35.1463 1.26906 35.209 1.24782 35.4806C1.20534 35.9612 1.2903 36.0448 1.80005 36.0657C3.58417 36.0657 5.34705 36.0657 7.13117 36.0657C8.4905 36.0657 9.87107 36.0657 11.2304 36.0657C11.3578 36.0866 11.4853 36.0657 11.7189 36.0448Z"
                        fill="#0C4592" />
                    <path
                        d="M39.5002 19.2659H48.6757L54.113 35.0629L49.1854 45.5734L39.5002 19.2659ZM49.4191 44.3196L61.8442 19.2659H62.0778L49.2067 45.5734L49.4191 44.3196ZM56.7467 30.1107L62.0566 19.2659L67.4939 35.0629L62.5239 45.5734L56.7467 30.1107ZM62.7787 44.3196L75.2038 19.2659H75.4375L62.5026 45.5734L62.7787 44.3196ZM84.1032 9.13158C84.2944 9.23606 84.4643 9.36143 84.6342 9.46591C84.8041 9.57038 84.9528 9.69576 85.1015 9.80024C85.9935 10.5316 86.6307 11.3047 87.0343 12.1196C87.4166 12.9346 87.544 13.7077 87.3953 14.4808C87.1617 15.6928 86.2272 16.842 84.5492 17.9495C82.8713 19.057 80.45 20.0182 77.2641 20.8749L87.0555 19.2868L86.9918 19.454L74.3543 21.4808L74.418 21.3137C75.7561 21.0629 77.1154 20.3316 78.496 19.1405C79.8765 17.9495 81.066 16.4659 82.0855 14.6898C83.0837 12.9137 83.6997 11.0749 83.9333 9.21516V9.15247H84.1032V9.13158ZM80.0252 44.654C78.8995 44.1107 78.0712 43.2122 77.5402 42.0211C77.0092 40.8092 76.7968 39.2002 76.9455 37.1734L78.3473 20.6659L87.1405 19.2868L85.8024 35.8569C85.7174 36.8808 85.7811 37.6958 85.9511 38.2808C86.121 38.8659 86.4183 39.3047 86.8644 39.5973C87.3104 39.8898 87.8626 40.0361 88.5423 40.0361L84.3368 45.4898C82.574 45.4689 81.1509 45.1973 80.0252 44.654ZM88.521 40.0152C89.668 40.0152 90.6662 39.4719 91.4521 38.3853C92.2592 37.2987 92.9389 35.7107 93.4911 33.6211H93.8734C93.3212 36.045 92.7052 38.0928 92.0468 39.7853C91.3884 41.4779 90.4326 42.8361 89.1582 43.8808C87.8838 44.9256 86.2696 45.448 84.2944 45.448L88.521 40.0152ZM87.013 19.4331L87.0767 19.2659L94.0646 16.7375L93.6822 21.9614L87.013 19.4331ZM99.6081 43.3584C96.7407 41.9167 95.1902 40.0152 94.9566 37.654C94.723 35.3137 96.231 32.8062 99.4382 30.1734H99.6718C99.6718 30.2152 99.6718 30.257 99.6718 30.2779C99.6718 30.3196 99.693 30.3614 99.7355 30.3823C99.7992 32.9107 100.224 35.2928 100.989 37.5077C101.753 39.7226 102.9 41.5823 104.429 43.0868C105.959 44.5913 107.764 45.3226 109.867 45.2808L109.803 45.5107C105.874 45.5316 102.475 44.8002 99.6081 43.3584ZM117.449 35.8152C116.961 34.9167 116.302 34.1644 115.432 33.5793C114.582 32.9943 113.371 32.3256 111.8 31.5943C111.545 31.448 111.269 31.3017 110.95 31.1764C110.653 31.051 110.355 30.9047 110.058 30.7584C109.761 30.5286 109.421 30.3405 109.017 30.1525C108.635 29.9644 108.21 29.7973 107.764 29.651C105.491 28.5435 103.622 27.5405 102.199 26.642C100.755 25.7435 99.5656 24.5525 98.5886 23.0898C97.6116 21.6271 97.208 19.8092 97.3567 17.6361L103.686 12.5793C103.644 13.8749 103.898 14.9405 104.451 15.8182C104.982 16.6958 105.746 17.4271 106.723 18.0122C107.7 18.5973 109.081 19.3077 110.865 20.1017C111.205 20.2898 111.545 20.4778 111.927 20.645C112.309 20.8331 112.67 21.0002 113.053 21.1465C113.35 21.2928 113.669 21.439 113.966 21.5853C114.285 21.7316 114.603 21.8779 114.943 22.0241C117.109 23.0062 118.851 23.9256 120.147 24.7823C121.442 25.6181 122.526 26.7465 123.396 28.1674C124.246 29.5883 124.565 31.3435 124.352 33.4749L118.086 39.2002C118.15 37.8629 117.938 36.7137 117.449 35.8152ZM100.075 10.845C101.626 9.08979 103.474 7.83606 105.619 7.08382C107.764 6.33159 109.909 5.95546 112.076 5.95546V6.18531C110.589 6.14352 109.208 6.41517 107.934 6.97935C106.66 7.54353 105.661 8.33755 104.939 9.31963C104.217 10.3017 103.792 11.4092 103.686 12.6211L97.3567 17.6778C97.6328 14.8778 98.5249 12.6002 100.075 10.845ZM109.846 45.3017C111.46 45.3435 112.84 45.1137 114.051 44.6122C115.24 44.1107 116.175 43.4002 116.855 42.439C117.534 41.4778 117.938 40.4122 118.086 39.242L124.352 33.5167C124.161 36.3167 123.29 38.5943 121.718 40.3913C120.147 42.1883 118.278 43.4838 116.132 44.2987C113.966 45.1137 111.863 45.5107 109.803 45.5107L109.846 45.3017ZM119.701 13.6032C119.17 11.4301 118.299 9.65397 117.067 8.23308C115.835 6.81218 114.178 6.12262 112.097 6.16442V5.93457C115.793 5.93457 118.83 6.7077 121.187 8.25397C123.566 9.80024 124.756 11.7226 124.777 14.0629C124.798 16.4032 123.418 18.5973 120.656 20.6868H120.38C120.444 18.1376 120.21 15.7555 119.701 13.6032ZM134.144 9.13158C134.335 9.23606 134.505 9.36143 134.675 9.46591C134.844 9.57038 134.993 9.69576 135.142 9.80024C136.034 10.5316 136.671 11.3047 137.075 12.1196C137.457 12.9346 137.584 13.7077 137.436 14.4808C137.202 15.6928 136.267 16.842 134.59 17.9495C132.912 19.057 130.49 20.0182 127.304 20.8749L137.096 19.2868L137.032 19.454L124.395 21.4808L124.458 21.3137C125.796 21.0629 127.156 20.3316 128.536 19.1405C129.917 17.9495 131.106 16.4659 132.126 14.6898C133.124 12.9137 133.74 11.0749 133.974 9.21516V9.15247H134.144V9.13158ZM130.044 44.654C128.919 44.1107 128.09 43.2122 127.559 42.0211C127.028 40.8092 126.816 39.2002 126.965 37.1734L128.366 20.6659L137.16 19.2868L135.821 35.8569C135.736 36.8808 135.8 37.6958 135.97 38.2808C136.14 38.8659 136.437 39.3047 136.883 39.5973C137.329 39.8898 137.882 40.0361 138.561 40.0361L134.356 45.4898C132.614 45.4689 131.17 45.1973 130.044 44.654ZM138.561 40.0152C139.708 40.0152 140.707 39.4719 141.492 38.3853C142.3 37.2987 142.979 35.7107 143.531 33.6211H143.914C143.361 36.045 142.746 38.0928 142.087 39.7853C141.429 41.4779 140.473 42.8361 139.199 43.8808C137.924 44.9256 136.31 45.448 134.335 45.448L138.561 40.0152ZM137.053 19.4331L137.117 19.2659L144.105 16.7375L143.723 21.9614L137.053 19.4331ZM148.013 43.5674C146.781 42.2928 145.868 40.6629 145.252 38.6361C144.636 36.6092 144.445 34.4778 144.657 32.2002L153.493 30.7584C153.493 30.9465 153.493 31.0928 153.493 31.1972C153.493 31.3017 153.493 31.4271 153.493 31.5316C153.344 33.4331 153.302 35.0838 153.387 36.442C153.45 37.8002 153.663 38.9286 154.002 39.8062C154.342 40.6838 154.98 41.1226 155.914 41.1226C156.466 41.1226 156.934 40.7465 157.316 40.0152C157.698 39.2838 157.953 38.4898 158.123 37.6122C158.293 36.7555 158.442 35.648 158.59 34.2898V34.1853L158.93 33.6838C158.824 35.9614 158.548 37.9465 158.08 39.639C157.634 41.3316 156.976 42.7316 156.126 43.8182C155.277 44.9256 154.087 45.4689 152.601 45.4689C150.774 45.4689 149.245 44.842 148.013 43.5674ZM158.973 29.9435C159.121 28.3972 159.206 26.9555 159.227 25.5973C159.249 24.239 159.164 23.1107 158.973 22.1913C158.888 21.1674 158.718 20.3943 158.42 19.8719C158.123 19.3495 157.677 19.0778 157.082 19.0361C156.445 18.9943 155.872 19.5166 155.341 20.6032C154.81 21.6898 154.427 23.0898 154.172 24.8241C153.918 26.5584 153.684 28.5226 153.493 30.7793L144.657 32.2211C144.954 29.5465 145.634 27.1644 146.675 25.0958C147.716 23.0271 149.096 21.4181 150.817 20.2689C152.537 19.1405 154.576 18.5555 156.912 18.5555C157.996 18.5555 158.824 18.8271 159.44 19.3913C160.035 19.9346 160.438 20.6868 160.672 21.5853C160.905 22.5047 161.012 23.6122 161.012 24.8868C161.118 25.4719 161.16 26.057 161.16 26.642C161.139 27.2271 161.054 27.9375 160.905 28.7943L158.973 29.9435ZM163.815 45.5107C162.01 45.239 160.587 44.4659 159.588 43.1913C158.59 41.9167 158.144 40.1614 158.293 37.8838H167.192C167.044 39.4719 167.022 40.7256 167.107 41.6868C167.192 42.648 167.49 43.3793 167.978 43.9226C168.467 44.445 169.189 44.7584 170.166 44.8211L170.102 44.9256C167.723 45.5943 165.642 45.7823 163.815 45.5107ZM158.76 32.639C158.718 32.4092 158.718 32.2002 158.739 31.9495C158.76 31.7196 158.76 31.4689 158.76 31.1972C158.803 30.9674 158.845 30.7584 158.93 30.5286C159.015 30.2987 158.994 30.0689 158.866 29.8182H167.766C167.829 30.0689 167.851 30.3614 167.787 30.6749C167.723 30.9883 167.681 31.2599 167.638 31.4689C167.596 31.8032 167.575 32.0958 167.553 32.3674C167.532 32.639 167.532 32.9734 167.532 33.3286L167.192 37.842H158.293L158.76 32.639ZM164.665 21.8569C166.215 21.0838 167.575 20.1435 168.785 19.057C168.679 19.9764 168.594 20.9167 168.53 21.8987C168.467 22.8808 168.403 23.8002 168.339 24.6778C168.297 25.4928 168.233 26.3286 168.106 27.2062C167.978 28.0838 167.872 28.9614 167.766 29.839H159.312C159.355 29.1704 159.397 28.5644 159.461 28.0002C159.525 27.4361 159.567 26.8719 159.61 26.3286C159.61 25.8898 159.652 25.4301 159.716 24.9704C159.78 24.5107 159.822 23.9883 159.822 23.4032C161.5 23.1316 163.114 22.6301 164.665 21.8569ZM179.362 45.3644L179.256 45.5943L174.499 56.0002H165.493L179.362 45.3644ZM192 19.2659L179.235 45.5734L169.783 19.2659H178.895L183.929 34.8958L191.596 19.2659H192Z"
                        fill="#0C4592" />
                </svg>
            </a>
            <h2 class="mb-4 font-bold text-xl text-start">
                Begin Your Journey to <br> Better Hotel Management
            </h2>
            <p class="text-xs">
                Our intuitive onboarding flow will help you set up your properties, and customize features to meet your
                unique needs.
            </p>
        </div>

    </aside>


    <main class=" md:ml-96 h-auto pt-44 mb-24">
        <div x-data="{ step: @entangle('currentStep') }" class="max-w-md mx-10 md:ml-14">
            <form wire:submit.prevent="submit">

                {{-- step one data form --}}
                <div x-show="step === 1" class="space-y-6">
                    <div>
                        <p class="text-gray-400 text-xs mb-8 select-none">Question 1 of 5</p>
                        <h2 class="text-2xl font-normal mb-4 select-none">We will love to know your name</h2>
                    </div>

                    <div>
                        <label for="first_name"
                            class="block mb-2 text-sm font-extralight text-gray-900 select-none">What is your first
                            name?</label>
                        <input type="text" wire:model.blur="firstStepData.firstName" placeholder="Enter first name"
                            class="mt-1 border transition-all ease-in-out border-gray-100 text-gray-500 text-sm font-light hover:shadow-sm shadow-primary-500/10  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                        @error('firstStepData.firstName')
                            <span class="text-red-500 text-xs font-extralight">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="last_name" class="block mb-2 text-sm font-extralight text-gray-900 select-none">What
                            is your last name?</label>
                        <input type="text" wire:model.defer="firstStepData.lastName" placeholder="Enter Last name"
                            class="mt-1 border transition-all ease-in-out border-gray-100 text-gray-500 text-sm font-light hover:shadow-sm shadow-primary-500/10  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                        @error('firstStepData.lastName')
                            <span class="text-red-500 text-xs font-extralight">{{ $message }}</span>
                        @enderror
                    </div>


                    <button type="button" wire:click="goToNextStep"
                        class="text-white bg-primary-500 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center items-start">
                        Next
                        <span wire:loading wire:target="goToNextStep">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-3.5 animate-spin">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                            </svg>
                        </span>
                    </button>
                </div>

                {{-- step two form data --}}
                <div x-show="step === 2" class="space-y-6">
                    <div>
                        <p class="text-gray-400 text-xs mb-8 select-none">Question 2 of 5</p>
                        <h2 class="text-2xl font-normal mb-4 select-none"><strong>Hi {{ $firstStepData['firstName'] }} 👋🏽</strong>, <br> How did you hear about SwtStay?</h2>
                    </div>

                   <div x-data="{ selected: @entangle('secondStepData.source') }" class="space-y-4">
                     @error('secondStepData.source')
                            <span class="text-red-500 text-xs font-extralight mb-2">{{ $message }}</span>
                        @enderror

                        <label :class="selected === 'Whatsapp' ? 'border-primary-500' : ''"
                            class="flex px-2 py-3 border border-gray-300 rounded-lg cursor-pointer justify-between items-center">
                            <span class="text-sm font-light text-gray-700">Whatsapp</span>
                            <input type="radio" value="Whatsapp"  class="rounded border-gray-200 focus:ring-transparent text-primary-500" x-model="selected">
                        </label>

                        <label :class="selected === 'Colleague, Friends and Family' ? 'border-primary-500' : '' "
                            class="flex px-2 py-3 border border-gray-300 rounded-lg cursor-pointer justify-between items-center">
                            <span class="text-sm font-light text-gray-700">Colleague, Friends and Family</span>
                            <input type="radio" value="Colleague, Friends and Family" class="rounded border-gray-200 focus:ring-transparent text-primary-500" x-model="selected">
                        </label>

                        <label :class="selected === 'Twitter' ? 'border-primary-500' : ''"
                            class="flex px-2 py-3 border border-gray-300 rounded-lg cursor-pointer justify-between items-center">
                            <span class="text-sm font-light text-gray-700">Twitter</span>
                            <input type="radio" value="Twitter" class="rounded border-gray-200 focus:ring-transparent text-primary-500" x-model="selected">
                        </label>

                        <label :class="selected === 'Facebook' ? 'border-primary-500' : ''"
                            class="flex px-2 py-3 border border-gray-300 rounded-lg cursor-pointer justify-between items-center">
                            <span class="text-sm font-light text-gray-700">Facebook</span>
                            <input type="radio" value="Facebook" class="rounded border-gray-200 focus:ring-transparent text-primary-500" x-model="selected">
                        </label>
                        <label :class="selected === 'Flyers and Merch' ? 'border-primary-500' : ''"
                            class="flex px-2 py-3 border border-gray-300 rounded-lg cursor-pointer justify-between items-center">
                            <span class="text-sm font-light text-gray-700"> Flyers and Merch</span>
                            <input type="radio" value="Flyers and Merch" class="rounded border-gray-200 focus:ring-transparent text-primary-500" x-model="selected">
                        </label>
                        <label :class="selected === 'Others' ? 'border-primary-500' : ''"
                            class="flex px-2 py-3 border border-gray-300 rounded-lg cursor-pointer justify-between items-center">
                            <span class="text-sm font-light text-gray-700">Others</span>
                            <input type="radio" value="Others" class="rounded border-gray-200 focus:ring-transparent text-primary-500" x-model="selected">
                        </label>
                    </div>

                    <div class="flex justify-between">
                        <button type="button" wire:click="goToPreviousStep"
                            class="border border-primary-500 hover:bg-primary-500 hover:text-white transition-all ease-in-out text-primary-500 px-5 py-2.5 rounded-lg font-medium text-center text-sm">Previous
                        </button>

                        <button type="button" wire:click="goToNextStep"
                            class="text-white bg-primary-500 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Next
                            <span wire:loading wire:target="goToNextStep">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-3.5 animate-spin">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>

                {{-- step three form data --}}
                <div x-show="step === 3" class="space-y-6">
                    <div>
                        <p class="text-gray-400 text-xs mb-8 select-none">Question 3 of 5</p>
                        <h2 class="text-2xl font-normal mb-4 select-none"><Strong>Okay great!!</Strong> 👍🏻, <br> Please provide us your email address</h2>
                    </div>

                    <div>
                        <label for="email" class="block mb-2 text-sm font-extralight text-gray-900 select-none">What
                            is your email address?</label>
                        <input type="email" wire:model.defer="thirdStepData.email" placeholder="Enter your email"
                            class="mt-1 border transition-all ease-in-out border-gray-100 text-gray-500 text-sm font-light hover:shadow-sm shadow-primary-500/10  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" />
                        @error('thirdStepData.email')
                            <span class="text-red-500 text-xs font-extralight">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex justify-between">
                        <button type="button" wire:click="goToPreviousStep"
                            class="border border-primary-500 hover:bg-primary-500 hover:text-white transition-all ease-in-out text-primary-500 px-5 py-2.5 rounded-lg font-medium text-center text-sm">Previous
                        </button>

                        <button type="button" wire:click="goToNextStep"
                            class="text-white bg-primary-500 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Next
                            <span wire:loading wire:target="goToNextStep">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-3.5 animate-spin">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>

                {{-- step four form data --}}
                <div x-show="step === 4" class="space-y-6">
                    <div>
                        <p class="text-gray-400 text-xs mb-8 select-none">Question 4 of 5</p>
                        <h2 class="text-2xl font-normal mb-4 select-none">Please create a password for your account
                        </h2>
                    </div>

                    <div class="relative w-full" x-data="{ show: false }">
                        <label for="password"
                            class="block mb-2 text-sm font-extralight text-gray-900 select-none">Password</label>
                        <div class="relative">
                            <input :type="show ? 'text' : 'password'" name="password" id="password"
                                wire:model.defer="forthStepData.password" placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-400 focus:border-primary-500 focus:border block w-full p-2.5 pr-10 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-primaborder-primary-500 dark:focus:border-primary-500" />
                            <button type="button" @click="show = !show"
                                class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-500 dark:text-gray-400">
                                <svg x-show="!show" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                </svg>
                                <svg x-show="show" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 4.5c-4.638 0-8.573 3.007-9.963 7.178a1.012 1.012 0 0 0 0 .639C3.423 16.49 7.36 19.5 12 19.5c4.638 0 8.573-3.007 9.963-7.178a1.012 1.012 0 0 0 0-.639C20.577 7.51 16.64 4.5 12 4.5Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.752 19.485a0.375 0.375 0 0 1-.53 0 0.375 0.375 0 0 1 0-.53l14.016-14.016a0.375 0.375 0 0 1 .53 0 0.375 0.375 0 0 1 0 .53l-14.016 14.016Z" />
                                </svg>
                            </button>
                        </div>
                        @error('forthStepData.password')
                            <p class="text-red-500 text-xs font-extralight">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="relative w-full" x-data="{ show: false }">
                        <label for="password_confirmation"
                            class="block mb-2 text-sm font-extralight text-gray-900 select-none">Confirm
                            Password</label>
                        <div class="relative">
                            <input :type="show ? 'text' : 'password'" name="password_confirmation"
                                id="password_confirmation" wire:model.defer="forthStepData.password_confirmation"
                                placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-400 focus:border-primary-500 focus:border block w-full p-2.5 pr-10 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-primaborder-primary-500 dark:focus:border-primary-500" />
                            <button type="button" @click="show = !show"
                                class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-500 dark:text-gray-400">
                                <svg x-show="!show" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                </svg>
                                <svg x-show="show" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 4.5c-4.638 0-8.573 3.007-9.963 7.178a1.012 1.012 0 0 0 0 .639C3.423 16.49 7.36 19.5 12 19.5c4.638 0 8.573-3.007 9.963-7.178a1.012 1.012 0 0 0 0-.639C20.577 7.51 16.64 4.5 12 4.5Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.752 19.485a0.375 0.375 0 0 1-.53 0 0.375 0.375 0 0 1 0-.53l14.016-14.016a0.375 0.375 0 0 1 .53 0 0.375 0.375 0 0 1 0 .53l-14.016 14.016Z" />
                                </svg>
                            </button>
                        </div>
                        @error('forthStepData.password_confirmation')
                            <p class="text-red-500 text-xs font-extralight">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex justify-between">
                        <button type="button" wire:click="goToPreviousStep"
                            class="border border-primary-500 hover:bg-primary-500 hover:text-white transition-all ease-in-out text-primary-500 px-5 py-2.5 rounded-lg font-medium text-center text-sm">
                            Previous
                        </button>
                        <button type="button" wire:click="goToNextStep"
                            class="text-white bg-primary-500 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Next
                            <span wire:loading wire:target="goToNextStep">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-3.5 animate-spin">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>

                {{-- step five form data --}}
                <div x-show="step === 5" class="space-y-6">
                    <div>
                        <p class="text-gray-400 text-xs mb-8 select-none">Question 5 of 5</p>
                        <h2 class="text-2xl font-normal mb-4 select-none">
                            <strong>One more thing,</strong> <br> Are you the owner of the hotel or you are representing someone?
                        </h2>
                    </div>

                    <div x-data="{ selected: @entangle('fifthStepData.isOwner') }" class="space-y-4">
                     @error('fifthStepData.isOwner')
                            <span class="text-red-500 text-xs font-extralight mb-2">{{ $message }}</span>
                        @enderror
                        <label :class="selected === 'Main Owner' ? 'border-primary-500' : ''"
                            class="flex p-2 border border-gray-300 rounded-lg cursor-pointer justify-between items-center">
                            <span class="text-sm font-light text-gray-700">Yes, I am the owner</span>
                            <input type="radio" value="Main Owner"  class="rounded border-gray-200 focus:ring-transparent text-primary-500" x-model="selected">
                        </label>

                        <label :class="selected === 'Representative' ? 'border-primary-500' : '' "
                            class="flex p-2 border border-gray-300 rounded-lg cursor-pointer justify-between items-center">
                            <span class="text-sm font-light text-gray-700">No, I am representing someone</span>
                            <input type="radio" value="Representative" class="rounded border-gray-200 focus:ring-transparent text-primary-500" x-model="selected">
                        </label>
                    </div>

                    <div class="flex justify-between">
                        <button type="button" wire:click="goToPreviousStep"
                            class="border border-primary-500 hover:bg-primary-500 hover:text-white transition-all ease-in-out text-primary-500 px-5 py-2.5 rounded-lg font-medium text-center text-sm">
                            Previous
                        </button>
                        <button type="submit"
                            class="text-white bg-primary-500 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Submit
                             <span wire:loading wire:target="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-3.5 animate-spin">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </main>
</div>
