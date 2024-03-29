<?php
$this->load->view('layout/head');
$this->load->view('layout/body_header');
?>
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
<?php
$this->load->view('layout/body_footer');
?>