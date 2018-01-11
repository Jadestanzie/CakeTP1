
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php $this->fetch('title')?></title>
        <?php $this->fetch('meta')?>
        <?php $this->fetch('css')?>
        <?php $this->fetch('script')?>
    </head>
    <body>
        <?php $this->fetch('content');?>
        <?php echo ($this->element('menu'));?>
        <b>Mon module est : </b>
        <?php echo (h($monModule));?>
        
        
    </body>
</html>
