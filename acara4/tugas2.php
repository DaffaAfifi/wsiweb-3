<?php 
echo "Mengetahu index tabel menggunakan perulangan PHP";
?>
<table border="1" cellpadding="10" cellspacing="0">
    <?php for($i = 1; $i <= 3; $i++) : ?>
        <tr>
            <?php for($j = 1; $j <= 5; $j++) : ?>
                <td><?= "$i,$j" ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>