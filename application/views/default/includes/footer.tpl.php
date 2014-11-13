<footer>
    <p>© Copyright 2014 | Code & Design by <a href="mailto:<?php echo ADMIN_EMAIL; ?>"><?php echo $this->langs->site_name; ?></a></p>
    <p>
        <a href="http://validator.w3.org/check?uri=referer"><img src="<?php echo $this->getUrlAsset('img'); ?>html5.png" alt="Valid XHTML 5" height="31" width="88" /></a>
        <a href="http://jigsaw.w3.org/css-validator/check/referer"><img src="<?php echo $this->getUrlAsset('img'); ?>css.gif" alt="CSS Valide !" width="88" height="31"/></a>
        <a href="http://www.phpfrance.com/"><img src="<?php echo $this->getUrlAsset('img'); ?>php.png" alt="PHP" width="88" height="31" /></a>
        <a href="http://www.mysql.fr/"><img src="<?php echo $this->getUrlAsset('img'); ?>mysql.gif" alt="MySQL" width="88" height="31" /></a>
        <a href="http://fr.wikipedia.org/wiki/JavaScript"><img src="<?php echo $this->getUrlAsset('img'); ?>javascript.png" alt="JavaScript" width="88" height="31" /></a>
    </p>
</footer>

<?php if ($this->debug) { ?>
    <script src="<?php echo $this->getUrlAsset('lib'); ?>bootstrap/dist/js/bootstrap.js"></script>
    <script src="<?php echo $this->getUrlAsset('lib'); ?>jquery/dist/jquery.js"></script>
    <script src="<?php echo $this->getUrlAsset('lib'); ?>jquery.browser/dist/jquery.browser.js"></script>
<?php } else { ?>
    <script src="<?php echo $this->getUrlAsset('lib'); ?>bootstrap/dist/js/bootstrap.min.js?v=<?php echo filemtime($this->getAssetPath('lib') . 'bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo $this->getUrlAsset('lib'); ?>jquery/dist/jquery.min.js?v=<?php echo filemtime($this->getAssetPath('lib') . 'jquery/dist/jquery.min.js'); ?>"></script>
    <script src="<?php echo $this->getUrlAsset('lib'); ?>jquery.browser/dist/jquery.browser.min.js?v=<?php echo filemtime($this->getAssetPath('lib') . 'jquery.browser/dist/jquery.browser.min.js'); ?>"></script>
<?php } ?>
<script type="text/javascript"><?php echo $this->getJs(); ?></script>