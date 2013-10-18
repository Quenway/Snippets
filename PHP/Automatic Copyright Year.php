Current year only
&copy; <?php echo date("Y") ?>

With start year
&copy; 2008-<?php echo date("Y") ?>

Start date with error protection
<?php function auto_copyright($year = 'auto'){ ?>
   <?php if(intval($year) == 'auto'){ $year = date('Y'); } ?>
   <?php if(intval($year) == date('Y')){ echo intval($year); } ?>
   <?php if(intval($year) < date('Y')){ echo intval($year) . ' - ' . date('Y'); } ?>
   <?php if(intval($year) > date('Y')){ echo date('Y'); } ?>
<?php } ?>

Usage:

<?php auto_copyright(); // 2011?>

<?php auto_copyright('2010');  // 2010 - 2011 ?>
