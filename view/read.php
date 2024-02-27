<div class="container-fluid">

    <div class="row">
    <h1 class="text-center mt-5"><?php echo $titre;?></h1>
    <h3>
        
        <?php foreach ($data as $exposition):?>
            <p><?php echo $exposition->getLibelle();?> </p>
            <?php endforeach ;?>
    </h3>
    </div>
    
</div>