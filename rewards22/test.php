<!DOCTYPE html>
<html>

<head><script type="text/javascript">var NREUMQ=NREUMQ||[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);</script>

  <meta charset="UTF-8">

  <title>Off-Canvas Left &middot; CodePen</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!--
    Copyright (c) 2012 Brad Frost, http://codepen.io/bradfrost

    Permission is hereby granted, free of charge, to any person obtaining
    a copy of this software and associated documentation files (the
    "Software"), to deal in the Software without restriction, including
    without limitation the rights to use, copy, modify, merge, publish,
    distribute, sublicense, and/or sell copies of the Software, and to
    permit persons to whom the Software is furnished to do so, subject to
    the following conditions:

    The above copyright notice and this permission notice shall be
    included in all copies or substantial portions of the Software.

    THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
    EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
    MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
    NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
    LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
    OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
    WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
  -->

  <link rel='stylesheet' href='http://bradfrost.github.com/this-is-responsive/styles.css'>

  <style>
.wrap {
      position: relative;
         -webkit-transition: all 0.3s ease-out;  
         -moz-transition: all 0.3s ease-out;
         -ms-transition: all 0.3s ease-out;
         -o-transition: all 0.3s ease-out;
         transition: all 0.3s ease-out;
      }
      .wrap.active {
         left: 16em;
      }
      a.menu-link {
          float: left;
          display: block;
          padding: 1em;
      }
      .oc {
         background: #808080;
         color: #fff;
         padding: 1em;
         clear: both;
         overflow: hidden;
      }
      .js .oc {
         width: 16em;
         height: 100%;
         position: absolute;
         top: 0;
         left: -16em;
      }

      .lorem {
         clear: both;
      }

      @media screen and (min-width: 48.25em) {
         a.menu-link {
            display: none;
         }
         .js .oc {
            position: static;
            float: left;
            width: 30%;
            height: 100%;

         }
         .wrap.active {
            left: 0;
         }
         .lorem {
            clear: none;
            margin-left: 30%;
         }
      }
  </style>

</head>

<body>

  <!--Pattern HTML-->
  <div id="pattern" class="pattern">
    <!--Begin Pattern HTML-->
    <div class="wrap" id="wrap">
      <a href="#menu" class="menu-link">More</a>
      <aside class="oc" id="menu" role="navigation">
        
            <div id="price-info" class="page-info">
               <p><label>Price List Name:</label> <span class="input-pricelname">Gaisano A</span></p>
               <p><label>Retailer Name:</label> Gaisano Interpace</p>
               <p><label>Contact Information:</label> email@gaisano.com.ph</p>
               <p><label>Operating Hours:</label> 10am - 5pm</p>
            </div>

            <?php require_once('elements/pricesettings-versions.php'); ?>
      </aside>
      <div class="lorem mod">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer iaculis dignissim orci viverra venenatis. Nulla sit amet quam at nisl sagittis adipiscing in a ligula. Nam in nisi neque. Ut in ipsum eget justo dignissim accumsan a sit amet neque. Nulla facilisi. Aliquam erat volutpat. Aliquam aliquet bibendum mollis. Aliquam erat volutpat. Sed commodo elit ac neque eleifend in commodo justo elementum. Curabitur tristique, odio id convallis aliquet, nibh augue sollicitudin lacus, at fermentum sem dolor eu lacus. Proin gravida dui in libero aliquet quis egestas odio dictum. Fusce in ligula vitae ante mollis viverra. Curabitur nibh felis, ornare ut tempor sed, lobortis id elit. Phasellus nec semper lorem. Pellentesque erat augue, tincidunt sed vulputate et, congue nec felis. Sed ligula metus, condimentum non commodo et, varius varius nisi.</p>

            <p>Nunc arcu justo, elementum ac accumsan id, porttitor ac sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lectus eros, dignissim sit amet viverra et, vulputate gravida dui. Donec at mattis tellus. Suspendisse nisi purus, porttitor in lacinia ornare, malesuada non dolor. Praesent ligula massa, blandit nec consequat et, sagittis ut purus. Aliquam erat volutpat. Maecenas a arcu ligula. Proin vitae eros purus, eu adipiscing orci. Nunc vestibulum, ante quis venenatis facilisis, lacus arcu gravida arcu, eget varius nibh lacus et leo. Aliquam lacinia, mi et convallis tincidunt, massa tellus accumsan felis, at consequat lacus ligula non leo. Pellentesque auctor ipsum lorem, ut feugiat purus. Mauris sed tellus orci, in pharetra dui. Morbi vestibulum lectus nec nulla bibendum mollis.</p>

            <p>Donec nulla nisi, dictum auctor aliquet a, ultrices quis ipsum. Nam bibendum arcu in quam condimentum ut aliquet odio luctus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi lacus nulla, laoreet a fermentum vel, scelerisque sed mi. In consectetur magna sed leo scelerisque id mattis enim vulputate. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus vulputate mauris et semper. Nam sed rhoncus justo. Duis quis orci quis lorem egestas mattis et in risus. Aenean justo eros, luctus sit amet ultricies et, interdum non est.</p>    
               <?php require_once('elements/pricesettings-table.php'); ?>  
      </div>
    </div>
  </div>
  <!--End Pattern HTML-->

  <script src="js/jquery.js"></script>

  <script>
    (function() {

    $(document).ready(function() {

      $('body').addClass('js');

      var $menu = $('#menu'),
        $menulink = $('.menu-link'),
        $wrap = $('#wrap');

      $menulink.click(function() {
        $menulink.toggleClass('active');
        $wrap.toggleClass('active');
        return false;
      });
    });

    })();
  </script>

  
</body>

</html>