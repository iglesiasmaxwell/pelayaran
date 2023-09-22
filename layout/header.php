<?php
include_once('fetch-api.php');
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600&family=Space+Grotesk:wght@300;400;500;600;700&family=Merriweather:wght@300;400;700;900&display=swap" rel="stylesheet">

    <!-- Font Awesome 6 -->
    <script src="https://kit.fontawesome.com/7a6da8ef9c.js" crossorigin="anonymous"></script>

    <!-- Flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- UIkit -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/css/uikit.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/js/uikit.min.js"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'montserrat': 'Montserrat, sans-serif',
                        'lexend': 'Lexend, sans-serif',
                        'space-grotesk': 'Space Grotesk, sans-serif',
                        'merriweather': 'Merriweather, serif',
                    },
                    screens: {
                        '4xl': '2450px',
                    },
                    colors: {
                        'light': '#D8D8D8',
                        'light-tp': '#F5F5F5',
                        'dark': '#2A3538',
                        'dark-tp': '#46595E',
                        'darker': '#253235',
                        'white': '#FFFFFF',
                        'whiteblue': '#EAFBFF',
                        'whatsapp': '#1EBEA5',
                        'facebook': '#1778F2',
                        'instagram': '#D62976 ',
                        'youtube': '#E62117',
                    },
                    gap: {
                        '100': '29rem',
                        '120': '33rem',
                    },
                    height: {
                        '8': '34px',
                        '9.5': '38px',
                        '10.5': '45px',
                        '200px': '200px',
                        '250px': '250px',
                        '300px': '300px',
                        '350px': '350px',
                    },
                    width: {
                        '6.5': '26px',
                        '8': '34px',
                        '9.5': '38px',
                        '10.5': '45px',
                        '800px': '800px',
                        '1000px': '1000px',
                        '70': '18rem',
                    },
                }
            }
        }
    </script>
</head>
<style>
    ::-moz-selection {
        color: #F5F5F5;
        background: #46595E;
    }

    ::selection {
        color: #F5F5F5;
        background: #46595E;
    }
</style>