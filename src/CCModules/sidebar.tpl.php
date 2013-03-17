<div class='box'>
<h4>All modules</h4>
<p>All Jepic modules.</p>
<ul>
<?php foreach($modules as $module): ?>
<<<<<<< HEAD
  <li><a href='<?=create_url("module/view/{$module['name']}")?>'><?=$module['name']?></a></li>
=======
  <li><?=$module['name']?></li>
>>>>>>> 9a15f197613c13ab57e7914087fd08fe2d22de26
<?php endforeach; ?>
</ul>
</div>


<div class='box'>
<h4>Jepic core</h4>
<p>Jepic core modules.</p>
<ul>
<?php foreach($modules as $module): ?>
  <?php if($module['isJepicCore']): ?>
<<<<<<< HEAD
  <li><a href='<?=create_url("module/view/{$module['name']}")?>'><?=$module['name']?></a></li>
=======
  <li><?=$module['name']?></li>
>>>>>>> 9a15f197613c13ab57e7914087fd08fe2d22de26
  <?php endif; ?>
<?php endforeach; ?>
</ul>
</div>


<div class='box'>
<h4>Jepic CMF</h4>
<p>Jepic Content Management Framework (CMF) modules.</p>
<ul>
<?php foreach($modules as $module): ?>
  <?php if($module['isJepicCMF']): ?>
<<<<<<< HEAD
  <li><a href='<?=create_url("module/view/{$module['name']}")?>'><?=$module['name']?></a></li>
=======
  <li><?=$module['name']?></li>
>>>>>>> 9a15f197613c13ab57e7914087fd08fe2d22de26
  <?php endif; ?>
<?php endforeach; ?>
</ul>
</div>


<div class='box'>
<h4>Models</h4>
<p>A class is considered a model if its name starts with CM.</p>
<ul>
<?php foreach($modules as $module): ?>
  <?php if($module['isModel']): ?>
<<<<<<< HEAD
  <li><a href='<?=create_url("module/view/{$module['name']}")?>'><?=$module['name']?></a></li>
=======
  <li><?=$module['name']?></li>
>>>>>>> 9a15f197613c13ab57e7914087fd08fe2d22de26
  <?php endif; ?>
<?php endforeach; ?>
</ul>
</div>


<div class='box'>
<h4>Controllers</h4>
<p>Implements interface <code>IController</code>.</p>
<ul>
<?php foreach($modules as $module): ?>
  <?php if($module['isController']): ?>
<<<<<<< HEAD
  <li><a href='<?=create_url("module/view/{$module['name']}")?>'><?=$module['name']?></a></li>
  <?php endif; ?>
<?php endforeach; ?>
</ul>
</div>


<div class='box'>
<h4>Manageable module</h4>
<p>Implements interface <code>IModule</code>.</p>
<ul>
<?php foreach($modules as $module): ?>
  <?php if($module['isManageable']): ?>
  <li><a href='<?=create_url("module/view/{$module['name']}")?>'><?=$module['name']?></a></li>
=======
  <li><?=$module['name']?></li>
>>>>>>> 9a15f197613c13ab57e7914087fd08fe2d22de26
  <?php endif; ?>
<?php endforeach; ?>
</ul>
</div>


<div class='box'>
<h4>Contains SQL</h4>
<p>Implements interface <code>IHasSQL</code>.</p>
<ul>
<?php foreach($modules as $module): ?>
  <?php if($module['hasSQL']): ?>
<<<<<<< HEAD
  <li><a href='<?=create_url("module/view/{$module['name']}")?>'><?=$module['name']?></a></li>
=======
  <li><?=$module['name']?></li>
>>>>>>> 9a15f197613c13ab57e7914087fd08fe2d22de26
  <?php endif; ?>
<?php endforeach; ?>
</ul>
</div>


<div class='box'>
<h4>More modules</h4>
<p>Modules that does not implement any specific Jepic interface.</p>
<ul>
<?php foreach($modules as $module): ?>
  <?php if(!($module['isController'] || $module['isJepicCore'] || $module['isJepicCMF'])): ?>
<<<<<<< HEAD
  <li><a href='<?=create_url("module/view/{$module['name']}")?>'><?=$module['name']?></a></li>
=======
  <li><?=$module['name']?></li>
>>>>>>> 9a15f197613c13ab57e7914087fd08fe2d22de26
  <?php endif; ?>
<?php endforeach; ?>
</ul>
</div>