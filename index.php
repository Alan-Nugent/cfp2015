<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class=""></li>
						<li data-target="#myCarousel" data-slide-to="1" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="2" class=""></li>
					</ol>
					<div class="carousel-inner">
						<div class="item"> <img src="http://lorempixel.com/1200/400/sports" style="width:100%" alt="First slide">
							<div class="container">
								<div class="carousel-caption col-sm-3">
									<h1>Slide 1</h1>
									<p>Aenean a rutrum nulla. Vestibulum a arcu at nisi tristique pretium.</p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
								</div>
							</div>
						</div>
						<div class="item active"> <img src="http://lorempixel.com/1200/400/people" style="width:100%" data-src="" alt="Second    slide">
							<div class="container">
								<div class="carousel-caption col-sm-3">
									<h1>Slide 2</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae egestas purus. </p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
								</div>
							</div>
						</div>
						<div class="item"> <img src="http://lorempixel.com/1200/400/abstract" style="width:100%" data-src="" alt="Third slide">
							<div class="container">
								<div class="carousel-caption col-sm-3">
									<h1>Slide 3</h1>
									<p>Donec sit amet mi imperdiet mauris viverra accumsan ut at libero.</p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
								</div>
							</div>
						</div>
					</div>
					<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a> </div>

<div class="bs-docs-section">
  <h1 id="type" class="page-header"><a class="anchorjs-link " href="#type" aria-label="Anchor link for: type" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Typography</h1>

  <!-- Headings -->
  <h2 id="type-headings"><a class="anchorjs-link " href="#type-headings" aria-label="Anchor link for: type headings" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Headings</h2>
  <p>All HTML headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code>, are available. <code>.h1</code> through <code>.h6</code> classes are also available, for when you want to match the font styling of a heading but still want your text to be displayed inline.</p>
  <div class="bs-example bs-example-type" data-example-id="simple-headings">
    <table class="table">
      <tbody>
        <tr>
          <td><h1>h1. Bootstrap heading</h1></td>
          <td class="type-info">Semibold 36px</td>
        </tr>
        <tr>
          <td><h2>h2. Bootstrap heading</h2></td>
          <td class="type-info">Semibold 30px</td>
        </tr>
        <tr>
          <td><h3>h3. Bootstrap heading</h3></td>
          <td class="type-info">Semibold 24px</td>
        </tr>
        <tr>
          <td><h4>h4. Bootstrap heading</h4></td>
          <td class="type-info">Semibold 18px</td>
        </tr>
        <tr>
          <td><h5>h5. Bootstrap heading</h5></td>
          <td class="type-info">Semibold 14px</td>
        </tr>
        <tr>
          <td><h6>h6. Bootstrap heading</h6></td>
          <td class="type-info">Semibold 12px</td>
        </tr>
      </tbody>
    </table>
  </div>
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;h1&gt;</span>h1. Bootstrap heading<span class="nt">&lt;/h1&gt;</span>
<span class="nt">&lt;h2&gt;</span>h2. Bootstrap heading<span class="nt">&lt;/h2&gt;</span>
<span class="nt">&lt;h3&gt;</span>h3. Bootstrap heading<span class="nt">&lt;/h3&gt;</span>
<span class="nt">&lt;h4&gt;</span>h4. Bootstrap heading<span class="nt">&lt;/h4&gt;</span>
<span class="nt">&lt;h5&gt;</span>h5. Bootstrap heading<span class="nt">&lt;/h5&gt;</span>
<span class="nt">&lt;h6&gt;</span>h6. Bootstrap heading<span class="nt">&lt;/h6&gt;</span></code></pre></div>

  <p>Create lighter, secondary text in any heading with a generic <code>&lt;small&gt;</code> tag or the <code>.small</code> class.</p>
  <div class="bs-example bs-example-type" data-example-id="small-headings">
    <table class="table">
      <tbody>
        <tr>
          <td><h1>h1. Bootstrap heading <small>Secondary text</small></h1></td>
        </tr>
        <tr>
          <td><h2>h2. Bootstrap heading <small>Secondary text</small></h2></td>
        </tr>
        <tr>
          <td><h3>h3. Bootstrap heading <small>Secondary text</small></h3></td>
        </tr>
        <tr>
          <td><h4>h4. Bootstrap heading <small>Secondary text</small></h4></td>
        </tr>
        <tr>
          <td><h5>h5. Bootstrap heading <small>Secondary text</small></h5></td>
        </tr>
        <tr>
          <td><h6>h6. Bootstrap heading <small>Secondary text</small></h6></td>
        </tr>
      </tbody>
    </table>
  </div>
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;h1&gt;</span>h1. Bootstrap heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h1&gt;</span>
<span class="nt">&lt;h2&gt;</span>h2. Bootstrap heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h2&gt;</span>
<span class="nt">&lt;h3&gt;</span>h3. Bootstrap heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h3&gt;</span>
<span class="nt">&lt;h4&gt;</span>h4. Bootstrap heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h4&gt;</span>
<span class="nt">&lt;h5&gt;</span>h5. Bootstrap heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h5&gt;</span>
<span class="nt">&lt;h6&gt;</span>h6. Bootstrap heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h6&gt;</span></code></pre></div>


  <!-- Body copy -->
  <h2 id="type-body-copy"><a class="anchorjs-link " href="#type-body-copy" aria-label="Anchor link for: type body copy" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Body copy</h2>
  <p>Bootstrap's global default <code>font-size</code> is <strong>14px</strong>, with a <code>line-height</code> of <strong>1.428</strong>. This is applied to the <code>&lt;body&gt;</code> and all paragraphs. In addition, <code>&lt;p&gt;</code> (paragraphs) receive a bottom margin of half their computed line-height (10px by default).</p>
  <div class="bs-example" data-example-id="body-copy">
    <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.</p>
    <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
  </div>
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span></code></pre></div>

  <!-- Body copy .lead -->
  <h3 id="lead-body-copy"><a class="anchorjs-link " href="#lead-body-copy" aria-label="Anchor link for: lead body copy" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Lead body copy</h3>
  <p>Make a paragraph stand out by adding <code>.lead</code>.</p>
  <div class="bs-example" data-example-id="lead-copy">
    <p class="lead">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.</p>
  </div>
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"lead"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span></code></pre></div>

  <!-- Using Less -->
  <h3 id="built-with-less"><a class="anchorjs-link " href="#built-with-less" aria-label="Anchor link for: built with less" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Built with Less</h3>
  <p>The typographic scale is based on two Less variables in <strong>variables.less</strong>: <code>@font-size-base</code> and <code>@line-height-base</code>. The first is the base font-size used throughout and the second is the base line-height. We use those variables and some simple math to create the margins, paddings, and line-heights of all our type and more. Customize them and Bootstrap adapts.</p>

  <!-- Inline text elements -->
  <h2 id="type-inline-text"><a class="anchorjs-link " href="#type-inline-text" aria-label="Anchor link for: type inline text" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Inline text elements</h2>
  <h3 id="marked-text"><a class="anchorjs-link " href="#marked-text" aria-label="Anchor link for: marked text" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Marked text</h3>
  <p>For highlighting a run of text due to its relevance in another context, use the <code>&lt;mark&gt;</code> tag.</p>
  <div class="bs-example" data-example-id="simple-mark">
    <p>You can use the mark tag to <mark>highlight</mark> text.</p>
  </div>
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html">You can use the mark tag to <span class="nt">&lt;mark&gt;</span>highlight<span class="nt">&lt;/mark&gt;</span> text.</code></pre></div>


  <h3 id="deleted-text"><a class="anchorjs-link " href="#deleted-text" aria-label="Anchor link for: deleted text" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Deleted text</h3>
  <p>For indicating blocks of text that have been deleted use the <code>&lt;del&gt;</code> tag.</p>
  <div class="bs-example" data-example-id="simple-del">
    <p><del>This line of text is meant to be treated as deleted text.</del></p>
  </div>
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;del&gt;</span>This line of text is meant to be treated as deleted text.<span class="nt">&lt;/del&gt;</span></code></pre></div>

  <h3 id="strikethrough-text"><a class="anchorjs-link " href="#strikethrough-text" aria-label="Anchor link for: strikethrough text" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Strikethrough text</h3>
  <p>For indicating blocks of text that are no longer relevant use the <code>&lt;s&gt;</code> tag.</p>
  <div class="bs-example" data-example-id="simple-s">
    <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
  </div>
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;s&gt;</span>This line of text is meant to be treated as no longer accurate.<span class="nt">&lt;/s&gt;</span></code></pre></div>

  <h3 id="inserted-text"><a class="anchorjs-link " href="#inserted-text" aria-label="Anchor link for: inserted text" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Inserted text</h3>
  <p>For indicating additions to the document use the <code>&lt;ins&gt;</code> tag.</p>
  <div class="bs-example" data-example-id="simple-ins">
    <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
  </div>
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ins&gt;</span>This line of text is meant to be treated as an addition to the document.<span class="nt">&lt;/ins&gt;</span></code></pre></div>

  <h3 id="underlined-text"><a class="anchorjs-link " href="#underlined-text" aria-label="Anchor link for: underlined text" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Underlined text</h3>
  <p>To underline text use the <code>&lt;u&gt;</code> tag.</p>
  <div class="bs-example" data-example-id="simple-u">
    <p><u>This line of text will render as underlined</u></p>
  </div>
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;u&gt;</span>This line of text will render as underlined<span class="nt">&lt;/u&gt;</span></code></pre></div>

  <p>Make use of HTML's default emphasis tags with lightweight styles.</p>

  <h3 id="small-text"><a class="anchorjs-link " href="#small-text" aria-label="Anchor link for: small text" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Small text</h3>
  <p>For de-emphasizing inline or blocks of text, use the <code>&lt;small&gt;</code> tag to set text at 85% the size of the parent. Heading elements receive their own <code>font-size</code> for nested <code>&lt;small&gt;</code> elements.</p>
  <p>You may alternatively use an inline element with <code>.small</code> in place of any <code>&lt;small&gt;</code>.</p>
  <div class="bs-example" data-example-id="simple-small">
    <p><small>This line of text is meant to be treated as fine print.</small></p>
  </div>
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;small&gt;</span>This line of text is meant to be treated as fine print.<span class="nt">&lt;/small&gt;</span></code></pre></div>


  <h3 id="bold"><a class="anchorjs-link " href="#bold" aria-label="Anchor link for: bold" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Bold</h3>
  <p>For emphasizing a snippet of text with a heavier font-weight.</p>
  <div class="bs-example" data-example-id="simple-strong">
    <p>The following snippet of text is <strong>rendered as bold text</strong>.</p>
  </div>
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;strong&gt;</span>rendered as bold text<span class="nt">&lt;/strong&gt;</span></code></pre></div>

  <h3 id="italics"><a class="anchorjs-link " href="#italics" aria-label="Anchor link for: italics" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Italics</h3>
  <p>For emphasizing a snippet of text with italics.</p>
  <div class="bs-example" data-example-id="simple-em">
    <p>The following snippet of text is <em>rendered as italicized text</em>.</p>
  </div>
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;em&gt;</span>rendered as italicized text<span class="nt">&lt;/em&gt;</span></code></pre></div>

  <div class="bs-callout bs-callout-info" id="callout-type-b-i-elems">
    <h4>Alternate elements</h4>
    <p>Feel free to use <code>&lt;b&gt;</code> and <code>&lt;i&gt;</code> in HTML5. <code>&lt;b&gt;</code> is meant to highlight words or phrases without conveying additional importance while <code>&lt;i&gt;</code> is mostly for voice, technical terms, etc.</p>
  </div>

  <h2 id="type-alignment"><a class="anchorjs-link " href="#type-alignment" aria-label="Anchor link for: type alignment" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Alignment classes</h2>
  <p>Easily realign text to components with text alignment classes.</p>
  <div class="bs-example" data-example-id="text-alignment">
    <p class="text-left">Left aligned text.</p>
    <p class="text-center">Center aligned text.</p>
    <p class="text-right">Right aligned text.</p>
    <p class="text-justify">Justified text.</p>
    <p class="text-nowrap">No wrap text.</p>
  </div>
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-left"</span><span class="nt">&gt;</span>Left aligned text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-center"</span><span class="nt">&gt;</span>Center aligned text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-right"</span><span class="nt">&gt;</span>Right aligned text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-justify"</span><span class="nt">&gt;</span>Justified text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-nowrap"</span><span class="nt">&gt;</span>No wrap text.<span class="nt">&lt;/p&gt;</span></code></pre></div>

  <h2 id="type-transformation"><a class="anchorjs-link " href="#type-transformation" aria-label="Anchor link for: type transformation" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Transformation classes</h2>
  <p>Transform text in components with text capitalization classes.</p>
  <div class="bs-example" data-example-id="text-capitalization">
    <p class="text-lowercase">Lowercased text.</p>
    <p class="text-uppercase">Uppercased text.</p>
    <p class="text-capitalize">Capitalized text.</p>
  </div>
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-lowercase"</span><span class="nt">&gt;</span>Lowercased text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-uppercase"</span><span class="nt">&gt;</span>Uppercased text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-capitalize"</span><span class="nt">&gt;</span>Capitalized text.<span class="nt">&lt;/p&gt;</span></code></pre></div>

  <!-- Abbreviations -->
  <h2 id="type-abbreviations"><a class="anchorjs-link " href="#type-abbreviations" aria-label="Anchor link for: type abbreviations" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Abbreviations</h2>
  <p>Stylized implementation of HTML's <code>&lt;abbr&gt;</code> element for abbreviations and acronyms to show the expanded version on hover. Abbreviations with a <code>title</code> attribute have a light dotted bottom border and a help cursor on hover, providing additional context on hover and to users of assistive technologies.</p>

  <h3 id="basic-abbreviation"><a class="anchorjs-link " href="#basic-abbreviation" aria-label="Anchor link for: basic abbreviation" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Basic abbreviation</h3>
  <div class="bs-example" data-example-id="simple-abbr">
    <p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
  </div>
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;abbr</span> <span class="na">title=</span><span class="s">"attribute"</span><span class="nt">&gt;</span>attr<span class="nt">&lt;/abbr&gt;</span></code></pre></div>

  <h3 id="initialism"><a class="anchorjs-link " href="#initialism" aria-label="Anchor link for: initialism" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Initialism</h3>
  <p>Add <code>.initialism</code> to an abbreviation for a slightly smaller font-size.</p>
  <div class="bs-example" data-example-id="simple-initialism">
    <p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr> is the best thing since sliced bread.</p>
  </div>
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;abbr</span> <span class="na">title=</span><span class="s">"HyperText Markup Language"</span> <span class="na">class=</span><span class="s">"initialism"</span><span class="nt">&gt;</span>HTML<span class="nt">&lt;/abbr&gt;</span></code></pre></div>


  <!-- Addresses -->
  <h2 id="type-addresses"><a class="anchorjs-link " href="#type-addresses" aria-label="Anchor link for: type addresses" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Addresses</h2>
  <p>Present contact information for the nearest ancestor or the entire body of work. Preserve formatting by ending all lines with <code>&lt;br&gt;</code>.</p>
  <div class="bs-example" data-example-id="simple-address">
    <address>
      <strong>Twitter, Inc.</strong><br>
      795 Folsom Ave, Suite 600<br>
      San Francisco, CA 94107<br>
      <abbr title="Phone">P:</abbr> (123) 456-7890
    </address>
    <address>
      <strong>Full Name</strong><br>
      <a href="mailto:#">first.last@example.com</a>
    </address>
  </div>
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;address&gt;</span>
  <span class="nt">&lt;strong&gt;</span>Twitter, Inc.<span class="nt">&lt;/strong&gt;&lt;br&gt;</span>
  795 Folsom Ave, Suite 600<span class="nt">&lt;br&gt;</span>
  San Francisco, CA 94107<span class="nt">&lt;br&gt;</span>
  <span class="nt">&lt;abbr</span> <span class="na">title=</span><span class="s">"Phone"</span><span class="nt">&gt;</span>P:<span class="nt">&lt;/abbr&gt;</span> (123) 456-7890
<span class="nt">&lt;/address&gt;</span>

<span class="nt">&lt;address&gt;</span>
  <span class="nt">&lt;strong&gt;</span>Full Name<span class="nt">&lt;/strong&gt;&lt;br&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"mailto:#"</span><span class="nt">&gt;</span>first.last@example.com<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/address&gt;</span></code></pre></div>


  <!-- Blockquotes -->
  <h2 id="type-blockquotes"><a class="anchorjs-link " href="#type-blockquotes" aria-label="Anchor link for: type blockquotes" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Blockquotes</h2>
  <p>For quoting blocks of content from another source within your document.</p>

  <h3 id="default-blockquote"><a class="anchorjs-link " href="#default-blockquote" aria-label="Anchor link for: default blockquote" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Default blockquote</h3>
  <p>Wrap <code>&lt;blockquote&gt;</code> around any <abbr title="HyperText Markup Language">HTML</abbr> as the quote. For straight quotes, we recommend a <code>&lt;p&gt;</code>.</p>
  <div class="bs-example" data-example-id="simple-blockquote">
    <blockquote>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
    </blockquote>
  </div>
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;blockquote&gt;</span>
  <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;/blockquote&gt;</span></code></pre></div>

  <h3 id="blockquote-options"><a class="anchorjs-link " href="#blockquote-options" aria-label="Anchor link for: blockquote options" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Blockquote options</h3>
  <p>Style and content changes for simple variations on a standard <code>&lt;blockquote&gt;</code>.</p>

  <h4 id="naming-a-source"><a class="anchorjs-link " href="#naming-a-source" aria-label="Anchor link for: naming a source" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Naming a source</h4>
  <p>Add a <code>&lt;footer&gt;</code> for identifying the source. Wrap the name of the source work in <code>&lt;cite&gt;</code>.</p>
  <div class="bs-example" data-example-id="blockquote-cite">
    <blockquote>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
    </blockquote>
  </div>
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;blockquote&gt;</span>
  <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;footer&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/footer&gt;</span>
<span class="nt">&lt;/blockquote&gt;</span></code></pre></div>

  <h4 id="alternate-displays"><a class="anchorjs-link " href="#alternate-displays" aria-label="Anchor link for: alternate displays" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Alternate displays</h4>
  <p>Add <code>.blockquote-reverse</code> for a blockquote with right-aligned content.</p>
  <div class="bs-example" style="overflow: hidden;" data-example-id="blockquote-reverse">
    <blockquote class="blockquote-reverse">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
    </blockquote>
  </div>
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"blockquote-reverse"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/blockquote&gt;</span></code></pre></div>


  <!-- Lists -->
  <h2 id="type-lists"><a class="anchorjs-link " href="#type-lists" aria-label="Anchor link for: type lists" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Lists</h2>

  <h3 id="unordered"><a class="anchorjs-link " href="#unordered" aria-label="Anchor link for: unordered" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Unordered</h3>
  <p>A list of items in which the order does <em>not</em> explicitly matter.</p>
  <div class="bs-example" data-example-id="simple-ul">
    <ul>
      <li>Lorem ipsum dolor sit amet</li>
      <li>Consectetur adipiscing elit</li>
      <li>Integer molestie lorem at massa</li>
      <li>Facilisis in pretium nisl aliquet</li>
      <li>Nulla volutpat aliquam velit
        <ul>
          <li>Phasellus iaculis neque</li>
          <li>Purus sodales ultricies</li>
          <li>Vestibulum laoreet porttitor sem</li>
          <li>Ac tristique libero volutpat at</li>
        </ul>
      </li>
      <li>Faucibus porta lacus fringilla vel</li>
      <li>Aenean sit amet erat nunc</li>
      <li>Eget porttitor lorem</li>
    </ul>
  </div>
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul&gt;</span>
  <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>

  <h3 id="ordered"><a class="anchorjs-link " href="#ordered" aria-label="Anchor link for: ordered" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Ordered</h3>
  <p>A list of items in which the order <em>does</em> explicitly matter.</p>
  <div class="bs-example" data-example-id="simple-ol">
    <ol>
      <li>Lorem ipsum dolor sit amet</li>
      <li>Consectetur adipiscing elit</li>
      <li>Integer molestie lorem at massa</li>
      <li>Facilisis in pretium nisl aliquet</li>
      <li>Nulla volutpat aliquam velit</li>
      <li>Faucibus porta lacus fringilla vel</li>
      <li>Aenean sit amet erat nunc</li>
      <li>Eget porttitor lorem</li>
    </ol>
  </div>
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ol&gt;</span>
  <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ol&gt;</span></code></pre></div>

  <h3 id="unstyled"><a class="anchorjs-link " href="#unstyled" aria-label="Anchor link for: unstyled" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Unstyled</h3>
  <p>Remove the default <code>list-style</code> and left margin on list items (immediate children only). <strong>This only applies to immediate children list items</strong>, meaning you will need to add the class for any nested lists as well.</p>
  <div class="bs-example" data-example-id="unstyled-list">
    <ul class="list-unstyled">
      <li>Lorem ipsum dolor sit amet</li>
      <li>Consectetur adipiscing elit</li>
      <li>Integer molestie lorem at massa</li>
      <li>Facilisis in pretium nisl aliquet</li>
      <li>Nulla volutpat aliquam velit
        <ul>
          <li>Phasellus iaculis neque</li>
          <li>Purus sodales ultricies</li>
          <li>Vestibulum laoreet porttitor sem</li>
          <li>Ac tristique libero volutpat at</li>
        </ul>
      </li>
      <li>Faucibus porta lacus fringilla vel</li>
      <li>Aenean sit amet erat nunc</li>
      <li>Eget porttitor lorem</li>
    </ul>
  </div>
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-unstyled"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>

  <h3 id="inline"><a class="anchorjs-link " href="#inline" aria-label="Anchor link for: inline" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Inline</h3>
  <p>Place all list items on a single line with <code>display: inline-block;</code> and some light padding.</p>
  <div class="bs-example" data-example-id="list-inline">
    <ul class="list-inline">
      <li>Lorem ipsum</li>
      <li>Phasellus iaculis</li>
      <li>Nulla volutpat</li>
    </ul>
  </div>
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>

  <h3 id="description"><a class="anchorjs-link " href="#description" aria-label="Anchor link for: description" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Description</h3>
  <p>A list of terms with their associated descriptions.</p>
  <div class="bs-example" data-example-id="simple-dl">
    <dl>
      <dt>Description lists</dt>
      <dd>A description list is perfect for defining terms.</dd>
      <dt>Euismod</dt>
      <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
      <dd>Donec id elit non mi porta gravida at eget metus.</dd>
      <dt>Malesuada porta</dt>
      <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
    </dl>
  </div>
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;dl&gt;</span>
  <span class="nt">&lt;dt&gt;</span>...<span class="nt">&lt;/dt&gt;</span>
  <span class="nt">&lt;dd&gt;</span>...<span class="nt">&lt;/dd&gt;</span>
<span class="nt">&lt;/dl&gt;</span></code></pre></div>

  <h4 id="horizontal-description"><a class="anchorjs-link " href="#horizontal-description" aria-label="Anchor link for: horizontal description" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Horizontal description</h4>
  <p>Make terms and descriptions in <code>&lt;dl&gt;</code> line up side-by-side. Starts off stacked like default <code>&lt;dl&gt;</code>s, but when the navbar expands, so do these.</p>
  <div class="bs-example" data-example-id="horizontal-dl">
    <dl class="dl-horizontal">
      <dt>Description lists</dt>
      <dd>A description list is perfect for defining terms.</dd>
      <dt>Euismod</dt>
      <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
      <dd>Donec id elit non mi porta gravida at eget metus.</dd>
      <dt>Malesuada porta</dt>
      <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
      <dt>Felis euismod semper eget lacinia</dt>
      <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
    </dl>
  </div>
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;dl</span> <span class="na">class=</span><span class="s">"dl-horizontal"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;dt&gt;</span>...<span class="nt">&lt;/dt&gt;</span>
  <span class="nt">&lt;dd&gt;</span>...<span class="nt">&lt;/dd&gt;</span>
<span class="nt">&lt;/dl&gt;</span></code></pre></div>

  <div class="bs-callout bs-callout-info" id="callout-type-dl-truncate">
    <h4>Auto-truncating</h4>
    <p>Horizontal description lists will truncate terms that are too long to fit in the left column with <code>text-overflow</code>. In narrower viewports, they will change to the default stacked layout.</p>
  </div>
</div>



<?php get_template('footer'); ?>