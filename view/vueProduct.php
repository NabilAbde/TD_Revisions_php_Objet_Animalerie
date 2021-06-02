<ul>
    <?php foreach ($Product as $producte) : ?>
    <li>
       <?php echo $producte['PriceHT'].'€ Prix HT '.prixTTC($producte['PriceHT']).'€ Prix TTC'; ?>
    </li>
    <?php endforeach; ?>
</ul>