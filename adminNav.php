
<body class="hide-sidedrawer">
<script>
    jQuery(function($) {
        var $bodyEl = $('body'),
            $sidedrawerEl = $('#sidedrawer');


        function showSidedrawer() {
            // show overlay
            var options = {
                onclose: function() {
                    $sidedrawerEl
                        .removeClass('active')
                        .appendTo(document.body);
                }
            };

            var $overlayEl = $(mui.overlay('on', options));

            // show element
            $sidedrawerEl.appendTo($overlayEl);
            setTimeout(function() {
                $sidedrawerEl.addClass('active');
            }, 20);
        }


        function hideSidedrawer() {
            $bodyEl.toggleClass('hide-sidedrawer');
        }


        $('.js-show-sidedrawer').on('click', showSidedrawer);
        $('.js-hide-sidedrawer').on('click', hideSidedrawer);
    });

</script>
</head>

<div id="sidedrawer" class="mui--no-user-select">
    <div id="sidedrawer-brand" class="mui--appbar-line-height">
        <span><img width="100%" src="images/logo.jpeg" alt="logo" /></span>
    </div>
    <div class="mui-divider"></div>

    <ul>
        <li>
            <strong>Category 1</strong>

        </li>
        <li>
            <strong>Category 2</strong>

        </li>
        <li>
            <strong>Category 3</strong>

        </li>
    </ul>
</div>
<header id="header">
    <div class="mui-appbar mui--appbar-line-height">
        <div class="mui-container-fluid">
            <a id="pulloutbar" class="sidedrawer-toggle mui--hidden-xs mui--hidden-sm js-hide-sidedrawer"><i id="navpull" class="material-icons">menu</i></a>
            <span class="mui--text-title mui--visible-xs-inline-block">Admin</span>
        </div>
    </div>
</header>