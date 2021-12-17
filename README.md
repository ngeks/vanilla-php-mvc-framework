<h1 class="code-line" data-line-start=0 data-line-end=1 ><a id="Vanilla_PHP_MVC_Framework_0"></a>Vanilla PHP MVC Framework</h1>
<p class="has-line-data" data-line-start="1" data-line-end="2"><a href="https://www.buymeacoffee.com/ngeks"><img src="https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png" alt="&amp;quot;Buy Me A Coffee&amp;quot;"></a></p>
<p class="has-line-data" data-line-start="3" data-line-end="4">A simple CRUD application created with vanilla PHP following MVC model and object-oriented programming.</p>
<p class="has-line-data" data-line-start="5" data-line-end="6"><strong>DEMO</strong>: <a href="http://ngeks.epizy.com">http://ngeks.epizy.com</a></p>
<h3 class="code-line" data-line-start=6 data-line-end=7 ><a id="REQUIREMENTS_6"></a>REQUIREMENTS</h3>
<ul>
<li class="has-line-data" data-line-start="7" data-line-end="8">You must have <code>PHP</code> installed on your computer.</li>
<li class="has-line-data" data-line-start="8" data-line-end="10">You must have <code>XAMPP</code> installed on your computer.</li>
</ul>
<h3 class="code-line" data-line-start=10 data-line-end=11 ><a id="INSTRUCTIONS_10"></a>INSTRUCTIONS</h3>
<ol>
<li class="has-line-data" data-line-start="11" data-line-end="16">
<p class="has-line-data" data-line-start="11" data-line-end="12">Clone the repository inside XAMPP’s htdocs folder</p>
<pre><code class="has-line-data" data-line-start="13" data-line-end="15">https://github.com/ngeks/vanilla-php-mvc-framework.git
</code></pre>
</li>
<li class="has-line-data" data-line-start="16" data-line-end="20">
<p class="has-line-data" data-line-start="16" data-line-end="17">Navigate inside the folder</p>
<pre><code class="has-line-data" data-line-start="18" data-line-end="20">cd vanilla-php-mvc-framework
</code></pre>
</li>
<li class="has-line-data" data-line-start="20" data-line-end="25">
<p class="has-line-data" data-line-start="20" data-line-end="21">Import database</p>
<ul>
<li class="has-line-data" data-line-start="21" data-line-end="22">Start <code>Apache</code> and <code>MySQL</code> in XAMPP</li>
<li class="has-line-data" data-line-start="22" data-line-end="23">go to <code>localhost/phpmyadmin</code> in your browser</li>
<li class="has-line-data" data-line-start="23" data-line-end="25">create a database and import <code>sql.db</code></li>
</ul>
</li>
<li class="has-line-data" data-line-start="25" data-line-end="53">
<p class="has-line-data" data-line-start="25" data-line-end="26">Set configuration variables.</p>
<pre><code class="has-line-data" data-line-start="27" data-line-end="38">// URL Root
define('URLROOT', '_URL_ROOT_HERE_');
// Site Name
define('SITENAME', '_SITE_NAME_HERE_');

// DB Config
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'sandbox');
</code></pre>
<p class="has-line-data" data-line-start="39" data-line-end="40">Example:</p>
<pre><code class="has-line-data" data-line-start="41" data-line-end="52">// URL Root
define('URLROOT', 'http://localhost/vanilla-php-mvc-framework');
// Site Name
define('SITENAME', 'Vanilla PHP MVC Framework');

// DB Congig
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'password');
define('DB_NAME', 'dbname');
</code></pre>
</li>
<li class="has-line-data" data-line-start="53" data-line-end="73">
<p class="has-line-data" data-line-start="53" data-line-end="54">Change <code>public/.htacces</code> line 4 (Optional)</p>
<pre><code class="has-line-data" data-line-start="55" data-line-end="64">&lt;IfModule mod_rewrite.c&gt;
  Options -Multiviews
  RewriteEngine On
  RewriteBase /vanilla-php-mvc-framework/public
  RewriteCond %{REQUEST_FILENAME} !-d
  RewriteCond %{REQUEST_FILENAME} !-f
  RewriteRule  ^(.+)$ index.php?url=$1 [QSA,L]
&lt;/IfModule&gt;
</code></pre>
<p class="has-line-data" data-line-start="65" data-line-end="66">Subfolder:</p>
<pre><code class="has-line-data" data-line-start="67" data-line-end="69">RewriteBase /whatever-folder-name/public
</code></pre>
<p class="has-line-data" data-line-start="69" data-line-end="70">If the files are in root folder:</p>
<pre><code class="has-line-data" data-line-start="71" data-line-end="73">RewriteBase /public
</code></pre>
</li>
<li class="has-line-data" data-line-start="73" data-line-end="75">
<p class="has-line-data" data-line-start="73" data-line-end="74">Go to <code>localhost</code> in your browser.</p>
</li>
</ol>
<h2 class="code-line" data-line-start=75 data-line-end=76 ><a id="LICENSE_75"></a>LICENSE</h2>
<p class="has-line-data" data-line-start="76" data-line-end="77"><a href="https://github.com/ngeks/lazada-price-drop-alerts/blob/main/LICENSE"><img src="https://img.shields.io/github/license/ngeks/vanilla-php-mvc-framework.svg" alt="GitHub license"></a></p>
<h2 class="code-line" data-line-start=78 data-line-end=79 ><a id="CONTACT_ME_78"></a>CONTACT ME</h2>
<ul>
<li class="has-line-data" data-line-start="79" data-line-end="80">Repository: <a href="https://github.com/ngeks/lazada-price-drop-alerts">https://github.com/ngeks/lazada-price-drop-alerts</a></li>
<li class="has-line-data" data-line-start="80" data-line-end="81">Twitter: <a href="https://twitter.com/ngeksdev">@ngeksdev</a></li>
<li class="has-line-data" data-line-start="81" data-line-end="82">Email: <a href="mailto:ngeksdev@gmail.com">ngeksdev@gmail.com</a></li>
</ul>