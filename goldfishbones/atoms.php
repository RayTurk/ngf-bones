<?php 
    if ($_GET['unzip'] != 'yes') {
        ob_start("sanitize_output");
    }
;?>
<?php 
    /**
     * Template Name:Atomic StyleGuide
     */    
?>
<!DOCTYPE html>

<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
        
        <?php get_atomic_part ('/meta/common_header.php', 0);?>
	</head>
    <body <?php body_class(); ?>>
        <?php get_atomic_part('/organisms/header.php', 0);?>
        <style>
              /*This css is for styling the style guide page only and should not be included in final ouput*/
             .sg-colors {
                padding-left: 0px;
             }
             .sg-colors li {
               -webkit-box-flex: 1;
                -ms-flex: auto;
                flex: auto;
                padding: 0.3em;
                margin: 0 0.5em 0.5em 0;
                min-width: 15em;
                max-width: 14em;
                border: 1px solid #ddd;
                border-radius: 8px;
                list-style-type: none;
                float: left;
                font-size: .75em;
            }
             .sg-swatch {
                 display: block;
                 height: 8em;
                 margin-bottom: 0.3em;
                 border-radius: 5px;
             }
             .styleguide {
                margin-top:2em;
             }
             h1.styleguide {
                margin-top: 3em;
                margin-bottom: 1em;
             }
            .page_section:nth-of-type(even) {
                background:#e8e8e8;
            }
            header {
                margin-top:2em;
                background-color:black;
                padding:20px 0;
            }
            header img {margin:0;}
            #navigation {
                background-color:#d9d9d9;
            }
            #atomic_submenu {
                background:#ccc;
                position: fixed;
                top:0;
                width: 100%;
                z-index: 1000
            }
            .admin-bar #atomic_submenu {
                top:32px;
            }
            #atomic_submenu a {
                padding:0 1em;
                height: 2em;
                line-height: 2em;
                color:#000;
                text-decoration: none;
            }
        </style>

        /* MOLECULE STYLES */
            



        /* ORGANISM STYLES */
            

        /* TEMPLATES STYLES */
            .page_section {
                padding:3.5em 0;
            }
            
            
        </style>

        <div id="atomic_submenu">
            <div class="container text-center">
                <a href="#builder_atoms">Atoms</a>
                <a href="#builder_molecules">Molecules</a>
                <a href="#builder_organisms">Organisms</a>
                <a href="#builder_templates">Templates</a>
            </div>
        </div>
        <div id="content" class="styleguide_page">
           <div class="container">
              <h1 id="builder_atoms" class="styleguide">Atoms</h1>

              <h2 class="styleguide">Brand Colors</h2>
              <ul class="sg-colors clearfix">
                 <li id="swatch_primary">
                    <span class="sg-swatch"></span>
                    <span class="sg-label">
                    $color-primary <br />
                    <span class="value"></span>
                    </span>
                 </li>
                 <li id="swatch_secondary">
                    <span class="sg-swatch"></span>
                    <span class="sg-label">
                    $color-secondary <br />
                    <span class="value"></span>
                    </span>
                 </li>
              </ul>
               
              <h2 class="styleguide">Neutral Colors</h2>
              <h2 class="styleguide">Neutral Colors</h2>
              <ul class="sg-colors clearfix">
                 <li>
                    <span class="sg-swatch" style="background: #ffffff;"></span>
                    <span class="sg-label">
                    $color-white <br />
                    #ffffff
                    </span>
                 </li>
                 <li>
                    <span class="sg-swatch" style="background: #f7f9f9;"></span>
                    <span class="sg-label">
                    $color-gray-02 <br />
                    #f7f9f9
                    </span>
                 </li>
                 <li>
                    <span class="sg-swatch" style="background: #d9d9d9;"></span>
                    <span class="sg-label">
                    $color-gray-15 <br />
                    #d9d9d9
                    </span>
                 </li>
                 <li>
                    <span class="sg-swatch" style="background: #a5a5a5;"></span>
                    <span class="sg-label">
                    $color-gray-35 <br />
                    #a5a5a5
                    </span>
                 </li>
                 <li>
                    <span class="sg-swatch" style="background: #808080;"></span>
                    <span class="sg-label">
                    $color-gray-50 <br />
                    #808080
                    </span>
                 </li>
                 <li>
                    <span class="sg-swatch" style="background: #595959;"></span>
                    <span class="sg-label">
                    $color-gray-65 <br />
                    #595959
                    </span>
                 </li>
                 <li>
                    <span class="sg-swatch" style="background: #444444;"></span>
                    <span class="sg-label">
                    $color-gray-73 <br />
                    #444444
                    </span>
                 </li>
                 <li>
                    <span class="sg-swatch" style="background: #222222;"></span>
                    <span class="sg-label">
                    $color-gray-87 <br />
                    #222222
                    </span>
                 </li>
                 <li>
                    <span class="sg-swatch" style="background: #000000;"></span>
                    <span class="sg-label">
                    $color-black <br />
                    #000000
                    </span>
                 </li>
              </ul>

              <h2 class="styleguide">Utility Colors</h2>
              <ul class="sg-colors clearfix">
                 <li>
                    <span class="sg-swatch" style="background: #03804d;"></span>
                    <span class="sg-label">
                    $color-utility-positive <br />
                    #03804d
                    </span>
                 </li>
                 <li>
                    <span class="sg-swatch" style="background: #d4f3e6;"></span>
                    <span class="sg-label">
                    $color-utility-positive-subtle <br />
                    #d4f3e6
                    </span>
                 </li>
                 <li>
                    <span class="sg-swatch" style="background: #a59b15;"></span>
                    <span class="sg-label">
                    $color-utility-caution <br />
                    #a59b15
                    </span>
                 </li>
                 <li>
                    <span class="sg-swatch" style="background: #fffecf;"></span>
                    <span class="sg-label">
                    $color-utility-caution-subtle <br />
                    #fffecf
                    </span>
                 </li>
                 <li>
                    <span class="sg-swatch" style="background: #b12a0b;"></span>
                    <span class="sg-label">
                    $color-utility-negative <br />
                    #b12a0b
                    </span>
                 </li>
                 <li>
                    <span class="sg-swatch" style="background: #fdded8;"></span>
                    <span class="sg-label">
                    $color-utility-negative-subtle <br />
                    #fdded8
                    </span>
                 </li>
                 <li>
                    <span class="sg-swatch" style="background: #0192d0;"></span>
                    <span class="sg-label">
                    $color-utility-neutral <br />
                    #0192d0
                    </span>
                 </li>
                 <li>
                    <span class="sg-swatch" style="background: #d3f2ff;"></span>
                    <span class="sg-label">
                    $color-utility-neutral-subtle <br />
                    #d3f2ff
                    </span>
                 </li>
              </ul>

              <h2 class="styleguide">Fonts</h2>
              <div>Primary font: "Open Sans", "Helvetice Neue", Helvetica, Arial, sans-serif</div>
              <div><em>Primary font italic: "Open Sans", "Helvetice Neue", Helvetica, Arial, sans-serif</em></div>
              <div><strong>Primary font bold: "Open Sans", "Helvetice Neue", Helvetica, Arial, sans-serif</strong></div>
              <div class="font-secondary">Secondary font: Bitter, "Times New Roman", Times, serif</div>
              <div class="font-secondary"><em>Secondary font italic: Bitter, "Times New Roman", Times, serif</em></div>
              <div class="font-secondary"><strong>Secondary font bold: Bitter, "Times New Roman", Times, serif</strong></div>
               
               <h2 class="styleguide">Images</h2>
              <div>
                  <img class="imgBorder_1" src="/wp-content/themes/goldfishbones/img/img-placeholder.jpg" alt="placeholder" style="width:350px;margin-right:1.5em;">
                  
                  <img class="imgBorder_2" src="/wp-content/themes/goldfishbones/img/img-placeholder.jpg" alt="Something" style="width:350px; ">
                  <br>
                  <img class="imgBorder_3" src="/wp-content/themes/goldfishbones/img/img-placeholder.jpg" alt="Another" style="width:350px;margin-right:1.5em;">
                  
                  <img class="imgBorder_4" src="/wp-content/themes/goldfishbones/img/img-placeholder.jpg" alt="More" style="width:350px;">
               </div>

              <h2 class="styleguide">Animations</h2>
              <div class="demo-animate animate-fade"><strong>Fade:</strong> Duration: 0.3s Easing: ease-out (Hover to see effect)</div>

              <h2 class="styleguide">Buttons</h2>
              <a href="#" class="a-btn">Download the eBook</a>

              <h2 class="styleguide">Text Button (link)</h2>
              <a href="#" class="a-text-btn">Button</a>

              <h2 class="styleguide">Progress Bar</h2>
               
              <div class="progress-container">
              <progress class="a-progress progress-bar-striped" max="100" value="75"></progress>
              </div>  
               
              <h2 class="styleguide">Headings</h2>

              <h1>This is a first level heading</h1>
              <p>This is a test paragraph.</p>

              <h2>This is 2nd level heading</h2>
              <p>This is a test paragraph.</p>

              <h3>This is 3rd level heading</h3>
              <p>This is a test paragraph.</p>

              <h4>This is 4th level heading</h4>
              <p>This is a test paragraph.</p>

              <h5>This is 5th level heading</h5>
              <p>This is a test paragraph.</p>

              <h6>This is 6th level heading</h6>
              <p>This is a test paragraph.</p>

              <h2 class="styleguide">Basic Block Level Elements</h2>
              <p>This is a normal paragraph (<code>p</code> element).
                 To add some length to it, let us mention that this page was
                 primarily written for testing the effect of <strong>user style sheets</strong>.
                 You can use it for various other purposes as well, like just checking how
                 your browser displays various HTML elements by default.
                 It can also be useful when testing conversions from HTML
                 format to other formats, since some elements can go wrong then.
              </p>
              <p>This is another paragraph. I think it needs to be added that
                 the set of elements tested is not exhaustive in any sense. I have selected
                 those elements for which it can make sense to write user style sheet rules,
                 in my opionion.
              </p>

              <h2 class="styleguide">Code Element</h2>
              <div>This is a <code>div</code> element. Authors may use such elements instead
                 of paragraph markup for various reasons. (End of <code>div</code>.)
              </div>

              <h2 class="styleguide">Blockquote</h2>
              <blockquote>
                 <p>This is a block quotation containing a single
                    paragraph. Well, not quite, since this is not <em>really</em>
                    quoted text, but I hope you understand the point. After all, this
                    page does not use HTML markup very normally anyway.
                 </p>
              </blockquote>

              <h2 class="styleguide">Address</h2>
              <p>The following contains address information about the author, in an <code>address</code>
                 element.
              </p>
              <address>
                 <a href="../personal.html" class="address_title">Ken Franzen</a>,
                 <a href="mailto:test@fakedomain.com" class="a-text-btn">kenfranzen@neongoldfish.com</a><br>
                 6912 Spring Valley Drive, Suite 208<br>
                  Holland, Ohio 43528
              </address>

              <h2 class="styleguide">Lists</h2>
              <p>This is a paragraph before an <strong>unnumbered</strong> list (<code>ul</code>). Note that
                 the spacing between a paragraph and a list before or after that is hard
                 to tune in a user style sheet. You can't guess which paragraphs are
                 logically related to a list, e.g. as a "list header".
              </p>
              <ul>
                 <li> One. </li>
                 <li> Two. </li>
                 <li> Three. Well, probably this list item should be longer. Note that for short items lists look better if they are compactly presented, whereas for long items, it would be better to have more vertical spacing between items.</li>
                 <li> Four. This is the last item in this list. Let us terminate the list now without making any more fuss about it.</li>
              </ul>

              <h2 class="styleguide">Menu List</h2>
              <p>The following is a <code>menu</code> list:</p>
              <menu>
                 <li> One.</li>
                 <li> Two.</li>
                 <li>  Three. Well, probably this list item should be longer so that it will probably wrap to the next line in rendering.</li>
              </menu>

              <h2 class="styleguide">Code List</h2>
              <p>The following is a <code>dir</code> list:</p>
              <dir>
                <li> One.</li>
                <li> Two.</li>
                <li> Three. Well, probably this list item should be longer so that it will probably wrap to the next line in rendering.</li>
              </dir>

              <h2 class="styleguide">Paragraph Before List</h2>
              <p>This is a paragraph before a <strong>numbered</strong> list (<code>ol</code>). Note that
              the spacing between a paragraph and a list before or after that is hard
              to tune in a user style sheet. You can't guess which paragraphs are
              logically related to a list, e.g. as a "list header".</p>
              <ol>
                <li> One.</li>
                <li> Two.</li>
                <li> Three. Well, probably this list item should be longer. Note that if items are short, lists look better if they are compactly presented, whereas for long items, it would be better to have more vertical spacing between items.</li>
                <li> Four. This is the last item in this list. Let us terminate the list now without making any more fuss about it.</li>
              </ol>

              <h2 class="styleguide">Paragraph Before Definition List</h2>
              <p>This is a paragraph before a <strong>definition</strong> list (<code>dl</code>).
              In principle, such a list should consist of <em>terms</em> and associated 
              definitions.
              But many authors use <code>dl</code> elements for fancy "layout" things. Usually the
              effect is not <em>too</em> bad, if you design user style sheet rules for <code>dl</code>
              which are suitable
              for real definition lists.
              <dl>
                <dt> Recursion </dt>
                    <dd> see recursion </dd>
                <dt> Recursion, Indirect </dt>
                    <dd> see indirect recursion
                <dt> Indirect Recursion </dt>
                    <dd> see recursion, indirect </dd>
                <dt> Term</dt>
                    <dd> a word or other expression taken into specific use in
                    a well-defined meaning, which is often defined rather rigorously, even
                    formally, and may differ quite a lot from an everyday meaning</dd>
              </dl>


              <h2 class="styleguide">Text-level Markup</h2>
              <ul>
                  <li> <abbr title="Cascading Style Sheets">CSS</abbr> (an abbreviation;
                  <code>abbr</code> markup used)
                  <li> <acronym title="Radio Detecting and Ranging">RADAR</acronym> (an acronym; <code>acronym</code> markup used)
                  <li> <b>bolded</b> (<code>b</code> markup used - just bolding with unspecified
                  semantics)
                  <li> <big>big thing</big> (<code>big</code> markup used)
                  <li> <font face=Courier>Courier font</font> (<code>font face=Courier</code> markup used)
                  <li> <font color=red>red text</font> (<code>font color=red</code> markup used)
                  <li> <cite>Origin of Species</cite> (a book title;
                  <code>cite</code> markup used)
                  <li> <code>a[i] = b[i] + c[i);</code> (computer code; <code>code</code> markup used)
                  <li> here we have some <del>deleted</del> text (<code>del</code> markup used)
                  <li> an <dfn>octet</dfn> is an entity consisting of eight bits
                  (<code>dfn</code> markup used for the term being defined)
                  <li> this is <em>very</em> simple (<code>em</code> markup used for emphasizing
                  a word)
                  <li> <i lang="la">Homo sapiens</i> (should appear in italics;  <code>i</code> markup used)
                  <li> here we have some <ins>inserted</ins> text (<code>ins</code> markup used)
                  <li> type <kbd>yes</kbd> when prompted for an answer (<code>kbd</code> markup
                  used for text indicating keyboard input)
                  <li> <q>Hello!</q> (<code>q</code> markup used for quotation)
                  <li> He said: <q>She said <q>Hello!</q></q> (a quotation inside a quotation)
                  <li> you may get the message <samp>Core dumped</samp> at times
                  (<code>samp</code> markup used for sample output)
                  <li> <small>this is not that important</small> (<code>small</code> markup used)
                  <li> <strike>overstruck</strike> (<code>strike</code> markup used; note:
                  <code>s</code> is a nonstandard synonym for <code>strike</code>)
                  <li> <strong>this is highlighted text</strong> (<code>strong</code>
                  markup used)
                  <li> In order to test how subscripts and superscripts (<code>sub</code> and
                  <code>sup</code> markup) work inside running text, we need some
                  dummy text around constructs like x<sub>1</sub> and H<sub>2</sub>O
                  (where subscripts occur). So here is some fill so that
                  you will (hopefully) see whether and how badly the subscripts
                  and superscripts mess up vertical spacing between lines.
                  Now superscripts: M<sup>lle</sup>, 1<sup>st</sup>, and then some
                  mathematical notations: e<sup>x</sup>, sin<sup>2</sup> <i>x</i>,
                  and some nested superscripts (exponents) too:
                  e<sup>x<sup>2</sup></sup> and f(x)<sup>g(x)<sup>a+b+c</sup></sup>
                  (where 2 and a+b+c should appear as exponents of exponents).
                  <li> <tt>text in monospace font</tt> (<code>tt</code> markup used)
                  <li> <u>underlined</u> text (<code>u</code> markup used)
                  <li> the command <code>cat</code> <var>filename</var> displays the
                  file specified by the <var>filename</var> (<code>var</code> markup
                  used to indicate a word as a variable).
              </ul>

              <h2 class="styleguide">Monospace Text Level Markup</h2>
              <p>Some of the elements tested above are typically displayed in a monospace
              font, often using the <em>same</em> presentation for all of them. This
              tests whether that is the case on your browser:</p>
              <ul>
                  <li> <code>This is sample text inside code markup</code>
                  <li> <kbd>This is sample text inside kbd markup</kbd>
                  <li> <samp>This is sample text inside samp markup</samp>
                  <li> <tt>This is sample text inside tt markup</tt>
              </ul>

              <h2 class="styleguide">Links</h2>
              <ul>
                  <li> <a class="a-text-btn" href="../index.html">main page</a> </li>
                  <li> <a class="a-text-btn" href=
                     "http://www.unicode.org/versions/Unicode4.0.0/ch06.pdf"
                     title="Writing Systems and Punctuation"
                     type="application/pdf"
                     >Unicode Standard, chapter&nbsp;6</a> </li>
              </ul>

              <h2 class="styleguide">Inline Text Links</h2>
              <p>This is a text paragraph that contains some
              inline links. Generally, inline links (as opposite to e.g. links
              lists) are problematic
              from the
              <a class="a-text-btn" href="http://www.useit.com">usability</a> perspective,
              but they may have use as
              &#8220;incidental&#8221;, less relevant links. See the document
              <cite><a class="a-text-btn" href="links.html">Links Want To Be Links</a></cite>.</p>


              <h2 class="styleguide">Forms</h2>
              <form action="#">
                <div>
                 <input type="hidden" name="hidden field" value="42">
                    This is a form containing various fields (with some initial
                    values (defaults) set, so that you can see how input text looks
                    like without actually typing it):
                </div>

                <div>
                    <label for="but">Button:
                        <button id="but" type="submit" name="foo" value="bar" class=btn> A Cool<br>Button</button>
                    </label>
                </div>

                <div>
                    <label for="f0">Reset button:
                        <input id="f0" type="reset" name="reset" value="Reset" class=btn>
                    </label>
                </div>

                <div>
                    <label for="f1">Single-line text input field: 
                        <input id="f1" name="text" size="20" placeholder="Default text">
                    </label>
                </div>

                <div>
                    <label for="f32">Multi-line text input field (textarea):</label><br>
                    <textarea id="f32" name="textarea2" rows="4" cols="40" placeholder="Default text"></textarea>
                </div>
<br>
                <div>
                    The following two radio buttons are inside a <code>fieldset</code> element with a <code>legend</code>:
                </div>
                <fieldset>
                    <legend>Legend</legend>
                        <div><label for="f3"><input id="f3" type="radio" name="radio" value="1"> Radio button 1</label></div>
                        <div><label for="f4"><input id="f4" type="radio" name="radio" value="2" checked> Radio button 2 (initially checked)</label></div>
                </fieldset>
<br>
                <fieldset>
                    <legend>Check those that apply:</legend>
                        <div><label for="f5"><input id="f5" type="checkbox" name="checkbox"> Checkbox 1</label></div>
                        <div><label for="f6"><input id="f6" type="checkbox" name="checkbox2" checked> Checkbox 2 (initially checked)</label></div>
                </fieldset>
                <div>
                    <label for="f10">A <code>select</code> element with <code>size="1"</code>
                    (dropdown box):
                        <select id="f10" name="select1" size="1">
                            <option>One</option>
                            <option selected>Two (default)</option>
                            <option>Three</option>
                        </select>
                    </label>
                </div>

                <div>
                    <label for="f11">A <code>select</code> element with <code>size="3"</code>
                        (listbox):
                    </label><br>
                    <select id="f11" name="select2" size="3">
                        <option>one</option>
                        <option selected>two (default)</option>
                        <option>three</option>
                    </select>
                </div>
<br>
                <div>
                    <label for="f99">Submit button:
                        <input id="f99" type="submit" name="submit" value="Just a test">
                    </label>
                </div>
              </form>


              <h2 class="styleguide">Tables</h2>
              <p>The following table has a caption. The first row and the first column
              contain table header cells (<code>th</code> elements) only; other cells
              are data cells (<code>td</code> elements):</p>

              <table summary=
                 "Each row names a Nordic country and specifies its total area and land area, in square kilometers">
                  <CAPTION>Sample table: Areas of the Nordic countries, in sq. km.</CAPTION>
                  <TR class="top-row"><th scope="col">Country</th> <th scope="col">Total area</th> <th scope="col">Land area</th></TR>
                  <TR><th scope="row">Denmark</th> <TD> 43,070 </TD><TD> 42,370</TD></TR>
                  <TR><th scope="row">Finland</th> <TD>337,030 </TD><TD>305,470</TD></TR>
                  <TR><th scope="row">Iceland</th> <TD>103,000 </TD><TD>100,250</TD></TR>
                  <TR><th scope="row">Norway</th>  <TD>324,220 </TD><TD>307,860</TD></TR>
                  <TR><th scope="row">Sweden</th>  <TD>449,964 </TD><TD>410,928</TD></TR>
              </table>

<br>
              <h2>Character test</h2>
              <p>The following table has some sample characters with
              annotations. If the browser&#8217;s default font does not
              contain all of them, they may get displayed using backup fonts.
              This may cause stylistic differences, but it should not
              prevent the characters from being displayed at all.</p>
              <table>
                  <tr class="top-row"><th>Char.</th> <th>Explanation</th> <th>Notes</th></tr>
                  <tr><td>ê</td> <td>e with circumflex</td> <td>Latin 1 character, should be ok</td></tr>
                  <tr><td>&#8212;</td> <td>em dash</td> <td>Windows Latin 1 character, should be ok, too</td></tr>
                  <tr><td>&#x100;</td> <td>A with macron (line above)</td> <td>Latin Extended-A character, not present in all fonts</td></tr>
                  <tr><td>&Omega;</td> <td>capital omega</td> <td>A Greek letter</td></tr>
                  <tr><td>&#x2212;</td> <td>minus sign</td> <td>Unicode minus</td></tr>
                  <tr><td>&#x2300;</td> <td>diameter sign</td> <td>relatively rare in fonts</td></tr>
              </table>


              <h2 class="styleguide">Hyphenation</h2>
              <p>In the following, a width setting should cause some hyphenation,
              depending on support to various methods of hyphenation.</p>
              <h3>CSS-based hyphenation</h3>
              <p class="limited hyphens">Until recently the great majority of naturalists believed that species were immutable productions, and had been separately created. This view has been ably maintained by many authors.</p>
              <h3>JavaScript-driven hyphenation</h3>
              <p class="limited hyphenate">Until recently the great majority of naturalists believed that species were immutable productions, and had been separately created. This view has been ably maintained by many authors.</p>
              <h3>Explicit hyphenation hints (soft hyphens)</h3>
              <p class="limited">Un­til re­cent­ly the great
              ma­jor­i­ty of nat­u­ral­ists
              be­lieved that spe­cies were
              im­mu­ta­ble
              pro­duc­tions,
              and had been sep­a­rate­ly cre­at­ed.</p>





              <h1 id="builder_molecules" class="styleguide">Molecules</h1>
                <h2>Lightbox Search (/molecules/search_lighbox.php)</h2>
               <div class="row">
                   <div class="col-sm-6">
                        <?php 
                            $args = array (
                                'lightboxID'    => 'uniqueID',
                                'button_text'   => 'Search'
                            )
                        ?>
                        <?php get_atomic_part('/molecules/search_lightbox.php', $args);?>
                   </div>
                   <div class="col-sm-6">
                        <code>
                            <b>Parameters</b><br>
                            lightboxID      => 'uniqueID' //specify a unique ID for the lighbox and the trigger object so link does not conflic with other objects<br>
                            'button_text'   => 'Search this site'//text to go on the button.
                        </code>
                   </div>
               </div>
               <h2>Google Map (/molecules/google-map.php)</h2>
               See <a href="http://staticmapmaker.com/google/">For Generation of the Urls</a>.  See Software Licesnes on Main project to access License Key
               <div class="row">
                   
                   <div class="col-sm-6">
                        <?php 
                            $map = array (
                                'Map URL'    => "https://www.google.com/maps/place/6912+Spring+Valley+Dr,+Holland,+OH+43528/@41.6132336,-83.7088088,17z/data=!3m1!4b1!4m5!3m4!1s0x883c7a438211f0cf:0x78abd088056ae579!8m2!3d41.6132336!4d-83.7066201",
                                'Map Image'   => 'https://maps.googleapis.com/maps/api/staticmap?center=6912+Spring+Valley+Dr+Holland+Ohio&zoom=15&scale=1&size=600x600&maptype=roadmap&key=AIzaSyA_-qO8dfz0YcWO2xP5lyNFQ_jzTDqNTIA&format=jpg&visual_refresh=true&markers=size:mid%7Ccolor:0xff0000%7Clabel:%7C6912+Spring+Valley+Dr+Holland+Ohio'
                            );
                        ?>
                        <?php get_atomic_part('/molecules/google-map.php', $map);?>
                   </div>
                   <div class="col-sm-6">
                        <code>
                            <b>Parameters</b><br>
                            'Map URL'    => 'https://www.google.com/maps/place/6912+Spring+Valley+Dr+Holland+Ohio/',<br>
                            'Map Image'   => 'https://maps.googleapis.com/maps/api/staticmap?center=6912+Spring+Valley+Dr+Holland+Ohio&zoom=14&scale=1&size=600x600&maptype=roadmap&format=png&visual_refresh=true&markers=size:mid%7Ccolor:0xff0000%7Clabel:%7C6912+Spring+Valley+Dr+Holland+Ohio'
                        </code>
                   </div>
               </div>
              <h1 id ="builder_organisms" class="styleguide">Organisms</h1>
               

              <h1 id="builder_templates" class="styleguide">Templates</h1>
            </div>
            
              <!-- 
                 - For new boostrap 4 layout documentation visit this page... https://v4-alpha.getbootstrap.com/layout/overview/
                 - Note that each templat is a horizontal section of the site
                 - Please put in your Atom, Molecule, and Organism styles around ~60
              -->

              <!-- ////////////////////////////////// -->
              <!-- TEMPLATE START: Single Column Text -->
              <!-- ////////////////////////////////// -->

              <!-- Each section, will have it's own defined unique CSS. 
                   The CSS here should only add or override CSS that is 
                   specific, or mostly specific to it's section. -->
                 <style>

                 </style>
                 <div id="<?php echo $id;?>" class="page_section single_column_text"> 
                  <div class="container">
                     <div class="row justify-content-center">
                        <div class="col-sm-12 col-md-8 col-lg-6 col-xl-6">
                          <h2>The standard Lorem Ipsum passage, used since the 1500s</h2>

                          <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>

                          <h3>Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</h3>

                          <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
                        </div>
                     </div>
                  </div>
                </div>

              <!-- //////////////////////////////// -->
              <!-- TEMPLATE END: Single Column Text -->
              <!-- //////////////////////////////// -->


              <!-- ////////////////////////////////// -->
              <!-- TEMPLATE START: Double Column Text -->
              <!-- ////////////////////////////////// -->

              <!-- Each section, will have it's own defined unique CSS. 
                   The CSS here should only add or override CSS that is 
                   specific, or mostly specific to it's section. -->
                 <style>

                 </style>
                 <div id="<?php echo $id;?>" class="page_section dual_column_text"> 
                    <div class="container">
                       <div class="row justify-content-center">
                          <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <h2>The standard Lorem Ipsum passage, used since the 1500s</h2>

                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>

                            <h3>Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</h3>

                            <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
                          </div>
                            
                          <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <h2>The standard Lorem Ipsum passage, used since the 1500s</h2>

                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>

                            <h3>Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</h3>

                            <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
                          
                          </div>
                       </div>
                    </div>
                  </div>

              <!-- //////////////////////////////// -->
              <!-- TEMPLATE END: Double Column Text -->
              <!-- //////////////////////////////// -->
            
            
              <!-- ////////////////////////////////// -->
              <!-- TEMPLATE START: Double Column Text/Image -->
              <!-- ////////////////////////////////// -->

              <!-- Each section, will have it's own defined unique CSS. 
                   The CSS here should only add or override CSS that is 
                   specific, or mostly specific to it's section. -->
                 <style>

                 </style>
                 <div id="<?php echo $id;?>" class="page_section dual_column_text_image"> 
                  <div class="container">
                       <div class="row justify-content-center">
                          <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <img class="imgBorder_1" src="/wp-content/themes/goldfishbones/img/img-placeholder.jpg" alt="placeholder">
                          </div>
                            
                          <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <h2>The standard Lorem Ipsum passage, used since the 1500s</h2>

                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut laboquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
                          
                          </div>
                       </div>
                    </div>
                </div>

              <!-- //////////////////////////////// -->
              <!-- TEMPLATE END: Double Column Text/Image -->
              <!-- //////////////////////////////// -->  
                  
            <!-- ////////////////////////////////// -->
              <!-- TEMPLATE START: Featured Blog Post -->
              <!-- ////////////////////////////////// -->

              <!-- Each section, will have it's own defined unique CSS. 
                   The CSS here should only add or override CSS that is 
                   specific, or mostly specific to it's section. -->
                 <style>
                     .blog-feature {
                         width:100%;
                         margin-bottom:1em;
                     }
                     @media (min-width: 0px) {
                         .blog-feature-section {
                             margin-bottom:3.5em;
                         }
                     }
                     @media (min-width: 768px) {
                         .blog-feature-section {
                             margin-bottom:0;
                         }
                     }
                 </style>
                 <div id="<?php echo $id;?>" class="page_section featured-blog"> 
                  <div class="container">
                       <div class="row justify-content-center">
                          <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 blog-feature-section">
                              <h2><a href="#" class="a-text-btn">Featured Blog Post Title Content Goes Here</a></h2>
                            <img class="imgBorder_1 blog-feature" src="/wp-content/themes/goldfishbones/img/img-placeholder-lg.jpg"  alt="placeholder">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut laboquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>
                          </div>
                            
                          <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <h2>Recent Posts</h2>

                            <ul>
                                <li> <a class="a-text-btn" href="#">Random Blog Post Title</a> </li>
                                <li> <a class="a-text-btn" href="#">Another Random Title for a Blog Post</a> </li>
                                <li> <a class="a-text-btn" href="#">Another Random Title for a Blog Post That is Longer For the Sake of Overflow</a> </li>
                            </ul>
                          
                          </div>
                       </div>
                    </div>
                </div>

              <!-- //////////////////////////////// -->
              <!-- TEMPLATE END: Featured Blog Post -->
              <!-- //////////////////////////////// -->
            
            <!-- ////////////////////////////////// -->
              <!-- TEMPLATE START: Submission Form -->
              <!-- ////////////////////////////////// -->

              <!-- Each section, will have it's own defined unique CSS. 
                   The CSS here should only add or override CSS that is 
                   specific, or mostly specific to it's section. -->
                 <style>
                     .centered {
                         text-align:center;
                     }
                     .title {
                         margin-bottom:1.5em;
                     }
                     input, textarea {
                         width:100%;
                     }
                 </style>
            
                 <div id="<?php echo $id;?>" class="page_section submission-form"> 
                  <div class="container">
                       <div class="row justify-content-center">
                          <div class="col-sm-12 col-md-10 col-lg-8 col-xl-7">
                              <h2 class="centered title">Have a Question For Us?</h2>
                              <form>
                                  <div class="row">
                                    <div class="col-sm-6">
                                        <input id="f1" name="text" size="20" placeholder="First Name"><br>
                                        <label for="f1">First Name</label>
                                    </div>
                                  
                                    <div class="col-sm-6">
                                        <input id="f1" name="text" size="20" placeholder="Last Name"><br>
                                        <label for="f1">Last Name</label>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-sm-12">
                                        <input id="f1" name="text" size="20" placeholder="Email"><br>
                                        <label for="f1">Email</label>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-sm-12">
                                        <textarea id="f2" name="textarea" rows="3" cols="40" placeholder="Message"></textarea><br>
                                        <label for="f2">Message</label>
                                    </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-4 col-sm-3">
                                        <input id="f99" type="submit" name="submit" value="Submit">
                                      </div>
                                  </div>
                              </form>
                                
                          </div>
                       </div>
                    </div>
                </div>

              <!-- //////////////////////////////// -->
              <!-- TEMPLATE END: Submission Form -->
              <!-- //////////////////////////////// -->
            
            <!-- ////////////////////////////////// -->
              <!-- TEMPLATE START: Full Width Feature Boxes -->
              <!-- ////////////////////////////////// -->

              <!-- Each section, will have it's own defined unique CSS. 
                   The CSS here should only add or override CSS that is 
                   specific, or mostly specific to it's section. -->
                 <style>
                     .full-width-features {
                            padding:0;
                        }
                     .feature_container {
                            padding: 0;
                        }
                     .full-width-features .row {
                            margin: 0;
                        }
                     .full-width-features .feature {
                            
                            max-width: none;
                            height: 245px;
                            position: relative;
                            text-align: center;
                            overflow: hidden;
                            margin: 0;
                        }
                     .full-width-features .feature .title {
                            display:table;
                            position: absolute;
                            top: 0;
                            height: 100%;
                            background-repeat: no-repeat;
                            width: 101%;
                            padding: 2em;
                            background-position:center;
                            background-size: cover;
                            -webkit-transition: top 2s;
                            transition: top 2s;
                            margin:0;
                        }
                     .full-width-features .feature .title h2 {
                            color: #fff;
                            display:table-cell;
                            vertical-align:middle;
                            font-size: 1.4em;
                            
                            background-repeat: no-repeat;
                            background-position: bottom center;
                        }
                     .full-width-features .feature:hover .title {
                         top:250px;
                     }
                     .full-width-features .feature_container:nth-child(odd) .feature {
                            background:white;
                        }
                     .full-width-features .feature .description {
                            padding: 2em;
                        }
                 </style>
            
                 <div id="<?php echo $id;?>" class="page_section full-width-features"> 
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-4 feature_container">
                            <div class="feature">
                                <div class="title" style="background-image: url(/wp-content/themes/goldfishbones/img/img-placeholder-blk.jpg);">
                                <h2>Feature Title #1</h2>
                            </div>
                                <div class="description">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <a class="a-btn" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 feature_container">
                            <div class="feature">
                                <div class="title" style="background-image: url(/wp-content/themes/goldfishbones/img/img-placeholder-lg.jpg);">
                                    <h2>Longer Feature Title #2 to Show How Length Affects Alignment</h2>
                                </div>
                                <div class="description">
                                     <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <a class="a-btn" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 feature_container">
                            <div class="feature">
                                <div class="title" style="background-image: url(/wp-content/themes/goldfishbones/img/img-placeholder-blk.jpg);">
                                    <h2>Feature Title #3</h2>
                                </div>
                                <div class="description">
                                     <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <a class="a-btn" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 feature_container">
                            <div class="feature">
                                <div class="title" style="background-image: url(/wp-content/themes/goldfishbones/img/img-placeholder-lg.jpg);">
                                    <h2>Feature Title #4</h2>
                                </div>
                                <div class="description">
                                     <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <a class="a-btn" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 feature_container">
                            <div class="feature">
                                <div class="title" style="background-image: url(/wp-content/themes/goldfishbones/img/img-placeholder-blk.jpg);">
                                    <h2>Feature Title #5</h2>
                                </div>
                                <div class="description">
                                     <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <a class="a-btn" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 feature_container">
                            <div class="feature">
                                <div class="title" style="background-image: url(/wp-content/themes/goldfishbones/img/img-placeholder-lg.jpg);">
                                    <h2>Longer Feature Title #5 to Show How Length Affects Alignment</h2>
                                </div>
                                <div class="description">
                                     <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <a class="a-btn" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>

              <!-- //////////////////////////////// -->
              <!-- TEMPLATE END: Full Width Feature Boxes -->
              <!-- //////////////////////////////// -->
            
            <!-- ////////////////////////////////// -->
              <!-- TEMPLATE START: Linked Image Grid  -->
              <!-- ////////////////////////////////// -->

              <!-- Each section, will have it's own defined unique CSS. 
                   The CSS here should only add or override CSS that is 
                   specific, or mostly specific to it's section. -->
                 <style>
                     .image-grid {
                         padding-bottom: 1.65em;
                     }
                     .image-grid img {
                         margin-bottom: 1.85em;
                     }
                     .image-grid img:hover {
                         opacity:.5;
                     }
                 </style>
            
                 <div id="<?php echo $id;?>" class="page_section image-grid"> 
                  <div class="container">
                       <div class="row justify-content-center">
                          <div class="col-sm-6">
                              <div class="feature">
                                  <a href="#"><img src="/wp-content/themes/goldfishbones/img/square-holder.jpg" alt="placeholder"></a>
                              </div>
                          </div>
                           <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="feature">
                                  <a href="#"><img src="/wp-content/themes/goldfishbones/img/square-holder.jpg" alt="something"></a>
                            </div>
                        </div>    
                        <div class="col-sm-6">
                            <div class="feature">
                                  <a href="#"><img src="/wp-content/themes/goldfishbones/img/square-holder.jpg" alt="another"></a>
                            </div>
                        </div>    
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="feature">
                                  <a href="#"><img src="/wp-content/themes/goldfishbones/img/square-holder.jpg" alt="else"></a>
                            </div>
                        </div>    
                        <div class="col-sm-6">
                            <div class="feature">
                                  <a href="#"><img src="/wp-content/themes/goldfishbones/img/square-holder.jpg" alt="case 6"></a>
                            </div>
                        </div>    
                    </div>
                </div>
                       </div>
                    </div>
                </div>

              <!-- //////////////////////////////// -->
              <!-- TEMPLATE END: Linked Image Grid -->
              <!-- //////////////////////////////// -->
            
              
            <!-- //////////////////////////////// -->
              <!-- TEMPLATE START: Text Content Rotator -->
              <!-- //////////////////////////////// -->
            
            <!-- Each section, will have it's own defined unique CSS. 
                   The CSS here should only add or override CSS that is 
                   specific, or mostly specific to it's section. -->
                 <style>
                     .bx-viewport {
                         
                     }
                     .bx-pager {
                         padding-bottom: 1.75em;
                         display:none;
                     }
                     .bx-wrapper .bx-pager.bx-default-pager a {
                        width: 15px;
                        height: 15px;
                        -moz-border-radius: 100%;
                        -webkit-border-radius: 100%;
                        border-radius: 100%;
                    }
                     .inner {
                         padding: 3.5em 2.25em;
                     }
                     .inner p:last-child {
                         margin:0;
                     }
                     @media (min-width: 627px) {
                         .inner {
                             padding: 3.5em 0;
                         }
                     }
                     @media (min-width: 768px) {
                         .inner {
                         padding: 3.5em 2.25em;
                     }
                     }
                     @media (min-width: 810px) {
                         .inner {
                             padding: 3.5em 0;
                         }
                     }
                     @media (min-width: 992px) {
                         .inner {
                         padding: 3.5em 2.25em;
                     }
                     }
                     @media (min-width: 1048px) {
                         .inner {
                             padding: 3.5em 0;
                         }
                     }
                     @media (min-width: 1200px) {
                         .inner {
                             padding: 3.5em 0;
                         }
                     }
                 </style>
                        
                    <div class="image-slider">
                        <div class="hero_slider">
                            <div class="slide"> 
                                <div class="caption"> 
                                    <div class="container"> 
                                        <div class="row justify-content-center">
                                            <div class="col-xl-10">
                                                <div class="inner"> 
                                                    <h2>Slide 1: H2 Title Header</h2> 
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                    </p>
                                                </div> 
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            
                            <div class="slide"> 
                                <div class="caption"> 
                                    <div class="container"> 
                                        <div class="row justify-content-center">
                                            <div class="col-xl-8">
                                                <div class="inner"> 
                                                    <h2>Slide 2: H2 Title Header</h2> 
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                    </p>
                                                    
                                                </div> 
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            
                            <div class="slide"> 
                                <div class="caption"> 
                                    <div class="container"> 
                                        <div class="row justify-content-center">
                                            <div class="col-xl-10">
                                                <div class="inner"> 
                                                    <h2>Slide 3: H2 Title Header</h2> 
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                    </p>
                                                </div> 
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    
            <!-- //////////////////////////////// -->
              <!-- TEMPLATE END: Text Content Rotator -->
              <!-- //////////////////////////////// -->
            
            
            <?php //get_atomic_part ('/templates/page_builder.php', $args);?>
        </div>
        <script type="text/javascript">
              WebFontConfig = {
                google: { families: [ 'Open+Sans:400,400i,700', 'Bitter:400,400i,700' ] }
              };
              (function() {
                var wf = document.createElement('script');
                wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                  '://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
                wf.type = 'text/javascript';
                wf.async = 'true';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(wf, s);
              })(); 
        </script>
        <?php 
            get_atomic_part('/organisms/footer.php', 0);
            get_atomic_part('/meta/common_footer.php', 0);
        ?>
        
    </body> 
</html>
