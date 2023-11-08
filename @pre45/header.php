<link type="text/css" rel="stylesheet" href="css/placeholder.0d3b158bd698536c13d3.css">
<style>

.crLeft,
    .crRight {
        border: 1px solid #d7d9e4;
        color: #323232;
        cursor: pointer;
        display: block;
        font-size: 3em;
        font-weight: 700;
        height: 8em;
        line-height: 8em;
        text-align: center;
        width: 40px
    }

    .crLeft {
        float: left
    }

    .crRight {
        float: right
    }

    .crArrow {
        background: #23398f;
        color: #fff;
        display: inline-block;
        font-weight: 400;
        height: 28px;
        line-height: .6em;
        width: 28px
    }

    .disabled .crLeft,
    .disabled .crRight {
        color: #dae2ee;
        cursor: inherit
    }

    .disabled .crArrow {
        background: #c7cde1;
        color: #f3f5f7
    }

    .crUl {
        background: #fff;
        border-bottom: 1px solid #c9d5e3;
        border-top: 1px solid #c9d5e3;
        height: 24em;
        list-style-type: none;
        margin: 0 auto;
        overflow: hidden
    }

    .crItem {
        border-right: 1px solid #d9d9d9;
        display: block;
        float: left;
        height: 23.8em;
        position: relative
    }

    .crItem:last-child {
        border-right: 0
    }

    .noFlex .crItem:last-child {
        border-right: 1px solid #d9d9d9
    }

    .crItem.crItemTrade {
        border: .2em solid #fd6600
    }

    #menuV .crRight,
    #menuV .crUl {
        border-right: 0
    }

    .carousel {
        height: 31em;
        overflow: hidden;
        position: relative
    }

    .crLast,
    .crNext {
        background-color: #fff;
        cursor: pointer;
        height: 90px;
        position: absolute;
        text-align: center;
        top: calc(50% - 45px);
        width: 45px;
        z-index: 3
    }

    .crLast img,
    .crNext img {
        position: relative;
        top: 34%
    }

    .disabled.crLast,
    .disabled.crNext {
        cursor: default
    }

    .carTouch .crLast.active,
    .carTouch .crNext.active {
        background: #293847;
        color: #f1f1f5
    }

    .carTouch .crLast,
    .carTouch .crNext {
        cursor: default
    }

    .crLast {
        border-radius: 0 5px 5px 0;
        box-shadow: 1px 0 4px 0 rgba(0, 0, 0, .2);
        left: 0
    }

    .crNext {
        border-radius: 5px 0 0 5px;
        box-shadow: -1px 0 4px 0 rgba(0, 0, 0, .2);
        padding: 0 12px 0 15px;
        right: 0
    }

    .carousel .crCarouLimit,
    .crLast.crCarouLimit,
    .crNext.crCarouLimit {
        opacity: .5
    }

    .crSUl {
        background: #fff;
        height: 100%;
        list-style-type: none;
        overflow: hidden;
        padding: 0 7px;
        white-space: nowrap
    }

    .bloc .crSUl {
        padding: 0 0 0 10px
    }

    .crSUl li {
        display: inline-block;
        height: 100%;
        list-style: none;
        padding: 10px;
        position: relative;
        vertical-align: top;
        width: 200px
    }

    .carouAnimcoTitle {
        font-size: 1.5em;
        margin-bottom: 16px;
        padding: initial
    }

    .carouAnimcoTitle a {
        text-decoration: none
    }

    .carouAnimcoContainer {
        display: table;
        margin: initial;
        table-layout: fixed;
        width: 100%
    }

    .carouAnimcoTitle+.carouAnimcoContainer {
        margin-top: 0
    }

    .carouAnimcoImageContainer {
        display: none;
        height: 100%;
        width: 200px
    }

    .carouAnimcoImageLink {
        display: block;
        height: 290px;
        width: 100%
    }

    .carouAnimco {
        border: none;
        border-radius: 4px;
        display: table-cell;
        min-height: 290px;
        vertical-align: top;
        width: 100%
    }

    .carouAnimco.testCarouAnimcoBulletPoint {
        height: 436px
    }

    .carouAnimco .cPdtItem,
    .carouAnimco .carousel {
        height: inherit
    }

    .carouAnimco .cPdtItem.liEmpty {
        height: 290px
    }

    .carouAnimco .cPdtItem:hover .btnAdd {
        display: none
    }

    .testAddCarrou.testCarouAnimcoBulletPoint.carouAnimco .cPdtItem,
    .testCarouAnimcoBulletPoint.carouAnimco .cPdtItem {
        height: 100%;
        width: 290px
    }

    .testCarouAnimcoBulletPoint.carouAnimco .cPdtItem .cPdtItImg {
        height: 200px;
        width: 200px
    }

    .testCarouAnimcoBulletPoint.carouAnimco .cPdtItem .cPdtItTit,
    .testCarouAnimcoBulletPoint.carouAnimco .cPdtItem .cPdtItTitVar {
        font-weight: 700
    }

    .testCarouAnimcoBulletPoint.carouAnimco .cPdtItem .cPdtItDesc,
    .testCarouAnimcoBulletPoint.carouAnimco .cPdtItem .cPdtItDescBullet {
        display: block;
        height: 72px;
        overflow: hidden
    }

    .testCarouAnimcoBulletPoint.carouAnimco .cPdtItem .cPdtItDescBullet+.cPdtItDesc {
        display: none
    }

    .testCarouAnimcoBulletPoint.carouAnimco .cPdtItem .cPdtItDescBullet .prdtBILDesc {
        cursor: auto;
        display: block;
        margin: 0
    }

    .testCarouAnimcoBulletPoint.carouAnimco .cPdtItem .cPdtItDescBullet li {
        display: list-item;
        line-height: 18px;
        list-style: disc inside;
        margin: 0;
        padding: 0;
        width: 100%
    }

    .testCarouAnimcoBulletPoint.carouAnimco .cPdtItem .cPdtItDescBullet li span {
        display: inline-block;
        overflow: hidden;
        text-overflow: ellipsis;
        vertical-align: middle;
        white-space: nowrap;
        width: 92%
    }

    .testAddCarrou.testCarouAnimcoBulletPoint.carouAnimco .cPdtItem:hover .ecoBlk,
    html.isPro .testAddCarrou.testCarouAnimcoBulletPoint.carouAnimco .cPdtItem:hover .ecoBlk.displayToPro {
        display: block
    }

    .testAddCarrou.testCarouAnimcoBulletPoint.carouAnimco .cPdtItem:hover .ecoBlk.displayToPro,
    html.isPro .testAddCarrou.testCarouAnimcoBulletPoint.carouAnimco .cPdtItem:hover .ecoBlk.hideFromPro {
        display: none
    }

    .testAddCarrou.testCarouAnimcoBulletPoint.carouAnimco .cPdtItem .btnAdd {
        display: block;
        height: 32px;
        left: 196px;
        position: absolute;
        top: 380px;
        width: 74px
    }

    .testAddCarrou.testCarouAnimcoBulletPoint.carouAnimco .cPdtItem .btnAdd.sponsoredPdtBtnAdd {
        top: 370px
    }

    .testAddCarrou.carouAnimco .cPdtItem {
        height: 330px
    }

    .testAddCarrou.carouAnimco .cPdtItem .btnAdd,
    .testAddCarrou.carouAnimco .cPdtItem:hover .ecoBlk {
        display: none
    }

    .testAddCarrou.carouAnimco .cPdtItem:hover .btnAdd {
        display: block
    }

    .isTouchCarrou .testAddCarrou.carouAnimco .cPdtItem .btnAdd.btGreen {
        background-color: #fff;
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAApJREFUeF5jYAAAAAIAAd6ej78AAAAASUVORK5CYII=);
        color: #2bb04a;
        display: block
    }

    .isTouchCarrou .testAddCarrou.carouAnimco .cPdtItem .btnAdd.greyAddedBtn {
        display: block
    }

    .isTouchCarrou .testAddCarrou.carouAnimco .cPdtItem .btnAdd.btGreen.btLoading,
    .isTouchCarrou .testAddCarrou.carouAnimco .cPdtItem .btnAdd.btGreen.btLoading.clickDisabled {
        background-color: #fff;
        background-image: url(../../../images/_/loader-green.gif);
        background-position: 50%;
        background-repeat: no-repeat;
        color: #fff
    }

    .greyAddedBtn {
        background: #f8f9fa;
        border: 1px;
        border-radius: 6px;
        color: #2bb04a;
        cursor: default;
        font-size: 1em;
        height: 32px;
        line-height: 15px;
        margin: 12px auto;
        padding: .8em;
        text-align: center;
        width: 140px
    }

    .carouselCanAdd .cPdtItem {
        height: 390px
    }

    .carTouch .crSUl {
        -webkit-overflow-scrolling: touch;
        overflow-scrolling: touch;
        margin: 0;
        overflow-x: scroll
    }

    .cPdtItemBtn {
        font-size: 1em;
        line-height: 15px;
        margin: 12px 0;
        padding: .8em;
        width: 144px
    }

    .cPdtItemBtn,
    .cPdtItemBtn.btAdded {
        display: block
    }

    .overMabaya {
        border: 1px solid #d5d8df;
        border-top: 2px solid #323232;
        box-shadow: 1px 2px 10px 0 #8f8f8f;
        font-size: .9em;
        height: auto;
        padding: 10px
    }

    .carouOverBlk,
    .overMabaya {
        background-color: #fff;
        border-radius: 0 0 4px 4px
    }

    .carouOverBlk {
        border: 1px solid #d5d8df;
        box-shadow: 1px 2px 3px 0 #8f8f8f;
        display: none;
        max-width: 100%;
        padding-top: .5em;
        position: absolute;
        text-align: left;
        z-index: 10
    }

    .carouOverBlk>a {
        display: block;
        margin: 1.5em 0;
        text-align: center
    }

    .carouCloseOver {
        border-top: 1px solid #d7d9e4;
        display: block;
        text-align: center
    }

    .testSep.carouCat {
        border-top: none;
        font-size: 1.6em;
        font-weight: 700;
        margin-top: 0;
        overflow: hidden;
        padding-top: 0;
        position: relative
    }

    .carouselImage {
        height: auto
    }

    .carouselImage ul {
        font-size: 0;
        overflow: hidden;
        white-space: nowrap
    }

    .carouselImage li {
        padding: 0 5px;
        position: relative
    }

    .carouselImage img,
    .carouselImage li {
        display: inline-block
    }

    .crTdg {
        background: #f0f0f7;
        border: 1px solid #d7d9e4;
        margin: 0 0 10px;
        position: relative
    }

    .crTdgLeft,
    .crTdgRight {
        background: #fff;
        cursor: pointer;
        height: 90px;
        position: absolute;
        text-align: center;
        top: calc(50% - 45px);
        width: 45px;
        z-index: 10
    }

    .crTdgLeft img,
    .crTdgRight img {
        position: relative;
        top: 34%
    }

    .crTdgLeft {
        border-radius: 0 5px 5px 0;
        box-shadow: 1px 0 4px 0 rgba(0, 0, 0, .2);
        left: 0
    }

    .crTdgRight {
        border-radius: 5px 0 0 5px;
        box-shadow: -1px 0 4px 0 rgba(0, 0, 0, .2);
        padding: 0 12px 0 15px;
        right: 0
    }

    .crTdg a {
        text-decoration: none
    }

    .crTdgUl {
        height: 365px;
        overflow: hidden;
        position: relative
    }

    .crTdgUl li {
        background: none !important;
        width: 100%
    }

    .crTdgUl .active,
    .crTdgUl .newActive {
        position: absolute;
        top: 0
    }

    .crTdgUl .newActive {
        z-index: 2
    }

    .crTdgUl a {
        background: no-repeat 50%;
        display: block;
        height: 365px
    }

    .scTCarou {
        border: 1px solid #d7d9e4;
        margin: 2.5em auto;
        max-width: 1700px;
        overflow: hidden
    }

    .scTCarou,
    .scTCarouUl,
    .scTrade {
        position: relative
    }

    .scTCarouUl li {
        position: absolute;
        top: 0
    }

    .scTCarouUl img {
        width: 100%
    }

    @media only screen and (max-width:1023px) {
        .crSCTit p span {
            display: none
        }

        .crRateElStar {
            margin: 15px 0 0;
            padding: 15px 0 0
        }

        .crRateElement {
            padding: 15px
        }
    }

    @media only screen and (min-width:1280px) {

        .pdtCrSC .crItem,
        .pdtCrSC .crSCTit,
        .pdtCrSC .crUl {
            height: 60em
        }

        .pdtCrSC .crLeft,
        .pdtCrSC .crRight {
            height: 20em;
            line-height: 19em
        }

        .pdtCrSC .crRateBloc .prdtBloc {
            width: 350px
        }

        .crRateElement {
            margin-left: 350px
        }

        .carouAnimcoImageContainer {
            display: table-cell
        }

        .carouAnimcoImageContainer+.carouAnimco {
            border-left: none
        }
    }
    </style>
    <link type="text/css" rel="stylesheet" href="css/jquery.ui.datepicker.de544039527c102aceed.css">
    <link type="text/css" rel="stylesheet" href="css/jquery.ui.autocomplete.62bafc36133860b2a354.css">
    <link type="text/css" rel="stylesheet" href="css/travel.fb4127af1e63d32ee953.css">
    <style>
    .tippy-box[data-animation=fade][data-state=hidden] {
        opacity: 0
    }

    [data-tippy-root] {
        max-width: calc(100vw - 10px)
    }

    .tippy-box {
        background-color: #333;
        border-radius: 4px;
        color: #fff;
        font-size: 14px;
        line-height: 1.4;
        outline: 0;
        position: relative;
        transition-property: transform, visibility, opacity;
        white-space: normal
    }

    .tippy-box[data-placement^=top]>.tippy-arrow {
        bottom: 0
    }

    .tippy-box[data-placement^=top]>.tippy-arrow:before {
        border-top-color: initial;
        border-width: 8px 8px 0;
        bottom: -7px;
        left: 0;
        transform-origin: center top
    }

    .tippy-box[data-placement^=bottom]>.tippy-arrow {
        top: 0
    }

    .tippy-box[data-placement^=bottom]>.tippy-arrow:before {
        border-bottom-color: initial;
        border-width: 0 8px 8px;
        left: 0;
        top: -7px;
        transform-origin: center bottom
    }

    .tippy-box[data-placement^=left]>.tippy-arrow {
        right: 0
    }

    .tippy-box[data-placement^=left]>.tippy-arrow:before {
        border-left-color: initial;
        border-width: 8px 0 8px 8px;
        right: -7px;
        transform-origin: center left
    }

    .tippy-box[data-placement^=right]>.tippy-arrow {
        left: 0
    }

    .tippy-box[data-placement^=right]>.tippy-arrow:before {
        border-right-color: initial;
        border-width: 8px 8px 8px 0;
        left: -7px;
        transform-origin: center right
    }

    .tippy-box[data-inertia][data-state=visible] {
        transition-timing-function: cubic-bezier(.54, 1.5, .38, 1.11)
    }

    .tippy-arrow {
        color: #333;
        height: 16px;
        width: 16px
    }

    .tippy-arrow:before {
        border-color: transparent;
        border-style: solid;
        content: "";
        position: absolute
    }

    .tippy-content {
        padding: 5px 9px;
        position: relative;
        z-index: 1
    }

    .tippy-box[data-theme~=light] {
        background-color: #fff;
        box-shadow: 0 0 20px 4px rgba(154, 161, 177, .15), 0 4px 80px -8px rgba(36, 40, 47, .25), 0 4px 4px -2px rgba(91, 94, 105, .15);
        color: #26323d
    }

    .tippy-box[data-theme~=light][data-placement^=top]>.tippy-arrow:before {
        border-top-color: #fff
    }

    .tippy-box[data-theme~=light][data-placement^=bottom]>.tippy-arrow:before {
        border-bottom-color: #fff
    }

    .tippy-box[data-theme~=light][data-placement^=left]>.tippy-arrow:before {
        border-left-color: #fff
    }

    .tippy-box[data-theme~=light][data-placement^=right]>.tippy-arrow:before {
        border-right-color: #fff
    }

    .tippy-box[data-theme~=light]>.tippy-backdrop {
        background-color: #fff
    }

    .tippy-box[data-theme~=light]>.tippy-svg-arrow {
        fill: #fff
    }

    .tippy-box[data-placement^=top]>.tippy-svg-arrow {
        bottom: 0
    }

    .tippy-box[data-placement^=top]>.tippy-svg-arrow:after,
    .tippy-box[data-placement^=top]>.tippy-svg-arrow>svg {
        top: 16px;
        transform: rotate(180deg)
    }

    .tippy-box[data-placement^=bottom]>.tippy-svg-arrow {
        top: 0
    }

    .tippy-box[data-placement^=bottom]>.tippy-svg-arrow>svg {
        bottom: 16px
    }

    .tippy-box[data-placement^=left]>.tippy-svg-arrow {
        right: 0
    }

    .tippy-box[data-placement^=left]>.tippy-svg-arrow:after,
    .tippy-box[data-placement^=left]>.tippy-svg-arrow>svg {
        left: 11px;
        top: calc(50% - 3px);
        transform: rotate(90deg)
    }

    .tippy-box[data-placement^=right]>.tippy-svg-arrow {
        left: 0
    }

    .tippy-box[data-placement^=right]>.tippy-svg-arrow:after,
    .tippy-box[data-placement^=right]>.tippy-svg-arrow>svg {
        right: 11px;
        top: calc(50% - 3px);
        transform: rotate(-90deg)
    }

    .tippy-svg-arrow {
        fill: #333;
        height: 16px;
        text-align: left;
        text-align: initial;
        width: 16px
    }

    .tippy-svg-arrow,
    .tippy-svg-arrow>svg {
        position: absolute
    }
    </style>
    <style>
    *,
    :after,
    :before {
        box-sizing: inherit
    }

    * {
        font: inherit
    }

    a,
    abbr,
    acronym,
    address,
    applet,
    article,
    aside,
    audio,
    b,
    big,
    blockquote,
    body,
    canvas,
    caption,
    center,
    cite,
    code,
    dd,
    del,
    details,
    dfn,
    div,
    dl,
    dt,
    em,
    embed,
    fieldset,
    figcaption,
    figure,
    footer,
    form,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    header,
    hgroup,
    hr,
    html,
    i,
    iframe,
    img,
    ins,
    kbd,
    label,
    legend,
    li,
    mark,
    menu,
    nav,
    object,
    ol,
    output,
    p,
    pre,
    q,
    ruby,
    s,
    samp,
    section,
    small,
    span,
    strike,
    strong,
    sub,
    summary,
    sup,
    table,
    tbody,
    td,
    tfoot,
    th,
    thead,
    time,
    tr,
    tt,
    u,
    ul,
    var,
    video {
        border: 0;
        margin: 0;
        padding: 0
    }

    html {
        box-sizing: border-box
    }

    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    form legend,
    header,
    hgroup,
    main,
    menu,
    nav,
    section {
        display: block
    }

    ol,
    ul {
        list-style: none
    }

    blockquote,
    q {
        quotes: none
    }

    button,
    input,
    select,
    textarea {
        margin: 0
    }

    .btn,
    .link,
    .reset {
        -webkit-appearance: none;
        appearance: none;
        background-color: transparent;
        border: 0;
        border-radius: 0;
        color: inherit;
        line-height: inherit;
        padding: 0
    }

    select.form-control::-ms-expand {
        display: none
    }

    textarea {
        overflow: auto;
        resize: vertical;
        vertical-align: top
    }

    input::-ms-clear {
        display: none
    }

    /* img,
    svg,
    video {
        max-width: 100%
    } */

    code {
        cursor: text
    }

    a,
    button,
    input[type=checkbox],
    input[type=radio],
    input[type=submit],
    label {
        cursor: pointer
    }

    button[disabled],
    input[disabled] {
        cursor: default
    }

    article,
    aside,
    audio,
    canvas,
    datalist,
    details,
    dialog,
    figure,
    footer,
    header,
    menu,
    nav,
    section,
    video {
        display: block
    }

    abbr,
    eventsource,
    mark,
    meter,
    output,
    progress,
    time {
        display: inline
    }

    .displayToPro,
    html.isPro .hideFromPro {
        display: none
    }

    sub,
    sup {
        font-size: 75%;
        line-height: 0;
        position: relative;
        vertical-align: baseline
    }

    sub {
        bottom: -.25em
    }

    sup {
        top: -.5em
    }

    ins {
        text-decoration: none
    }

    [aria-controls] {
        cursor: pointer
    }

    @font-face {
        advance-override: 1.002414;
        ascent-override: 94.873046875%;
        descent-override: 41.50390625%;
        font-display: swap;
        font-family: Hind Madurai-fallback;
        font-weight: 400;
        line-gap-override: normal;
        size-adjust: 96.69%;
        src: local("Arial")
    }

    @font-face {
        font-display: swap;
        font-family: Hind Madurai;
        font-style: normal;
        font-weight: 400;
        src: url(fonts/hindmadurai-regular.ea9704a70edc8c81d595.eot);
        src: url(fonts/hindmadurai-regular.ea9704a70edc8c81d595.eot#iefix) format("embedded-opentype"), url(fonts/hindmadurai-regular.b52601f72aa355780282.woff2) format("woff2"), url(fonts/hindmadurai-regular.9d5cb8e2ea513afe684c.woff) format("woff"), url(fonts/hindmadurai-regular.752322db488bccbea198.ttf) format("truetype");
        unicode-range: U+00??, U+0131, U+0152-0153, U+02bb-02bc, U+02c6, U+02da, U+02dc, U+2000-206f, U+2074, U+20ac, U+2122, U+2191, U+2193, U+2212, U+2215, U+feff, U+fffd
    }

    @font-face {
        advance-override: 1.002414;
        ascent-override: 94.873046875%;
        descent-override: 42.138671875%;
        font-display: swap;
        font-family: Hind Madurai-fallback;
        font-weight: 600;
        line-gap-override: normal;
        size-adjust: 96.69%;
        src: local("Arial Bold")
    }

    @font-face {
        font-display: swap;
        font-family: Hind Madurai;
        font-style: normal;
        font-weight: 600;
        src: url(fonts/hindmadurai-semibold.cc4ff633673de1317427.eot);
        src: url(fonts/hindmadurai-semibold.cc4ff633673de1317427.eot#iefix) format("embedded-opentype"), url(fonts/hindmadurai-semibold.54b4c9a7bae8d5fa1d7c.woff2) format("woff2"), url(fonts/hindmadurai-semibold.60362c30f86da3a021d2.woff) format("woff"), url(fonts/hindmadurai-semibold.c97f719ad72a666067bf.ttf) format("truetype");
        unicode-range: U+00??, U+0131, U+0152-0153, U+02bb-02bc, U+02c6, U+02da, U+02dc, U+2000-206f, U+2074, U+20ac, U+2122, U+2191, U+2193, U+2212, U+2215, U+feff, U+fffd
    }

    @font-face {
        advance-override: 0;
        ascent-override: normal;
        descent-override: normal;
        font-display: swap;
        font-family: Montserrat-fallback;
        font-weight: 400;
        line-gap-override: normal;
        size-adjust: 97.9%;
        src: local("Verdana")
    }

    @font-face {
        font-display: swap;
        font-family: Montserrat;
        font-style: normal;
        font-weight: 400;
        src: url(fonts/montserrat-regular.95b34b99859986a935f9.eot);
        src: url(fonts/montserrat-regular.95b34b99859986a935f9.eot#iefix) format("embedded-opentype"), url(fonts/montserrat-regular.631251afe2023e725d01.woff2) format("woff2"), url(fonts/montserrat-regular.881d04491d93e692a2a5.woff) format("woff"), url(fonts/montserrat-regular.d7c104842dfe31f755d9.ttf) format("truetype");
        unicode-range: U+00??, U+0131, U+0152-0153, U+02bb-02bc, U+02c6, U+02da, U+02dc, U+2000-206f, U+2074, U+20ac, U+2122, U+2191, U+2193, U+2212, U+2215, U+feff, U+fffd
    }

    @font-face {
        advance-override: 0;
        ascent-override: normal;
        descent-override: normal;
        font-display: swap;
        font-family: Montserrat-fallback;
        font-weight: 600;
        line-gap-override: normal;
        size-adjust: 97.9%;
        src: local("Verdana Bold")
    }

    @font-face {
        font-display: swap;
        font-family: Montserrat;
        font-style: normal;
        font-weight: 600;
        src: url(fonts/montserrat-semibold.c5efea5362977cb60932.eot);
        src: url(fonts/montserrat-semibold.c5efea5362977cb60932.eot#iefix) format("embedded-opentype"), url(fonts/montserrat-semibold.893e7b9d37573bf6eb1a.woff2) format("woff2"), url(fonts/montserrat-semibold.0caf41bc37f38ad3064f.woff) format("woff"), url(fonts/montserrat-semibold.edd5ea724fddcf318c3b.ttf) format("truetype");
        unicode-range: U+00??, U+0131, U+0152-0153, U+02bb-02bc, U+02c6, U+02da, U+02dc, U+2000-206f, U+2074, U+20ac, U+2122, U+2191, U+2193, U+2212, U+2215, U+feff, U+fffd
    }

    img {
        -ms-interpolation-mode: bicubic;
        border: 0;
        image-rendering: optimizeQuality;
        vertical-align: middle
    }

    li,
    ol,
    ul {
        list-style: none
    }

    button {
        overflow: visible
    }

    td {
        empty-cells: show
    }

    fieldset {
        border: 0
    }

    table {
        border-collapse: collapse;
        font-size: 1em
    }

    table,
    table td {
        border-spacing: 0;
        padding: 0
    }

    table td {
        border-collapse: separate
    }

    input[type=search] {
        -webkit-appearance: none;
        -webkit-border-radius: 0;
        box-sizing: border-box
    }

    button::-moz-focus-inner,
    input[type=button]::-moz-focus-inner {
        border: 0;
        padding: 0
    }

    .price,
    .priceColor {
        font-family: Montserrat, Montserrat-fallback, Verdana, sans-serif
    }

    h2 .light,
    h2 .miniLight {
        font-weight: 400
    }

    h2 .miniLight {
        font-size: .75em
    }

    .min {
        font-size: .917em
    }

    .max {
        font-size: 1.3em
    }

    .tip {
        color: #798da8;
        font-size: .917em
    }

    .stroken {
        color: #323232;
        display: inline-block;
        text-decoration: line-through
    }

    .alert,
    .alert a,
    .price,
    .red {
        font-weight: 700
    }

    .price {
        color: #e23a05 !important
    }

    .alert,
    .alert a,
    .error,
    .error a,
    .red {
        color: #d84148 !important
    }

    .error,
    .error a {
        font-weight: 400
    }

    .redS {
        color: #d84148 !important
    }

    .success {
        color: #63b200 !important;
        font-weight: 700
    }

    .chevronDepli {
        background: url(images/double-chevron-down.png) no-repeat 0;
        cursor: pointer;
        display: inline-block;
        padding: .5em 0 .5em 28px
    }

    .chevronDepli.active {
        background-image: url(images/double-chevron-up.png)
    }

    .noSel {
        -webkit-user-select: none;
        -ms-user-select: none;
        user-select: none
    }

    .noWrap {
        white-space: nowrap
    }

    blockquote,
    code,
    img,
    input,
    pre,
    table,
    td,
    textarea {
        /* max-width: 100% */
    }

    .ddn {
        opacity: 0
    }

    .since1024,
    .since768 {
        display: block !important
    }

    .dn,
    .hide,
    .no1279,
    .no1599,
    .no1919,
    .only1023,
    .only1280,
    .only1600,
    .only767,
    .since1280,
    .since1600,
    .since1920 {
        display: none !important
    }

    .only1279,
    .until1024 {
        display: block !important
    }

    .clear1279 {
        clear: both !important
    }

    .lk,
    [data-nf] {
        text-decoration: underline
    }

    .lk,
    .pointer,
    [data-nf] {
        cursor: pointer
    }

    dl.onlineList,
    ul.onlineList {
        display: inline-block;
        overflow: hidden
    }

    dl.onlineList dd,
    ul.onlineList li {
        display: block;
        float: left
    }

    ul.error {
        clear: both;
        padding: 0 0 .7em;
        text-align: left
    }

    #main {
        background: none;
        clear: both;
        padding: 0 0 .75em
    }

    .content {
        cursor: default;
        margin: 0 auto;
        /* min-width: 768px; */
        position: relative;
        width: 1004px
    }

    body.twentyYearsCdsBody {
        background-color: #1b2938 !important
    }

    .noContent {
        height: 0;
        line-height: 0
    }

    .clear {
        clear: both
    }

    .clear1024,
    .clear1279 {
        clear: both !important
    }

    br.fix,
    div.fix {
        clear: both;
        font-size: 0;
        height: 0;
        line-height: 0
    }

    .fixA:after {
        clear: both;
        content: " ";
        display: block;
        height: 0;
        visibility: hidden
    }

    .imgL {
        float: left;
        padding-right: .85em
    }

    .imgR {
        float: right;
        padding-left: .85em
    }

    .left {
        text-align: left
    }

    .right {
        text-align: right
    }

    .center {
        text-align: center
    }

    .justify {
        text-align: justify
    }

    .pubText {
        color: #444;
        display: block;
        font-size: .9em;
        letter-spacing: 1pt;
        margin: .6em 0 .4em;
        text-align: center
    }

    .cPdtItem .displayToPro.price,
    .carouAnimco.light .cPdtItem .price.displayToPro,
    .displayToPro,
    .testHeaderServices .headerServices>div.displayToPro,
    html.isPro .hideFromPro {
        display: none
    }

    .extCode {
        overflow: auto
    }

    .extCode *,
    .extCode :after,
    .extCode :before {
        box-sizing: content-box;
        max-width: inherit
    }

    .chariot {
        word-wrap: break-word
    }

    .facMkt .red,
    .facilityP>div>.red,
    .priceColor {
        color: #e23a05 !important
    }

    @media only screen {
        .content {
            max-width: 1280px;
            width: 100%
        }

        .clear1280 {
            clear: both !important
        }
    }

    @media only screen and (max-width:1023px) {
        body {
            background: #efefef !important
        }

        .no1023 {
            display: none !important
        }

        .only1023 {
            display: block !important
        }

        .clear1023 {
            clear: both !important
        }

        .clear1024 {
            clear: none !important
        }

        .since1024 {
            display: none !important
        }
    }

    @media only screen and (max-width:767px) {
        .no767 {
            display: none !important
        }

        .only767 {
            display: block !important
        }

        .clear767 {
            clear: both !important
        }
    }

    @media only screen and (min-width:1024px) {
        .until1024 {
            display: none !important
        }

        .since1024 {
            display: block !important
        }
    }

    @media only screen and (min-width:1280px) {

        .no1280,
        .only1279,
        .until1280 {
            display: none !important
        }

        .no1279,
        .only1280,
        .since1280 {
            display: block !important
        }

        .clear1280 {
            clear: both !important
        }

        .clear1279 {
            clear: none !important
        }
    }

    /* body,
    html {
        cursor: default
    }

    html {
        font-size: 100%;
        height: 100%;
        scroll-behavior: smooth;
        scroll-padding: var(--header-main--calcHeight)
    } */

    /* body {
        background-color: #f2f3f5;
        margin: 0 auto;
        min-height: 100%;
        width: 100%
    } */

    [data-lock],
    [data-lock] body {
        overflow: hidden;
        touch-action: none
    }

    body {
        color: #293847;
        font-family: Hind Madurai, Hind-fallback, Arial, sans-serif;
        font-size: 14px;
        font-weight: 400
    }

    .h1,
    .h2,
    .h3,
    .h4,
    h1,
    h2,
    h3,
    h4 {
        color: #293847;
        font-family: Montserrat, Montserrat-fallback, Verdana, sans-serif;
        font-weight: 700;
        line-height: 1.5
    }

    .h1,
    h1 {
        font-weight: 400
    }

    .h2,
    .h3,
    .h4,
    h2,
    h3,
    h4 {
        font-weight: 700
    }

    .alt-h1,
    .alt-h2,
    .alt-h3,
    .alt-h4 {
        font-family: Hind Madurai, Hind-fallback, Arial, sans-serif
    }

    .alt-h1>a,
    .alt-h2>a,
    .alt-h3>a,
    .alt-h4>a,
    .h1>a,
    .h2>a,
    .h3>a,
    .h4>a,
    h1>a,
    h2>a,
    h3>a,
    h4>a {
        color: currentColor;
        text-decoration: none
    }

    .alt-h1>a:active,
    .alt-h1>a:focus,
    .alt-h1>a:hover,
    .alt-h2>a:active,
    .alt-h2>a:focus,
    .alt-h2>a:hover,
    .alt-h3>a:active,
    .alt-h3>a:focus,
    .alt-h3>a:hover,
    .alt-h4>a:active,
    .alt-h4>a:focus,
    .alt-h4>a:hover,
    .h1>a:active,
    .h1>a:focus,
    .h1>a:hover,
    .h2>a:active,
    .h2>a:focus,
    .h2>a:hover,
    .h3>a:active,
    .h3>a:focus,
    .h3>a:hover,
    .h4>a:active,
    .h4>a:focus,
    .h4>a:hover,
    h1>a:active,
    h1>a:focus,
    h1>a:hover,
    h2>a:active,
    h2>a:focus,
    h2>a:hover,
    h3>a:active,
    h3>a:focus,
    h3>a:hover,
    h4>a:active,
    h4>a:focus,
    h4>a:hover {
        color: currentColor;
        text-decoration: underline
    }

    .alt-h1,
    .h1,
    h1 {
        --font-size: var(--text-h1);
        font-size: 24px
    }

    .alt-h2,
    .h2,
    h2 {
        --font-size: var(--text-h2);
        font-size: 21px
    }

    .alt-h3,
    .h3,
    h3 {
        --font-size: var(--text-h3);
        font-size: 18px
    }

    .alt-h4,
    .h4,
    h4 {
        --font-size: var(--text-h4);
        font-size: 16px
    }

    small {
        font-size: 12px
    }

    a {
        color: #096ec8;
        text-decoration: underline
    }

    a:hover {
        color: #064e8e;
        text-decoration: none
    }

    a:active {
        color: #096ec8
    }

    em {
        font-style: italic
    }

    strong {
        font-weight: 700
    }

    s {
        text-decoration: line-through
    }

    u {
        text-decoration: underline
    }

    p {
        line-height: 1.5
    }

    .icon {
        --size: 1em;
        fill: currentColor;
        color: inherit;
        display: inline-block;
        flex-shrink: 0;
        height: var(--size);
        line-height: 1;
        max-width: none;
        width: var(--size)
    }

    .icon--action {
        color: #096ec8
    }

    .icon--notation {
        color: #ffce00
    }

    .icon--rounded {
        border-radius: 100%
    }

    .icon--xs {
        font-size: 12px;
        height: 12px;
        width: 12px
    }

    .icon--sm {
        font-size: 14px;
        height: 14px;
        width: 14px
    }

    .icon--base {
        font-size: 16px;
        height: 16px;
        width: 16px
    }

    .icon--md {
        font-size: 24px;
        height: 24px;
        width: 24px
    }

    .icon--lg {
        font-size: 32px;
        height: 32px;
        width: 32px
    }

    .icon--xl {
        font-size: 48px;
        height: 48px;
        width: 48px
    }

    hr {
        background-color: #b6c2cd;
        height: 1px;
        width: 100%
    }

    .hr {
        background-color: transparent;
        border: 0;
        height: 24px;
        line-height: 1.5;
        outline: 0;
        position: relative;
        text-align: center
    }

    .hr:before {
        background-color: #b6c2cd;
        content: "";
        height: 1px;
        left: 0;
        position: absolute;
        top: 50%;
        width: 100%
    }

    .hr[data-content]:after {
        color: #293847;
        content: attr(data-content);
        display: inline-block;
        font-size: 16px;
        line-height: 24px;
        padding: 0 8px;
        position: relative
    }

    .hr[data-bgcolor=body]:after,
    .hr[data-bgcolor=body]>span,
    .hr[data-bgcolor=light]:after,
    .hr[data-bgcolor=light]>span,
    .hr[data-content]:after {
        background-color: #f2f3f5
    }

    .hr[data-bgcolor=white]:after,
    .hr[data-bgcolor=white]>span {
        background-color: #fff
    }

    .hr[data-bgcolor=dark]:after,
    .hr[data-bgcolor=dark]>span {
        background-color: #293847
    }

    .hr>span {
        background-color: #f2f3f5;
        color: #293847;
        font-size: 16px;
        line-height: 24px;
        padding: 0 8px;
        position: relative
    }

    .hr--dashed:before {
        background-color: transparent;
        background-image: linear-gradient(90deg, #b6c2cd, #b6c2cd 75%, transparent 0, transparent);
        background-size: 4px 1px
    }

    .hr--dash:before {
        content: normal
    }

    .hr--dash>span {
        border-radius: 4px;
        height: 3px;
        left: calc(50% - 9px);
        max-width: 18px;
        position: absolute;
        top: calc(50% - 1.5px)
    }

    .vr {
        align-self: stretch;
        background-color: #b6c2cd;
        display: inline-block;
        min-height: 1em;
        vertical-align: middle;
        width: 1px
    }

    .vr--dashed {
        background-color: transparent;
        background-image: linear-gradient(0deg, transparent, transparent 2px), linear-gradient(#b6c2cd 4px, transparent 0);
        background-size: 1px 5px
    }

    .link {
        cursor: pointer;
        text-decoration: underline
    }

    .link,
    .link:hover {
        color: currentColor
    }

    .link:hover {
        text-decoration: none
    }

    .link>.icon {
        --size: 1.14em;
        margin-right: 4px;
        vertical-align: middle
    }

    .link>[class*=" cds-"],
    .link>[class^=cds-] {
        font-size: 1.14em
    }

    .link--black,
    .link--black:hover {
        color: #293847
    }

    .link--blue {
        color: #096ec8
    }

    .link--blue:hover {
        color: #064e8e
    }

    .link--white,
    .link--white:hover {
        color: #fff
    }

    button.link {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        border: 2px solid transparent;
        border-radius: 4px;
        font-family: Hind Madurai, Hind-fallback, Arial, sans-serif;
        font-size: 16px;
        line-height: 1.5;
        padding: 8px 16px;
        position: relative;
        transition: all 70ms cubic-bezier(.4, .14, .3, 1);
        will-change: transform
    }

    button.link:focus {
        box-shadow: 0 0 0 2px rgba(41, 56, 71, .3);
        outline: none
    }

    a.link--icon {
        grid-gap: 8px;
        align-items: center;
        display: inline-flex;
        gap: 8px
    }

    a.link--icon .icon {
        --size: 1.14em
    }

    .container,
    .o-container {
        margin-left: auto;
        margin-right: auto;
        width: calc(100% - 32px)
    }

    @media(min-width:1024px) {
        .width-adaptive {
            width: calc(100% - 32px)
        }
    }

    @media(min-width:1280px) {
        .width-adaptive {
            width: calc(100% - 80px)
        }
    }

    @media(min-width:1920px) {
        .width-adaptive {
            width: calc(100% - 400px)
        }
    }

    [class*=" max-width-adaptive"],
    [class^=max-width-adaptive] {
        max-width: 320px
    }

    @media(min-width:512px) {

        .max-width-adaptive,
        .max-width-adaptive-eg,
        .max-width-adaptive-lg,
        .max-width-adaptive-md,
        .max-width-adaptive-sm,
        .max-width-adaptive-xl,
        .max-width-adaptive-xs,
        .max-width-adaptive-xxl,
        .max-width-adaptive-xxxl {
            max-width: 512px
        }
    }

    @media(min-width:768px) {

        .max-width-adaptive,
        .max-width-adaptive-eg,
        .max-width-adaptive-lg,
        .max-width-adaptive-md,
        .max-width-adaptive-sm,
        .max-width-adaptive-xl,
        .max-width-adaptive-xxl,
        .max-width-adaptive-xxxl {
            max-width: 768px
        }
    }

    @media(min-width:1024px) {

        .max-width-adaptive,
        .max-width-adaptive-eg,
        .max-width-adaptive-lg,
        .max-width-adaptive-md,
        .max-width-adaptive-xl,
        .max-width-adaptive-xxl,
        .max-width-adaptive-xxxl {
            max-width: 1024px
        }
    }

    @media(min-width:1280px) {

        .max-width-adaptive,
        .max-width-adaptive-eg,
        .max-width-adaptive-lg,
        .max-width-adaptive-xl,
        .max-width-adaptive-xxl,
        .max-width-adaptive-xxxl {
            max-width: 1280px
        }
    }

    @media(min-width:1366px) {

        .max-width-adaptive,
        .max-width-adaptive-eg,
        .max-width-adaptive-xl,
        .max-width-adaptive-xxl,
        .max-width-adaptive-xxxl {
            max-width: 1366px
        }
    }

    @media(min-width:1440px) {

        .max-width-adaptive,
        .max-width-adaptive-xl,
        .max-width-adaptive-xxl,
        .max-width-adaptive-xxxl {
            max-width: 1440px
        }
    }

    @media(min-width:1600px) {

        .max-width-adaptive,
        .max-width-adaptive-xxl,
        .max-width-adaptive-xxxl {
            max-width: 1600px
        }
    }

    @media(min-width:1920px) {
        .max-width-adaptive-xxxl {
            max-width: 1920px
        }
    }

    .max-width-xxxxs {
        max-width: 320px
    }

    .max-width-xxxs {
        max-width: 416px
    }

    .max-width-xxs {
        max-width: 512px
    }

    .max-width-xs {
        max-width: 608px
    }

    .max-width-sm {
        max-width: 768px
    }

    .max-width-md {
        max-width: 1024px
    }

    .max-width-lg {
        max-width: 1280px
    }

    .max-width-xl {
        max-width: 1440px
    }

    .max-width-xxl {
        max-width: 1600px
    }

    .max-width-xxxl {
        max-width: 1920px
    }

    .max-width-xxxxl {
        max-width: 2400px
    }

    .max-width-100\% {
        max-width: 100%
    }

    .max-width-none {
        max-width: none
    }

    [type=button],
    [type=reset],
    [type=submit],
    button {
        -webkit-appearance: button
    }

    .btn {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        align-items: center;
        background-color: #b6c2cd;
        border: 2px solid transparent;
        border-radius: 4px;
        color: #293847;
        cursor: pointer;
        display: inline-flex;
        font-family: Hind Madurai, Hind-fallback, Arial, sans-serif;
        font-size: 16px;
        justify-content: center;
        line-height: 1.5;
        padding: 8px 16px;
        position: relative;
        text-decoration: none;
        transition: all 70ms cubic-bezier(.4, .14, .3, 1);
        white-space: nowrap;
        will-change: transform
    }

    .btn:focus {
        box-shadow: 0 0 0 2px rgba(41, 56, 71, .3);
        outline: none
    }

    .btn--sm {
        font-size: 12px;
        height: 32px;
        padding-bottom: 6px;
        padding-top: 6px
    }

    .btn--sm.btn--icon {
        grid-gap: 0 4px;
        gap: 0 4px
    }

    .btn--sm.btn--onlyIcon {
        padding-left: 6px;
        padding-right: 6px
    }

    .btn--md {
        font-size: 14px;
        height: 40px;
        padding-bottom: 7px;
        padding-top: 7px
    }

    .btn--md.btn--onlyIcon {
        padding-left: 7px;
        padding-right: 7px
    }

    .btn--lg {
        font-size: 16px;
        height: 48px;
        padding-bottom: 8px;
        padding-top: 8px
    }

    .btn--lg.btn--onlyIcon {
        padding-left: 8px;
        padding-right: 8px
    }

    .btn--icon {
        grid-gap: 0 8px;
        gap: 0 8px
    }

    .btn--icon>.icon {
        --size: 1rem
    }

    .btn--icon-only {
        padding-left: 8px;
        padding-right: 8px
    }

    .btn--icon-reverse {
        flex-direction: row-reverse
    }

    .btn--neutral {
        background-color: #293847;
        color: #fff
    }

    .btn--neutral:hover {
        background-color: #0f1419;
        color: #fff
    }

    .btn--neutral:focus {
        box-shadow: 0 0 0 2px rgba(9, 110, 200, .3)
    }

    .btn--neutral.is-disabled,
    .btn--neutral[disabled] {
        background-color: #b6c2cd
    }

    .btn--neutral.btn--outlined {
        background-color: #fff;
        border: 2px solid #293847;
        color: #293847
    }

    .btn--neutral.btn--outlined:hover {
        background-color: #0f1419;
        border-color: transparent;
        color: #fff
    }

    .btn--neutral.btn--outlined:focus {
        box-shadow: 0 0 0 2px rgba(41, 56, 71, .3)
    }

    .btn--neutral.btn--outlined.is-disabled,
    .btn--neutral.btn--outlined[disabled] {
        background-color: #fff;
        border-color: #b6c2cd;
        color: #b6c2cd
    }

    .btn--action {
        background-color: #096ec8;
        color: #fff
    }

    .btn--action:hover {
        background-color: #064e8e;
        color: #fff
    }

    .btn--action:focus {
        box-shadow: 0 0 0 2px rgba(9, 110, 200, .3)
    }

    .btn--action.is-disabled,
    .btn--action[disabled] {
        background-color: #b6c2cd
    }

    .btn--action.btn--outlined {
        background-color: #fff;
        border: 2px solid #096ec8;
        color: #096ec8
    }

    .btn--action.btn--outlined:hover {
        background-color: #064e8e;
        border-color: transparent;
        color: #fff
    }

    .btn--action.btn--outlined:focus {
        box-shadow: 0 0 0 2px rgba(9, 110, 200, .3)
    }

    .btn--action.btn--outlined.is-disabled,
    .btn--action.btn--outlined[disabled] {
        background-color: #fff;
        border-color: #b6c2cd;
        color: #b6c2cd
    }

    .btn--business {
        background-color: #2bb04a;
        color: #fff
    }

    .btn--business:hover {
        background-color: #1f7d35;
        color: #fff
    }

    .btn--business:focus {
        box-shadow: 0 0 0 2px rgba(43, 176, 74, .3)
    }

    .btn--business.is-disabled,
    .btn--business[disabled] {
        background-color: #b6c2cd
    }

    .btn--business.btn--outlined {
        background-color: #fff;
        border: 2px solid #2bb04a;
        color: #2bb04a
    }

    .btn--business.btn--outlined:hover {
        background-color: #1f7d35;
        border-color: transparent;
        color: #fff
    }

    .btn--business.btn--outlined:focus {
        box-shadow: 0 0 0 2px rgba(43, 176, 74, .3)
    }

    .btn--business.btn--outlined.is-disabled,
    .btn--business.btn--outlined[disabled] {
        background-color: #b6c2cd;
        border-color: #b6c2cd;
        color: #fff
    }

    .btn--cdav {
        background-color: #16b4f2;
        color: #fff
    }

    .btn--cdav:hover {
        background-color: #1080ac;
        color: #fff
    }

    .btn--cdav:focus {
        box-shadow: 0 0 0 2px rgba(22, 180, 242, .3)
    }

    .btn--cdav.is-disabled,
    .btn--cdav[disabled] {
        background-color: #b6c2cd
    }

    .btn--cdav.btn--outlined {
        background-color: #fff;
        border: 2px solid #16b4f2;
        color: #16b4f2
    }

    .btn--cdav.btn--outlined:hover {
        background-color: #1080ac;
        border-color: transparent;
        color: #fff
    }

    .btn--cdav.btn--outlined:focus {
        box-shadow: 0 0 0 2px rgba(22, 180, 242, .3)
    }

    .btn--cdav.btn--outlined.is-disabled,
    .btn--cdav.btn--outlined[disabled] {
        background-color: #b6c2cd;
        border-color: #b6c2cd;
        color: #fff
    }

    .btn--promo {
        background-color: #e23a05;
        color: #fff
    }

    .btn--promo:hover {
        background-color: #a02904;
        color: #fff
    }

    .btn--promo:focus {
        box-shadow: 0 0 0 2px rgba(226, 58, 5, .3)
    }

    .btn--promo.is-disabled,
    .btn--promo[disabled] {
        background-color: #b6c2cd
    }

    .btn--promo.btn--outlined {
        background-color: #fff;
        border: 2px solid #e23a05;
        color: #e23a05
    }

    .btn--promo.btn--outlined:hover {
        background-color: #a02904;
        border-color: transparent;
        color: #fff
    }

    .btn--promo.btn--outlined:focus {
        box-shadow: 0 0 0 2px rgba(226, 58, 5, .3)
    }

    .btn--promo.btn--outlined.is-disabled,
    .btn--promo.btn--outlined[disabled] {
        background-color: #b6c2cd;
        border-color: #b6c2cd;
        color: #fff
    }

    .btn--link {
        background-color: transparent;
        color: #096ec8;
        text-decoration: underline
    }

    .btn--link:hover {
        color: #064e8e;
        text-decoration: none
    }

    .btn--link:focus {
        box-shadow: 0 0 0 2px rgba(9, 110, 200, .3)
    }

    .btn--link.btn--reset {
        padding: initial
    }

    .btn--link.btn--reset:focus {
        box-shadow: none
    }

    .btn--negative {
        background-color: transparent;
        border: 2px solid #fff;
        color: #fff
    }

    .btn--negative:hover {
        background-color: #fff;
        color: #293847
    }

    .btn--negative:focus {
        box-shadow: 0 0 0 2px hsla(0, 0%, 100%, .3)
    }

    .btn--negative.is-disabled,
    .btn--negative[disabled] {
        background-color: #fff;
        border-color: #b6c2cd;
        color: #b6c2cd
    }

    .btn--rounded {
        border-radius: 50em
    }

    .btn--transparent {
        background-color: transparent;
        border-color: transparent
    }

    .btn--reset {
        outline-offset: 0;
        padding: 0
    }

    .btn--reset,
    .btn--reset:hover {
        background: transparent none repeat 0 0/auto auto padding-box border-box scroll;
        background: initial;
        border: initial
    }

    .btn--reset:focus {
        box-shadow: 0 0 0 2px rgba(9, 110, 200, .3)
    }

    .btn[disabled],
    .is-disabled {
        pointer-events: none
    }

    .btn[disabled],
    .btn[readonly],
    .is-disabled {
        cursor: not-allowed
    }

    .btn--clear {
        align-content: center;
        background-color: transparent;
        border-radius: 2px;
        box-shadow: 0 0 0 2px transparent;
        color: #293847;
        cursor: pointer;
        display: flex;
        flex: 0 0 auto;
        flex-wrap: wrap;
        font-family: Hind Madurai, Hind-fallback, Arial, sans-serif;
        font-size: 16px;
        height: 24px;
        padding: 4px;
        width: 24px
    }

    .btn--clear:hover {
        background-color: #e4e7eb;
        color: #000
    }

    .btn--clear:focus {
        box-shadow: 0 0 0 2px #b3d2ee;
        color: #293847;
        outline: none
    }

    .btn--liveProduct {
        background-color: #f2f3f5;
        border: 0;
        border-radius: 4px;
        padding: 0 8px 0 0
    }

    .btn--liveProduct>svg {
        margin-right: 8px
    }

    .btn--liveProduct--big {
        box-shadow: 0 1px 4px rgba(50, 50, 50, .15);
        font-size: 14px;
        padding: 0 16px 0 0
    }

    .btn--liveProduct--big>svg {
        margin-right: 16px
    }

    .btn--liveProduct--small {
        font-size: 12px;
        padding: 0 8px 0 0
    }

    .btn--liveProduct--small>svg {
        margin-right: 8px
    }

    .btn--addedToBasket {
        grid-gap: 0 4px;
        background-color: transparent;
        border-color: transparent;
        color: #2bb04a;
        gap: 0 4px
    }

    .btn--wishlist {
        background-color: transparent;
        border-radius: 50em;
        box-shadow: 0 0 0 2px #e4e7eb;
        color: #293847
    }

    .btn--wishlist:hover {
        color: #e23a05
    }

    .btn--wishlist:hover svg {
        -webkit-transform: scale(1.125);
        transform: scale(1.125)
    }

    .btn--wishlist:hover svg path {
        stroke: #e23a05;
        transition: all .15s cubic-bezier(0, 0, .3, 1)
    }

    .btn--wishlist.is-active svg,
    .btn--wishlist:active svg {
        -webkit-transform: scale(1.25);
        transform: scale(1.25)
    }

    .btn--wishlist.is-active svg path,
    .btn--wishlist:active svg path {
        stroke: #e23a05;
        fill: #e23a05
    }

    .btn--loader {
        position: relative;
        -webkit-transform: all .11s cubic-bezier(0, 0, .3, 1);
        transform: all .11s cubic-bezier(0, 0, .3, 1)
    }

    .btn--loader.is-loading {
        padding-right: 2.5em !important
    }

    .btn--loader.is-loading>.loader {
        opacity: 1;
        visibility: visible;
        z-index: auto
    }

    .btn--loader>.loader {
        height: 1em;
        left: 50%;
        left: auto;
        margin: -.5em;
        opacity: 0;
        position: absolute;
        right: 1.25em;
        top: 50%;
        -webkit-transform: all .11s cubic-bezier(0, 0, .3, 1);
        transform: all .11s cubic-bezier(0, 0, .3, 1);
        width: 1em;
        z-index: -1
    }

    .loader {
        transform-box: fill-box;
        -webkit-transform-origin: 50% 50%;
        transform-origin: 50% 50%
    }

    .is-loading .loader.loader-spin {
        -webkit-animation: loader-spin 1s linear infinite;
        animation: loader-spin 1s linear infinite
    }

    .loader-ring {
        box-sizing: content-box;
        color: inherit;
        display: inline-block;
        height: 1em;
        position: relative;
        width: 1em
    }

    .loader-ring:after {
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        border: .3em solid;
        border-left: .3em solid transparent;
        border-radius: 50%;
        box-sizing: border-box;
        content: " ";
        display: block;
        height: 2em;
        -webkit-transform: translateZ(0) scale(.5);
        transform: translateZ(0) scale(.5);
        -webkit-transform-origin: 0 0;
        transform-origin: 0 0;
        width: 2em
    }

    @-webkit-keyframes loader-spin {
        0% {
            -webkit-animation-timing-function: cubic-bezier(.5856, .0703, .4143, .9297);
            animation-timing-function: cubic-bezier(.5856, .0703, .4143, .9297);
            -webkit-transform: rotate(0);
            transform: rotate(0)
        }

        to {
            -webkit-transform: rotate(1turn);
            transform: rotate(1turn)
        }
    }

    @keyframes loader-spin {
        0% {
            -webkit-animation-timing-function: cubic-bezier(.5856, .0703, .4143, .9297);
            animation-timing-function: cubic-bezier(.5856, .0703, .4143, .9297);
            -webkit-transform: rotate(0);
            transform: rotate(0)
        }

        to {
            -webkit-transform: rotate(1turn);
            transform: rotate(1turn)
        }
    }

    .btn--checked {
        position: relative;
        -webkit-transform: all 70ms cubic-bezier(0, 0, .3, 1);
        transform: all 70ms cubic-bezier(0, 0, .3, 1)
    }

    .btn--checked.is-checked {
        background-color: #1f7d35;
        padding-left: 2.5em !important;
        pointer-events: none
    }

    .btn--checked.is-checked.btn--outlined {
        background-color: inherit
    }

    .btn--checked.is-checked>.icon {
        opacity: 1;
        visibility: visible;
        z-index: auto
    }

    .btn--checked.is-checked>.icon>* {
        stroke-dasharray: 18;
        stroke-dashoffset: 0
    }

    .btn--checked>.icon {
        height: 1em;
        left: 50%;
        margin: -.5em;
        opacity: 0;
        position: absolute;
        -webkit-transform: all 70ms cubic-bezier(0, 0, .3, 1);
        transform: all 70ms cubic-bezier(0, 0, .3, 1);
        width: 1em;
        z-index: -1
    }

    .btn--checked>.icon>* {
        stroke-dasharray: 18;
        stroke-dashoffset: 18;
        transition: stroke-dashoffset .3s
    }

    .btn--checked>.icon {
        left: 1.25em;
        right: auto;
        top: 50%
    }

    .btns {
        display: inline-flex
    }

    .btns>.btn {
        border-radius: 0
    }

    .btns>.btn:only-child {
        border-radius: 4px
    }

    .btns :first-child .btn,
    .btns>:first-child {
        border-radius: 4px 0 0 4px
    }

    .btns :last-child .btn,
    .btns>:last-child {
        border-radius: 0 4px 4px 0
    }

    .btns[class*=gap-lg] .btn,
    .btns[class*=gap-md] .btn,
    .btns[class*=gap-sm] .btn,
    .btns[class*=gap-xl] .btn,
    .btns[class*=gap-xs] .btn {
        border-radius: 4px !important
    }

    .btns--block {
        display: flex;
        flex-direction: column
    }

    @media(min-width:512px) {
        .btns--block {
            flex-direction: row
        }
    }

    .btns--block>.btn {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%
    }

    .t-dark,
    [data-theme*=dark] {
        background-color: #293847
    }

    .t-dark .o-logoAbolive,
    .t-dark .o-logoCDS,
    .t-dark .o-logoCDS:first-letter,
    [data-theme*=dark] .o-logoAbolive,
    [data-theme*=dark] .o-logoCDS,
    [data-theme*=dark] .o-logoCDS:first-letter {
        color: #fff
    }

    .o-logoCDS {
        color: #293847;
        display: inline-block;
        font-weight: 700;
        white-space: nowrap
    }

    .o-logoCDS:first-letter {
        color: #e23a05;
        font-size: 1.1em
    }

    .o-logoCDS.o-logoCDS--pro:after {
        color: #e23a05;
        content: "Pro"
    }

    .o-logoAbolive {
        color: #16b4f2;
        font-size: 1em;
        font-weight: 700
    }

    .o-logoCagnotte {
        content: url("data:image/svg+xml;charset=utf-8,%3Csvg viewBox='0 0 16 16' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M8 16a8 8 0 1 1 8-8 8.009 8.009 0 0 1-8 8Zm.182-13.714a5.818 5.818 0 0 0-5.896 5.722 5.81 5.81 0 0 0 5.896 5.706 6.006 6.006 0 0 0 4.612-2.125l-1.76-1.489a3.533 3.533 0 0 1-6.4-2.092 3.46 3.46 0 0 1 3.55-3.567 3.486 3.486 0 0 1 2.854 1.474l1.76-1.49a6.01 6.01 0 0 0-4.616-2.139Z' fill='%2316B4F2'/%3E%3C/svg%3E");
        display: inline-block;
        height: 1em;
        margin-left: .125em;
        margin-right: .125em;
        position: relative;
        vertical-align: middle;
        width: 1em
    }

    .o-text h1,
    .o-text h2,
    .o-text h3,
    .o-text h4 {
        line-height: 1.5;
        margin-bottom: 16px
    }

    .o-text h2,
    .o-text h3,
    .o-text h4 {
        margin-top: 32px
    }

    .o-text blockquote,
    .o-text ol li,
    .o-text p,
    .o-text ul li {
        line-height: 1.5
    }

    .o-text .o-text__block,
    .o-text blockquote,
    .o-text ol,
    .o-text p,
    .o-text table,
    .o-text ul {
        margin-bottom: 16px
    }

    .o-text .o-text--reset,
    .o-text .o-text--reset p {
        margin-bottom: 0
    }

    .o-text li {
        list-style: inherit
    }

    .o-text ol,
    .o-text ul {
        list-style-position: outside;
        padding-left: 1em
    }

    .o-text ol ol,
    .o-text ol ul,
    .o-text ul ol,
    .o-text ul ul {
        margin-bottom: 0;
        padding-left: 1em
    }

    .o-text ul {
        list-style-type: disc
    }

    .o-text ol {
        list-style-type: decimal
    }

    .o-text .no-bullet {
        list-style-type: none
    }

    .o-text img {
        display: block;
        margin: 0 auto
    }

    .o-text figcaption {
        margin-top: 8px;
        text-align: center
    }

    .o-text em {
        font-style: italic
    }

    .o-text .hr,
    .o-text hr {
        margin: 16px auto
    }

    .o-text>:first-child {
        margin-top: 0
    }

    .o-text>:last-child {
        margin-bottom: 0
    }

    .o-icon-i {
        background-color: #fff;
        border-radius: 50%;
        box-shadow: inset 0 0 0 1px #b6c2cd;
        color: #293847;
        cursor: pointer;
        display: inline-block;
        font-size: 12px;
        font-weight: 700;
        height: 16px;
        line-height: 18px;
        position: relative;
        text-align: center;
        text-decoration: none !important;
        -webkit-user-select: none;
        -ms-user-select: none;
        user-select: none;
        vertical-align: middle;
        width: 16px;
        z-index: 1
    }

    .o-icon-i:hover {
        color: #064e8e
    }

    .o-icon-i:active {
        box-shadow: inset 0 0 0 1px #096ec8;
        color: #096ec8
    }

    .c-icon-i {
        cursor: pointer;
        display: inline-block;
        height: 16px;
        position: relative;
        -webkit-user-select: none;
        -ms-user-select: none;
        user-select: none;
        vertical-align: middle;
        width: 16px
    }

    .c-icon-i:hover path.i-icon__text {
        fill: #064e8e
    }

    .c-icon-i:active path.i-icon__stroke {
        stroke: #096ec8
    }

    .c-icon-i:active path.i-icon__text {
        fill: #096ec8
    }

    .c-sponsoredMentions {
        color: #3c4d5d
    }

    [data-version=v2].c-sponsoredMentions {
        grid-gap: 4px;
        align-items: center;
        color: #b6c2cd;
        display: inline-flex;
        font-size: 10px;
        font-weight: 400;
        gap: 4px;
        height: auto;
        line-height: 1.5
    }

    [data-version=v2].c-sponsoredMentions .c-icon {
        align-items: center;
        color: currentColor;
        cursor: pointer;
        display: flex;
        height: auto;
        justify-items: center;
        line-height: normal;
        width: auto
    }

    [data-version=v2].c-sponsoredMentions .c-icon>.icon {
        --size: 1em
    }

    [data-version=v2].c-sponsoredMentions .c-icon--\? .i-icon--\? {
        display: block
    }

    [data-version=v2].c-sponsoredMentions .c-icon--\? .i-icon--i {
        display: none
    }

    [data-version=v2].c-sponsoredMentions .c-icon--i .i-icon--i {
        display: block
    }

    [data-version=v2].c-sponsoredMentions .c-icon--i .i-icon--\? {
        display: none
    }

    .o-card {
        grid-gap: 16px;
        background: #fff;
        border-radius: .25em;
        border-radius: var(--radius-md);
        box-shadow: 0 0 0 1px #e4e7eb;
        color: #293847;
        display: flex;
        flex-direction: column;
        gap: 16px;
        padding: 16px;
        position: relative
    }

    @media not all and (min-resolution:0.001dpcm) {
        @supports not (translate:none) {
            .o-card {
                grid-gap: 0;
                gap: 0
            }

            .o-card>*+* {
                margin: 16px 0 0
            }
        }
    }

    .o-card--h {
        grid-gap: 16px;
        flex-direction: row;
        gap: 16px
    }

    @media not all and (min-resolution:0.001dpcm) {
        @supports not (translate:none) {
            .o-card--h {
                grid-gap: 0;
                gap: 0
            }

            .o-card--h>*+* {
                margin: 0 0 0 16px
            }
        }
    }

    .o-card--h .o-card__image {
        flex: 0 0 auto
    }

    .o-card--h .o-card__image img {
        width: 100px
    }

    .o-card__image--overflow {
        align-items: inherit;
        margin: -16px -16px 0;
        overflow: hidden
    }

    .o-card__image--overflow>img {
        border-radius: 4px 4px 0 0
    }

    .o-card__variant {
        align-items: center;
        display: flex;
        flex-direction: row;
        padding: 16px 0 0
    }

    .o-card__variant>*+* {
        margin-left: 8px
    }

    .o-card__mention {
        letter-spacing: -.1px
    }

    .o-card__main {
        margin-top: 16px
    }

    .o-card__cdav {
        font-size: 12px
    }

    .o-card__rating {
        align-items: center;
        display: flex
    }

    .o-card__link {
        color: currentColor;
        display: block;
        text-decoration: none
    }

    .o-card__link:hover {
        color: inherit;
        text-decoration: none
    }

    .o-card__link:focus:after {
        box-shadow: 0 0 0 1px #b3d2ee
    }

    .o-card__link:after {
        border-radius: 4px;
        bottom: 0;
        content: "";
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        z-index: 0
    }

    .o-card__title {
        font-family: Hind Madurai, Hind-fallback, Arial, sans-serif;
        font-size: 16px;
        font-weight: 400
    }

    .o-card__link:hover .o-card__title {
        text-decoration: underline
    }

    .o-card__contentWrapper {
        grid-gap: 16px;
        display: flex;
        flex-direction: column;
        gap: 16px;
        height: 100%;
        justify-content: space-between;
        width: 100%
    }

    @media not all and (min-resolution:0.001dpcm) {
        @supports not (translate:none) {
            .o-card__contentWrapper {
                grid-gap: 0;
                gap: 0
            }

            .o-card__contentWrapper>*+* {
                margin: 16px 0 0
            }
        }
    }

    .o-card__contentFooter {
        align-items: flex-end;
        display: flex;
        justify-content: space-between;
        margin-top: 8px
    }

    .o-card__contentFooter>.btn {
        height: 34px
    }

    .o-card__desc {
        color: #7a8999
    }

    .o-card__desc ol li,
    .o-card__desc ul li {
        line-height: 1.5;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .o-card__desc li,
    .o-card__desc ol,
    .o-card__desc ul {
        list-style: inherit
    }

    .o-card__desc ol,
    .o-card__desc ul {
        list-style-position: inside
    }

    .o-card__desc ol ol,
    .o-card__desc ol ul,
    .o-card__desc ul ol,
    .o-card__desc ul ul {
        margin-bottom: 0;
        padding-left: 1em
    }

    .o-card__desc ul {
        list-style-type: disc
    }

    .o-card__desc ol {
        list-style-type: decimal
    }

    .o-card__footer .o-picto span:nth-child(2) {
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        overflow: hidden
    }

    .o-card__priceWrapper {
        align-items: flex-end;
        display: flex;
        flex: auto;
        justify-content: space-between
    }

    .o-card__price {
        align-items: flex-end;
        display: flex;
        flex-direction: row
    }

    .o-card__price.has-button {
        align-items: flex-start;
        flex-direction: column-reverse
    }

    .o-card__price--inline>*+* {
        margin-left: 8px
    }

    .o-card__price--block {
        flex: auto
    }

    .o-card__price--block>.o-price {
        display: block;
        width: 100%
    }

    .c-productCard {
        font-size: 12px
    }

    .c-productCard--default {
        flex-direction: column;
        height: 100%;
        max-width: 216px
    }

    @media(min-width:1600px) {
        .c-productCard--default {
            flex-direction: row;
            max-width: 392px
        }

        .c-productCard--default .o-card__image {
            flex: 0 0 auto
        }
    }

    .c-productCard--default .o-card__image img {
        height: 160px;
        object-fit: contain
    }

    @media(min-width:1600px) {
        .c-productCard--default .o-card__image img {
            aspect-ratio: 1/1;
            height: inherit;
            width: 160px
        }
    }

    .c-productCard--detailed {
        flex-direction: column;
        height: 100%;
        max-width: 288px
    }

    .c-productCard--detailed .o-card__image img {
        height: 200px;
        object-fit: contain
    }

    .c-productCard--sponsored {
        flex-direction: column;
        height: 100%;
        max-width: 216px
    }

    .c-productCard--sponsored .o-card__image img {
        height: 160px;
        object-fit: contain
    }

    .c-productCard--promoFlash,
    .c-productCard--simple {
        flex-direction: row
    }

    @media(min-width:768px) {

        .c-productCard--promoFlash,
        .c-productCard--simple {
            flex-direction: column
        }
    }

    .c-productCard--promoFlash .c-label,
    .c-productCard--simple .c-label {
        position: absolute;
        z-index: 3
    }

    .c-productCard--soldout:before {
        background-color: hsla(0, 0%, 100%, .7);
        bottom: 0;
        content: "";
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        z-index: 1
    }

    .c-productCard--soldout>:not(.c-label) {
        -webkit-filter: grayscale(1);
        filter: grayscale(1)
    }

    .c-productCard--associated {
        box-shadow: none;
        height: 100%;
        width: 180px
    }

    .c-productCard--associated .o-card__image img {
        width: 124px
    }

    .c-productCard--associated .o-card__link:after {
        content: normal
    }

    .c-productCard--associated .o-card__content {
        margin-top: 8px
    }

    .c-productCard--totalAssociated {
        border: 1px solid #b6c2cd;
        height: 100%;
        width: 220px
    }

    .c-productCard--totalAssociated .o-card__header {
        align-items: center;
        background-color: #f2f3f5;
        display: flex;
        justify-content: center;
        margin-left: -16px;
        margin-right: -16px;
        margin-top: -16px
    }

    .c-associatedProduct__title {
        margin-bottom: 16px
    }

    .c-associatedProduct__icon {
        align-items: center;
        background-color: #f2f3f5;
        border-radius: 100%;
        display: flex;
        height: 24px;
        justify-content: center;
        left: calc(100% + 16px);
        position: absolute;
        top: calc(50% - 12px);
        width: 24px
    }

    .c-associatedProduct__icon>.icon {
        --size: 16px
    }

    .c-associatedProduct {
        grid-gap: 16px 56px;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        gap: 16px 56px
    }

    .c-associatedProduct li {
        position: relative
    }

    .c-associatedProduct .c-associatedProductIcon {
        height: 24px;
        left: calc(100% + 16px);
        position: absolute;
        top: calc(50% - 12px);
        width: 24px
    }

    .c-card--reassurance {
        align-items: center;
        justify-content: center
    }

    .c-card--reassurance .o-card__image img {
        width: auto
    }

    .c-card--QList .o-card__image {
        margin: -16px -16px 0
    }

    .c-card--QList .o-card__image img {
        aspect-ratio: auto;
        border-radius: 4px 4px 0 0
    }

    .c-card--nano {
        --radius-md: 0px;
        grid-gap: 8px;
        align-items: center;
        box-shadow: none;
        flex-direction: row;
        gap: 8px;
        padding: 8px
    }

    @media not all and (min-resolution:0.001dpcm) {
        @supports not (translate:none) {
            .c-card--nano {
                grid-gap: 0;
                gap: 0
            }

            .c-card--nano>*+* {
                margin: 0 0 0 8px
            }
        }
    }

    .c-card--nano .o-card__image {
        flex: 0 0 auto
    }

    .c-card--nano .o-card__image img {
        width: 64px
    }

    .c-card--nano .o-card__actions {
        align-items: center;
        display: flex;
        justify-content: center
    }

    .c-card--nano .o-card__actions .icon {
        --size: 24px
    }

    .c-card--mini {
        --radius-md: 8px;
        grid-gap: 8px;
        align-items: flex-start;
        box-shadow: none;
        flex-direction: row;
        gap: 8px;
        padding: 16px
    }

    @media not all and (min-resolution:0.001dpcm) {
        @supports not (translate:none) {
            .c-card--mini {
                grid-gap: 0;
                gap: 0
            }

            .c-card--mini>*+* {
                margin: 0 0 0 8px
            }
        }
    }

    .c-card--mini .o-card__image {
        flex: 0 0 auto
    }

    .c-card--mini .o-card__image img {
        width: 96px
    }

    .c-card--mini .o-card__link>*+* {
        margin-top: 8px
    }

    .o-picto {
        align-items: center;
        display: inline-flex
    }

    .o-picto>*+* {
        margin-left: 4px
    }

    .o-picto--baseline {
        align-items: baseline
    }

    .o-picto--flex-end {
        align-items: flex-end
    }

    .o-picto--flex-start {
        align-items: flex-start
    }

    .o-picto--reverse {
        flex-direction: row-reverse
    }

    .o-picto.link {
        padding-left: calc(1.14em + 2px);
        position: relative
    }

    .o-picto.link>[class*=" cds-"],
    .o-picto.link>[class^=cds-] {
        font-size: 1.14em;
        left: 0;
        position: absolute;
        top: calc(50% - .5em)
    }

    .o-picto.link.o-picto--reverse {
        padding-left: inherit;
        padding-right: calc(1.14em + 2px)
    }

    .o-picto.link.o-picto--reverse>[class*=" cds-"],
    .o-picto.link.o-picto--reverse>[class^=cds-] {
        left: inherit;
        right: 0
    }

    .o-picto--link {
        text-decoration: none
    }

    .o-overlay {
        background-color: rgba(41, 56, 71, .5);
        bottom: 0;
        height: 100vh;
        left: 0;
        opacity: 0;
        position: fixed;
        right: 0;
        top: 0;
        transition: opacity .7s;
        visibility: hidden;
        width: 100vw;
        z-index: 1
    }

    .o-overlay.fade {
        opacity: 0
    }

    .o-overlay.show {
        opacity: .5
    }

    .o-overlay--below {
        z-index: -1
    }

    .o-overlay--above {
        z-index: 1
    }

    .o-overlay--is-visible {
        opacity: 1;
        visibility: visible
    }

    .o-breadcrumb {
        align-items: center;
        display: inline-block;
        display: inline-flex;
        margin: 0;
        padding: 0
    }

    .o-breadcrumb__item {
        list-style: none;
        margin: 0;
        padding: 0;
        white-space: nowrap
    }

    .o-breadcrumb__item+.o-breadcrumb__item:before {
        content: "/";
        display: inline-block;
        font-weight: 400;
        padding-left: 8px;
        padding-right: 8px
    }

    .o-breadcrumb__link {
        color: #293847;
        text-decoration: none
    }

    .o-breadcrumb__link:hover {
        color: #293847;
        text-decoration: underline
    }

    .o-breadcrumb__link:focus {
        outline-offset: -1px
    }

    .o-breadcrumb__item--current {
        font-weight: 700;
        max-width: 200px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .c-breadcrumb {
        display: flex
    }

    .c-breadcrumb>ol,
    .c-breadcrumb>ul {
        -ms-overflow-style: none;
        overflow-x: auto;
        scrollbar-width: none
    }

    .c-breadcrumb>ol::-webkit-scrollbar,
    .c-breadcrumb>ul::-webkit-scrollbar {
        display: none
    }

    .c-breadcrumb>ol.is-active,
    .c-breadcrumb>ul.is-active {
        cursor: grabbing;
        cursor: -webkit-grabbing
    }

    .c-breadcrumb__item--back {
        border-right: 1px solid #b6c2cd;
        display: inline-flex;
        margin-right: 8px;
        padding-right: 8px
    }

    .c-breadcrumb__item--back .c-breadcrumb__link {
        color: #096ec8;
        text-decoration: none
    }

    .c-breadcrumb__item--back .c-breadcrumb__link:hover {
        color: #064e8e;
        text-decoration: underline
    }

    .c-badge {
        --size: 1rem;
        background-color: #b6c2cd;
        border-radius: var(--size);
        display: inline-block;
        font-size: 12px;
        height: var(--size);
        line-height: var(--size);
        min-width: var(--size);
        padding: 0 6px;
        text-align: center;
        vertical-align: baseline;
        white-space: nowrap
    }

    .c-badge:empty {
        --size: 1em;
        height: .75em;
        min-width: .75em;
        padding: 0
    }

    .c-badge--xs:empty {
        --size: 8px
    }

    .c-badge--sm:empty,
    .c-badge--xs:empty {
        height: var(--size);
        min-width: var(--size)
    }

    .c-badge--sm:empty {
        --size: 12px
    }

    .c-badge--md {
        --size: 16px;
        font-weight: 400
    }

    .c-badge--lg {
        --size: 21px;
        font-size: 14px;
        font-weight: 600
    }

    .c-badge--xl {
        --size: 24px;
        font-size: 16px;
        font-weight: 600
    }

    .c-badge--icon-only {
        padding: 2px
    }

    .c-badge--icon-only.c-badge--xl {
        --size: 24px;
        font-size: 16px
    }

    .c-badge--icon-only.c-badge--xl>.icon {
        --size: 20px
    }

    .c-badge--icon-only.c-badge--md {
        --size: 16px;
        font-size: 12px
    }

    .c-badge--icon-only.c-badge--md>.icon {
        --size: 12px
    }

    .c-badge--action {
        background-color: #096ec8;
        color: #fff
    }

    .c-badge--promo {
        background-color: #e23a05;
        color: #fff
    }

    .c-badge--white {
        background-color: #fff;
        color: #096ec8
    }

    .c-badge--boa {
        background-color: #293847;
        color: #fff
    }

    .c-badge--cdav {
        background-color: #16b4f2;
        color: #fff
    }

    .c-badge--icon {
        align-items: center;
        display: flex;
        justify-content: center;
        padding: 0
    }

    .c-badge--icon>.icon {
        --size: 16px
    }

    .c-icon {
        position: relative
    }

    .c-icon .icon {
        --size: 24px
    }

    @media(min-width:768px) {
        .c-icon .icon {
            --size: 28px
        }
    }

    .c-icon .c-badge {
        position: absolute
    }

    .c-icon .c-badge:not(:empty) {
        --size: 18px
    }

    @media(min-width:768px) {
        .c-icon .c-badge:not(:empty) {
            --size: 22px
        }
    }

    .c-icon--notif {
        align-items: flex-start;
        display: flex;
        flex-direction: row
    }

    .c-icon--notif>.icon {
        --size: 24px
    }

    @media(min-width:768px) {
        .c-icon--notif>.icon {
            --size: 28px
        }
    }

    .c-icon--notif.c-icon {
        display: flex
    }

    .c-icon--notif .c-badge:not(:empty) {
        --size: 18px
    }

    @media(min-width:768px) {
        .c-icon--notif .c-badge:not(:empty) {
            --size: 22px
        }
    }

    .c-icon--notif .c-badge {
        left: calc(100% - .5em - 1px);
        position: absolute;
        top: 0
    }

    .c-icon__badge>.icon {
        --size: 16px
    }

    .c-price {
        display: inline-block;
        font-family: Montserrat, Montserrat-fallback, Verdana, sans-serif;
        font-weight: 700;
        white-space: nowrap
    }

    .c-price sup {
        font-size: 50%;
        top: 0;
        vertical-align: revert
    }

    .c-price sub {
        bottom: 0;
        font-size: 50%;
        vertical-align: unset
    }

    .c-price ins {
        font-family: Montserrat, Montserrat-fallback, Verdana, sans-serif;
        font-weight: 700;
        text-decoration: none
    }

    .c-price del,
    .c-price s,
    .c-price-s {
        font-family: Hind Madurai, Hind-fallback, Arial, sans-serif;
        font-weight: 400
    }

    .c-price-s {
        display: inline-block;
        white-space: nowrap
    }

    .c-price-s sup {
        align-self: baseline;
        font-size: 50%
    }

    .c-price-s sub {
        font-size: 50%;
        vertical-align: baseline
    }

    .c-price-s ins {
        font-family: Hind Madurai, Hind-fallback, Arial, sans-serif;
        font-weight: 400;
        text-decoration: none
    }

    .c-price__label {
        line-height: 1.5
    }

    .c-price__label,
    .c-price__mention {
        font-family: Hind Madurai, Hind-fallback, Arial, sans-serif;
        font-size: 12px
    }

    .c-price__mention {
        color: #7a8999;
        font-weight: 400;
        letter-spacing: -.1px
    }

    .c-price--xl {
        font-size: 48px;
        line-height: 1.5
    }

    .c-price--lg {
        font-size: 32px;
        line-height: 1.5
    }

    .c-price--md {
        font-size: 21px;
        line-height: 1.5
    }

    .c-price--sm {
        font-size: 16px;
        line-height: 1.5
    }

    .c-price--xs {
        font-size: 14px;
        line-height: 1.5
    }

    .c-price--promo {
        color: #e23a05
    }

    .c-price--mention {
        grid-gap: 0 4px;
        align-items: center;
        display: flex;
        flex-wrap: wrap;
        gap: 0 4px
    }

    @media not all and (min-resolution:0.001dpcm) {
        @supports not (translate:none) {
            .c-price--mention {
                grid-gap: 0;
                gap: 0
            }

            .c-price--mention>*+* {
                margin-left: 4px;
                margin-top: 0
            }
        }
    }

    .c-price--mention.c-price--xs {
        grid-gap: 0 4px;
        gap: 0 4px
    }

    @media not all and (min-resolution:0.001dpcm) {
        @supports not (translate:none) {
            .c-price--mention.c-price--xs {
                grid-gap: 0;
                gap: 0
            }

            .c-price--mention.c-price--xs>*+* {
                margin-left: 4px;
                margin-top: 0
            }
        }
    }

    .c-price--mention.c-price--lg,
    .c-price--mention.c-price--md,
    .c-price--mention.c-price--sm {
        grid-gap: 0 8px;
        gap: 0 8px
    }

    @media not all and (min-resolution:0.001dpcm) {
        @supports not (translate:none) {

            .c-price--mention.c-price--lg,
            .c-price--mention.c-price--md,
            .c-price--mention.c-price--sm {
                grid-gap: 0;
                gap: 0
            }

            .c-price--mention.c-price--lg>*+*,
            .c-price--mention.c-price--md>*+*,
            .c-price--mention.c-price--sm>*+* {
                margin-left: 8px;
                margin-top: 0
            }
        }
    }

    .c-price--text {
        font-weight: 400
    }

    .c-price--text,
    .is-strikethrough {
        font-family: Hind Madurai, Hind-fallback, Arial, sans-serif
    }

    .is-strikethrough {
        text-decoration: line-through
    }

    .c-price-alt {
        grid-gap: 8px;
        display: inline-flex;
        font-family: Montserrat, Montserrat-fallback, Verdana, sans-serif;
        font-size: 48px;
        font-weight: 700;
        gap: 8px
    }

    .c-price-alt sup {
        display: inline-flex;
        font-size: 50%;
        position: relative;
        top: .37em
    }

    .c-price-s.hideFromPro,
    .c-price.hideFromPro {
        display: flex
    }

    .c-price-s.displayToPro,
    .c-price.displayToPro,
    html.isPro .c-price-s.hideFromPro,
    html.isPro .c-price.hideFromPro {
        display: none
    }

    html.isPro .c-price-s.displayToPro,
    html.isPro .c-price.displayToPro {
        display: flex
    }

    .newBasket .bProductLinePriceBloc>div .c-price--mention {
        justify-content: flex-end
    }

    .c-star {
        align-items: center;
        display: flex
    }

    .c-star>*+* {
        margin-left: .25rem
    }

    .c-star__notation {
        font-size: 1em
    }

    .c-star-rating {
        grid-gap: 0;
        display: flex;
        gap: 0
    }

    .c-dot-rating {
        grid-gap: 4px;
        display: flex;
        gap: 4px
    }

    .o-dot,
    .o-star {
        fill: #b6c2cd
    }

    .o-dot.active,
    .o-star.active {
        fill: #ffce00
    }

    .c-star-rating--small .o-star,
    .o-dot {
        height: 16px;
        width: 16px
    }

    .c-star-rating--medium .o-star {
        height: 24px;
        width: 24px
    }

    .c-star-rating--large .o-star {
        height: 32px;
        width: 32px
    }

    .c-dots-rating {
        align-items: center;
        display: inline-flex;
        justify-content: center
    }

    .c-dots-rating>.c-dots-result__text {
        font-size: 14px;
        margin-left: 8px
    }

    .c-dots-rating,
    .c-stars-rating {
        align-items: center;
        display: inline-flex;
        justify-content: center
    }

    .c-dots-rating>.c-stars-result--small,
    .c-stars-rating>.c-stars-result--small {
        font-size: 16px
    }

    .c-dots-rating>.c-stars-result--small~.c-stars-result__text,
    .c-stars-rating>.c-stars-result--small~.c-stars-result__text {
        font-size: 12px;
        margin-left: 4px
    }

    .c-dots-rating>.c-stars-result--medium,
    .c-stars-rating>.c-stars-result--medium {
        font-size: 24px
    }

    .c-dots-rating>.c-stars-result--medium~.c-stars-result__text,
    .c-stars-rating>.c-stars-result--medium~.c-stars-result__text {
        font-size: 18px;
        margin-left: 8px
    }

    .c-dots-rating>.c-stars-result--large,
    .c-stars-rating>.c-stars-result--large {
        font-size: 32px
    }

    .c-dots-rating>.c-stars-result--large~.c-stars-result__text,
    .c-stars-rating>.c-stars-result--large~.c-stars-result__text {
        font-size: 24px;
        margin-left: 8px
    }

    a.c-stars-rating {
        text-decoration: underline
    }

    .c-dots-result,
    .c-stars-result {
        align-items: center;
        display: flex
    }

    .c-stars-result__text {
        color: #293847;
        font-size: .75em
    }

    .c-stars-result__visual {
        background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzIiIGhlaWdodD0iMzIiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTIzLjIzIDI4Yy0uMjM2IDAtLjQ2Ny0uMDY1LS42Ny0uMTg4TDE2IDIzLjgyN2wtNi41NiAzLjk4NWExLjI4OCAxLjI4OCAwIDAgMS0xLjQzNy0uMDY1IDEuMzMgMS4zMyAwIDAgMS0uNS0xLjM2NWwxLjc0LTcuNS01Ljc5LTUuMDQ1YTEuMzMxIDEuMzMxIDAgMCAxIC4wNC0yLjAyOWMuMi0uMTYxLjQ0My0uMjU5LjY5OC0uMjhsNy42MzItLjY1MkwxNC44MDQgMy44Yy4xLS4yMzcuMjY2LS40NC40OC0uNTgyYTEuMjg5IDEuMjg5IDAgMCAxIDEuNDMzIDBjLjIxMi4xNDIuMzc5LjM0NS40NzkuNTgybDIuOTggNy4wNzYgNy42MzMuNjUyYy4yNTUuMDIxLjQ5OC4xMTkuNy4yOGExLjMzIDEuMzMgMCAwIDEgLjA0IDIuMDI5bC01Ljc5IDUuMDQ3IDEuNzQgNy41YTEuMzMxIDEuMzMxIDAgMCAxLS4yNDggMS4xMTkgMS4zMDEgMS4zMDEgMCAwIDEtMS4wMi40OTdaIiBmaWxsPSIjQ0NDIi8+PC9zdmc+);
        background-position: 0 0;
        background-repeat: repeat-x;
        background-size: 24px 24px;
        display: block;
        height: 24px;
        position: relative;
        width: 120px
    }

    .c-stars-result__visual:before {
        background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzIiIGhlaWdodD0iMzIiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTIzLjIzIDI4Yy0uMjM2IDAtLjQ2Ny0uMDY1LS42Ny0uMTg4TDE2IDIzLjgyN2wtNi41NiAzLjk4NWExLjI4OCAxLjI4OCAwIDAgMS0xLjQzNy0uMDY1IDEuMzMgMS4zMyAwIDAgMS0uNS0xLjM2NWwxLjc0LTcuNS01Ljc5LTUuMDQ1YTEuMzMxIDEuMzMxIDAgMCAxIC4wNC0yLjAyOWMuMi0uMTYxLjQ0My0uMjU5LjY5OC0uMjhsNy42MzItLjY1MkwxNC44MDQgMy44Yy4xLS4yMzcuMjY2LS40NC40OC0uNTgyYTEuMjg5IDEuMjg5IDAgMCAxIDEuNDMzIDBjLjIxMi4xNDIuMzc5LjM0NS40NzkuNTgybDIuOTggNy4wNzYgNy42MzMuNjUyYy4yNTUuMDIxLjQ5OC4xMTkuNy4yOGExLjMzIDEuMzMgMCAwIDEgLjA0IDIuMDI5bC01Ljc5IDUuMDQ3IDEuNzQgNy41YTEuMzMxIDEuMzMxIDAgMCAxLS4yNDggMS4xMTkgMS4zMDEgMS4zMDEgMCAwIDEtMS4wMi40OTdaIiBmaWxsPSIjRkZDRTAwIi8+PC9zdmc+);
        bottom: 0;
        content: "";
        left: 0;
        position: absolute;
        top: 0
    }

    .c-dots-result__visual {
        background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMTYiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTAgOGE4IDggMCAxIDEgMTYgMEE4IDggMCAwIDEgMCA4WiIgZmlsbD0iI0NDQyIvPjwvc3ZnPg==);
        background-position: 0 0;
        background-repeat: repeat-x;
        background-size: 20px 16px;
        display: block;
        font-size: 16px;
        height: 16px;
        position: relative;
        width: 100px
    }

    .c-dots-result__visual:before {
        background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMTYiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTAgOGE4IDggMCAxIDEgMTYgMEE4IDggMCAwIDEgMCA4WiIgZmlsbD0iI0ZGQ0UwMCIvPjwvc3ZnPg==);
        bottom: 0;
        content: "";
        left: 0;
        position: absolute;
        top: 0
    }

    .c-stars-result--small {
        font-size: 16px
    }

    .c-stars-result--small .c-stars-result__visual {
        background-size: 16px 16px;
        height: 16px;
        width: 80px
    }

    .c-stars-result--small .c-stars-result__visual:before {
        background-size: 16px 16px
    }

    .c-stars-result--medium {
        font-size: 24px
    }

    .c-stars-result--medium .c-stars-result__visual {
        background-size: 24px 24px;
        height: 24px;
        width: 120px
    }

    .c-stars-result--medium .c-stars-result__visual:before {
        background-size: 24px 24px
    }

    .c-stars-result--large {
        font-size: 32px
    }

    .c-stars-result--large .c-stars-result__visual {
        background-size: 32px 32px;
        height: 32px;
        width: 160px
    }

    .c-stars-result--large .c-stars-result__visual:before {
        background-size: 32px 32px
    }

    [data-score="20"] .c-dots-result__visual:before {
        width: 20%
    }

    [data-score="40"] .c-dots-result__visual:before {
        width: 40%
    }

    [data-score="60"] .c-dots-result__visual:before {
        width: 60%
    }

    [data-score="80"] .c-dots-result__visual:before {
        width: 80%
    }

    [data-score="100"] .c-dots-result__visual:before {
        width: 100%
    }

    [data-score="10"] .c-stars-result__visual:before {
        width: 10%
    }

    [data-score="20"] .c-stars-result__visual:before {
        width: 20%
    }

    [data-score="30"] .c-stars-result__visual:before {
        width: 30%
    }

    [data-score="40"] .c-stars-result__visual:before {
        width: 40%
    }

    [data-score="50"] .c-stars-result__visual:before {
        width: 50%
    }

    [data-score="60"] .c-stars-result__visual:before {
        width: 60%
    }

    [data-score="70"] .c-stars-result__visual:before {
        width: 70%
    }

    [data-score="80"] .c-stars-result__visual:before {
        width: 80%
    }

    [data-score="90"] .c-stars-result__visual:before {
        width: 90%
    }

    [data-score="100"] .c-stars-result__visual:before {
        width: 100%
    }

    .c-stars-result--onlyOne.c-stars-result--small .c-stars-result__visual {
        width: 16px
    }

    .c-stars-result--onlyOne.c-stars-result--small .c-stars-result__visual:before {
        background-size: 16px 16px;
        width: 16px
    }

    .c-stars-result--onlyOne.c-stars-result--medium .c-stars-result__visual {
        width: 24px
    }

    .c-stars-result--onlyOne.c-stars-result--medium .c-stars-result__visual:before {
        background-size: 24px 24px;
        width: 24px
    }

    .c-stars-result--onlyOne.c-stars-result--large .c-stars-result__visual {
        width: 32px
    }

    .c-stars-result--onlyOne.c-stars-result--large .c-stars-result__visual:before {
        background-size: 32px 32px;
        width: 32px
    }

    .c-layer {
        font-size: 14px;
        height: 100%;
        margin: 0;
        max-width: 500px;
        position: fixed;
        right: 0;
        top: 0;
        transition: visibility 0s .24s;
        visibility: hidden;
        width: 100%;
        z-index: 1500
    }

    .c-layer:focus {
        outline: none
    }

    .c-layer--is-visible {
        transition: none;
        visibility: visible
    }

    .c-layer--open-left {
        left: 0;
        right: auto
    }

    .c-layer__content {
        border-radius: 4px 4px 0 0;
        height: 100%;
        position: absolute;
        right: 0;
        top: 0;
        -webkit-transform: translateY(100%);
        transform: translateY(100%);
        transition: -webkit-transform .24s;
        transition: transform .24s;
        transition: transform .24s, -webkit-transform .24s;
        transition-timing-function: cubic-bezier(0, 0, .38, .9);
        width: 100%
    }

    @media(min-width:512px) {
        .c-layer__content {
            border-radius: 4px 0 0 4px;
            box-shadow: 0 .9px 1.5px rgba(0, 0, 0, .03), 0 3.1px 5.5px rgba(0, 0, 0, .08), 0 14px 25px rgba(0, 0, 0, .12);
            -webkit-transform: translateX(100%);
            transform: translateX(100%)
        }
    }

    .c-layer--modal .c-layer__content {
        height: calc(100% - 80px);
        top: 80px
    }

    @media(min-width:512px) {
        .c-layer--modal .c-layer__content {
            height: 100%;
            top: 0
        }
    }

    .c-layer--open-left .c-layer__content {
        border-radius: 0 4px 4px 0;
        -webkit-transform: translateX(-100%);
        transform: translateX(-100%)
    }

    .c-layer--is-visible .c-layer__content {
        -webkit-transform: translateY(0);
        transform: translateY(0)
    }

    @media(min-width:512px) {
        .c-layer--is-visible .c-layer__content {
            -webkit-transform: translateX(0);
            transform: translateX(0)
        }
    }

    .c-layer__body {
        -ms-scroll-chaining: none;
        -webkit-overflow-scrolling: touch;
        height: 100%;
        overflow: auto;
        overscroll-behavior: contain
    }

    .c-layer__body>.c-layer__block+.c-layer__block {
        margin-top: 16px
    }

    .c-layer__close-btn {
        align-items: center;
        -webkit-appearance: none;
        appearance: none;
        border: 0;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        flex-shrink: 0;
        height: 32px;
        justify-content: center;
        transition: .11s;
        width: 32px
    }

    .c-layer__close-btn,
    .c-layer__close-btn:hover {
        background-color: #f2f3f5
    }

    .c-layer__close-btn .icon {
        color: #293847;
        display: block
    }

    .c-layer__grab {
        background: #7a8999;
        border-radius: 4px;
        margin: 8px auto;
        min-height: 4px;
        width: 32px
    }

    .c-layer__header {
        justify-content: space-between
    }

    .c-layer__footer,
    .c-layer__header {
        align-items: center;
        display: flex;
        flex-shrink: 0;
        padding: 16px
    }

    .c-layer__footer {
        grid-gap: 16px;
        flex-direction: column;
        gap: 16px;
        justify-content: flex-end;
        position: relative;
        z-index: 1
    }

    @media(min-width:768px) {
        .c-layer__footer {
            flex-direction: row
        }
    }

    .c-layer__footer.has-shadow {
        box-shadow: 0 -4px 4px rgba(50, 50, 50, .15)
    }

    .c-layer__footer>* {
        max-width: 100%;
        width: 100%
    }

    @media(min-width:768px) {
        .c-layer__footer>* {
            flex-basis: 0;
            flex-grow: 1;
            flex-shrink: 1;
            max-width: 50%
        }
    }

    .c-layer--modal {
        background-color: rgba(41, 56, 71, 0);
        max-width: none;
        transition: background-color .4s, visibility 0s .4s
    }

    .c-layer--modal.c-layer--is-visible {
        background-color: rgba(41, 56, 71, .5);
        transition: background-color .4s
    }

    .c-layer--modal.c-layer--open-left .c-layer__content {
        left: 0;
        right: auto
    }

    .c-layer--modal .c-layer__content {
        max-width: 500px
    }

    .c-layer--header {
        --layer-header--bg: #293847
    }

    .c-layer--header.c-layer--modal .c-layer__content {
        box-shadow: 4px 0 4px 0 rgba(41, 56, 71, .15);
        box-shadow: var(--shadow-right);
        height: inherit;
        max-width: 90vw;
        top: inherit
    }

    @media(min-width:768px) {
        .c-layer--header.c-layer--modal .c-layer__content {
            max-width: 364px
        }
    }

    .c-layer--header .c-layer__grab,
    .c-layer--header .c-layer__header {
        background-color: var(--layer-header--bg)
    }

    .c-layer--header .c-layer__header {
        height: var(--header-main--calcHeight)
    }

    .c-layer--header .c-layer__close-btn {
        background-color: transparent;
        color: #fff
    }

    .c-layer--header .c-layer__close-btn .icon {
        --size: 24px;
        color: #fff
    }

    .actionButton,
    .btAdded,
    .btBlue,
    .btDisabled,
    .btGreen,
    .btGrey,
    .btOrange,
    .btPink,
    .btPopin,
    .btRed,
    .btWhite,
    .mainButton {
        background-position: 0 bottom;
        background-repeat: repeat-x;
        background-size: contain;
        border: 1px solid;
        border-radius: 4px;
        color: #fff;
        cursor: pointer;
        font-size: 14px;
        text-align: center;
        text-decoration: none;
        white-space: nowrap
    }

    .actionButton,
    .btBlue,
    .btGreen,
    .btMinor,
    .btOrange,
    .btPopin,
    .btRed,
    .btWhite,
    .mainButton {
        border-radius: 4px;
        cursor: pointer;
        outline: none;
        text-align: center;
        text-decoration: none
    }

    .btFS,
    .btS {
        border: 1px solid;
        font-size: 14px !important;
        height: 32px;
        line-height: 1.5 !important
    }

    .btS {
        padding: 0 16px !important
    }

    .btSP {
        margin-top: 30px;
        padding: 10px 60px !important
    }

    .hOverlays .btS {
        padding: 0 !important
    }

    .btF,
    .btL {
        border: 2px solid;
        font-size: 16px;
        height: 48px;
        line-height: 1.5 !important
    }

    .btL {
        padding: 0 20px !important;
        width: auto !important
    }

    .btF,
    .btFS {
        display: block;
        padding: 0;
        width: 100%
    }

    .btGreen {
        background: linear-gradient(180deg, #2bb04a 0, #2bb04a);
        background-color: #2bb04a;
        border-color: #2bb04a;
        color: #fff !important
    }

    .btGrey {
        background-color: #e5e5eb;
        border-color: #e5e5eb;
        color: #323232
    }

    .btBlue,
    .btPopin {
        background: linear-gradient(180deg, #096ec8 0, #096ec8);
        background-color: #096ec8;
        border-color: #096ec8;
        color: #fff
    }

    .btPopin {
        font-size: 16px;
        height: 48px;
        line-height: 1.5
    }

    .btOrange {
        background-color: #fff;
        border-color: #2bb04a;
        color: #2bb04a;
        -webkit-filter: none;
        filter: none
    }

    .mainButton {
        background-color: #096ec8;
        border: 1px solid #096ec8;
        color: #fff !important
    }

    .actionButton,
    .mainButton {
        font-weight: 400;
        padding: 10px
    }

    .actionButton {
        background-color: #fff;
        border: 1px solid #096ec8 !important;
        color: #096ec8 !important;
        margin-bottom: 5px
    }

    .mainButton.btDisabled,
    .mainButton.btDisabled:hover {
        background: #84b6e3;
        color: #fff;
        cursor: default
    }

    .btAdd .btOrange {
        border: 1px solid;
        font-size: 16px;
        height: 48px;
        line-height: 1.5
    }

    .btPink {
        background-color: #d7205f;
        border-color: #ac1146
    }

    .btWhite {
        background: linear-gradient(180deg, #fff 0, #fff);
        background-color: #fff;
        border-color: #096ec8;
        color: #096ec8
    }

    .btRed {
        background-color: #e23a05;
        border-color: #e23a05;
        color: #fff
    }

    .btDisabled {
        background: linear-gradient(180deg, #d7d9e4 0, #d7d9e4);
        background-color: #d7d9e4;
        border: none;
        color: #fff;
        cursor: default;
        text-align: center
    }

    .btAdded {
        background: #f1f2f6 !important;
        border: 1px solid #c7d5de !important;
        color: #868789 !important
    }

    .clickDisabled {
        cursor: not-allowed
    }

    .btMinor {
        background-color: #fff;
        border-color: #fff;
        border-style: none;
        color: #096ec8
    }

    .aiShippingBtn {
        height: 46px;
        width: 100%
    }

    .btGreen:not(.clickDisabled):hover {
        background: linear-gradient(180deg, #44c260 0, #44c260);
        background-color: #44c260;
        border-color: #44c260;
        color: #fff;
        text-decoration: none
    }

    .btSearch,
    .btSearch:not(.clickDisabled):hover {
        background-color: #2bb04a;
        background-position: 50%;
        background-repeat: no-repeat;
        min-height: 48px;
        min-width: 48px
    }

    .btGrey:hover {
        background-color: #e5e5eb;
        color: #323232
    }

    .btBlue:hover,
    .btPopin:hover {
        background: #3757c9;
        color: #fff
    }

    .btBlue:not(.clickDisabled):hover,
    .btPopin:not(.clickDisabled):hover {
        background: linear-gradient(180deg, #398eda 0, #398eda);
        background-color: #398eda;
        border-color: #398eda;
        color: #fff;
        text-decoration: none
    }

    .btOrange:not(.clickDisabled):hover {
        background-color: #2bb04a;
        color: #fff;
        text-decoration: none
    }

    .btPink:hover {
        background: #d7205f;
        color: #fff
    }

    .btWhite:hover {
        background: #f4f6f9;
        color: #4e6487
    }

    .mainButton:hover {
        background: #398eda;
        color: #fff
    }

    .actionButton:hover {
        background: #398eda;
        border-color: #398eda;
        color: #fff !important
    }

    .btWhite:not(.clickDisabled):hover {
        background: linear-gradient(180deg, #398eda 0, #398eda);
        background-color: #398eda;
        border-color: #398eda;
        color: #fff;
        text-decoration: none
    }

    .btRed:not(.clickDisabled):hover {
        background-color: #e44919;
        border-color: #e44919
    }

    .btDisabled:hover {
        background-color: #d7d9e4;
        color: #fff;
        cursor: default
    }

    .btAdded:hover {
        background-color: #f1f2f6;
        color: #868789;
        cursor: default
    }

    .btMinor:not(.clickDisabled):hover {
        background: linear-gradient(180deg, #f8f9fa 0, #f8f9fa);
        background-color: #f8f9fa;
        border-color: #f8f9fa;
        color: #439be9;
        text-decoration: none
    }

    .btBlue:active,
    .btGreen:active,
    .btOrange:active,
    .btPink:active,
    .btPopin:active,
    .btWhite:active {
        box-shadow: none
    }

    .btUp {
        text-transform: uppercase
    }

    .btGreen.clickDisabled {
        background: linear-gradient(180deg, #95d7a4 0, #95d7a4);
        background-color: #95d7a4;
        border-color: #95d7a4
    }

    .btOrange.clickDisabled {
        border-color: #95d7a4;
        color: #95d7a4
    }

    .btBlue.clickDisabled,
    .btPopin.clickDisabled {
        background: linear-gradient(180deg, #84b6e3 0, #84b6e3);
        background-color: #84b6e3;
        border-color: #84b6e3
    }

    .btWhite.clickDisabled {
        border-color: #84b6e3;
        color: #84b6e3
    }

    .btRed.clickDisabled {
        background: linear-gradient(180deg, #f09c82 0, #f09c82);
        background-color: #f09c82;
        border-color: #f09c82
    }

    .btMinor.clickDisabled {
        color: #439be9
    }

    .btGreen.btOutline {
        background: transparent;
        color: #2bb04a
    }

    .btGreen.btLoading,
    .btGreen.btLoading.clickDisabled {
        background: linear-gradient(180deg, #2bb04a 0, #2bb04a);
        background-color: #2bb04a;
        background-position: 50%;
        background-repeat: no-repeat;
        border-color: #2bb04a;
        color: transparent
    }

    .btGreen.btLoading.btOutline,
    .btGreen.btOutline.btLoading.clickDisabled {
        background: transparent;
        background-position: 50%;
        background-repeat: no-repeat
    }

    .btGreen.btCheck {
        background: none;
        color: #2bb04a;
        font-weight: 700
    }

    .btGreen.btCheck:before {
        content: "";
        display: inline-block;
        height: 13px;
        margin-right: 6px;
        width: 15px
    }

    input::-moz-focus-inner {
        border: 0;
        margin-bottom: -2px;
        margin-top: -2px;
        padding: 0
    }

    body {
        overflow-y: scroll
    }

    .linkList a {
        color: #323232;
        display: block;
        text-decoration: none
    }

    .linkList a:hover {
        color: #ee7817
    }

    .logoCDS {
        color: #293847;
        display: inline-block;
        font-weight: 700
    }

    .logoCDS:first-letter {
        color: #e23a05;
        font-size: 1.1em
    }

    .chevronDepli,
    .ftLag>ul>li a,
    .ftMention a,
    .lk,
    .popConnect a,
    .tip a,
    [data-nf] {
        color: #096ec8;
        cursor: pointer;
        text-decoration: none
    }

    .chevronDepli:hover,
    .ftLag>ul>li a:hover,
    .ftMention a:hover,
    .lk:hover,
    .popConnect a:hover,
    .tip a:hover,
    [data-nf]:hover {
        color: #096ec8;
        text-decoration: underline
    }

    .focus input::-webkit-input-placeholder {
        color: #fff
    }

    .focus input:-moz-placeholder,
    .focus input::-moz-placeholder {
        color: #fff
    }

    .focus input:-ms-input-placeholder {
        color: #fff
    }

    div {
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
    }

    .blocCookie {
        background: #293847;
        color: #fff;
        display: none;
        font-size: 12px;
        padding: 4px;
        text-align: center;
        width: 100%
    }

    .bcClose span {
        background: #e23a05
    }

    .priceCdavTxt {
        font-size: 14.4px;
        font-weight: 700
    }

    .priceStrikedTxt {
        text-decoration: line-through
    }

    .logoAbolive {
        color: #fff
    }

    .hMsgBrowserNotSupported {
        background-color: #fff3c3;
        display: none;
        padding: 6px 18px;
        text-align: center;
        width: 100%
    }

    .hMsgBrowserNotSupported .msg {
        color: #323232;
        display: table-cell;
        font-size: 12px;
        font-weight: 400;
        vertical-align: middle
    }

    .hMsgBrowserNotSupported .picto {
        height: 15px;
        width: 15px
    }

    .ftMention {
        font-size: 14px;
        padding: 0 20px 20px
    }

    .ftMention p {
        line-height: 1.5;
        margin-bottom: 16px;
        text-align: justify
    }

    #bc {
        overflow: hidden;
        padding: 16px 16px 32px
    }

    #bc h1 {
        display: inline;
        font-size: 1em
    }

    .bcZone {
        display: table;
        padding: .4em 0 10px;
        width: 100%
    }

    .bcZone #bc {
        display: table-cell;
        padding: 0 .75em
    }

    #bc a {
        text-decoration: none
    }

    #bc a:hover {
        text-decoration: underline
    }

    .bcHelp {
        cursor: pointer;
        display: table-cell;
        padding: 0 10px;
        text-align: right;
        text-decoration: none;
        vertical-align: middle;
        white-space: nowrap
    }

    .bcHelp>span:first-child {
        display: block;
        font-size: 1.25em;
        font-weight: 700
    }

    #bc .bcBack:after {
        content: "";
        padding: 0
    }

    #bc .bcBack {
        display: inline-block;
        font-size: 1em
    }

    .bcBack {
        height: 26px;
        line-height: 26px;
        margin: 0 10px;
        padding: 0 10px;
        position: relative
    }

    .bcBack:before {
        content: " < ";
        font-size: 19px;
        margin-left: -22px;
        vertical-align: top
    }

    .bcBack a {
        color: #323232;
        font-size: 12px;
        font-weight: 700;
        height: 26px;
        line-height: 26px;
        margin: 0 -10px 5px -5px;
        padding: 0 10px;
        position: relative;
        white-space: nowrap
    }

    .anchor {
        margin-top: -74px;
        padding-top: 74px
    }

    .bottomGoogleAds,
    .googleads,
    .leftGoogleAds {
        word-wrap: break-word
    }

    .bcClose {
        font-size: 1.5em;
        width: 18px
    }

    .bcClose span {
        background: #323232;
        cursor: pointer;
        font-size: x-large;
        padding: 0 .2em
    }

    .blocNoJs {
        background: #f2f3f5;
        color: #d84148;
        font-size: 12px;
        padding: 10px;
        text-align: center;
        width: 100%
    }

    .blocNoJs div {
        display: table-cell;
        vertical-align: middle
    }

    .blocNoJs a {
        color: #096ec8;
        text-decoration: none
    }

    @media only screen {

        #footer.content,
        .content,
        header .content,
        header.content {
            max-width: 100%
        }
    }

    @media only screen and (max-width:1023px) {
        #bc {
            padding: 16px 16px 32px
        }

        .head {
            border: none;
            height: 64px;
            padding-left: 20px
        }

        .backTop {
            margin-left: 20px
        }

        .ftZn11,
        .ftZn1>.onlineList,
        .ftZn2>ul,
        .ftZn2>ul>li,
        .ftZnRs>span,
        .ftZnRs>ul {
            display: block
        }

        .ftZnRs>span {
            padding-bottom: 10px
        }

        .ftZnRs>ul {
            padding-left: 0
        }

        .ftZn11,
        .ftZn1>.onlineList,
        .ftZn3 img {
            float: none
        }

        .ftZn2>ul>li {
            border: 0;
            font-size: .9em;
            padding: 0;
            width: 100%
        }

        .ftNavLnk .ftNavLnkColHeader,
        .ftZn2>ul>li>div {
            padding: .75em 0 0
        }

        .ftZn2>ul>li li {
            display: inline-block;
            margin: 0 2px
        }

        .ftZn2>ul>li li:after {
            content: " -"
        }

        .ftZn3 span {
            display: block;
            padding-top: 10px
        }
    }

    @media only screen and (min-width:1280px) {
        #bc {
            padding: 16px 40px 32px
        }

        .footerAdsPaves .goodDealBlock {
            width: 176px
        }
    }

    @media only screen and (min-width:1600px) {
        #bc {
            padding: 16px 40px 32px
        }

        .only1280,
        .until1600 {
            display: none !important
        }

        .no1599,
        .only1600,
        .since1600 {
            display: block !important
        }
    }

    @media only screen and (min-width:1920px) {
        #bc {
            padding: 16px 200px 32px
        }

        .l-ProductList #bc,
        .l-Search #bc,
        .l-ShowCase #bc,
        .l-ShowCaseSeller #bc,
        .l-StoreSeller #bc,
        .l-StoreSellerPerso #bc,
        .p-ProductList #bc,
        .p-Search #bc,
        .p-ShowCase #bc,
        .p-ShowCaseSeller #bc,
        .p-StoreSeller #bc,
        .p-StoreSellerPerso #bc {
            padding: 16px 16px 32px
        }

        .only1600,
        .until1920 {
            display: none !important
        }

        .no1919,
        .since1920 {
            display: block !important
        }
    }

    .imgList1,
    .imgListRz {
        display: block;
        margin: 20px auto;
        overflow: hidden;
        text-align: center
    }

    .imgListRz img,
    .imgListRz2 img {
        width: 100%
    }

    .imgListRz2 li {
        width: 50%
    }

    .imgListRz2 li,
    .imgListRz3 li {
        display: inline-block;
        padding: 0 5px
    }

    .imgListRz3 li {
        width: 33%
    }

    .imgListRz4 li {
        display: inline-block;
        padding: 0 5px;
        width: 20%
    }

    .imgListRz2,
    .imgListRz3,
    .imgListRz4,
    .imgListRz5 {
        margin: 20px 10px;
        overflow: hidden;
        padding: 0
    }

    .content>.imgListRz:first-child img {
        height: 60px;
        max-width: unset;
        overflow: hidden;
        padding: 0 .75em;
        width: auto
    }

    .imgList2,
    .imgList3,
    .imgList4 {
        margin: 20px auto;
        overflow: hidden;
        padding: 0 10px
    }

    .imgList4 .regBloc {
        margin-top: 0
    }

    .imgList321 {
        margin: 0;
        max-width: 1900px;
        overflow: hidden;
        padding: 0
    }

    .imgList1 a,
    .imgList2 a,
    .imgList3 a,
    .imgList3 div,
    .imgList4 a {
        background: no-repeat center 0;
        display: block;
        text-decoration: none
    }

    .imgList1 a.border,
    .imgList2 a.border,
    .imgList3 a.border,
    .imgList3 div.border,
    .imgList4 a.border,
    .imgListRz img.border {
        border: 1px solid #d7d9e4
    }

    .imgList3 div {
        cursor: pointer
    }

    .imgList321 a {
        background: no-repeat center 0;
        border: 0;
        display: block;
        text-decoration: none
    }

    .imgList1 a,
    .imgListRz a {
        display: block;
        overflow: hidden
    }

    .imgList2 li,
    .imgList3 li,
    .imgList4 li {
        float: left;
        padding: 10px 0 0 10px
    }

    .imgList321 li {
        float: left;
        margin: 10px 10px 0 0;
        padding: 0;
        width: 330px;
        width: calc(33.33% - 10px)
    }

    .imgList2 li:first-child,
    .imgList3 li:first-child,
    .imgList4 li:first-child {
        padding-left: 0
    }

    .imgList321 li:last-child,
    .imgList321 li:nth-child(3) {
        margin-right: 0
    }

    .imgList2 li {
        width: 50%
    }

    .imgList3 li {
        width: 33.33%
    }

    .imgList4 li {
        width: 25%
    }

    .imgList2 a,
    .imgList3 a,
    .imgList4 a {
        height: 200px
    }

    .imgListBrand {
        overflow: hidden
    }

    .imgListBrand li {
        float: left;
        padding: 10px 0 0;
        text-align: center;
        width: 12.5%
    }

    .imgList1.imgListWithoutMarginBottom,
    .imgList2.imgListWithoutMarginBottom,
    .imgList3.imgListWithoutMarginBottom,
    .imgList4.imgListWithoutMarginBottom,
    .imgListRz.imgListWithoutMarginBottom {
        margin-bottom: 0
    }

    .imgList1.imgListWithoutMarginBottom+div,
    .imgList1.imgListWithoutMarginBottom+ul,
    .imgList2.imgListWithoutMarginBottom+div,
    .imgList2.imgListWithoutMarginBottom+ul,
    .imgList3.imgListWithoutMarginBottom+div,
    .imgList3.imgListWithoutMarginBottom+ul,
    .imgList4.imgListWithoutMarginBottom+div,
    .imgList4.imgListWithoutMarginBottom+ul,
    .imgListRz.imgListWithoutMarginBottom+div,
    .imgListRz.imgListWithoutMarginBottom+ul {
        margin-top: 0
    }

    .legalNotice {
        margin: 20px 0;
        padding-left: 10px
    }

    .legalNotice a {
        color: #096ec8;
        cursor: pointer;
        text-decoration: none
    }

    .legalNotice a:hover {
        color: #096ec8;
        text-decoration: underline
    }

    .stressCountDown {
        font-size: 2em;
        font-weight: 700;
        min-height: 35px;
        position: relative;
        text-align: center
    }

    .stressCountDown .countDown {
        display: inline-block
    }

    html.isPro #header .head,
    html.isPro #header.testDarkHeader,
    html.isPro #headerServices.headerServices {
        background-color: #000
    }

    html.isPro span#itemCart {
        display: none !important
    }

    .head .hideFromPro,
    html.isPro .head .displayToPro {
        display: table-cell
    }

    .head .hLogo>a.hideFromPro {
        display: inline
    }

    .isPro .head .hLogo>a.hideFromPro {
        display: none
    }

    html.isPro .hBskt .displayToPro,
    html.isPro .testHeaderServices .hLight .hHelp .displayToPro,
    html.isPro span.fOpPay12.displayToPro {
        display: inline-block
    }

    html.isPro .hRightLine {
        border-right: 1px solid #4d4d4d;
        height: 36px
    }

    html.isPro .hLogo {
        height: 29px;
        padding: 0;
        width: 238px
    }

    html.isPro .hRightLine,
    html.isPro span.paImgHeaderProBack {
        cursor: pointer
    }

    html.isPro .testHeaderServices .hSearch {
        padding-left: 20px
    }

    html.isPro .testHeaderServices .head {
        padding-left: 0
    }

    html.isPro .testHeaderServices .hBack {
        color: #fff;
        padding: 14px 0 14px 10px;
        width: 100px
    }

    html.isPro .hLogo img {
        background-size: 100%;
        padding: 5px 0 0 20px;
        width: 238px
    }

    .testHeaderServices .hLight .hHelp .displayToPro,
    html.isPro .testDarkHeader .hBskt a:before,
    html.isPro .testHeaderServices .hLight .hHelp .hideFromPro,
    span.fOpPay.fOpPay12.displayToPro {
        display: none
    }

    html.isPro .testNewHeader .hBskt>a {
        padding-left: 8px
    }

    .paImgHeaderProBack {
        float: left;
        padding: 6px 10px 0 0
    }

    .colorProBasket {
        color: #e23a05
    }

    html.isPro .headOPNew {
        background-color: #000
    }

    html.isPro .headLogoPro {
        padding-top: 5px
    }

    .hLight .hHelp.displayToPro,
    .hLogo>a.displayToPro {
        display: none
    }

    .linkList .cdsLinkPro,
    html.isPro .linkList .cdsLinkIndividual {
        display: block
    }

    .linkList .cdsLinkIndividual,
    html.isPro .linkList .cdsLinkPro {
        display: none
    }

    html.isPro div.ftNav {
        background-color: #000
    }

    html.isPro .fOpPay12 {
        background: url(images/numero-special.png) no-repeat 0
    }

    .priceExhibitor {
        font-size: 60%;
        margin-left: 4px;
        position: relative;
        text-decoration: none;
        text-transform: uppercase;
        top: .1em
    }

    .crossedOutPriceExhibitor {
        display: inline-block;
        text-decoration: line-through
    }

    .c-nav-services__item.displayToPro,
    .cPdtItem .displayToPro.price,
    .carouAnimco.light .cPdtItem .price.displayToPro,
    .displayToPro,
    .hideFromPro.u-hide,
    .testHeaderServices .headerServices>div.displayToPro,
    html.isPro .hideFromPro {
        display: none
    }

    .hideFromPro,
    html.isPro .displayToPro {
        display: block
    }

    .hideFromPro.stroken,
    .priceExhibitorDisplay,
    html.isPro .hOverlays .hBRTPrice.price.displayToPro,
    html.isPro .headerServices .displayToPro,
    html:not(.isPro) .hOverlays .hBRTPrice.price.hideFromPro {
        display: inline-block
    }

    html.isPro .displayToPro.price.isProPriceFontSize {
        font-size: 22px
    }

    html.isPro .displayToPro.isProStrikedPriceFontSize {
        font-size: 12px
    }

    html.isPro div.bFooterCdsRatings {
        background-color: #000
    }

    html.isPro .carouAnimco .cPdtItem .price.displayToPro {
        margin-top: 14px
    }

    .crSUl .displayToPro,
    html.isPro .crSUl .hideFromPro {
        display: none
    }

    .raColTopPrdt .hideFromPro,
    html.isPro .raColTopPrdt .displayToPro {
        display: inline-block
    }

    .priceExhibitorInherit {
        display: inherit
    }

    html.isPro .bAssGarBlockCell select {
        width: 64px
    }

    html.isPro .bProductLineDescBottomQuantity select {
        padding-left: 15px
    }

    html.isPro .bSummaryStrikedPrice {
        display: block
    }

    html.isPro .displayToPro.isProInLinePriceFontSize {
        font-size: 25px
    }

    html.isPro .displayToPro.isProLightPriceFontSize {
        font-size: 19px
    }

    html.isPro .displayToPro.isProInLineStrikedPriceFontSize {
        font-size: 13px
    }

    .o-block {
        border-radius: 4px;
        margin-bottom: 32px
    }

    .o-block__header {
        margin-bottom: 16px
    }

    .o-block__title {
        align-items: baseline;
        display: flex;
        justify-content: space-between
    }

    .o-block__desc {
        margin-top: 8px
    }

    .o-block--white {
        background-color: #fff;
        padding: 16px
    }

    .o-block--center {
        text-align: center
    }

    .o-block__content {
        border-radius: 4px
    }

    .o-block__content--white {
        background-color: #fff;
        padding: 16px
    }

    .c-carousel {
        position: relative
    }

    .c-carousel.c-carousel--image .c-carousel__item {
        width: 216px
    }

    .c-carousel.c-carousel--detailedProduct .c-carousel__item {
        width: 288px
    }

    .c-carousel.c-carousel--defaultProduct .c-carousel__item {
        width: 216px
    }

    @media(min-width:1600px) {
        .c-carousel.c-carousel--defaultProduct .c-carousel__item {
            width: 392px
        }
    }

    .c-carousel.c-carousel--defaultProduct .c-carousel__item .c-productCard--default {
        max-width: 100%
    }

    @media(min-width:1600px) {
        .c-carousel.c-carousel--defaultProduct .c-carousel__item .c-productCard--default {
            max-width: 100%
        }
    }

    .c-carousel__wrapper {
        overflow: hidden;
        position: relative;
        z-index: 0
    }

    .c-carousel--defaultProduct .c-carousel__wrapper,
    .c-carousel--detailedProduct .c-carousel__wrapper {
        padding: 2px
    }

    .c-carousel__list {
        -ms-overflow-style: none;
        display: flex;
        flex-wrap: nowrap;
        will-change: transform
    }

    .c-carousel__list::-webkit-scrollbar {
        display: none
    }

    .c-carousel__item {
        flex-shrink: 0;
        scroll-snap-align: start
    }

    .c-carousel__item:not(:last-child) {
        margin-right: 16px
    }

    .c-carousel__arrows {
        align-items: center;
        bottom: 0;
        display: flex;
        justify-content: space-between;
        left: 0;
        pointer-events: none;
        position: absolute;
        right: 0;
        top: 0;
        z-index: 2
    }

    .c-carousel__arrow {
        left: -1rem;
        position: relative
    }

    .c-carousel__arrow--left {
        left: -1rem;
        right: auto
    }

    .c-carousel__arrow--right {
        left: auto;
        right: -1rem
    }

    .c-carousel__dots {
        grid-gap: 4px;
        align-items: center;
        bottom: 0;
        display: flex;
        gap: 4px;
        justify-content: center;
        left: 0;
        position: absolute;
        right: 0;
        text-align: center;
        z-index: 1
    }

    .c-carousel__dots--bottom {
        bottom: -1rem
    }

    .control__dot {
        background-color: #fff;
        border-radius: 50%;
        cursor: pointer;
        display: block;
        height: 1rem;
        opacity: .8;
        outline: none;
        transition: opacity .2s;
        width: 1rem
    }

    .c-carousel__counter {
        position: absolute;
        right: 0
    }

    .js .c-carousel__list--animating {
        transition-duration: .5s;
        transition-property: -webkit-transform;
        transition-property: transform;
        transition-property: transform, -webkit-transform;
        transition-timing-function: var(--ease-out)
    }

    .js .c-carousel__item {
        margin-bottom: 0
    }

    .js .c-carousel--loaded .c-carousel__item,
    .js .c-carousel__item.c-carousel--placeholder {
        opacity: 1
    }

    .js .c-carousel:not(.c-carousel--is-dragging) .c-carousel__list:not(.c-carousel__list--animating) .c-carousel__item[tabindex="-1"]>* {
        visibility: hidden
    }

    .js .c-carousel[data-drag=on] .c-carousel__item {
        -webkit-user-select: none;
        -ms-user-select: none;
        user-select: none
    }

    .js .c-carousel[data-drag=on] .c-carousel__item img {
        pointer-events: none
    }

    .c-carousel__control {
        -webkit-appearance: none;
        appearance: none;
        background-color: #fff;
        border: 0;
        box-shadow: 0 1px 4px 0 rgba(0, 0, 0, .2);
        color: inherit;
        cursor: pointer;
        display: flex;
        height: 6rem;
        line-height: inherit;
        padding: 0;
        pointer-events: auto;
        transition: .2s;
        visibility: hidden;
        width: 3rem;
        z-index: 1
    }

    .c-carousel--loaded .c-carousel__control {
        visibility: visible
    }

    .c-carousel__control:active {
        -webkit-transform: translateY(1px);
        transform: translateY(1px)
    }

    .c-carousel__control:hover {
        box-shadow: 0 1 4px 0 rgba(0, 0, 0, .4)
    }

    .c-carousel__control.is-disabled,
    .c-carousel__control[disabled] {
        box-shadow: 0 1 4px 0 rgba(0, 0, 0, .15);
        opacity: .5;
        pointer-events: auto
    }

    .c-carousel__control .icon {
        display: block;
        height: 2rem;
        margin: auto;
        width: 2rem
    }

    .c-carousel__control--prev {
        border-radius: 0 4px 4px 0
    }

    .c-carousel__control--next {
        border-radius: 4px 0 0 4px
    }

    .c-carousel__navigation {
        grid-gap: 8px;
        align-items: center;
        display: grid;
        gap: 8px;
        grid-template-columns: repeat(auto-fit, 10px);
        justify-content: center;
        margin-top: 1rem;
        width: 100%
    }

    .c-carousel__nav-item {
        display: inline-block;
        margin: 0 4px
    }

    @supports(grid-area:auto) {
        .c-carousel__nav-item {
            margin: 0
        }
    }

    .c-carousel__nav-item button {
        background-color: #d7d9e4;
        border-radius: 50%;
        cursor: pointer;
        display: block;
        font-size: 10px;
        height: 1em;
        opacity: .4;
        position: relative;
        transition: background .3s;
        width: 1em
    }

    .c-carousel__nav-item button:before {
        border: 1px solid #b6c2cd;
        border-radius: inherit;
        content: "";
        font-size: 16px;
        height: 1em;
        left: calc(50% - .5em);
        opacity: 0;
        position: absolute;
        top: calc(50% - .5em);
        -webkit-transform: scale(0);
        transform: scale(0);
        transition: 3s;
        width: 1em
    }

    .c-carousel__nav-item button:focus {
        outline: none
    }

    .c-carousel__nav-item button:focus:before {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1)
    }

    .c-carousel__nav-item--selected button {
        opacity: 1
    }

    .c-carousel__navigation--pagination {
        grid-template-columns: repeat(auto-fit, 24px)
    }

    .c-carousel__navigation--pagination .c-carousel__nav-item button {
        border-radius: 4px;
        color: var(--color-bg);
        font-size: 12px;
        height: 24px;
        line-height: 24px;
        text-align: center;
        width: 24px
    }

    .c-carousel__navigation--pagination .c-carousel__nav-item button:focus {
        outline: 1px solid #293847;
        outline-offset: 2px
    }

    html:not(.js) .c-carousel__list {
        overflow: auto;
        scroll-behavior: smooth;
        -ms-scroll-snap-type: x mandatory;
        scroll-snap-type: x mandatory
    }

    .c-carousel--hide-controls .c-carousel__control,
    .c-carousel--hide-controls .c-carousel__navigation {
        display: none
    }

    .c-sponsoredMentions {
        align-items: center;
        color: #878787;
        display: inline-flex;
        font-size: 10px;
        font-weight: 400;
        height: 16px;
        line-height: 16px
    }

    .c-sponsoredMentions .o-icon-i {
        margin-left: 4px
    }

    .c-carousel.c-carousel--slideshow .c-carousel__item {
        width: 100%
    }

    .c-carousel.c-carousel--slideshow .c-carousel__item:not(:last-child) {
        margin-right: 0
    }

    .list,
    .list ol,
    .list ul {
        list-style-position: outside;
        padding-left: 1em
    }

    .list ol,
    .list ul {
        margin-bottom: 0
    }

    .list ul {
        list-style-type: disc
    }

    .list ol {
        list-style-type: decimal
    }

    .list li {
        line-height: 1.5
    }

    .list--ul {
        list-style-type: disc
    }

    .list--ol,
    .list--ul {
        list-style-position: outside;
        padding-left: 1em
    }

    .list--ol {
        list-style-type: decimal
    }

    .list--no-bullet,
    .list--no-bullet ol,
    .list--no-bullet ul {
        list-style-type: none
    }

    .list--inline {
        padding-left: 0
    }

    .list--inline li {
        display: inline-block
    }

    .list--inline .list__item {
        list-style: none;
        margin: 0;
        padding: 0;
        white-space: nowrap
    }

    .list--inline .list__item+.list__item:before {
        content: "|";
        display: inline-block;
        font-weight: 400;
        padding-left: .5rem;
        padding-right: .5rem
    }

    .list--divided {
        padding-left: 0
    }

    .list--divided .list__item:first-child {
        padding: 0 0 8px
    }

    .list--divided .list__item:last-child {
        padding: 8px 0 0
    }

    .list--divided .list__item {
        padding: 8px 0
    }

    .list--divided .list__item:not(:last-child) {
        border-bottom: 1px solid #b6c2cd
    }

    [dir=ltr] .list--checked {
        padding-left: 1ch
    }

    [dir=rtl] .list--checked {
        padding-right: 1ch
    }

    .list--checked {
        list-style-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='10' fill='%2316b4f2'%3E%3Cpath d='M4.647 9.177.821 4.585a.667.667 0 1 1 1.025-.854l2.84 3.409 5.485-6.095a.667.667 0 0 1 .992.892l-6.516 7.24Z'/%3E%3C/svg%3E")
    }

    .input {
        -webkit-appearance: none;
        appearance: none;
        background-color: transparent;
        background-color: #fff;
        border: 0;
        border-radius: 0;
        border-radius: 4px;
        box-shadow: inset 0 0 0 1px #b6c2cd, 0 0 0 1px transparent;
        color: inherit;
        font-size: 14px;
        line-height: inherit;
        line-height: 1.5;
        padding: 0;
        padding: 7px 16px;
        transition: all .2s ease
    }

    .input::-webkit-input-placeholder {
        color: #7a8999;
        opacity: 1
    }

    .input:-ms-input-placeholder {
        color: #7a8999;
        opacity: 1
    }

    .input::placeholder {
        color: #7a8999;
        opacity: 1
    }

    .input.is-hover,
    .input:hover {
        box-shadow: inset 0 0 0 1px #064e8e, 0 0 0 1px transparent;
        outline: none
    }

    .input.is-focus,
    .input:focus {
        box-shadow: inset 0 0 0 1px #096ec8, 0 0 0 2px #b3d2ee;
        outline: none
    }

    .input--sm {
        border-radius: 4px;
        font-size: 12px;
        height: 32px;
        line-height: 18px;
        padding: 7px 16px
    }

    .input--md {
        border-radius: 4px;
        font-size: 14px;
        height: 40px;
        line-height: 21px;
        padding: 9.5px 16px
    }

    .input--lg {
        border-radius: 4px;
        font-size: 16px;
        height: 48px;
        line-height: 24px;
        padding: 12px 16px
    }

    .input--rounded {
        border-radius: 50em
    }

    .input--rounded.input--sm {
        border-radius: 32px
    }

    .input--rounded.input--md {
        border-radius: 40px
    }

    .input--rounded.input--lg {
        border-radius: 48px
    }

    .input--squared {
        border-radius: 0
    }

    .input[disabled] {
        background-color: #f2f3f5;
        box-shadow: 0 0 0 1px #b6c2cd;
        cursor: not-allowed
    }

    .input[disabled]::-webkit-input-placeholder {
        color: #b6c2cd
    }

    .input[disabled]:-ms-input-placeholder {
        color: #b6c2cd
    }

    .input[disabled]::placeholder {
        color: #b6c2cd
    }

    .input[readonly] {
        box-shadow: inset 0 0 0 1px #b6c2cd, 0 0 0 1px transparent;
        color: #b6c2cd
    }

    .is-success,
    .is-valid {
        box-shadow: inset 0 0 0 1px #2bb04a, 0 0 0 2px transparent
    }

    .is-success.is-hover,
    .is-success:hover,
    .is-valid.is-hover,
    .is-valid:hover {
        box-shadow: inset 0 0 0 1px #1f7d35, 0 0 0 2px transparent
    }

    .is-success.is-focus,
    .is-success:focus,
    .is-valid.is-focus,
    .is-valid:focus {
        box-shadow: inset 0 0 0 1px #2bb04a, 0 0 0 2px #bde7c7
    }

    .is-error,
    .is-invalid {
        box-shadow: inset 0 0 0 1px #d84148, 0 0 0 2px transparent
    }

    .is-error.is-hover,
    .is-error:hover,
    .is-invalid.is-hover,
    .is-invalid:hover {
        box-shadow: inset 0 0 0 1px #992e33, 0 0 0 2px transparent
    }

    .is-error.is-focus,
    .is-error:focus,
    .is-invalid.is-focus,
    .is-invalid:focus {
        box-shadow: inset 0 0 0 1px #d84148, 0 0 0 2px #f3c4c6
    }

    .input:not([type=checkbox]):not([type=radio]):not([type=date]):not([type=datetime-local]):not([type=month]):not([type=time]):not([type=week])[aria-invalid] {
        --icon-valid: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzJiYjA0YSIgdmlld0JveD0iMCAwIDI1NiAyNTYiPjxwYXRoIGQ9Im0yMjkuNjYgNzcuNjYtMTI4IDEyOGE4IDggMCAwIDEtMTEuMzIgMGwtNTYtNTZhOCA4IDAgMCAxIDExLjMyLTExLjMyTDk2IDE4OC42OSAyMTguMzQgNjYuMzRhOCA4IDAgMCAxIDExLjMyIDExLjMyWiIvPjwvc3ZnPg==);
        --icon-invalid: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iI2Q2M2Y0NiIgdmlld0JveD0iMCAwIDI1NiAyNTYiPjxwYXRoIGQ9Ik0xMjggMjRhMTA0IDEwNCAwIDEgMCAxMDQgMTA0QTEwNC4xMSAxMDQuMTEgMCAwIDAgMTI4IDI0Wm0wIDE5MmE4OCA4OCAwIDEgMSA4OC04OCA4OC4xIDg4LjEgMCAwIDEtODggODhabTE2LTQwYTggOCAwIDAgMS04IDggMTYgMTYgMCAwIDEtMTYtMTZ2LTQwYTggOCAwIDAgMSAwLTE2IDE2IDE2IDAgMCAxIDE2IDE2djQwYTggOCAwIDAgMSA4IDhabS0zMi05MmExMiAxMiAwIDEgMSAxMiAxMiAxMiAxMiAwIDAgMS0xMi0xMloiLz48L3N2Zz4=);
        background-position: center right .5rem;
        background-repeat: no-repeat;
        background-size: 1rem auto
    }

    .input:not([type=checkbox]):not([type=radio]):not([type=date]):not([type=datetime-local]):not([type=month]):not([type=time]):not([type=week])[aria-invalid=false] {
        background-image: var(--icon-valid)
    }

    .input:not([type=checkbox]):not([type=radio]):not([type=date]):not([type=datetime-local]):not([type=month]):not([type=time]):not([type=week])[aria-invalid=true] {
        background-image: var(--icon-invalid)
    }

    .type--select {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3E%3Cpath fill='none' stroke='%23293847' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3E%3C/svg%3E");
        background-position: right 8px center;
        background-repeat: no-repeat;
        background-size: 16px 12px;
        display: inline-block;
        max-width: 100%;
        padding-right: 32px
    }

    .type--select::-ms-expand {
        opacity: 0
    }

    .type--select[multiple],
    .type--select[size]:not([size="1"]) {
        background-image: none;
        height: auto;
        padding-right: 16px
    }

    .type--select option[selected] {
        color: #7a8999
    }

    .type--select:-moz-focusring {
        color: transparent
    }

    .type--search::-webkit-search-cancel-button {
        -webkit-appearance: none;
        display: none
    }

    .type--file {
        --outer-radius: 4px;
        --padding: 3px;
        --inner-radius: calc(var(--outer-radius) - var(--padding));
        background: none;
        border: 0;
        border-radius: var(--outer-radius);
        padding: var(--padding)
    }

    [dir=ltr] .type--file::file-selector-button {
        margin-left: 0
    }

    [dir=rtl] .type--file::file-selector-button {
        margin-right: 0
    }

    [dir=ltr] .type--file::file-selector-button {
        margin-right: 4px
    }

    [dir=rtl] .type--file::file-selector-button {
        margin-left: 4px
    }

    .type--file::file-selector-button {
        --background-color: #e4e7eb;
        background-color: var(--background-color);
        border: 1px solid #b6c2cd;
        border-radius: var(--inner-radius);
        color: #000;
        cursor: pointer;
        line-height: 1.5;
        margin-left: 0;
        margin-right: 4px;
        outline: none;
        padding: 3.5px 8px;
        text-align: center
    }

    .type--file::file-selector-button:is(:hover, :active, :focus) {
        --background-color: #b6c2cd;
        color: #000
    }

    [dir=ltr] .type--file::-webkit-file-upload-button {
        margin-left: 0
    }

    [dir=rtl] .type--file::-webkit-file-upload-button {
        margin-right: 0
    }

    [dir=ltr] .type--file::-webkit-file-upload-button {
        margin-right: 4px
    }

    [dir=rtl] .type--file::-webkit-file-upload-button {
        margin-left: 4px
    }

    .type--file::-webkit-file-upload-button {
        --background-color: #e4e7eb;
        background-color: var(--background-color);
        border: 1px solid #b6c2cd;
        border-radius: var(--inner-radius);
        color: #000;
        cursor: pointer;
        line-height: 1.5;
        margin-left: 0;
        margin-right: 4px;
        outline: none;
        padding: 3.5px 8px;
        text-align: center
    }

    .type--file::-webkit-file-upload-button:is(:hover, :active, :focus) {
        --background-color: #b6c2cd;
        color: #000
    }

    [dir=ltr] .type--file::-ms-browse {
        margin-left: 0
    }

    [dir=rtl] .type--file::-ms-browse {
        margin-right: 0
    }

    [dir=ltr] .type--file::-ms-browse {
        margin-right: 4px
    }

    [dir=rtl] .type--file::-ms-browse {
        margin-left: 4px
    }

    .type--file::-ms-browse {
        --background-color: #e4e7eb;
        background-color: var(--background-color);
        border: 1px solid #b6c2cd;
        border-radius: var(--inner-radius);
        color: #000;
        cursor: pointer;
        line-height: 1.5;
        margin-left: 0;
        margin-right: 4px;
        outline: none;
        padding: 3.5px 8px;
        text-align: center
    }

    .type--file::-ms-browse:is(:hover, :active, :focus) {
        --background-color: #b6c2cd;
        color: #000
    }

    .type--color {
        height: auto;
        padding: 3px
    }

    .type--color::-webkit-color-swatch-wrapper {
        padding: 0
    }

    .type--color::-moz-focus-inner {
        padding: 0
    }

    .type--color::-webkit-color-swatch {
        border: 0;
        border-radius: 2px;
        height: 29px
    }

    .type--color::-moz-color-swatch {
        border: 0;
        border-radius: 2px;
        height: 29px
    }

    .type--range {
        -webkit-appearance: none;
        appearance: none;
        background: none;
        box-shadow: none;
        height: 1.25rem;
        width: 100%
    }

    .type--range::-webkit-slider-runnable-track {
        --range-border-color: #e4e7eb;
        background-color: var(--range-border-color);
        border-radius: 4px;
        height: .25rem;
        width: 100%
    }

    .type--range::-moz-range-track {
        --range-border-color: #e4e7eb;
        background-color: var(--range-border-color);
        border-radius: 4px;
        height: .25rem;
        width: 100%
    }

    .type--range::-ms-track {
        --range-border-color: #e4e7eb;
        background-color: var(--range-border-color);
        border-radius: 4px;
        height: .25rem;
        width: 100%
    }

    .type--range::-webkit-slider-thumb {
        --range-thumb-color: #b6c2cd;
        --range-thumb-border-color: #fff;
        -webkit-appearance: none;
        background-color: var(--range-thumb-color);
        border: 2px solid var(--range-thumb-border-color);
        border-radius: 50%;
        cursor: pointer;
        height: 1.25rem;
        margin-top: -.5rem;
        width: 1.25rem
    }

    .type--range::-moz-range-thumb {
        --range-thumb-color: #b6c2cd;
        --range-thumb-border-color: #fff;
        -webkit-appearance: none;
        background-color: var(--range-thumb-color);
        border: 2px solid var(--range-thumb-border-color);
        border-radius: 50%;
        cursor: pointer;
        height: 1.25rem;
        margin-top: -.5rem;
        width: 1.25rem
    }

    .type--range::-ms-thumb {
        --range-thumb-color: #b6c2cd;
        --range-thumb-border-color: #fff;
        -webkit-appearance: none;
        background-color: var(--range-thumb-color);
        border: 2px solid var(--range-thumb-border-color);
        border-radius: 50%;
        cursor: pointer;
        height: 1.25rem;
        margin-top: -.5rem;
        width: 1.25rem
    }

    .type--range:focus,
    .type--range:hover {
        --range-border-color: #7a8999
    }

    .type--range:active,
    .type--range:focus,
    .type--range:hover {
        --range-thumb-color: #7a8999;
        box-shadow: none
    }

    .type--range:active::-webkit-slider-thumb {
        -webkit-transform: scale(1.25);
        transform: scale(1.25)
    }

    .type--range:active::-moz-range-thumb {
        transform: scale(1.25)
    }

    .type--range:active::-ms-thumb {
        transform: scale(1.25)
    }

    .legend {
        color: #293847;
        font-size: 14px;
        line-height: 1.2;
        margin-bottom: 16px
    }

    .label {
        display: inline-block;
        font-size: 14px;
        font-weight: 700
    }

    .field {
        align-items: flex-start;
        display: flex;
        flex: 1 1 auto;
        flex-direction: column
    }

    .field--inline {
        align-items: center;
        display: flex;
        flex: 1 1 auto;
        flex-direction: row
    }

    .field__requirement {
        font-size: 12px
    }

    .field--required label:not(.u-visually-hidden):not(:empty) {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3E%3Cpath fill='%23d84148' fill-opacity='.7' d='m0 7.562 1.114-3.438c2.565.906 4.43 1.688 5.59 2.35-.306-2.921-.467-4.93-.484-6.027h3.511c-.05 1.597-.234 3.6-.558 6.003 1.664-.838 3.566-1.613 5.714-2.325L16 7.562c-2.05.678-4.06 1.131-6.028 1.356.984.856 2.372 2.381 4.166 4.575l-2.906 2.059c-.935-1.274-2.041-3.009-3.316-5.206-1.194 2.275-2.244 4.013-3.147 5.206l-2.856-2.059c1.872-2.307 3.211-3.832 4.017-4.575A86.77 86.77 0 0 1 0 7.562'/%3E%3C/svg%3E");
        background-position: right 0;
        background-repeat: no-repeat;
        background-size: 8px 8px;
        margin-right: 8px;
        padding-right: 16px;
        position: relative
    }

    .btn--show-password {
        color: #096ec8;
        text-decoration: underline
    }

    .field__control {
        position: relative
    }

    .field__control .input {
        height: 100%;
        width: 100%
    }

    .field__control .form-icon,
    .field__control .icon {
        display: block;
        height: 16px;
        position: absolute;
        top: calc(50% - 8px);
        width: 16px;
        z-index: 1
    }

    .field__control .form-icon.cds,
    .field__control .icon.cds {
        font-size: 16px
    }

    .field__control--icon-left .form-icon,
    .field__control--icon-left .icon {
        left: 16px
    }

    .field__control--icon-left .input {
        padding-left: 40px
    }

    .field__control--icon-right .form-icon,
    .field__control--icon-right .icon {
        right: 16px
    }

    .field__control--icon-right .input {
        padding-right: 40px
    }

    .c-stores__item:not(:last-child) {
        border-bottom: 1px solid #e4e7eb
    }

    .c-stores__link {
        grid-gap: 16px;
        align-items: center;
        cursor: pointer;
        display: flex;
        font-family: Hind Madurai, Hind-fallback, Arial, sans-serif;
        font-size: 16px;
        gap: 16px;
        justify-content: flex-start;
        line-height: 1.5;
        padding-bottom: 8px;
        padding-top: 8px;
        text-align: left;
        text-decoration: none
    }

    .c-stores__link .c-stores__label {
        -webkit-transform: translateY(0);
        transform: translateY(0)
    }

    .c-stores__link .c-stores__desc {
        height: 0;
        opacity: 0
    }

    .c-stores__link:hover .c-stores__img {
        border-radius: 0
    }

    .c-stores__link:hover .c-stores__img:before {
        -webkit-transform: scale(0);
        transform: scale(0)
    }

    .c-stores__link:hover .c-stores__img>img {
        aspect-ratio: 1/1;
        height: 48px;
        width: 48px
    }

    .c-stores__link:hover .c-stores__desc {
        height: auto;
        opacity: 1
    }

    .c-stores__link:hover .c-stores__label {
        font-weight: 600;
        -webkit-transform: translateY(0);
        transform: translateY(0)
    }

    .c-stores__img {
        align-items: center;
        border-radius: 48px;
        display: flex;
        flex-shrink: 0;
        height: 48px;
        justify-content: center;
        overflow: hidden;
        position: relative;
        width: 48px
    }

    .c-stores__img,
    .c-stores__img:before {
        transition: all .11s cubic-bezier(0, 0, .3, 1)
    }

    .c-stores__img:before {
        background-color: #0f1419;
        border-radius: 50em;
        content: "";
        height: 100%;
        left: 0;
        opacity: .05;
        position: absolute;
        top: 0;
        -webkit-transform: scale(.95);
        transform: scale(.95);
        width: 100%
    }

    .c-stores__img>img {
        aspect-ratio: 1/1;
        height: 28px;
        object-fit: contain;
        transition: all .11s cubic-bezier(0, 0, .3, 1);
        width: 28px
    }

    .l-departments {
        font-size: 14px
    }

    .l-departments__go-back {
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 16px
    }

    .l-departments__go-back li:not(:last-child) {
        margin-bottom: 8px
    }

    .l-departments__go-back a,
    .l-departments__go-back button {
        grid-gap: 8px;
        align-items: center;
        color: #293847;
        cursor: pointer;
        display: flex;
        gap: 8px;
        text-decoration: none
    }

    .l-departments__go-back a .icon,
    .l-departments__go-back button .icon {
        --size: 24px
    }

    .c-current-department {
        grid-gap: 4px;
        display: flex;
        flex-direction: column;
        gap: 4px;
        padding-bottom: 16px;
        padding-top: 16px
    }

    .c-current-department.c-current-department--md .c-current-department__link {
        font-size: 14px
    }

    .c-current-department.c-current-department--md .c-current-department__img {
        border-radius: 44px;
        height: 44px;
        width: 44px
    }

    .c-current-department.c-current-department--md .c-current-department__icon .icon {
        --size: 24px;
        -webkit-transform: translateX(-24px);
        transform: translateX(-24px)
    }

    .c-current-department__link {
        grid-gap: 24px;
        align-items: center;
        color: #293847;
        display: flex;
        font-size: 16px;
        font-weight: 600;
        gap: 24px;
        justify-content: flex-start;
        line-height: 1.5;
        text-decoration: none
    }

    .c-current-department__link:hover {
        color: #0f1419
    }

    .c-current-department__link:hover .c-current-department__icon .icon {
        opacity: 1;
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }

    .c-current-department__img {
        align-items: center;
        border-radius: 68px;
        display: flex;
        flex-shrink: 0;
        height: 68px;
        justify-content: center;
        overflow: hidden;
        position: relative;
        width: 68px
    }

    .c-current-department__img:before {
        background-color: #0f1419;
        border-radius: 50em;
        content: "";
        height: 100%;
        left: 0;
        opacity: .05;
        position: absolute;
        top: 0;
        -webkit-transform: scale(.95);
        transform: scale(.95);
        width: 100%
    }

    .c-current-department__img>img {
        object-fit: cover
    }

    .c-current-department__icon {
        align-items: center;
        display: flex;
        justify-content: center;
        margin-left: auto
    }

    .c-current-department__icon .icon {
        --size: 32px;
        color: currentColor;
        opacity: 0;
        -webkit-transform: translateX(-32px);
        transform: translateX(-32px);
        transition: all .11s cubic-bezier(0, 0, .38, .9)
    }

    .l-departments__shortcuts li:not(:last-child) {
        margin-bottom: 8px
    }

    .l-departments__shortcuts a {
        grid-gap: 16px;
        align-items: center;
        color: #293847;
        display: flex;
        font-weight: 600;
        gap: 16px;
        text-decoration: none
    }

    .l-departments__shortcuts a .icon-rounded {
        align-items: center;
        background-color: #e4e7eb;
        border-radius: 32px;
        display: flex;
        height: 32px;
        justify-content: center;
        width: 32px
    }

    .l-departments__shortcuts a .icon-gradient {
        background: linear-gradient(141.89deg, #2d569a 10.87%, #377b90 83%)
    }

    .l-departments__shortcuts a .icon {
        --size: 20px
    }

    .c-department__list .c-department__item:not(:last-child) {
        margin-bottom: 8px
    }

    .c-department__list a,
    .c-department__list button {
        color: #293847;
        text-decoration: none
    }

    .c-department__list button {
        text-align: left;
        width: 100%
    }

    .c-department__link {
        border-radius: 50em;
        cursor: pointer;
        display: block;
        font-size: 14px;
        line-height: 21px;
        padding: 4px 8px;
        transition: padding .15s cubic-bezier(0, 0, .38, .9)
    }

    .c-department__link.is-current,
    .c-department__link:hover {
        background-color: #e4e7eb;
        color: #096ec8;
        padding: 4px 16px
    }

    .c-department__item.has-submenu .c-department__link,
    .c-department__item[data-level="2"] .c-department__link {
        position: relative
    }

    .c-department__item.has-submenu .c-department__link:after,
    .c-department__item[data-level="2"] .c-department__link:after {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='192' height='192' fill='%23096ec8' viewBox='0 0 256 256'%3E%3Cpath fill='none' d='M0 0h256v256H0z'/%3E%3Cpath fill='none' stroke='%23096ec8' stroke-linecap='round' stroke-linejoin='round' stroke-width='16' d='m96 48 80 80-80 80'/%3E%3C/svg%3E");
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: 16px;
        content: "";
        height: 16px;
        opacity: 0;
        position: absolute;
        right: 16px;
        top: calc(50% - 8px);
        -webkit-transform: translateX(-16px);
        transform: translateX(-16px);
        transition: all .15s cubic-bezier(0, 0, .38, .9);
        visibility: hidden;
        width: 16px
    }

    .c-department__item.has-submenu .c-department__link:hover:after,
    .c-department__item[data-level="2"] .c-department__link:hover:after {
        opacity: 1;
        -webkit-transform: translateX(0);
        transform: translateX(0);
        visibility: visible
    }

    .l-departments__filters {
        grid-gap: 8px;
        display: flex;
        flex-wrap: wrap;
        gap: 8px
    }

    .l-departments__filters .c-filter {
        background-color: #f2f3f5
    }

    .l-departments__filters .c-filter:hover {
        background-color: #fff;
        box-shadow: inset 0 0 0 1px #293847
    }

    .c-reassurance {
        grid-gap: 24px;
        display: grid;
        gap: 24px;
        grid-template-columns: 1fr 1fr 1fr;
        text-align: center
    }

    .c-reassurance>div {
        grid-gap: 8px;
        align-items: center;
        display: flex;
        flex-direction: column;
        gap: 8px
    }

    .c-blockList ul li a {
        text-decoration: none
    }

    .c-blockList ul li a:hover .icon {
        color: currentColor;
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }

    .c-blockList ul li a .icon {
        color: transparent;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
        transition: all .11s cubic-bezier(0, 0, .38, .9)
    }

    .c-blockList .list--divided .list__item:not(:last-child) {
        border-bottom-color: #fff
    }

    .c-search {
        position: relative;
        width: 100%
    }

    .js-search--is-active.c-search {
        left: 8px;
        position: fixed;
        right: 8px;
        top: 16px;
        width: calc(100% - 16px);
        z-index: 1000
    }

    .js-search--is-active.c-search:before {
        background-color: #f2f3f5;
        border-bottom-left-radius: 28px;
        border-bottom-right-radius: 28px;
        border-top-left-radius: 28px;
        border-top-right-radius: 28px;
        bottom: -8px;
        content: "";
        display: block;
        height: calc(100% + 16px);
        left: -8px;
        position: absolute;
        right: -8px;
        top: -8px;
        width: calc(100% + 16px)
    }

    @media(min-width:768px) {
        .js-search--is-active.c-search {
            left: 15vw;
            position: fixed;
            right: 15vw;
            width: 70vw
        }
    }

    @media(min-width:1024px) {
        .js-search--is-active.c-search {
            left: inherit;
            position: relative;
            right: inherit;
            top: inherit;
            width: 100%
        }
    }

    .js-search--has-results.c-search:before {
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0
    }

    .c-search__results {
        background-color: #f2f3f5;
        border-bottom-left-radius: 28px;
        border-bottom-right-radius: 28px;
        color: #293847;
        height: auto;
        left: -8px;
        overflow-x: hidden;
        overflow-y: auto;
        padding: 8px;
        position: absolute;
        top: calc(100% + 2px);
        width: calc(100% + 16px)
    }

    .c-search__wrapper {
        grid-gap: 8px;
        display: flex;
        flex-direction: column;
        gap: 8px;
        max-height: 80vh;
        overflow-y: auto;
        padding-right: 8px;
        width: calc(100% + 8px)
    }

    .c-search__wrapper::-webkit-scrollbar {
        width: 16px
    }

    .c-search__wrapper::-webkit-scrollbar-track {
        background-color: transparent;
        border-radius: 100px
    }

    .c-search__wrapper::-webkit-scrollbar-thumb {
        background-clip: content-box;
        background-color: #c1c1c1;
        border: 4px solid transparent;
        border-radius: 100px;
        cursor: grab
    }

    .c-search__wrapper::-webkit-scrollbar-thumb:hover {
        background-color: #7d7d7d;
        cursor: grabbing
    }

    .c-search__resultbox {
        border-radius: 20px
    }

    .c-search__resultbox--pub {
        text-align: center
    }

    .c-search__resultbox--pub:empty {
        display: none
    }

    .c-search__resultbox--pub>a {
        display: block
    }

    .c-search__resultbox--pub>a>img {
        border-radius: 20px
    }

    .c-search__resultlist li.c-search__result--focused,
    .c-search__resultlist li:hover {
        background-color: #f2f3f5
    }

    .c-search__result {
        grid-gap: 8px;
        align-items: center;
        border-radius: 4px;
        display: flex;
        gap: 8px;
        max-height: 36px;
        padding: 8px
    }

    .c-search__result:hover {
        box-shadow: inset 0 0 0 1px #f2f3f5, 0 0 0 1px transparent
    }

    .c-search__result[focus-within] {
        box-shadow: 0 0 0 2px #b3d2ee
    }

    .c-search__result:focus-within {
        box-shadow: 0 0 0 2px #b3d2ee
    }

    .c-search__result>.icon {
        --size: 16px
    }

    .c-search__result-link {
        grid-gap: 8px;
        align-items: baseline;
        color: #293847;
        display: flex;
        flex-grow: 1;
        gap: 8px;
        text-decoration: none
    }

    .c-search__result-link:hover {
        color: #0f1419
    }

    .c-search__result-name mark {
        background-color: transparent;
        font-weight: 400
    }

    .c-search__result-name b {
        font-weight: 600
    }

    .c-search__result-desc {
        color: #7a8999
    }

    .c-search__suggestlist {
        grid-gap: 8px;
        display: grid;
        gap: 8px
    }

    @media(min-width:1024px) {
        .c-search__suggestlist {
            grid-template-columns: repeat(1, 1fr)
        }
    }

    @media(min-width:1280px) {
        .c-search__suggestlist {
            grid-template-columns: repeat(2, 1fr)
        }
    }

    .c-searchCard .o-card__image img {
        aspect-ratio: 1/1;
        width: 80px
    }

    .c-searchCard .o-card__title {
        font-size: 14px
    }

    .c-searchCard .u-line-clamp--2 {
        line-height: 21px;
        max-height: 42px
    }

    .btn--back {
        background-color: transparent;
        color: #293847;
        display: none;
        height: 40px;
        padding: 4px;
        width: 40px;
        z-index: 1
    }

    .btn--back .icon {
        --size: 24px
    }

    .js-search--is-active .btn--back {
        display: inline-flex
    }

    @media(min-width:768px) {
        .js-search--is-active .btn--back {
            display: none
        }
    }

    .l-header__search .c-form-control,
    .l-header__search .c-form-control:hover {
        box-shadow: inset 0 0 0 1px transparent, 0 0 0 1px transparent
    }

    .l-header__search .c-form-control[focus-within] {
        box-shadow: inset 0 0 0 1px #096ec8, 0 0 0 2px #b3d2ee
    }

    .l-header__search .c-form-control:focus-within {
        box-shadow: inset 0 0 0 1px #096ec8, 0 0 0 2px #b3d2ee
    }

    .l-header__search .js-search--is-active .c-form-control {
        box-shadow: inset 0 0 0 1px #b6c2cd, 0 0 0 1px transparent
    }

    .l-header__search .js-search--is-active .c-form-control:hover {
        box-shadow: inset 0 0 0 1px #064e8e, 0 0 0 1px transparent
    }

    .l-header__search .js-search--is-active .c-form-control[focus-within] {
        box-shadow: inset 0 0 0 1px #096ec8, 0 0 0 2px #b3d2ee
    }

    .l-header__search .js-search--is-active .c-form-control:focus-within {
        box-shadow: inset 0 0 0 1px #096ec8, 0 0 0 2px #b3d2ee
    }

    .c-search input[type=search] {
        margin-bottom: 0
    }

    input.c-form-input[type=text]::-ms-clear,
    input.c-form-input[type=text]::-ms-reveal {
        display: none;
        height: 0;
        width: 0
    }

    input.c-form-input[type=search]::-webkit-search-cancel-button,
    input.c-form-input[type=search]::-webkit-search-decoration,
    input.c-form-input[type=search]::-webkit-search-results-button,
    input.c-form-input[type=search]::-webkit-search-results-decoration {
        display: none
    }

    .c-form-field {
        display: flex;
        flex-direction: column
    }

    .c-form-field--inline {
        grid-gap: 0 8px;
        align-items: center;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        gap: 0 8px
    }

    .c-form-label {
        font-size: 14px;
        font-weight: 700
    }

    .c-form-helper {
        color: #293847;
        font-size: 14px;
        margin-bottom: 4px
    }

    .c-form-control {
        grid-gap: 0 8px;
        align-items: center;
        border-radius: 4px;
        box-shadow: inset 0 0 0 1px #b6c2cd, 0 0 0 1px transparent;
        display: flex;
        gap: 0 8px;
        height: calc(2.5rem - 2px);
        padding: 0 1rem;
        position: relative
    }

    .c-form-control:hover {
        box-shadow: inset 0 0 0 1px #064e8e, 0 0 0 1px transparent
    }

    .c-form-control[focus-within] {
        box-shadow: inset 0 0 0 1px #096ec8, 0 0 0 2px #b3d2ee
    }

    .c-form-control:focus-within {
        box-shadow: inset 0 0 0 1px #096ec8, 0 0 0 2px #b3d2ee
    }

    [data-theme=dark] .c-form-control,
    [data-theme=default] .c-form-control,
    [data-theme=light] .c-form-control {
        background-color: #fff
    }

    [data-theme=white] .c-form-control {
        background-color: #f2f3f5
    }

    .c-form-control .c-form-input:only-of-type {
        padding: 0
    }

    .c-form-control .c-form-select:only-of-type {
        padding-left: 0
    }

    .c-form-control__icon {
        align-content: center;
        display: flex;
        flex: 0 0 auto;
        flex-wrap: wrap;
        height: 16px;
        width: 16px
    }

    .c-form-prefix {
        border-right: 1px solid #7a8999;
        margin-left: .5rem;
        padding: 0 .5rem 0 0
    }

    .c-form-prefix,
    .c-form-suffix {
        color: #7a8999;
        font-size: 14px;
        line-height: 1.5;
        pointer-events: none
    }

    .c-form-suffix {
        border-left: 1px solid #7a8999;
        margin: 0 .5rem;
        padding: 0 0 0 .5rem
    }

    .c-form-control--sm {
        border-radius: 4px;
        font-size: 12px;
        height: 32px;
        line-height: 18px;
        padding-bottom: 7px;
        padding-top: 7px
    }

    .c-form-control--sm .c-form-input {
        height: 30px
    }

    .c-form-control--md {
        border-radius: 4px;
        font-size: 14px;
        height: 40px;
        line-height: 21px;
        padding-bottom: 9.5px;
        padding-top: 9.5px
    }

    .c-form-control--md .c-form-input {
        height: 38px
    }

    .c-form-control--lg {
        border-radius: 4px;
        font-size: 16px;
        height: 48px;
        line-height: 24px;
        padding-bottom: 12px;
        padding-top: 12px
    }

    .c-form-control--lg .c-form-input {
        height: 46px
    }

    .c-form-control--rounded {
        border-radius: 50em
    }

    .c-form-control--is-error,
    .c-form-control--is-invalid {
        box-shadow: inset 0 0 0 1px #d84148, 0 0 0 2px transparent
    }

    .c-form-control--is-error.is-hover,
    .c-form-control--is-error:hover,
    .c-form-control--is-invalid.is-hover,
    .c-form-control--is-invalid:hover {
        box-shadow: inset 0 0 0 1px #992e33, 0 0 0 2px transparent
    }

    .c-form-control--is-error.is-focus,
    .c-form-control--is-error:focus,
    .c-form-control--is-error[focus-within],
    .c-form-control--is-invalid.is-focus,
    .c-form-control--is-invalid:focus,
    .c-form-control--is-invalid[focus-within] {
        box-shadow: inset 0 0 0 1px #d84148, 0 0 0 2px #f3c4c6
    }

    .c-form-control--is-error.is-focus,
    .c-form-control--is-error:focus,
    .c-form-control--is-error:focus-within,
    .c-form-control--is-invalid.is-focus,
    .c-form-control--is-invalid:focus,
    .c-form-control--is-invalid:focus-within {
        box-shadow: inset 0 0 0 1px #d84148, 0 0 0 2px #f3c4c6
    }

    .c-form-control--is-success,
    .c-form-control--is-valid {
        box-shadow: inset 0 0 0 1px #2bb04a, 0 0 0 2px transparent
    }

    .c-form-control--is-success.is-hover,
    .c-form-control--is-success:hover,
    .c-form-control--is-valid.is-hover,
    .c-form-control--is-valid:hover {
        box-shadow: inset 0 0 0 1px #1f7d35, 0 0 0 2px transparent
    }

    .c-form-control--is-success.is-focus,
    .c-form-control--is-success:focus,
    .c-form-control--is-success[focus-within],
    .c-form-control--is-valid.is-focus,
    .c-form-control--is-valid:focus,
    .c-form-control--is-valid[focus-within] {
        box-shadow: inset 0 0 0 1px #2bb04a, 0 0 0 2px #bde7c7
    }

    .c-form-control--is-success.is-focus,
    .c-form-control--is-success:focus,
    .c-form-control--is-success:focus-within,
    .c-form-control--is-valid.is-focus,
    .c-form-control--is-valid:focus,
    .c-form-control--is-valid:focus-within {
        box-shadow: inset 0 0 0 1px #2bb04a, 0 0 0 2px #bde7c7
    }

    .c-form-input,
    .c-form-select {
        background: none;
        border: none;
        color: #293847;
        font-family: Hind Madurai, Hind-fallback, Arial, sans-serif;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        height: calc(2.5rem - 2px);
        line-height: 1.5;
        outline: none;
        overflow: hidden;
        padding: 0 .5rem;
        text-overflow: ellipsis;
        white-space: nowrap;
        width: 100%
    }

    .c-form-select {
        -webkit-appearance: none;
        appearance: none;
        background-color: transparent;
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3E%3Cpath fill='none' stroke='%23293847' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3E%3C/svg%3E");
        background-position: right 8px center;
        background-repeat: no-repeat;
        background-size: 16px 12px;
        padding-right: 32px
    }

    .c-form-select::-ms-expand {
        opacity: 0
    }

    .c-form-select::-webkit-input-placeholder {
        color: #7a8999;
        opacity: 1
    }

    .c-form-select:-ms-input-placeholder {
        color: #7a8999;
        opacity: 1
    }

    .c-form-select::placeholder {
        color: #7a8999;
        opacity: 1
    }

    .c-form-select[multiple],
    .c-form-select[size]:not([size="1"]) {
        background-image: none;
        height: auto;
        padding-right: 16px
    }

    .c-form-select option[selected] {
        color: #7a8999
    }

    .c-form-select:disabled {
        background-color: #b6c2cd;
        border-color: #b6c2cd;
        color: #7a8999;
        cursor: not-allowed;
        opacity: .5
    }

    .c-form-select:-moz-focusring {
        color: transparent
    }

    .c-form-control__btn {
        align-content: center;
        background-color: transparent;
        border-radius: 2px;
        box-shadow: 0 0 0 2px transparent;
        color: #293847;
        cursor: pointer;
        display: flex;
        flex: 0 0 auto;
        flex-wrap: wrap;
        font-family: Hind Madurai, Hind-fallback, Arial, sans-serif;
        font-size: 1rem;
        height: 24px;
        padding: 4px;
        width: 24px
    }

    .c-form-control__btn:hover {
        background-color: #e4e7eb;
        color: #000
    }

    .c-form-control__btn:focus {
        box-shadow: 0 0 0 2px #b3d2ee;
        color: #293847;
        outline: none
    }

    .c-form-control__btn>svg {
        line-height: 18px
    }

    .c-form-mention {
        font-size: 12px;
        line-height: 16px;
        margin-top: 4px
    }

    .c-form-requirement {
        grid-gap: 0 4px;
        align-items: flex-start;
        display: inline-flex;
        gap: 0 4px
    }

    .c-form-requirement>svg {
        flex: 0 0 1rem
    }

    .c-form-requirement.is-invalid {
        color: #d84148
    }

    .c-form-requirement.is-valid {
        color: #2bb04a
    }

    .c-inputgroup {
        grid-gap: 16px;
        gap: 16px
    }

    .c-inputgroup__field {
        flex: 1;
        position: relative
    }

    .c-inputgroup__field:not(:last-child):after {
        background-color: #b6c2cd;
        content: " ";
        display: block;
        height: 24px;
        position: absolute;
        right: -8px;
        top: 50%;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        transition: background-color .15s ease-in-out 0s;
        width: 1px;
        z-index: 2
    }

    .c-form-field__input-container {
        align-items: center;
        border-radius: 3px;
        box-sizing: border-box;
        color: #252a31;
        cursor: text;
        display: flex;
        flex-direction: row;
        font-size: 14px;
        height: calc(2.5rem - 2px);
        justify-content: space-between;
        position: relative
    }

    .c-form-field__input-container>.c-form-input {
        -webkit-appearance: none;
        appearance: none;
        background-color: transparent;
        border: none;
        border-radius: 3px;
        box-shadow: none;
        box-sizing: border-box;
        color: inherit;
        cursor: inherit;
        flex: 1 1 20%;
        font-size: inherit;
        font-weight: 400;
        height: 100%;
        min-width: 0;
        padding: 0 8px;
        width: 100%;
        z-index: 2
    }

    .c-nav-scroller,
    .c-nav-scroller__wrapper {
        display: flex
    }

    .c-nav-scroller {
        overflow: hidden;
        position: relative;
        width: 100%
    }

    .c-nav-scroller__nav {
        align-self: center;
        position: relative;
        z-index: 1
    }

    .c-nav-scroller__content,
    .c-nav-scroller__items {
        align-items: center;
        display: inline-flex;
        white-space: nowrap
    }

    .c-nav-scroller__content {
        will-change: transform
    }

    .c-nav-scroller__content:not(.no-transition) {
        transition: -webkit-transform .25s cubic-bezier(.645, .045, .355, 1);
        transition: transform .25s cubic-bezier(.645, .045, .355, 1);
        transition: transform .25s cubic-bezier(.645, .045, .355, 1), -webkit-transform .25s cubic-bezier(.645, .045, .355, 1)
    }

    ul.c-nav-scroller__content {
        list-style: none;
        margin: 0;
        padding: 0
    }

    .c-nav-scroller__item {
        cursor: pointer;
        display: block;
        padding: 4px 8px;
        text-align: center
    }

    .c-nav-scroller__item--is-current:after {
        background-color: #fff;
        border-radius: 1px;
        bottom: 0;
        content: "";
        height: 1px;
        left: 8px;
        position: absolute;
        right: 8px
    }

    .c-nav-scroller-btn {
        background: #293847;
        color: #fff;
        cursor: pointer;
        height: 100%;
        min-height: auto;
        position: absolute;
        top: 50%;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        transition: color .3s, opacity .3s;
        width: 66px;
        z-index: 10
    }

    .c-nav-scroller-btn>.icon {
        --size: 24px
    }

    .c-nav-scroller-btn:hover {
        color: #fff
    }

    .c-nav-scroller-btn:focus {
        outline: 0
    }

    .c-nav-scroller-btn:not(.active) {
        opacity: 0;
        pointer-events: none
    }

    .c-nav-scroller-icon {
        fill: currentColor;
        display: inline-block;
        height: 1em;
        position: relative;
        top: -.1em;
        vertical-align: middle;
        width: 1em
    }

    .c-nav-scroller-btn--left {
        background: linear-gradient(270deg, rgba(41, 56, 71, 0), #293847);
        left: 0;
        text-align: left
    }

    .c-nav-scroller-btn--right {
        background: linear-gradient(90deg, rgba(41, 56, 71, 0), #293847);
        right: 0;
        text-align: right
    }

    :root {
        --spacing: clamp(0.25rem, 2vw, 0.5rem)
    }

    .c-stepper {
        display: flex
    }

    .c-stepper__item {
        grid-gap: clamp(.25rem, 2vw, .5rem);
        grid-gap: var(--spacing);
        align-items: center;
        display: flex;
        gap: clamp(.25rem, 2vw, .5rem);
        gap: var(--spacing)
    }

    .c-stepper__item:not(:last-child) {
        flex: 1
    }

    .c-stepper__item:not(:last-child):after {
        background-color: hsla(0, 0%, 100%, .16);
        content: "";
        flex: 1;
        height: 1px;
        margin-right: .5rem;
        position: relative;
        z-index: 0
    }

    .c-stepper__title {
        grid-gap: 8px;
        align-items: center;
        background-color: hsla(0, 0%, 100%, .16);
        border: 1px solid transparent;
        border-radius: 50em;
        color: #fff;
        display: flex;
        font-size: clamp(.75rem, 4vw, .875rem);
        font-weight: 700;
        gap: 8px;
        height: 26px;
        justify-content: center;
        padding: 4px 16px;
        text-decoration: none
    }

    .c-stepper__title>.icon {
        --size: 16px
    }

    @media(min-width:768px) {
        .c-stepper__title {
            font-size: 14px;
            height: 32px
        }

        .c-stepper__title>.icon {
            --size: 24px
        }
    }

    .c-stepper__title:hover {
        border-color: #fff;
        color: #fff
    }

    .c-stepper__item--is-active:not(:last-child):after {
        background-color: #fff
    }

    .c-stepper__item--is-active .c-stepper__title {
        border-color: #fff;
        color: #fff
    }

    .c-stepper__item--is-current:not(:last-child):after {
        background-color: #fff
    }

    .c-stepper__item--is-current .c-stepper__title {
        background-color: #fff;
        color: #293847
    }

    .c-loader-container {
        align-items: center;
        background: rgba(41, 56, 71, .5);
        display: flex;
        height: 100vh;
        justify-content: center;
        position: relative;
        width: 100%;
        z-index: 1
    }

    .c-loader-container--hide {
        display: none
    }

    .c-loader-overlay {
        --bg-color: hsla(0, 0%, 100%, .5);
        background: var(--bg-color);
        bottom: 0;
        height: 100%;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        transition: opacity .7s;
        width: 100%;
        z-index: 1
    }

    .c-loader-overlay>.c-loader {
        left: calc(50% - 32px);
        position: absolute;
        top: clamp(0%, 25vh, 50% - 32px)
    }

    [aria-busy=false] .c-loader-overlay {
        opacity: 0;
        visibility: hidden
    }

    [aria-busy=true] .c-loader-overlay {
        opacity: 1;
        visibility: visible
    }

    .c-waiting-content {
        align-items: center;
        display: flex;
        justify-content: center
    }

    .c-loader {
        --size: 32px;
        background-color: #fff;
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1 12.015C1 18.072 5.988 23 12.12 23c3.382 0 6.552-1.488 8.693-4.084L21 18.69l-3.696-3.192-.183.266a6.146 6.146 0 0 1-2.184 1.94 6.011 6.011 0 0 1-2.815.695c-3.552 0-6.23-2.745-6.23-6.383 0-1.82.65-3.465 1.83-4.63 1.143-1.131 2.706-1.754 4.4-1.754a6.01 6.01 0 0 1 2.815.695 6.144 6.144 0 0 1 2.184 1.94l.183.266L21 5.342l-.187-.225a11.361 11.361 0 0 0-3.899-3.042A11.148 11.148 0 0 0 12.12 1C5.988 1 1 5.941 1 12.015Z' fill='%23E13B13'/%3E%3C/svg%3E");
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: calc(100% - clamp(4px, 50%, 32px));
        border-radius: var(--size);
        height: var(--size);
        position: relative;
        width: var(--size)
    }

    .c-loader:after,
    .c-loader:before {
        -webkit-animation: loader-spin 1s linear infinite;
        animation: loader-spin 1s linear infinite;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        border-left-color: transparent;
        border-radius: 50%;
        box-sizing: border-box;
        content: "";
        display: block;
        height: var(--size);
        position: absolute;
        -webkit-transform: translateZ(0) scale(1) rotate(45deg);
        transform: translateZ(0) scale(1) rotate(45deg);
        -webkit-transform-origin: center;
        transform-origin: center;
        width: var(--size)
    }

    .c-loader:before {
        border-left-color: #e23a05;
        border-right-color: #e23a05;
        border-top-color: #e23a05;
        border: calc(var(--size)/16) solid transparent;
        border-bottom-color: #e23a05
    }

    .c-loader:after {
        border-bottom-color: #096ec8;
        border-left-color: #096ec8;
        border-right-color: #096ec8;
        border: calc(var(--size)/16) solid transparent;
        border-top-color: #096ec8
    }

    .c-waitingLoader {
        --backdrop-bg-color: hsla(0, 0%, 100%, .5);
        background-color: var(--backdrop-bg-color);
        bottom: 0;
        height: 100vh;
        left: 0;
        position: fixed;
        right: 0;
        text-align: center;
        top: 0;
        width: 100%;
        z-index: 1500
    }

    .c-waitingLoader:before {
        background: url(images/nLoaderCds.gif) center 10px no-repeat;
        background-size: 80px;
        border-radius: 50px;
        content: " ";
        display: block;
        height: 100px;
        left: calc(50% - 40px);
        margin: auto;
        position: absolute;
        top: calc(50% - 40px);
        width: 100px;
        z-index: 1
    }

    .c-loader--dual-ring {
        --size: 80px;
        display: inline-block;
        height: var(--size);
        width: var(--size)
    }

    .c-loader--dual-ring:after {
        -webkit-animation: lds-dual-ring 1.2s linear infinite;
        animation: lds-dual-ring 1.2s linear infinite;
        background-color: #fff;
        border-color: #e23a05 transparent #096ec8;
        border-radius: 50%;
        border-style: solid;
        border-width: 6px;
        content: " ";
        display: block;
        height: var(--size);
        margin: 8px;
        width: var(--size)
    }

    @-webkit-keyframes lds-dual-ring {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg)
        }

        to {
            -webkit-transform: rotate(1turn);
            transform: rotate(1turn)
        }
    }

    @keyframes lds-dual-ring {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg)
        }

        to {
            -webkit-transform: rotate(1turn);
            transform: rotate(1turn)
        }
    }

    .c-loader--simple {
        --color: #fff;
        --size: 32px;
        background: var(--color);
        height: var(--size);
        -webkit-mask-image: url("data:image/svg+xml;charset=utf-8,%3Csvg fill='var(--color)' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cstyle%3E@keyframes spinner_sM3D{0%25,50%25{animation-timing-function:cubic-bezier(0,1,0,1);r:0}10%25{animation-timing-function:cubic-bezier(.53,0,.61,.73);r:2px}}.spinner_DupU{animation:spinner_sM3D 1.2s infinite}%3C/style%3E%3C/svg%3E");
        mask-image: url("data:image/svg+xml;charset=utf-8,%3Csvg fill='var(--color)' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cstyle%3E@keyframes spinner_sM3D{0%25,50%25{animation-timing-function:cubic-bezier(0,1,0,1);r:0}10%25{animation-timing-function:cubic-bezier(.53,0,.61,.73);r:2px}}.spinner_DupU{animation:spinner_sM3D 1.2s infinite}%3C/style%3E%3C/svg%3E");
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat;
        width: var(--size)
    }

    .c-list--nanoCard {
        display: flex;
        flex-direction: column
    }

    .c-list--nanoCard .c-list__item:not(:last-child) {
        border-bottom: 1px dashed #b6c2cd
    }

    .c-special-numbers {
        grid-gap: 0;
        display: flex;
        flex-direction: column;
        gap: 0
    }

    .c-special-numbers__pill,
    .c-special-numbers__wrap {
        align-items: center;
        display: flex
    }

    .c-special-numbers__pill {
        grid-gap: 4px;
        background-color: #293847;
        border-radius: 50em;
        color: #fff;
        font-size: 16px;
        font-weight: 600;
        gap: 4px;
        justify-content: center;
        line-height: 24px;
        padding: 0 8px;
        position: relative
    }

    .c-special-numbers__pill>.icon {
        --size: 16px
    }

    .c-special-numbers--indigo .c-special-numbers__pill {
        background-color: #962a76;
        color: #fff
    }

    .c-special-numbers__message {
        background-color: #fff;
        border-radius: 50em;
        color: #293847;
        font-size: 12px;
        font-weight: 600;
        padding: 0 28px 0 8px;
        -webkit-transform: translateX(20px);
        transform: translateX(20px);
        white-space: nowrap
    }

    .c-special-numbers__number {
        white-space: nowrap
    }

    .c-special-numbers__mention {
        color: #fff;
        font-size: 10px;
        text-align: right
    }

    .c-overlayer__title h4 {
        font-family: Montserrat, Montserrat-fallback, Verdana, sans-serif;
        font-size: 16px;
        margin: 0
    }

    .c-overlayer--basket {
        background-color: #fff
    }

    .c-overlayer--basket .c-overlayer__content {
        max-height: 50vh;
        overflow-x: hidden;
        overflow-y: auto
    }

    .c-overlayer--basket .c-overlayer__footer {
        background-color: #fff;
        padding: 16px 20%;
        text-align: center
    }

    .c-overlayer--compte {
        background-color: #fff;
        padding: 8px
    }

    .c-overlayer--compte .c-overlayer__footer {
        padding: 8px
    }

    .c-overlayer--compte .c-overlayer__action {
        text-align: center
    }

    .c-overlayer--cdav {
        background-color: #fff;
        padding: 8px
    }

    .c-menulist-CZ.list {
        border-bottom: inherit;
        padding: 0
    }

    .c-menulist-CZ.list--divided .list__item:not(:last-child) {
        border-bottom-color: #b6c2cd;
        border-bottom-style: dashed
    }

    .c-menulist-CZ a {
        color: currentColor;
        text-decoration: none
    }

    .c-menulist-CZ a:hover {
        color: #0f1419;
        text-decoration: underline
    }

    .c-menulist-CZ a span {
        max-width: inherit
    }

    .c-menulist-CDAV.list--divided .list__item:not(:last-child) {
        border-bottom-color: #b6c2cd;
        border-bottom-style: dashed
    }

    .c-menulist-CDAV a {
        color: #293847;
        text-decoration: none
    }

    .c-menulist-CDAV a:hover {
        color: #0f1419;
        text-decoration: underline
    }

    :root {
        --header-gutters: 8px;
        --header-bg: #293847;
        --header-main--height: 70px;
        --header-services--height: 44px
    }

    @media(min-width:768px) {
        :root {
            --header-gutters: 16px
        }
    }

    @media(min-width:1024px) {
        :root {
            --header-gutters: 24px
        }
    }

    [data-theme=default] {
        --header-bg: #293847
    }

    [data-theme=pro] {
        --header-bg: #0f1419
    }

    .logo-Cdiscount--svg {
        height: 26px;
        width: 125px
    }

    @media(min-width:1024px) {
        .logo-Cdiscount--svg {
            height: 37px;
            width: 175px
        }
    }

    .logo-CdiscountPro--svg {
        height: 24px;
        width: 155px
    }

    @media(min-width:1024px) {
        .logo-CdiscountPro--svg {
            height: 34px;
            width: 245px
        }
    }

    [data-theme=default] a.hideFromPro {
        display: flex
    }

    [data-theme=default] a.displayToPro,
    [data-theme=pro] a.hideFromPro {
        display: none
    }

    [data-theme=pro] a.displayToPro {
        display: flex
    }

    [data-theme=pro] .c-banner {
        background-color: #293847
    }

    [data-theme=pro] .o-logoCDS:first-letter {
        color: #e23a05
    }

    .l-header__logo {
        position: relative;
        top: 4px
    }

    @media(min-width:768px) {
        .l-header__logo {
            top: inherit
        }
    }

    .l-header__logo a {
        align-items: center;
        justify-content: center
    }

    .l-header {
        box-shadow: 0 4px 4px 0 rgba(41, 56, 71, .15);
        display: flex;
        flex: 1 1 auto;
        flex-flow: column nowrap;
        float: none;
        font-size: 14px;
        position: static;
        position: relative;
        z-index: 300
    }

    .l-header__main {
        color: #fff;
        font-size: 14px
    }

    .l-header__main .btn--rayon {
        display: inline-flex
    }

    @media(min-width:768px) {
        .l-header__main .btn--rayon {
            display: none
        }
    }

    .l-header--fixed .l-header__main {
        box-shadow: 0 4px 4px 0 rgba(41, 56, 71, .15);
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 300
    }

    .js .l-header--fixed>.l-header__main+div {
        --header-main--height: var(--header-main--calcHeight, 40px);
        --input-search--height: 40px;
        background-color: #293847;
        background-color: var(--header-bg);
        padding-bottom: 8px;
        padding-top: 70px;
        padding-top: var(--header-main--height, calc(48px + var(--input-search--height)))
    }

    @media(min-width:768px) {
        .js .l-header--fixed>.l-header__main+div {
            --header-main--height: var(--header-main--calcHeight, 56px);
            padding-top: 70px;
            padding-top: var(--header-main--height)
        }
    }

    @media(min-width:1024px) {
        .js .l-header--fixed>.l-header__main+div {
            --header-main--height: var(--header-main--calcHeight, 70px);
            padding-top: 70px;
            padding-top: var(--header-main--height)
        }
    }

    .l-header--fixed>div+.l-header__main {
        position: static
    }

    .l-header--fixed>div+.l-header__main+.l-header__services {
        padding-top: 0
    }

    .l-header--sticky .l-header__main {
        top: 0;
        width: 100%;
        z-index: 300
    }

    .l-header--sticky .l-header__main,
    .l-header--sticky>div+.l-header__main {
        position: -webkit-sticky;
        position: sticky
    }

    .l-header--sticky>div+.l-header__main+.l-header__services {
        padding-top: 0
    }

    .l-header__head {
        grid-gap: inherit;
        background-color: #293847;
        background-color: var(--header-bg);
        display: grid;
        gap: inherit;
        grid-template-columns: repeat(2, 1fr);
        height: auto;
        padding-left: 8px;
        padding-left: var(--header-gutters);
        padding-right: 8px;
        padding-right: var(--header-gutters)
    }

    @media(min-width:768px) {
        .l-header__head {
            --header-main--height: 56px;
            grid-gap: 24px;
            align-items: center;
            display: flex;
            flex-flow: row nowrap;
            float: none;
            gap: 24px;
            height: 70px;
            height: var(--header-main--height);
            padding-left: 8px;
            padding-left: var(--header-gutters);
            padding-right: 8px;
            padding-right: var(--header-gutters);
            position: static
        }
    }

    @media(min-width:1024px) {
        .l-header__head {
            --header-main--height: 70px;
            height: 70px;
            height: var(--header-main--height)
        }
    }

    .l-header__logo {
        font-family: serif;
        font-family: initial;
        font-size: medium;
        font-style: normal;
        font-weight: 400;
        line-height: normal
    }

    .l-header__left {
        grid-column: 1/2;
        grid-row: 1
    }

    .l-header__fill {
        grid-column: 1/4;
        grid-row: 2
    }

    .l-header__right {
        grid-column: 2/4;
        grid-row: 1
    }

    .l-header__fill,
    .l-header__left,
    .l-header__right {
        --header-main--height: 40px;
        align-items: center;
        display: flex;
        float: none;
        height: 70px;
        height: var(--header-main--height);
        position: static
    }

    @media(min-width:768px) {

        .l-header__fill,
        .l-header__left,
        .l-header__right {
            height: 70px;
            height: var(--header-main--height)
        }
    }

    .l-header__fill {
        display: flex;
        flex: 1 1 auto;
        float: none;
        height: 82px;
        height: calc(var(--header-main--height) + 12px);
        padding-bottom: 8px;
        padding-top: 4px;
        position: static
    }

    @media(min-width:768px) {
        .l-header__fill {
            height: auto;
            padding-bottom: inherit;
            padding-top: inherit
        }
    }

    .l-header__search {
        align-items: center;
        display: flex;
        flex: 1 1 auto;
        float: none;
        padding: 0;
        position: static
    }

    .l-header__search .c-form-control {
        font-size: 16px;
        height: 40px;
        line-height: 1.5;
        padding-bottom: inherit;
        padding-top: inherit
    }

    .l-header__search .c-form-control .c-form-input {
        font-size: 16px;
        height: 38px
    }

    .l-header__search .c-form-control .c-form-input input[type=search]:focus {
        font-size: medium
    }

    .l-header__search .c-form-control .c-form-input::-webkit-input-placeholder {
        font-size: 16px
    }

    .l-header__search .c-form-control .c-form-input:-ms-input-placeholder {
        font-size: 16px
    }

    .l-header__search .c-form-control .c-form-input::placeholder {
        font-size: 16px
    }

    .l-header__search .c-form-control .c-form-input:-ms-input-placeholder {
        text-overflow: ellipsis
    }

    .l-header__search .c-form-control .c-form-input:placeholder-shown {
        text-overflow: ellipsis
    }

    .l-header__stepper {
        align-items: center;
        display: flex;
        flex: 1 1 auto;
        float: none;
        justify-content: center;
        padding: 0;
        position: static
    }

    .l-header__stepper>div:first-child {
        width: 100%
    }

    @media(min-width:768px) {
        .l-header__stepper>div:first-child {
            width: 80%
        }
    }

    @media(min-width:1024px) {
        .l-header__stepper>div:first-child {
            width: 70%
        }
    }

    @media(min-width:1280px) {
        .l-header__stepper>div:first-child {
            width: 60%
        }
    }

    .l-header__access {
        grid-gap: 0;
        align-items: center;
        display: flex;
        float: none;
        gap: 0;
        margin-left: auto;
        position: static;
        text-decoration: none
    }

    @media(min-width:768px) {
        .l-header__access {
            grid-gap: 8px;
            gap: 8px
        }
    }

    @media(min-width:1024px) {
        .l-header__access {
            grid-gap: 16px;
            gap: 16px
        }
    }

    .c-access__iconWrapper {
        display: flex;
        position: relative
    }

    .c-access__welcome {
        position: relative;
        top: -2px
    }

    .c-access__tel {
        grid-gap: 8px;
        align-items: flex-end;
        display: flex;
        flex-direction: column;
        gap: 8px;
        margin-left: auto
    }

    .btn-access,
    .c-access__tel a {
        color: #fff;
        text-decoration: none
    }

    .btn-access {
        grid-gap: 4px;
        align-items: center;
        border: 1px solid transparent;
        border-radius: 8px;
        display: flex;
        flex-direction: column;
        gap: 4px;
        justify-content: space-between;
        padding: 4px 8px;
        text-align: center
    }

    .btn-access.is-current,
    .btn-access:hover {
        border: 1px solid #fff;
        color: #fff
    }

    .btn-access:focus {
        box-shadow: 0 0 0 2px hsla(0, 0%, 100%, .3)
    }

    .btn-access .icon--access {
        --size: 24px
    }

    @media(min-width:768px) {
        .btn-access .icon--access {
            --size: 28px
        }
    }

    .btn-access .c-badge--white {
        background-color: hsla(0, 0%, 100%, .16);
        color: #fff
    }

    .btn-access__compte .c-access__iconWrapper {
        transition: all .11s cubic-bezier(.4, .14, 1, 1)
    }

    .btn-access__compte .icon--access {
        width: var(--size)
    }

    @media(min-width:768px) {
        .btn-access__compte .icon--access {
            -webkit-transform: translateX(0);
            transform: translateX(0);
            transition: all .11s cubic-bezier(.4, .14, 1, 1)
        }
    }

    .btn-access__compte .c-access__welcome {
        opacity: 0;
        width: 0
    }

    .btn-access__compte.has-animation .icon--access {
        width: var(--size)
    }

    .btn-access__compte.has-animation .c-access__welcome {
        -webkit-animation: shake .5s;
        animation: shake .5s;
        -webkit-animation-iteration-count: 1;
        animation-iteration-count: 1;
        opacity: 1;
        transition: all .11s cubic-bezier(.4, .14, 1, 1);
        width: 57px
    }

    .btn-access__compte.has-animation .c-access__welcome,
    .btn-access__compte.has-animation:hover .icon--access {
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }

    .btn-access__compte.is-hover .icon--access,
    .btn-access__compte:hover .icon--access {
        width: var(--size)
    }

    .btn-access__compte.is-hover .c-access__welcome,
    .btn-access__compte:hover .c-access__welcome {
        -webkit-animation: shake .5s;
        animation: shake .5s;
        -webkit-animation-iteration-count: 1;
        animation-iteration-count: 1;
        opacity: 0;
        -webkit-transform: translateX(0);
        transform: translateX(0);
        transition: all .11s cubic-bezier(.4, .14, 1, 1);
        width: 0
    }

    @-webkit-keyframes shake {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg)
        }

        25% {
            -webkit-transform: rotate(5deg);
            transform: rotate(5deg)
        }

        50% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg)
        }

        75% {
            -webkit-transform: rotate(-5deg);
            transform: rotate(-5deg)
        }

        to {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg)
        }
    }

    @keyframes shake {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg)
        }

        25% {
            -webkit-transform: rotate(5deg);
            transform: rotate(5deg)
        }

        50% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg)
        }

        75% {
            -webkit-transform: rotate(-5deg);
            transform: rotate(-5deg)
        }

        to {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg)
        }
    }

    .btn-access__label {
        display: none;
        font-size: 12px
    }

    @media(min-width:1024px) {
        .btn-access__label {
            display: block
        }

        .c-access__cdav .btn-access {
            min-width: 120px
        }

        .c-access__compte .btn-access {
            min-width: 100px
        }

        .c-access__compte .btn-access.is-current {
            min-width: 85px
        }

        .c-access__basket .btn-access {
            min-width: 75px
        }
    }

    .l-header__services {
        background-color: #293847;
        background-color: var(--header-bg);
        color: #fff;
        padding-bottom: 8px;
        padding-top: 4px
    }

    @media(min-width:768px) {
        .l-header__services {
            align-items: flex-start;
            border-bottom: 0;
            display: flex;
            font-size: 14px;
            padding-left: 8px;
            padding-left: var(--header-gutters);
            padding-right: 0;
            padding-top: 0
        }
    }

    .l-header__services .l-header__wrap {
        position: relative
    }

    .l-header__services .l-header__wrap:after {
        background: linear-gradient(90deg, rgba(41, 56, 71, 0), #293847);
        content: "";
        height: 36px;
        position: absolute;
        right: 0;
        top: 0;
        width: 66px;
        z-index: 1
    }

    .l-header__services .btn--rayon {
        display: none
    }

    @media(min-width:768px) {
        .l-header__services .btn--rayon {
            display: flex;
            font-size: 14px
        }
    }

    .l-header--fixed .l-header__services {
        padding-bottom: 16px;
        padding-top: 120px
    }

    @media(min-width:768px) {
        .l-header--fixed .l-header__services {
            padding-bottom: 4px;
            padding-top: 74px;
            padding-top: calc(var(--header-main--height) + 4px)
        }
    }

    .l-header__wrap {
        grid-gap: 8px;
        align-items: center;
        display: flex;
        gap: 8px;
        justify-content: flex-start;
        width: 100%
    }

    @media(min-width:768px) {
        .l-header__wrap {
            width: 100%
        }
    }

    .l-header__stores {
        display: none
    }

    @media(min-width:768px) {
        .l-header__stores {
            background-color: #293847;
            background-color: var(--header-bg);
            border-bottom: 1px solid transparent;
            color: #fff;
            display: block;
            padding-bottom: 8px;
            padding-left: 8px;
            padding-left: var(--header-gutters);
            padding-right: 8px;
            padding-right: var(--header-gutters);
            padding-top: 4px
        }

        .l-header__stores nav a,
        .l-header__stores nav button {
            color: #fff;
            font-weight: 400;
            position: relative;
            text-decoration: none
        }

        .l-header__stores nav a:after,
        .l-header__stores nav button:after {
            background: #fff;
            border-radius: 1px;
            bottom: 0;
            content: "";
            height: 1px;
            left: 50%;
            opacity: 0;
            position: absolute;
            -webkit-transform: translate3d(-50%, 0, 0);
            transform: translate3d(-50%, 0, 0);
            transition: all .11s cubic-bezier(0, 0, .3, 1);
            width: 0
        }

        .l-header__stores nav a:hover:after,
        .l-header__stores nav button:hover:after {
            opacity: 1;
            width: calc(100% - 16px)
        }
    }

    @-webkit-keyframes gradient {
        0% {
            background-position: 100% 0
        }

        to {
            background-position: 0 100%
        }
    }

    @keyframes gradient {
        0% {
            background-position: 100% 0
        }

        to {
            background-position: 0 100%
        }
    }

    .l-header__bar {
        background-color: #293847;
        background-color: var(--header-bg);
        border-bottom: 1px solid transparent;
        color: #fff;
        display: block;
        padding-bottom: 8px;
        padding-left: 8px;
        padding-left: var(--header-gutters);
        padding-right: 8px;
        padding-right: var(--header-gutters);
        padding-top: 0
    }

    .c-back {
        grid-gap: 8px;
        color: #fff;
        display: inline-flex;
        font-weight: 400;
        gap: 8px;
        position: relative;
        text-decoration: underline
    }

    .c-back:hover .icon {
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }

    .c-back .icon {
        --size: 16px;
        -webkit-transform: translateX(4px);
        transform: translateX(4px);
        transition: -webkit-transform .11s cubic-bezier(0, 0, .38, .9);
        transition: transform .11s cubic-bezier(0, 0, .38, .9);
        transition: transform .11s cubic-bezier(0, 0, .38, .9), -webkit-transform .11s cubic-bezier(0, 0, .38, .9)
    }

    @media(min-width:768px) {
        .c-back .icon {
            --size: 24px
        }
    }

    .btn--rayon {
        border-width: 1px;
        color: #fff;
        font-weight: 600
    }

    .btn--rayon>.icon {
        --size: 24px
    }

    .c-nav-services__list {
        grid-gap: 8px;
        align-items: flex-start;
        display: flex;
        gap: 8px;
        padding-left: 8px;
        width: 80%
    }

    @media(min-width:768px) {
        .c-nav-services__list {
            padding-left: inherit
        }
    }

    .c-nav-services__item {
        flex: 0 0 auto;
        position: relative
    }

    .c-nav-services__item,
    .c-nav-services__link {
        align-items: center;
        display: flex;
        justify-content: center
    }

    .c-nav-services__link {
        background-color: hsla(0, 0%, 100%, .16);
        border: 1px solid transparent;
        border-radius: 50em;
        color: #fff;
        font-weight: 600;
        height: 32px;
        padding: 4px 16px;
        text-decoration: none;
        transition-duration: .11s;
        transition-property: background-color, color;
        transition-timing-function: cubic-bezier(0, 0, .3, 1)
    }

    .c-nav-services__link:hover {
        background-color: hsla(0, 0%, 100%, 0);
        border: 1px solid #fff;
        color: #fff
    }

    .c-nav-services__link:focus {
        box-shadow: 0 0 0 2px hsla(0, 0%, 100%, .3)
    }

    .c-stores__category {
        grid-gap: 8px;
        align-items: center;
        border-radius: 50em;
        cursor: pointer;
        display: flex;
        gap: 8px;
        padding: 2px 16px
    }

    .c-stores__category>.icon {
        --size: 24px
    }

    .c-stores__category>span {
        font-weight: 700
    }

    .c-stores__category:hover {
        background-color: hsla(0, 0%, 100%, .16)
    }

    @font-face {
        font-family: font-icon-cdiscount;
        src: url(fonts/font-icon-cdiscount.ac29fb9ad66e7071fd09a936a395dd68.eot#iefix) format("embedded-opentype"), url(fonts/font-icon-cdiscount.fe93bb92732b61089d439e579b2a3caa.woff) format("woff"), url(fonts/font-icon-cdiscount.8c7ea423cc3c674ee774854e40a65861.woff2) format("woff2"), url(fonts/font-icon-cdiscount.3d21c267d2c1865d84abc0299d2ea64d.ttf) format("truetype"), url(fonts/font-icon-cdiscount.78051188bffac63efd46c59ec355bcb2.svg#font-icon-cdiscount) format("svg")
    }

    [class*=" cds-"],
    [class^=cds-] {
        -webkit-font-feature-settings: normal;
        font-feature-settings: normal;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        display: inline-block;
        font-family: font-icon-cdiscount !important;
        font-style: normal;
        font-variant: normal;
        font-weight: 400;
        line-height: 1;
        text-transform: none;
        vertical-align: middle
    }

    .cds-cagnotte:before {
        content: "\f101"
    }

    .cds-check:before {
        content: "\f102"
    }

    .cds-chevron-down:before {
        content: "\f103"
    }

    .cds-chevron-left:before {
        content: "\f104"
    }

    .cds-chevron-right:before {
        content: "\f105"
    }

    .cds-chevron-up:before {
        content: "\f106"
    }

    .cds-clock:before {
        content: "\f107"
    }

    .cds-cross:before {
        content: "\f108"
    }

    .cds-crown:before {
        content: "\f109"
    }

    .cds-download:before {
        content: "\f10a"
    }

    .cds-exclamation:before {
        content: "\f10b"
    }

    .cds-home:before {
        content: "\f10c"
    }

    .cds-package:before {
        content: "\f10d"
    }

    .cds-premium:before {
        content: "\f10e"
    }

    .cds-search:before {
        content: "\f10f"
    }

    .cds-shopping-cart:before {
        content: "\f110"
    }

    .cds-tag:before {
        content: "\f111"
    }

    .cds-thumb-down:before {
        content: "\f112"
    }

    .cds-thumb-up:before {
        content: "\f113"
    }

    .cds-beaute:before {
        content: "\f114"
    }

    .cds-billetterie:before {
        content: "\f115"
    }

    .cds-box:before {
        content: "\f116"
    }

    .cds-cuisine:before {
        content: "\f117"
    }

    .cds-disney:before {
        content: "\f118"
    }

    .cds-electricite:before {
        content: "\f119"
    }

    .cds-forfait:before {
        content: "\f11a"
    }

    .cds-immobilier:before {
        content: "\f11b"
    }

    .cds-occasion:before {
        content: "\f11c"
    }

    .cds-sante:before {
        content: "\f11d"
    }

    .cds-voitures:before {
        content: "\f11e"
    }

    .cds-voyages:before {
        content: "\f11f"
    }

    .tippy-box[data-theme~=cdark],
    .tippy-box[data-theme~=clight] {
        box-shadow: 0 0 4px 0 rgba(0, 0, 0, .1);
        font-size: 12px;
        text-align: left
    }

    .tippy-box[data-theme~=cdark] .tippy-content,
    .tippy-box[data-theme~=clight] .tippy-content {
        padding: 8px
    }

    .tippy-box[data-theme~=cdark] .tippy-content>*+*,
    .tippy-box[data-theme~=clight] .tippy-content>*+* {
        margin-top: 4px
    }

    .tippy-box[data-theme~=cdark] .tippy-content a,
    .tippy-box[data-theme~=clight] .tippy-content a {
        text-decoration: underline
    }

    .tippy-box[data-theme~=cdark] {
        background-color: getColor("neutral", 500);
        color: #fff
    }

    .tippy-box[data-theme~=cdark] .tippy-content .price,
    .tippy-box[data-theme~=cdark] .tippy-content a {
        color: #fff
    }

    .tippy-box[data-theme~=cdark]>.tippy-svg-arrow {
        fill: getColor("neutral", 500)
    }

    .tippy-box[data-theme~=clight] {
        background-color: #fff;
        color: #293847
    }

    .tippy-box[data-theme~=clight] .tippy-content a {
        color: currentColor
    }

    .tippy-box[data-theme~=clight]>.tippy-arrow:before {
        border-bottom-color: #fff
    }

    .tippy-box[data-theme~=clight]>.tippy-svg-arrow {
        fill: #fff
    }

    .tippy-box[data-theme~=header] {
        background-color: #e4e7eb;
        box-shadow: var(--shadow-200);
        color: #293847;
        padding: 8px;
        width: calc(100vw - 10px)
    }

    @media(min-width:768px) {
        .tippy-box[data-theme~=header] {
            width: 500px
        }
    }

    .tippy-box[data-theme~=header] .tippy-content {
        background-color: transparent;
        padding: 0
    }

    .tippy-box[data-theme~=header]>.tippy-arrow:before {
        border-bottom-color: #e4e7eb
    }

    .tippy-box[data-theme~=header]>.tippy-svg-arrow {
        fill: #e4e7eb
    }

    .c-user-menu {
        text-align: left;
        width: 14.5rem
    }

    .c-user-menu__user-name {
        display: block;
        padding-bottom: 1rem
    }

    .c-user-menu__menu-item,
    .c-user-menu__user-name {
        padding: .5rem
    }

    .c-user-menu__menu-item {
        display: block;
        text-decoration: none
    }

    .c-user-menu__menu-item:hover {
        background: #f8fafc
    }

    .c-user-menu__menu-item:first-of-type {
        border-top: 1px solid silver;
        padding-top: 1rem
    }

    .img-fluid {
        height: auto;
        max-width: 100%
    }

    .img-rounded {
        border-radius: 4px
    }

    [class^=flow]>* {
        margin-bottom: 0;
        margin-top: 0
    }

    .flow--none>:not(.u-visually-hidden):not(.u-hide)+*,
    .o-vflow--none>:not(.u-visually-hidden):not(.u-hide)+* {
        margin-top: 0
    }

    .flow--default>:not(.u-visually-hidden):not(.u-hide)+*,
    .o-vflow--default>:not(.u-visually-hidden):not(.u-hide)+* {
        margin-top: 16px
    }

    .flow--xxs>:not(.u-visually-hidden):not(.u-hide)+*,
    .o-vflow--xxs>:not(.u-visually-hidden):not(.u-hide)+* {
        margin-top: 2px
    }

    .flow--xs>:not(.u-visually-hidden):not(.u-hide)+*,
    .o-vflow--xs>:not(.u-visually-hidden):not(.u-hide)+* {
        margin-top: 4px
    }

    .flow--sm>:not(.u-visually-hidden):not(.u-hide)+*,
    .o-vflow--sm>:not(.u-visually-hidden):not(.u-hide)+* {
        margin-top: 8px
    }

    .flow--md>:not(.u-visually-hidden):not(.u-hide)+*,
    .o-vflow--md>:not(.u-visually-hidden):not(.u-hide)+* {
        margin-top: 16px
    }

    .flow--lg>:not(.u-visually-hidden):not(.u-hide)+*,
    .o-vflow--lg>:not(.u-visually-hidden):not(.u-hide)+* {
        margin-top: 24px
    }

    .flow--xl>:not(.u-visually-hidden):not(.u-hide)+*,
    .o-vflow--xl>:not(.u-visually-hidden):not(.u-hide)+* {
        margin-top: 32px
    }

    .flow--xxl>:not(.u-visually-hidden):not(.u-hide)+*,
    .o-vflow--xxl>:not(.u-visually-hidden):not(.u-hide)+* {
        margin-top: 48px
    }

    .o-hflow--none>:not(.u-visually-hidden):not(.u-hide)+* {
        margin-left: 0
    }

    .o-hflow--base>:not(.u-visually-hidden):not(.u-hide)+* {
        margin-left: 16px
    }

    .o-hflow--xs>:not(.u-visually-hidden):not(.u-hide)+* {
        margin-left: 4px
    }

    .o-hflow--sm>:not(.u-visually-hidden):not(.u-hide)+* {
        margin-left: 8px
    }

    .o-hflow--md>:not(.u-visually-hidden):not(.u-hide)+* {
        margin-left: 16px
    }

    .o-hflow--lg>:not(.u-visually-hidden):not(.u-hide)+* {
        margin-left: 24px
    }

    .o-hflow--xl>:not(.u-visually-hidden):not(.u-hide)+* {
        margin-left: 32px
    }

    .o-hflow--xxl>:not(.u-visually-hidden):not(.u-hide)+* {
        margin-left: 64px
    }

    .u-flex {
        display: flex
    }

    .u-inline-flex {
        display: inline-flex
    }

    .u-flex-center {
        align-items: center;
        justify-content: center
    }

    .u-justify-start {
        justify-content: flex-start
    }

    .u-justify-end {
        justify-content: flex-end
    }

    .u-justify-center {
        justify-content: center
    }

    .u-justify-between {
        justify-content: space-between
    }

    .u-items-center {
        align-items: center
    }

    .u-flex-row\@xxl {
        flex-direction: row
    }

    .u-flex-column {
        flex-direction: column
    }

    .u-flex-wrap {
        flex-wrap: wrap
    }

    .u-flex-nowrap {
        flex-wrap: nowrap
    }

    .u-nowrap {
        white-space: nowrap
    }

    .u-order-1 {
        order: 1
    }

    .u-order-2 {
        order: 2
    }

    .u-order-3 {
        order: 3
    }

    .u-gap-xs {
        grid-gap: 4px;
        gap: 4px
    }

    .u-gap-sm {
        grid-gap: 8px;
        gap: 8px
    }

    .u-gap-md {
        grid-gap: 16px;
        gap: 16px
    }

    .u-gap-lg {
        grid-gap: 24px;
        gap: 24px
    }

    .u-gap-xl {
        grid-gap: 32px;
        gap: 32px
    }

    .u-gap-xxl {
        grid-gap: 64px;
        gap: 64px
    }

    .u-mt-xs {
        margin-top: 4px
    }

    .u-mt-sm {
        margin-top: 8px
    }

    .u-mt-md {
        margin-top: 16px
    }

    .u-mt-xl {
        margin-top: 32px
    }

    .u-mb-xs {
        margin-bottom: 4px
    }

    .u-mb-sm {
        margin-bottom: 8px
    }

    .u-mb-md {
        margin-bottom: 16px
    }

    .u-mb-xl {
        margin-bottom: 32px
    }

    .u-ml-xs {
        margin-left: 4px
    }

    .u-ml-sm {
        margin-left: 8px
    }

    .u-ml-md {
        margin-left: 16px
    }

    .u-ml-auto {
        margin-left: auto
    }

    @media(min-width:1024px) {
        .u-ml-auto\@md {
            margin-left: auto
        }
    }

    .u-mr-xs {
        margin-right: 4px
    }

    .u-mr-md {
        margin-right: 16px
    }

    .u-mx-auto {
        margin-left: auto;
        margin-right: auto
    }

    .u-mx-sm {
        margin-left: 8px;
        margin-right: 8px
    }

    .u-m24 {
        margin: 24px
    }

    .u-p24 {
        padding: 24px
    }

    .u-mb24 {
        margin-bottom: 24px
    }

    .u-mb16 {
        margin-bottom: 16px
    }

    .u-p-2 {
        padding: 2px
    }

    .u-p-sm {
        padding: 8px
    }

    .u-p-md {
        padding: 16px
    }

    .u-p-lg {
        padding: 24px
    }

    .u-p-xl {
        padding: 32px
    }

    .u-pt-xl {
        padding-top: 32px
    }

    .u-pb-xxl {
        padding-bottom: 64px
    }

    .u-height-100\% {
        height: 100%
    }

    .u-width-100\% {
        width: 100%
    }

    .u-visually-hidden,
    .u-visually-hidden-focusable:not(:focus):not([focus-within]) {
        clip: rect(1px, 1px, 1px, 1px);
        border: 0;
        -webkit-clip-path: inset(50%);
        clip-path: inset(50%);
        height: 1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        white-space: nowrap;
        width: 1px
    }

    .u-visually-hidden-focusable:not(:focus):not(:focus-within) {
        clip: rect(1px, 1px, 1px, 1px);
        border: 0;
        -webkit-clip-path: inset(50%);
        clip-path: inset(50%);
        height: 1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        white-space: nowrap;
        width: 1px
    }

    .u-line-clamp--1 {
        -webkit-line-clamp: 1;
        max-height: 24px
    }

    .u-line-clamp--1,
    .u-line-clamp--2 {
        -webkit-box-orient: vertical;
        display: block;
        display: -webkit-box;
        line-height: 24px;
        max-width: 100%;
        overflow: hidden;
        text-overflow: ellipsis
    }

    .u-line-clamp--2 {
        -webkit-line-clamp: 2;
        max-height: 48px
    }

    .u-line-clamp--3 {
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        display: block;
        display: -webkit-box;
        line-height: 24px;
        max-height: 72px;
        max-width: 100%
    }

    .u-line-clamp--3,
    .u-truncate {
        overflow: hidden;
        text-overflow: ellipsis
    }

    .u-truncate {
        white-space: nowrap
    }

    .u-scrollable {
        overflow: auto;
        position: relative;
        scroll-behavior: smooth;
        width: 100%
    }

    .u-scrollable--hidden {
        -ms-overflow-style: none;
        scrollbar-width: none
    }

    .u-scrollable--hidden::-webkit-scrollbar {
        display: none
    }

    .u-outflow--xs {
        margin-left: -4px;
        margin-right: -4px
    }

    .u-outflow--sm {
        margin-left: -8px;
        margin-right: -8px
    }

    .u-outflow--md {
        margin-left: -16px;
        margin-right: -16px
    }

    .u-outflow--lg {
        margin-left: -24px;
        margin-right: -24px
    }

    .u-outflow--xl {
        margin-left: -32px;
        margin-right: -32px
    }

    .u-text--body-lead {
        font-size: 16px
    }

    .u-text--body {
        font-size: 14px
    }

    .u-text--body-small {
        font-size: 12px
    }

    .u-text--body-extra-small {
        font-size: 10px
    }

    .u-fw--bold,
    .u-text--bold {
        font-weight: 700
    }

    .u-text--normal {
        font-weight: 400
    }

    .u-text--white {
        color: #fff
    }

    .u-text--neutral-500 {
        color: #293847
    }

    .u-text--neutral-300 {
        color: #7a8999
    }

    .u-text--coral-500 {
        color: #e23a05
    }

    .u-text--blue-500 {
        color: #096ec8
    }

    .u-text--business,
    .u-text--green-500 {
        color: #2bb04a
    }

    .u-text--cyan-500 {
        color: #16b4f2
    }

    .u-text--yellow-500 {
        color: #ffce00
    }

    .u-text--red-500 {
        color: #d84148
    }

    .u-text-center {
        text-align: center
    }

    .u-text-left {
        text-align: left
    }

    .u-position-relative {
        position: relative
    }

    .u-position-absolute {
        position: absolute
    }

    .u-position-fixed {
        position: fixed
    }

    .u-position-sticky {
        position: -webkit-sticky;
        position: sticky
    }

    .u-position-static {
        position: static
    }

    .u-pointer-events-none {
        pointer-events: none
    }

    .icon--promo {
        color: #e23a05
    }

    .icon--business {
        color: #2bb04a
    }

    .icon--cdav {
        color: #16b4f2
    }

    .icon--16 {
        font-size: 16px;
        height: 16px;
        width: 16px
    }

    .icon--24 {
        font-size: 24px;
        height: 24px;
        width: 24px
    }

    .icon--32 {
        font-size: 32px;
        height: 32px;
        width: 32px
    }

    .icon--48 {
        font-size: 48px;
        height: 48px;
        width: 48px
    }

    .u-bg--nuance-0,
    .u-bg--white {
        background-color: #fff
    }

    .u-bg--nuance-1000 {
        background-color: #000
    }

    .u-bg--neutral-0 {
        background-color: #f2f3f5
    }

    .u-bg--neutral-50 {
        background-color: #e4e7eb
    }

    .u-bg--neutral-200 {
        background-color: #b6c2cd
    }

    .u-bg--neutral-300 {
        background-color: #7a8999
    }

    .u-bg--neutral-450 {
        background-color: #3c4d5d
    }

    .u-bg--neutral-500 {
        background-color: #293847
    }

    .u-bg--neutral-600 {
        background-color: #0f1419
    }

    .u-bg--coral-50 {
        background-color: #fcebe6
    }

    .u-bg--coral-100 {
        background-color: #f6c2b2
    }

    .u-bg--coral-300 {
        background-color: #ec7b58
    }

    .u-bg--coral-500 {
        background-color: #e23a05
    }

    .u-bg--coral-700 {
        background-color: #a02904
    }

    .u-bg--coral-900 {
        background-color: #5f1802
    }

    .u-bg--blue-50 {
        background-color: #e6f1fa
    }

    .u-bg--blue-100 {
        background-color: #b3d2ee
    }

    .u-bg--blue-300 {
        background-color: #5a9eda
    }

    .u-bg--blue-500 {
        background-color: #096ec8
    }

    .u-bg--blue-700 {
        background-color: #064e8e
    }

    .u-bg--blue-900 {
        background-color: #042e54
    }

    .u-bg--green-50 {
        background-color: #eaf7ed
    }

    .u-bg--green-100 {
        background-color: #bde7c7
    }

    .u-bg--green-300 {
        background-color: #71ca86
    }

    .u-bg--green-500 {
        background-color: #2bb04a
    }

    .u-bg--green-700 {
        background-color: #1f7d35
    }

    .u-bg--green-900 {
        background-color: #124a1f
    }

    .u-bg--cyan-50 {
        background-color: #e8f8fe
    }

    .u-bg--cyan-100 {
        background-color: #b7e8fb
    }

    .u-bg--cyan-300 {
        background-color: #63cdf6
    }

    .u-bg--cyan-500 {
        background-color: #16b4f2
    }

    .u-bg--cyan-700 {
        background-color: #1080ac
    }

    .u-bg--cyan-900 {
        background-color: #094c66
    }

    .u-bg--yellow-50 {
        background-color: #fffae6
    }

    .u-bg--yellow-100 {
        background-color: #fff0b0
    }

    .u-bg--yellow-300 {
        background-color: #ffde54
    }

    .u-bg--yellow-500 {
        background-color: #ffce00
    }

    .u-bg--yellow-700 {
        background-color: #b59200
    }

    .u-bg--yellow-900 {
        background-color: #6b5700
    }

    .u-bg--red-50 {
        background-color: #fbeced
    }

    .u-bg--red-100 {
        background-color: #f3c4c6
    }

    .u-bg--red-300 {
        background-color: #e58084
    }

    .u-bg--red-500 {
        background-color: #d84148
    }

    .u-bg--red-700 {
        background-color: #992e33
    }

    .u-bg--red-900 {
        background-color: #5b1b1e
    }

    .u-color--nuance-0,
    .u-color--white {
        color: #fff
    }

    .u-color--nuance-1000 {
        color: #000
    }

    .u-color--neutral-0 {
        color: #f2f3f5
    }

    .u-color--neutral-50 {
        color: #e4e7eb
    }

    .u-color--neutral-200 {
        color: #b6c2cd
    }

    .u-color--neutral-300 {
        color: #7a8999
    }

    .u-color--neutral-450 {
        color: #3c4d5d
    }

    .u-color--neutral-500 {
        color: #293847
    }

    .u-color--neutral-600 {
        color: #0f1419
    }

    .u-color--coral-50 {
        color: #fcebe6
    }

    .u-color--coral-100 {
        color: #f6c2b2
    }

    .u-color--coral-300 {
        color: #ec7b58
    }

    .u-color--coral-500 {
        color: #e23a05
    }

    .u-color--coral-700 {
        color: #a02904
    }

    .u-color--coral-900 {
        color: #5f1802
    }

    .u-color--blue-50 {
        color: #e6f1fa
    }

    .u-color--blue-100 {
        color: #b3d2ee
    }

    .u-color--blue-300 {
        color: #5a9eda
    }

    .u-color--blue-500 {
        color: #096ec8
    }

    .u-color--blue-700 {
        color: #064e8e
    }

    .u-color--blue-900 {
        color: #042e54
    }

    .u-color--green-50 {
        color: #eaf7ed
    }

    .u-color--green-100 {
        color: #bde7c7
    }

    .u-color--green-300 {
        color: #71ca86
    }

    .u-color--green-500 {
        color: #2bb04a
    }

    .u-color--green-700 {
        color: #1f7d35
    }

    .u-color--green-900 {
        color: #124a1f
    }

    .u-color--cyan-50 {
        color: #e8f8fe
    }

    .u-color--cyan-100 {
        color: #b7e8fb
    }

    .u-color--cyan-300 {
        color: #63cdf6
    }

    .u-color--cyan-500 {
        color: #16b4f2
    }

    .u-color--cyan-700 {
        color: #1080ac
    }

    .u-color--cyan-900 {
        color: #094c66
    }

    .u-color--yellow-50 {
        color: #fffae6
    }

    .u-color--yellow-100 {
        color: #fff0b0
    }

    .u-color--yellow-300 {
        color: #ffde54
    }

    .u-color--yellow-500 {
        color: #ffce00
    }

    .u-color--yellow-700 {
        color: #b59200
    }

    .u-color--yellow-900 {
        color: #6b5700
    }

    .u-color--red-50 {
        color: #fbeced
    }

    .u-color--red-100 {
        color: #f3c4c6
    }

    .u-color--red-300 {
        color: #e58084
    }

    .u-color--red-500 {
        color: #d84148
    }

    .u-color--red-700 {
        color: #992e33
    }

    .u-color--red-900 {
        color: #5b1b1e
    }

    .u-ratio {
        position: relative;
        width: 100%
    }

    .u-ratio:before {
        content: "";
        display: block;
        padding-top: 100%
    }

    .u-ratio>* {
        background-color: transparent;
        border: 0;
        height: 100%;
        left: 0;
        margin: 0;
        outline: none;
        padding: 0;
        position: absolute;
        top: 0;
        width: 100%
    }

    .u-ratio.u-ratio-16x9:before {
        padding-top: 56.25%
    }

    .u-ratio.u-ratio-4x3:before {
        padding-top: 75%
    }

    :root {
        --color-neutral-200: #b6c2cd;
        --color-neutral-200-h: 209;
        --color-neutral-200-s: 19%;
        --color-neutral-200-l: 76%
    }

    [class*=" u-border-"],
    [class^=u-border-] {
        --border-o: 1
    }

    .u-border {
        border: 1px solid #b6c2cd;
        border: var(--border-width, 1px) var(--border-style, solid) hsla(var(--color-neutral-200-h), var(--color-neutral-200-s), var(--color-neutral-200-l), var(--border-o, 1))
    }

    .u-border-dashed {
        --border-style: dashed
    }

    .u-radius-md {
        border-radius: 4px
    }

    :root {
        --display: block
    }

    .is-visible {
        display: block !important;
        display: var(--display) !important
    }

    .is-hidden,
    html.js .js\:is-hidden,
    html:not(.js) .no-js\:is-hidden {
        display: none !important
    }

    .u-block {
        display: block
    }

    .u-block\!important {
        display: block !important
    }

    .u-hide {
        display: none
    }

    .u-hide\!important {
        display: none !important
    }

    @media(min-width:1024px) {
        .u-block\@md {
            display: block
        }
    }

    @media(min-width:768px) {
        .u-hide\@sm {
            display: none
        }
    }

    :root {
        --shadow-in: 0 -4px 4px 0px rgba(41, 56, 71, .15);
        --shadow-100: 0 4px 4px 0px rgba(41, 56, 71, .15);
        --shadow-200: 0 8px 8px 0px rgba(41, 56, 71, .15);
        --shadow-right: 4px 0px 4px 0px rgba(41, 56, 71, .15);
        --radius: 0.25em;
        --radius-sm: calc(var(--radius, 0.25em)/2);
        --radius-md: var(--radius, 0.25em);
        --radius-lg: calc(var(--radius, 0.25em)*2);
        --space-unit: 16px
    }

    *,
    :root {
        --space-xs: 4px;
        --space-sm: 8px;
        --space: 16px;
        --space-md: 24px;
        --space-lg: 32px;
        --space-xl: 64px;
        --component-padding: var(--space-lg)
    }

    :root {
        --base-size: 1rem;
        --text-base-size: 14px;
        --body-line-height: 1.5;
        --text-unit: var(--base-size)
    }

    *,
    :root {
        --text-xs: calc(var(--text-unit)*0.625);
        --text-sm: calc(var(--text-unit)*0.75);
        --text: calc(var(--text-unit)*875);
        --text-md: calc(var(--text-unit)*1);
        --text-h4: calc(var(--text-unit)*1);
        --text-h3: calc(var(--text-unit)*1.125);
        --text-h2: calc(var(--text-unit)*1.3125);
        --text-h1: calc(var(--text-unit)*1.5)
    }

    .t-soldes--2023 {
        background: linear-gradient(133.51deg, #d81c59 19.24%, #ea796f 84.78%);
        border-color: #ea796f
    }

    /*# sourceMappingURL=1801.ee2675b689e595e8cee1.css.map*/
    </style>
    <style>
    .prdtBloc .facilityP a {
        color: #096ec8;
        text-decoration: none
    }

    .prdtBloc .facilityP a:hover {
        text-decoration: underline
    }

    .pdtCrSC {
        font-size: .9em
    }

    .prdtPInfoTC .prdtPrSt.prdtStrikedPriceAfter.displayToPro,
    html.isPro .displayToPro.prdtPrSt.prdtStrikedPriceBefore {
        display: none
    }

    html.isPro .prdtPInfoTC .prdtPrSt.prdtStrikedPriceAfter.displayToPro {
        display: inline-block
    }

    html.isPro .prdtPriceBloc .prdtPrice .price {
        font-size: 25px
    }

    html.isPro .prdtPriceBloc .prdtPInfoTC .prdtPrSt {
        font-size: 12px
    }

    html.isPro .prdtPriceBloc .prdtPInfoTC .prdtPrSt.displayToPro.isProStrikedPriceFontSize {
        font-size: 11px
    }

    html.isPro .displayToPro.price.isProPriceFontSize {
        font-size: 21px
    }

    .prdtBloc {
        background: #fff;
        display: block;
        height: 590px;
        position: relative;
        width: 100%
    }

    .lpLight .prdtBImg {
        height: auto
    }

    .lpLight .prdtBTit {
        height: 1.2em;
        padding: 0
    }

    .lpLight .prdtBloc {
        height: 500px
    }

    .lpLight .prdtOneSel,
    .lpLight .prdtTwoSel {
        height: 2.6em;
        overflow: hidden;
        padding: 7px .9em 0 0
    }

    .lpLight .lpBNext+.prdtBTit,
    .lpLight .prdtBPCar+.prdtBTit {
        margin-top: 50px
    }

    .lpLight .lpBNext+.prdtBStar,
    .lpLight .prdtBPCar+.prdtBStar {
        margin-top: 30px
    }

    .lpLight .prdtOneSel+.prdtBTit,
    .lpLight .prdtTwoSel+.prdtBTit {
        margin-top: 35px
    }

    .lpLight .vfEmpty+.prdtBTit {
        margin-top: 25px
    }

    .lpLight a+.prdtOneSel,
    .lpLight a+.prdtTwoSel {
        margin-top: 18px
    }

    .lpLight .prdtOneSel select {
        width: auto
    }

    .lpLight .prdtTwoSel select {
        max-width: 50%;
        width: auto
    }

    .lpLight .prdtTwoSel select+select {
        float: none;
        margin-left: 10px;
        max-width: calc(50% - 10px);
        width: auto
    }

    .lpLight .prdtPrSt,
    .prdtPriceBloc .prdtPInfoTC .prdtPrSt {
        font-size: 1.4em;
        height: 1.1em;
        text-decoration: line-through
    }

    .prdtPriceBloc .prdtPInfoTC .prdtPrSt {
        font-size: 16px;
        line-height: 12px
    }

    .prdtPriceBloc .prdtBStart+.prdtPInfoTC {
        margin-top: 0
    }

    .prdtPriceBloc .prdtPInfoTC,
    .prdtPriceBloc .prdtPrice {
        display: inline
    }

    .prdtPriceBloc .prdtPInfoTC {
        display: block;
        margin-top: 21px;
        vertical-align: baseline
    }

    .prdtPriceBloc .prdtPrice {
        font-size: 26px;
        font-weight: 400
    }

    .prdtPriceBloc .prdtPEco {
        font-size: 14px;
        white-space: nowrap
    }

    .prdtPriceBloc .prdtStrikedPriceBefore {
        display: block
    }

    .prdtPriceBloc .prdtStrikedPriceAfter {
        display: none
    }

    .prdtPriceBloc .prdtBStart {
        margin: 5px 0
    }

    .prdtPriceBloc>.prdtBStart+.prdtPrice {
        margin: 0
    }

    .prdtPriceBloc>.prdtPrice {
        margin-top: 38px
    }

    .prdtPriceBloc .prdtPrice {
        display: inline-block
    }

    .prdtPriceBloc .prdtPInfoTC+.prdtPrice {
        margin-top: 0
    }

    .prdtPriceBloc .prdtBStart+.prdtPInfoTC+.prdtPrice {
        margin: 0
    }

    .prdtPriceBloc .prdtPInfoTCAfter {
        margin-left: 6px;
        margin-top: 0
    }

    .prdtPriceBloc .prdtPrice .price {
        font-size: 30px
    }

    .prdtPriceBloc .perUnitPrice {
        color: #878787;
        font-size: 10.8px;
        font-weight: 400;
        margin: 2px 0 0;
        text-transform: lowercase
    }

    html.isPro .prdtPriceBloc .perUnitPrice span.displayToPro {
        display: inline-block
    }

    html.isPro .prdtPriceBloc .perUnitPrice span.hideFromPro {
        display: none
    }

    .testPrdtBloc .prdtBZBtn .btAdd {
        margin: 1.1em auto 0
    }

    .lpLight .prdtBStar {
        margin-top: 5px;
        padding-right: 1.1em
    }

    .lpLight .prdtCdav {
        height: 1.2em
    }

    .lpLight .freeShipping {
        font-size: 10.8px;
        margin-top: 4px;
        text-align: left
    }

    .lpLight .prdtBStart {
        margin-left: 3px;
        padding-left: .2em;
        position: absolute;
        top: 0
    }

    .lpLight .prdtPriceZone {
        bottom: 0;
        display: table;
        height: 95px;
        padding-right: 0;
        position: absolute;
        width: 100%
    }

    .lpLight .prdtBZPrice {
        display: table-cell;
        float: none;
        padding: 5px 0 0;
        vertical-align: top;
        width: 100%
    }

    .lpLight .prdtPInfoT,
    .lpLight .prdtPrice {
        display: inline-block;
        vertical-align: middle;
        width: auto
    }

    .lpLight .prdtPrice,
    .prdtPriceBloc .prdtPrice {
        font-size: 2.3em;
        height: .9em
    }

    .lpLight .prdtPInfoT {
        height: 1.6em;
        margin-left: 3px
    }

    .lpLight .prdtPEco {
        font-size: 1em;
        margin-left: 3px
    }

    .lpLight .prdtDetail {
        bottom: 15px;
        margin-left: 3px;
        position: absolute;
        width: 100%
    }

    .lpLight .ttOverBlk {
        margin-right: 20px
    }

    .lpLight .prdtBZBtn {
        display: table-cell;
        float: none;
        padding: 0 0 .9em;
        width: 120px
    }

    .lpLight .prdtBZBtn .btAdd {
        margin: 0 auto;
        text-align: right
    }

    .lpLight .opImg {
        margin-top: 10px;
        text-align: right
    }

    .lpLight .opImg img {
        max-width: none
    }

    .lpLight .mekakoPdt {
        height: 450px
    }

    .prdtBloc>a {
        text-decoration: none
    }

    .pdtCrSC .prdtBloc {
        margin: 0 auto;
        width: 284px
    }

    .prdtOSize {
        position: relative
    }

    .prdtBDesc.oSize {
        font-size: 11px;
        height: 3.2em;
        padding: 14px
    }

    .vfActive {
        margin-top: -22px
    }

    .btOSize {
        -webkit-appearance: none;
        background: #fff;
        border: 1px solid #bebebe;
        border-radius: 3px;
        color: #323232;
        cursor: pointer;
        display: inline-block;
        font-size: 13px;
        left: 50%;
        margin-right: -50%;
        padding: 3px;
        position: absolute;
        text-align: center;
        text-decoration: none;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        white-space: normal;
        z-index: 2
    }

    .btOSizeWithVf {
        bottom: 60px
    }

    .btOSize.btOSizeVit {
        right: 10%
    }

    .btOSize.btOSizeTDG {
        right: 0
    }

    .overBP {
        background: url(images/loader.gif) no-repeat 50% #fff;
        display: none;
        height: 540px;
        left: 0;
        margin: 6px;
        opacity: .75;
        position: absolute;
        top: 0;
        width: 247px;
        width: calc(100% - 12px);
        z-index: 20
    }

    .lpBlocInline .overBP {
        height: 100%;
        margin: 0;
        width: 100%
    }

    .prdtTitle {
        border-bottom: 1px solid #323232;
        font-size: 1.5em;
        font-weight: 700;
        height: 30px;
        line-height: 30px;
        overflow: hidden;
        text-align: center
    }

    .prdtBloc a,
    .prdtBloc a:hover {
        text-decoration: none
    }

    .prdtBloc a:hover .prdtBDesc,
    .prdtBloc a:hover .prdtBTit {
        text-decoration: underline
    }

    .lpLight .prdtBloc a:hover .prdtBTit {
        text-decoration: none
    }

    .prdBlocContainer>a,
    .prdBlocContainer>form>a,
    .prdtBloc>a,
    .prdtBloc>form>a {
        display: block;
        position: relative
    }

    .prdtBloc .prdtBImg {
        margin: 15px auto
    }

    .prdtBloc form {
        overflow: hidden
    }

    .prdtBloc .mekakoGomette {
        top: .9em
    }

    .prdtBPCar {
        height: 280px;
        overflow: hidden
    }

    .prdtBPCar li {
        display: block;
        float: left;
        width: 100%
    }

    .prdtOneSel,
    .prdtTwoSel {
        height: 2.6em;
        overflow: hidden;
        padding: 7px
    }

    .prdtOneSel select {
        margin: 0;
        width: 100%
    }

    .prdtTwoSel select {
        float: left;
        margin: 0;
        width: 45%
    }

    .prdtTwoSel select+select {
        float: right
    }

    .prdtBImg,
    .prdtBPCar>li {
        height: 100%
    }

    .prdtBImg {
        display: block;
        margin: 0 auto;
        object-fit: contain
    }

    .prdtBTit {
        display: block;
        font-size: 1.2em;
        font-weight: 700;
        height: 1.2em;
        line-height: 1.2em;
        margin: .4em 0 0;
        overflow: hidden;
        padding: 0 .9em
    }

    .opImg {
        height: 30px;
        overflow: hidden;
        text-align: center
    }

    .opImg img {
        height: auto
    }

    .opImg+.prdtBTit {
        margin-top: 0
    }

    .prdtBDesc {
        cursor: pointer;
        display: block;
        height: 3.4em;
        line-height: 1.2em;
        overflow: hidden;
        padding: 0 .9em
    }

    .prdtBDesc.descS {
        height: 1.2em;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .newLpTopBox .prdtBloc.testPrdtBloc .prdtBDesc.descS {
        display: none
    }

    .prdtBDesc .prdtBCat {
        text-transform: capitalize
    }

    .prdtBDesc span {
        font-size: 11px;
        font-weight: 700;
        margin: 0 .5em 0 0
    }

    .prdtBDesc span:after {
        color: #323232;
        content: "/";
        margin-left: 4px
    }

    .lpLight .prdtBTit .destock:not(.textColor),
    .prdtBDesc span:not(.textColor) {
        color: #16a538
    }

    .flagPreOrderDetail,
    .lpLight .prdtBTit .destock {
        font-size: 11px;
        font-weight: 700;
        margin: 0 .5em 0 0
    }

    .flagPreOrderDetail:after,
    .lpLight .prdtBTit .destock:after {
        color: #323232;
        content: "/";
        margin-left: 4px
    }

    .lpLight a:hover .prdtBTit .prdtTit,
    .prdtBDesc:hover {
        text-decoration: underline
    }

    .prdtBloc .facilityP {
        clear: both
    }

    .lpTopTDG .prdtBloc .facilityP {
        bottom: 0;
        position: absolute
    }

    .prdtBloc .facilityP>div {
        color: #323232;
        display: table;
        height: 7.2em;
        padding: .6em 1em 0
    }

    .prdtBloc .facilityP .ttOver {
        height: 13px;
        padding: 0
    }

    .prdtBloc .facilityP .ttOverBlk {
        height: auto;
        padding: 10px
    }

    .prdtBloc .facilityP .facMkt {
        height: auto;
        padding: .3em 1em
    }

    .prdtBloc .facilityP .lpRim {
        background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAsAAAANCAMAAABIK2QJAAAAZlBMVEX+/v7U1NTHx8ezs7Pj4+Pc3NzV1dXLy8u3t7fi4uL6+vr29vbS0tK1tbWvr6/4+PjKysr09PTDw8PCwsLp6enFxcXd3d3k5OT7+/vh4eHW1tb19fXBwcGurq7Pz8/5+fmtra3///+lGCD+AAAAAXRSTlMAQObYZgAAAAFiS0dEAIgFHUgAAAAJcEhZcwAACxMAAAsTAQCanBgAAAAHdElNRQfhBwcMJgYdnFlbAAAAYElEQVQI11XORw6AMAwEQEJC772lbP7/SRwjkNiL52CtHUW/XCMAPQTuOUIaR1YwYj4NEnIK672vkbFX8sFWWMgx73QttJhgqlBkucdyv5NE6Z5jBXl7L8fovy+cLsO4AZUDCAFNEw/PAAAAAElFTkSuQmCC) no-repeat 0;
        height: auto;
        margin-left: .8em;
        padding: .3em 1em 0 1.2em
    }

    .facilityP sup {
        font-size: .5em
    }

    .imgExpress {
        background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAAKCAMAAADfAc3wAAABpFBMVEUAtf////8AAAAAtf8Atf8Atf8Atf8Atf+65/1j0P8Atf/19vsAtf8AvP8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf8Atf/19vu65/0AvP9j0P/G2ChYAAAAh3RSTlMAAACwQBDQMAAAkAAYAOhgAfoDseDi8Ab2gPsE0d0F/ggKqgwHbam8DvflPCFO6tMqIsCPu9QTeUe47nDyYp/aHUt+wmy5oHRBgSQ2Fz0/eN4gH0QR+b6ThMPMts6hFs0S0l7nMazh7w0te+R1lmuS9DnjZpUCCWQuxYpbUqs0LE0zWAuipZo4kWkKAAABUElEQVR4XqXSVVNCURiF4aX7wFFEGkGwE+zCxu7u7u7u7mX8abeMo+fW8b347p5ZNx/C/1iYJomjIiKjAbRNuPCH1NoZDUZPDrSl9if8AF9hEmDTyZOq8+pkLl9uge4Lv759vJNMockLoJXpGEhsTK7xsLoXCg1IqGvxcC/WorKvFJlUKDM7SP4ulw6fM9fWPTbOfLSzfprF5c0MSpzWkEfDoJ1NKjniFTSanW5zh8OkKJpldprsQJc5jtkHAYs7HjCyQmKg0mHBEItUliSOCgL6GKQ5rfrJ3+Upf9WsxwjMlfvnuYDFvGQscTmEV1bXsE67ytgNboawMb26siqoWY4TJdyCbJtOF3ao382y7iuMF2WHzD/KsmZLbElhCB8XmNxCfC+f4LToDLaMC8gKxSWAq8zA9Q1uhRBluKvQZ9wjRzzg8UkAxc/Ai5D4X0/yCfUTUimgYmv6AAAAAElFTkSuQmCC) no-repeat 50%;
        display: inline-block;
        height: 13px;
        width: 60px
    }

    .prdtPrice {
        font-size: 3em;
        font-weight: 400;
        height: 1em;
        line-height: .5em
    }

    .pdtCrSC.price {
        font-size: .9em
    }

    .prdtPrice .price {
        font-weight: 400
    }

    .prdtPrice .priceS {
        font-size: .8em
    }

    .prdtPrice sup {
        font-size: .6em;
        line-height: .6em;
        vertical-align: .6em
    }

    .prdtBZPrice {
        float: left;
        margin: .7em 0 0;
        padding: 0 0 0 .9em;
        width: 48%
    }

    .prdtBStar {
        height: 1.4em
    }

    .prdtBStar .sta {
        display: inline-block
    }

    .prdtPInfoT {
        display: table;
        height: 2.5em;
        margin: 0 0 .3em;
        width: 100%
    }

    .prdtPInfoTC {
        display: table-cell;
        vertical-align: bottom
    }

    .prdtBStart {
        font-size: .8em;
        font-weight: 400
    }

    .prdtPrSt {
        font-size: 1.2em;
        height: 1.1em;
        text-decoration: line-through
    }

    .prdtBZBtn {
        float: right;
        margin: 1.2em 0 0;
        padding: 0 .9em .9em 0;
        text-align: center;
        width: 52%
    }

    .testPrdtBloc .prdtBZBtn {
        margin: .2em 0 0
    }

    .testPrdtBloc .opImg {
        margin-bottom: 9px
    }

    .prdtBZBtn select {
        float: left;
        height: 2em;
        margin-left: -2em;
        margin-top: .6em
    }

    .crItem .prdtBZBtn {
        padding: 0
    }

    .newLpTopBox .crItem .prdtBZBtn {
        margin-top: 5px
    }

    .crUl .crItem .prdBlock.prdtBZBtn {
        min-height: 67px;
        position: relative
    }

    .crUl .crItem .prdBlock.prdtBZBtn .btAdd {
        bottom: 0;
        left: 0;
        margin: auto;
        position: absolute;
        right: 0
    }

    .newLpTopBox .testPrdtBloc .crItem .prdtBZBtn .btAdd,
    .prdtBZBtn .btAdd {
        display: inline-block;
        margin: .6em auto 0
    }

    .prdtBloc .btGreen,
    .prdtBloc .btPink {
        display: block;
        font-size: 1.1em;
        padding: .6em
    }

    .prdtBloc .btGreen {
        margin: auto
    }

    .prdtSoldOut {
        color: #29ab02;
        font-size: 1.1em;
        margin: .6em 0;
        padding: .6em
    }

    .prdtSoldOutExpress {
        color: #29ab02;
        font-size: .9em;
        margin: .6em 0;
        padding: 0
    }

    .liEmpty {
        background-image: url(images/loader.gif);
        background-position: 50%;
        background-repeat: no-repeat
    }

    .vfEmpty {
        height: 2.3em
    }

    .newLpTopBox .testPrdtBloc .vfEmpty {
        height: 30px
    }

    htEmpty {
        height: 3.2em
    }

    .mkkGVisu,
    .mkkGVisu>div {
        height: 100%;
        width: 100%
    }

    .mkkGVisu>div {
        background: no-repeat 50% #fff;
        background-size: contain
    }

    #lpBloc .mkkGVisu,
    .pdtCrSC .mkkGVisu {
        height: 215px;
        padding-top: 15px
    }

    #lpBloc .mkkGVisu>div,
    .pdtCrSC .mkkGVisu>div {
        top: 15px
    }

    .mekakoPdt {
        display: none;
        font-size: 1.1em;
        height: 515px
    }

    .mkkPDesc {
        padding: 2em 10px 0
    }

    .mkkPDesc>div {
        margin-left: 95px
    }

    #lpBloc .mekakoPdt .btGreen,
    .pdtCrSC .mekakoPdt .btGreen {
        font-size: .9em;
        margin: 20px 0 0;
        padding: 1em;
        text-decoration: none;
        white-space: normal
    }

    .Sponsorised {
        color: #878787
    }

    .MKPUrl {
        color: #096ec8;
        font-size: .9em;
        margin-top: 6px
    }

    .prdtBILSponsored span.MKPUrl {
        cursor: pointer
    }

    .overBlkCont {
        position: relative
    }

    .overBlk {
        background: #fff;
        box-shadow: 0 0 6px #b6b6b6;
        left: 0;
        padding: 7px;
        z-index: 11
    }

    .overBlk,
    .overBlk table {
        width: 100%
    }

    .overBlk tr+tr {
        border-top: 1px solid #d7d9e4
    }

    .overBlk td+td,
    .overBlk th+th {
        border-left: 1px solid #d7d9e4
    }

    .overBlk td+td {
        text-align: center
    }

    .overBlk td,
    .overBlk th {
        padding: 3px 5px
    }

    .overBlk span {
        border-top: 1px solid #d7d9e4;
        cursor: pointer;
        font-size: 1.3em;
        margin: 5px 0 0;
        padding: 10px 0 0;
        text-align: center
    }

    .cPdtItem .ecoBlk {
        background: #fff;
        color: #323232;
        font-size: 1em;
        font-style: normal;
        font-weight: 700;
        left: 0;
        margin-top: 7px;
        padding: 0;
        position: static;
        text-align: left;
        top: 10px
    }

    .cPdtItem .ecoBlk:after {
        background: none
    }

    .cPdtItMecaco {
        color: #2c3b4a;
        margin-top: 10px
    }

    .cPdtItMecaco,
    .cPdtItMecacoOutOfStock {
        font-weight: 700;
        height: 1em;
        text-align: center;
        text-transform: uppercase
    }

    .cPdtItMecacoOutOfStock,
    .cPdtItMecacoUsedProduct {
        color: #29ab02;
        margin-top: 8px
    }

    .cPdtItMecacoUsedProduct {
        font-weight: 700;
        line-height: 13px
    }

    .cPdtItImg+.cPdtItMecacoUsedProduct {
        margin-top: 30px
    }

    .shopCrPdt .cPdtItMecacoOutOfStock {
        padding-top: 5px
    }

    .cPdtItTitLight {
        color: #323232;
        font-weight: 700;
        height: 2.1em;
        line-height: 14px;
        margin-bottom: 4px;
        width: 90%
    }

    .cPdtItTit {
        height: 2em;
        line-height: 1em;
        white-space: normal
    }

    .cPdtItTit,
    .cPdtItTitVar {
        font-weight: 700;
        margin-top: 8px;
        overflow: hidden
    }

    .cPdtItTitVar {
        height: 1em;
        line-height: .9em;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .cPdtItTitVar+.cPdtItTitVar {
        margin-top: 0
    }

    .cPdtItImg {
        display: block;
        margin: auto
    }

    .cPdtItStar {
        height: 13px;
        margin-top: 8px
    }

    .cPdtItStarLight span {
        font-weight: 700
    }

    .cPdtItStar span {
        color: #878787;
        display: inline-block;
        height: 12px;
        padding-left: 4px;
        vertical-align: bottom
    }

    .cPdtItImg+.cPdtItStar {
        margin-top: 30px
    }

    .cPdtItem .ecoBlk span {
        display: inline;
        font-size: 1em;
        font-weight: 700;
        line-height: 0;
        margin-left: 2px;
        margin-right: 2px
    }

    .cPdtItImg+.cPdtItTit,
    .cPdtItImg+.cPdtItTitVar {
        margin-top: 51px
    }

    .cPdtItMecaco+.cPdtItTit,
    .cPdtItMecaco+.cPdtItTitVar {
        margin-top: 27px
    }

    .cPdtItMecacoOutOfStock+.cPdtItTit,
    .cPdtItMecacoOutOfStock+.cPdtItTitVar {
        margin-top: 31px
    }

    .cPdtItem .sta {
        display: inline-block
    }

    .cPdtItem .cPdtItDesc,
    .cPdtItem .cPdtItDescBullet {
        color: #878787;
        display: none;
        margin: 2px 0 12px;
        white-space: normal
    }

    .cPdtItBegin {
        color: #e23a05;
        display: block;
        font-size: .9em;
        height: 12px;
        padding-right: 3px
    }

    .cPdtItem .price {
        display: inline-block;
        font-size: 1.7em;
        font-weight: 400;
        height: 1em;
        line-height: 1em;
        padding: 0 5px 0 0;
        vertical-align: bottom
    }

    .cPdtItemLight .priceLight sup {
        font-size: 18px;
        position: relative;
        top: 6px
    }

    .cPdtItem .price sup {
        font-size: .5em
    }

    .cPdtItStar+.cPdtItBegin+.price,
    .cPdtItStar+.price {
        margin-top: .3em
    }

    .cPdtItTit+.price {
        margin-top: 36px
    }

    .cPdtItem .stroken {
        font-size: 1.2em;
        margin-top: 18px;
        vertical-align: top
    }

    .cPdtItemLight a {
        display: block;
        position: relative
    }

    .cPdtItem a {
        text-decoration: none
    }

    .cPdtItem a+.cPdtItBegin+.price,
    .cPdtItem a+.cPdtItDesc+.cPdtItBegin+.price,
    .cPdtItem a+.cPdtItDesc+.price,
    .cPdtItem a+.cPdtItDescBullet+.cPdtItDesc+.cPdtItBegin+.price,
    .cPdtItem a+.cPdtItDescBullet+.cPdtItDesc+.price,
    .cPdtItem a+.price {
        margin-right: 10px;
        margin-top: 15px
    }

    .cPdtItem .btGreen {
        display: block;
        font-size: 1em;
        line-height: 15px;
        margin: 12px 0;
        padding: .8em;
        width: 144px
    }

    .testAddCarrou.carouAnimco .cPdtItem .btGreen {
        margin: 12px auto
    }

    .cPdtItem a:hover .cPdtItTit,
    .cPdtItem a:hover .cPdtItTitVar {
        text-decoration: underline
    }

    .fpLkBarBox .caroussel {
        clear: both
    }

    .carouAnimcoLight .cPdtItImg {
        height: 85px;
        position: absolute;
        top: 9px;
        width: 85px
    }

    .carouAnimco .cPdtItImg {
        height: 140px;
        width: 140px
    }

    .carouAnimcoLight .cPdtItCompo {
        left: 96px;
        position: absolute;
        top: -20px
    }

    .carouAnimco .cPdtItCompo {
        height: 71px;
        padding-top: 8px
    }

    .carouAnimco .cPdtItMecaco {
        font-size: 12px;
        font-weight: 700;
        margin-top: 0;
        position: relative
    }

    .carouAnimco .cPdtItMecaco sup {
        margin-left: 3px;
        position: absolute;
        top: -5px
    }

    .carouAnimcoLight .cPdtItTitLight,
    .carouAnimcoLight .cPdtItTitVar {
        font-weight: 700
    }

    .carouAnimco .cPdtItTit,
    .carouAnimco .cPdtItTitVar {
        font-size: 12px;
        font-weight: 400;
        margin-top: 20px
    }

    .carouAnimco .cPdtItMecaco+.cPdtItTit,
    .carouAnimco .cPdtItMecaco+.cPdtItTitVar {
        margin-top: 8px
    }

    .carouAnimco .cPdtItTitVar+.cPdtItTitVar {
        margin-top: 0
    }

    .carouAnimco .cPdtItMecacoUsedProduct,
    .carouAnimco .cPdtItStar {
        margin-top: 3px
    }

    .carouAnimcoLight .cPdtItStarLight span {
        font-size: 11px
    }

    .carouAnimco .cPdtItStar span {
        font-size: 12px
    }

    .carouAnimco .cPdtItStar .S.stClip+span {
        vertical-align: top
    }

    .carouAnimco .cPdtItBegin {
        font-size: 11px;
        position: relative
    }

    .carouAnimco .cPdtItBegin sup {
        margin-left: 3px;
        position: absolute;
        top: -3px
    }

    .carouAnimcoLight .cPdtItemLight .priceLight {
        font-size: 18px;
        left: 96px;
        margin: 0 8px 5px 0;
        position: relative;
        top: 38px
    }

    .carouAnimco .cPdtItem .price {
        font-size: 27px;
        font-weight: 700;
        line-height: normal;
        vertical-align: bottom
    }

    .carouAnimco .cPdtItem a+.cPdtItDesc+.price,
    .carouAnimco .cPdtItem a+.cPdtItDescBullet+.cPdtItDesc+.price,
    .carouAnimco .cPdtItem a+.price {
        margin-top: 14px
    }

    .carouAnimco .cPdtItem a+.cPdtItBegin+.price,
    .carouAnimco .cPdtItem a+.cPdtItDesc+.cPdtItBegin+.price,
    .carouAnimco .cPdtItem a+.cPdtItDescBullet+.cPdtItDesc+.cPdtItBegin+.price {
        margin-top: 2px
    }

    .carouAnimcoLight .cPdtItemLight .stroken {
        font-size: 14px;
        left: 96px;
        position: relative;
        top: 41px
    }

    .carouAnimco .cPdtItem .stroken {
        font-size: 15px;
        margin-top: 2px;
        vertical-align: bottom
    }

    .fpContent.ecoPlaceHolder {
        height: 14px
    }

    .carouAnimcoLight .cPdtItemLight .ecoBlkLight {
        font-size: 14px;
        font-weight: 700;
        left: 86px;
        margin-top: 4px;
        position: relative;
        top: 44px
    }

    .carouAnimco .cPdtItem .ecoBlk {
        font-size: 14px;
        font-weight: 400;
        margin-top: 4px
    }

    .carouAnimcoLight .cPdtItemLight .ecoBlkLight span {
        font-size: 14px;
        font-weight: 700
    }

    .carouAnimco .cPdtItem .ecoBlk span {
        font-size: 18px;
        font-weight: 400
    }

    .carouAnimco .cPdtItem .btGreen {
        display: none
    }

    .prdtBlocInline {
        background: #fff;
        border-radius: 4px;
        display: block;
        margin-bottom: 16px;
        max-width: 1200px;
        padding: 16px;
        position: relative;
        width: 100%
    }

    .prdtBlocInline form {
        display: table;
        overflow: visible;
        table-layout: fixed;
        width: 100%
    }

    .prdtBILImg {
        display: table-cell;
        position: relative;
        vertical-align: top;
        width: 180px
    }

    .prdtBILImg .prdtBPCar {
        cursor: pointer
    }

    #lpBloc .prdtBlocInline .mkkGVisu,
    .prdtBlocInline .mkkGVisu,
    .prdtBlocInline .mkkGVisu>div,
    .prdtBlocInline .prdtBImg,
    .prdtBlocInline .prdtBPCar {
        height: 180px;
        padding: 0;
        width: 180px
    }

    .prdtBlocInline .mekakoGomette {
        top: 0
    }

    .prdtBILDetails {
        display: table-cell;
        padding: 0 16px;
        vertical-align: top
    }

    .prdtBILA {
        display: inline-block;
        text-decoration: none;
        width: 100%
    }

    .prdtBILLink {
        color: #096ec8;
        cursor: pointer
    }

    .lpTAdResponsive .regBloc {
        margin-top: 18px
    }

    .prdtBILCta {
        color: #000;
        display: table-cell;
        vertical-align: top;
        width: 210px
    }

    .prdtBILTit {
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        color: #293847;
        display: block;
        display: -webkit-box;
        font-family: inherit;
        font-size: 16px;
        font-weight: 700;
        line-height: 24px;
        margin-bottom: 4px;
        max-height: 48px;
        max-width: 100%;
        overflow: hidden;
        text-overflow: ellipsis
    }

    div.prdtBILTit:hover {
        text-decoration: underline
    }

    .prdtBILStar {
        margin-bottom: 8px
    }

    .prdtBILCdav,
    .prdtBILStar,
    .prdtBILStar .sta {
        display: inline-block;
        vertical-align: middle
    }

    .prdtBILState {
        color: #41b55a;
        font-weight: 700;
        margin-bottom: 8px
    }

    .prdtBILSpecial {
        margin-bottom: 8px;
        margin-top: 8px
    }

    .prdtBILSpecial img {
        display: inline-block;
        vertical-align: middle
    }

    .prdtBILSpecial.cagnotte {
        align-items: center;
        display: flex
    }

    .prdtBILSpecial .logoCagnotte {
        background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAA49JREFUSA21V71PFEEUf7P3gSe4d5FcYiEKBRZKAoUFYqGhM0ICjZYejXZCgaUG4x/AR2kjdlgdBgwtFRZSHAnYgmKhEsyxaMA7bsf328scc7uzx/HhS+7m6837zXtv5jezguqU5jlnwBLiDpHs4l9KkOCSayRzRCLPv5wr5OL2fft9PSZFLaVUVqbi8d/D0nVHhBCpWrpqTEqZF5Y1USg0TeYHsSCzhAKnPzgZcuV4vYB+81iAS2Jou9+e9Y+hbZk603O7E0LSm5OCwibmRgRl0/O74yaMgMfpeWeaOx+ZlE/aJ4mmt/rsIX1+lceep8cAvWFb1JIIrF2379VZIwPb+kBlFnKK8OqD/rodJRq91kD3LsXoig9w1XFpZrNI774VyDnwzyy3S5IGVc49YOzeWNRZr5XTx21xGm1voGTMbFT1ft2T9GJtnxZ+BNGx4YoHdht2uxfqeNSpeVymOs/Rq+tHgwIckZi+maCHl4MrhGPAgh4Hj0lA0Egl5ujQ5BmH1m9k6VfJC+vmnutptiQsgp6e79vNEQ57UbNUrvJGG+bamAAjYdsHNLgDhpZ7m6qGMst7xjBCCZHBIp+u7BtBlSHkOmqRuAviMwm80OX557+hoNAD4Ax7ubRd0qcF6sDkHIN7zYLdq2STN83r9YJqhpZHgZYnyi7mfdlqsoKjg5+She/BfKmxY5dCJtljcdU0sSMZqeoOO5tVSnU2cLNVMZc+b6dozruuc5o6cvzFZGCNmUiXHj4eZyVS0oolpdgIM6izT8/FCIGbz0jAXCIXZsy/i6c6E1Ubzj8PUfnE5/7oBYqc5ZJc9BtQbRwNsJSSDvZ4ufcCPfDRIYhmtD1O2e7zHmVmuxupVmqA6TFlen4nzzstqQD0Ekdq9laj0QvcSHZMBG4qzAddglD8wm+0na2+ZMpLGl+HVXelroxjNPDxT5XnahwR8F+PGEOKTKAYU1iH12LM2QjzGhMg4OEnfD2G5RCbEaBh7AVvi0W7Fddi5VKqdVmUYQ//kdMOO0IgGZz3VadEqzul0AeAmhl4CKgB7+kjJK6tsxcpX/7sT44pwxWPVcd/euy95cdeRmGgDDACFJhUJnWlU9XZUz8o7AU8ViDlTxbJT13zMVN6YSU2kitFRj3u/HqhwFD0PmH4jVR+GtW3AADiyBQO7IkTfcL4V+hFoPxawcMhJQR1QgeEz0Ue1AtGCvMQurr8A6ClVky+IQW6AAAAAElFTkSuQmCC) no-repeat 50%;
        background-size: 16px;
        height: 16px;
        margin-right: 5px;
        width: 16px
    }

    .prdtBILDetails .odr,
    .prdtBILDetails .opImg,
    .prdtBILDetails .pc,
    .prdtBILDetails .vf {
        background: none;
        color: #000;
        display: inline-block;
        height: auto;
        line-height: normal;
        padding: 0;
        text-align: left;
        vertical-align: middle;
        width: auto
    }

    .prdtBILDetails .solde {
        color: #f00
    }

    .prdtBILDetails .opImg span,
    .prdtBILDetails .pc span,
    .prdtBILDetails .vf span {
        background: none;
        display: inline-block;
        font-size: 1em;
        padding: 0
    }

    .prdtBILDetails .pc br,
    .prdtBILDetails .vf br {
        display: none
    }

    .prdtBILDesc {
        color: #7a8999;
        cursor: pointer;
        display: inline-block;
        margin-bottom: 12px;
        width: 100%
    }

    .prdtBILDesc,
    .prdtBILDesc li,
    .prdtBILDesc p {
        line-height: 1.33em
    }

    .prdtBILDesc li {
        list-style: disc inside;
        margin-left: 0;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .prdtBILOneSel,
    .prdtBILSeller,
    .prdtBILTwoSel {
        margin-bottom: 12px
    }

    .prdtBILSeller>div {
        position: relative
    }

    .prdtBILSeller>div>a {
        text-decoration: none
    }

    .prdtBILTwoSel select {
        display: inline-block;
        margin-right: 20px;
        min-width: 140px
    }

    .prdtBILOneSel select {
        min-width: 140px
    }

    .prdtBILSponsored {
        color: #878787;
        position: relative
    }

    .prdtBILSponsored .ttOverBlk {
        width: 50%
    }

    .prdtBILStart {
        color: #e23a05;
        font-size: .8em;
        font-weight: 400
    }

    .prdtBILPrice .price {
        font-size: 2.5em;
        font-weight: 700;
        margin-right: 5px;
        white-space: nowrap
    }

    .prdtBILPrice .price sup {
        font-size: .45em;
        line-height: .6em;
        vertical-align: .5em
    }

    .prdtPrBILSt {
        font-size: 1.33em;
        text-decoration: line-through;
        white-space: nowrap
    }

    .prdtBILEco div:not(.ecoPlaceHolder) {
        background-color: #ffecec;
        border: 1px solid #e23a05;
        color: #e23a05;
        display: inline-block;
        font-size: 1.2em;
        font-weight: 700;
        height: 26px;
        line-height: 26px;
        margin-top: 2px;
        padding: 0 8px;
        width: -webkit-max-content;
        width: max-content
    }

    .prdtBILCta .btGreen {
        margin: 14px 0 0;
        width: 100%
    }

    .prdtBILFacMkt,
    .prdtBILFacilityP {
        color: #000;
        line-height: 1.4em;
        margin: 14px 0 0
    }

    .lpTopBIL {
        margin: 0
    }

    .prdtBILFacilityP {
        margin: 16px 0 6px
    }

    .prdtBILFacMkt a,
    .prdtBILFacilityP a {
        color: #096ec8;
        text-decoration: none
    }

    .prdtBILFacMkt a:hover,
    .prdtBILFacilityP a:hover {
        text-decoration: underline
    }

    .prdtBILTitle {
        margin-bottom: 16px;
        position: relative
    }

    .prdtBILTitle span {
        background: #fff;
        color: #e23a05;
        display: inline-block;
        font-size: 1.33em;
        font-style: italic;
        font-weight: 700;
        padding-right: 15px;
        position: relative
    }

    .prdtBILTitle:before {
        background: #d7d9e4;
        content: "";
        height: 1px;
        position: absolute;
        top: 50%;
        width: 100%
    }

    .prdtBlocInline .prdtBILCta .prdtBILFacilityP .lpRim {
        background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAsAAAANCAMAAABIK2QJAAAAZlBMVEX+/v7U1NTHx8ezs7Pj4+Pc3NzV1dXLy8u3t7fi4uL6+vr29vbS0tK1tbWvr6/4+PjKysr09PTDw8PCwsLp6enFxcXd3d3k5OT7+/vh4eHW1tb19fXBwcGurq7Pz8/5+fmtra3///+lGCD+AAAAAXRSTlMAQObYZgAAAAFiS0dEAIgFHUgAAAAJcEhZcwAACxMAAAsTAQCanBgAAAAHdElNRQfhBwcMJgYdnFlbAAAAYElEQVQI11XORw6AMAwEQEJC772lbP7/SRwjkNiL52CtHUW/XCMAPQTuOUIaR1YwYj4NEnIK672vkbFX8sFWWMgx73QttJhgqlBkucdyv5NE6Z5jBXl7L8fovy+cLsO4AZUDCAFNEw/PAAAAAElFTkSuQmCC) no-repeat 0;
        height: auto;
        padding: .3em 1em 0 1.2em
    }

    .prdtBILDescription {
        background-color: #fff;
        border: 1px solid #d8d7d7;
        border-radius: 4px;
        box-shadow: 1px 2px 3px 0 hsla(0, 0%, 47%, .43);
        color: #323232;
        display: none;
        height: auto;
        left: 0;
        max-width: 600px;
        padding: 10px;
        position: absolute;
        text-align: left;
        text-overflow: ellipsis;
        white-space: nowrap;
        z-index: 10
    }

    .prdtBILDescription,
    .prdtBILLabel {
        font-size: 13px;
        overflow: hidden;
        width: auto
    }

    .prdtBILLabel {
        background-color: #293848;
        border-radius: 3px;
        color: #fff;
        display: table-cell;
        height: 22px;
        max-width: 195px;
        padding: 0 6px;
        vertical-align: middle
    }

    .prdtBILLabel .chevron {
        display: inline-block;
        height: 8px;
        margin-left: 6px;
        position: relative;
        width: 8px
    }

    .prdtBILLabel .chevron:after,
    .prdtBILLabel .chevron:before {
        border: 4px solid transparent;
        content: "";
        display: block;
        position: absolute
    }

    .prdtBILLabel .chevron:after {
        border-top-color: #293848;
        top: 1px
    }

    .prdtBILLabel .chevron:before {
        border-top-color: #fff;
        top: 3px
    }

    .prdtBILLabelContainer {
        padding-bottom: 10px
    }

    .prdtLPLabelContainer {
        padding: 10px 0
    }

    .lpLight .prdtLPLabelContainer {
        position: absolute;
        z-index: 1
    }

    .prdtLPLLabelContainer {
        padding-top: 10px
    }

    .prdtBILLabel:hover+.prdtBILDescription {
        display: block
    }

    .PictoVenteFlashTime {
        background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAPCAMAAADXs89aAAAAQlBMVEVzzYe+58fu+PA2t1SO1p7///+75sW35cJ0zYhPwGnB6MpsyoFXw3D3/Piu4brc8uHC6ctuy4OF05bD6cyh3a9tyoLI8flVAAAAaElEQVR4XoXPRw6AMAwFUcclpNPvf1WIgkQwSMzybewP8lnjAN67SXGOxMPAtOcHx4RSimCaew6EUlmQ1o6BpbGw69ibyou11njN43b2YGC5YtAna0hBP1g1xdccY5hi/hgPQY2/++MDOu4Hf+NsSt0AAAAASUVORK5CYII=) no-repeat 0;
        height: auto;
        padding: 0 1em 0 1.7em
    }

    .PictoPrixCoutant {
        background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAPCAMAAADXs89aAAAAnFBMVEWU2KMlsUbz+vTR7tjV8NxpyX9Vwm6g3a4msUcwtVDu+PD3/Pg1tlM4t1UytVH8/vxYw3Hb8uCy473///9kx3rB6Mq958fP7das4Lj+//6q4LbH68/h9OXm9uqi3q/W8Nzj9Oc9uVrS7tlSwGtxzIb1+/ZfxXb9/v2o4LXz+/VyzIby+vTL69K15MBaxHOY2qc4uFah3a+a26lNv2YhtXUjAAAAgElEQVR4XoXQRRLDMBQD0C9TmMvMzL3/3dqZ1I6bSadavpUkKhrzk5MdEV3HdR7AdYH5qNsKbCZkUwA3ITfBF3fOABAJmTKbP4m4VMzwHTrx4qD2mo9P46vtZWJ6+8Z7uSc0v31Z6iP3hvZKpkoNT1UT7Q4Pef2TtdMu+rO/V70AADoUuhUTu0cAAAAASUVORK5CYII=) no-repeat 0;
        height: auto;
        padding: 0 1em 0 1.7em
    }

    .prdtBILDetails a {
        text-decoration: none
    }

    .prdtBILDetails .prdtBILSeller a {
        color: #096ec8;
        cursor: pointer
    }

    .prdtBDesc .prCmd {
        color: #000;
        font-weight: 700
    }

    .datePreCMD {
        font-size: 16px;
        margin-bottom: 5px
    }

    .datePreCMD,
    .variantMsg .btGreen {
        font-weight: 700
    }

    .fpNonDisplay {
        display: none
    }

    .lpStatePrd {
        font-weight: 700
    }

    @media only screen and (max-width:1023px) {

        .prdtBILA,
        .prdtBlocInline form {
            display: block
        }

        .prdtBILImg {
            display: inline-block;
            width: 150px
        }

        #lpBloc .prdtBlocInline .mkkGVisu,
        .prdtBlocInline .mkkGVisu,
        .prdtBlocInline .mkkGVisu>div,
        .prdtBlocInline .prdtBImg,
        .prdtBlocInline .prdtBPCar {
            height: 150px;
            width: 150px
        }

        .prdtBILDetails {
            display: inline-block;
            padding: 0 0 0 16px;
            width: calc(100% - 154px)
        }

        .prdtBILCta {
            display: block;
            overflow: hidden;
            width: 100%
        }

        .prdtBILCta>div {
            display: table;
            margin-left: 170px;
            width: calc(100% - 170px)
        }

        .prdtBILCta>div>div {
            display: table-cell;
            width: 60%
        }

        .prdtBILCta>div>div+div {
            padding-left: 9px;
            width: 40%
        }
    }

    @media only screen and (min-width:1280px) {
        .prdtBloc {
            height: 640px
        }

        .lpLight .prdtBloc {
            height: 550px
        }

        .lpLight .prdtBStar {
            padding: 0
        }

        .lpLight .prdtCdav {
            padding-left: .9em
        }

        .lpLight .prdtOneSel,
        .lpLight .prdtTwoSel {
            padding: 7px .9em 0
        }

        .lpLight .prdtPriceZone {
            padding-left: .9em;
            padding-top: 10px
        }

        .lpLight .prdtBZBtn {
            padding: 0 .9em .9em 0
        }

        .lpLight .mekakoPdt {
            height: 500px
        }

        .prdBlocContainer>a,
        .prdBlocContainer>form>a,
        .prdtBloc>a,
        .prdtBloc>form>a {
            padding: .9em .9em 0
        }

        .prdtBTit {
            padding: 0
        }

        .prdtBPCar {
            height: 320px
        }

        .pdtCrSC .prdtBloc {
            width: 334px
        }

        .lpLight .prdtPEco {
            font-size: 1.3em
        }

        .lpLight .freeShipping {
            padding-left: .9em
        }

        .prdtPriceBloc .prdtStrikedPriceBefore {
            display: none
        }

        .prdtPriceBloc .prdtStrikedPriceAfter {
            display: inline-block
        }

        .prdtPriceBloc .prdtBStart {
            margin: 7px 0
        }

        .prdtPriceBloc .prdtPInfoTC+.prdtPrice {
            margin-top: 24px
        }

        .prdtPriceBloc .prdtPInfoTC {
            display: inline
        }

        .prdtPriceBloc>.prdtPrice {
            margin-top: 24px
        }

        .testPrdtBloc .prdtBZBtn .btAdd {
            margin: 0 auto
        }

        .newLpTopBox .testPrdtBloc .crItem .prdtBZBtn .btAdd {
            margin: .6em auto 0
        }
    }
    </style>
    <style>
    #scContent {
        margin: 0 auto;
        overflow: hidden;
        width: calc(100% - 32px)
    }

    #menuV+#scContent {
        display: inline-block;
        margin-bottom: inherit;
        margin-left: 24px;
        margin-right: inherit;
        margin-top: inherit;
        overflow: hidden;
        padding: 0 16px 0 0;
        position: relative;
        width: calc(100% - 276px)
    }

    .scZtdMore {
        color: #096ec8;
        cursor: pointer;
        text-decoration: none
    }

    .scZtdMore:hover {
        color: #096ec8;
        text-decoration: underline
    }

    .scTitle {
        font-size: 1.5em;
        font-weight: 700;
        padding: 4px 20px 4px 0;
        width: 100%
    }

    .scTitle h1 {
        font-size: 1.45em;
        font-weight: 400;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .scTitle h1,
    .scTop {
        overflow: hidden
    }

    .scTZtdAd {
        float: right;
        margin: 0 0 0 10px;
        position: relative;
        width: 300px
    }

    .scTZtdAd .regBloc {
        margin: 0
    }

    .scTTdg {
        overflow: hidden
    }

    .scTZtd {
        background: #fff;
        font-size: .9em;
        padding: 0 0 7px;
        text-align: justify;
        z-index: 10
    }

    .scTZtd p {
        line-height: 1.2em
    }

    .scZtdH {
        display: none
    }

    .scTZtd+.scTAd {
        margin: 9em 0 0
    }

    .scTZtdAd .scTZtd {
        position: absolute
    }

    .ztdA:hover {
        cursor: default
    }

    .ztdH {
        display: none
    }

    .ztdImg {
        height: auto;
        max-width: 100px;
        width: 100px
    }

    .ztdLnkMore {
        color: #878787;
        cursor: pointer;
        font-size: 14px;
        text-decoration: none
    }

    .ztdLnkMore:hover {
        color: #096ec8;
        text-decoration: underline
    }

    .ztdTop {
        display: flex;
        padding: 20px 0
    }

    .ztdTxt {
        color: #323232;
        font-size: 14px
    }

    .ztdBloc {
        flex-shrink: 1;
        padding: 0 20px;
        vertical-align: middle;
        width: 100%
    }

    .ztdBubbleBloc {
        display: flex;
        margin-top: 10px
    }

    .ztdLnkOverflow {
        height: 40px
    }

    .ztdBubbleLink {
        background: #fff;
        border: 1px solid #d7d9e4;
        border-radius: 15px;
        color: #323232;
        font-family: Hind Madurai, Hind-fallback, Arial, sans-serif;
        font-size: 14px;
        height: 30px;
        line-height: 30px;
        margin: 10px 10px 0 0;
        padding: 0 10px;
        text-align: center;
        text-decoration: none
    }

    .ztdShowLinks {
        display: inline-block
    }

    .ztdBubbleLink:hover {
        background: #f2f3f5;
        color: #096ec8
    }

    .ztdBubbleLinkMore {
        align-self: flex-start;
        color: #096ec8;
        cursor: pointer;
        margin-top: 15px
    }

    .ztdBubbleLinkBloc {
        flex-shrink: 1;
        margin-top: 5px;
        overflow: hidden
    }

    .ztdRanking {
        color: #323232;
        font-size: 11px;
        margin-top: 10px;
        text-align: right
    }

    .ztdRankingZtdHub {
        margin-top: 17px !important
    }

    .ztdTopRefonte {
        border-bottom: 0 solid #d7d9e4;
        border-top: 0 solid #d7d9e4;
        display: flex;
        padding: 0 0 32px
    }

    #sContener #lpContent .ztdTopRefonte {
        padding: 5px 0
    }

    .ztdRefonteTxt {
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        color: #323232;
        display: -webkit-box;
        font-size: 12px;
        line-height: 1.5;
        overflow: hidden
    }

    .ztdRefonteTxt a {
        color: #096ec8;
        cursor: pointer;
        font-size: 12px;
        text-decoration: underline
    }

    .ztdRefonteTxt a:hover {
        text-decoration: none
    }

    .ztdRefonteTxt a:visited {
        text-decoration: underline
    }

    .ztdBubbleTitle {
        font-size: 14px;
        height: 16px
    }

    .relatedSearchTitle,
    .ztdBubbleTitle {
        color: #323232;
        font-weight: 700;
        opacity: 1;
        text-align: left
    }

    .relatedSearchTitle {
        font-size: 16px;
        padding-right: 8px
    }

    .ztdBlocRefonte {
        flex-shrink: 1;
        padding: 0;
        position: relative;
        vertical-align: middle;
        width: 100%
    }

    .ztdLnkMoreRefonte {
        color: #096ec8;
        cursor: pointer;
        font-size: 12px;
        margin-right: 15px;
        position: absolute;
        right: 0;
        text-decoration: underline;
        top: 36px
    }

    #jsZtdLnkLess {
        float: right;
        margin-top: 0;
        position: inherit !important
    }

    .ztdLnkMoreRefonte:hover {
        color: #096ec8;
        text-decoration: none
    }

    .ztdLinkMoreHub {
        top: auto !important
    }

    .crTdg {
        background: #f0f0f7;
        border: 1px solid #d7d9e4;
        margin: 0 0 10px;
        position: relative
    }

    .crTdgLeft,
    .crTdgRight {
        background: #fff;
        cursor: pointer;
        height: 90px;
        position: absolute;
        text-align: center;
        top: calc(50% - 45px);
        width: 45px;
        z-index: 10
    }

    .crTdgLeft img,
    .crTdgRight img {
        position: relative;
        top: 34%
    }

    .crTdgLeft {
        border-radius: 0 5px 5px 0;
        box-shadow: 1px 0 4px 0 rgba(0, 0, 0, .2);
        left: 0
    }

    .crTdgRight {
        border-radius: 5px 0 0 5px;
        box-shadow: -1px 0 4px 0 rgba(0, 0, 0, .2);
        padding: 0 12px 0 15px;
        right: 0
    }

    .crTdg a {
        text-decoration: none
    }

    .crTdgUl {
        height: 365px;
        overflow: hidden;
        position: relative
    }

    .crTdgUl li {
        background: none !important;
        position: absolute;
        top: 0;
        width: 100%
    }

    .crTdgUl .newActive {
        z-index: 2
    }

    .crTdgUl a {
        background: no-repeat 50%;
        display: block;
        height: 365px
    }

    .scTCarou {
        border: 1px solid #d7d9e4;
        margin: 2.5em auto;
        max-width: 1700px;
        overflow: hidden
    }

    .scTCarou,
    .scTCarouUl,
    .scTrade {
        position: relative
    }

    .scTCarouUl li {
        position: absolute;
        top: 0
    }

    .scTCarouUl img {
        width: 100%
    }

    .lpTopLight #main .imgListRz:first-child,
    .lpTopLight #paContent .imgListRz:first-child {
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: cover;
        display: block;
        height: 60px;
        margin: 0;
        max-width: unset;
        overflow: hidden;
        text-align: center;
        width: auto
    }

    .lpTopLight #paContent .OPCoFullSite {
        margin: 0 0 16px !important;
        max-width: none !important;
        padding: 0 !important
    }

    .lpTopLight #main #lpContent .jsbrandLicenseZdt,
    .lpTopLight #main #lpContent .lpTopContent,
    .lpTopLight #main #lpContent .scTitle,
    .lpTopLight #main #lpContent .ztdTop,
    .lpTopLight #main #scContent .bmmTitle,
    .lpTopLight #main .bmmTitle {
        display: none
    }

    .scTCarPdt {
        border: 2px solid #f0f0f7
    }

    .scTCarPdt .crUl {
        border: 0;
        height: 350px
    }

    .scTCarPdt .crItem {
        border-right: 0;
        font-size: .9em;
        height: 350px;
        width: 100%
    }

    .scTCarPdt .crItem+.crItem {
        border-left: 1px dashed #d7d9e4
    }

    .scTCarPdt.noFlex .crItem:last-child {
        border-right: 0
    }

    .crArrows {
        background: #f0f0f7;
        height: 36px;
        overflow: hidden
    }

    .crArrows .crLeft,
    .crArrows .crRight {
        border: 0;
        font-size: 1em;
        font-weight: 400;
        height: 28px;
        line-height: 20px;
        line-height: 28px;
        margin: 4px 0;
        max-width: 140px;
        text-align: left;
        width: 50%
    }

    .crArr {
        background: #22398e;
        color: #f0f0f7;
        float: left;
        font-size: 2.8em;
        height: 28px;
        line-height: 22px;
        margin: 0 8px 0 6px;
        text-align: center;
        width: 28px
    }

    .crArrows .crRight {
        text-align: right
    }

    .crRight .crArr {
        float: right;
        margin: 0 6px 0 8px
    }

    .disabled .crArrows .crLeft,
    .disabled .crArrows .crRight {
        display: none
    }

    .scTCarPdt .prdtBloc {
        height: 350px;
        margin: 0 auto;
        max-width: 650px;
        min-width: 330px;
        padding: 0 5px;
        width: 100%
    }

    .scTCarPdt .prdtBZnImg {
        float: left;
        margin: 0 20px 0 0;
        padding: 0;
        width: 180px
    }

    .prdtBZnImg .prdtBImg {
        height: 180px;
        margin-bottom: 2px;
        width: 180px
    }

    .prdtBZnImg .pc,
    .prdtBZnImg .vf {
        background-image: none;
        height: 35px;
        line-height: 35px;
        margin: 10px 0 0;
        padding-left: 10px
    }

    .prdtBZnTxt {
        overflow: hidden
    }

    .prdtBZnTxt>a {
        display: block
    }

    .prdtBZnTxt .prdtBTit {
        cursor: pointer;
        margin: 10px 0 0;
        padding: 0
    }

    .facMkt a,
    .prdtBZnTxt .prdtBTit:hover {
        text-decoration: underline
    }

    .prdtBZnTxt .prdtBDesc {
        height: 5.6em;
        margin: 6px 0 0;
        padding: 0
    }

    .prdtBZnTxt .prdtBZBtn,
    .prdtBZnTxt .prdtBZPrice {
        float: none;
        margin: 0;
        padding: 0;
        width: 100%
    }

    .prdtBZnTxt .prdtBZPrice {
        padding: 5px 0 0
    }

    .prdtBZnTxt .sta {
        float: left
    }

    .prdtBZnTxt .btGreen {
        margin: 0;
        min-width: 115px;
        padding: 10px 0
    }

    .prdtBZnTxt .facilityP {
        bottom: 0;
        height: 80px;
        left: 5px;
        position: absolute;
        width: 100%;
        width: calc(100% - 10px)
    }

    .prdtBZnTxt .facilityP>div {
        float: left;
        padding: 5px 2px 0;
        width: 55%
    }

    .scTop .facilityP .facMkt {
        border: 0;
        padding: 5px 2px 0;
        width: 45%
    }

    .crItem .ecoBlk span {
        font-size: 2.8em
    }

    .AdMBan,
    .scMags {
        margin: 2.5em 0 0
    }

    .scMags {
        background: #f0f2f5;
        padding: 10px 5px
    }

    .scMagsTit {
        font-size: 2em;
        text-align: center
    }

    .scMags>ul>li {
        float: left;
        padding: 5px;
        width: 25%
    }

    .scMgImg {
        background: no-repeat center 0;
        display: block;
        height: 90px;
        text-decoration: none
    }

    .scMgCont,
    .scMgImg {
        margin: 0 auto;
        max-width: 380px
    }

    .scMgCont {
        background: #f2f6fb;
        background: linear-gradient(180deg, #fff 20%, #f2f6fb);
        border-bottom: 1px solid #c9d5e3;
        border-left: 1px solid #c9d5e3;
        border-right: 1px solid #c9d5e3;
        min-height: 16em;
        padding: 10px
    }

    .scMgCont p {
        font-size: 1.4em;
        font-weight: 700;
        height: 1.1em;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .scMgCont li {
        list-style: disc inside
    }

    .scMgCont a {
        text-decoration: none
    }

    .scMgCont a:hover {
        text-decoration: underline
    }

    .crSC,
    .pdtCrSC {
        margin: 2.5em 0 0
    }

    .scTrade {
        margin: 2.5em auto;
        max-width: 1700px
    }

    .scTdOnglet li {
        border: 1px solid #d7d9e4;
        border-bottom: 0;
        color: #a3a7b8;
        cursor: pointer;
        float: left;
        overflow: hidden;
        padding: 1em;
        text-align: center;
        text-overflow: ellipsis;
        white-space: nowrap;
        width: 182px
    }

    .scTdOnglet li,
    .scTrade .scTdOnglet li {
        background: #f0f0f7
    }

    .scTrade .scTdOnglet .act {
        background: #fff;
        color: #323232
    }

    .scTdOnglet li+li {
        margin: 0 0 0 2px
    }

    .scTrade .scTdCar {
        border: 1px solid #d7d9e4;
        clear: both
    }

    .scTdCarBg,
    .scTrade img {
        width: 100%
    }

    .scTdCarUl {
        position: relative
    }

    .scTdCarUl li {
        background: #fff;
        position: absolute;
        top: 0;
        width: 100%
    }

    .scTCarouUl .active,
    .scTdCarUl .active {
        z-index: 2
    }

    .scTCarouUl .newActive,
    .scTdCarUl .newActive {
        z-index: 3
    }

    .scTdCarUl a {
        display: block;
        text-decoration: none
    }

    .imgListRz,
    .scImgList1 {
        display: block;
        margin: 2.5em auto 0;
        max-width: 1700px;
        overflow: hidden;
        text-align: center
    }

    .scTitle+.imgListRz {
        margin: 20px auto
    }

    .scImgList2,
    .scImgList3,
    .scImgList4 {
        margin: 0 auto;
        max-width: 1900px;
        overflow: hidden
    }

    .scImgList1 a,
    .scImgList2 a,
    .scImgList3 a,
    .scImgList4 a {
        background: no-repeat center 0;
        border: 1px solid #d7d9e4;
        display: block;
        text-decoration: none
    }

    .imgListRz a,
    .scImgList1 a {
        display: block;
        overflow: hidden
    }

    .scImgList2 li,
    .scImgList3 li,
    .scImgList4 li {
        float: left;
        padding: 10px 0 0 10px
    }

    .scImgList2 li:first-child,
    .scImgList3 li:first-child,
    .scImgList4 li:first-child {
        margin-left: -10px
    }

    .scImgList2 li {
        width: 50.2%;
        width: calc(50% + 5px)
    }

    .scImgList3 li {
        width: 33.33%;
        width: calc(33.33333% + 3.33333px)
    }

    .scImgList4 li {
        width: 25.1%;
        width: calc(25% + 2.5px)
    }

    .scImgList2 a,
    .scImgList3 a,
    .scImgList4 a {
        height: 200px
    }

    .scImgListBrand {
        overflow: hidden
    }

    .scImgListBrand li {
        float: left;
        padding: 10px 0 0;
        text-align: center;
        width: 12.5%
    }

    .scCardCds {
        background: no-repeat 50%;
        display: block;
        height: 105px;
        margin: 2.5em 0 0;
        text-decoration: none
    }

    .pubDblRegie {
        padding: 0 0 2em;
        text-align: center
    }

    .pubDR1,
    .pubDR2 {
        display: inline-block;
        padding: 0 1em;
        vertical-align: top
    }

    .lpGAds,
    .scGAds {
        border: 1px solid #c6d1de;
        margin: 2em 0;
        padding: 1em
    }

    .lpDRLegal,
    .scDRLegal {
        margin: 1em 0 0;
        text-align: left
    }

    .hubImgList {
        margin: 20px auto;
        max-width: 1900px;
        overflow: hidden;
        padding: 0 10px
    }

    .hubImgList.scImgList1 {
        margin-top: 5px
    }

    .hubNoMiss {
        color: #fff;
        font-weight: 700;
        line-height: 1.5em;
        margin: 1.7em 0 0;
        padding: .4em 0
    }

    .hubNoMiss li {
        padding: 0 0 0 1em
    }

    .hubNoMiss a {
        color: #fff;
        font-weight: 400
    }

    .hubZtd,
    .scHub .lpGAds,
    .scHub .scGAds {
        margin: 2em 0
    }

    .hubZtd {
        display: table
    }

    .hubZTxt {
        border-right: 1px solid #476387;
        display: table-cell;
        padding: 0 20px 0 0;
        text-align: justify;
        width: 50%
    }

    .hubZTxt+.hubZTxt {
        border: 0;
        padding: 0 0 0 20px
    }

    .hubZTxt .less {
        background: #fff;
        display: none;
        padding: 0 20px 10px 0
    }

    .hubZTxt+.hubZTxt .less {
        padding-right: 0
    }

    .ztdLess,
    .ztdMore {
        background: #323232;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        margin: 0 0 0 .5em;
        padding: 0 .3em;
        right: .5em;
        text-align: center;
        width: 1.2em
    }

    .hubImgListAd {
        display: table;
        margin: 20px auto;
        max-width: 1900px;
        padding: 0 10px;
        width: 100%
    }

    .hubImgListAd .regBloc {
        display: table-cell;
        margin: 20px auto 0;
        padding-left: 10px;
        vertical-align: middle;
        width: 33.33%
    }

    .hubImgListAd .regTxt {
        padding: 0 0 10px
    }

    .imgList2 .hubImgList li:first-child {
        padding-left: 0
    }

    .hubImgListAd .imgList2 {
        display: table-cell;
        padding: 0;
        width: 66.66%
    }

    .hubImgListAd .imgList2 a {
        height: 460px;
        max-width: 767px
    }

    .hubHorizontalNavImgList {
        margin-top: 15px
    }

    .hubHorizontalNavImgList ul {
        height: 110px;
        padding: 10px 0
    }

    .hubHorizontalNavImgList li {
        float: left;
        height: 100%;
        padding: 0 7px;
        width: 20%
    }

    .hubHorizontalNavImgList a {
        text-align: center;
        text-decoration: none
    }

    .hubHorizontalNavImgList a:hover {
        color: #ee7817
    }

    .hubHorizontalNavImgList img {
        display: block;
        margin: 0 auto
    }

    .hubHorizontalNavImgList div {
        height: 30px;
        line-height: 30px
    }

    .hubHorizontalNavImgList span {
        display: inline-block;
        font-size: 14px;
        line-height: normal;
        vertical-align: middle
    }

    .opSales.crTdg {
        background: #f0f0f7;
        border: 1px solid #d7d9e4;
        padding: 0
    }

    .opSales .crSCTit,
    .opSales .pdtNbr {
        background-color: #fff;
        border: 1px solid #d7d9e4
    }

    .opSales .crSCTit {
        border-bottom: 0
    }

    .opSales .crSCTit p,
    .opSales .pdtNbr {
        color: #323232
    }

    .opSales .scTdOnglet li {
        background: #f0f0f7;
        border: 1px solid #d7d9e4;
        border-bottom: none;
        color: #a3a7b8
    }

    .opSales .scTdOnglet .act {
        background: #fff;
        border-bottom-color: #d7d9e4;
        color: #323232
    }

    .opSales .scTdCar,
    .opSales .scTdgPContent {
        border: 1px solid #d7d9e4
    }

    .opSales .crSCTit p {
        overflow: visible
    }

    .opSales .scTdgPTit {
        background: #fff;
        border: 1px solid #d7d9e4;
        border-bottom: 0;
        color: #323232
    }

    .opSales .crTdgPict li {
        background: #323232
    }

    .variantMsg {
        right: calc(100% + 6px);
        width: 132px
    }

    .lkLf {
        margin: 30px 0
    }

    .lkLf a {
        color: #096ec8;
        text-decoration: none
    }

    .lkLf a:hover {
        text-decoration: underline
    }

    .lkLfTop li {
        display: inline-block
    }

    .lkLfTop {
        border: 1px solid #e3e4ec;
        color: #323232;
        font-weight: 700;
        padding: 14px 20px 10px
    }

    .lkLfTop span {
        font-size: 1.17em
    }

    .lkLfTop li a {
        display: block;
        font-weight: 400;
        height: 20px;
        line-height: 20px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .lkLfTopContent {
        display: table;
        margin-top: 7px;
        table-layout: fixed;
        width: 100%
    }

    .lkLfTopContent ul {
        margin-top: 10px
    }

    .lkLfBest,
    .lkLfGuide {
        display: table-cell
    }

    .lkLfBest {
        width: 77%
    }

    .lkLfGuide {
        border-left: 1px solid #e3e4ec;
        padding-left: 15px;
        width: 23%
    }

    .lkLfBest ul li {
        padding-right: 20px;
        width: 25%
    }

    .lkLfFull .lkLfBest {
        width: 100%
    }

    .lkLfFull .lkLfBest ul li {
        padding-right: 20px;
        width: 20%
    }

    .lkLfFull .lkLfTop {
        padding-right: 0
    }

    .lkLfGuide ul li {
        width: 100%
    }

    .lkLfBottom {
        border-right: 1px solid #e3e4ec
    }

    .lkLfBottom li {
        border: 1px solid #e3e4ec;
        border-right: 0;
        border-top: 0;
        display: inline-block;
        height: 68px;
        line-height: 68px;
        overflow: hidden;
        text-align: center
    }

    .lkLfBottom li a {
        color: #000;
        display: block;
        font-size: 1.2em;
        height: 100%;
        width: 100%
    }

    .lkLfBottom a:hover {
        color: #096ec8
    }

    .lkLfBottom img {
        -webkit-filter: grayscale(100%);
        filter: grayscale(100%);
        opacity: .7;
        transition: all .5s ease
    }

    .lkLfBottom a:hover img {
        -webkit-filter: grayscale(0);
        filter: grayscale(0);
        opacity: 1
    }

    .lkLfBrand10 li,
    .lkLfBrand5 li {
        width: 20%
    }

    .lkLfBrand3 li,
    .lkLfBrand6 li {
        width: 33.33%
    }

    .lkLfBrand4 li,
    .lkLfBrand8 li {
        width: 25%
    }

    .scMUWithImg {
        overflow: hidden
    }

    .scMUPdtItem .cPdtItCompo a {
        text-decoration: none
    }

    .scMUPdtItem .cPdtItCompo .cPdtItTit:hover {
        text-decoration: underline
    }

    .scMUWithImg,
    .scMUWithVideo {
        border: 1px solid #d7d9e4;
        margin: 20px 10px
    }

    .scMUVisualM,
    .scMUWithImg {
        height: 280px
    }

    .scMUWithVideo .scMUVisualM {
        display: inline-block;
        height: 280px;
        width: 49%
    }

    .scMUWithVideo .scMUVisualMSmall {
        display: none
    }

    .scMUWithVideo .scMUPdtBloc {
        display: inline-block;
        height: 280px;
        vertical-align: top;
        width: 49%
    }

    .scMUWithVideo .scMUPdtItem {
        padding: 20px 10px;
        width: 100%
    }

    .scMUOffers,
    .scMUPdtItem,
    .scMUVisualM,
    .scMUWithImg .sta {
        display: inline-block
    }

    .scMUOffers {
        height: 280px;
        vertical-align: bottom;
        width: 65%
    }

    .scMUPdtItem {
        padding: 10px;
        vertical-align: top;
        width: 49%
    }

    .scMUWithImg .cPdtItStar,
    .scMUWithImg .cPdtItTit {
        display: inline-block
    }

    .scMUWithImg .cPdtItTit {
        height: 12px;
        line-height: normal;
        max-height: 28px;
        width: 100%
    }

    .scMUPdtItemCDAV,
    .scMUWithImg .cPdtItTit {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .scMUPdtItemCDAV {
        display: inline-block;
        vertical-align: bottom
    }

    .scMUWithVideo .scMUPdtItemCDAV {
        vertical-align: text-bottom
    }

    .scMUWithImg .cPdtItStar {
        margin-bottom: 7px;
        margin-top: 2px
    }

    .scMUWithImg .cPdtItStar span {
        height: 15px
    }

    .scMUWithImg .scMUVisualM img {
        height: 280px;
        left: 50%;
        max-width: none;
        position: absolute;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
        width: 640px
    }

    .scMUWithImg .scMUVisualM {
        overflow: hidden;
        position: relative;
        width: 34%
    }

    .scMUWithImg .cPdtItDescBullet li,
    .scMUWithVideo .cPdtItDescBullet li {
        display: list-item;
        line-height: 18px;
        list-style: disc inside;
        margin: 0;
        overflow: hidden;
        padding: 0;
        text-overflow: ellipsis;
        white-space: nowrap;
        width: 100%
    }

    .scMUWithImg .cPdtItDescBullet li span,
    .scMUWithVideo .cPdtItDescBullet li span {
        display: inline-block;
        overflow: hidden;
        text-overflow: ellipsis;
        vertical-align: middle;
        white-space: nowrap;
        width: 92%
    }

    .scMUWithImg .cPdtItDescBullet {
        color: #878787;
        display: none;
        margin: 12px 0 4px;
        white-space: normal
    }

    .prdtPrdtMUSt {
        font-size: 11px;
        text-decoration: line-through;
        white-space: nowrap
    }

    .prdtMUEco .ecoBlk {
        background: #fff;
        color: #323232;
        font-size: 1em;
        font-style: normal;
        font-weight: 400;
        margin: 0;
        padding: 0;
        position: inherit;
        text-align: left
    }

    .prdtMUEco .ecoBlk span {
        display: inline;
        font-size: 1em;
        font-weight: 400
    }

    .prdtMUEco .ecoBlk:after {
        background: none;
        content: none
    }

    .cPdtInfo {
        position: relative;
        vertical-align: top
    }

    .scMUWithImg .prdtBStart {
        display: inline-block;
        padding-right: 3px
    }

    .prdtMUPrice .price {
        font-size: 14px;
        font-weight: 700
    }

    .prdtBStart {
        font-size: 11px
    }

    .scMUOfferSeller {
        margin-bottom: 5px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .scMUVisualMSmall .scMUVideo iframe,
    .scMUWithVideo .scMUVideo iframe {
        height: 280px;
        width: 100%
    }

    .scMUWithVideo .cPdtItImgDiv {
        display: inline-block;
        height: 280px;
        margin: 0 20px;
        width: 180px
    }

    .cPdtItImgDiv {
        margin-bottom: 10px
    }

    .scMUWithVideo .cPdtItStar {
        display: inline-block;
        margin-top: 2px
    }

    .scMUWithVideo .cPdtItStar span {
        display: inline;
        line-height: 15px
    }

    .scMUWithImg .cPdtItStar span,
    .scMUWithVideo .cPdtItStar span {
        color: #323232;
        font-size: 11px;
        padding: 0
    }

    .scMUWithVideo .cPdtItStar .sta {
        display: inline-block;
        height: 12px
    }

    .scMUWithVideo .cPdtItDescBullet {
        color: #878787;
        line-height: 20px;
        margin: 12px 0 4px;
        white-space: normal
    }

    .cPdtItImgDiv300 {
        display: none
    }

    .scMUWithVideo .cPdtInfo {
        display: inline-block;
        height: 280px;
        padding-right: 20px;
        width: calc(100% - 230px)
    }

    .scMUWithVideo .prdtMUPrice .price {
        font-size: 25px;
        font-weight: 400;
        padding-right: 3px
    }

    .scMUWithVideo .prdtPrdtMUSt {
        display: inline-block;
        font-size: 15px
    }

    .scMUWithVideo {
        height: 280px;
        overflow: hidden
    }

    .scMUWithVideo .cPdtTopInfo .cPdtItTit {
        font-size: 16px;
        height: 18px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .scMUPriceDiv {
        display: inline
    }

    .scMUWithVideo .prdtBILCdav {
        display: inline-block
    }

    .scMUPdtItem .cPdtItStar {
        line-height: 13px
    }

    .scMUWithImg .cPdtItTit,
    .scMUWithVideo .cPdtItTit {
        margin-top: 0
    }

    .emptyStar {
        height: 8px
    }

    .testPrdtBloc .facilityP {
        bottom: 5px;
        height: 120px;
        position: absolute;
        width: 100%
    }

    @media only screen {
        .scMags>ul>li:nth-child(5) {
            clear: both
        }

        .scMgCont {
            min-height: 11em
        }
    }

    @media only screen and (max-width:1023px) {
        .scTitle {
            width: 100%
        }

        .scTop {
            min-height: 1000px;
            position: relative
        }

        .scTZtdAd {
            bottom: 0;
            position: absolute;
            right: 0
        }

        .scTZtdAd .scTZtd {
            display: none
        }

        .scTZtd+.scTAd {
            margin: 0
        }

        .scTCarPdt {
            margin: 0 310px 0 0
        }

        .crArrow .crLeft,
        .crArrow .crRight {
            width: 50%
        }

        .crArrow .crLeft {
            border-right: 0
        }

        .scTCarPdt .crItem,
        .scTCarPdt .crUl,
        .scTCarPdt .prdtBloc {
            height: 570px
        }

        .scTCarPdt .prdtBloc {
            min-width: 220px
        }

        .scTCarPdt .prdtBZnImg {
            float: none;
            height: 235px;
            margin: 0;
            width: auto
        }

        .prdtBZnImg .prdtBImg {
            margin: 20px auto 10px
        }

        .prdtBZnImg .ecoBlk {
            top: -10px
        }

        .prdtBZnTxt .prdtBTit {
            height: 2.3em
        }

        .prdtBZnTxt .prdtBDesc {
            height: 3.5em
        }

        .prdtBZnTxt .prdtBZPrice {
            float: left;
            margin: 15px 0 0;
            padding: 0 0 0 5px;
            width: 48%
        }

        .prdtBZnTxt .prdtBZBtn {
            float: right;
            margin: 50px 0 0;
            padding: 0 5px 0 0;
            width: 52%
        }

        .prdtBZnTxt .facilityP {
            height: 110px
        }

        .prdtBZnTxt .facilityP>div {
            float: none;
            width: 100%
        }

        .prdtBZnTxt .facilityP>div+.facMkt {
            width: 100%
        }

        .prdtBZnTxt .prdtBZBtn>div {
            height: 100%
        }

        .prdtBZnTxt .btAdd {
            margin: 0
        }

        .scMags>ul>li {
            width: 50%
        }

        .scTdOnglet li {
            width: 33%
        }

        .scImgList2:not(.hubImgList) li {
            margin-left: 0;
            padding-left: 0;
            width: 100%
        }

        .scImgList4:not(.hubImgList) li {
            width: 50.5%;
            width: calc(50% + 5px)
        }

        .scImgList4:not(.hubImgList) li:nth-child(3) {
            margin-left: -10px
        }

        .scImgListBrand li {
            width: 20%
        }

        .hubNoMiss li:first-child {
            float: none
        }

        .hubZTxt,
        .hubZtd,
        .scHub .AdMBan {
            display: block
        }

        .hubZTxt {
            border: 0;
            width: 100%
        }

        .hubZTxt+.hubZTxt {
            padding: 2em 0 0
        }

        .hubImgListAd .imgList2 li {
            width: 100%
        }

        .hubImgListAd .imgList2 li:nth-child(2) {
            display: none
        }

        .lkLfTop {
            padding-right: 0
        }

        .lkLfBest,
        .lkLfGuide {
            display: block
        }

        .lkLfGuide {
            border: 0;
            margin-top: 10px;
            padding-left: 0;
            width: 100%
        }

        .lkLfGuide li {
            padding-right: 20px
        }

        .lkLfBest {
            width: 100%
        }

        .lkLfBest ul li,
        .lkLfFull .lkLfBest ul li,
        .lkLfGuide ul li {
            width: 33.33%
        }

        .scMUWithVideo .scMUVisualM {
            display: none
        }

        .scMUWithVideo .scMUVisualMSmall {
            display: block
        }

        .scMUWithVideo .scMUPdtBloc,
        .scMUWithVideo .scMUPdtItem {
            display: block;
            width: 100%
        }

        .scMUWithVideo {
            height: auto
        }

        .scMUWithVideo .cPdtInfo {
            padding-right: 0
        }

        .scMUWithImg .cPdtItTit {
            height: 28px;
            white-space: normal
        }
    }

    @media only screen and (min-width:1280px) {
        .scTCarPdt .prdtBloc {
            width: 330px
        }

        .crSCTit {
            background-position: 0 0;
            border-bottom: 1px solid #d7d9e4;
            border-right: 0;
            float: left;
            height: 35.1em;
            padding: 0;
            text-align: center;
            width: 180px
        }

        .crSCTit img,
        .crSCTit p {
            display: none
        }

        .crSCTit select {
            float: none;
            margin: 375px 0 0;
            width: 85%
        }

        #scContent .opSales .crSCTit select {
            max-width: 200px
        }

        .opSales .crSCTit {
            border-bottom: 1px solid #d7d9e4;
            border-right: 0
        }

        .hubHorizontalNavImgList {
            margin: 25px auto 10px;
            padding: 0 10px
        }

        .hubHorizontalNavImgList ul {
            display: inline-block;
            padding: 0;
            width: 50%
        }

        .hubHorizontalNavImgList li {
            width: 20%
        }

        .lkLfBrand10 li {
            width: 10%
        }

        .lkLfBrand6 li {
            width: 16.66%
        }

        .lkLfBrand8 li {
            width: 12.5%
        }

        .scMUWithVideo .scMUVisualM {
            display: inline-block
        }

        .scMUWithVideo .scMUVisualMSmall {
            display: none
        }
    }

    @media only screen and (min-width:1211px) {
        .scTCarPdt .crItem {
            width: 50%
        }
    }

    @media only screen and (min-width:1541px) {
        .scTCarPdt .crItem {
            width: 33.33%
        }
    }

    @media only screen and (min-width:1871px) {
        .scTCarPdt .crItem {
            width: 25%
        }
    }

    @media only screen and (min-width:1600px) {
        .scMUWithImg .cPdtItImg {
            margin: 0
        }

        .scMUWithImg .cPdtItImgDiv {
            display: inline-block;
            height: 280px;
            margin: 0 10px;
            width: 140px
        }

        .cPdtInfo {
            display: inline-block;
            height: 280px;
            width: calc(100% - 164px)
        }

        .scMUWithImg .cPdtItDescBullet {
            display: block
        }

        .cPdtBottomInfo {
            bottom: 30px;
            position: absolute
        }

        .scMUWithVideo .cPdtBottomInfo {
            bottom: 0
        }

        .prdtMUPrice .price {
            font-size: 25px;
            font-weight: 400;
            margin-right: 5px;
            white-space: nowrap
        }

        .prdtMUPrice .price sup {
            font-size: .6em;
            line-height: .6em;
            vertical-align: .5em
        }

        .prdtMUPrice,
        .scMUWithImg .prdtBStart {
            display: block
        }

        .prdtPrdtMUSt {
            font-size: 15px
        }

        .scMUWithImg .cPdtItStar {
            margin-bottom: 0
        }

        .scMUWithVideo .scMUVideo iframe {
            height: 350px
        }

        .cPdtItImgDiv140 {
            display: none
        }

        .cPdtItImgDiv300 {
            display: inline-block
        }

        .scMUWithVideo .cPdtItImgDiv {
            width: 300px
        }

        .scMUWithVideo .cPdtInfo {
            width: calc(100% - 355px)
        }

        .scMUWithVideo,
        .scMUWithVideo .scMUPdtBloc,
        .scMUWithVideo .scMUVisualM {
            height: 350px
        }

        .scMUWithVideo .scMUVisualM {
            display: inline-block
        }

        .scMUWithVideo .scMUVisualMSmall {
            display: none
        }

        .prdtBILCdav {
            display: inline-block;
            padding-left: 3px
        }

        .scMUWithImg .cPdtItTit {
            height: 28px;
            white-space: normal
        }

        .cPdtTopInfo .cPdtItTit {
            font-size: 16px;
            height: 18px
        }

        .emptyStar {
            display: none
        }
    }

    @media only screen and (min-width:1280px) {
        .scMUWithVideo .scMUVisualM {
            display: inline-block
        }

        .scMUWithVideo .scMUVisualMSmall {
            display: none
        }

        .lpTopLight #main .imgListRz:first-child,
        .lpTopLight #paContent .imgListRz:first-child {
            height: 100px
        }
    }

    .hubImgListing li:first-child,
    .hubImgListing li:nth-child(2) {
        padding-bottom: 6px
    }

    .hubImgListNow {
        background: #eef1f8;
        display: table;
        margin: 30px 0;
        padding: 20px 15px
    }

    .hubImgListNowWithoutTitle {
        background: #eef1f8;
        display: inline-table;
        margin: -50px 0 30px;
        padding: 1px 15px 20px
    }

    .hubImgTitle {
        font-size: 3em;
        padding-bottom: 15px
    }

    .hubImgTitleBis {
        font-size: 3em;
        padding-bottom: 10px;
        padding-top: 10px
    }

    .hubImgListing {
        margin: 0 -5px
    }

    .hubImgListing a,
    .hubImgListing img,
    .hubNewsListing a,
    .hubNewsListing img {
        display: block;
        margin: 0 auto;
        object-fit: contain;
        width: 100%
    }

    .hubImgListing {
        overflow: hidden
    }

    .hubImgListing li,
    .hubNewsListing li {
        display: inline-table;
        float: left;
        margin: 3px;
        text-align: center;
        vertical-align: top;
        width: calc(50% - 6px)
    }

    .hubImgListing li {
        margin: 0 3px
    }

    .hubNews1 {
        float: right
    }

    .hubNews2 {
        position: relative
    }

    .hubNews2>a {
        position: absolute;
        top: 0;
        width: 100%
    }

    .hubNews2>a+a {
        bottom: 0;
        top: auto
    }

    .hubImgListNowWithoutTitleBis {
        background: #eef1f8;
        display: table;
        margin-top: 30px;
        padding: 10px 15px;
        width: 100%
    }

    .hubImgListNowWithoutTitleBis+.hubImgListNowWithoutTitleBis {
        margin-top: -4px;
        padding-top: 0
    }

    .hubImgListNowBis+.hubImgListNowWithoutMargin,
    .hubImgListNowWithoutTitleBis+.hubImgListNowWithoutMargin {
        margin-top: 0
    }

    .hubImgListNowBis {
        background: #eef1f8;
        display: table;
        margin-top: 30px;
        padding: 10px 15px;
        width: 100%
    }

    @media only screen and (max-width:1279px) {

        .hubImgListing li,
        .hubNewsListing li {
            width: calc(25% - 6px) !important
        }
    }

    @media only screen and (min-width:1280px) {
        ul.hubNewsListing {
            margin: 0 auto;
            max-width: 1700px
        }

        .hubImgListing li,
        .hubNewsListing li {
            width: calc(25% - 6px)
        }

        .hubNews1 {
            float: none
        }

        .hubImgListing li:first-child,
        .hubImgListing li:nth-child(2) {
            padding-bottom: 0
        }
    }
    </style>
    <style>
    #footer>div:not(.overPa1600),
    #paContent2>div:not(.overPa1600):not(.scTTdg),
    #paContent2>ul:not(.overPa1600),
    #paContent>div:not(.overPa1600):not(.scTTdg),
    #paContent>ul:not(.overPa1600) {
        margin-left: auto;
        margin-right: auto;
        max-width: 1620px;
        padding-left: 10px;
        padding-right: 10px
    }

    .shopBloc {
        clear: both;
        margin: 50px 10px
    }

    .shopBlocLeft {
        border-bottom: 1px solid #e3e4ec;
        border-left: 1px solid #e3e4ec;
        border-top: 1px solid #e3e4ec;
        float: left;
        height: 700px;
        padding: 0 0 40px;
        position: relative;
        width: 490px
    }

    .shopLImg,
    .shopLImgTit {
        background: no-repeat 0 0;
        display: block;
        height: 80px;
        text-decoration: none
    }

    .shopLImg {
        background-position: 50%;
        height: 364px
    }

    .shopLBrand,
    .shopLText {
        margin: 20px 10px 0;
        overflow: hidden
    }

    .shopLBrand strong,
    .shopLText strong {
        font-size: 1.35em;
        line-height: 1em
    }

    .shopLText li {
        float: left;
        list-style: disc inside;
        margin: 16px 0 0;
        width: 33.33%
    }

    .shopLText a:hover {
        text-decoration: underline
    }

    .shopLBrand li {
        display: inline-block;
        margin: 5px 0 0
    }

    .shopLBrand li+li {
        margin-left: 40px
    }

    .shopLBrand a,
    .shopLText a {
        text-decoration: none
    }

    .shopLBrand a {
        display: block
    }

    .shopLBrand img {
        max-height: 40px
    }

    .shopLBottom {
        background: #e3e4ec;
        bottom: 0;
        color: #8689a3;
        font-size: 1.2em;
        font-weight: 700;
        height: 40px;
        line-height: 40px;
        position: absolute;
        text-align: center;
        width: 100%
    }

    .shopLBottom a {
        color: #8689a3;
        font-weight: 400
    }

    .shopCar {
        overflow: hidden;
        position: relative
    }

    .shopCrUl {
        border: solid #e3e4ec;
        border-width: 1px 1px 0;
        height: 660px;
        overflow: hidden
    }

    .shopCrItem {
        float: left;
        overflow: hidden;
        width: 50%
    }

    .shopCrItem+.shopCrItem {
        border-left: 1px solid #e3e4ec
    }

    .shopCrPdt>a {
        display: block;
        height: 310px;
        margin: 10px auto;
        overflow: hidden;
        padding: 0 10px;
        position: relative;
        text-decoration: none;
        width: 200px
    }

    .shopCrPdt+.shopCrPdt {
        border-top: 1px solid #e3e4ec
    }

    .shopCarImg {
        background: no-repeat center 0;
        display: block;
        height: 330px;
        text-decoration: none
    }

    .shopCrPImg {
        display: block;
        margin: 0 auto
    }

    .shopCrPInfos {
        overflow: hidden;
        padding: 0 0 0 10px;
        text-align: center
    }

    .shopCrPdt .ecoBlk {
        top: 10px
    }

    .shopCrPdt .sta {
        float: left;
        margin: 20px 5px
    }

    .shopCrPdt .price,
    .shopCrPdt .stroken {
        display: block;
        font-size: 1.35em;
        overflow: hidden;
        text-align: center
    }

    .shopCrPdt .stroken {
        margin: 5px 0 0
    }

    .shopCrPdt .sta+.price {
        margin-top: .4em
    }

    .shopCrPdt .price {
        font-size: 2.35em;
        font-weight: 400;
        height: 30px;
        line-height: 20px;
        text-align: center
    }

    .shopCrPdt sup {
        font-size: .59em;
        vertical-align: .59em
    }

    .shopCrPdt .priceS {
        font-size: 2em;
        line-height: 1.25em
    }

    .shopCrPTitle {
        clear: both;
        display: table;
        height: 70px;
        margin: 5px 0 0;
        table-layout: fixed;
        width: 100%
    }

    .shopCrPBrand,
    .shopCrPName {
        display: table-cell;
        line-height: 1.2em;
        vertical-align: middle
    }

    .shopCrPBrand {
        border-right: 1px solid #e3e4ec;
        min-width: 85px
    }

    .shopCrPName {
        word-wrap: break-word;
        font-weight: 700;
        padding: 0 0 0 5px
    }

    .shopCrArrows {
        background: #e3e4ec;
        font-size: 1.1em;
        height: 40px
    }

    .shopCrLeft,
    .shopCrRight {
        cursor: pointer;
        float: left;
        line-height: 30px;
        margin: 5px 10px
    }

    .shopCrRight {
        float: right
    }

    .shopCrArr {
        background: #fff;
        color: #2c465d;
        float: left;
        font-size: 3.2em;
        font-weight: 700;
        height: 30px;
        line-height: 24px;
        margin: 0 10px 0 0;
        text-align: center;
        width: 30px
    }

    .shopCrRight .shopCrArr {
        float: right;
        margin: 0 0 0 10px
    }

    .shopLoader {
        background: url(images/op_load.gif) no-repeat 50%
    }

    .paSmartMall {
        text-align: center
    }

    .paSmartBlock {
        display: inline-block;
        margin: 20px
    }

    .paSmartHead {
        font-size: .9em;
        padding: 0 0 5px;
        text-transform: uppercase
    }

    .mallBottom {
        margin: 20px
    }

    .mallPub {
        height: 160px;
        overflow: hidden;
        text-align: center
    }

    .mallPub li {
        display: inline-block;
        margin: 20px
    }

    .mallPub a {
        display: block
    }

    .mallBInfos {
        font-size: .8em;
        font-style: italic;
        margin: 20px 0;
        overflow: hidden
    }

    .mallBInfos,
    .mallBInfos a {
        color: #a5a5a5
    }

    .mallBInfos ul {
        float: left;
        margin: 0 20px 0 0;
        width: 50%;
        width: calc(50% - 10px)
    }

    .mallBInfos img {
        float: left;
        margin: 0 20px 20px 0
    }

    .imgList2,
    .imgList3,
    .imgList4 {
        margin: 20px 10px;
        padding: 0
    }

    #gpt-R2-FLUIDX150VIGNETTE-CRM-PC-FLUID-150,
    #gpt-R2-FLUIDX200BANDEAU-TRADE,
    #gpt-R2-FLUIDX200BANDEAU-TRADE-PA-2,
    #gpt-R2-FLUIDX200HOMEPAGE {
        margin: 0 10px;
        max-width: 1700px
    }

    #paContent .carouAnimcoTitle {
        color: #293847;
        font-size: 20px;
        font-weight: 700;
        text-align: center
    }

    @media only screen and (max-width:1023px) {
        .shopBlocLeft {
            border-right: 1px solid #e3e4ec;
            float: none;
            height: auto;
            padding-bottom: 0;
            width: 100%
        }

        .shopLBottom,
        .shopLBrand,
        .shopLText {
            display: none
        }

        .shopCrItem {
            width: 33.33%
        }

        .mallBInfos ul {
            float: none;
            margin-bottom: 20px;
            width: 100%
        }
    }

    @media only screen and (min-width:1280px) {
        .shopBloc {
            margin-left: 50px;
            margin-right: 50px
        }

        .shopCrItem {
            width: 33.33%
        }

        #gpt-R2-FLUIDX150VIGNETTE-CRM-PC-FLUID-150,
        #gpt-R2-FLUIDX200BANDEAU-TRADE,
        #gpt-R2-FLUIDX200BANDEAU-TRADE-PA-2,
        #gpt-R2-FLUIDX200HOMEPAGE {
            margin: 0 50px;
            max-width: 1700px
        }

        #paContent .departmentNavigation {
            margin: 10px 50px
        }
    }

    @media only screen and (min-width:1600px) {

        #gpt-R2-FLUIDX150VIGNETTE-CRM-PC-FLUID-150,
        #gpt-R2-FLUIDX200BANDEAU-TRADE,
        #gpt-R2-FLUIDX200BANDEAU-TRADE-PA-2,
        #gpt-R2-FLUIDX200HOMEPAGE {
            margin: 0 100px
        }

        #paContent .departmentNavigation {
            margin: 10px 100px
        }
    }

    @media only screen and (min-width:1920px) {
        .shopBloc {
            margin-left: 150px;
            margin-right: 150px
        }

        #gpt-R2-FLUIDX150VIGNETTE-CRM-PC-FLUID-150,
        #gpt-R2-FLUIDX200BANDEAU-TRADE-PA-2,
        div#gpt-R2-FLUIDX200BANDEAU-TRADE,
        div#gpt-R2-FLUIDX200HOMEPAGE {
            margin: 0 150px;
            max-width: 1600px
        }
    }

    .landingCar {
        position: relative
    }

    .landCarImgs {
        height: 500px
    }

    .landCarImgs li {
        background: #fff no-repeat 50%;
        height: 500px;
        position: absolute;
        width: 100%
    }

    .landCarImgs .active,
    .landCarImgs .newActive {
        position: absolute;
        top: 0;
        z-index: 1
    }

    .landCarImgs .newActive {
        z-index: 2
    }

    .landCarImgs div {
        height: 500px;
        margin: 0 auto;
        overflow: hidden;
        width: 768px
    }

    .landCarImgs div+div {
        position: relative;
        top: -500px
    }

    .landCarImgs div+div+div {
        position: relative;
        top: -1000px
    }

    .landCarImgs div.landCountDown {
        height: 100%;
        text-align: center;
        width: 100%
    }

    .landCarImgs div.landCarStressCo {
        display: none;
        height: auto;
        overflow: visible;
        width: auto
    }

    .landCarImgs div.landCarVideo,
    .landCarImgs div.landCarVideoBg {
        height: 100%;
        position: relative;
        width: 100%
    }

    .landCarImgs div.landCarVideo iframe {
        display: block;
        left: 50%;
        position: absolute;
        top: 50%;
        -ms-transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%)
    }

    .landCarImgs .landCarStressCo .landCarStressStock {
        font-size: 16px
    }

    .landCarImgs .landCarStressCo .landCarStressCommande {
        font-size: 14px
    }

    .landCarImgs .landCarStressCo .landCarStressCommande,
    .landCarImgs .landCarStressCo .landCarStressStock {
        display: block;
        font-weight: 700;
        height: auto;
        overflow: visible;
        position: static;
        text-align: center;
        top: 0;
        width: auto
    }

    .landCarImgs img {
        height: 500px;
        width: 100%
    }

    .landCarImgs a,
    .landCarImgs span {
        display: block;
        float: left;
        text-decoration: none
    }

    .landCarPict {
        bottom: 0;
        height: 38px;
        position: absolute;
        text-align: center;
        width: 100%;
        z-index: 3
    }

    .landCarPict:before {
        content: "";
        display: inline-block;
        height: 100%;
        vertical-align: middle
    }

    .landCarPict span {
        background: #323232;
        color: #fff;
        display: block;
        font-size: 1.2em;
        height: 30px;
        line-height: 30px;
        margin: 0;
        text-align: center;
        transition: all .5s;
        width: 30px
    }

    .landCarPict li {
        cursor: pointer;
        display: inline-block;
        filter: alpha(opacity=65);
        margin: 0 10px;
        opacity: .65;
        transition: all .5s;
        vertical-align: middle
    }

    .landCarPict li.active {
        cursor: inherit
    }

    .landCarPict li.active,
    .landCarPict li:hover {
        filter: alpha(opacity=100);
        opacity: 1
    }

    .landCarPict li:hover span {
        font-weight: 700;
        -webkit-transform: rotate(1turn);
        transform: rotate(1turn)
    }

    .landCarPict img {
        display: none
    }

    @media only screen and (min-width:1280px) {
        .landCarImgs div {
            width: 1260px
        }

        .landCarImgs div.landCarStressCo {
            display: block
        }

        .landCarPict span {
            display: none
        }

        .landCarPict img {
            display: block
        }
    }

    .c-opeco__container {
        grid-gap: 16px;
        background-color: #fff;
        display: flex;
        flex-direction: column;
        gap: 16px;
        margin-left: -8px;
        margin-right: -8px;
        margin-top: 118px;
        padding: 16px 0;
        position: relative;
        width: calc(100% + 16px)
    }

    @media only screen and (min-width:1024px) {
        .c-opeco__container {
            grid-gap: 24px;
            align-items: flex-start;
            display: flex;
            flex-direction: row;
            gap: 24px;
            margin-bottom: 16px;
            margin-left: 118px;
            margin-right: inherit;
            margin-top: inherit;
            padding: 32px 24px 32px 0;
            position: relative;
            top: 16px;
            width: auto
        }
    }

    .c-opeco__edito {
        background-color: #2772d9;
        left: 8px;
        margin-top: -118px;
        padding: 16px;
        position: relative;
        top: 0;
        width: calc(100% - 16px)
    }

    @media only screen and (min-width:1024px) {
        .c-opeco__edito {
            background-color: #2772d9;
            flex: 0 0 310px;
            height: 276px;
            left: inherit;
            margin-left: -118px;
            margin-top: -48px;
            min-width: 310px;
            padding: 32px;
            width: 100%
        }
    }

    @media only screen and (min-width:1366px) {
        .c-opeco__edito {
            flex: 0 0 368px
        }
    }

    .c-opeco__editoContent {
        text-align: left
    }

    .c-opeco__editoContent>* {
        color: #fff
    }

    .c-opeco__editoContent>p {
        font-family: Hind, sans-serif;
        font-size: 14px;
        line-height: 21px;
        margin-bottom: 16px
    }

    .c-opeco__editoTitle {
        font-family: Montserrat, sans-serif;
        font-size: 21px;
        line-height: 30px;
        margin-bottom: 16px
    }

    .c-opeco__carousel {
        background-color: transparent
    }

    @media only screen and (min-width:1024px) {
        .c-opeco__carousel {
            width: calc(100% - 216px)
        }
    }

    @media only screen and (min-width:1366px) {
        .c-opeco__carousel {
            width: calc(100% - 274px)
        }
    }

    .c-opeco__carousel>.carouselImage>ul li img {
        border: 1px solid #d7d9e4;
        border-radius: 3px
    }

    .hubMainSlideItems {
        height: 550px;
        position: relative
    }

    .hubMainSlideItem {
        display: none;
        height: 550px;
        position: absolute;
        width: 100%
    }

    .hubMainSlideItem.act,
    .hubMainSlideItem.old {
        display: block;
        left: 0;
        top: 0
    }

    .hubMainSlideItem.act {
        z-index: 5
    }

    .hubMainSlideItem .hubSlideTdg {
        height: 300px;
        overflow: hidden;
        position: relative;
        width: auto
    }

    .hubMainSlideItem .hubSlideTdg a {
        display: block
    }

    .hubMainSlideItem .hubSlideTdg img {
        border: none;
        height: 300px;
        left: 0;
        max-height: none;
        max-width: none;
        position: absolute;
        top: 0;
        -webkit-transform: translate(-50%);
        transform: translate(-50%);
        width: 100%
    }

    .hubMainSlideItem .hubSlideNavAndCarou {
        bottom: 14px;
        left: 14px;
        position: absolute;
        width: 744px
    }

    .hubMainSlideItem .hubSlideNav {
        display: table;
        width: 100%
    }

    .hubMainSlideItem .hubSlideNav>div {
        color: #000;
        display: table-cell;
        vertical-align: middle;
        width: 33%
    }

    .hubMainSlideItem .hubSlideNav span,
    .hubSlideNav ul {
        display: inline-block
    }

    .hubMainSlideItem .hubSlideNavPrev {
        text-align: left
    }

    .hubMainSlideItem .hubSlideNavNext {
        text-align: right
    }

    .hubMainSlideItem .hubSlideNavNext>span,
    .hubMainSlideItem .hubSlideNavPrev>span {
        background-color: #f1f1f5;
        cursor: pointer;
        font-size: 15px;
        height: 40px;
        opacity: .9;
        padding: 0 20px
    }

    .hubMainSlideItem .hubSlideNavNext>span:hover,
    .hubMainSlideItem .hubSlideNavPrev>span:hover {
        background-color: #293847;
        color: #f1f1f5
    }

    .hubMainSlideItem .hubSlideNav .crArr {
        background: none;
        color: inherit;
        display: inline-block;
        float: none;
        font-size: 2.85em;
        height: 44px;
        left: auto;
        line-height: 34px;
        margin: 0;
        padding: 0;
        position: relative;
        right: auto;
        top: auto;
        vertical-align: middle;
        width: auto
    }

    .hubMainSlideItem .hubSlideNavPrev .crArr {
        margin-right: 10px
    }

    .hubMainSlideItem .hubSlideNavNext .crArr {
        margin-left: 10px
    }

    .hubMainSlideItem .hubSlideNav .contributedArrowLabel {
        display: none
    }

    .hubMainSlideItem .hubSlideNav .defaultArrowLabel {
        display: inline
    }

    .hubMainSlideItem .hubSlideNavDots {
        text-align: center
    }

    .hubMainSlideItem .hubSlideNavDots ul {
        background: #f1f1f5;
        border-radius: 9px;
        display: inline-block;
        height: 18px;
        padding: 4px 10px;
        vertical-align: middle;
        white-space: nowrap
    }

    .hubMainSlideItem .hubSlideNavDots li {
        display: inline-block;
        height: 10px;
        margin: 0 2px
    }

    .hubMainSlideItem .hubSlideNavDots span {
        background: #8d949f;
        border: 2px solid #f1f1f5;
        border-radius: 5px;
        cursor: pointer;
        display: inline-block;
        height: 10px;
        text-indent: -999em;
        width: 10px
    }

    .hubMainSlideItem .hubSlideNavDots .act span {
        background: #293847;
        border-color: #293847
    }

    .hubMainSlideItem .imgListRz {
        margin-top: 0
    }

    @media only screen {
        .hubMainSlideItem .hubSlideTdg img {
            left: 50%;
            width: 1275px
        }

        .hubMainSlideItem .hubSlideNavAndCarou {
            width: calc(100% - 28px)
        }

        .hubMainSlideItem .hubSlideTdg .crLast img,
        .hubMainSlideItem .hubSlideTdg .crNext img {
            height: auto;
            top: 34%;
            width: auto
        }

        .hubMainSlideItem .hubSlideTdg .crNext img {
            left: 55%
        }

        .hubMainSlideItem .hubSlideTdg .crLast img {
            left: 45%
        }
    }

    @media only screen and (min-width:1280px) {

        .hubMainSlideItem,
        .hubMainSlideItems {
            height: 650px
        }

        .hubMainSlideItem .hubSlideTdg {
            height: 400px
        }

        .hubMainSlideItem .hubSlideTdg img {
            height: 400px;
            width: 1700px
        }

        .hubMainSlideItem .hubSlideTdg .crLast img,
        .hubMainSlideItem .hubSlideTdg .crNext img {
            height: auto;
            top: 34%;
            width: auto
        }

        .hubMainSlideItem .hubSlideNav .contributedArrowLabel {
            display: inline
        }

        .hubMainSlideItem .hubSlideNav .defaultArrowLabel {
            display: none
        }
    }

    .renewMd5 {
        display: none
    }

    .departmentNavigation {
        display: block;
        margin: 10px;
        max-height: 320px;
        position: relative;
        text-align: center;
        z-index: 10
    }

    .departmentNavigationHeader {
        display: block;
        margin-bottom: 10px
    }

    .departmentNavigationTitle {
        display: inline-block;
        font-size: 26px;
        font-weight: 700
    }

    .departmentNavigationListContainer {
        background-color: #fff;
        display: inline-block;
        max-width: 100%;
        padding: 10px 0;
        position: relative;
        text-align: left
    }

    .departmentNavigationListContainer .crLast.inactive,
    .departmentNavigationListContainer .crNext.inactive {
        display: none
    }

    .departmentNavigationListWrapper {
        max-height: 300px;
        overflow: visible
    }

    .departmentNavigationList {
        display: block;
        font-size: 0;
        overflow-x: hidden;
        overflow-y: visible;
        padding: 10px;
        white-space: nowrap
    }

    .departmentNavigationItem {
        display: inline-block;
        height: 290px;
        overflow: hidden;
        padding-left: 15px;
        padding-right: 15px;
        vertical-align: top;
        width: 170px
    }

    .departmentNavigationItem a {
        text-decoration: none
    }

    .departmentNavigationItemImage {
        display: block;
        height: 140px;
        margin-bottom: 18px;
        overflow: hidden;
        position: relative;
        width: 140px
    }

    .departmentNavigationItemImage img {
        height: 100%;
        -webkit-transform: scale(.8);
        transform: scale(.8);
        width: 100%
    }

    .departmentNavigationItemImage:after {
        background-color: #000;
        border-radius: 70px;
        content: "";
        height: 100%;
        left: 0;
        opacity: .05;
        position: absolute;
        top: 0;
        width: 100%
    }

    .departmentNavigationItemTitle {
        font-size: 14px;
        font-weight: 700;
        height: 16px;
        margin-bottom: 18px;
        text-align: center
    }

    .departmentNavigationItemLink,
    .departmentNavigationItemTitle {
        display: block;
        font-family: Hind Madurai, Hind-fallback, Arial, sans-serif
    }

    .departmentNavigationItemLink {
        font-size: 12px;
        font-weight: 400;
        margin-bottom: 12px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .departmentNavigationItemChevron {
        display: block;
        height: 25px;
        margin-bottom: 12px;
        margin-top: -16px;
        padding-top: 15px
    }

    .departmentNavigationItemChevron i.chevron {
        display: inline-block;
        height: 12px;
        position: relative;
        width: 12px
    }

    .departmentNavigationItemChevron i.chevron:after,
    .departmentNavigationItemChevron i.chevron:before {
        border: 6px solid transparent;
        content: "";
        display: block;
        position: absolute
    }

    .departmentNavigationItemChevron i.chevron:before {
        border-top-color: #297bd1;
        top: 3px
    }

    .departmentNavigationItemChevron i.chevron:after {
        border-top-color: #fff;
        top: 1px
    }

    .departmentNavigationItem.faded {
        opacity: .6
    }

    .departmentNavigationItem.hover {
        background-color: #fff;
        box-shadow: 0 0 7px 0 rgba(0, 0, 0, .23);
        height: auto;
        overflow: visible;
        z-index: 10
    }

    .departmentNavigationItem.hover .departmentNavigationItemLink:last-child {
        margin-bottom: 25px
    }

    .departmentNavigationItem.hover .departmentNavigationItemChevron,
    .departmentNavigationItem.hover .departmentNavigationItemImage:after {
        display: none
    }

    :root {
        --shadow-in: 0 -4px 4px 0px rgba(41, 56, 71, .15);
        --shadow-100: 0 4px 4px 0px rgba(41, 56, 71, .15);
        --shadow-200: 0 8px 8px 0px rgba(41, 56, 71, .15);
        --shadow-right: 4px 0px 4px 0px rgba(41, 56, 71, .15);
        --radius: 0.25em;
        --radius-sm: calc(var(--radius, 0.25em)/2);
        --radius-md: var(--radius, 0.25em);
        --radius-lg: calc(var(--radius, 0.25em)*2);
        --space-unit: 16px
    }

    *,
    :root {
        --space-xs: 4px;
        --space-sm: 8px;
        --space: 16px;
        --space-md: 24px;
        --space-lg: 32px;
        --space-xl: 64px;
        --component-padding: var(--space-lg)
    }

    :root {
        --base-size: 1rem;
        --text-base-size: 14px;
        --body-line-height: 1.5;
        --text-unit: var(--base-size)
    }

    *,
    :root {
        --text-xs: calc(var(--text-unit)*0.625);
        --text-sm: calc(var(--text-unit)*0.75);
        --text: calc(var(--text-unit)*875);
        --text-md: calc(var(--text-unit)*1);
        --text-h4: calc(var(--text-unit)*1);
        --text-h3: calc(var(--text-unit)*1.125);
        --text-h2: calc(var(--text-unit)*1.3125);
        --text-h1: calc(var(--text-unit)*1.5)
    }

    .grid-auto-lg,
    .grid-auto-md,
    .grid-auto-sm,
    .grid-auto-xl,
    .grid-auto-xs {
        grid-gap: 0 0;
        grid-gap: var(--gap-y, 0) var(--gap-x, 0);
        display: grid;
        gap: 0 0;
        gap: var(--gap-y, 0) var(--gap-x, 0);
        grid-template-columns: repeat(auto-fit, minmax(var(--col-min-width), 1fr))
    }

    .grid-auto-xs {
        --col-min-width: 8rem
    }

    .grid-auto-sm {
        --col-min-width: 10rem
    }

    .grid-auto-md {
        --col-min-width: 15rem
    }

    .grid-auto-lg {
        --col-min-width: 20rem
    }

    .grid-auto-xl {
        --col-min-width: 25rem
    }

    @media(min-width:320px) {
        .grid-auto-xs\@xxs {
            --col-min-width: 8rem
        }

        .grid-auto-sm\@xxs {
            --col-min-width: 10rem
        }

        .grid-auto-md\@xxs {
            --col-min-width: 15rem
        }

        .grid-auto-lg\@xxs {
            --col-min-width: 20rem
        }

        .grid-auto-xl\@xxs {
            --col-min-width: 25rem
        }
    }

    @media(min-width:512px) {
        .grid-auto-xs\@xs {
            --col-min-width: 8rem
        }

        .grid-auto-sm\@xs {
            --col-min-width: 10rem
        }

        .grid-auto-md\@xs {
            --col-min-width: 15rem
        }

        .grid-auto-lg\@xs {
            --col-min-width: 20rem
        }

        .grid-auto-xl\@xs {
            --col-min-width: 25rem
        }
    }

    @media(min-width:768px) {
        .grid-auto-xs\@sm {
            --col-min-width: 8rem
        }

        .grid-auto-sm\@sm {
            --col-min-width: 10rem
        }

        .grid-auto-md\@sm {
            --col-min-width: 15rem
        }

        .grid-auto-lg\@sm {
            --col-min-width: 20rem
        }

        .grid-auto-xl\@sm {
            --col-min-width: 25rem
        }
    }

    @media(min-width:1024px) {
        .grid-auto-xs\@md {
            --col-min-width: 8rem
        }

        .grid-auto-sm\@md {
            --col-min-width: 10rem
        }

        .grid-auto-md\@md {
            --col-min-width: 15rem
        }

        .grid-auto-lg\@md {
            --col-min-width: 20rem
        }

        .grid-auto-xl\@md {
            --col-min-width: 25rem
        }
    }

    @media(min-width:1280px) {
        .grid-auto-xs\@lg {
            --col-min-width: 8rem
        }

        .grid-auto-sm\@lg {
            --col-min-width: 10rem
        }

        .grid-auto-md\@lg {
            --col-min-width: 15rem
        }

        .grid-auto-lg\@lg {
            --col-min-width: 20rem
        }

        .grid-auto-xl\@lg {
            --col-min-width: 25rem
        }
    }

    @media(min-width:1366px) {
        .grid-auto-xs\@eg {
            --col-min-width: 8rem
        }

        .grid-auto-sm\@eg {
            --col-min-width: 10rem
        }

        .grid-auto-md\@eg {
            --col-min-width: 15rem
        }

        .grid-auto-lg\@eg {
            --col-min-width: 20rem
        }

        .grid-auto-xl\@eg {
            --col-min-width: 25rem
        }
    }

    @media(min-width:1440px) {
        .grid-auto-xs\@xl {
            --col-min-width: 8rem
        }

        .grid-auto-sm\@xl {
            --col-min-width: 10rem
        }

        .grid-auto-md\@xl {
            --col-min-width: 15rem
        }

        .grid-auto-lg\@xl {
            --col-min-width: 20rem
        }

        .grid-auto-xl\@xl {
            --col-min-width: 25rem
        }
    }

    @media(min-width:1600px) {
        .grid-auto-xs\@xxl {
            --col-min-width: 8rem
        }

        .grid-auto-sm\@xxl {
            --col-min-width: 10rem
        }

        .grid-auto-md\@xxl {
            --col-min-width: 15rem
        }

        .grid-auto-lg\@xxl {
            --col-min-width: 20rem
        }

        .grid-auto-xl\@xxl {
            --col-min-width: 25rem
        }
    }

    @media(min-width:1920px) {
        .grid-auto-xs\@xxxl {
            --col-min-width: 8rem
        }

        .grid-auto-sm\@xxxl {
            --col-min-width: 10rem
        }

        .grid-auto-md\@xxxl {
            --col-min-width: 15rem
        }

        .grid-auto-lg\@xxxl {
            --col-min-width: 20rem
        }

        .grid-auto-xl\@xxxl {
            --col-min-width: 25rem
        }
    }

    .grid-auto__line {
        grid-column-end: -1;
        grid-column-start: 1;
        grid-row-end: auto;
        grid-row-start: auto
    }

    .l-grid {
        display: grid;
        grid-auto-flow: row dense;
        grid-template-columns: repeat(var(--grid-columns), 1fr)
    }

    .l-grid[data-grid-sms=off] {
        display: flex;
        flex-direction: column
    }

    @media(min-width:512px) {
        .l-grid[data-grid-sms=off] {
            display: grid;
            grid-auto-flow: row dense;
            grid-template-columns: repeat(var(--grid-columns), 1fr)
        }
    }

    .l-grid[data-grid-columns="1"] {
        --grid-columns: 1
    }

    .l-grid[data-grid-columns="2"] {
        --grid-columns: 2
    }

    .l-grid[data-grid-columns="3"] {
        --grid-columns: 3
    }

    .l-grid[data-grid-columns="4"] {
        --grid-columns: 4
    }

    .l-grid[data-grid-columns="5"] {
        --grid-columns: 5
    }

    .l-grid[data-grid-columns="6"] {
        --grid-columns: 6
    }

    .l-grid[data-grid-columns="7"] {
        --grid-columns: 7
    }

    .l-grid[data-grid-columns="8"] {
        --grid-columns: 8
    }

    .l-grid[data-grid-columns="9"] {
        --grid-columns: 9
    }

    .l-grid[data-grid-columns="10"] {
        --grid-columns: 10
    }

    .l-grid[data-grid-columns="11"] {
        --grid-columns: 11
    }

    .l-grid[data-grid-columns="12"] {
        --grid-columns: 12
    }

    .l-grid>[data-grid="0"] {
        grid-column-end: span var(--grid-columns)
    }

    .l-grid>[data-grid="1"] {
        grid-column-end: span 1
    }

    .l-grid>[data-grid-item-start="1"] {
        grid-column-start: 1
    }

    .l-grid>[data-grid="2"] {
        grid-column-end: span 2
    }

    .l-grid>[data-grid-item-start="2"] {
        grid-column-start: 2
    }

    .l-grid>[data-grid="3"] {
        grid-column-end: span 3
    }

    .l-grid>[data-grid-item-start="3"] {
        grid-column-start: 3
    }

    .l-grid>[data-grid="4"] {
        grid-column-end: span 4
    }

    .l-grid>[data-grid-item-start="4"] {
        grid-column-start: 4
    }

    .l-grid>[data-grid="5"] {
        grid-column-end: span 5
    }

    .l-grid>[data-grid-item-start="5"] {
        grid-column-start: 5
    }

    .l-grid>[data-grid="6"] {
        grid-column-end: span 6
    }

    .l-grid>[data-grid-item-start="6"] {
        grid-column-start: 6
    }

    .l-grid>[data-grid="7"] {
        grid-column-end: span 7
    }

    .l-grid>[data-grid-item-start="7"] {
        grid-column-start: 7
    }

    .l-grid>[data-grid="8"] {
        grid-column-end: span 8
    }

    .l-grid>[data-grid-item-start="8"] {
        grid-column-start: 8
    }

    .l-grid>[data-grid="9"] {
        grid-column-end: span 9
    }

    .l-grid>[data-grid-item-start="9"] {
        grid-column-start: 9
    }

    .l-grid>[data-grid="10"] {
        grid-column-end: span 10
    }

    .l-grid>[data-grid-item-start="10"] {
        grid-column-start: 10
    }

    .l-grid>[data-grid="11"] {
        grid-column-end: span 11
    }

    .l-grid>[data-grid-item-start="11"] {
        grid-column-start: 11
    }

    .l-grid>[data-grid="12"] {
        grid-column-end: span 12
    }

    .l-grid>[data-grid-item-start="12"] {
        grid-column-start: 12
    }

    .l-grid>:not([data-grid]) {
        grid-column-end: span var(--grid-columns)
    }

    .l-grid[data-grid-auto=on]>:not([data-grid]):not(:only-child) {
        grid-column-end: auto
    }

    [data-grid-align=center] {
        align-items: center
    }

    [data-grid-align=start] {
        align-items: start
    }

    [data-grid-align=end] {
        align-items: end
    }

    [data-grid-gap=sm] {
        grid-gap: 8px;
        gap: 8px
    }

    [data-grid-gap=md] {
        grid-gap: 16px;
        gap: 16px
    }

    [data-grid-gap=lg] {
        grid-gap: 24px;
        gap: 24px
    }

    @media(min-width:768px) {
        .l-grid>[data-grid-sm="1"] {
            grid-column-end: span 1
        }

        .l-grid>[data-grid-sm="2"] {
            grid-column-end: span 2
        }

        .l-grid>[data-grid-sm="3"] {
            grid-column-end: span 3
        }

        .l-grid>[data-grid-sm="4"] {
            grid-column-end: span 4
        }

        .l-grid>[data-grid-sm="5"] {
            grid-column-end: span 5
        }

        .l-grid>[data-grid-sm="6"] {
            grid-column-end: span 6
        }

        .l-grid>[data-grid-sm="7"] {
            grid-column-end: span 7
        }

        .l-grid>[data-grid-sm="8"] {
            grid-column-end: span 8
        }

        .l-grid>[data-grid-sm="9"] {
            grid-column-end: span 9
        }

        .l-grid>[data-grid-sm="10"] {
            grid-column-end: span 10
        }

        .l-grid>[data-grid-sm="11"] {
            grid-column-end: span 11
        }

        .l-grid>[data-grid-sm="12"] {
            grid-column-end: span 12
        }
    }

    @media(min-width:1024px) {
        .l-grid>[data-grid-md="1"] {
            grid-column-end: span 1
        }

        .l-grid>[data-grid-md="2"] {
            grid-column-end: span 2
        }

        .l-grid>[data-grid-md="3"] {
            grid-column-end: span 3
        }

        .l-grid>[data-grid-md="4"] {
            grid-column-end: span 4
        }

        .l-grid>[data-grid-md="5"] {
            grid-column-end: span 5
        }

        .l-grid>[data-grid-md="6"] {
            grid-column-end: span 6
        }

        .l-grid>[data-grid-md="7"] {
            grid-column-end: span 7
        }

        .l-grid>[data-grid-md="8"] {
            grid-column-end: span 8
        }

        .l-grid>[data-grid-md="9"] {
            grid-column-end: span 9
        }

        .l-grid>[data-grid-md="10"] {
            grid-column-end: span 10
        }

        .l-grid>[data-grid-md="11"] {
            grid-column-end: span 11
        }

        .l-grid>[data-grid-md="12"] {
            grid-column-end: span 12
        }
    }

    @media(min-width:1280px) {
        .l-grid>[data-grid-lg="1"] {
            grid-column-end: span 1
        }

        .l-grid>[data-grid-lg="2"] {
            grid-column-end: span 2
        }

        .l-grid>[data-grid-lg="3"] {
            grid-column-end: span 3
        }

        .l-grid>[data-grid-lg="4"] {
            grid-column-end: span 4
        }

        .l-grid>[data-grid-lg="5"] {
            grid-column-end: span 5
        }

        .l-grid>[data-grid-lg="6"] {
            grid-column-end: span 6
        }

        .l-grid>[data-grid-lg="7"] {
            grid-column-end: span 7
        }

        .l-grid>[data-grid-lg="8"] {
            grid-column-end: span 8
        }

        .l-grid>[data-grid-lg="9"] {
            grid-column-end: span 9
        }

        .l-grid>[data-grid-lg="10"] {
            grid-column-end: span 10
        }

        .l-grid>[data-grid-lg="11"] {
            grid-column-end: span 11
        }

        .l-grid>[data-grid-lg="12"] {
            grid-column-end: span 12
        }
    }

    .c-accordion__item {
        border-color: #b6c2cd;
        border-bottom: 1px #b6c2cd;
        border-style: solid
    }

    .c-accordion__item:first-child {
        border-top-width: 1px
    }

    .c-accordion__header {
        align-items: center;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        text-align: left;
        width: 100%
    }

    .c-accordion__header .icon,
    .c-accordion__header .svg {
        --size: 20px
    }

    .c-accordion__header .icon .icon__group,
    .c-accordion__header .svg .icon__group {
        stroke-width: 2px
    }

    .c-accordion__icon-arrow .icon__group,
    .c-accordion__icon-arrow-v2 .icon__group,
    .c-accordion__icon-plus .icon__group {
        -webkit-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        will-change: transform
    }

    .c-accordion__icon-arrow .icon__group>* {
        -webkit-transform-origin: 10px 14px;
        transform-origin: 10px 14px
    }

    .c-accordion__icon-arrow-v2 .icon__group>* {
        stroke-dasharray: 20;
        -webkit-transform: translateY(4px);
        transform: translateY(4px);
        -webkit-transform-origin: 50% 50%;
        transform-origin: 50% 50%
    }

    .c-accordion__icon-arrow-v2 .icon__group>:first-child,
    .c-accordion__icon-arrow-v2 .icon__group>:last-child {
        stroke-dashoffset: 10.15
    }

    .c-accordion__icon-plus .icon__group {
        -webkit-transform: rotate(-90deg);
        transform: rotate(-90deg)
    }

    .c-accordion__icon-plus .icon__group>* {
        -webkit-transform-origin: 50% 50%;
        transform-origin: 50% 50%
    }

    .c-accordion__icon-plus .icon__group>:first-child {
        -webkit-transform: rotate(-90deg);
        transform: rotate(-90deg)
    }

    .c-accordion__item--is-open>.c-accordion__header>.c-accordion__icon-arrow .icon__group>:first-child {
        -webkit-transform: translateY(-8px) rotate(-90deg);
        transform: translateY(-8px) rotate(-90deg)
    }

    .c-accordion__item--is-open>.c-accordion__header>.c-accordion__icon-arrow .icon__group>:last-child {
        -webkit-transform: translateY(-8px) rotate(90deg);
        transform: translateY(-8px) rotate(90deg)
    }

    .c-accordion__item--is-open>.c-accordion__header>.c-accordion__icon-arrow-v2 .icon__group {
        -webkit-transform: rotate(-90deg);
        transform: rotate(-90deg)
    }

    .c-accordion__item--is-open>.c-accordion__header>.c-accordion__icon-arrow-v2 .icon__group :last-child,
    .c-accordion__item--is-open>.c-accordion__header>.c-accordion__icon-arrow-v2 .icon__group>:first-child {
        stroke-dashoffset: 0;
        -webkit-transform: translateY(0);
        transform: translateY(0)
    }

    .c-accordion__item--is-open>.c-accordion__header>.c-accordion__icon-plus .icon__group,
    .c-accordion__item--is-open>.c-accordion__header>.c-accordion__icon-plus .icon__group>:first-child {
        -webkit-transform: rotate(0);
        transform: rotate(0)
    }

    .c-accordion__panel {
        display: none;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
        will-change: height
    }

    .c-accordion__item--is-open>.c-accordion__panel {
        display: block
    }

    .c-accordion[data-animation=on] .c-accordion__item--is-open .c-accordion__panel>* {
        -webkit-animation: accordion-entry-animation .15s cubic-bezier(0, 0, .38, .9);
        animation: accordion-entry-animation .15s cubic-bezier(0, 0, .38, .9)
    }

    .c-accordion[data-animation=on] .c-accordion__icon-arrow .icon__group,
    .c-accordion[data-animation=on] .c-accordion__icon-arrow-v2 .icon__group,
    .c-accordion[data-animation=on] .c-accordion__icon-plus .icon__group {
        transition: -webkit-transform .11s cubic-bezier(0, 0, .3, 1);
        transition: transform .11s cubic-bezier(0, 0, .3, 1);
        transition: transform .11s cubic-bezier(0, 0, .3, 1), -webkit-transform .11s cubic-bezier(0, 0, .3, 1)
    }

    .c-accordion[data-animation=on] .c-accordion__icon-arrow .icon__group>*,
    .c-accordion[data-animation=on] .c-accordion__icon-arrow-v2 .icon__group>*,
    .c-accordion[data-animation=on] .c-accordion__icon-plus .icon__group>* {
        transition: stroke-dashoffset .11s, -webkit-transform .11s;
        transition: transform .11s, stroke-dashoffset .11s;
        transition: transform .11s, stroke-dashoffset .11s, -webkit-transform .11s;
        transition-timing-function: cubic-bezier(0, 0, .3, 1)
    }

    @-webkit-keyframes accordion-entry-animation {
        0% {
            opacity: 0;
            -webkit-transform: translateY(-10px);
            transform: translateY(-10px)
        }

        to {
            opacity: 1;
            -webkit-transform: translateY(0);
            transform: translateY(0)
        }
    }

    @keyframes accordion-entry-animation {
        0% {
            opacity: 0;
            -webkit-transform: translateY(-10px);
            transform: translateY(-10px)
        }

        to {
            opacity: 1;
            -webkit-transform: translateY(0);
            transform: translateY(0)
        }
    }

    .c-scroller__container {
        grid-gap: 16px;
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        gap: 16px;
        left: 0;
        padding: 1px;
        position: relative
    }

    .c-scroller__arrows {
        display: flex;
        justify-content: space-between;
        pointer-events: none;
        position: absolute;
        width: 100%
    }

    .c-scroller__btn {
        display: none
    }

    @media(min-width:512px) {
        .c-scroller__btn {
            background-color: #fff;
            box-shadow: 0 1px 4px 0 rgba(0, 0, 0, .2);
            cursor: pointer;
            display: flex;
            height: 6rem;
            pointer-events: auto;
            transition: .2s;
            width: 3rem;
            z-index: 1
        }
    }

    .c-scroller__btn .icon {
        display: block;
        height: 2rem;
        margin: auto;
        width: 2rem
    }

    .c-scroller__btn--arrow-left {
        border-radius: 0 4px 4px 0
    }

    .c-scroller__btn--arrow-right {
        border-radius: 4px 0 0 4px
    }

    .c-scroller--nav .c-scroller__btn .icon {
        height: 1rem;
        width: 1rem
    }

    .c-scroller--nav .c-scroller__btn--small {
        display: none
    }

    @media(min-width:512px) {
        .c-scroller--nav .c-scroller__btn--small {
            background-color: #fff;
            box-shadow: 0 1px 4px 0 rgba(0, 0, 0, .2);
            cursor: pointer;
            display: flex;
            height: 40px;
            pointer-events: auto;
            transition: .2s;
            width: 24px;
            z-index: 1
        }
    }

    .c-scroller__btn--v2.c-scroller__btn {
        display: none
    }

    @media(min-width:512px) {
        .c-scroller__btn--v2.c-scroller__btn {
            background-color: #fff;
            box-shadow: 0 1px 4px 0 rgba(0, 0, 0, .2);
            cursor: pointer;
            display: flex;
            height: 40px;
            pointer-events: auto;
            transition: .2s;
            width: 40px;
            z-index: 1
        }
    }

    .c-scroller__btn--v2.c-scroller__btn--arrow-left {
        border-radius: 4px 0 0 4px
    }

    .c-scroller__btn--v2.c-scroller__btn--arrow-right {
        border-radius: 0 4px 4px 0
    }

    .c-scroller--vertical .c-scroller__container {
        grid-gap: 16px;
        display: flex;
        flex-direction: column;
        gap: 16px;
        padding: 1px;
        top: 0
    }

    .c-scroller--horizontal .c-scroller__container {
        grid-gap: 16px;
        display: flex;
        flex-direction: row;
        gap: 16px;
        padding: 1px;
        top: 0
    }

    @media(min-width:1024px) {
        .c-scroller--vertical\@md .c-scroller__container {
            display: flex;
            flex-direction: column
        }

        .c-scroller--horizontal\@md .c-scroller__container {
            display: flex;
            flex-direction: row
        }
    }

    @media(min-width:1280px) {
        .c-scroller--vertical\@lg .c-scroller__container {
            display: flex;
            flex-direction: column
        }

        .c-scroller--horizontal\@lg .c-scroller__container {
            display: flex;
            flex-direction: row
        }
    }

    .c-tabs__control {
        color: #293847;
        text-decoration: none
    }

    .c-tabs__control:focus {
        outline: 2px solid rgba(122, 137, 153, .2);
        outline-offset: 2px
    }

    .c-tabs__control:hover {
        color: #0f1419
    }

    .c-tabs__control[aria-selected=true] {
        color: #0f1419;
        text-decoration: underline
    }

    .c-tabs--default {
        background-color: #fff;
        border: 1px solid #b6c2cd;
        border-radius: 4px;
        padding: 16px
    }

    .c-tabs--default .c-tabs__controls {
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 4px
    }

    .c-tabs--default .c-tabs__controls li {
        display: inline-block;
        margin: 0 8px 4px 0
    }

    .c-tabs--default .c-tabs__control {
        background-color: #f2f3f5;
        border-radius: 4px;
        color: inherit;
        display: inline-flex;
        font-size: 16px;
        padding: 8px 16px;
        white-space: nowrap
    }

    .c-tabs--default .c-tabs__control:hover {
        background-color: rgba(122, 137, 153, .075)
    }

    .c-tabs--default .c-tabs__panel {
        margin-bottom: 16px
    }

    .c-tabs--default .c-tabs__control {
        text-decoration: none
    }

    .c-tabs--default .c-tabs__control[aria-selected=true] {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        background-color: #096ec8;
        color: #fff
    }

    .c-tabs--default .c-tabs__control[aria-selected=true]:hover {
        background-color: #064e8e
    }

    .c-tabs--default .c-tabs__panel {
        margin-bottom: 0
    }

    @media(min-width:1024px) {
        .c-tabs--default {
            background-color: transparent;
            border: none;
            padding: 0
        }

        .c-tabs--default .c-tabs__controls {
            margin-bottom: 0
        }

        .c-tabs--default .c-tabs__controls li {
            margin: 0 8px 0 -1px
        }

        .c-tabs--default .c-tabs__controls li:first-child {
            margin-left: 0
        }

        .c-tabs--default .c-tabs__controls li:first-child a,
        .c-tabs--default .c-tabs__controls li:last-child a {
            border-radius: 4px 4px 0 0
        }

        .c-tabs--default .c-tabs__control {
            border: solid transparent;
            border-radius: 4px 4px 0 0;
            border-width: 1px 1px 0;
            height: 100%
        }

        .c-tabs--default .c-tabs__control[aria-selected=true] {
            background-color: #fff;
            border-color: #b6c2cd;
            color: #096ec8;
            position: relative
        }

        .c-tabs--default .c-tabs__control[aria-selected=true]:hover {
            background-color: inherit
        }

        .c-tabs--default .c-tabs__control[aria-selected=true]:after {
            background-color: #fff;
            bottom: -1px;
            content: "";
            height: 1px;
            left: 0;
            position: absolute;
            width: 100%;
            z-index: 1
        }

        .c-tabs--default .c-tabs__panels {
            background-color: #fff;
            border: 1px solid #b6c2cd;
            border-radius: 0 4px 4px 4px
        }
    }

    .c-tabs--justified {
        background-color: transparent;
        border: none;
        padding: 0
    }

    .c-tabs--justified .c-tabs__controls {
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 0
    }

    @media(min-width:512px) {
        .c-tabs--justified .c-tabs__controls {
            flex-wrap: nowrap
        }
    }

    .c-tabs--justified .c-tabs__controls li {
        display: inline-block;
        flex: 1 1 auto;
        margin: 0 8px 0 -1px
    }

    .c-tabs--justified .c-tabs__controls li a {
        width: 100%
    }

    .c-tabs--justified .c-tabs__controls li:first-child {
        margin-left: 0
    }

    .c-tabs--justified .c-tabs__controls li:last-child {
        margin-right: 0
    }

    .c-tabs--justified .c-tabs__controls li:first-child a,
    .c-tabs--justified .c-tabs__controls li:last-child a {
        border-radius: 4px 4px 0 0
    }

    .c-tabs--justified .c-tabs__control {
        align-items: center;
        background-color: #f2f3f5;
        border: solid transparent;
        border-radius: 4px 4px 0 0;
        border-width: 1px 1px 0;
        color: inherit;
        display: inline-flex;
        flex-direction: column;
        font-size: 16px;
        height: 100%;
        padding: 8px 16px;
        text-decoration: none
    }

    .c-tabs--justified .c-tabs__control[aria-selected=true] {
        background-color: #fff;
        border-color: #b6c2cd;
        color: #096ec8;
        position: relative
    }

    .c-tabs--justified .c-tabs__control[aria-selected=true]:hover {
        background-color: inherit
    }

    .c-tabs--justified .c-tabs__control[aria-selected=true]:after {
        background-color: #fff;
        bottom: -1px;
        content: "";
        height: 1px;
        left: 0;
        position: absolute;
        width: 100%;
        z-index: 1
    }

    .c-tabs--justified .c-tabs__panels {
        background-color: #fff;
        border: 1px solid #b6c2cd;
        border-radius: 0 4px 4px -1px
    }

    .c-tabs--pills .c-tabs__control {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        align-items: center;
        background: transparent;
        border: 2px solid #fff;
        border-radius: 50em;
        color: #fff;
        cursor: pointer;
        display: inline-flex;
        font-family: Hind Madurai, Hind-fallback, Arial, sans-serif;
        font-size: 16px;
        justify-content: center;
        line-height: 1.5;
        padding: 8px 16px;
        position: relative;
        text-decoration: none;
        transition: all 70ms cubic-bezier(.4, .14, .3, 1);
        white-space: nowrap;
        will-change: transform
    }

    .c-tabs--pills .c-tabs__control:focus {
        box-shadow: 0 0 0 2px hsla(0, 0%, 100%, .3);
        outline: none
    }

    .c-tabs--pills .c-tabs__control:hover {
        background: #fff;
        color: #293847
    }

    .c-tabs--pills .c-tabs__control[aria-selected=true] {
        background-color: #fff;
        color: #0f1419;
        text-decoration: none
    }

    header {
        height: 70px;
    }

    .content {
        max-width: 990px;
        width: 100%;
    }

    .sub-content {
        padding: 1rem 2rem;
    }

    @media (max-width: 990px) {
        header {
            height: 55px;
        } 
    }

    @media (max-width: 650px) {
        header {
            height: 90px;
        } 
        .sub-content {
            padding: 1rem 0.5rem;
        }
    }

    
</style>




<header id="header" class="l-header l-header--fixed js-header">
  <input id="HeaderControlId" type="hidden" value="5864229">
  <input id="FrontPath" type="hidden" value="https://www.cdiscount.com">
  <input id="CurrentNavigationPath" type="hidden" value="134965">
  <div class="l-header__main">
    <div class="l-header__top displayToPro">
      <div class="c-banner u-bg--neutral-500 js-banner">
        <div class="o-container-fluid u-position-relative">
          <div class="c-banner__content" data-theme="dark">
            <p>Vous êtes un particulier ? aller sur <a class="o-picto jsCdsLinkIndividual" href="#">
                <span class="o-logoCDS">Cdiscount.com</span>
                <svg class="icon u-text--coral-500" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#e23a05" viewBox="0 0 256 256">
                  <path d="M200,64V168a8,8,0,0,1-16,0V83.31L69.66,197.66a8,8,0,0,1-11.32-11.32L172.69,72H88a8,8,0,0,1,0-16H192A8,8,0,0,1,200,64Z"></path>
                </svg>
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="l-header__head">
      <div class="l-header__left">
        <button class="reset btn btn--sm btn--icon-only btn--transparent btn--rayon js-stores-item" aria-controls="HeaderStoreLayer" data-navigationid="134965" data-level="0">
          <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="currentColor" viewBox="0 0 256 256">
            <rect width="256" height="256" fill="none"></rect>
            <line x1="40" y1="128" x2="216" y2="128" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
            <line x1="40" y1="64" x2="216" y2="64" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
            <line x1="40" y1="192" x2="216" y2="192" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
          </svg>
          <span class="u-visually-hidden">Rayons</span>
        </button>
        <h1 class="l-header__logo">
          <a class="hideFromPro" href="{offer}" title="Achat discount" alt="Achat discount">
            <svg class="logo-Cdiscount--svg" width="176" height="38" viewBox="0 0 176 38" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M19.564 18.9255C18.878 19.8924 17.9686 20.6808 16.9124 21.2242C15.8563 21.7676 14.6844 22.05 13.4956 22.0477C9.18597 22.0477 5.93605 18.7959 5.93605 14.4836C5.90358 13.4846 6.07665 12.4895 6.4446 11.5595C6.81255 10.6295 7.36761 9.78433 8.07566 9.07589C8.78371 8.36744 9.62979 7.81072 10.5619 7.43994C11.4939 7.06917 12.4923 6.89217 13.4956 6.91985C14.6843 6.91749 15.8562 7.19989 16.9123 7.74323C17.9685 8.28657 18.8779 9.07491 19.564 10.0417L19.7861 10.3572L24.2711 6.57455L24.0444 6.30646C22.7504 4.77555 21.1352 3.5457 19.3125 2.70348C17.4898 1.86126 15.5039 1.42714 13.4945 1.43168C6.05367 1.43168 0 7.28674 0 14.4836C0 21.6611 6.05367 27.5004 13.4945 27.5004C15.5012 27.5104 17.4858 27.0823 19.3085 26.2462C21.1311 25.4101 22.7477 24.1863 24.0444 22.6611L24.2711 22.3927L19.7875 18.61L19.564 18.9255Z" fill="#E23A05"></path>
              <path d="M45.6238 0.5V27.1798H40.8469V26.0136C39.2054 26.9876 37.347 27.4999 35.4558 27.4998C30.3034 27.4998 26.0723 23.4657 26.0723 17.5567C26.0723 11.5413 30.3034 7.61353 35.4558 7.61353C37.342 7.61865 39.1963 8.11768 40.8469 9.06434V0.5H45.6238ZM40.8469 21.3768V13.6629C39.5656 12.5841 37.9589 12.0079 36.3087 12.0356C33.1358 12.0356 30.7813 14.4063 30.7813 17.5556C30.7813 20.811 33.1358 23.0402 36.3087 23.0402C37.9645 23.0665 39.5746 22.4764 40.8469 21.3771" fill="white"></path>
              <path d="M54.9299 9.81055H49.3438V27.5001H54.9299V9.81055Z" fill="white"></path>
              <path d="M59.6463 22.0961C62.1251 23.1067 64.0118 23.6294 66.5273 23.6294C68.895 23.6294 69.82 22.7931 69.82 21.8173C69.82 20.736 68.6721 20.2492 65.5645 19.6218C61.236 18.7156 58.0914 17.3914 58.0914 13.7322C58.0914 10.3169 61.087 7.94727 65.7493 7.94727C68.4461 7.95961 71.1129 8.48097 73.5923 9.48058L71.8906 13.0354C69.9309 12.3381 67.6351 11.8154 65.6381 11.8154C63.6784 11.8154 62.6786 12.4776 62.6786 13.4882C62.6786 14.5336 63.8995 15.0215 67.118 15.649C71.7795 16.5551 74.4812 18.0884 74.4812 21.5386C74.4812 25.1282 71.5589 27.4988 66.4164 27.4988C62.9387 27.4988 60.6822 27.0458 57.7227 25.6865L59.6463 22.0961Z" fill="white"></path>
              <path d="M93.9597 23.701C93.1274 24.8657 92.0326 25.8168 90.7643 26.4767C89.496 27.1367 88.0903 27.4869 86.6615 27.4988C80.962 27.4988 76.3398 23.1427 76.3398 17.7405C76.3398 12.3037 80.962 7.94727 86.6615 7.94727C88.0985 7.948 89.5149 8.28934 90.7954 8.94344C92.0758 9.59754 93.1839 10.5459 94.0294 11.7111L90.9013 14.6049C90.4364 13.9027 89.8066 13.3257 89.0674 12.9247C88.3281 12.5237 87.5019 12.3109 86.6615 12.305C83.6033 12.305 81.1009 14.7446 81.1009 17.7418C81.1009 20.7041 83.6033 23.1437 86.6615 23.1437C87.5061 23.1386 88.336 22.9224 89.0763 22.5147C89.8166 22.1069 90.4438 21.5205 90.9013 20.8086L93.9597 23.701Z" fill="white"></path>
              <path d="M116.379 17.7403C116.379 23.1426 111.793 27.4988 106.138 27.4988C100.482 27.4988 95.8965 23.1426 95.8965 17.7403C95.8965 12.3038 100.483 7.94727 106.138 7.94727C111.792 7.94727 116.379 12.304 116.379 17.7403ZM111.656 17.7403C111.648 17.0168 111.499 16.3019 111.217 15.6367C110.935 14.9715 110.526 14.3691 110.014 13.8641C109.501 13.359 108.895 12.9612 108.23 12.6935C107.564 12.4258 106.853 12.2934 106.138 12.304C103.104 12.304 100.621 14.7437 100.621 17.7406C100.621 20.7032 103.104 23.1429 106.138 23.1429C109.207 23.1429 111.655 20.7032 111.655 17.7406" fill="white"></path>
              <path d="M137.792 7.94727V27.2113H132.806V25.9242C131.235 26.9708 129.384 27.5195 127.495 27.4983C121.791 27.4983 119.172 24.8512 119.172 18.5558V7.94727H124.159V18.555C124.159 21.5596 125.63 23.0262 128.392 23.0262C130.002 23.0621 131.569 22.5157 132.806 21.4882V7.94727H137.792Z" fill="white"></path>
              <path d="M160.134 16.7867V27.4988H155.118V16.7867C155.118 13.817 153.639 12.3674 150.86 12.3674C149.274 12.3316 147.731 12.8734 146.53 13.8879V27.4988H141.514V8.30129H146.53V9.50337C148.069 8.4698 149.896 7.9266 151.762 7.94787C157.5 7.94787 160.134 10.5639 160.134 16.7861" fill="white"></path>
              <path d="M169.663 12.0513V18.8542C169.663 22.2912 170.228 23.2833 172.701 23.2833C173.457 23.2666 174.212 23.2075 174.962 23.1061V26.7911C174.75 26.8619 173.266 27.4998 170.511 27.4998C167.296 27.4998 164.718 25.4802 164.718 21.4399V12.0513H161.998V7.97566H164.718V0.5H169.663V7.97566H175.032V12.0513H169.663Z" fill="white"></path>
              <path d="M49.3439 3.31072C49.3374 2.57527 49.6292 1.86716 50.1556 1.34068C50.6819 0.8142 51.4002 0.512019 52.1539 0.5C52.5253 0.506614 52.8918 0.584577 53.2324 0.729434C53.5729 0.87429 53.8808 1.0832 54.1386 1.34423C54.3963 1.60525 54.5989 1.91328 54.7346 2.25071C54.8702 2.58813 54.9365 2.94832 54.9294 3.31072C54.9357 3.67122 54.8687 4.02938 54.7323 4.36448C54.5959 4.69958 54.3928 5.00499 54.1348 5.26306C53.8767 5.52113 53.5688 5.72674 53.2288 5.86802C52.8888 6.0093 52.5234 6.08344 52.1539 6.08616C51.7826 6.08409 51.4153 6.01064 51.0731 5.87001C50.7308 5.72939 50.4204 5.52434 50.1594 5.26659C49.8984 5.00884 49.6921 4.70343 49.5522 4.36784C49.4122 4.03224 49.3414 3.67302 49.3439 3.31072" fill="#E23A05"></path>
              <rect x="13.03" y="35" width="49.65" height="2" fill="#096EC8"></rect>
              <rect x="62.69" y="35" width="49.65" height="2" fill="white"></rect>
              <rect x="112.34" y="35" width="49.65" height="2" fill="#E23A05"></rect>
            </svg>
          </a>
          <a class="displayToPro" href="{offer}" title="Achat discount" alt="Achat discount">
            <svg class="logo-CdiscountPro--svg" width="246" height="38" viewBox="0 0 246 38" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M19.564 18.9255C18.878 19.8924 17.9686 20.6808 16.9124 21.2242C15.8563 21.7676 14.6844 22.05 13.4956 22.0477C9.18597 22.0477 5.93605 18.7959 5.93605 14.4836C5.90358 13.4846 6.07665 12.4895 6.4446 11.5595C6.81255 10.6295 7.36761 9.78433 8.07566 9.07589C8.78371 8.36744 9.62979 7.81072 10.5619 7.43994C11.4939 7.06917 12.4923 6.89217 13.4956 6.91985C14.6843 6.91749 15.8562 7.19989 16.9123 7.74323C17.9685 8.28657 18.8779 9.07491 19.564 10.0417L19.7861 10.3572L24.2711 6.57455L24.0444 6.30646C22.7504 4.77555 21.1352 3.5457 19.3125 2.70348C17.4898 1.86126 15.5039 1.42714 13.4945 1.43168C6.05367 1.43168 0 7.28674 0 14.4836C0 21.6611 6.05367 27.5004 13.4945 27.5004C15.5012 27.5104 17.4858 27.0823 19.3085 26.2462C21.1311 25.4101 22.7477 24.1863 24.0444 22.6611L24.2711 22.3927L19.7875 18.61L19.564 18.9255Z" fill="#E23A05"></path>
              <path d="M45.6238 0.5V27.1798H40.8469V26.0136C39.2054 26.9876 37.347 27.4999 35.4558 27.4998C30.3034 27.4998 26.0723 23.4657 26.0723 17.5567C26.0723 11.5413 30.3034 7.61353 35.4558 7.61353C37.342 7.61865 39.1963 8.11768 40.8469 9.06434V0.5H45.6238ZM40.8469 21.3768V13.6629C39.5656 12.5841 37.9589 12.0079 36.3087 12.0356C33.1358 12.0356 30.7813 14.4063 30.7813 17.5556C30.7813 20.811 33.1358 23.0402 36.3087 23.0402C37.9645 23.0665 39.5746 22.4764 40.8469 21.3771" fill="white"></path>
              <path d="M54.9299 9.81055H49.3438V27.5001H54.9299V9.81055Z" fill="white"></path>
              <path d="M59.6463 22.0961C62.1251 23.1067 64.0118 23.6294 66.5273 23.6294C68.895 23.6294 69.82 22.7931 69.82 21.8173C69.82 20.736 68.6721 20.2492 65.5645 19.6218C61.236 18.7156 58.0914 17.3914 58.0914 13.7322C58.0914 10.3169 61.087 7.94727 65.7493 7.94727C68.4461 7.95961 71.1129 8.48097 73.5923 9.48058L71.8906 13.0354C69.9309 12.3381 67.6351 11.8154 65.6381 11.8154C63.6784 11.8154 62.6786 12.4776 62.6786 13.4882C62.6786 14.5336 63.8995 15.0215 67.118 15.649C71.7795 16.5551 74.4812 18.0884 74.4812 21.5386C74.4812 25.1282 71.5589 27.4988 66.4164 27.4988C62.9387 27.4988 60.6822 27.0458 57.7227 25.6865L59.6463 22.0961Z" fill="white"></path>
              <path d="M93.9597 23.701C93.1274 24.8657 92.0326 25.8168 90.7643 26.4767C89.496 27.1367 88.0903 27.4869 86.6615 27.4988C80.962 27.4988 76.3398 23.1427 76.3398 17.7405C76.3398 12.3037 80.962 7.94727 86.6615 7.94727C88.0985 7.948 89.5149 8.28934 90.7954 8.94344C92.0758 9.59754 93.1839 10.5459 94.0294 11.7111L90.9013 14.6049C90.4364 13.9027 89.8066 13.3257 89.0674 12.9247C88.3281 12.5237 87.5019 12.3109 86.6615 12.305C83.6033 12.305 81.1009 14.7446 81.1009 17.7418C81.1009 20.7041 83.6033 23.1437 86.6615 23.1437C87.5061 23.1386 88.336 22.9224 89.0763 22.5147C89.8166 22.1069 90.4438 21.5205 90.9013 20.8086L93.9597 23.701Z" fill="white"></path>
              <path d="M116.379 17.7403C116.379 23.1426 111.793 27.4988 106.138 27.4988C100.482 27.4988 95.8965 23.1426 95.8965 17.7403C95.8965 12.3038 100.483 7.94727 106.138 7.94727C111.792 7.94727 116.379 12.304 116.379 17.7403ZM111.656 17.7403C111.648 17.0168 111.499 16.3019 111.217 15.6367C110.935 14.9715 110.526 14.3691 110.014 13.8641C109.501 13.359 108.895 12.9612 108.23 12.6935C107.564 12.4258 106.853 12.2934 106.138 12.304C103.104 12.304 100.621 14.7437 100.621 17.7406C100.621 20.7032 103.104 23.1429 106.138 23.1429C109.207 23.1429 111.655 20.7032 111.655 17.7406" fill="white"></path>
              <path d="M137.792 7.94727V27.2113H132.806V25.9242C131.235 26.9708 129.384 27.5195 127.495 27.4983C121.791 27.4983 119.172 24.8512 119.172 18.5558V7.94727H124.159V18.555C124.159 21.5596 125.63 23.0262 128.392 23.0262C130.002 23.0621 131.569 22.5157 132.806 21.4882V7.94727H137.792Z" fill="white"></path>
              <path d="M160.134 16.7867V27.4988H155.118V16.7867C155.118 13.817 153.639 12.3674 150.86 12.3674C149.274 12.3316 147.731 12.8734 146.53 13.8879V27.4988H141.514V8.30129H146.53V9.50337C148.069 8.4698 149.896 7.9266 151.762 7.94787C157.5 7.94787 160.134 10.5639 160.134 16.7861" fill="white"></path>
              <path d="M169.663 12.0513V18.8542C169.663 22.2912 170.228 23.2833 172.701 23.2833C173.457 23.2666 174.212 23.2075 174.962 23.1061V26.7911C174.75 26.8619 173.266 27.4998 170.511 27.4998C167.296 27.4998 164.718 25.4802 164.718 21.4399V12.0513H161.998V7.97566H164.718V0.5H169.663V7.97566H175.032V12.0513H169.663Z" fill="white"></path>
              <path d="M49.3439 3.31072C49.3374 2.57527 49.6292 1.86716 50.1556 1.34068C50.6819 0.8142 51.4002 0.512019 52.1539 0.5C52.5253 0.506614 52.8918 0.584577 53.2324 0.729434C53.5729 0.87429 53.8808 1.0832 54.1386 1.34423C54.3963 1.60525 54.5989 1.91328 54.7346 2.25071C54.8702 2.58813 54.9365 2.94832 54.9294 3.31072C54.9357 3.67122 54.8687 4.02938 54.7323 4.36448C54.5959 4.69958 54.3928 5.00499 54.1348 5.26306C53.8767 5.52113 53.5688 5.72674 53.2288 5.86802C52.8888 6.0093 52.5234 6.08344 52.1539 6.08616C51.7826 6.08409 51.4153 6.01064 51.0731 5.87001C50.7308 5.72939 50.4204 5.52434 50.1594 5.26659C49.8984 5.00884 49.6921 4.70343 49.5522 4.36784C49.4122 4.03224 49.3414 3.67302 49.3439 3.31072" fill="#E23A05"></path>
              <path d="M188.77 4.22266H178.758V27.4985H184.027V21.6353H187.826C194.684 21.6353 198.31 18.536 198.31 12.6716C198.308 7.3004 194.832 4.22266 188.77 4.22266ZM192.804 13.0245C192.804 15.7746 190.817 17.352 187.353 17.352H184.027V8.6641H187.994C192.18 8.6641 192.804 11.3952 192.804 13.0245V13.0245Z" fill="#E23A05"></path>
              <path d="M215.891 20.56C219.044 19.1687 220.643 16.5126 220.643 12.6664C220.643 7.30118 217.13 4.22266 211.005 4.22266H200.172V27.4947H205.497V21.6324H209.744C210.011 21.6324 210.305 21.6325 210.563 21.611L215.194 27.4985H221.586L215.891 20.56ZM215.081 13.023C215.081 15.7929 213.073 17.3828 209.571 17.3828H205.495V8.66461H210.22C214.45 8.66335 215.082 11.394 215.082 13.023H215.081Z" fill="#E23A05"></path>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M227.356 6.41026C229.208 5.07627 231.411 4.31628 233.691 4.22473C236.837 4.16597 239.877 5.35742 242.146 7.53784C244.416 9.71825 245.728 12.7097 245.795 15.8564C245.796 18.139 245.125 20.3713 243.867 22.2756C242.608 24.1799 240.818 25.6722 238.719 26.5669C236.62 27.4616 234.304 27.7193 232.059 27.3078C229.815 26.8962 227.741 25.8338 226.095 24.2524C224.449 22.6711 223.305 20.6407 222.804 18.4138C222.303 16.1869 222.467 13.8618 223.276 11.7276C224.086 9.59335 225.504 7.74426 227.356 6.41026ZM234.158 23.0221C238.113 23.0221 241.32 19.8156 241.32 15.8603C241.32 11.9049 238.113 8.69849 234.158 8.69849C230.203 8.69849 226.996 11.9049 226.996 15.8603C226.996 19.8156 230.203 23.0221 234.158 23.0221Z" fill="#E23A05"></path>
              <rect y="35.5" width="81.9314" height="2" fill="#096EC8"></rect>
              <rect x="81.9316" y="35.5" width="81.9314" height="2" fill="white"></rect>
              <rect x="163.863" y="35.5" width="81.9314" height="2" fill="#E23A05"></rect>
            </svg>
          </a>
        </h1>
      </div>
      <div class="l-header__fill">
        <div class="l-header__search">
          <div class="c-search js-search">
            <div class="c-search__search u-width-100%" data-theme="light">
              <div class="c-form-field js-form-type-search">
                <label class="c-form-label u-mb-xs u-visually-hidden" for="search">Rechercher un produit :</label>
                <div class="c-form-control c-form-control--rounded c-form-control--md modal-search">
                  <input type="search" id="search" name="search" class="c-form-input type--search js-search__input" placeholder="Qu'est-ce qui vous ferait plaisir ?" autocomplete="off" autocapitalize="off" autocorrect="off" spellcheck="false" aria-label="Qu'est-ce qui vous ferez plaisir ?" aria-controls="search-results" role="search" data-dpt="" onkeyup="this.value?$('.js-empty-field').show():$('.js-empty-field').hide();">
                  <button tabindex="0" title="Effacer" aria-label="Effacer" class="btn btn--reset c-form-control__btn js-empty-field" onclick="$('input', this.parentNode).val('') &amp;&amp; $(this).hide() &amp;&amp; $('.js-search').removeClass('js-search--has-results') &amp;&amp; $('.js-search__results').addClass('u-visually-hidden');" style="display: none;">
                    <span class="u-visually-hidden">Effacer</span>
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 256 256">
                      <path d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z"></path>
                    </svg>
                  </button>
                  <button type="button" class="btn btn--reset form-icon js-search__icon">
                    <span class="u-visually-hidden">Rechercher</span>
                    <svg class="icon icon--24" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 256 256">
                      <path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
            <div id="search-results" class="c-search__results u-visually-hidden js-search__results" role="searchbox" aria-label="Résultats de la recherche">
              <div class="c-search__wrapper">
                <div class="c-search__resultbox u-bg--white u-p-md">
                  <div class="u-flex u-justify-between u-text--body u-mb-sm">
                    <span class="u-text--bold js-results-title">Vos dernières recherches</span>
                    <span class="link link--blue js-history-delete">Supprimer l'historique</span>
                  </div>
                  <ul id="search-history" class="c-search__resultlist js-search__history" aria-label="Recherche dans votre historique"></ul>
                  <ul id="results" class="c-search__resultlist js-search__suggestions" aria-label="Suggestions de recherche"></ul>
                </div>
                <div class="c-search__resultbox u-bg--white u-p-md js-search__cards"></div>
                <div class="c-search__resultbox c-search__resultbox--pub js-search__headband"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="l-header__right">
        <div class="l-header__access">
          <div class="c-access__cdav js-access__cdav">
            <a href="{offer}" rel="nofollow" class="reset btn-access btn-access__cdav js-trigger__menu" data-template="CdavTooltip">
              <svg class="icon icon--access" width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M24.1989 6.92705L21.2877 10.5594C20.698 9.78919 19.9483 9.15589 19.0904 8.70313C18.2324 8.25038 17.2865 7.98893 16.3178 7.93678C15.56 7.95311 14.8133 8.12206 14.1222 8.43353C13.4312 8.745 12.8101 9.19259 12.296 9.74956C11.7818 10.3065 11.3853 10.9614 11.13 11.6751C10.8747 12.3888 10.766 13.1467 10.8102 13.9033C10.7587 14.6669 10.8618 15.4329 11.1131 16.1557C11.3645 16.8785 11.7591 17.5432 12.2732 18.11C12.7874 18.6767 13.4106 19.134 14.1055 19.4545C14.8005 19.7749 15.5529 19.9519 16.3178 19.9748C18.2265 19.8522 20.0109 18.9859 21.2877 17.562L24.2251 20.7878C23.1742 21.9131 21.9117 22.8201 20.5099 23.4569C19.108 24.0937 17.5944 24.4478 16.0555 24.4989C14.6693 24.5192 13.2934 24.2579 12.0112 23.7307C10.729 23.2035 9.56718 22.4215 8.59612 21.4321C7.62506 20.4426 6.86499 19.2663 6.36198 17.9745C5.85897 16.6826 5.62348 15.302 5.66978 13.9165C5.64791 12.5309 5.9071 11.1552 6.43171 9.87256C6.95632 8.58992 7.73545 7.42692 8.72206 6.4538C9.70867 5.48067 10.8823 4.71761 12.172 4.2107C13.4617 3.70379 14.8408 3.46354 16.226 3.50447C17.7152 3.51957 19.1867 3.82984 20.5552 4.41732C21.9237 5.0048 23.1622 5.85783 24.1989 6.92705Z" fill="white"></path>
              </svg>
              <span class="btn-access__label">Cdiscount à volonté</span>
            </a>
          </div>
          <div class="c-access__compte js-access__compte">
            <a href="{offer}" rel="nofollow" class="reset btn-access btn-access__compte js-trigger__menu has-animation" data-template="AccountTooltip" >
              <span class="c-icon c-icon--notif">
                <svg class="icon icon--access" xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="#FFF" viewBox="0 0 256 256">
                  <rect width="256" height="256" fill="none"></rect>
                  <circle cx="128" cy="96" r="64" fill="none" stroke="#FFF" stroke-miterlimit="10" stroke-width="16"></circle>
                  <path d="M31,216a112,112,0,0,1,194,0" fill="none" stroke="#FFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
                </svg>
                <svg class="c-access__welcome u-hide u-block@md js-access__welcome" width="57" height="24" viewBox="0 0 57 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M2 0C0.895431 0 0 0.89543 0 2V16C0 17.1046 0.89543 18 2 18H14.0076L12.8841 23.7034L21.4046 18H55C56.1046 18 57 17.1046 57 16V2C57 0.895431 56.1046 0 55 0H2Z" fill="#FFFFFF29"></path>
                  <text x="4" y="12" style="color: white; fill: white; font-size: 12px; font-family: 'Hind Madurai', 'Hind-fallback', Arial, sans-serif;">Bonjour !</text>
                </svg>
                <span class="c-icon__badge c-badge c-badge--icon c-badge--white u-visually-hidden">
                  <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                    <rect width="256" height="256" fill="none"></rect>
                    <polyline points="40 144 96 200 224 72" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline>
                  </svg>
                </span>
              </span>
              <span class="btn-access__label">Connectez-vous</span>
            </a>
          </div>
          <div class="c-access__basket">
            <a href="{offer}" rel="nofollow" class="reset btn-access btn-access__basket js-trigger__menu" data-template="BasketTooltip" >
              <span class="c-icon c-icon--notif">
                <svg class="c-icon__icon icon icon--access" xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="#FFF" viewBox="0 0 256 256">
                  <rect width="256" height="256" fill="none"></rect>
                  <circle cx="80" cy="216" r="16"></circle>
                  <circle cx="184" cy="216" r="16"></circle>
                  <path d="M42.3,72H221.7l-26.4,92.4A15.9,15.9,0,0,1,179.9,176H84.1a15.9,15.9,0,0,1-15.4-11.6L32.5,37.8A8,8,0,0,0,24.8,32H8" fill="none" stroke="#FFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
                </svg>
                <span id="itemCart" class="c-icon__badge c-badge c-badge--promo">0</span>
              </span>
              <span class="btn-access__label">Mon panier</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  <div class="c-layer c-layer--open-left c-layer--header c-layer--modal js-layer js-layer--modal" id="HeaderStoreLayer">
    <div class="c-layer__content u-bg--white u-flex u-flex-column" role="alertdialog" aria-labelledby="LayerTitle-HeaderStoreLayer">
      <header class="c-layer__header u-bg--neutral-500">
        <h2 id="LayerTitle-HeaderStoreLayer" class="u-text-truncate u-text--white">Nos rayons</h2>
        <button class="c-layer__close-btn js-layer__close js-tab-focus">
          <span class="u-visually-hidden">FERMER</span>
          <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 256 256">
            <path d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z"></path>
          </svg>
        </button>
      </header>
      <div class="c-layer__body u-p-md js-layer__body"></div>
    </div>
  </div>
</header>

<style>
    .c_small_mob {
        font-size: 16px;
    }

    @media (max-width: 390px) {
        .c_small_mob {
            font-size: 14px;
        }
    }
</style>


<div class="overPa1600 c-banner js-banner" style="background: #096ec8; text-align: center;">
  <div class="container-fluid u-position-relative">
    <div class="c-banner__content" style="color: white; padding-top: 8px; padding-bottom: 8px; align-items: center;">
      <span class="c_small_mob"> 🚨 <strong>Baisses de prix</strong> 🚨 : </span>
      <span class="c_small_mob"> jusqu'à -60€ 
        <!-- <a href="{offer}" style="color: white;">
          <strong>Voir la sélection</strong>
        </a> -->
        <strong>
            <label class="timer"> <span class="free"></span> 0<span id="min"></span> <span class="free">:</span> <span id="sec"></span></label>
            <script>
                var sec = document.querySelector('#sec');
                var min = document.querySelector('#min');
                var secund = 60;                
                var minute = 10;

                sec.innerText = (--secund);
                min.innerText = (--minute);

                setInterval(function() {
                    if (secund <= 1) secund = 60;
                    sec.innerText = (--secund);
                }, 1000);
                setInterval(function() {
                    if (minute <= 1) minute = 10;
                    min.innerText = (--minute);
                }, 60000);
            </script>
        </strong>
      </span>
    </div>
  </div>
</div>