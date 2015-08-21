/*!
 * Contact Buttons Plugin Demo 0.1.0
 * https://github.com/joege/contact-buttons-plugin
 *
 * Copyright 2015, José Gonçalves
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */
 
// Google Fonts
WebFontConfig = {
  google: { families: [ 'Lato:400,700,300:latin' ] }
};
(function() {
  var wf = document.createElement('script');
  wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
    '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
  wf.type = 'text/javascript';
  wf.async = 'true';
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(wf, s);
})();

// Initialize Share-Buttons
$.contactButtons({
  effect  : 'slide-on-scroll',
  buttons : {
    'facebook':   { class: 'facebook', use: true, link: 'https://www.facebook.com/FederalManagementLtd', extras: 'target="_blank"' },
    'linkedin':   { class: 'linkedin', use: true, link: 'https://www.linkedin.com/company/federal-management-ltd' },
    'google':     { class: 'gplus',    use: true, link: 'https://plus.google.com/105240075023583364042/' },
    'twitter':   { class: 'linkedin',      use: true, link: 'https://twitter.com/fedmanltd', title: 'Check our our Twitter page!' },
    'phone':      { class: 'phone separated',    use: true, link: '0800 043 6922' },
    'email':      { class: 'email',    use: true, link: 'enquiries@federalmanagement.co.uk' }
  }
});