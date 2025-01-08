<title> <?php echo $title; ?> </title>

<ul>
    <?php foreach($users as $item){ ?>
        <li><?php echo $item['nome']; ?></li>
        <li><?php echo $item['email']; ?></li>
    <?php } ?>
</ul>