<!-- currency.phtml -->

<?php
/**
 * Currency switcher
 *
 * @see Mage_Directory_Block_Currency
 */
?>

<script>
    showCurrencies = function() {
        jQuery('#currency_options').show();
        jQuery("#currency_options").focus();
    }

    hideCurrencies = function() {
        jQuery('#currency_options').hide();
    }

    jQuery('.other_currency').live('click', function() {
        hideCurrencies();
    });

    jQuery('#current_currency, #currency_select .title').live('click', function() {
        showCurrencies();
    });

    jQuery("body").click(function(e){
        if(e.target.className !== "currency_options"){
            hideCurrencies();
        }
    });
</script>

<?php if($this->getCurrencyCount()>1): ?>
    <div id="currency_select">
        <?php
        //Zend_Debug::dump($this->getCurrencies());
            foreach ($this->getCurrencies() as $_code => $_name) {
                if($_code==$this->getCurrentCurrencyCode()):
        ?>
                <div id="current_currency">
                    <img src="<?php  echo $this->getSkinUrl()."images/currency/". $_code; ?>.jpg "/>  <span><?php echo $_name; ?></span><span><?php echo $_code; ?></span>
                </div> <!-- #current_currency -->

         <?php break; endif; }?>

        <div style="display: none" class="currency_options" id="currency_options">
            <?php
                foreach ($this->getCurrencies() as $_code => $_name) {
                    if($_code!=$this->getCurrentCurrencyCode()): ?>
                        <div class="other_currency" onclick="setLocation('<?php echo $this->getSwitchCurrencyUrl($_code); ?>');"><img src="<?php  echo $this->getSkinUrl()."images/currency/". $_code; ?>.jpg "/>  <span><?php echo $_code; ?></span></div>
                    <?php endif; }?>
        </div> <!-- .currency_options -->

        <div class="title"><?php echo $this->__('&nbsp;'); ?></div>
    </div> <!-- #currency_select -->
<?php endif; ?>




<!-- header.phtml --> 

<?php echo $this->getChildHtml('header.currency'); ?>

<!-- local.xml -->

<reference name="header">
  <block type="directory/currency" name="header.currency" as="header.currency" template="directory/currency.phtml" />
</reference>
