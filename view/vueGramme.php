<ul>
    <?php foreach ($Product as $producte) : ?>
    <li>
       <?php echo $producte["Quantity"].' '.gramme($producte['PriceHT'],$producte['Quantity']); ?>
    </li>
    <?php endforeach; ?>
</ul>