<!DOCTYPE html><!--[if lt IE 7]><html class="no-js ie ie6 lt-ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 7]>   <html class="no-js ie ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 8]>   <html class="no-js ie ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 9]>   <html class="no-js ie ie9 lt-ie10"><![endif]-->
<!--[if gt IE 9]><html class="no-js ie ie10"><![endif]-->
<!--[if !IE]><!-->
<html class="no-js"><!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <title>Human Resources Information System &hearts; Universitas Pembangunan Jaya</title>
    <!-- Modernizr -->
    <script src="<?= base_url('application/public/js/groundwork') ?>/libs/modernizr-2.6.2.min.js"></script>
    <!-- jQuery-->
    <script type="text/javascript" src="<?= base_url('application/public/js/groundwork') ?>/libs/jquery-1.10.2.min.js"></script>
    <!-- framework css --><!--[if gt IE 9]><!-->
    <link type="text/css" rel="stylesheet" href="<?= base_url('application/public/style/groundwork/css') ?>/groundwork.css"><!--<![endif]--><!--[if lte IE 9]>
    <link type="text/css" rel="stylesheet" href="<?= base_url('application/public/style/groundwork/css') ?>/groundwork-core.css">
    <link type="text/css" rel="stylesheet" href="<?= base_url('application/public/style/groundwork/css') ?>/groundwork-type.css">
    <link type="text/css" rel="stylesheet" href="<?= base_url('application/public/style/groundwork/css') ?>/groundwork-ui.css">
    <link type="text/css" rel="stylesheet" href="<?= base_url('application/public/style/groundwork/css') ?>/groundwork-anim.css">
    <link type="text/css" rel="stylesheet" href="<?= base_url('application/public/style/groundwork/css') ?>/groundwork-ie.css"><![endif]-->
    <style type="text/css">
      .logo {
        position: relative;
        top: -0.5em;
      }
      .logo a, .logo a:visited {
        text-decoration: none;
        color: #2B2B2D;
      }
      .logo img {
        height: 2em;
        position: relative;
        top: 0.55em;
        margin-right: 0.3em;
      }
      
    </style>
  </head>
  <body>
    <header class="padded">
      <div class="container">
        <div class="row">
          <div class="one half">
            <h2 class="logo"><a href="/" target="_parent"><img src="images/groundwork-logo.svg" alt="GroundworkCSS">GroundworkCSS 2</a></h2>
          </div>
          <div class="one half">
            <p class="small double pad-top no-pad-small-tablet align-right align-left-small-tablet"><a href="https://github.com/groundworkcss/groundwork" target="_parent">Github Project</a> - Version 2.3.5<br>Created & Maintained by <a href="http://twitter.com/ghepting" target="_blank">Gary Hepting</a></p>
          </div>
        </div>
        <nav role="navigation" class="nav gap-top">
          <ul role="menubar">
            <li role="menu">
              <button>Presensi Karyawan/Dosen</button>
              <ul>
                <li><a href="#">Input Keterangan</a></li>
                <li role="menu">
                <button title="Laporan Presensi">Laporan Presensi</button>
                <ul>
                    <li><a href="./navigation.html" title="Navigation">Per Karyawan Per Bulan</a></li>
                    <li><a href="./buttons.html" title="Buttons, button groups, button menus">Per Bagian/Prodi Per Tahun</a></li>
                </ul>
                </li>
              </ul>
            </li>
            <li role="menu">
              <button>Documentation</button>
              <ul>
                <li><a href="./grid.html" title="Responsive grid system, grid adapters and helpers">Grid</a></li>
                <li><a href="./helpers.html" title="Layout helpers, spinners and much more">Helpers</a></li>
                <li><a href="./typography.html" title="Text elements, quotes, code and web fonts">Typography</a></li>
                <li role="menu">
                  <button title="Navigation, buttons, boxes, message boxes, tables, tabs, and forms">UI Elements</button>
                  <ul>
                    <li><a href="./navigation.html" title="Navigation">Navigation</a></li>
                    <li><a href="./buttons.html" title="Buttons, button groups, button menus">Buttons</a></li>
                    <li><a href="./boxes.html" title="Boxes">Boxes</a></li>
                    <li><a href="./messages.html" title="Message boxes">Message Boxes</a></li>
                    <li><a href="./tables.html" title="Tables">Tables</a></li>
                    <li><a href="./tabs.html" title="Tabs">Tabs</a></li>
                    <li><a href="./forms.html" title="Form elements">Form Elements</a></li>
                  </ul>
                </li>
                <li><a href="./icons.html" title="Icons">Icons</a></li>
                <li><a href="./responsive-text.html" title="Responsive text and multi-line text block truncation">Responsive Text</a></li>
                <li><a href="./placeholder-text.html" title="Placeholder text and placeholder fonts for rapid prototyping and wireframes">Placeholder Text</a></li>
                <li><a href="./animations.html" title="Pure CSS3 Animations">Animations</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <div class="container">
      <div class="padded">
        <div class="row">
          <div class="three fifths bounceInRight animated">
            <h1 class="zero museo-slab">Responsive Design Made Easy</h1>
            <p class="quicksand">A responsive HTML5, CSS & Javascript framework created and maintained by <a href="http://twitter.com/ghepting" target="_blank">Gary Hepting</a></p>
            <p class="quicksand"> </p>
          </div>
          <div class="two fifths align-right-ipad align-right-desktop flipInX animated">
            <p class="quicksand">Get Started</p>
            <p><a href="layout-a.html" rel="next" class="green button">View Example Layouts </a></p>
          </div>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="one whole padded bounceInLeft animated">
          <h1 data-compression="22.25" data-min="22" class="quicksand responsive">A Responsive HTML5, CSS<br>and Javascript Framework</h1>
          <h4>Create scalable, accessible web applications that work on virtually anything.</h4>
          <div class="row white box">
            <div class="three-up two-up-small-tablet padded">
              <h4 class="zero"><i class="icon-th icon-2x gap-right"></i> Grid System</h4>
              <p>A highly configurable, nestable, fractions-based, responsive & adaptive, fluid grid layout system</p>
            </div>
            <div class="three-up two-up-small-tablet padded">
              <h4 class="zero"><i class="icon-tablet icon-2x gap-right"></i> Works Everywhere</h4>
              <p>Works on virtually everything &mdash; mobile phones, tablets, notebooks, desktops, retina and big screens</p>
            </div>
            <div class="three-up two-up-small-tablet padded">
              <h4 class="zero"><i class="icon-plus-sign-alt icon-2x gap-right"></i> Highly Accessible</h4>
              <p>Built with a focus on accessibility, supporting <abbr title="Accessible Rich Internet Applications">ARIA</abbr> state/role and semantic element selectors</p>
            </div>
            <div class="three-up two-up-small-tablet padded">
              <h4 class="zero"><i class="icon-thumbs-up icon-2x gap-right"></i> Semantic</h4>
              <p>Supports semantic markup with <abbr title="Accessible Rich Internet Applications">ARIA</abbr> attribute selectors, using Sass' @extend, @mixins, %placeholders & more</p>
            </div>
            <div class="three-up two-up-small-tablet padded">
              <h4 class="zero"><i class="icon-magic icon-2x gap-right"></i> Built with Sass</h4>
              <p>Built from the ground up with <a href="http://sass-lang.com/" target="_blank">Sass</a>, the world's most powerful CSS preprocessor</p>
            </div>
            <div class="three-up two-up-small-tablet padded">
              <h4 class="zero"><i class="icon-cogs icon-2x gap-right"></i> Write Less, Do more</h4>
              <p>Keep source code free of vendor prefixes. <a href="https://github.com/ai/autoprefixer" target="_blank">Autoprefixer</a> is a CSS postprocessor that keeps code future-friendly</p>
            </div>
            <div class="three-up two-up-small-tablet padded">
              <h4 class="zero"><i class="icon-edit-sign icon-2x gap-right"></i> Customizable</h4>
              <p>Easy to customize, and add your own styles and bolt on additional functionality</p>
            </div>
            <div class="three-up two-up-small-tablet padded">
              <h4 class="zero"><i class="icon-text-width icon-2x gap-right"></i> Responsive Text</h4>
              <p>Includes the tools you need to create responsive headings, responsive text blocks and responsive tables</p>
            </div>
            <div class="three-up two-up-small-tablet padded">
              <h4 class="zero"><i class="icon-star icon-2x gap-right"></i> Rapid Prototyping</h4>
              <p>Rapid prototyping and wireframes with dynamic placeholder text, images and fonts</p>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="pad-top pad-left pad-right bounceInRight animated">
        <h4 class="zero">Example Layouts and Documentation</h4>
        <p>Rapid prototypes and usage examples to get you started.</p>
      </div>
      <div class="row">
        <div class="one fourth two-up-small-tablet padded bounceInDown animated"><a href="./layout-a.html">
            <h5 class="asphalt box align-center">
              <div class="gap-top gap-bottom"><img src="../images/layout-a.png" class="round">
                <div class="small turquoise button">Web Site Layout</div>
              </div>
            </h5></a></div>
        <div class="one fourth two-up-small-tablet padded bounceInLeft animated"><a href="./layout-b.html">
            <h5 class="yellow box align-center">
              <div class="gap-top gap-bottom"><img src="../images/layout-b.png" class="round">
                <div class="small orange button">Image Gallery</div>
              </div>
            </h5></a></div>
        <div class="one fourth two-up-small-tablet padded bounceInUp animated"><a href="./layout-c.html">
            <h5 class="pink box align-center">
              <div class="gap-top gap-bottom"><img src="../images/layout-c.png" class="round">
                <div class="small purple button">Ecommerce</div>
              </div>
            </h5></a></div>
        <div class="one fourth two-up-small-tablet padded bounceInRight animated"><a href="./grid.html">
            <h5 class="green box align-center">
              <div class="gap-top gap-bottom"><img src="../images/example-usage.png" class="round">
                <div class="small asphalt button">Usage Examples</div>
              </div>
            </h5></a></div>
      </div>
    </div>
    <footer class="gap-top bounceInUp animated">
      <div class="box square charcoal">
        <div class="container padded">
          <div class="row">
            <div class="one small-tablet fourth padded">
              <h5 class="green">Example Layouts</h5>
              <ul class="unstyled">
                <li><a href="./layout-a.html">Web Page</a></li>
                <li><a href="./layout-b.html">Image Gallery</a></li>
                <li><a href="./layout-c.html">Ecommerce Page</a></li>
              </ul>
            </div>
            <div class="three small-tablet fourths padded">
              <h5 class="blue">Documentation</h5>
              <ul class="unstyled three-column two-column-mobile">
                <li><a href="./grid.html" title="Responsive grid system, grid adapters and helpers">Grid</a></li>
                <li><a href="./helpers.html" title="Layout helpers, spinners and much more">Helpers</a></li>
                <li><a href="./typography.html" title="Text elements, quotes, code and web fonts">Typography</a></li>
                <li><a href="./navigation.html" title="Navigation">Navigation</a></li>
                <li><a href="./buttons.html" title="Buttons, button groups, button menus">Buttons</a></li>
                <li><a href="./boxes.html" title="Boxes">Boxes</a></li>
                <li><a href="./messages.html" title="Message boxes">Message Boxes</a></li>
                <li><a href="./tables.html" title="Tables">Tables</a></li>
                <li><a href="./tabs.html" title="Tabs">Tabs</a></li>
                <li><a href="./forms.html" title="Form elements">Form Elements</a></li>
                <li><a href="./icons.html" title="Icons">Icons</a></li>
                <li><a href="./responsive-text.html" title="Responsive text and multi-line text block truncation">Responsive Text</a></li>
                <li><a href="./placeholder-text.html" title="Placeholder text and placeholder fonts for rapid prototyping and wireframes">Placeholder Text</a></li>
                <li><a href="./animations.html" title="Pure CSS3 Animations">Animations</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="box square">
        <div class="container padded">
          <div class="row">
            <div class="one half padded">
              <p>GroundworkCSS is <b>100% free</b> and <b>open source</b>. <a href="mailto:groundworkcss@gmail.com">Give a shout out</a> if you have any feedback.</p>
              <p>Find a bug? Help squash it by <a href="https://github.com/groundworkcss/groundwork/issues" target="_blank">filing an issue</a> on Github.</p>
            </div>
            <div class="one half padded">
              <p class="large padded align-right align-center-small-tablet"><a href="http://twitter.com/groundworkcss" target="_blank" title="@groundworkcss" style="text-decoration:none;" class="large inline gapped"></a><a href="http://github.com/groundworkcss" target="_blank" title="@groundworkcss" style="text-decoration:none;" class="large inline gapped"></a><a href="mailto:groundworkcss@gmail.com" title="groundworkcss@gmail.com" style="text-decoration:none;" class="large inline gapped"></a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- javascript-->
    <script type="text/javascript" src="<?= base_url('application/public/js/groundwork') ?>/groundwork.all.js"></script>
  </body>
</html>