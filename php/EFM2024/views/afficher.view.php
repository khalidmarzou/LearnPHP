<?php require_once 'partials/head.view.php'; ?>
<?php require_once 'partials/nav.view.php'; ?>

<div class="container mx-auto p-4">
    <table class="min-w-full bg-white border border-gray-200 rounded-lg">
        <thead>
            <tr>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date de voyage</th>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ville de depart</th>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ville d arrive</th>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Heure de depart</th>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Heure d arrivee</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="px-6 py-4 border-b border-gray-200 text-sm"><?= $voyage -> dateVoy ?></td>
                <td class="px-6 py-4 border-b border-gray-200 text-sm"><?= $voyage -> villeD ?></td>
                <td class="px-6 py-4 border-b border-gray-200 text-sm"><?= $voyage -> villeA ?></td>
                <td class="px-6 py-4 border-b border-gray-200 text-sm"><?= $voyage -> heureDepart ?></td>
                <td class="px-6 py-4 border-b border-gray-200 text-sm">a determiner</td>
            </tr>
        </tbody>
    </table>
</div>


<?php require_once 'partials/footer.view.php';