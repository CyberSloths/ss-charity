<template>
  <div class="styleguide">
    <div>
      <h1>Styleguide</h1>
      <p>This controller is only accessible to developers and admin users.</p>
    </div>

    <div class="styleguide__content">
      <h2 id="typography" class="styleguide__title">Typography</h2>

      <h3>Paragraph</h3>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam egestas,  diam sit amet faucibus dictum, turpis libero porttitor diam, id  pellentesque orci augue adipiscing risus. Nulla id lacus eros. Nam  porttitor semper enim, sit amet vestibulum arcu adipiscing sed. Proin  dignissim, ligula id rhoncus fringilla, nunc lectus luctus magna, vitae  cursus neque arcu id risus. Phasellus eu risus quis mauris consectetur  luctus. Sed facilisis diam mauris, a vulputate ligula. Sed nec purus  mauris. Nulla euismod massa ac nisl gravida dictum. Fusce leo turpis,  accumsan non ultricies sed, consectetur id dui. Suspendisse porttitor  odio in ipsum dignissim mollis.</p>

      <h3>Paragraph (strikethrough, small, bold)</h3>

      <p>Maecenas id dolor odio, eu elementum augue. Suspendisse odio nisi,  aliquet eu tempus quis, rutrum quis sem. Nulla volutpat cursus dolor  tempus consectetur. <span style="text-decoration: line-through;">Proin faucibus, nulla at sodales interdum, lectus  lectus aliquet risus, ut rutrum velit ligula eget ligula. Sed volutpat,  elit non condimentum interdum, purus velit feugiat augue, id cursus  felis dui sed diam. Proin in lobortis tellus. Nullam fringilla dapibus  urna et pretium. Proin ac ligula ut purus luctus blandit ac ac lacus.</span>  Etiam molestie <small>consectetur felis vitae mollis. Pellentesque semper  bibendum lectus, molestie porta odio aliquet vehicula. Nunc et volutpat  arcu.</small> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices  posuere cubilia Curae; Cras pretium mauris eu dolor molestie hendrerit.  Duis lectus leo, gravida sed ullamcorper eu, pretium eu augue.  <b>Vestibulum eleifend, velit et dapibus dapibus, justo quam dictum diam,  ac euismod augue ipsum ac leo.</b> Aliquam erat volutpat. Morbi a mi ac urna  tincidunt fermentum consectetur sit amet arcu.</p>

      <h3>Macrons</h3>

      <p>ĀĒĪŌŪāēīōū. He aha ngā mahi a te rongoā.</p>
      <p><b>ĀĒĪŌŪāēīōū. He aha ngā mahi a te rongoā.</b></p>
      <p><em>ĀĒĪŌŪāēīōū. He aha ngā mahi a te rongoā.</em></p>
      <p><small>ĀĒĪŌŪāēīōū. He aha ngā mahi a te rongoā.</small></p>

      <h2 id="links" class="styleguide__title">Links</h2>

      <p>Lorem ipsum dolor sit amet, <a href="/_styleguide#">consectetur adipiscing</a> elit.</p>
      <p>Lorem ipsum dolor sit amet, <a href="http://google.com">consectetur adipiscing</a> elit.</p>

      <h2 id="lists" class="styleguide__title">Lists</h2>

      <h3>Unordered list (Short)</h3>

      <ul>
        <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
        <li>Aliquam tincidunt mauris eu risus.</li>
        <li>Vestibulum auctor dapibus neque.</li>
      </ul>

      <h3>Unordered list (Long)</h3>

      <ul>
        <li>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</li>
        <li>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</li>
        <li>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</li>
        <li>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</li>
      </ul>

      <h3>Unordered list (Nested)</h3>

      <ul>
        <li>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in,
            diam. Sed arcu. Cras consequat.
        </li>
        <li>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique
            cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.
        </li>
        <ul>
          <li>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu
          erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.
          </li>
          <ul>
          <li>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in,
              diam. Sed arcu. Cras consequat.
          </li>
          <li>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum
              vulputate, nunc.
          </li>
          <ul>
              <li>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem
              tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.
              </li>
              <ul>
              <li>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum
                  vulputate, nunc.
              </li>
              </ul>
          </ul>
          <li>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu
              erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.
          </li>
          </ul>
        </ul>
      </ul>

      <h3>Ordered list (Short)</h3>

      <ol>
        <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
        <li>Aliquam tincidunt mauris eu risus.</li>
        <li>Vestibulum auctor dapibus neque.</li>
      </ol>

      <h3>Ordered list (Long)</h3>

      <ol>
        <li>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</li>
        <li>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</li>
        <li>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</li>
        <li>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</li>
      </ol>

      <h3>Ordered list (Nested)</h3>

      <ol>
        <li>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</li>
        <li>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</li>
        <ol>
          <li>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</li>
          <ol>
            <li>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</li>
            <li>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</li>
            <ol>
              <li>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</li>
              <ol>
                <li>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</li>
              </ol>
            </ol>
            <li>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</li>
          </ol>
        </ol>
      </ol>

      <h2 id="blockquote" class="styleguide__title">Blockquote</h2>

      <blockquote>
        <p>Sed facilisis diam mauris, a vulputate ligula. Sed nec purus mauris. Nulla euismod massa ac nisl gravida dictum. Fusce leo turpis, accumsan non ultricies sed, consectetur id dui.</p>
      </blockquote>

      <h2 id="images" class="styleguide__title">Images</h2>

      <div class="typography">
        <p>Images can be added through the WYSIWYG fields in the CMS using the `Insert Media` action. The layout of
            the image can be modified with the `Alignment / style` dropdown field.</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam egestas, diam sit amet faucibus dictum,
            turpis libero porttitor diam, id pellentesque orci augue adipiscing risus. Nulla id lacus eros. Nam
            porttitor semper enim, sit amet vestibulum arcu adipiscing sed. Proin dignissim, ligula id rhoncus
            fringilla, nunc lectus luctus magna, vitae cursus neque arcu id risus. Phasellus eu risus quis mauris
            consectetur luctus. Sed facilisis diam mauris, a vulputate ligula. Sed nec purus mauris. Nulla euismod
            massa ac nisl gravida dictum. Fusce leo turpis, accumsan non ultricies sed, consectetur id dui.
            Suspendisse porttitor odio in ipsum dignissim mollis.</p>
        <img class="leftAlone" title="" src="./images/placeholder.png" alt="" width="400" height="200">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam egestas, diam sit amet faucibus dictum,
            turpis libero porttitor diam, id pellentesque orci augue adipiscing risus. Nulla id lacus eros. Nam
            porttitor semper enim, sit amet vestibulum arcu adipiscing sed. Proin dignissim, ligula id rhoncus
            fringilla, nunc lectus luctus magna, vitae cursus neque arcu id risus. Phasellus eu risus quis mauris
            consectetur luctus. Sed facilisis diam mauris, a vulputate ligula. Sed nec purus mauris. Nulla euismod
            massa ac nisl gravida dictum. Fusce leo turpis, accumsan non ultricies sed, consectetur id dui.
            Suspendisse porttitor odio in ipsum dignissim mollis.</p>
        <img class="center" title="" src="./images/placeholder.png" alt="" width="400" height="200">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam egestas, diam sit amet faucibus dictum,
            turpis libero porttitor diam, id pellentesque orci augue adipiscing risus. Nulla id lacus eros. Nam
            porttitor semper enim, sit amet vestibulum arcu adipiscing sed. Proin dignissim, ligula id rhoncus
            fringilla, nunc lectus luctus magna, vitae cursus neque arcu id risus. Phasellus eu risus quis mauris
            consectetur luctus. Sed facilisis diam mauris, a vulputate ligula. Sed nec purus mauris. Nulla euismod
            massa ac nisl gravida dictum. Fusce leo turpis, accumsan non ultricies sed, consectetur id dui.
            Suspendisse porttitor odio in ipsum dignissim mollis.</p>
        <img class="left" title="" src="./images/placeholder.png" alt="" width="400" height="200">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam egestas, diam sit amet faucibus dictum,
            turpis libero porttitor diam, id pellentesque orci augue adipiscing risus. Nulla id lacus eros. Nam
            porttitor semper enim, sit amet vestibulum arcu adipiscing sed. Proin dignissim, ligula id rhoncus
            fringilla, nunc lectus luctus magna, vitae cursus neque arcu id risus. Phasellus eu risus quis mauris
            consectetur luctus. Sed facilisis diam mauris, a vulputate ligula. Sed nec purus mauris. Nulla euismod
            massa ac nisl gravida dictum. Fusce leo turpis, accumsan non ultricies sed, consectetur id dui.
            Suspendisse porttitor odio in ipsum dignissim mollis.</p>
        <img class="right" title="" src="./images/placeholder.png" alt="" width="400" height="200">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam egestas, diam sit amet faucibus dictum,
            turpis libero porttitor diam, id pellentesque orci augue adipiscing risus. Nulla id lacus eros. Nam
            porttitor semper enim, sit amet vestibulum arcu adipiscing sed. Proin dignissim, ligula id rhoncus
            fringilla, nunc lectus luctus magna, vitae cursus neque arcu id risus. Phasellus eu risus quis mauris
            consectetur luctus. Sed facilisis diam mauris, a vulputate ligula. Sed nec purus mauris. Nulla euismod
            massa ac nisl gravida dictum. Fusce leo turpis, accumsan non ultricies sed, consectetur id dui.
            Suspendisse porttitor odio in ipsum dignissim mollis.</p>

        <h3>Images (Caption)</h3>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam egestas, diam sit amet faucibus dictum,
            turpis libero porttitor diam, id pellentesque orci augue adipiscing risus. Nulla id lacus eros. Nam
            porttitor semper enim, sit amet vestibulum arcu adipiscing sed. Proin dignissim, ligula id rhoncus
            fringilla, nunc lectus luctus magna, vitae cursus neque arcu id risus. Phasellus eu risus quis mauris
            consectetur luctus. Sed facilisis diam mauris, a vulputate ligula. Sed nec purus mauris. Nulla euismod
            massa ac nisl gravida dictum. Fusce leo turpis, accumsan non ultricies sed, consectetur id dui.
            Suspendisse porttitor odio in ipsum dignissim mollis.</p>
        <div class="captionImage leftAlone" style="width: 400px;">
          <img class="leftAlone" title="" src="./images/placeholder.png" alt="" width="400" height="200">
          <p class="caption leftAlone">This is a caption</p>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam egestas, diam sit amet faucibus dictum,
            turpis libero porttitor diam, id pellentesque orci augue adipiscing risus. Nulla id lacus eros. Nam
            porttitor semper enim, sit amet vestibulum arcu adipiscing sed. Proin dignissim, ligula id rhoncus
            fringilla, nunc lectus luctus magna, vitae cursus neque arcu id risus. Phasellus eu risus quis mauris
            consectetur luctus. Sed facilisis diam mauris, a vulputate ligula. Sed nec purus mauris. Nulla euismod
            massa ac nisl gravida dictum. Fusce leo turpis, accumsan non ultricies sed, consectetur id dui.
            Suspendisse porttitor odio in ipsum dignissim mollis.</p>
        <div class="captionImage center" style="width: 400px;">
          <img class="center" title="" src="./images/placeholder.png" alt="" width="400" height="200">
          <p class="caption center">This is a caption</p>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam egestas, diam sit amet faucibus dictum,
            turpis libero porttitor diam, id pellentesque orci augue adipiscing risus. Nulla id lacus eros. Nam
            porttitor semper enim, sit amet vestibulum arcu adipiscing sed. Proin dignissim, ligula id rhoncus
            fringilla, nunc lectus luctus magna, vitae cursus neque arcu id risus. Phasellus eu risus quis mauris
            consectetur luctus. Sed facilisis diam mauris, a vulputate ligula. Sed nec purus mauris. Nulla euismod
            massa ac nisl gravida dictum. Fusce leo turpis, accumsan non ultricies sed, consectetur id dui.
            Suspendisse porttitor odio in ipsum dignissim mollis.</p>
        <div class="captionImage left" style="width: 400px;">
          <img class="left" title="" src="./images/placeholder.png" alt="" width="400" height="200">
          <p class="caption left">This is a caption</p>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam egestas, diam sit amet faucibus dictum,
            turpis libero porttitor diam, id pellentesque orci augue adipiscing risus. Nulla id lacus eros. Nam
            porttitor semper enim, sit amet vestibulum arcu adipiscing sed. Proin dignissim, ligula id rhoncus
            fringilla, nunc lectus luctus magna, vitae cursus neque arcu id risus. Phasellus eu risus quis mauris
            consectetur luctus. Sed facilisis diam mauris, a vulputate ligula. Sed nec purus mauris. Nulla euismod
            massa ac nisl gravida dictum. Fusce leo turpis, accumsan non ultricies sed, consectetur id dui.
            Suspendisse porttitor odio in ipsum dignissim mollis.</p>
        <div class="captionImage right" style="width: 400px;">
          <img class="right" title="" src="./images/placeholder.png" alt="" width="400" height="200">
          <p class="caption right">This is a caption</p>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam egestas, diam sit amet faucibus dictum,
            turpis libero porttitor diam, id pellentesque orci augue adipiscing risus. Nulla id lacus eros. Nam
            porttitor semper enim, sit amet vestibulum arcu adipiscing sed. Proin dignissim, ligula id rhoncus
            fringilla, nunc lectus luctus magna, vitae cursus neque arcu id risus. Phasellus eu risus quis mauris
            consectetur luctus. Sed facilisis diam mauris, a vulputate ligula. Sed nec purus mauris. Nulla euismod
            massa ac nisl gravida dictum. Fusce leo turpis, accumsan non ultricies sed, consectetur id dui.
            Suspendisse porttitor odio in ipsum dignissim mollis.</p>
      </div>

      <h2 id="tables" class="styleguide__title">Tables</h2>

      <table>
        <thead>
          <tr>
            <td>#</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Username</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@motto</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Sarah</td>
            <td>Connor</td>
            <td>@sconnor</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@larrythebird</td>
          </tr>
        </tbody>
      </table>

      <table class="table--striped">
        <thead>
          <tr>
            <td>#</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Username</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@motto</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Sarah</td>
            <td>Connor</td>
            <td>@sconnor</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@larrythebird</td>
          </tr>
        </tbody>
      </table>

      <table>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@motto</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Sarah</td>
            <td>Connor</td>
            <td>@sconnor</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@larrythebird</td>
          </tr>
        </tbody>
      </table>

      <h2 id="headings" class="styleguide__title">Headings</h2>

      <div id="styleguide-headings">
          <h1>h1. Heading 1<span class="styleguide__heading-styles">(700, 42px, #292929)</span></h1>
          <h2>h2. Heading 2<span class="styleguide__heading-styles">(500, 30px, #292929)</span></h2>
          <h3>h3. Heading 3<span class="styleguide__heading-styles">(600, 22px, #292929)</span></h3>
          <h4>h4. Heading 4<span class="styleguide__heading-styles">(600, 20px, #292929)</span></h4>
          <h5>h5. Heading 5<span class="styleguide__heading-styles">(600, 18px, #292929)</span></h5>
          <h6>h6. Heading 6<span class="styleguide__heading-styles">(600, 16px, #292929)</span></h6>
      </div>

      <h1>Heading 1 <a href="/_styleguide#">link</a></h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam egestas, diam sit amet faucibus dictum, turpis libero porttitor diam, id pellentesque orci augue adipiscing risus. Nulla id lacus eros. Nam porttitor semper enim, sit amet vestibulum arcu adipiscing sed. Proin dignissim, ligula id rhoncus fringilla, nunc lectus luctus magna, vitae cursus neque arcu id risus. Phasellus eu risus quis mauris consectetur luctus. Sed facilisis diam mauris, a vulputate ligula. Sed nec purus mauris. Nulla euismod massa ac nisl gravida dictum. Fusce leo turpis, accumsan non ultricies sed, consectetur id dui. Suspendisse porttitor odio in ipsum dignissim mollis.</p>
      <p>Maecenas id dolor odio, eu elementum augue. Suspendisse odio nisi, aliquet eu tempus quis, rutrum quis sem. Nulla volutpat cursus dolor tempus consectetur. Proin faucibus, nulla at sodales interdum, lectus lectus aliquet risus, ut rutrum velit ligula eget ligula. Sed volutpat, elit non condimentum interdum, purus velit feugiat augue, id cursus felis dui sed diam. Proin in lobortis tellus. Nullam fringilla dapibus urna et pretium. Proin ac ligula ut purus luctus blandit ac ac lacus. Etiam molestie consectetur felis vitae mollis. Pellentesque semper bibendum lectus, molestie porta odio aliquet vehicula. Nunc et volutpat arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras pretium mauris eu dolor molestie hendrerit. Duis lectus leo, gravida sed ullamcorper eu, pretium eu augue. Vestibulum eleifend, velit et dapibus dapibus, justo quam dictum diam, ac euismod augue ipsum ac leo. Aliquam erat volutpat. Morbi a mi ac urna tincidunt fermentum consectetur sit amet arcu.</p>

      <h2>Heading 2 <a href="/_styleguide#">link</a></h2>
      <p>Nam posuere augue et leo rutrum condimentum. Etiam a odio blandit odio aliquam hendrerit. In hac habitasse platea dictumst. Ut iaculis facilisis justo, a elementum felis imperdiet et. Vestibulum gravida volutpat condimentum. Aliquam condimentum, turpis eu tempus iaculis, neque risus cursus mauris, id lacinia elit eros ut diam. Curabitur lobortis pellentesque posuere. Aliquam magna eros, auctor vitae faucibus sit amet, ullamcorper a est. In hac habitasse platea dictumst. Vestibulum condimentum dui eu mi pretium adipiscing. Ut dictum vestibulum imperdiet.</p>

      <h3>Heading 3 <a href="/_styleguide#">link</a></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam egestas,  diam sit amet faucibus dictum, turpis libero porttitor diam, id pellentesque orci augue adipiscing risus. Nulla id lacus eros. Nam porttitor semper enim, sit amet vestibulum arcu adipiscing sed. Proin dignissim, ligula id rhoncus fringilla, nunc lectus luctus magna, vitae cursus neque arcu id risus. Phasellus eu risus quis mauris consectetur luctus. Sed facilisis diam mauris, a vulputate ligula. Sed nec purus mauris. Nulla euismod massa ac nisl gravida dictum. Fusce leo turpis, accumsan non ultricies sed, consectetur id dui. Suspendisse porttitor odio in ipsum dignissim mollis.</p>

      <h4>Heading 4 <a href="/_styleguide#">link</a></h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam molestie malesuada diam eu rhoncus. Aliquam justo elit, convallis sed eleifend condimentum, ornare at nisl. Sed at leo euismod velit egestas ultricies vel quis purus. Morbi accumsan fermentum ipsum convallis rhoncus. Aenean tincidunt, neque sed consequat pulvinar, sem felis ornare lectus, ac mattis purus eros vitae mauris. Vestibulum in metus sed nisi imperdiet faucibus ac sit amet orci. Duis sit amet tincidunt libero. Duis risus purus, rutrum eget bibendum et, faucibus sed magna. Donec metus nunc, eleifend id sollicitudin vitae, blandit pulvinar nisl. Ut adipiscing pretium mi vel malesuada. Aliquam id quam lectus. Duis fringilla purus eget ipsum semper iaculis. Nullam nec mauris leo, eu posuere lacus. Maecenas turpis massa, egestas et vestibulum ac, rutrum nec sapien. Nam consequat varius enim, quis congue quam elementum vel. Proin eleifend lobortis arcu, quis dignissim orci consequat sed. Nunc vel libero in lorem hendrerit adipiscing sit amet non eros. Praesent eget eros est.</p>

      <h5>Heading 5 <a href="/_styleguide#">link</a></h5>
      <p>Duis lectus dolor, euismod eu adipiscing sit amet, fringilla ut augue. Pellentesque tristique condimentum iaculis. Aliquam erat volutpat. Donec nec sapien urna. Vivamus nec felis dui, ut porta mauris. In mollis porttitor ipsum, vitae elementum erat lacinia imperdiet. Sed ut sem ut erat convallis pretium. Vestibulum nec orci nec urna ullamcorper tincidunt. Integer at massa sit amet orci cursus varius. Curabitur eu ipsum massa, at condimentum justo.</p>

      <h6>Heading 6 <a href="/_styleguide#">link</a></h6>
      <p>Duis lectus dolor, euismod eu adipiscing sit amet, fringilla ut augue. Pellentesque tristique condimentum iaculis. Aliquam erat volutpat. Donec nec sapien urna. Vivamus nec felis dui, ut porta mauris. In mollis porttitor ipsum, vitae elementum erat lacinia imperdiet. Sed ut sem ut erat convallis pretium. Vestibulum nec orci nec urna ullamcorper tincidunt. Integer at massa sit amet orci cursus varius. Curabitur eu ipsum massa, at condimentum justo.</p>

      <h2 id="form" class="styleguide__title">Form</h2>

      <form id="Form_TestForm" action="SimpleStyleguideController/TestForm" method="post" enctype="application/x-www-form-urlencoded">
        <p id="Form_TestForm_error" class="message warning">This is a form wide message. See the alerts component for site wide messages.</p>

        <fieldset>
          <div id="Form_TestForm_SimpleText_Holder" class="field text">
            <label class="left" for="Form_TestForm_SimpleText">Simple Text Field</label>
            <div class="middleColumn">
              <input type="text" name="SimpleText" class="text form-control" id="Form_TestForm_SimpleText" aria-required="true">
            </div>
          </div>

          <div id="Form_TestForm_SimpleTextGood_Holder" class="field text holder-good">
            <label class="left" for="Form_TestForm_SimpleTextGood">Simple Text Field (good)</label>
            <div class="middleColumn">
              <input type="text" name="SimpleTextGood" class="text form-control holder-good" id="Form_TestForm_SimpleTextGood">
            </div>

            <span class="message good">This is a good message</span>
          </div>

          <div id="Form_TestForm_SimpleTextWarning_Holder" class="field text holder-warning">
            <label class="left" for="Form_TestForm_SimpleTextWarning">Simple Text Field (warning)</label>
            <div class="middleColumn">
              <input type="text" name="SimpleTextWarning" class="text form-control holder-warning" id="Form_TestForm_SimpleTextWarning">
            </div>

            <span class="message warning">This is a warning message</span>
          </div>


          <div id="Form_TestForm_SimpleTextBad_Holder" class="field text holder-bad">
            <label class="left" for="Form_TestForm_SimpleTextBad">Simple Text Field (bad)</label>
            <div class="middleColumn">
              <input type="text" name="SimpleTextBad" class="text form-control holder-bad" id="Form_TestForm_SimpleTextBad">
            </div>

            <span class="message bad">This is an error message</span>
          </div>

          <div id="Form_TestForm_Number_Holder" class="field numeric text">
            <label class="left" for="Form_TestForm_Number">Number Field</label>
            <div class="middleColumn">
              <input type="text" name="Number" class="numeric text form-control" id="Form_TestForm_Number">
            </div>
          </div>

          <div id="Form_TestForm_Email_Holder" class="field email text">
            <label class="left" for="Form_TestForm_Email">Email Field</label>
            <div class="middleColumn">
              <input type="email" name="Email" class="email text form-control" id="Form_TestForm_Email" aria-required="true">
            </div>
          </div>

          <div id="Form_TestForm_Dropdown_Holder" class="field dropdown">
            <label class="left" for="Form_TestForm_Dropdown">Normal dropdown</label>
            <div class="middleColumn">
              <select name="Dropdown" class="dropdown form-control" id="Form_TestForm_Dropdown" aria-required="true">
                <option value="1">One option</option>
                <option value="2">Two option</option>
              </select>
            </div>
          </div>

          <div id="Form_TestForm_Checkbox_Holder" class="field checkbox">
            <label class="right" for="Form_TestForm_Checkbox">
              <input type="checkbox" name="Checkbox" value="1" class="checkbox" id="Form_TestForm_Checkbox" aria-required="true">
              Checkbox
            </label>
          </div>

          <div id="CheckboxSet" class="field optionset checkboxset">
            <label class="left">Checkbox set</label>
            <div class="middleColumn">
              <ul class="optionset checkboxset" id="Form_TestForm_CheckboxSet">
                <li class="odd val1 checkbox">
                  <label for="Form_TestForm_CheckboxSet_1">
                    <input id="Form_TestForm_CheckboxSet_1" class="checkbox" name="CheckboxSet[1]" type="checkbox" value="1">
                    One option
                  </label>
                </li>

                <li class="even val2 checkbox">
                  <label for="Form_TestForm_CheckboxSet_2">
                    <input id="Form_TestForm_CheckboxSet_2" class="checkbox" name="CheckboxSet[2]" type="checkbox" value="2">
                    Two option
                  </label>
                </li>

                <li class="odd val3 checkbox">
                  <label for="Form_TestForm_CheckboxSet_3">
                    <input id="Form_TestForm_CheckboxSet_3" class="checkbox" name="CheckboxSet[3]" type="checkbox" value="3">
                    Three option
                  </label>
                </li>
              </ul>
            </div>
          </div>

          <div id="Option" class="field optionset">
            <label class="left">Option</label>
            <div class="middleColumn">
              <ul class="optionset" id="Form_TestForm_Option">
                <li class="odd val1 radio">
                  <label for="Form_TestForm_Option_1">
                    <input id="Form_TestForm_Option_1" class="radio" name="Option" type="radio" value="1">
                    One option
                  </label>
                </li>
              </ul>
            </div>
          </div>

          <div id="OptionSet" class="field optionset">
            <label class="left">Option set</label>
            <div class="middleColumn">
              <ul class="optionset" id="Form_TestForm_OptionSet">
                <li class="odd val1 radio">
                  <label for="Form_TestForm_OptionSet_1">
                    <input id="Form_TestForm_OptionSet_1" class="radio" name="OptionSet" type="radio" value="1">
                    One option
                  </label>
                </li>

                <li class="even val2 radio">
                  <label for="Form_TestForm_OptionSet_2">
                    <input id="Form_TestForm_OptionSet_2" class="radio" name="OptionSet" type="radio" value="2">
                    Two option
                  </label>
                </li>

                <li class="odd val3 radio">
                  <label for="Form_TestForm_OptionSet_3">
                    <input id="Form_TestForm_OptionSet_3" class="radio" name="OptionSet" type="radio" value="3">
                    Three option
                  </label>
                </li>
              </ul>
            </div>
          </div>

          <div id="Form_TestForm_Text_Holder" class="field text">
            <label class="left" for="Form_TestForm_Text">Text</label>
            <div class="middleColumn">
              <input type="text" name="Text" class="text form-control" id="Form_TestForm_Text">
            </div>
            <span class="description">This is a description</span>
          </div>

          <input type="hidden" name="SecurityID" value="183226317cb0c3471c977f9b998e108a35c035ca" class="hidden" id="Form_TestForm_SecurityID">

          <div class="clear"><!-- --></div>
        </fieldset>

        <div class="Actions">
          <input type="submit" name="action_doForm" value="Submit" class="action btn btn-primary" id="Form_TestForm_action_doForm">
        </div>
      </form>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'styleguide',
  }
</script>

<style>
  .styleguide {
    padding: 15px;
  }
</style>
