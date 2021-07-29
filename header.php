<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1"/>
    <?php
    wp_head();
    ?>
    <style>
        .dropdown:hover > ul, .sub-menu:hover > ul {
            visibility: visible;
            background: rgba(0, 0, 0, .5);
        }

        .dropdown ul li a {
            display: block;
            padding: .5rem 1rem;
            border-top: 1px solid rgba(255, 255, 255, .3);
        }

        .dropdown ul li a:hover {
            background: rgba(0, 0, 0, .5);
        }
    </style>
</head>
<body>
<header id="main_navigation" class="sticky top-0 z-20 relative text-primary bg-white"
        x-data="{solutionsDropdownOpen : false, mobileMenuOpen: false}">
    <div class="relative z-20">
        <div class="max-w-6xl mx-auto flex justify-between items-center px-8 sm:px-0 md:justify-start md:space-x-10">
            <div>
                <a href="<?=site_url()?>" class="flex">
                    <img class="h-16 w-auto" src="<?= get_logo_url() ?>" alt=""/>
                </a>
            </div>
            <div class="-mr-2 -my-2 md:hidden">
                <button @click="mobileMenuOpen = true" type="button"
                        class="inline-flex items-center justify-center p-2 rounded-md focus:outline-none transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
            <div class="hidden md:flex-1 md:flex md:items-center md:justify-between md:space-x-12">
                <nav class="flex space-x-10">

                </nav>
                <?php
                include 'inc/menu-walker.php';
                $menu_params = [
                    'menu' => 'primary',
                    'container' => '',
                    'theme_location' => 'primary',
                    'items_wrap' => '<ul id="" class="flex items-center space-x-8">%3$s</ul>',
                    'walker' => new MenuWalker(),
                    'fallback_cb' => false
                ];

                wp_nav_menu($menu_params);
                ?>
            </div>
        </div>
    </div>
    <div x-show="mobileMenuOpen" @click.away="mobileMenuOpen = false"
         class="absolute z-20 top-0 inset-x-0 transition transform origin-top-right md:hidden">
        <div class="rounded-b-lg shadow-lg">
            <div class="shadow-xs text-white bg-primary divide-y-2 divide-gray-50">
                <div class="pb-3 px-5 space-y-6 sm:space-y-8 sm:pb-8">
                    <div class="flex items-center justify-between">
                        <div>
                            <img class="h-16 w-auto" src="<?= get_logo_url(true) ?>" alt=""/>
                        </div>
                        <div class="-mr-2">
                            <button @click="mobileMenuOpen = false" type="button"
                                    class="inline-flex items-center justify-center p-2 rounded-md focus:outline-none transition duration-150 ease-in-out">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div>
                        <nav class="space-y-8">
                            <?php
                            include 'inc/mobile-menu-walker.php';
                            $menu_params['walker'] = new MobileMenuWalker();
                            $menu_params['items_wrap'] = '<ul id="" class="flex flex-col space-y-8">%3$s</ul>';
                            wp_nav_menu($menu_params);
                            ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<main>