<!DOCTYPE html>
<html>

<head>
    <title>Devis: Décennale Express</title>
</head>

<body>
    <table cellspacing="0" cellpadding="5"
        style="width:100%;border:solid 1px #e0e0e0;border-collapse:collapse;overflow:wrap">
        <tbody>
            <tr style="background-color:#f0f0f0">
                <td valign="top" width="300" style="background-color:#f0f0f0;padding:5px 0 5px 5px">
                    <b>Profesion</b>
                </td>
                <td style="background-color:#f0f0f0;padding:5px 0">{{ $details['step1']['profession'] }}</td>
            </tr>
            <tr style="background-color:#f0f0f0">
                <td valign="top" width="300" style="background-color:#f0f0f0;padding:5px 0 5px 5px">
                    <b>Num de SIREN</b>
                </td>
                <td style="background-color:#f0f0f0;padding:5px 0">{{ $details['step1']['siren'] }}</td>
            </tr>
            <tr style="background-color:#ffffff">
                <td valign="top" width="300" style="background-color:#ffffff;padding:5px 0 5px 5px">
                    <b>Entreprise</b>
                </td>
                <td style="background-color:#ffffff;padding:5px 0">{{ $details['step2']['nom_entreprise'] }}</td>
            </tr>
            <tr style="background-color:#f0f0f0">
                <td valign="top" width="300" style="background-color:#f0f0f0;padding:5px 0 5px 5px">
                    <b>Type</b>
                </td>
                <td style="background-color:#f0f0f0;padding:5px 0">{{ $details['step2']['type'] }}</td>
            </tr>
            <tr style="background-color:#ffffff">
                <td valign="top" width="300" style="background-color:#ffffff;padding:5px 0 5px 5px">
                    <b>Adresse</b>
                </td>
                <td style="background-color:#ffffff;padding:5px 0">{{ $details['step2']['adresse'] }}</td>
            </tr>
            <tr style="background-color:#f0f0f0">
                <td valign="top" width="300" style="background-color:#f0f0f0;padding:5px 0 5px 5px">
                    <b>Code Postal</b>
                </td>
                <td style="background-color:#f0f0f0;padding:5px 0">{{ $details['step2']['code_postal'] }}</td>
            </tr>
            <tr style="background-color:#ffffff">
                <td valign="top" width="300" style="background-color:#ffffff;padding:5px 0 5px 5px">
                    <b>Ville</b>
                </td>
                <td style="background-color:#ffffff;padding:5px 0">{{ $details['step2']['ville'] }}</td>
            </tr>
            <tr style="background-color:#f0f0f0">
                <td valign="top" width="300" style="background-color:#f0f0f0;padding:5px 0 5px 5px">
                    <b>Mobile</b>
                </td>
                <td style="background-color:#f0f0f0;padding:5px 0">{{ $details['step2']['mobile'] }}</td>
            </tr>
            <tr style="background-color:#ffffff">
                <td valign="top" width="300" style="background-color:#ffffff;padding:5px 0 5px 5px">
                    <b>Mail</b>
                </td>
                <td style="background-color:#ffffff;padding:5px 0"><a href="mailto:contact@p2cenergies.fr"
                        target="_blank">{{ $details['step2']['mail'] }}</a></td>
            </tr>
            <tr style="background-color:#f0f0f0">
                <td valign="top" width="300" style="background-color:#f0f0f0;padding:5px 0 5px 5px">
                    <b>Nombre de Salariés + patron</b>
                </td>
                <td style="background-color:#f0f0f0;padding:5px 0">{{ $details['step2']['nombre_salaries'] }}</td>
            </tr>
            <tr style="background-color:#ffffff">
                <td valign="top" width="300" style="background-color:#ffffff;padding:5px 0 5px 5px">
                    <b>Chiffre d'affaires</b>
                </td>
                <td style="background-color:#ffffff;padding:5px 0">{{ $details['step2']['chiffre_affaires'] }}</td>
            </tr>
            <tr style="background-color:#f0f0f0">
                <td valign="top" width="300" style="background-color:#f0f0f0;padding:5px 0 5px 5px">
                    <b>Date de création</b>
                </td>
                <td style="background-color:#f0f0f0;padding:5px 0">{{ $details['step2']['date_creation'] }}</td>
            </tr>
            <tr style="background-color:#ffffff">
                <td valign="top" width="300" style="background-color:#ffffff;padding:5px 0 5px 5px">
                    <b>Nom &amp; prénom du dirigeant</b>
                </td>
                <td style="background-color:#ffffff;padding:5px 0">{{ $details['step2']['nom_dirigeant'] }}</td>
            </tr>
            <tr style="background-color:#f0f0f0">
                <td valign="top" width="300" style="background-color:#f0f0f0;padding:5px 0 5px 5px">
                    <b>Date de naissance</b>
                </td>
                <td style="background-color:#f0f0f0;padding:5px 0">{{ $details['step2']['date_naissance'] }}</td>
            </tr>
            <tr style="background-color:#ffffff">
                <td valign="top" width="300" style="background-color:#ffffff;padding:5px 0 5px 5px">
                    <b>Avez-vous déjà été assuré</b>
                </td>
                <td style="background-color:#ffffff;padding:5px 0">{{ $details['step3']['deja_assure'] }}</td>
            </tr>
            <tr style="background-color:#f0f0f0">
                <td valign="top" width="300" style="background-color:#f0f0f0;padding:5px 0 5px 5px">
                    <b>Nombre d'années d'assurance</b>
                </td>
                <td style="background-color:#f0f0f0;padding:5px 0">{{ $details['step3']["assureur"]['annee'] }}</td>
            </tr>
            <tr style="background-color:#ffffff">
                <td valign="top" width="300" style="background-color:#ffffff;padding:5px 0 5px 5px">
                    <b>Votre contrat est-il en cours</b>
                </td>
                <td style="background-color:#ffffff;padding:5px 0">{{ $details['step3']["assureur"]['en_cours'] }}</td>
            </tr>
            <tr style="background-color:#f0f0f0">
                <td valign="top" width="300" style="background-color:#f0f0f0;padding:5px 0 5px 5px">
                    <b>Date de résiliation de votre dernier contrat</b>
                </td>
                <td style="background-color:#f0f0f0;padding:5px 0">{{ $details['step3']["assureur"]['date_resiliation'] }}</td>
            </tr>
            <tr style="background-color:#ffffff">
                <td valign="top" width="300" style="background-color:#ffffff;padding:5px 0 5px 5px">
                    <b>Nom de l'ancienne compagnie</b>
                </td>
                <td style="background-color:#ffffff;padding:5px 0">{{ $details['step3']["assureur"]['nom'] }}</td>
            </tr>
            <tr style="background-color:#f0f0f0">
                <td valign="top" width="300" style="background-color:#f0f0f0;padding:5px 0 5px 5px">
                    <b>Nombre de sinistres déclarés sur 36 mois</b>
                </td>
                <td style="background-color:#f0f0f0;padding:5px 0">{{ $details['step3']["assureur"]['nombre_sinistre'] }}</td>
            </tr>
            <tr style="background-color:#ffffff">
                <td valign="top" width="300" style="background-color:#ffffff;padding:5px 0 5px 5px">
                    <b>Montant des sinistres déclarés sur 36 mois</b>
                </td>
                <td style="background-color:#ffffff;padding:5px 0">{{ $details['step3']["assureur"]['montant_sinistre'] }}</td>
            </tr>
            <tr style="background-color:#f0f0f0">
                <td valign="top" width="300" style="background-color:#f0f0f0;padding:5px 0 5px 5px">
                    <b>Votre ancien contrat a-t-il été résilié pour non-paiement</b>
                </td>
                <td style="background-color:#f0f0f0;padding:5px 0">{{ $details['step3']["assureur"]['non_paiement'] }}</td>
            </tr>
            <tr style="background-color:#ffffff">
                <td valign="top" width="300" style="background-color:#ffffff;padding:5px 0 5px 5px">
                    <b>Si oui, avez-vous réglé l’arriéré à la compagnie</b>
                </td>
                <td style="background-color:#ffffff;padding:5px 0">{{ $details['step3']["assureur"]['arriere'] }}</td>
            </tr>
            <tr style="background-color:#f0f0f0">
                <td valign="top" width="300" style="background-color:#f0f0f0;padding:5px 0 5px 5px">
                    <b>Votre ancien contrat a-t-il été résilié pour fausse déclaration</b>
                </td>
                <td style="background-color:#f0f0f0;padding:5px 0">{{ $details['step3']["assureur"]['fausse_declaration'] }}</td>
            </tr>
            <tr style="background-color:#ffffff">
                <td valign="top" width="300" style="background-color:#ffffff;padding:5px 0 5px 5px">
                    <b>Donnez vous des chantiers en sous traitance à plus de 30%</b>
                </td>
                <td style="background-color:#ffffff;padding:5px 0">{{ $details['step4']['chantiers_sous_traitance'] }}</td>
            </tr>
            <tr style="background-color:#f0f0f0">
                <td valign="top" width="300" style="background-color:#f0f0f0;padding:5px 0 5px 5px">
                    <b>Souhaitez vous la reprise du passé sur 1 an (+15%)</b>
                </td>
                <td style="background-color:#f0f0f0;padding:5px 0">{{ $details['step4']['reprise_un_annee'] }}</td>
            </tr>
            <tr style="background-color:#ffffff">
                <td valign="top" width="300" style="background-color:#ffffff;padding:5px 0 5px 5px">
                    <b>Etes-vous en redressement judiciaire</b>
                </td>
                <td style="background-color:#ffffff;padding:5px 0">{{ $details['step4']['redressement_judiciaire'] }}</td>
            </tr>
            <tr style="background-color:#f0f0f0">
                <td valign="top" width="300" style="background-color:#f0f0f0;padding:5px 0 5px 5px">
                    <b>Avez-vous des diplomes du batiment</b>
                </td>
                <td style="background-color:#f0f0f0;padding:5px 0">{{ $details['step4']['diplomes_batiment'] }}</td>
            </tr>
            <tr style="background-color:#ffffff">
                <td valign="top" width="300" style="background-color:#ffffff;padding:5px 0 5px 5px">
                    <b>Activité principale</b>
                </td>
                <td style="background-color:#ffffff;padding:5px 0">
                    {{$details['step5'][0]}}
                </td>
            </tr>
            <tr style="background-color:#f0f0f0">
                <td valign="top" width="300" style="background-color:#f0f0f0;padding:5px 0 5px 5px">
                    <b>Réalisez-vous des activités secondaires</b>
                </td>
                <td style="background-color:#f0f0f0;padding:5px 0">
                    @foreach ( $details['step5'] as $activity)
                    {{ $activity }} ,
                    @endforeach
                </td>
            </tr>
            <tr style="background-color:#ffffff">
                <td valign="top" width="300" style="background-color:#ffffff;padding:5px 0 5px 5px">
                    <b>Date d'effet demandée</b>
                </td>
                <td style="background-color:#ffffff;padding:5px 0">{{ $details['step6']['date_effet'] }}</td>
            </tr>
            <tr style="background-color:#f0f0f0">
                <td valign="top" width="300" style="background-color:#f0f0f0;padding:5px 0 5px 5px">
                    <b>Franchise</b>
                </td>
                <td style="background-color:#f0f0f0;padding:5px 0">{{ $details['step6']['franchise'] }}</td>
            </tr>
            <tr style="background-color:#ffffff">
                <td valign="top" width="300" style="background-color:#ffffff;padding:5px 0 5px 5px">
                    <b>Fractionnement</b>
                </td>
                <td style="background-color:#ffffff;padding:5px 0">{{ $details['step6']['fractionnement'] }}</td>
            </tr>
            <tr style="background-color:#f0f0f0">
                <td  style="background-color:#f0f0f0;padding:5px"><b>Observations diverses</b> </td>
                <td style="background-color:#ffffff;padding:5px 0">{{ $details['step6']['observations_diverses'] }}</td>

            </tr>
        </tbody>
    </table>
</body>

</html>
