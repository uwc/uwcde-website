<?php
/**
 * SVG code to output the logo.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package UWC_Website
 */

if ( get_custom_logo() ) :
	uwc_website_custom_logo();
else :
?>

<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="custom-logo-link" rel="home" itemprop="url">
	<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 983.75 80.09"><defs><style>.cls-1{fill:#009692;}.cls-2{fill:#0064a6;}</style></defs><title>Artboard 2</title><path class="cls-1" d="M39.7,9.06h-.32c-1.27.36-2.56-.33-4,1.12a2.59,2.59,0,0,0,1.15.73C37.57,10.3,39.58,10.62,39.7,9.06Z"/><path class="cls-1" d="M34.61,41.88a6,6,0,0,0,4,1.08c.19,0-.67-1.38-4.17-2Z"/><path class="cls-1" d="M49.1,51,45,49.76l-1-1.86-.42-.25L42,47.17A6.88,6.88,0,0,0,38.81,45l-1-.09-2.2.9c-1,.08-1.18-1.2-1.18-1.2-.06-.32,0-.47-.11-.83s-.67-.46-1.4-.25a2.63,2.63,0,0,0,.15-2.19c-.81,0-1.1.92-1.64,1.37-1.25-.35-2.09-.26-1.74-.66s.25-3,.67-2.88c1.19.19,3.25-1.92,4.44,0,.2.53.47,1.3,1.25.93,0-.65.38-1.69-.38-2.06-.64,0,3.63-2.88,5.19-4.81.87-.52,2.06,1,2.66-.46l-.09-.58-1.63-1.06c-.16-.47,2.11-.81,2.27-.38a2.63,2.63,0,0,0,2.37,2.16c-.49-1.31.61-3.18.16-3.8l-1.25-1.58-.11-.37.19-1.06s.06-.73-.15-.94c-.53-.53-1.34.89-2,.85,0,0,.23-1.74-1.15-2-.71-.14-1.47,0-1.55.8-.41,1.69-1,3.54-2.54,4.49.62-2-1.54-2.7-2.13-4.25l0-.33,1.66-2.1.38-.09.67.38.39.22,1.3.16.38-.32c-1.54-1.54,1.29-2.32,1.82-3.38l1.31,1.29c.75.91-2.13,1.16-2.54,1.93,0,0,2.25,2.8,4.48.16l.92-.88c0-.92-.9-1.69-1.47-2.49C44.58,18.41,45,17,44.21,16c-2-1-2.68-.48-2.68-.48a.76.76,0,0,0,0,.13c-.07.42-.24,1.69.12,2.15a.46.46,0,0,1-.11.44c-.88,1.06-1.07,1.1-1.29,1.25-2-1.24.91-2.53.62-3.9-2-1-2.55.23-2.55.23-.23.39.1,2.61-.28,2.79-1.89.89-2.3-.23-2.36-.56.56-.48,1.84-.4,1.83-1.41s.08-1.84-.75-2.25c-1.08.21-2.36-3.21-4.33-2.09-.16.68-.8,1.35-.55,2.11l.48.1L34,14.11c.81.52-.46,1.09-.83,1.61-.94,1,.87,1.57,1.23,2.25a4.11,4.11,0,0,1-2,.32c1.19-2-1-2.62-2.09-4,0,0-.17-.19-.37,0-.55.62-2.13.79-2.51.34l-.89-1.09H26c-1.41.28-1.48-.71-2.62-.49-.51.37-.68.17-1.52.68a.92.92,0,0,1-1.22-.26A22,22,0,0,0,18,15.44c-1.26,1.08-1.7,1.51-2.69,2.5-.61.62,1,2.12,1,2.75s-2.09.56-2.87,1.21v.17c1.81-.36,1.33.8,5.43-1.71.73-.28,2.24-.76,2.62.33a13.59,13.59,0,0,1,1,2.24c1,1.58-1,2.87.36,4.48.63.79.24,3-.62,3.8a2.85,2.85,0,0,0,.54,3.21c1.19,1.65.73,3.89,1.92,5.54.16.19.29.72.66.4,0-1-.66-1.76-.41-2.73.62,1.33,2.05,2.31,1.64,3.91,0,0-.51.61.41.79.9.69,1.25,1.86,3.65,1.63,0,0,.54,0,.64.37a5,5,0,0,0,3.64,2.34s.32.16.39,1.1a3.53,3.53,0,0,1-1.57,2.57s-.57.6,2,4c.74.31,1.68.31,2.21,1s-1,1.87-1.1,2.9c0,.44.73,1,.69,1.46a10.35,10.35,0,0,1-.25,1.3,22.78,22.78,0,0,0-.24,3.81c0,.31-.38.91-.09.91,1.28.22.16,1.16.09,1.76a5.52,5.52,0,0,0,2,3.54l.62-.66c.21-.28-.12-.54-.62-.86,0-.69,1-1.32.33-2,.74-1.37.7-4,3-3.77,0-.69-.7-1.17-.65-1.77,0,0,1.12,1.33,3-1,.29-.35.11-1.72.11-1.72.13-1,2.94-2,2.94-2,1-.54,2.74-4.95,1.68-6Z"/><path class="cls-1" d="M39.74,13.43c.32,1,3.49,1.25,4.63,1.56l.41-.4c-1.23-1.6-2.7-2.21-4.81-2.76l-.19,0C39.64,11.94,39.51,12.45,39.74,13.43Z"/><path class="cls-1" d="M35.72,12.62l.2.26a1,1,0,0,0,.24.31v0c.61.48,1.54-.24,2.38-.14.7-.36.53-1.87.24-1.92a4.59,4.59,0,0,0-3.61.48S35,12.09,35.72,12.62Z"/><path class="cls-1" d="M56.23,13.42c-.75-1.5-1.56.25-2.22-.3L53,9.34,50.42,10c-1.19,1-2.77-.35-2.77-.35A14.71,14.71,0,0,1,46.74,7a11.78,11.78,0,0,0-3.44,3.85c-.66-.8-1.19-2.09-2.54-1.45v.16c.82.64,1.11,2.89,2.47,1.93a3.1,3.1,0,0,1,1.14.88c-.25.2-.74.16-.9.4l2,1.92c1.52-.55,1.06-1.92,1.72-2.81a11.33,11.33,0,0,1,2.79-.32c.41.16.91.64.74,1L48.8,12.5c-.45.36-.16,1.13-.25,1.53.37.44-.45,1.28.41,1.28,2.33.32,1.53,3,1.42,3.41a16.55,16.55,0,0,0-1.18,4.22s.07,2.34.25,3.45a2.1,2.1,0,0,0,2.2-.81l.47-.55a8,8,0,0,0,1.26-1.86,1.73,1.73,0,0,1,1.07-.77c2.46.74,2.37-.84,3.47-1.27.33.06.22-1.13.11-1.56s.29-.59.54-.77C60,18,60.42,17.56,59.74,16,59.07,15.22,56.92,15.06,56.23,13.42Z"/><path class="cls-1" d="M103.16,53.54c0,1-.41,2.16-.17,3,.33.21.82.6,1.23.48l1.47-4.08-.66-.65C104.09,52,104.22,53.66,103.16,53.54Z"/><path class="cls-1" d="M110.82,45.42h.25c.82-.2.45-1.12.65-1.68-.16-.25-.44-.21-.65-.32A5.77,5.77,0,0,0,110.82,45.42Z"/><path class="cls-1" d="M84.25,29.66c.17,0,.7-.24.88-.31s.3,0,.3,0L85,30.46l1.33-.57a2,2,0,0,0,.65-.35.77.77,0,0,0,.24-.56,3.61,3.61,0,0,1-1.35-2.16c-.3-.83-.9-.67-1.12.1-.14.42.41.72.54,1.32a.67.67,0,0,0-.32-.33.47.47,0,0,0-.56.08c-.23.41-.6,1-.52,1.27A.54.54,0,0,0,84.25,29.66Z"/><path class="cls-1" d="M83.14,22.58l-.17-.4c-1.18-.08-2.12.44-3.27.48.12.48.61.83.9,1.27a5.92,5.92,0,0,0,2.61-.56C83.14,23.14,82.94,22.82,83.14,22.58Z"/><path class="cls-1" d="M101.27,17.94c0-.28-.29-.48-.41-.72-.82-1.75,1-2.67,1.72-3.92a1.09,1.09,0,0,0-.74-.71c-.61.52-1.59,1-1.71,1.84a10.48,10.48,0,0,1-.73,3.36A4.28,4.28,0,0,0,101.27,17.94Z"/><path class="cls-1" d="M118.41,44.22a6.16,6.16,0,0,1,.52,1.16c.37.85.66.36.66-.38-.08-1-1.08-1-.92-1.94l1.14.72a12.61,12.61,0,0,0,1.06-1.44c.12-1-.5-1.8-.74-2.72a6.1,6.1,0,0,1,2-.51,9.72,9.72,0,0,0,1.87-.6,9.62,9.62,0,0,0,.83-1.42A11.82,11.82,0,0,0,125,35.3c0-.07-.15-.49-.17-.56h0c-.52-1.27-1.64-2.09-1.23-3.25.94-.28.84,0,1.57.38a2.11,2.11,0,0,1,.68,2c.15.5.24.32.37.45a3.29,3.29,0,0,0,.72-1.44c0-.56-1.12-1.91-1.12-1.91a1.91,1.91,0,0,0,.95-1.44c.15-.84,0-1.78.61-2.48.49.56.61,2.28,1.71,1.52-.82-1.64-1.09-3.62-1.85-4.44l-.06-.07h0a2.31,2.31,0,0,0-1.76-.61,7.13,7.13,0,0,1,.49-2.32c1.06-.54-1.55-1.42-.58-2.23l-.17-.18h-1.31c-2.26-2.67.67-4.48-2.69-6.2-.53.6-.89-.43-1.72-.15-1,.14-1.52-1.33-1.64-1.93l-2-.74c-.33,0-2.45-.56-3.33-.64-1.47-.21-1.92,2.52-3.34,2.46-2.2.16-1.06,2.79-2.53,3.83l-2,.16L104,18.26l-1.79-.4L102,19.06c-1.15-.29-1.52.88-2.37,1.28-.37-.24-.29-.83-.82-.8a3.09,3.09,0,0,1-2,2.72c-.12-.28-.54-.2-.49-.56l.9-.8a4.78,4.78,0,0,0-3.84-2.16,21.05,21.05,0,0,0-4.57,5.36,8.43,8.43,0,0,0-.33,2.48h1.39c.45.32.46.91,1.06,1,1.35.36.78-1.17,1.15-1.76A1.68,1.68,0,0,1,92,24.14h0c.31-.69.89-1.35,1.21-1.95a11.78,11.78,0,0,1-.45,2h0a3.82,3.82,0,0,0-.12.76,6.24,6.24,0,0,0,2.13.24.27.27,0,0,1,.32.24c-1.59-.2-1.88,1.64-2.61,2.56l-2.29.32c-.45-.2-.53-1-1.06-1l-.16,1.35a4.3,4.3,0,0,0-1.06.79h0a3.13,3.13,0,0,1-1.63,1c-.29.21-.7.61-1,.8.17.52,1,.61,1.31,1,.16,1.44-1.4.86-2.26,1.09l0,.19V36l2.7.08a11.82,11.82,0,0,1,.31-1.15A7.91,7.91,0,0,1,88,33.38l1.8-.33c.54.57,1.65,1,1.86,1.8a1.46,1.46,0,0,1,0,.53,2.64,2.64,0,0,0,1-.44l.44-.28c-.33-1.08-1.63-1.4-1.72-2.49A8.47,8.47,0,0,1,94,34.9a5.16,5.16,0,0,1,.18.49,2,2,0,0,0,.89-.17L95,34.94,94.74,34c.24-.24.61-.2.89-.32l.48,1.24.25.68,2,.15c.9-.2.69.93.65,1.36-1.76,1.47-3.23-1.12-5.23-.08,0,.28.08.72-.08.88a6.27,6.27,0,0,0-2.69-1l-.33-1.28c-1.8.15-3.72,1-5.55.8-1.88,1.27-2.62,1.35-3.35,3.35l-.21,3.54,1.83,3.15,3.19,1.23L88.35,47c.74.84,3.57,0,2.38,1.92-.67.5,2.28,4.45,1.56,6.8,1.1,1.44,1.43,3.15,2.07,4.68l3.76-.73a7.78,7.78,0,0,1,2.09-3.07c-.45-1.56,1-2.32,1.8-3.36.53-1.29-.65-2.16-.25-3.36,1-1.92,4.66-4.45,3.51-5.6h-.51a5.59,5.59,0,0,0-2.47-.08c-1.05-2-3.88-3.78-3.38-5.76a42.08,42.08,0,0,1,3.56,5l.27.48a11.67,11.67,0,0,0,4.82-3.28l-1.07-1.12-1.79.48a4.24,4.24,0,0,1-1.06-2c1.3.57,2.49,1.41,4,1.44.26.37.5,1.55.72,1.95s.43.06.59.36.62,1.72.76,2c.28.53.66.38.94.29a14,14,0,0,1,1.4-3,1.64,1.64,0,0,1,1.12-.84c.45.09.39-.87.77-1.15.2-.08.58-.2.74.08.78.68.55.79.91,1.84.33.08.51.74,1.13.48l1.09,1.82C117.93,43.49,118.1,43.64,118.41,44.22Z"/><path class="cls-1" d="M127.75,55.84a1.44,1.44,0,0,0,0-.79,6.58,6.58,0,0,0,0-.84c-.06-.26-.16-.35-.21-.63s0-.55,0-.81c-.07,0-.17,0-.24,0a4.12,4.12,0,0,0-.18-1.51c-.51.06,0-1.62-.16-1.91-.08,0-.31.31-.39.65a5.56,5.56,0,0,0-.4,1,4.2,4.2,0,0,1-.44.94c-.15,0-.68-.5-.57-.92.06-.23.35-.77.09-1-.45-.4-1.5.25-1.68.65a1.15,1.15,0,0,1,.24.61,1.47,1.47,0,0,1-1-.2c-.47.34-.49.45-1,.81a3.39,3.39,0,0,1-.74.55,5.48,5.48,0,0,0-.77.23c-.72.41-.52,1-.56,1.58a5.68,5.68,0,0,1-.48,1.57c-.13.31-.25.58.09.85s1.53-.5,2.09-.78a2.28,2.28,0,0,1,.94-.24c.37,0,.56,0,.76.25a3.64,3.64,0,0,1,.47,1,3.68,3.68,0,0,1,.37-.2c0,.55-.15,1.25.41,1.54a3.93,3.93,0,0,0,1.69.1,1.79,1.79,0,0,1,.17-.84,2.73,2.73,0,0,1,.46-.53C127,56.59,127.54,56.3,127.75,55.84Z"/><path class="cls-1" d="M127.88,59.16c-.44.21-1.17.13-1.33.73.37.53.51-.25,1.12-.29l.58-.08c.05-.17.65-.83.54-1.17C128.52,58.42,127.92,58.6,127.88,59.16Z"/><path class="cls-1" d="M129.71,57.57c0-.14,0-.78-.27-.7s.08.88-.44.91c-.15.05-.76.12-.2.28s.46.7.75.45c.49-.42.79-.27.68-.64A5,5,0,0,1,129.71,57.57Z"/><path class="cls-1" d="M117.6,45h0s0,0,0,0Z"/><path class="cls-1" d="M119.81,48.15a.88.88,0,0,0,.54.19,8.68,8.68,0,0,0,2,.07,5.79,5.79,0,0,1-2.4-.69,1.79,1.79,0,0,0-.29-.88s-.6-.69-.7-.8a4.46,4.46,0,0,1-.68-.8c-.13-.18-.65-.85-.71-.23,0,.46.39.67.83,1.39C118.56,46.56,119.62,48,119.81,48.15Z"/><path class="cls-1" d="M122.39,44.94c-.14-.12-.42.05-.58.17-.73.61-.91.8-.91.8-.37.25-.18.5-.16.83,0,.68,0,1,1.12.82a2.8,2.8,0,0,1,.74-1.73C122.16,45.46,122.63,45.22,122.39,44.94Z"/><path class="cls-1" d="M125.82,47l-.56.11c0,.15-.39.17-.3.34s.54.18.58.3c.22.68.13,1.57.65,1.46.08-.14.21-.25.19-.35.71-.13,1.1.91,1.7.73,0-.29-.32-.57-.42-.83a2.22,2.22,0,0,0-.45-.78c-.16-.2-.85-.34-1.09-.46S126.07,47.12,125.82,47Z"/><path class="cls-1" d="M123.43,46.45c0-.16-.15-.2-.27-.35-.24,0-.24.14-.39.22a.7.7,0,0,1-.09.23c-.13.24-.35.22-.3.76,0,.29.22.42.47.54a.74.74,0,0,0,.17-.53,1.21,1.21,0,0,1-.14-.7C123.18,46.39,123.26,46.53,123.43,46.45Z"/><path class="cls-1" d="M124.28,42.62c.08-.15-.08-.59-.08-.59a9.61,9.61,0,0,0-.77-1.69c-.16-.08-.47,0-.49.19a6.92,6.92,0,0,0,.36,1.13s0,.7.1.82L124,43S124.2,42.77,124.28,42.62Z"/><path class="cls-1" d="M124.2,44.91a4.41,4.41,0,0,0,.35-.37,3.53,3.53,0,0,0,.27-.64s-.12-.73-.57-.48-.65.68-.55.82Z"/><path class="cls-1" d="M124.23,58.77c-.28.16-.4.42-.34.51l.3.41a3.09,3.09,0,0,0,.22-.23,2.5,2.5,0,0,0,.18-.4S124.51,58.61,124.23,58.77Z"/><path class="cls-1" d="M130.38,30.16a3.77,3.77,0,0,0-.62-.66l0,0a2,2,0,0,0-.28.66c0,.29.26.33.3.55.1.49-.81,1.12-1.21,1.39-.66.45-.78.36-.86,1.2,0,.3-.28,1.7.57,1.08.58-.42.11-1.11.22-1.56l.4-.3c.44-.11.62.22.56.59a1,1,0,0,0,.41-.08,3.85,3.85,0,0,0,.7-1.15A2.39,2.39,0,0,0,130.38,30.16Z"/><polygon class="cls-2" points="298.64 9.67 281.44 56.99 268.36 9.71 254.92 9.71 257.08 17.15 242.64 56.99 229.56 9.71 216.13 9.71 234.61 72.9 243.43 72.9 260.21 27.78 273.4 72.9 282.22 72.9 306.34 9.67 298.64 9.67"/><path class="cls-2" d="M331.78,9.55a32.41,32.41,0,0,0-12,6.3A30.49,30.49,0,0,0,311.57,27c-2,4.57-3.07,10.15-3.07,16.77a32.52,32.52,0,0,0,2.37,12.49,27.9,27.9,0,0,0,6.85,10,31.06,31.06,0,0,0,11,6.52,43.66,43.66,0,0,0,14.78,2.33q11.57,0,19.15-3.76l1.94-7.52-.48-.29a19.91,19.91,0,0,1-3.39,2.73,24.55,24.55,0,0,1-4.47,2.31A30.7,30.7,0,0,1,351.4,70a22.88,22.88,0,0,1-4.85.55A24,24,0,0,1,338.1,69a20.68,20.68,0,0,1-7.55-5,26,26,0,0,1-5.37-8.78,36,36,0,0,1-2-12.89,40.18,40.18,0,0,1,2-13.44,27.56,27.56,0,0,1,5.27-9.29,21.14,21.14,0,0,1,7.28-5.45,19.49,19.49,0,0,1,8-1.8c9,0,12.88,4.62,14.81,9h1.55L365.12,12a24.4,24.4,0,0,0-3.49-1.55,44.19,44.19,0,0,0-4.9-1.48c-1.71-.41-3.5-.74-5.35-1a37.08,37.08,0,0,0-5.21-.39,51,51,0,0,0-14.39,2"/><path class="cls-2" d="M206.6,44.65l0-35h-6.86V47.93c0,6.73-2.83,21.88-17.81,21.88-12.46,0-14.08-12-14.08-27.53l0-32.62H155l0,41.16c0,11.78,7.85,24.09,24.19,24.09,14.4,0,27.42-4.92,27.42-30.25"/><path class="cls-2" d="M101.33,0A40,40,0,0,0,65.79,58.49a31.85,31.85,0,0,0,2.87-4.87A35.54,35.54,0,1,1,76.2,64.89a44.06,44.06,0,0,1-2.89,3.74A40,40,0,1,0,101.33,0Z"/><path class="cls-2" d="M75.58,21.59a31.71,31.71,0,0,0-2.84,4.82,35.52,35.52,0,1,1-7.5-11.26,43.85,43.85,0,0,1,2.84-3.67,39.93,39.93,0,1,0,7.5,10.11Z"/><path class="cls-2" d="M413.19,72.65H399.08V9.39H412.8c24.09,0,34.46,13.54,34.46,31S437,72.65,413.19,72.65Zm.86-56.73h-8v50.2h7.78c19.49,0,26.21-12.1,26.21-25.82C440.07,27.05,432.1,15.92,414.05,15.92Z"/><path class="cls-2" d="M458.33,72.65V9.39h31l-2.69,6.53H465.34V37h21.12v6.43H465.34V66.12h24.29v6.53Z"/><path class="cls-2" d="M542,67.37c-3.74,3.74-9.5,6.24-18,6.24-8,0-13.25-2.3-16.7-5.57-5.09-5-6.14-12.38-6.14-18.14V9.39h7V50c0,4.32,1,9.6,4.51,13.15,2.4,2.5,6,4.13,11.52,4.13,6,0,10-1.63,12.58-4.22,2.88-3.07,3.94-7.49,3.94-12.48V9.39h7V51.53C547.78,57.29,546.15,63.14,542,67.37Z"/><path class="cls-2" d="M600.22,15.92h-18V72.65h-7V15.92H557.12V9.39h45.6Z"/><path class="cls-2" d="M622,73.61a30.28,30.28,0,0,1-17.28-5L608,63a24.56,24.56,0,0,0,13.82,4.42c5.76,0,12.58-2.78,12.58-9.5,0-11.13-15.17-13.44-22.94-21.79A16.08,16.08,0,0,1,607,24.65c0-8.93,6.72-15.74,18.24-15.74a29.93,29.93,0,0,1,14,3.07v7.49a25.85,25.85,0,0,0-13.82-4.13c-6.14,0-11.52,2.5-11.52,8.64,0,14.11,28,14.21,28,33.21C641.93,67,633.39,73.61,622,73.61Z"/><path class="cls-2" d="M679.49,73.61c-18.72,0-30.33-13.44-30.33-31.87S662,8.91,680.64,8.91c7.58,0,13.25,1.92,16.13,3.74v7.49a27.57,27.57,0,0,0-16.41-4.9c-14.11,0-23.71,11.33-23.71,26,0,15.07,8.83,25.92,23.61,25.92a31.83,31.83,0,0,0,14.88-4l2.11,5.76A36.2,36.2,0,0,1,679.49,73.61Z"/><path class="cls-2" d="M750.43,72.65V43.75H715.78V72.65h-7V9.39h7V37.32h34.65V9.39h7V72.65Z"/><path class="cls-2" d="M772.34,72.65V9.39h7V66.12h24v6.53Z"/><path class="cls-2" d="M854.18,72.65l-6.53-16.89H822.22l-6,16.89h-7L833.35,9.2h3.94l24.29,63.45ZM837.67,28.11a72.67,72.67,0,0,1-2.4-7.87h-.1a77.57,77.57,0,0,1-2.5,7.78l-7.87,21.5h20.35Z"/><path class="cls-2" d="M914.13,72.65,882.07,30c-3.74-5-5.47-7.39-6.62-9.89h-.19c.1,2.11.19,4.32.19,7.68V72.65h-7V9.39h7.29l30.72,41.08c4.32,5.76,6,8.16,7.2,10.66h.19c-.1-2.11-.19-4.32-.19-7.68V9.39h7V72.65Z"/><path class="cls-2" d="M949.67,72.65H935.56V9.39h13.73c24.09,0,34.46,13.54,34.46,31S973.48,72.65,949.67,72.65Zm.86-56.73h-8v50.2h7.78c19.49,0,26.21-12.1,26.21-25.82C976.55,27.05,968.59,15.92,950.54,15.92Z"/></svg>
</a>
<?php endif; ?>
