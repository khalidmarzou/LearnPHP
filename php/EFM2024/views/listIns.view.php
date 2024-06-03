<?php require_once 'partials/head.view.php'; ?>
<?php require_once 'partials/nav.view.php'; ?>

<div class="container mx-auto p-4">
    <table class="min-w-full bg-white border border-gray-200 rounded-lg">
        <thead>
            <tr>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Code d'inscription</th>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date de voyage</th>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombres de personnes</th>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total à payer</th>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach($voyages as $voyage) : ?>
                
                <?php
                $prixTotal = $voyage -> prixTicket * $voyage -> nbrePers;
                echo <<<EOT
                        <tr>
                            <td class="px-6 py-4 border-b border-gray-200 text-sm">{$voyage -> codeInsc}</td>
                            <td class="px-6 py-4 border-b border-gray-200 text-sm">{$voyage -> dateVoy}</td>
                            <td class="px-6 py-4 border-b border-gray-200 text-sm">{$voyage -> nbrePers}</td>
                            <td class="px-6 py-4 border-b border-gray-200 text-sm">{$prixTotal}</td>
                            <td class="px-6 py-4 border-b border-gray-200 text-sm"><a href="/afficher?codeInsc={$voyage -> codeInsc}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Afficher</a></td>
                        </tr>
                EOT;
                ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


<?php require_once 'partials/footer.view.php';