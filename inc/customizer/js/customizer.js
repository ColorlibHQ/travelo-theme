(function ($, api) {

    // Customizer fof page redirect
    api.section('travelo_fof_section', function (section) {

        section.expanded.bind(function (isExpanded) {

            if (isExpanded) {
                api.previewer.previewUrl.set(api.settings.url.home + '/maybe404page');
            } else {
                api.previewer.previewUrl.set(api.settings.url.home);
            }

        })

    });

    // Customizer blog page redirect
    api.section('travelo_blog_options_section', function (section) {

        section.expanded.bind(function (isExpanded) {

            if (isExpanded) {
                api.previewer.previewUrl.set(moahCustomizerdata.blog_page);
            } else {
                api.previewer.previewUrl.set(api.settings.url.home);
            }



        })

    });

    // General section
    api.section('travelo_general_options_section', function (section) {

        section.expanded.bind(function (isExpanded) {


            // Preloader option show/hide

            var $preloader = $('#travelo-preloader-toggle-settings'),
                $preloaderbg = $('#customize-control-travelo_preloaderbgcolor'),
                $preloaderbordercolor = $('#customize-control-travelo_loaderbordcolor'),
                $preloaderactivebordercolor = $('#customize-control-travelo_loaderbordactivecolor');


            // Default

            if ($preloader.is(':checked')) {
                $preloaderbg.show('slow');
                $preloaderbordercolor.show('slow');
                $preloaderactivebordercolor.show('slow');
            } else {
                $preloaderbg.hide('slow');
                $preloaderbordercolor.hide('slow');
                $preloaderactivebordercolor.hide('slow');
            }


            // on click
            $preloader.on('click', function () {

                var $this = $(this);

                if ($this.is(':checked')) {
                    $preloaderbg.show('slow');
                    $preloaderbordercolor.show('slow');
                    $preloaderactivebordercolor.show('slow');
                } else {
                    $preloaderbg.hide('slow');
                    $preloaderbordercolor.hide('slow');
                    $preloaderactivebordercolor.hide('slow');
                }


            });

        });


    });

    // Footer section
    api.section('travelo_footer_options_section', function (section) {

        section.expanded.bind(function (isExpanded) {


            // Footer Widget option show/hide
            var $widget_toggle = $('#travelo-widget-toggle-settings'),
                $widgetbg = $('#customize-control-travelo_footer_bgColor_settings'),
                $widgettext = $('#customize-control-travelo_footer_wtcolor_settings'),
                $widgettitle = $('#customize-control-travelo_footer_widgettitlecolor_settings'),
                $widgetanchor = $('#customize-control-travelo_footer_wanchorcolor_settings'),
                $widgetanchorhover = $('#customize-control-travelo_footer_wanchorhovcolor_settings');


            // Default

            if ($widget_toggle.is(':checked')) {
                $widgetbg.show('slow');
                $widgettext.show('slow');
                $widgettitle.show('slow');
                $widgetanchor.show('slow');
                $widgetanchorhover.show('slow');
            } else {
                $widgetbg.hide('slow');
                $widgettext.hide('slow');
                $widgettitle.hide('slow');
                $widgetanchor.hide('slow');
                $widgetanchorhover.hide('slow');
            }

            // on click
            $widget_toggle.on('click', function () {

                var $this = $(this);

                if ($this.is(':checked')) {

                    $widgetbg.show('slow');
                    $widgettext.show('slow');
                    $widgettitle.show('slow');
                    $widgetanchor.show('slow');
                    $widgetanchorhover.show('slow');
                } else {

                    $widgetbg.hide('slow');
                    $widgettext.hide('slow');
                    $widgettitle.hide('slow');
                    $widgetanchor.hide('slow');
                    $widgetanchorhover.hide('slow');
                }


            });

            /**
             * Footer bottom social media option show/hide
             *
             */

            var $social_toggle = $('#travelo-footersocial-toggle-settings'),
                $socialcolor = $('#customize-control-travelo_footer_socialiconcolor_settings'),
                $socialhovercolor = $('#customize-control-travelo_footer_socialiconhovercolor_settings');


            // Default

            if ($social_toggle.is(':checked')) {
                $socialcolor.show('slow');
                $socialhovercolor.show('slow');
            } else {
                $socialcolor.hide('slow');
                $socialhovercolor.hide('slow');
            }

            // on click
            $social_toggle.on('click', function () {

                var $this = $(this);

                if ($this.is(':checked')) {
                    $socialcolor.show('slow');
                    $socialhovercolor.show('slow');
                } else {
                    $socialcolor.hide('slow');
                    $socialhovercolor.hide('slow');
                }


            });


        });

    });


})(jQuery, wp.customize);