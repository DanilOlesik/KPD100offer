        // Обработчик кликов для кнопок с классом 'sign-up-button'
        document.querySelectorAll('.sign-up-button').forEach(function(button) {
            button.addEventListener('click', function() {
                ym(98606644, 'reachGoal', 'sign-up-button');
            });
        });

        // Обработчик кликов для кнопок с классом 'cta-button'
        document.querySelectorAll('.cta-button').forEach(function(button) {
            button.addEventListener('click', function() {
                ym(98606644, 'reachGoal', 'cta-button');
            });
        });

        // Обработчик кликов для кнопок с классом 'cost-button'
        document.querySelectorAll('.cost-button').forEach(function(button) {
            button.addEventListener('click', function() {
                ym(98606644, 'reachGoal', 'cost-button');
            });
        });