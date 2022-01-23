<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    {{--
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" /> --}}

    <!-- Fonts -->
    {{--
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> --}}
    {{--
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- Styles -->


    {{-- @livewireStyles --}}

    <!-- Scripts -->
    {{--
    <link rel="stylesheet" href="C:\xampp\htdocs\portofolio_siswa\public\css\app.css"> --}}

    {{-- <script src="C:\xampp\htdocs\portofolio_siswa\public\js\app.js" defer></script> --}}
   
    
    <style>
      /*! tailwindcss v3.0.15 | MIT License | https://tailwindcss.com*/
*, :after, :before {
    border: 0 solid #e5e7eb;
    box-sizing: border-box
}

:after, :before {
    --tw-content: ""
}

html {
    -webkit-text-size-adjust: 100%;
    font-family: Nunito, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
    line-height: 1.5;
    -moz-tab-size: 4;
    -o-tab-size: 4;
    tab-size: 4
}

body {
    line-height: inherit;
    margin: 0
}

h2, h3 {
    font-size: inherit;
    font-weight: inherit
}

a {
    color: inherit;
    text-decoration: inherit
}

code {
    font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace;
    font-size: 1em
}

table {
    border-collapse: collapse;
    border-color: inherit;
    text-indent: 0
}

button, input {
    color: inherit;
    font-family: inherit;
    font-size: 100%;
    line-height: inherit;
    margin: 0;
    padding: 0
}

button {
    text-transform: none
}

[type=button], [type=reset], [type=submit], button {
    -webkit-appearance: button;
    background-color: transparent;
    background-image: none
}

dd, h2, h3, menu, p, ul {
    margin: 0
}

menu, ul {
    list-style: none;
    padding: 0
}

input::-moz-placeholder {
    color: #9ca3af;
    opacity: 1
}

input:-ms-input-placeholder {
    color: #9ca3af;
    opacity: 1
}

input::placeholder {
    color: #9ca3af;
    opacity: 1
}

[role=button], button {
    cursor: pointer
}

img, svg, video {
    display: block;
    vertical-align: middle
}

img, video {
    height: auto;
    max-width: 100%
}

[hidden] {
    display: none
}

[multiple], [type=date], [type=email], [type=password], [type=text], [type=url] {
    --tw-shadow: 0 0 #0000;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-color: #fff;
    border-color: #6b7280;
    border-radius: 0;
    border-width: 1px;
    font-size: 1rem;
    line-height: 1.5rem;
    padding: .5rem .75rem
}

[multiple]:focus, [type=date]:focus, [type=email]:focus, [type=password]:focus, [type=text]:focus, [type=url]:focus {
    --tw-ring-inset: var(--tw-empty,
            /*!*/
            /*!*/
        );
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: #2563eb;
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    border-color: #2563eb;
    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
    outline: 2px solid transparent;
    outline-offset: 2px
}

input::-moz-placeholder {
    color: #6b7280;
    opacity: 1
}

input:-ms-input-placeholder {
    color: #6b7280;
    opacity: 1
}

input::placeholder {
    color: #6b7280;
    opacity: 1
}

[multiple] {
    -webkit-print-color-adjust: unset;
    background-image: none;
    background-position: 0 0;
    background-repeat: unset;
    background-size: initial;
    color-adjust: unset;
    padding-right: .75rem
}

[type=file] {
    background: unset;
    border-color: inherit;
    border-radius: 0;
    border-width: 0;
    font-size: unset;
    line-height: inherit;
    padding: 0
}

[type=file]:focus {
    outline: 1px auto -webkit-focus-ring-color
}

*, :after, :before {
    --tw-translate-x: 0;
    --tw-translate-y: 0;
    --tw-rotate: 0;
    --tw-skew-x: 0;
    --tw-skew-y: 0;
    --tw-scale-x: 1;
    --tw-scale-y: 1;
    --tw-pan-x: ;
    --tw-pan-y: ;
    --tw-pinch-zoom: ;
    --tw-scroll-snap-strictness: proximity;
    --tw-ordinal: ;
    --tw-slashed-zero: ;
    --tw-numeric-figure: ;
    --tw-numeric-spacing: ;
    --tw-numeric-fraction: ;
    --tw-ring-inset: ;
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: rgba(59, 130, 246, .5);
    --tw-ring-offset-shadow: 0 0 #0000;
    --tw-ring-shadow: 0 0 #0000;
    --tw-shadow: 0 0 #0000;
    --tw-shadow-colored: 0 0 #0000;
    --tw-blur: ;
    --tw-brightness: ;
    --tw-contrast: ;
    --tw-grayscale: ;
    --tw-hue-rotate: ;
    --tw-invert: ;
    --tw-saturate: ;
    --tw-sepia: ;
    --tw-drop-shadow: ;
    --tw-backdrop-blur: ;
    --tw-backdrop-brightness: ;
    --tw-backdrop-contrast: ;
    --tw-backdrop-grayscale: ;
    --tw-backdrop-hue-rotate: ;
    --tw-backdrop-invert: ;
    --tw-backdrop-opacity: ;
    --tw-backdrop-saturate: ;
    --tw-backdrop-sepia:
}

.container {
    width: 100%
}

@media (min-width:640px) {
    .container {
        max-width: 640px
    }
}

@media (min-width:768px) {
    .container {
        max-width: 768px
    }
}

@media (min-width:1024px) {
    .container {
        max-width: 1024px
    }
}

@media (min-width:1280px) {
    .container {
        max-width: 1280px
    }
}

@media (min-width:1536px) {
    .container {
        max-width: 1536px
    }
}

.prose {
    color: var(--tw-prose-body);
    max-width: 65ch
}

.prose :where([class~=lead]):not(:where([class~=not-prose] *)) {
    color: var(--tw-prose-lead);
    font-size: 1.25em;
    line-height: 1.6;
    margin-bottom: 1.2em;
    margin-top: 1.2em
}

.prose :where(a):not(:where([class~=not-prose] *)) {
    color: var(--tw-prose-links);
    font-weight: 500;
    text-decoration: underline
}

.prose :where(strong):not(:where([class~=not-prose] *)) {
    color: var(--tw-prose-bold);
    font-weight: 600
}

.prose :where(ol):not(:where([class~=not-prose] *)) {
    list-style-type: decimal;
    padding-left: 1.625em
}

.prose :where(ol[type=A]):not(:where([class~=not-prose] *)) {
    list-style-type: upper-alpha
}

.prose :where(ol[type=a]):not(:where([class~=not-prose] *)) {
    list-style-type: lower-alpha
}

.prose :where(ol[type=A s]):not(:where([class~=not-prose] *)) {
    list-style-type: upper-alpha
}

.prose :where(ol[type=a s]):not(:where([class~=not-prose] *)) {
    list-style-type: lower-alpha
}

.prose :where(ol[type=I]):not(:where([class~=not-prose] *)) {
    list-style-type: upper-roman
}

.prose :where(ol[type=i]):not(:where([class~=not-prose] *)) {
    list-style-type: lower-roman
}

.prose :where(ol[type=I s]):not(:where([class~=not-prose] *)) {
    list-style-type: upper-roman
}

.prose :where(ol[type=i s]):not(:where([class~=not-prose] *)) {
    list-style-type: lower-roman
}

.prose :where(ol[type="1"]):not(:where([class~=not-prose] *)) {
    list-style-type: decimal
}

.prose :where(ul):not(:where([class~=not-prose] *)) {
    list-style-type: disc;
    padding-left: 1.625em
}

.prose :where(ol>li):not(:where([class~=not-prose] *))::marker {
    color: var(--tw-prose-counters);
    font-weight: 400
}

.prose :where(ul>li):not(:where([class~=not-prose] *))::marker {
    color: var(--tw-prose-bullets)
}

.prose :where(hr):not(:where([class~=not-prose] *)) {
    border-color: var(--tw-prose-hr);
    border-top-width: 1px;
    margin-bottom: 3em;
    margin-top: 3em
}

.prose :where(blockquote):not(:where([class~=not-prose] *)) {
    border-left-color: var(--tw-prose-quote-borders);
    border-left-width: .25rem;
    color: var(--tw-prose-quotes);
    font-style: italic;
    font-weight: 500;
    margin-bottom: 1.6em;
    margin-top: 1.6em;
    padding-left: 1em;
    quotes: "\201C""\201D""\2018""\2019"
}

.prose :where(blockquote p:first-of-type):not(:where([class~=not-prose] *)):before {
    content: open-quote
}

.prose :where(blockquote p:last-of-type):not(:where([class~=not-prose] *)):after {
    content: close-quote
}

.prose :where(h1):not(:where([class~=not-prose] *)) {
    color: var(--tw-prose-headings);
    font-size: 2.25em;
    font-weight: 800;
    line-height: 1.1111111;
    margin-bottom: .8888889em;
    margin-top: 0
}

.prose :where(h1 strong):not(:where([class~=not-prose] *)) {
    font-weight: 900
}

.prose :where(h2):not(:where([class~=not-prose] *)) {
    color: var(--tw-prose-headings);
    font-size: 1.5em;
    font-weight: 700;
    line-height: 1.3333333;
    margin-bottom: 1em;
    margin-top: 2em
}

.prose :where(h2 strong):not(:where([class~=not-prose] *)) {
    font-weight: 800
}

.prose :where(h3):not(:where([class~=not-prose] *)) {
    color: var(--tw-prose-headings);
    font-size: 1.25em;
    font-weight: 600;
    line-height: 1.6;
    margin-bottom: .6em;
    margin-top: 1.6em
}

.prose :where(h3 strong):not(:where([class~=not-prose] *)) {
    font-weight: 700
}

.prose :where(h4):not(:where([class~=not-prose] *)) {
    color: var(--tw-prose-headings);
    font-weight: 600;
    line-height: 1.5;
    margin-bottom: .5em;
    margin-top: 1.5em
}

.prose :where(h4 strong):not(:where([class~=not-prose] *)) {
    font-weight: 700
}

.prose :where(figure>*):not(:where([class~=not-prose] *)) {
    margin-bottom: 0;
    margin-top: 0
}

.prose :where(figcaption):not(:where([class~=not-prose] *)) {
    color: var(--tw-prose-captions);
    font-size: .875em;
    line-height: 1.4285714;
    margin-top: .8571429em
}

.prose :where(code):not(:where([class~=not-prose] *)) {
    color: var(--tw-prose-code);
    font-size: .875em;
    font-weight: 600
}

.prose :where(code):not(:where([class~=not-prose] *)):before {
    content: "`"
}

.prose :where(code):not(:where([class~=not-prose] *)):after {
    content: "`"
}

.prose :where(a code):not(:where([class~=not-prose] *)) {
    color: var(--tw-prose-links)
}

.prose :where(pre):not(:where([class~=not-prose] *)) {
    background-color: var(--tw-prose-pre-bg);
    border-radius: .375rem;
    color: var(--tw-prose-pre-code);
    font-size: .875em;
    font-weight: 400;
    line-height: 1.7142857;
    margin-bottom: 1.7142857em;
    margin-top: 1.7142857em;
    overflow-x: auto;
    padding: .8571429em 1.1428571em
}

.prose :where(pre code):not(:where([class~=not-prose] *)) {
    background-color: transparent;
    border-radius: 0;
    border-width: 0;
    color: inherit;
    font-family: inherit;
    font-size: inherit;
    font-weight: inherit;
    line-height: inherit;
    padding: 0
}

.prose :where(pre code):not(:where([class~=not-prose] *)):before {
    content: none
}

.prose :where(pre code):not(:where([class~=not-prose] *)):after {
    content: none
}

.prose :where(table):not(:where([class~=not-prose] *)) {
    font-size: .875em;
    line-height: 1.7142857;
    margin-bottom: 2em;
    margin-top: 2em;
    table-layout: auto;
    text-align: left;
    width: 100%
}

.prose :where(thead):not(:where([class~=not-prose] *)) {
    border-bottom-color: var(--tw-prose-th-borders);
    border-bottom-width: 1px
}

.prose :where(thead th):not(:where([class~=not-prose] *)) {
    color: var(--tw-prose-headings);
    font-weight: 600;
    padding-bottom: .5714286em;
    padding-left: .5714286em;
    padding-right: .5714286em;
    vertical-align: bottom
}

.prose :where(tbody tr):not(:where([class~=not-prose] *)) {
    border-bottom-color: var(--tw-prose-td-borders);
    border-bottom-width: 1px
}

.prose :where(tbody tr:last-child):not(:where([class~=not-prose] *)) {
    border-bottom-width: 0
}

.prose :where(tbody td):not(:where([class~=not-prose] *)) {
    padding: .5714286em;
    vertical-align: baseline
}

.prose {
    --tw-prose-body: #374151;
    --tw-prose-headings: #111827;
    --tw-prose-lead: #4b5563;
    --tw-prose-links: #111827;
    --tw-prose-bold: #111827;
    --tw-prose-counters: #6b7280;
    --tw-prose-bullets: #d1d5db;
    --tw-prose-hr: #e5e7eb;
    --tw-prose-quotes: #111827;
    --tw-prose-quote-borders: #e5e7eb;
    --tw-prose-captions: #6b7280;
    --tw-prose-code: #111827;
    --tw-prose-pre-code: #e5e7eb;
    --tw-prose-pre-bg: #1f2937;
    --tw-prose-th-borders: #d1d5db;
    --tw-prose-td-borders: #e5e7eb;
    --tw-prose-invert-body: #d1d5db;
    --tw-prose-invert-headings: #fff;
    --tw-prose-invert-lead: #9ca3af;
    --tw-prose-invert-links: #fff;
    --tw-prose-invert-bold: #fff;
    --tw-prose-invert-counters: #9ca3af;
    --tw-prose-invert-bullets: #4b5563;
    --tw-prose-invert-hr: #374151;
    --tw-prose-invert-quotes: #f3f4f6;
    --tw-prose-invert-quote-borders: #374151;
    --tw-prose-invert-captions: #9ca3af;
    --tw-prose-invert-code: #fff;
    --tw-prose-invert-pre-code: #d1d5db;
    --tw-prose-invert-pre-bg: rgba(0, 0, 0, .5);
    --tw-prose-invert-th-borders: #4b5563;
    --tw-prose-invert-td-borders: #374151;
    font-size: 1rem;
    line-height: 1.75
}

.prose :where(p):not(:where([class~=not-prose] *)) {
    margin-bottom: 1.25em;
    margin-top: 1.25em
}

.prose :where(img):not(:where([class~=not-prose] *)) {
    margin-bottom: 2em;
    margin-top: 2em
}

.prose :where(video):not(:where([class~=not-prose] *)) {
    margin-bottom: 2em;
    margin-top: 2em
}

.prose :where(figure):not(:where([class~=not-prose] *)) {
    margin-bottom: 2em;
    margin-top: 2em
}

.prose :where(h2 code):not(:where([class~=not-prose] *)) {
    font-size: .875em
}

.prose :where(h3 code):not(:where([class~=not-prose] *)) {
    font-size: .9em
}

.prose :where(li):not(:where([class~=not-prose] *)) {
    margin-bottom: .5em;
    margin-top: .5em
}

.prose :where(ol>li):not(:where([class~=not-prose] *)) {
    padding-left: .375em
}

.prose :where(ul>li):not(:where([class~=not-prose] *)) {
    padding-left: .375em
}

.prose>:where(ul>li p):not(:where([class~=not-prose] *)) {
    margin-bottom: .75em;
    margin-top: .75em
}

.prose>:where(ul>li>:first-child):not(:where([class~=not-prose] *)) {
    margin-top: 1.25em
}

.prose>:where(ul>li>:last-child):not(:where([class~=not-prose] *)) {
    margin-bottom: 1.25em
}

.prose>:where(ol>li>:first-child):not(:where([class~=not-prose] *)) {
    margin-top: 1.25em
}

.prose>:where(ol>li>:last-child):not(:where([class~=not-prose] *)) {
    margin-bottom: 1.25em
}

.prose :where(ul ul, ul ol, ol ul, ol ol):not(:where([class~=not-prose] *)) {
    margin-bottom: .75em;
    margin-top: .75em
}

.prose :where(hr+*):not(:where([class~=not-prose] *)) {
    margin-top: 0
}

.prose :where(h2+*):not(:where([class~=not-prose] *)) {
    margin-top: 0
}

.prose :where(h3+*):not(:where([class~=not-prose] *)) {
    margin-top: 0
}

.prose :where(h4+*):not(:where([class~=not-prose] *)) {
    margin-top: 0
}

.prose :where(thead th:first-child):not(:where([class~=not-prose] *)) {
    padding-left: 0
}

.prose :where(thead th:last-child):not(:where([class~=not-prose] *)) {
    padding-right: 0
}

.prose :where(tbody td:first-child):not(:where([class~=not-prose] *)) {
    padding-left: 0
}

.prose :where(tbody td:last-child):not(:where([class~=not-prose] *)) {
    padding-right: 0
}

.prose>:where(:first-child):not(:where([class~=not-prose] *)) {
    margin-top: 0
}

.prose>:where(:last-child):not(:where([class~=not-prose] *)) {
    margin-bottom: 0
}

.invisible {
    visibility: hidden
}

.fixed {
    position: fixed
}

.absolute {
    position: absolute
}

.relative {
    position: relative
}

.inset-0 {
    bottom: 0;
    left: 0;
    right: 0;
    top: 0
}

.right-0 {
    right: 0
}

.top-0 {
    top: 0
}

.z-20 {
    z-index: 20
}

.z-30 {
    z-index: 30
}

.col-span-6 {
    grid-column: span 6/span 6
}

.float-right {
    float: right
}

.m-8 {
    margin: 2rem
}

.mx-auto {
    margin-left: auto;
    margin-right: auto
}

.my-2 {
    margin-bottom: .5rem;
    margin-top: .5rem
}

.my-4 {
    margin-bottom: 1rem;
    margin-top: 1rem
}

.mx-2 {
    margin-left: .5rem;
    margin-right: .5rem
}

.my-10 {
    margin-bottom: 2.5rem;
    margin-top: 2.5rem
}

.ml-3 {
    margin-left: .75rem
}

.mt-5 {
    margin-top: 1.25rem
}

.mt-6 {
    margin-top: 1.5rem
}

.mt-3 {
    margin-top: .75rem
}

.mt-2 {
    margin-top: .5rem
}

.mt-4 {
    margin-top: 1rem
}

.mt-1 {
    margin-top: .25rem
}

.mr-2 {
    margin-right: .5rem
}

.mt-8 {
    margin-top: 2rem
}

.ml-4 {
    margin-left: 1rem
}

.ml-12 {
    margin-left: 3rem
}

.ml-1 {
    margin-left: .25rem
}

.ml-2 {
    margin-left: .5rem
}

.-mr-0\.5 {
    margin-right: -.125rem
}

.-mr-2 {
    margin-right: -.5rem
}

.mr-3 {
    margin-right: .75rem
}

.mt-10 {
    margin-top: 2.5rem
}

.ml-6 {
    margin-left: 1.5rem
}

.mb-4 {
    margin-bottom: 1rem
}

.mb-2 {
    margin-bottom: .5rem
}

.mb-1 {
    margin-bottom: .25rem
}

.mt-0 {
    margin-top: 0
}

.mt-12 {
    margin-top: 3rem
}

.-mt-px {
    margin-top: -1px
}

.mr-6 {
    margin-right: 1.5rem
}

.block {
    display: block
}

.inline-block {
    display: inline-block
}

.flex {
    display: flex
}

.inline-flex {
    display: inline-flex
}

.table {
    display: table
}

.grid {
    display: grid
}

.hidden {
    display: none
}

.h-5 {
    height: 1.25rem
}

.h-16 {
    height: 4rem
}

.h-12 {
    height: 3rem
}

.h-6 {
    height: 1.5rem
}

.h-8 {
    height: 2rem
}

.h-4 {
    height: 1rem
}

.h-9 {
    height: 2.25rem
}

.h-10 {
    height: 2.5rem
}

.h-20 {
    height: 5rem
}

.h-full {
    height: 100%
}

.h-2 {
    height: .5rem
}

.h-3 {
    height: .75rem
}

.h-screen {
    height: 100vh
}

.h-28 {
    height: 7rem
}

.min-h-screen {
    min-height: 100vh
}

.w-5 {
    width: 1.25rem
}

.w-full {
    width: 100%
}

.w-6 {
    width: 1.5rem
}

.w-3\/4 {
    width: 75%
}

.w-auto {
    width: auto
}

.w-8 {
    width: 2rem
}

.w-4 {
    width: 1rem
}

.w-60 {
    width: 15rem
}

.w-10 {
    width: 2.5rem
}

.w-20 {
    width: 5rem
}

.w-1\/3 {
    width: 33.333333%
}

.w-2\/3 {
    width: 66.666667%
}

.w-1\/2 {
    width: 50%
}

.w-3 {
    width: .75rem
}

.w-28 {
    width: 7rem
}

.min-w-full {
    min-width: 100%
}

.max-w-7xl {
    max-width: 80rem
}

.max-w-xl {
    max-width: 36rem
}

.max-w-3xl {
    max-width: 48rem
}

.max-w-6xl {
    max-width: 72rem
}

.flex-1 {
    flex: 1 1 0%
}

.shrink-0 {
    flex-shrink: 0
}

.flex-grow {
    flex-grow: 1
}

.scale-100 {
    --tw-scale-x: 1;
    --tw-scale-y: 1
}

.scale-0, .scale-100 {
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.scale-0 {
    --tw-scale-x: 0;
    --tw-scale-y: 0
}

.transform {
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.cursor-pointer {
    cursor: pointer
}

.list-inside {
    list-style-position: inside
}

.list-disc {
    list-style-type: disc
}

.list-none {
    list-style-type: none
}

.appearance-none {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none
}

.grid-cols-1 {
    grid-template-columns: repeat(1, minmax(0, 1fr))
}

.flex-col {
    flex-direction: column
}

.flex-wrap {
    flex-wrap: wrap
}

.items-center {
    align-items: center
}

.justify-end {
    justify-content: flex-end
}

.justify-center {
    justify-content: center
}

.justify-between {
    justify-content: space-between
}

.gap-4 {
    gap: 1rem
}

.gap-1 {
    gap: .25rem
}

.gap-2 {
    gap: .5rem
}

.gap-y-3 {
    row-gap: .75rem
}

.space-x-8>:not([hidden])~:not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-left: calc(2rem*(1 - var(--tw-space-x-reverse)));
    margin-right: calc(2rem*var(--tw-space-x-reverse))
}

.space-y-1>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-bottom: calc(.25rem*var(--tw-space-y-reverse));
    margin-top: calc(.25rem*(1 - var(--tw-space-y-reverse)))
}

.space-y-6>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-bottom: calc(1.5rem*var(--tw-space-y-reverse));
    margin-top: calc(1.5rem*(1 - var(--tw-space-y-reverse)))
}

.overflow-auto {
    overflow: auto
}

.overflow-hidden {
    overflow: hidden
}

.overflow-y-auto {
    overflow-y: auto
}

.overflow-y-hidden {
    overflow-y: hidden
}

.rounded-md {
    border-radius: .375rem
}

.rounded-lg {
    border-radius: .5rem
}

.rounded {
    border-radius: .25rem
}

.rounded-full {
    border-radius: 9999px
}

.rounded-2xl {
    border-radius: 1rem
}

.border {
    border-width: 1px
}

.border-2 {
    border-width: 2px
}

.border-y-2 {
    border-top-width: 2px
}

.border-b-2, .border-y-2 {
    border-bottom-width: 2px
}

.border-t {
    border-top-width: 1px
}

.border-b {
    border-bottom-width: 1px
}

.border-r-2 {
    border-right-width: 2px
}

.border-gray-300 {
    --tw-border-opacity: 1;
    border-color: rgb(209 213 219/var(--tw-border-opacity))
}

.border-transparent {
    border-color: transparent
}

.border-gray-200 {
    --tw-border-opacity: 1;
    border-color: rgb(229 231 235/var(--tw-border-opacity))
}

.border-gray-100 {
    --tw-border-opacity: 1;
    border-color: rgb(243 244 246/var(--tw-border-opacity))
}

.border-gray-600 {
    --tw-border-opacity: 1;
    border-color: rgb(75 85 99/var(--tw-border-opacity))
}

.border-gray-400 {
    --tw-border-opacity: 1;
    border-color: rgb(156 163 175/var(--tw-border-opacity))
}

.bg-white {
    --tw-bg-opacity: 1;
    background-color: rgb(255 255 255/var(--tw-bg-opacity))
}

.bg-gray-100 {
    --tw-bg-opacity: 1;
    background-color: rgb(243 244 246/var(--tw-bg-opacity))
}

.bg-red-600 {
    --tw-bg-opacity: 1;
    background-color: rgb(220 38 38/var(--tw-bg-opacity))
}

.bg-gray-50 {
    --tw-bg-opacity: 1;
    background-color: rgb(249 250 251/var(--tw-bg-opacity))
}

.bg-gray-200 {
    --tw-bg-opacity: 1;
    background-color: rgb(229 231 235/var(--tw-bg-opacity))
}

.bg-green-600 {
    --tw-bg-opacity: 1;
    background-color: rgb(22 163 74/var(--tw-bg-opacity))
}

.bg-yellow-600 {
    --tw-bg-opacity: 1;
    background-color: rgb(202 138 4/var(--tw-bg-opacity))
}

.bg-green-500 {
    --tw-bg-opacity: 1;
    background-color: rgb(34 197 94/var(--tw-bg-opacity))
}

.bg-gray-900 {
    --tw-bg-opacity: 1;
    background-color: rgb(17 24 39/var(--tw-bg-opacity))
}

.bg-opacity-50 {
    --tw-bg-opacity: 0.5
}

.bg-cover {
    background-size: cover
}

.bg-center {
    background-position: 50%
}

.bg-no-repeat {
    background-repeat: no-repeat
}

.fill-current {
    fill: currentColor
}

.object-cover {
    -o-object-fit: cover;
    object-fit: cover
}

.object-center {
    -o-object-position: center;
    object-position: center
}

.p-2 {
    padding: .5rem
}

.p-6 {
    padding: 1.5rem
}

.p-4 {
    padding: 1rem
}

.p-8 {
    padding: 2rem
}

.px-4 {
    padding-left: 1rem;
    padding-right: 1rem
}

.py-2 {
    padding-bottom: .5rem;
    padding-top: .5rem
}

.px-2 {
    padding-left: .5rem;
    padding-right: .5rem
}

.px-6 {
    padding-left: 1.5rem;
    padding-right: 1.5rem
}

.py-4 {
    padding-bottom: 1rem;
    padding-top: 1rem
}

.px-3 {
    padding-left: .75rem;
    padding-right: .75rem
}

.py-1 {
    padding-bottom: .25rem;
    padding-top: .25rem
}

.py-3 {
    padding-bottom: .75rem;
    padding-top: .75rem
}

.py-6 {
    padding-bottom: 1.5rem;
    padding-top: 1.5rem
}

.py-10 {
    padding-bottom: 2.5rem;
    padding-top: 2.5rem
}

.px-8 {
    padding-left: 2rem;
    padding-right: 2rem
}

.pt-6 {
    padding-top: 1.5rem
}

.pr-4 {
    padding-right: 1rem
}

.pt-2 {
    padding-top: .5rem
}

.pb-3 {
    padding-bottom: .75rem
}

.pt-4 {
    padding-top: 1rem
}

.pb-1 {
    padding-bottom: .25rem
}

.pl-2 {
    padding-left: .5rem
}

.pt-3 {
    padding-top: .75rem
}

.pr-0 {
    padding-right: 0
}

.pl-4 {
    padding-left: 1rem
}

.pt-8 {
    padding-top: 2rem
}

.pl-1 {
    padding-left: .25rem
}

.text-left {
    text-align: left
}

.text-center {
    text-align: center
}

.text-justify {
    text-align: justify
}

.align-middle {
    vertical-align: middle
}

.font-sans {
    font-family: Nunito, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji
}

.font-mono {
    font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace
}

.text-sm {
    font-size: .875rem;
    line-height: 1.25rem
}

.text-xs {
    font-size: .75rem;
    line-height: 1rem
}

.text-lg {
    font-size: 1.125rem;
    line-height: 1.75rem
}

.text-base {
    font-size: 1rem;
    line-height: 1.5rem
}

.text-xl {
    font-size: 1.25rem;
    line-height: 1.75rem
}

.font-medium {
    font-weight: 500
}

.font-semibold {
    font-weight: 600
}

.font-bold {
    font-weight: 700
}

.font-light {
    font-weight: 300
}

.uppercase {
    text-transform: uppercase
}

.italic {
    font-style: italic
}

.leading-7 {
    line-height: 1.75rem
}

.leading-tight {
    line-height: 1.25
}

.leading-4 {
    line-height: 1rem
}

.leading-relaxed {
    line-height: 1.625
}

.leading-normal {
    line-height: 1.5
}

.tracking-widest {
    letter-spacing: .1em
}

.tracking-normal {
    letter-spacing: 0
}

.text-gray-500 {
    --tw-text-opacity: 1;
    color: rgb(107 114 128/var(--tw-text-opacity))
}

.text-gray-700 {
    --tw-text-opacity: 1;
    color: rgb(55 65 81/var(--tw-text-opacity))
}

.text-gray-600 {
    --tw-text-opacity: 1;
    color: rgb(75 85 99/var(--tw-text-opacity))
}

.text-white {
    --tw-text-opacity: 1;
    color: rgb(255 255 255/var(--tw-text-opacity))
}

.text-gray-900 {
    --tw-text-opacity: 1;
    color: rgb(17 24 39/var(--tw-text-opacity))
}

.text-gray-400 {
    --tw-text-opacity: 1;
    color: rgb(156 163 175/var(--tw-text-opacity))
}

.text-gray-800 {
    --tw-text-opacity: 1;
    color: rgb(31 41 55/var(--tw-text-opacity))
}

.text-red-500 {
    --tw-text-opacity: 1;
    color: rgb(239 68 68/var(--tw-text-opacity))
}

.text-green-600 {
    --tw-text-opacity: 1;
    color: rgb(22 163 74/var(--tw-text-opacity))
}

.text-green-500 {
    --tw-text-opacity: 1;
    color: rgb(34 197 94/var(--tw-text-opacity))
}

.text-gray-200 {
    --tw-text-opacity: 1;
    color: rgb(229 231 235/var(--tw-text-opacity))
}

.text-gray-100 {
    --tw-text-opacity: 1;
    color: rgb(243 244 246/var(--tw-text-opacity))
}

.text-gray-300 {
    --tw-text-opacity: 1;
    color: rgb(209 213 219/var(--tw-text-opacity))
}

.underline {
    -webkit-text-decoration-line: underline;
    text-decoration-line: underline
}

.no-underline {
    -webkit-text-decoration-line: none;
    text-decoration-line: none
}

.antialiased {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}

.opacity-0 {
    opacity: 0
}

.opacity-100 {
    opacity: 1
}

.shadow {
    --tw-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px -1px rgba(0, 0, 0, .1);
    --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color)
}

.shadow, .shadow-md {
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
}

.shadow-md {
    --tw-shadow: 0 4px 6px -1px rgba(0, 0, 0, .1), 0 2px 4px -2px rgba(0, 0, 0, .1);
    --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color)
}

.shadow-lg {
    --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, .1), 0 4px 6px -4px rgba(0, 0, 0, .1);
    --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
}

.transition {
    transition-duration: .15s;
    transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
    transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
    transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
    transition-timing-function: cubic-bezier(.4, 0, .2, 1)
}

.duration-300 {
    transition-duration: .3s
}

.hover\:border-teal-500:hover {
    --tw-border-opacity: 1;
    border-color: rgb(20 184 166/var(--tw-border-opacity))
}

.hover\:bg-gray-700:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(55 65 81/var(--tw-bg-opacity))
}

.hover\:bg-gray-100:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(243 244 246/var(--tw-bg-opacity))
}

.hover\:bg-gray-50:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(249 250 251/var(--tw-bg-opacity))
}

.hover\:bg-gray-800:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(31 41 55/var(--tw-bg-opacity))
}

.hover\:text-gray-500:hover {
    --tw-text-opacity: 1;
    color: rgb(107 114 128/var(--tw-text-opacity))
}

.hover\:text-gray-700:hover {
    --tw-text-opacity: 1;
    color: rgb(55 65 81/var(--tw-text-opacity))
}

.hover\:text-gray-800:hover {
    --tw-text-opacity: 1;
    color: rgb(31 41 55/var(--tw-text-opacity))
}

.hover\:text-gray-900:hover {
    --tw-text-opacity: 1;
    color: rgb(17 24 39/var(--tw-text-opacity))
}

.hover\:text-gray-100:hover {
    --tw-text-opacity: 1;
    color: rgb(243 244 246/var(--tw-text-opacity))
}

.hover\:no-underline:hover {
    -webkit-text-decoration-line: none;
    text-decoration-line: none
}

.focus\:border-gray-900:focus {
    --tw-border-opacity: 1;
    border-color: rgb(17 24 39/var(--tw-border-opacity))
}

.focus\:border-gray-300:focus {
    --tw-border-opacity: 1;
    border-color: rgb(209 213 219/var(--tw-border-opacity))
}

.focus\:bg-gray-100:focus {
    --tw-bg-opacity: 1;
    background-color: rgb(243 244 246/var(--tw-bg-opacity))
}

.focus\:bg-gray-50:focus {
    --tw-bg-opacity: 1;
    background-color: rgb(249 250 251/var(--tw-bg-opacity))
}

.focus\:text-gray-500:focus {
    --tw-text-opacity: 1;
    color: rgb(107 114 128/var(--tw-text-opacity))
}

.focus\:outline-none:focus {
    outline: 2px solid transparent;
    outline-offset: 2px
}

.focus\:ring:focus {
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
}

.focus\:ring-gray-300:focus {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(209 213 219/var(--tw-ring-opacity))
}

.active\:bg-gray-900:active {
    --tw-bg-opacity: 1;
    background-color: rgb(17 24 39/var(--tw-bg-opacity))
}

.active\:bg-gray-50:active {
    --tw-bg-opacity: 1;
    background-color: rgb(249 250 251/var(--tw-bg-opacity))
}

.disabled\:opacity-25:disabled {
    opacity: .25
}

@media (prefers-color-scheme:dark) {
    .dark\:border-gray-700 {
        --tw-border-opacity: 1;
        border-color: rgb(55 65 81/var(--tw-border-opacity))
    }

    .dark\:bg-gray-900 {
        --tw-bg-opacity: 1;
        background-color: rgb(17 24 39/var(--tw-bg-opacity))
    }

    .dark\:bg-gray-800 {
        --tw-bg-opacity: 1;
        background-color: rgb(31 41 55/var(--tw-bg-opacity))
    }

    .dark\:text-gray-500 {
        --tw-text-opacity: 1;
        color: rgb(107 114 128/var(--tw-text-opacity))
    }

    .dark\:text-white {
        --tw-text-opacity: 1;
        color: rgb(255 255 255/var(--tw-text-opacity))
    }

    .dark\:text-gray-400 {
        --tw-text-opacity: 1;
        color: rgb(156 163 175/var(--tw-text-opacity))
    }
}

@media (min-width:640px) {
    .sm\:col-span-4 {
        grid-column: span 4/span 4
    }

    .sm\:mx-auto {
        margin-left: auto;
        margin-right: auto
    }

    .sm\:-my-px {
        margin-bottom: -1px;
        margin-top: -1px
    }

    .sm\:mt-0 {
        margin-top: 0
    }

    .sm\:ml-10 {
        margin-left: 2.5rem
    }

    .sm\:ml-6 {
        margin-left: 1.5rem
    }

    .sm\:ml-0 {
        margin-left: 0
    }

    .sm\:block {
        display: block
    }

    .sm\:flex {
        display: flex
    }

    .sm\:hidden {
        display: none
    }

    .sm\:h-20 {
        height: 5rem
    }

    .sm\:w-3\/4 {
        width: 75%
    }

    .sm\:max-w-2xl {
        max-width: 42rem
    }

    .sm\:items-center {
        align-items: center
    }

    .sm\:justify-start {
        justify-content: flex-start
    }

    .sm\:justify-between {
        justify-content: space-between
    }

    .sm\:rounded-lg {
        border-radius: .5rem
    }

    .sm\:px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem
    }

    .sm\:pt-0 {
        padding-top: 0
    }

    .sm\:text-left {
        text-align: left
    }

    .sm\:text-right {
        text-align: right
    }
}

@media (min-width:768px) {
    .md\:my-0 {
        margin-bottom: 0;
        margin-top: 0
    }

    .md\:inline-block {
        display: inline-block
    }

    .md\:w-1\/2 {
        width: 50%
    }

    .md\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr))
    }

    .md\:border-t-0 {
        border-top-width: 0
    }

    .md\:border-l {
        border-left-width: 1px
    }

    .md\:px-0 {
        padding-left: 0;
        padding-right: 0
    }

    .md\:py-3 {
        padding-bottom: .75rem;
        padding-top: .75rem
    }

    .md\:pb-0 {
        padding-bottom: 0
    }

    .md\:pl-0 {
        padding-left: 0
    }

    .md\:pr-0 {
        padding-right: 0
    }
}

@media (min-width:1024px) {
    .lg\:mt-0 {
        margin-top: 0
    }

    .lg\:block {
        display: block
    }

    .lg\:flex {
        display: flex
    }

    .lg\:hidden {
        display: none
    }

    .lg\:w-1\/3 {
        width: 33.333333%
    }

    .lg\:w-auto {
        width: auto
    }

    .lg\:items-center {
        align-items: center
    }

    .lg\:px-8 {
        padding-left: 2rem;
        padding-right: 2rem
    }
}
    </style>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-200">
        <!-- Page Content -->
        <main class="text-center">
            <div class="p-8 m-8 bg-white shadow-lg rounded-lg inline-block">
                <div class="max-w-3xl">
                    <div class="flex flex-col items-center gap-y-3 max-w-7xl">
                        {{-- <img
                            class="w-28 h-28 border-2 border-gray-400 rounded-full sahdow-lg object-cover object-center"
                            src="{{ $user->profile_photo_url ?? ''}}" alt="Ao" srcset="{{ $user->profile_photo_url ?? ''}}"> --}}
                        <h2 class="text-xl uppercase font-bold text-green-600">{{$user->name ?? ''}}</h2>
                        <h2 class="text-md leading-relaxed uppercase font-light text-gray-900">Fresh Graduate</h2>
                        <div class="flex border-y-2 border-gray-300">
                            <div class="w-1/3 border-r-2 border-gray-300">
                                <div class="border-b-2 border-gray-300 text-left py-2">
                                    <h2 class="text-md font-bold pl-2 pr-4 mb-2 text-green-500">
                                        Personal Profile
                                    </h2>
                                    <p class="text-justify pl-2 pr-4 text-gray-800 text-sm">
                                        {{$user->profile->about_me ?? ''}}
                                    </p>
                                </div>
                                <div class="py-2 text-left border-b-2 border-gray-300">
                                    <h2 class="text-md font-bold px-2 mb-2 text-green-500">
                                        Education
                                    </h2>
                                    <div class="text-left px-2 mb-2">
                                        <h2 class="text-gray-800 text-sm font-bold">{{$user->profile->tahun_masuk ??
                                            ''}}-{{$user->profile->tahun_keluar ?? '' }}</h2>
                                        <h2 class="text-gray-800 text-sm font-semibold">{{$user->profile->nama_sekolah
                                            ?? '' }}</h2>
                                        <p class="text-justify text-gray-800 text-sm">
                                            {{$user->profile->jurusan ?? ''}}
                                        </p>
                                    </div>
                                </div>
                                <div class="py-2 text-left border-b-2 border-gray-300">
                                    <h2 class="text-md font-bold px-2 mb-2 text-green-500">
                                        SKILL
                                    </h2>
                                    <ul class="px-2 text-sm font-semibold text-gray-800 list-disc list-inside">
                                        @foreach ($user->skills as $item)
                                        <li class="mb-2">{{$item->skill ?? ''}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="text-left py-2">
                                    <h2 class="text-md font-bold px-2 mb-2 text-green-500">
                                        Contacts
                                    </h2>
                                    <div class="text-left px-2 mb-2">
                                        <h2 class="text-gray-900 text-sm font-bold">Mail :</h2>
                                        <h2 class="text-gray-600 text-sm font-bold">{{$user->email ?? ''}}</h2>
                                    </div>
                                    <div class="text-left px-2 mb-2">
                                        <h2 class="text-gray-900 text-sm font-bold">Phone :</h2>
                                        <h2 class="text-gray-600 text-sm font-bold">{{$user->profile->hp ?? '' }}</h2>
                                    </div>
                                    <div class="text-left px-2 mb-2">
                                        <h2 class="text-gray-900 text-sm font-bold">Linkedin :</h2>
                                        <h2 class="text-gray-600 text-sm font-bold"><a
                                                href="{{$user->profile->url_linkedin ?? ''}}">
                                                {{$user->profile->uname_linkedin ?? ''}}
                                            </a></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="w-2/3 px-8">
                                <div class="text-left py-2 mb-1">
                                    <h2 class="text-lg font-bold mb-2 text-green-500">
                                        Works/Internships
                                    </h2>
                                    @foreach ($user->works as $item)
                                    <div class="text-left mb-2">
                                        <h2 class="text-sm font-bold">{{$item->position ?? ''}}</h2>
                                        <h2 class="text-gray-800 text-sm font-light italic">{{$item->company ?? ''}} .
                                            <span>{{$item->tgl_start}}-{{$item->tgl_end}}</span>
                                        </h2>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="text-left py-2 mb-2">
                                    <h2 class="text-lg font-bold mb-2 text-green-500">
                                        Organizations
                                    </h2>
                                    @foreach ($user->organizations as $item)
                                    <div class="text-left mb-2">
                                        <h2 class="text-sm font-bold mb-1">{{$item->name ?? ''}} ( {{$item->thn_mulai ??
                                            ''}}-{{$item->thn_akhir ?? ''}} )</h2>
                                        <h2 class="text-gray-800 text-sm font-light italic mb-1">{{$item->position ??
                                            ''}}</h2>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="text-left py-2 mb-2">
                                    <h2 class="text-lg font-bold mb-2 text-green-500">
                                        Sertifications
                                    </h2>
                                    @foreach ($user->sertifications as $item)
                                    <div class="text-left mb-2">
                                        <h2 class="text-sm font-bold mb-1">{{$item->title ?? ''}}</h2>
                                        <h2 class="text-gray-800 text-sm font-light italic mb-1">{{$item->description ??
                                            ''}}</h2>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>

</html>