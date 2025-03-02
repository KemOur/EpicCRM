<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="shortcut icon" type="image/png" href="imgs/1A.png">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EpicCRM</title>
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.88.1">
        <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/pricing/">

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
        <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
        <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
        <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
        <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
        <meta name="theme-color" content="#7952b3">

        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check" viewBox="0 0 16 16">
                <title>epicrm</title>
                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
            </symbol>
        </svg>

        <style>

            /* Clear floats after the columns */
            .row:after {
                content: "";
                display: table;
                clear: both;
            }


            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            .bi{
                margin-inline: auto;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }

            @media (max-width: 375px){
                .foncneed {
                    font-size: 25px;
                }
            }

            .foncneed {
                text-align: center;font-size: 35px;
            }


            /*body {
                background-image: linear-gradient(180deg, #eee, #fff 100px, #fff);
            }*/


            .container {
                max-width: 1060px;
            }


            .pricing-header {
                max-width: 700px;
            }

        </style>
</head>
<body class="antialiased">

@include('partials.header')
@yield('content')
@yield('scripts')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<script>
    $(document).ready( function () {
        $('#id_lead').DataTable({
            "language": {
                "search": "Rechercher :",
                "sProcessing":    "Traitement...",
                "sLengthMenu":    "Afficher _MENU_ Leads",
                "sZeroRecords":   "Aucun résultat trouvé",
                "sEmptyTable":    "Aucune donnée disponible dans ce tableau",
                "sInfo":          "_TOTAL_ Leads disponibles",
                "sInfoEmpty":     "Votre recherche ne correspond avec aucun résultat !",
                "sInfoFiltered":  "vous avez un total de _MAX_ leads",
                "sInfoPostFix":   "",
                "sUrl":           "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Mise en charge...",
                "oPaginate": {
                    "sFirst":    "Premier",
                    "sLast":    "Dernier",
                    "sNext":    "Prochain",
                    "sPrevious": "Précédent"
                },
                "oAria": {
                    "sSortAscending":  ": Activer pour trier la colonne par ordre croissant",
                    "sSortDescending": ": Activer pour trier la colonne par ordre décroissant"
                }
            }
        });
    } );

</script>
@include('partials.footer')
</body>
