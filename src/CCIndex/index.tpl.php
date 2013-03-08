<h1>Index Controller</h1>
<p>Welcome to Jepic index controller.</p>

<h2>Download</h2>
<p>You can download Jepic from github.</p>
<blockquote>
<code>git clone git://github.com/Luminous91/jepic.git</code>
</blockquote>
<p>You can review its source directly on github: <a href='https://github.com/Luminous91/jepic'>https://github.com/Luminous91/jepic</a></p>

<h2>Installation</h2>
<p>First you have to make the data-directory writable. This is the place where Jepic needs
to be able to write and create files.</p>
<blockquote>
<code>cd jepic; chmod 777 site/data</code>
</blockquote>

<p>Second, Jepic has some modules that need to be initialised. You can do this through a 
controller. Point your browser to the following link.</p>
<blockquote>
<a href='<?=create_url('module/install')?>'>module/install</a>
</blockquote>