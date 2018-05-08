<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <title>Naming Conventions | Eview360 Code Guide</title>

    <link rel="stylesheet" href="assets/css/code-guide.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic|PT+Mono&subset=latin,cyrillic">
  </head>
  <body>
    <header class="masthead">
      <div class="container">
        <a href="/"><img class="masthead-logo" src="assets/img/eview360-logo.jpg"></a>
        <h1>Eview360 Code Guide</h1>
        <p class="lead">Standards for developing flexible, durable, sustainable and consistent code.</p>
      </div>
    </header>
    <div class="heading" id="html">
      <h2>Naming Conventions</h2>
    </div>

    <div class="section" id="assets">
      <div class="col">
        <h3>Assets</h3>
        <ul>
          <li>Use lowercase and hyphens</li>
          <li>NEVER contain any special characters or spacing </li>
          <li>Specifically named for easier recognition </li>
          <li>Applies to the following </li>
        </ul>
      </div>
      <div class="col">
        <div class="highlight">
<pre>
  <code class="language-html" data-lang="html">
    <span class="cp">HTML </span><span class="s">(htm, html)</span>
    <span class="cp">CSS </span><span class="s">(css, less, sass)</span>
    <span class="cp">JavaScript </span><span class="s">(js)</span>
    <span class="cp">Images </span><span class="s">(jpg, gif, png, svg, etc.)</span>
    <span class="cp">Server </span><span class="s">(jsp, gsp, java, php)</span>
    <span class="cp">Adobe PDF </span><span class="s">(pdf)</span>
    <span class="cp">Microsoft </span><span class="s">(doc, docx, xls, xlsx, ppt, pptx, etc.)</span>
    <span class="cp">Any other files you can think of...</span>
    <br>
    Examples
    <span class="nt">my-fun-file.pdf</span>
    <span class="nt">this-is-how-to-name-23.pdf</span>
    <span class="s strike">I will not%20screw this up.pdf</span>
    <span class="s strike">ILoveHow_Cool_This is to get acustomed to_26273.pdf</span>
  </code>
</pre>
        </div>
      </div>
    </div>

    <div class="section" id="directory">
      <div class="col">
        <h3>Directory Structuring</h3>
        <ul>
          <li>Use lowercase and hyphens</li>
          <li>The "components" directory is only for reusable Eview360 &amp; DigitalB code. This can be customized reusable stylesheet, javascript file or a combination</li>
          <li>The "css" directory is only for minimized less files and non-less css files (normally created by a back-end developer since they may not use less) </li>
          <li>The "img" directory will contain a "global" directory for images relating to the entire application. It may contain other directories for images that should be nasmed appropriately for organization. This can traverse many directories. </li>
          <li>The "js" directory will contain a "global" directory for javascript files relating to the entire application. It may contain other directories for javascript files that should be named appropriately for organization. This can traverse many directories. </li>
          <li>The "less" directory is for the organization of less files. These should compile to the corresponding css file location.</li>
          <li>The "vendor" directory is for third party plugins. This can be javascript libraries, css frameworks or any other third party front-end plugin. Keep the vendor assets contained within the vendor directory. </li>
          <li>Vendor files should not be renamed to Eview360 &amp; DigitalB standards</li>
        </ul>
      </div>
      <div class="col">
        <div class="highlight">
<pre>
  <code class="language-html" data-lang="html">
    <span class="sh">- assets</span>
    <span class="nt">  - components</span>
    <span class="na">    - descriptive-directory-name</span>
    <span class="cp">      - css</span>
    <span class="cs">        - file.min.css</span>
    <span class="cs">        - file.css</span>
    <span class="cp">      - img</span>
    <span class="cp">      - js</span>
    <span class="cp">      - less</span>
    <span class="nt">  - css</span>
    <span class="na">    - global</span>
    <span class="cs">      - file.min.css</span>
    <span class="na">    - descriptive-directory-name</span>
    <span class="cs">      - file.min.css</span>
    <span class="cs">      - file.css</span>
    <span class="nt">  - fonts</span>
    <span class="nt">  - img</span>
    <span class="na">    - global</span>
    <span class="cs">      - header.jpg</span>
    <span class="na">    - descriptive-directory-name</span>
    <span class="cs">      - file-download.jpg</span>
    <span class="nt">  - js</span>
    <span class="na">    - global</span>
    <span class="cs">      - file.min.js</span>
    <span class="na">    - descriptive-directory-name</span>
    <span class="cs">      - file.min.js</span>
    <span class="cs">      - file.js</span>
    <span class="nt">  - less</span>
    <span class="na">    - descriptive-directory-name</span>
    <span class="cs">      - file.less</span>
    <span class="nt">  - vendor</span>
    <span class="na">    - descriptive-name-of-vendor-asset</span>

  </code>
</pre>
        </div>
      </div>
    </div>

    <div class="section" id="projects">
      <div class="col">
        <h3>Projects</h3>
        <ul>
          <li>Use lowercase and hyphens</li>
          <li>Specifically named for easier recognition</li>
          <li>Ending with the main language/framework the project is being worked with </li>
        </ul>
      </div>
      <div class="col">
        <div class="highlight">
<pre>
  <code class="language-html" data-lang="html">
    <span class="cp">name-of-project-grails</span>
    <span class="cp">name-of-project-laravel</span>
    <span class="cp">name-of-project-wordpress</span>
    <span class="cp">name-of-project-php</span>
  </code>
</pre>
        </div>
      </div>
    </div>

    <div class="section" id="servers">
      <div class="col">
        <h3>Servers</h3>
        <p>
          <em>Actual server information coming soon. Sample below:</em>
        </p>
        <ul>
          <li>Always starts with client name/abbreviation</li>
          <li>Followed by a space and a P or D for production or development respectively</li>
          <li>Followed with a server number using sequential numbering </li>
          <li>Last character will always be a letter indicating server version
            <ul>
              <li>Ubuntu 14.04 - A</li>
              <li>Ubuntu 16.04 - B</li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="col">
        <div class="highlight">
<pre>
  <code class="language-html" data-lang="html">
    <span class="cp">Server Sample here</span>
  </code>
</pre>
        </div>
      </div>
    </div>


    <footer class="footer">
      <img src="assets/img/eview360-logo.jpg" width="200"><br>
      <p>All information here is considered to be private and should not be shared outside of Eview360</p>
      <p> This cool guy (<a href="http://codeguide.co/" target="_blank">codeguide.co</a>) created this template and we just altered it for our personal experience.</p>
    </footer>

  </body>
</html>
