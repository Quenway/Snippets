<?php if ($this->helper('customer')->isLoggedIn()): ?>
	<a href="<?php echo $this->getUrl('customer/account'); ?>" title="<?php echo $this->__('My Account'); ?>">
		<?php echo $this->__('My Account'); ?>
	</a>
<?php else: ?>
	<a href="<?php echo $this->getUrl('customer/account/login'); ?>" title="<?php echo $this->__('My Account'); ?>">
		<?php echo $this->__('My Account'); ?>
	</a>
<?php endif; ?>
