<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup templates
 */
?>

<header id="top" class="jmd-header" data-component="header">
    <div class="jmd-container">
        <div class="jmd-header-grid">
          <?php if (!empty($page['header'])): ?>
            <?php print render($page['header']); ?>
          <?php endif; ?>
        </div>
    </div>
</header>

<div class="jmd-masthead jmd-masthead--primary">   
  <div class="jmd-search-container">
    <div class="jmd-search-artwork-primary-container">
      <div class="jmd-search-artwork-primary">
          <img src="sites/all/themes/jmd_subtheme/images/search-artwork-large.svg" alt="Search">
      </div>
    </div>
    <h1 class="jmd-primary-title">Search Medical Information</h1>
    <div class="jmd-search-controls">
      <div class="jmd-popover-container">
        <div class="jmd-popover jmd-popover--search-error" data-role="search-error">
          <div class="jmd-popover-close-container">
              <button class="jmd-popover-close" data-role="search-error-close">
                  <span class="jmd-visually-hide">Close</span>
              </button>
          </div>
        <div class="jmd-popover-body">
            <p class="jmd-popover-title">Please enter your<br>specific request</p>
            <div class="jmd-popover-btn-group">
                <button class="jmd-btn jmd-btn--modal-primary jmd-btn--large" data-role="search-error-confirm">Okay</button>
            </div>
        </div>
        <div class="arrow"></div>
        </div>
      </div>
      <form class="jmd-search-control" data-role="search-component" action="" method="">
        <label class="jmd-visually-hide" for="medical-search">Search</label>
        <input id="medical-search" type="text" placeholder="Enter a word or phrase to search..." data-input="search">
        <input class="jmd-btn jmd-btn--search jmd-btn--tall" type="submit" value="Submit">
      </form>
    </div>
  </div>
  <div class="jmd-search-shadow-container">
      <img src="sites/all/themes/jmd_subtheme/images/search-shadow.svg" alt="">
  </div>    
</div>

<div class="jmd-layout-primary">
  <div class="jmd-container">
    <div class="jmd-cards-container">
     <a class="jmd-card jmd-card-link" href="#">Report an AE/PQC</a>
    <div class="jmd-card-wrapper">
        <div class="jmd-cards">
            
            <div class="jmd-card" data-component="card">
                <div class="jmd-icon jmd-icon--3xl">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 49.6"><polygon fill="#539828" points="0 43.7 12.5 40.5 12.5 13.1 0 9.6 "></polygon><polygon fill="#70A94C" points="15.3 46.6 32.3 41.9 32.3 10.5 15.3 4.1 "></polygon><polygon fill="#539828" points="35.1 0 35.1 49.6 60 40.8 60 10.9 "></polygon></svg>
                </div>
                <div class="jmd-card-body">
                    <h2 class="jmd-card-title">JanssenMD Product Pages</h2>
                    <p class="jmd-card-text">Prescribing information, search medical information, tools and more</p>
                </div>
                <div class="jmd-card-tab-container">
                    <button class="jmd-card-tab" data-role="card-open" aria-haspopup="true"><span class="jmd-visually-hide">Show More</span></button>
                </div>
                <div class="jmd-card-overlay" data-role="card-overlay" aria-hidden="true">
                  <span class="jmd-visually-hidden jmd-top-capture" tabindex="0"></span>
                  <button class="jmd-card-close" data-role="card-close"><span class="jmd-visually-hide">Close Card</span></button>
                  <div class="jmd-icon jmd-icon--3xl">
                      
                          <!--?xml version="1.0" encoding="utf-8"?-->
<!-- Generator: Adobe Illustrator 19.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
<g>
<polygon opacity="0.6" fill="#FFFFFF" points="0.65,40.33 10.83,37.75 10.83,15.55 0.68,12.69   "></polygon>
<polygon opacity="0.8" fill="#FFFFFF" points="13.05,42.68 26.89,38.88 26.89,13.41 13.05,8.2   "></polygon>
<polygon fill="#FFFFFF" points="29.12,4.89 29.12,45.11 49.35,37.97 49.35,13.77  "></polygon>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>

                      
                  </div>
                  <h2 class="jmd-overlay-title">JanssenMD Product Pages</h2>
                  <ul class="jmd-card-actions">
                          <li><a class="jmd-card-action--jump" href="#">View Products List</a></li> 
                  </ul>
                    <span class="jmd-visually-hidden jmd-bottom-capture" tabindex="0"></span>
                </div>
            </div>
            
            <div class="jmd-card" data-component="card">
                <div class="jmd-icon jmd-icon--3xl">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><path fill="#8462A9" d="M30 26.7c-1.81 0-3.3 1.49-3.3 3.3s1.49 3.3 3.3 3.3l0 0V26.7L30 26.7z"></path><path fill="#8462A9" d="M12 48l11.43-24.57L30 20.37V0l0 0C13.43 0 0 13.43 0 30c0 16.56 13.43 30 30 30l0 0V39.63L12 48z"></path><path fill="#734C9D" d="M33.3 30c0-1.81-1.47-3.3-3.3-3.3v6.6C31.83 33.3 33.3 31.81 33.3 30z"></path><path fill="#734C9D" d="M60 30C60 13.43 46.57 0 30 0v20.37L48 12 36.57 36.57 30 39.63V60C46.57 60 60 46.56 60 30z"></path></svg>
                </div>
                <div class="jmd-card-body">
                    <h2 class="jmd-card-title">Explore Resources &amp; Tools</h2>
                    <p class="jmd-card-text">Clinical &amp; Outcomes Tools REMS Tools</p>
                </div>
                <div class="jmd-card-tab-container">
                    <button class="jmd-card-tab" data-role="card-open" aria-haspopup="true"><span class="jmd-visually-hide">Show More</span></button>
                </div>
                <div class="jmd-card-overlay" data-role="card-overlay" aria-hidden="true">
                    <span class="jmd-visually-hidden jmd-top-capture" tabindex="0"></span>
                    <button class="jmd-card-close" data-role="card-close"><span class="jmd-visually-hide">Close Card</span></button>
                    <div class="jmd-icon jmd-icon--3xl">
                        
                            <!--?xml version="1.0" encoding="utf-8"?-->
<!-- Generator: Adobe Illustrator 19.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
<g>
  <path fill="#FFFFFF" d="M25,22.3c-1.49,0-2.7,1.22-2.7,2.7s1.22,2.7,2.7,2.7l0,0V22.3L25,22.3z"></path>
  <path opacity="0.8" fill="#FFFFFF" d="M10.26,39.74l9.36-20.12l5.38-2.5V0.43l0,0C11.43,0.43,0.43,11.43,0.43,25
    c0,13.56,10.99,24.57,24.57,24.57l0,0V32.88L10.26,39.74z"></path>
  <path opacity="0.8" fill="#FFFFFF" d="M27.7,25c0-1.49-1.2-2.7-2.7-2.7v5.41C26.5,27.7,27.7,26.49,27.7,25z"></path>
  <path fill="#FFFFFF" d="M49.57,25C49.57,11.43,38.57,0.43,25,0.43v16.69l14.74-6.86l-9.36,20.12L25,32.88v16.69
    C38.57,49.57,49.57,38.56,49.57,25z"></path>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>

                        
                    </div>
                    <h2 class="jmd-overlay-title">Explore Resources &amp; Tools</h2>
                    <ul class="jmd-card-actions">
                            <li><a class="jmd-card-action--jump" href="#">Health Economics and Outcomes Resources</a></li>
                        
                            <li><a class="jmd-card-action--jump" href="#">REMS Tools</a></li>
                    </ul>
                    
                    <span class="jmd-visually-hidden jmd-bottom-capture" tabindex="0"></span>
                </div>
            </div>
            
            <div class="jmd-card" data-component="card">
                <div class="jmd-icon jmd-icon--3xl">
                    
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><path fill="#EA8038" d="M34.8 50.89l1.93 8.34C47.85 56.68 56.6 47.96 59.2 36.86l-8.43-1.94C48.94 42.84 42.71 49.06 34.8 50.89z"></path><path fill="#EA8038" d="M50.77 25.31l8.48-1.96C56.72 12.17 47.94 3.36 36.78 0.78l-1.97 8.56C42.72 11.16 48.95 17.39 50.77 25.31z"></path><path fill="#EA8038" d="M25.2 9.33l-1.98-8.55C12.06 3.36 3.28 12.17 0.75 23.35l8.46 1.96C11.04 17.38 17.27 11.15 25.2 9.33z"></path><path fill="#EA8038" d="M9.21 34.91L0.8 36.86c2.6 11.1 11.35 19.82 22.47 22.37l1.93-8.34C17.27 49.07 11.03 42.83 9.21 34.91z"></path><path opacity="0.9" fill="#EA8038" d="M14.86 33.6l-5.65 1.31c1.82 7.93 8.06 14.16 15.99 15.98l1.32-5.72C20.76 43.85 16.22 39.34 14.86 33.6z"></path><path opacity="0.9" fill="#EA8038" d="M26.47 14.84L25.2 9.33c-7.92 1.82-14.16 8.05-15.98 15.98l5.6 1.29C16.11 20.78 20.67 16.19 26.47 14.84z"></path><path opacity="0.9" fill="#EA8038" d="M33.47 45.17l1.32 5.72c7.92-1.82 14.15-8.05 15.97-15.97l-5.63-1.3C43.77 39.36 39.23 43.86 33.47 45.17z"></path><path opacity="0.9" fill="#EA8038" d="M34.81 9.33l-1.27 5.51c5.8 1.35 10.35 5.94 11.65 11.76l5.58-1.29C48.95 17.39 42.72 11.16 34.81 9.33z"></path><path fill="#F6C685" d="M29.99 8.78c1.66 0 3.27 0.2 4.82 0.55l1.97-8.56C34.6 0.28 32.33 0 30 0c-2.33 0-4.6 0.27-6.78 0.78l1.98 8.55C26.74 8.97 28.34 8.78 29.99 8.78z"></path><path fill="#F6C685" d="M29.99 51.44c-1.65 0-3.25-0.19-4.79-0.55l-1.93 8.34C25.43 59.73 27.68 60 30 60c2.31 0 4.56-0.27 6.73-0.77l-1.93-8.34C33.25 51.24 31.64 51.44 29.99 51.44z"></path><path fill="#F6C685" d="M30 14.43c1.22 0 2.4 0.14 3.54 0.41l1.27-5.51c-1.55-0.36-3.16-0.55-4.82-0.55 -1.65 0-3.25 0.19-4.79 0.55l1.27 5.51C27.61 14.58 28.79 14.43 30 14.43z"></path><path fill="#F6C685" d="M30 45.57c-1.2 0-2.36-0.14-3.48-0.4l-1.32 5.72c1.54 0.35 3.14 0.55 4.79 0.55 1.65 0 3.26-0.19 4.8-0.55l-1.32-5.72C32.35 45.43 31.19 45.57 30 45.57z"></path><path fill="#F6C685" d="M59.25 23.35l-8.48 1.96c0.36 1.54 0.55 3.15 0.55 4.8 0 1.65-0.19 3.26-0.55 4.81l8.43 1.94c0.52-2.2 0.8-4.5 0.8-6.86C60 27.71 59.74 25.49 59.25 23.35z"></path><path fill="#F6C685" d="M8.66 30.11c0-1.65 0.19-3.26 0.55-4.8l-8.46-1.96C0.26 25.49 0 27.71 0 30c0 2.36 0.28 4.65 0.8 6.86l8.41-1.95C8.86 33.36 8.66 31.76 8.66 30.11z"></path><path fill="#F6C685" d="M45.57 30c0 1.25-0.15 2.46-0.43 3.62l5.63 1.3c0.36-1.55 0.55-3.15 0.55-4.81 0-1.65-0.19-3.26-0.55-4.8l-5.58 1.29C45.43 27.69 45.57 28.83 45.57 30z"></path><path fill="#F6C685" d="M14.43 30c0-1.17 0.13-2.31 0.38-3.4l-5.6-1.29c-0.36 1.54-0.55 3.15-0.55 4.8 0 1.65 0.19 3.25 0.55 4.8l5.65-1.31C14.58 32.44 14.43 31.24 14.43 30z"></path></svg>

                    
                </div>
                <div class="jmd-card-body">
                    <h2 class="jmd-card-title">Need Help?</h2>
                    <p class="jmd-card-text">Scientific Knowledge Experts are available Monday-Friday 9am-8pm ET, Saturday and Sunday 9am-5pm ET</p>
                </div>
                <div class="jmd-card-tab-container">
                    <button class="jmd-card-tab" data-role="card-open" aria-haspopup="true"><span class="jmd-visually-hide">Show More</span></button>
                </div>
                <div class="jmd-card-overlay" data-role="card-overlay" aria-hidden="true">
                    <span class="jmd-visually-hidden jmd-top-capture" tabindex="0"></span>
                    <button class="jmd-card-close" data-role="card-close"><span class="jmd-visually-hide">Close Card</span></button>
                    <div class="jmd-icon jmd-icon--3xl">
                        
                            <!--?xml version="1.0" encoding="utf-8"?-->
<!-- Generator: Adobe Illustrator 19.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50.58 50.58" enable-background="new 0 0 50.58 50.58" xml:space="preserve">
<g>
  <path fill="#FFFFFF" d="M29.33,42.9l1.63,7.03c9.37-2.15,16.75-9.5,18.94-18.86l-7.11-1.64C41.26,36.11,36.01,41.36,29.33,42.9z"></path>
  <path fill="#FFFFFF" d="M42.8,21.33l7.15-1.65C47.81,10.26,40.42,2.83,31,0.66l-1.66,7.21C36.01,9.41,41.26,14.66,42.8,21.33z"></path>
  <path fill="#FFFFFF" d="M21.24,7.86l-1.67-7.21c-9.41,2.18-16.81,9.6-18.94,19.03l7.13,1.65C9.3,14.65,14.56,9.4,21.24,7.86z"></path>
  <path fill="#FFFFFF" d="M7.76,29.43l-7.09,1.64c2.19,9.36,9.57,16.71,18.94,18.86l1.63-7.03C14.56,41.36,9.3,36.11,7.76,29.43z"></path>
  <path opacity="0.9" fill="#FFFFFF" d="M12.52,28.32l-4.76,1.1c1.54,6.68,6.79,11.94,13.48,13.47l1.11-4.82
    C17.5,36.97,13.67,33.17,12.52,28.32z"></path>
  <path opacity="0.9" fill="#FFFFFF" d="M22.31,12.51l-1.07-4.65C14.56,9.4,9.3,14.65,7.77,21.33l4.72,1.09
    C13.58,17.51,17.42,13.64,22.31,12.51z"></path>
  <path opacity="0.9" fill="#FFFFFF" d="M28.21,38.08l1.12,4.82c6.68-1.54,11.93-6.79,13.47-13.46l-4.75-1.09
    C36.9,33.18,33.07,36.97,28.21,38.08z"></path>
  <path opacity="0.9" fill="#FFFFFF" d="M29.34,7.87l-1.07,4.64c4.89,1.14,8.73,5,9.82,9.91l4.7-1.09
    C41.26,14.66,36.01,9.41,29.34,7.87z"></path>
  <g>
    <path fill="#F6C685" d="M25.28,7.4c1.4,0,2.76,0.16,4.06,0.47L31,0.66C29.17,0.23,27.26,0,25.29,0c-1.97,0-3.88,0.23-5.71,0.66
      l1.67,7.21C22.54,7.57,23.89,7.4,25.28,7.4z"></path>
    <path fill="#F6C685" d="M25.28,43.36c-1.39,0-2.74-0.16-4.04-0.46l-1.63,7.03c1.82,0.42,3.72,0.65,5.67,0.65
      c1.95,0,3.85-0.23,5.67-0.65l-1.63-7.03C28.03,43.2,26.67,43.36,25.28,43.36z"></path>
    <path fill="#F6C685" d="M25.29,12.17c1.03,0,2.02,0.12,2.98,0.34l1.07-4.64c-1.31-0.3-2.66-0.47-4.06-0.47
      c-1.39,0-2.74,0.16-4.04,0.46l1.07,4.65C23.27,12.29,24.26,12.17,25.29,12.17z"></path>
    <path fill="#F6C685" d="M25.29,38.41c-1.01,0-1.99-0.12-2.93-0.33l-1.11,4.82c1.3,0.3,2.65,0.46,4.04,0.46
      c1.39,0,2.75-0.16,4.05-0.46l-1.12-4.82C27.27,38.29,26.29,38.41,25.29,38.41z"></path>
    <path fill="#F6C685" d="M49.95,19.68l-7.15,1.65c0.3,1.3,0.46,2.65,0.46,4.05c0,1.39-0.16,2.75-0.46,4.05l7.11,1.64
      c0.43-1.86,0.67-3.79,0.67-5.78C50.58,23.36,50.35,21.49,49.95,19.68z"></path>
    <path fill="#F6C685" d="M7.3,25.38c0-1.39,0.16-2.75,0.46-4.05l-7.13-1.65C0.22,21.49,0,23.36,0,25.29c0,1.99,0.24,3.92,0.67,5.78
      l7.09-1.64C7.47,28.12,7.3,26.77,7.3,25.38z"></path>
    <path fill="#F6C685" d="M38.41,25.29c0,1.05-0.13,2.07-0.36,3.05l4.75,1.09c0.3-1.3,0.46-2.66,0.46-4.05
      c0-1.39-0.16-2.75-0.46-4.05l-4.7,1.09C38.3,23.35,38.41,24.3,38.41,25.29z"></path>
    <path fill="#F6C685" d="M12.17,25.29c0-0.99,0.11-1.94,0.32-2.87l-4.72-1.09c-0.3,1.3-0.46,2.66-0.46,4.05
      c0,1.39,0.16,2.74,0.46,4.04l4.76-1.1C12.29,27.35,12.17,26.33,12.17,25.29z"></path>
  </g>
</g>
</svg>

                        
                    </div>
                    <h2 class="jmd-overlay-title">Need Help?</h2>
                    <ul class="jmd-card-actions">
                        
                    </ul>
                    
                        <div class="jmd-card-action-grid">
                            <div class="jmd-card-action-grid-col">
                                <ul>
                                    <li class="jmd-card-action-item"><a href="tel:+18005267786">1-800-JANSSEN</a></li>                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Item #3</a></li>
                                </ul>
                            </div>
                            <div class="jmd-card-action-grid-col">
                                <ul>
                                    <li><a href="#">Item #2</a></li>
                                    <li><a href="#">Item #2</a></li>
                                    <li><a href="#">Item #3</a></li>
                                </ul>
                            </div>
                        </div>
                    
                    <span class="jmd-visually-hidden jmd-bottom-capture" tabindex="0"></span>
                </div>
            </div>
            
        </div>
    </div>
</div>

    </div>
   <div class="jmd-container">
       <div class="jmd-information-grid">
           <div class="jmd-information-grid-col">
                <div class="jmd-nav-list">
    <h3 class="jmd-nav-list-title jmd-nav-list-title--alt">Announcements</h3>
        <ul class="jmd-list jmd-nav-list">
            
                <li class="jmd-nav-list-item"><a class="" href="#">PRODUCT (genericname) FDA Approval Press Release</a></li>
            
                <li class="jmd-nav-list-item"><a class="" href="#">Video - Using JanssenMD®</a></li>
            
                <li class="jmd-nav-list-item"><a class="jmd-nav-list-item--next" href="#">See All Announcements</a></li>
            
        </ul>
</div>

            </div>
            <div class="jmd-information-grid-col">
                <div class="jmd-nav-list">
    <h3 class="jmd-nav-list-title jmd-nav-list-title--alt">Resources</h3>
        <ul class="jmd-list jmd-nav-list">
            
                <li class="jmd-nav-list-item"><a class="jmd-nav-list-item--launch" href="#">Medline Search</a></li>
            
                <li class="jmd-nav-list-item"><a class="jmd-nav-list-item--launch" href="#">Prescription for Safety</a></li>
            
        </ul>
</div>

            </div>
            <div class="jmd-information-grid-col">
                <div class="jmd-information-grid-logo">
                    <img src="sites/all/themes/jmd_subtheme/images/logo-full.png" alt="Janssen Pharmaceutical Companies">
                </div>
            </div>
        </div>
    </div>
    <div class="jmd-product-matrix-container">
    <div class="jmd-product-matrix">

        <div class="jmd-product-matrix-teaser">
            <div class="jmd-product-matrix-teaser-container">
                <div class="jmd-product-matrix-teaser-content">
    
    <div class="jmd-product-matrix-teaser-icon-container">
        <div class="jmd-icon jmd-icon--2xl">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35.4 32.08"><g opacity="0.65"><g opacity="0.75"><polygon fill="#666666" points="1.5 27.08 20.12 22.37 20.13 12.89 1.52 7.66 "></polygon><path fill="#FFFFFF" d="M0 29.01L0.02 5.68l21.6 6.08 0 11.79L0 29.01zM3.02 9.64L3 25.15l15.62-3.95 0-7.18L3.02 9.64z"></path></g><polygon fill="#808080" points="9.39 28.6 20.81 25.46 20.82 9.01 9.4 4.71 "></polygon><path fill="#FFFFFF" d="M7.89 30.56l0-28.02 14.42 5.42 -0.01 18.64L7.89 30.56zM10.9 6.88l0 19.75 8.41-2.31 0.01-14.27L10.9 6.88z"></path><polygon fill="#666666" points="19.61 29.96 33.9 24.92 33.9 8.56 19.62 2.3 "></polygon><path fill="#FFFFFF" d="M18.11 32.08l0-32.08L35.4 7.58l0 18.4L18.11 32.08zM21.12 4.59l0 23.25 11.29-3.98 0-14.31L21.12 4.59z"></path></g></svg>

        </div>
    </div>
    
    <h5 class="jmd-product-matrix-title">JanssenMD Product Pages</h5>
    <p class="jmd-product-matrix-text">Prescribing information, search medical information, tools and more</p>
</div>

                <div class="jmd-product-matrix-toggle-container">
    <ul class="jmd-product-matrix-toggle">
        <li>
            <span class="jmd-product-matrix-toggle-label">View By</span>
        </li>
        <li class="jmd-is-active" data-toggle="product-matrix">
            <a href="#">Products</a>
        </li>
        <li data-toggle="product-matrix">
            <a href="#">Therapeutic Areas</a>
        </li>
    </ul>
</div>

            </div>
        </div>

        <div class="jmd-product-matrix-grid jmd-is-selected">
    
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Axert<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(almotriptan malate)</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span>Full Prescribing Information</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Concerta<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(methylphenidate HCl)</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span class="jmd-product-matrix-prescribing-information">Full Prescribing Information including BOXED WARNING</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Darzalex<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(daratumumab)</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span>Full Prescribing Information</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Doxil<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(doxorubicin HCl liposome injection)</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span class="jmd-product-matrix-prescribing-information">Full Prescribing Information including BOXED WARNING</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Duragesic<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(fentanyl transdermal system)</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span class="jmd-product-matrix-prescribing-information">Full Prescribing Information including BOXED WARNING</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Edurant<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(rilpivirine</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span>Full Prescribing Information</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Elmiron<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(pentosan polysulfate sodium)</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span>Full Prescribing Information</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Haldol<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(haloperidol)</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span class="jmd-product-matrix-prescribing-information">Full Prescribing Information including BOXED WARNING</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Haldol Decanoate<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(haloperidol)</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span class="jmd-product-matrix-prescribing-information">Full Prescribing Information including BOXED WARNING</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Imbruvica<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(ibrutinib)</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span>Full Prescribing Information</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Intelence<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(etravirine)</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span class="jmd-product-matrix-prescribing-information">Full Prescribing Information including BOXED WARNING</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Invega Sustena<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(paliperidone palmitate)</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span class="jmd-product-matrix-prescribing-information">Full Prescribing Information including BOXED WARNING</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Invega Trinza<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(paliperidone palmitate)</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span class="jmd-product-matrix-prescribing-information">Full Prescribing Information including BOXED WARNING</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Invega<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(paliperidone)</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span class="jmd-product-matrix-prescribing-information">Full Prescribing Information including BOXED WARNING</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Invokamet<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(canagliflozin and metformin hydrochloride)</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span class="jmd-product-matrix-prescribing-information">Full Prescribing Information including BOXED WARNING</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Invokana<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(canagliflozin)</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span>Full Prescribing Information</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Levaquin<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(levofloxacin)</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span class="jmd-product-matrix-prescribing-information">Full Prescribing Information including BOXED WARNING</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Natrecor<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(nesiritide)</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span>Full Prescribing Information</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Olysio<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(simeprevir)</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span>Full Prescribing Information</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Pancreaze<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(pancrelipase)</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span>Full Prescribing Information</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Prezcobix<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(darunavir and cobicistat)</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span>Full Prescribing Information</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Prezista<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(darunavir)</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span>Full Prescribing Information</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Procrit<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(epoetin alfa)</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span class="jmd-product-matrix-prescribing-information">Full Prescribing Information including BOXED WARNING</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Razadyne ER/Razadyne<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(galantamine HBr)</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span>Full Prescribing Information</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Remicade<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(infliximab)</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span class="jmd-product-matrix-prescribing-information">Full Prescribing Information including BOXED WARNING</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Risperdal Consta<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(risperidone)</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span class="jmd-product-matrix-prescribing-information">Full Prescribing Information including BOXED WARNING</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Risperdal M-Tab/Risperdal<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(risperidone)</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span class="jmd-product-matrix-prescribing-information">Full Prescribing Information including BOXED WARNING</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Simponi Aria<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(golimumab)</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span class="jmd-product-matrix-prescribing-information">Full Prescribing Information including BOXED WARNING</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Simponi<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(golimumab)</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span class="jmd-product-matrix-prescribing-information">Full Prescribing Information including BOXED WARNING</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Sirturo<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(bedaquiline)</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span class="jmd-product-matrix-prescribing-information">Full Prescribing Information including BOXED WARNING</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Stelara<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(ustekinumab)</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span>Full Prescribing Information</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Sylvant<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(siltuximab)</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span>Full Prescribing Information</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Topamax<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(topiramate)</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span>Full Prescribing Information</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Ultracet<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(tramadol hydrochloride / acetaminophen)</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span class="jmd-product-matrix-prescribing-information">Full Prescribing Information including BOXED WARNING</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Ultram<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(tramadol hydrochloride)</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span>Full Prescribing Information</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Ultram ER<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(tramadol hydrochloride)</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span>Full Prescribing Information</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Xarelto<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(rivaroxaban)</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span class="jmd-product-matrix-prescribing-information">Full Prescribing Information including BOXED WARNING</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Yondelis<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(trabectedin)</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span>Full Prescribing Information</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
        <div class="jmd-product-grid-col">
            <div class="jmd-product-matrix-tab-container">
                <div class="jmd-product-matrix-tab" data-target="product-tab">
                    <a href="#" class="jmd-product-matrix-primary-action" data-target="tab-action">
                        <span class="jmd-product-matrix-primary-title">Zytiga<sup>®</sup></span>
                        <span class="jmd-product-matrix-name-generic">(abiraterone acetate)</span>
                    </a>
                    <a href="#" class="jmd-product-matrix-secondary-action" data-target="tab-secondary-action">
                        <div class="jmd-product-matrix-icon-container">
                            <div class="jmd-icon jmd-icon--xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path fill="#0069A4" d="M8.53 8.15C8.45 8.27 8.37 8.28 8.31 8.28c-0.14 0-0.33-0.09-0.54-0.25C7.94 8 8.1 7.99 8.23 7.99c0.23 0 0.33 0.04 0.36 0.05C8.58 8.06 8.57 8.1 8.53 8.15zM5.15 8.28c0.27-0.63 0.51-1.33 0.7-1.98 0.29 0.53 0.65 1.04 1 1.45C6.29 7.88 5.7 8.07 5.15 8.28zM5.63 4.15C5.64 4.1 5.67 4.09 5.69 4.08c0.01 0 0.02-0.01 0.03-0.01 0.04 0.06 0.09 0.29 0 0.85C5.61 4.6 5.56 4.3 5.63 4.15zM3.54 10.08C3.42 9.99 3.43 9.93 3.43 9.9c0.02-0.15 0.24-0.4 0.8-0.72C3.81 9.97 3.58 10.07 3.54 10.08zM8.23 7.55c-0.24 0-0.54 0.03-0.88 0.09C6.87 7.14 6.37 6.39 6.02 5.66 6.37 4.19 6.14 3.89 6.06 3.8c-0.08-0.1-0.2-0.16-0.33-0.16 -0.05 0-0.11 0.01-0.17 0.03C5.4 3.71 5.29 3.82 5.22 3.97 5.04 4.41 5.29 5.14 5.55 5.71 5.33 6.6 4.95 7.66 4.56 8.53c-0.99 0.45-1.52 0.9-1.57 1.33 -0.02 0.16 0.02 0.38 0.29 0.59 0.08 0.06 0.16 0.09 0.25 0.09 0.23 0 0.46-0.18 0.73-0.55 0.2-0.27 0.41-0.65 0.62-1.11 0.7-0.31 1.57-0.58 2.31-0.74 0.41 0.4 0.78 0.6 1.1 0.6 0.23 0 0.44-0.11 0.58-0.31 0.15-0.21 0.19-0.4 0.1-0.57C8.89 7.65 8.64 7.55 8.23 7.55z"></path><path fill="#0069A4" d="M9.7 11c0 0.28-0.22 0.5-0.5 0.5H2.8c-0.28 0-0.5-0.22-0.5-0.5V1c0-0.28 0.22-0.5 0.5-0.5h3.53c0.14 0 0.3 0.03 0.46 0.08v1.5c0 0.69 0.56 1.25 1.25 1.25H9.6c0.06 0.19 0.1 0.38 0.1 0.53V11zM7.3 0.79c0.15 0.08 0.29 0.18 0.39 0.28l1.45 1.45C9.22 2.6 9.3 2.71 9.37 2.83H8.05C7.63 2.83 7.3 2.5 7.3 2.08V0.79zM9.49 2.16L8.04 0.71C7.65 0.32 6.88 0 6.33 0H2.8c-0.55 0-1 0.45-1 1v10c0 0.55 0.45 1 1 1h6.4c0.55 0 1-0.45 1-1V3.87C10.2 3.32 9.88 2.55 9.49 2.16z"></path></svg>

                            </div>
                        </div>
                        
                            <span>Full Prescribing Information</span>
                        
                    </a>
                </div>
            </div>
        </div>
    
</div>

        <a href="#" class="jmd-product-matrix-callout">Complete List of products of supported by Janssen Pharmaceutical companies of Johnson &amp; Johnson</a>

    </div>
</div>

    <div class="jmd-container jmd-container--narrow">
    <div class="jmd-footer-utility jmd-footer-utility-container--primary">
        <div class="jmd-footer-utlity-container">
            <div class="jmd-footer-utility-grid">
                <div class="jmd-footer-utility-grid-wrapper">
                    <div class="jmd-footer-utility-grid-col">
                        <div class="jmd-footer-utility-grid-col-wrapper">
                            <a class="jmd-link jmd-link--large" href="#" title="Report an Adverse Event">Report an Adverse Event</a>

                        </div>
                    </div>
                    <div class="jmd-footer-utility-grid-col">
                        <div class="jmd-footer-utility-grid-col-wrapper">
                            <a class="jmd-link jmd-link--large" href="#" title="Report an Adverse Event">Report an Adverse Event</a>

                        </div>
                    </div>
                    <div class="jmd-footer-utility-grid-col jmd-footer-utility-grid-col-last">
                        <div class="jmd-footer-utility-grid-col-wrapper">
                            <div class="jmd-footer-utility-logo">
                                <img src="sites/all/themes/jmd_subtheme/images/logo-horizontal.png" alt="Janssen">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    

<div class="jmd-need-help">
    <div class="jmd-need-help-cell">
        <div class="jmd-popover-container">
    <div class="jmd-popover jmd-popover--need-help" data-component="popover">
        <h2 class="jmd-popover-title">Who are our experts?</h2>
        <div class="jmd-popover-body">
            <p>Pharmacists or Nurses who are specifically trained on all aspects of the Janssen products and the therapeutic areas they treat.</p>
        </div>
        <div class="arrow"></div>
    </div>
    <button class="jmd-need-help-info" data-role="popover-open" data-popover="need-help" aria-haspopup="true">
        <span class="jmd-visually-hide">Information</span>
    </button>
</div>

        <div class="jmd-need-help-title">
            <div class="jmd-need-help-title-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><path fill="#EA8038" d="M34.8 50.89l1.93 8.34C47.85 56.68 56.6 47.96 59.2 36.86l-8.43-1.94C48.94 42.84 42.71 49.06 34.8 50.89z"></path><path fill="#EA8038" d="M50.77 25.31l8.48-1.96C56.72 12.17 47.94 3.36 36.78 0.78l-1.97 8.56C42.72 11.16 48.95 17.39 50.77 25.31z"></path><path fill="#EA8038" d="M25.2 9.33l-1.98-8.55C12.06 3.36 3.28 12.17 0.75 23.35l8.46 1.96C11.04 17.38 17.27 11.15 25.2 9.33z"></path><path fill="#EA8038" d="M9.21 34.91L0.8 36.86c2.6 11.1 11.35 19.82 22.47 22.37l1.93-8.34C17.27 49.07 11.03 42.83 9.21 34.91z"></path><path opacity="0.9" fill="#EA8038" d="M14.86 33.6l-5.65 1.31c1.82 7.93 8.06 14.16 15.99 15.98l1.32-5.72C20.76 43.85 16.22 39.34 14.86 33.6z"></path><path opacity="0.9" fill="#EA8038" d="M26.47 14.84L25.2 9.33c-7.92 1.82-14.16 8.05-15.98 15.98l5.6 1.29C16.11 20.78 20.67 16.19 26.47 14.84z"></path><path opacity="0.9" fill="#EA8038" d="M33.47 45.17l1.32 5.72c7.92-1.82 14.15-8.05 15.97-15.97l-5.63-1.3C43.77 39.36 39.23 43.86 33.47 45.17z"></path><path opacity="0.9" fill="#EA8038" d="M34.81 9.33l-1.27 5.51c5.8 1.35 10.35 5.94 11.65 11.76l5.58-1.29C48.95 17.39 42.72 11.16 34.81 9.33z"></path><path fill="#F6C685" d="M29.99 8.78c1.66 0 3.27 0.2 4.82 0.55l1.97-8.56C34.6 0.28 32.33 0 30 0c-2.33 0-4.6 0.27-6.78 0.78l1.98 8.55C26.74 8.97 28.34 8.78 29.99 8.78z"></path><path fill="#F6C685" d="M29.99 51.44c-1.65 0-3.25-0.19-4.79-0.55l-1.93 8.34C25.43 59.73 27.68 60 30 60c2.31 0 4.56-0.27 6.73-0.77l-1.93-8.34C33.25 51.24 31.64 51.44 29.99 51.44z"></path><path fill="#F6C685" d="M30 14.43c1.22 0 2.4 0.14 3.54 0.41l1.27-5.51c-1.55-0.36-3.16-0.55-4.82-0.55 -1.65 0-3.25 0.19-4.79 0.55l1.27 5.51C27.61 14.58 28.79 14.43 30 14.43z"></path><path fill="#F6C685" d="M30 45.57c-1.2 0-2.36-0.14-3.48-0.4l-1.32 5.72c1.54 0.35 3.14 0.55 4.79 0.55 1.65 0 3.26-0.19 4.8-0.55l-1.32-5.72C32.35 45.43 31.19 45.57 30 45.57z"></path><path fill="#F6C685" d="M59.25 23.35l-8.48 1.96c0.36 1.54 0.55 3.15 0.55 4.8 0 1.65-0.19 3.26-0.55 4.81l8.43 1.94c0.52-2.2 0.8-4.5 0.8-6.86C60 27.71 59.74 25.49 59.25 23.35z"></path><path fill="#F6C685" d="M8.66 30.11c0-1.65 0.19-3.26 0.55-4.8l-8.46-1.96C0.26 25.49 0 27.71 0 30c0 2.36 0.28 4.65 0.8 6.86l8.41-1.95C8.86 33.36 8.66 31.76 8.66 30.11z"></path><path fill="#F6C685" d="M45.57 30c0 1.25-0.15 2.46-0.43 3.62l5.63 1.3c0.36-1.55 0.55-3.15 0.55-4.81 0-1.65-0.19-3.26-0.55-4.8l-5.58 1.29C45.43 27.69 45.57 28.83 45.57 30z"></path><path fill="#F6C685" d="M14.43 30c0-1.17 0.13-2.31 0.38-3.4l-5.6-1.29c-0.36 1.54-0.55 3.15-0.55 4.8 0 1.65 0.19 3.25 0.55 4.8l5.65-1.31C14.58 32.44 14.43 31.24 14.43 30z"></path></svg>

            </div>
            <h5 class="jmd-need-help-title-text">Need Help?</h5>
        </div>
        <p class="jmd-need-help-teaser">Scientific Knowledge Experts are available Monday-Friday 9am-8pm EST, Saturday and Sunday 9am-5pm EST</p>
    </div>
    <div class="jmd-need-help-cell">
        <a class="jmd-need-help-link" href="#">
            <span class="jmd-need-help-link-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18"><circle fill="#208CBC" cx="9" cy="9" r="9"></circle><path fill="#0069A4" d="M18 9c0-4.97-4.03-9-9-9v18C13.97 18 18 13.97 18 9z"></path><path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M8.95 6.68C8.91 7.12 7.87 7.03 7.79 7.91c-0.11 1.1 1.54 2.85 2.2 2.91 0.88 0.08 0.92-1.03 1.58-0.97 0.44 0.04 2.07 1.52 2.01 2.18 -0.04 0.44-1.93 1.58-2.15 1.56 -0.22-0.02-1.3-0.35-1.72-0.61C7.84 12.11 6.43 9.85 6.2 9.37 5.64 8.19 5.17 6.66 5.25 5.88 5.29 5.44 7.18 4.3 7.18 4.3 8.06 4.38 8.99 6.24 8.95 6.68z"></path></svg>

            </span>
            <span class="jmd-need-help-link-title">1-800-JANSSEN</span>
        </a>
    </div>
    <div class="jmd-need-help-cell">
        <a class="jmd-need-help-link" href="#">
            <span class="jmd-need-help-link-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18"><circle fill="#208CBC" cx="9" cy="9" r="9"></circle><path fill="#0069A4" d="M18 9c0-4.97-4.03-9-9-9v18C13.97 18 18 13.97 18 9z"></path><polygon fill="#FFFFFF" points="13.98 6.14 13.98 6.14 13.98 6.14 "></polygon><polygon fill="#FFFFFF" points="4.02 6.14 4.02 6.14 4.02 6.14 "></polygon><path fill="#FFFFFF" d="M9.23 10.19L4.02 6.72v5.53h9.96V6.72C13.98 6.72 10.13 9.54 9.23 10.19z"></path><path fill="#FFFFFF" d="M13.98 6.38L13.98 6.38l-9.51 0c-0.23 0-0.23 0-0.45 0v0l5.21 3.47C10.13 9.2 13.98 6.39 13.98 6.38z"></path></svg>

            </span>
            <span class="jmd-need-help-link-title">Email</span>
        </a>
    </div>
    <div class="jmd-need-help-cell">
        <a class="jmd-need-help-link" href="#">
            <span class="jmd-need-help-link-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.96 18"><circle fill="#208CBC" cx="8.98" cy="8.98" r="8.98"></circle><path fill="#0069A4" d="M17.96 9.02c0-4.96-4.02-8.98-8.98-8.98V18C13.94 18 17.96 13.98 17.96 9.02z"></path><path fill="#FFFFFF" d="M8.98 3.47C8.98 3.47 8.98 3.47 8.98 3.47 8.97 3.47 8.97 3.47 8.98 3.47L8.98 3.47C7.19 3.48 5.74 4.93 5.74 6.7c0 2.76 3.13 7.71 3.23 7.86v0.01l0-0.01 0 0.01c0 0 0.54-0.85 1.17-2.04 0.53-1 1.14-2.23 1.55-3.42 0.31-0.87 0.51-1.72 0.51-2.41C12.21 4.93 10.76 3.47 8.98 3.47zM8.98 8.03c-0.73 0-1.33-0.6-1.33-1.33 0-0.73 0.6-1.33 1.33-1.33 0.73 0 1.33 0.6 1.33 1.33C10.31 7.44 9.71 8.03 8.98 8.03z"></path></svg>

            </span>
            <span class="jmd-need-help-link-title">Locate Medical Science Laison</span>
            <span class="jmd-need-help-link-title">www.janssenmsl.com</span>
        </a>
    </div>
</div>

</div>

<div class="main-container <?php print $container_class; ?>">

 

    <section<?php print $content_column_class; ?>>
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </section>

    
  </div>
</div>

<footer class="jmd-footer">
    <div class="jmd-container">
        <div class="jmd-footer-grid">
            <?php if (!empty($page['footer'])): ?>
              <?php print render($page['footer']); ?>
            <?php endif; ?>
            <div class="jmd-footer-grid-col-two">
              <?php if (!empty($page['footer_menu'])): ?>
                <?php print render($page['footer_menu']); ?>
            <?php endif; ?>
            </div>
        </div>
    </div>
</footer>
