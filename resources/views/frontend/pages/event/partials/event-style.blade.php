<style>
    @import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap');



    .swiper {
        width: 350px;
        height: 500px;
    }

    .swiper-slide {
        position: relative;
        /* Required for positioning the overlay */
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 18px;
        font-weight: bold;
        color: #fff;
        background-image: url('https://www.i-eventplanner.com/wp-content/uploads/2018/07/Event_planning.jpg');
        background-size: cover;
        background-position: center;
        overflow: hidden;
    }

    .swiper-slide::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to right,
                rgba(61, 6, 109, 0.8),
                rgba(186, 52, 166, 0.829));
        /* Black overlay with 50% opacity */
        z-index: 1;
        /* Ensures the overlay stays below the content */
        border-radius: 18px;
        /* Matches the border radius of the slide */
    }

    .swiper-slide .content {
        position: relative;
        z-index: 2;
        /* Ensures the text content stays above the overlay */
    }

    .events-card {
        background-color: #fff;
    }

    .evenet-content {
        width: 100%;
        margin: auto;
    }

    .event-color {
        color: rgba(186, 52, 166, 0.829);
    }

    .btn-close {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-size: 1em;
        color: white;
        opacity: 0.8;
        /* Adjust for visibility */
    }

    .btn-close:hover {
        opacity: 1;
    }

    .swiper-button-next,
    .swiper-button-prev {
        color: #fff;
        /* Change icon color */
        font-size: 24px;
        /* Increase icon size */
        background-color: rgba(0, 0, 0, 0.5);
        /* Add a background for better visibility */
        border-radius: 50%;
        /* Make the background circular */
        padding: 10px;
        width: 50px;
        /* Adjust button width */
        height: 50px;
        /* Adjust button height */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .swiper-button-next:hover,
    .swiper-button-prev:hover {
        background-color: rgba(0, 0, 0, 0.8);
        /* Change background color on hover */
    }

    .swiper-button-next:after,
    .swiper-rtl .swiper-button-prev:after {
        content: 'none';
    }

    .swiper-button-prev:after,
    .swiper-rtl .swiper-button-prev:after {
        content: 'none';
    }

    .stepsWrapper {
        padding: 0 100px;
        width: 100%;
        box-sizing: border-box;
        background-color: #00193d;
        display: inline-block;
        color: white;
        height: 260px;
        display: flex;
        flex-wrap: nowrap;
        justify-content: space-around;
    }

    .stepsWrapper .step {
        margin: 0 20px;
        height: 100%;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -ms-flex-align: start;
        -webkit-align-items: start;
        -webkit-box-align: start;
        align-items: start;
    }

    .stepsWrapper .step .counter {
        float: left;
        font-size: 46px;
        font-weight: bold;
        line-height: 180px;
        height: 100%;
        position: relative;
        z-index: 0;
        box-sizing: border-box;
        padding: 0 40px;
        text-align: center;
    }

    .stepsWrapper .step .counter:after {
        transform: skewX(-15deg);
        transform-origin: bottom left;
        width: 100%;
        height: 100%;
        background-color: rgba(186, 52, 166, 0.829);
        position: absolute;
        top: 0;
        left: -15%;
        content: '';
        margin: 0;
        z-index: -1;
    }

    .stepsWrapper .step .stepDetails {
        float: left;
        margin-left: 60px;
        position: relative;
        top: 50px;
    }

    .stepsWrapper .step .stepDetails .detailHeading {
        margin: 0;
        overflow: hidden;
        white-space: nowrap;
    }

    .stepsWrapper .step .stepDetails .detailText {
        margin-top: 20px;
        max-width: 350px;
        max-height: 260px;
        overflow: hidden;
    }

    .amount {
        position: relative;
        left: 25px;
        top: 35px;
    }


    @-webkit-keyframes last_rotate {
        0% {
            -webkit-transform: rotateX(0deg);
            transform: rotateX(0deg);
            z-index: 1;
        }

        100% {
            -webkit-transform: rotateX(-180deg);
            transform: rotateX(-180deg);
            z-index: 0;
        }
    }

    @keyframes last_rotate {
        0% {
            -webkit-transform: rotateX(0deg);
            transform: rotateX(0deg);
            z-index: 1;
        }

        100% {
            -webkit-transform: rotateX(-180deg);
            transform: rotateX(-180deg);
            z-index: 0;
        }
    }

    @-webkit-keyframes new_rotate {
        0% {
            -webkit-transform: rotateX(0deg);
            transform: rotateX(0deg);
            z-index: 0;
        }

        100% {
            -webkit-transform: rotateX(-180deg);
            transform: rotateX(-180deg);
            z-index: 1;
        }
    }

    @keyframes new_rotate {
        0% {
            -webkit-transform: rotateX(0deg);
            transform: rotateX(0deg);
            z-index: 0;
        }

        100% {
            -webkit-transform: rotateX(-180deg);
            transform: rotateX(-180deg);
            z-index: 1;
        }
    }

    .flip-countdown {
        display: flex;
        justify-content: center;
        font-family: "Roboto", sans-serif;
        font-size: 2.1em;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        overflow: hidden;
    }

    .interval_cont {
        display: flex;
        justify-content: space-around;
        width: auto;
        overflow: hidden;
    }

    .interval_cont:nth-child(n+1):not(:last-child) {
        margin-right: 0.15em;
    }

    .description {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 0.5em;
        margin-right: 0.55em;
        font-size: 0.29em;
        font-weight: bold;
        text-transform: uppercase;
        color: #7791a8;
        text-shadow: 0.05em 0.05em 0.1em rgba(136, 110, 87, 0.3);
        overflow: hidden;
    }

    .digit_cont {
        position: relative;
        width: 1.2em;
        height: 1.5em;
        font-weight: 900;
        line-height: 1.5em;
        border-radius: 0.25em;
        color: #4c6377;
        border-bottom: 0.01em solid rgba(76, 99, 119, 0.1);
        box-shadow: 0 0.2em 0.3em -0.1em rgba(76, 99, 119, 0.1);
        -webkit-perspective: 3em;
        perspective: 3em;
        box-sizing: border-box;
        overflow: hidden;
    }

    .digit_cont:after {
        content: "";
        position: absolute;
        top: 50%;
        width: 100%;
        height: 0.015em;
        background: rgba(141, 163, 182, 0.25);
        box-shadow: 0 0.01em 0.02em 0 rgba(255, 255, 255, 0.1);
        z-index: 1;
    }

    .digit_cont:nth-child(n+1):not(:last-child) {
        margin-right: 0.05em;
    }

    .digit_cont span {
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        bottom: 50%;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .digit_cont .last_placeholder,
    .digit_cont .new_placeholder,
    .digit_cont .last_rotate,
    .digit_cont .new_rotate {
        position: absolute;
        left: 0;
        width: 100%;
        height: 50%;
        text-align: center;
        overflow: hidden;
        box-sizing: border-box;
    }

    .digit_cont .last_placeholder {
        bottom: 0;
        border-radius: 0 0 0.25em 0.25em;
        background: linear-gradient(to bottom, #dae1e8 -90%, #fff 100%), #dae1e8;
    }

    .digit_cont .new_placeholder {
        box-shadow: inset 0 0.01em 0 0 rgba(255, 255, 255, 0.5);
    }

    .digit_cont .new_placeholder,
    .digit_cont .last_rotate,
    .digit_cont .new_rotate {
        top: 0;
        border-radius: 0.25em 0.25em 0 0;
        background: linear-gradient(to bottom, #dae1e8 10%, #fff 200%), #dae1e8;
    }

    .digit_cont .last_rotate {
        -webkit-transform-origin: 100% 100%;
        transform-origin: 100% 100%;
        -webkit-animation: last_rotate 0.5s linear forwards;
        animation: last_rotate 0.5s linear forwards;
    }

    .digit_cont .new_rotate {
        border-top: 0.01em solid rgba(76, 99, 119, 0.3);
        background: linear-gradient(to top, #dae1e8 -90%, #fff 100%), #dae1e8;
        -webkit-transform-origin: 100% 100%;
        transform-origin: 100% 100%;
        -webkit-animation: new_rotate 0.5s linear forwards;
        animation: new_rotate 0.5s linear forwards;
    }

    .digit_cont .new_rotate .rotated {
        width: 100%;
        height: 100%;
        border-radius: 0 0 0.25em 0.25em;
        -webkit-transform: rotateX(180deg);
        transform: rotateX(180deg);
        overflow: hidden;
    }

    .list-group-item {
        cursor: pointer;
    }

    .form-check-input:checked {
        background-color: #613587;
        border: 2px solid #613587;
    }

    .form-check-input:focus {
        box-shadow: none;
    }

    /* Timeline container styling */
    .timeline-container {
        display: block;
        display: flex;
        gap: 33.5px;
        width: 100%;
        height: 134px;
        justify-content: center;
        font-weight: 900;
        font-size: 67px;
        position: relative;
        top: 335px;
    }

    /* Individual timeline point styling */
    .timeline-point {
        transition-duration: 0.5s;
        border-radius: 50%;
        background-image: linear-gradient(to right, #6b207a, #6b207a, #6b207a, #6b207a, #6b207a, #75207c, #80207e, #8a2080, #a12083, #b82084, #ce2284, #e32782);
        display: grid;
        place-items: center;
        width: 134px;
        position: relative;
        color: #ffff;
        font-size: 35px;
    }

    .timeline-point::before {
        content: "";
        width: 200px;
        height: 200px;
        z-index: -1;
        border-radius: 50%;
        position: absolute;
        background: conic-gradient(var(--color) var(--angle),
                transparent 0deg 360deg);
        animation: rotateBorder 1s linear var(--delay) forwards;
    }

    .timeline-point:nth-child(odd)::before {
        transform: rotate(-90deg);
    }

    .timeline-point:nth-child(even)::before {
        transform: rotate(90deg) scaleY(-1);
    }

    /* Common styling for timeline points */
    .timeline-point:nth-child(1) {
        --color: #613587;
        --delay: 0s;
    }

    .timeline-point:nth-child(2) {
        --color: #613587;
        --delay: 1s;
    }

    .timeline-point:nth-child(3) {
        --color: #613587;
        --delay: 2s;
    }

    .timeline-point:nth-child(4) {
        --color: #613587;
        --delay: 3s;
    }

    .timeline-point:nth-child(5) {
        --color: #613587;
        --delay: 4s;
    }

    /* Popup styling */
    .popup {
        width: 321.6px;
        height: auto;
        max-height: 0;
        background-color: var(--color);
        display: grid;
        grid-template-columns: 16% 84%;
        position: absolute;
        color: white;
        border-radius: 30px;

        transform-origin: bottom bottom;
        animation: expandPopup 0.5s linear calc(var(--delay) + 0.5s) forwards;
    }

    .timeline-point:nth-child(odd) .popup {
        bottom: 221.1px;
    }

    .timeline-point:nth-child(even) .popup {
        top: 221.1px;
    }

    /* Popup number styling */
    .popup-number {
        grid-row: span 2;
        display: grid;
        font-size: 2rem;
        font-weight: bold;
        place-items: center;
        cursor: auto;
        animation: fadeIn 0.5s linear calc(var(--delay) + 0.7s) forwards;
        opacity: 0;
        height: 100%;
    }

    /* Popup title styling */
    .popup-title {
        color: var(--color);
        padding-bottom: 6.7px;
        font-size: 20.1px;
        font-weight: 900;
    }

    /* Popup details styling */
    .popup-details {
        padding: 20.1px;
        height: 175px;
        border-radius: 30px;
        opacity: 0;
        font-weight: 500;
        user-select: none;
        cursor: auto;
        overflow: hidden;
        font-size: 0.8rem;
        text-align: justify;
        background: linear-gradient(145deg, #fff, #fff);
        margin: 3.35px;
        animation: fadeIn 0.5s linear calc(var(--delay) + 0.7s) forwards;
    }

    .popup::before {
        content: "";
        width: 6.7px;
        height: 0;
        border-radius: 20px;
        background-color: var(--color);
        position: absolute;
        left: 50%;
        top: -41.9px;
        display: flex;
        animation: drawLine 0.5s linear var(--delay) forwards;
    }

    .timeline-point:nth-child(odd) .popup:before {
        top: calc(100% + 47px);
        transform: rotateX(180deg);
        transform-origin: top;
    }

    /* Hover effect for timeline points */
    .timeline-point:hover {
        background-image: linear-gradient(to right, #6b207a, #6b207a, #6b207a, #6b207a, #6b207a, #75207c, #80207e, #8a2080, #a12083, #b82084, #ce2284, #e32782);
        color: white;
    }

    /* Animation for border rotation */
    @keyframes rotateBorder {
        from {
            --angle: 0deg;
        }

        to {
            --angle: 180deg;
        }
    }

    /* Animation for popup expansion */
    @keyframes expandPopup {
        0% {
            max-height: 0;
        }

        100% {
            max-height: 200px;
        }
    }

    /* Animation for line drawing */
    @keyframes drawLine {
        0% {
            height: 0%;
            opacity: 0;
        }

        100% {
            height: 33.5px;
            opacity: 1;
        }
    }

    /* Animation for fade-in effect */
    @keyframes fadeIn {
        to {
            opacity: 1;
        }
    }

    .form-control {
        background-color: #eee;
        border-color: #eee;
        color: #000000;
        border: 0;
        transition: color 0.2s ease;
    }

    .dropdown.show>.form-control,
    .form-control.active,
    .form-control.focus,
    .form-control:active,
    .form-control:focus {
        background-color: #eee;
        border-color: #eee;
        color: #000000;
        border: 0;
        transition: color 0.2s ease;
    }

    .line {
        margin-left: 7px;
        background-color: #646464;
        width: 130px;
        height: 2px;
    }

    .form-check-input:checked {
        background-color: #5f3386;
        border-color: #5f3386;
    }

    .form-check-input:focus {
        border-color: #5f3386;
        outline: 0;
        box-shadow: none;
    }

    .rg-title {
        font-family: "Rajdhani", sans-serif;
        font-weight: 600;
        font-size: 70px;
        line-height: 1.3;
    }

    .rg-sub-title {
        font-family: "Rajdhani", sans-serif;
        font-weight: 500;
        font-size: 34px;
        letter-spacing: 3px;
    }

    .overlay-register {
        background: linear-gradient(to right, rgb(61 6 109 / 50%), rgb(186 52 166 / 55%)) !important;
    }

    .event-shedule-title {
        width: 25%;
    }

    .event-shedule-description {
        width: 75%;
    }

    @media (max-width: 1050px) {
        .timeline-container {
            flex-direction: column;
            height: auto;
            width: 100%;
            padding: 100px 0px;
        }

        .timeline-point {
            height: 134px;
            flex-shrink: 0;
            left: calc(-321px / 2);
            margin: 0px auto;
            position: relative;
        }

        .timeline-point:nth-child(odd)::before {
            transform: rotate(0deg);
        }

        .timeline-point:nth-child(even)::before {
            transform: rotate(0deg) scaleX(-1);
        }

        .timeline-point .popup:before {
            display: none;
        }

        .timeline-point:nth-child(odd) .popup {
            bottom: auto;
            right: -370.1px;
        }

        .timeline-point:nth-child(even) .popup {
            top: auto;
            right: -370.1px;
        }

    }

    @media all and (max-width: 1290px) {

        .stepsWrapper {
            flex-wrap: wrap;
            padding: 0;
        }

        .stepsWrapper .step {
            width: 100%;
        }

        .stepsWrapper .step .counter {
            background-color: rgba(186, 52, 166, 0.829);
        }

        .stepsWrapper .step .counter:after {
            display: none;
        }

        .stepsWrapper .step .stepDetails {
            float: none;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -webkit-box-align: center;
            align-items: center;
        }

        .stepsWrapper .step .stepDetails .detailText {
            max-width: initial;
        }
    }

    @media all and (min-width: 1490px) {
        .amount {
            position: relative;
            left: 20px !important;
            top: 35px;
        }

        .stepsWrapper {
            height: 260px !important;
        }
    }

    @media only screen and (min-width: 1200px) {
        .stepsWrapper {
            height: 100%;
        }

        .stepsWrapper .step {
            height: auto;
        }

        .amount {
            position: relative;
            left: 0px;
            top: 35px;
        }

        .stepsWrapper .step .counter {
            width: 100px;
        }
    }

    .text-container h1 {
        font-size: 3.5rem;
        font-weight: bold;
        margin: 0;
        width: 50%;
    }

    .event-titles-home {
        font-size: 3.5rem;
        font-weight: bold;
        margin: 0;
        width: 80%;
    }

    .join-register {
        text-align: end;
    }

    @media only screen and (max-width: 400px) {
        /* .overview-section {
            display: none;
        } */

        .text-container h1 {
            font-size: 30px;
            font-weight: bold;
            margin: 0;
            width: 100% !important;
        }

        .left-text {
            text-align: center;
            left: 0;
            right: 0;
        }

        .image-container img {
            height: 570px;
        }

        .event-title {
            font-size: 14px;
        }

        .menu-items {
            color: #fff;
        }

        .for-mobile {
            background: rgb(186, 52, 166);
            padding: 14px;
        }

        .text-container {
            position: absolute;
            top: 50%;
        }

        .join-content {
            text-align: center;

        }

        .join-register {
            text-align: center;
        }

        .stepsWrapper {
            height: auto;
        }

        .stepsWrapper .step {
            margin: 0;
        }

        .stepsWrapper .step .stepDetails {
            padding: 30px;
            text-align: center;
            top: 0;
            margin-left: 0;
        }

        .stepsWrapper .step .counter {
            display: none;
        }

        .overview-section {
            text-align: center;
        }

        .check_eligibility {
            flex-direction: column;
            text-align: start;
        }

        .check-avil-section {
            text-align: center;
        }

        .participage-text {
            font-size: 16px;
        }

        .action-bg {
            text-align: center;
        }

        .event-shedule-title {
            width: 50%;
        }

        .event-shedule-description {
            width: 50%;
        }

        .event-step-nav {
            flex-direction: column;
        }

        .stepper-item {
            margin-bottom: 11px;
        }

        .event-step-nav {
            width: 65%;
        }
    }
</style>
