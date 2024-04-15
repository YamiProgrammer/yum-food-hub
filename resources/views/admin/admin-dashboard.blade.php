<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <script src="https://cdn.tailwindcss.com"></script>

    @vite('resources/css/app.css')
</head>
<body class="bg-lighthouse">
    @include('components.sidebar2')

  <main class="w-auto min-h-screen">
    <div class="h-full ml-14 mb-10 md:ml-64">
        @include('components.topbar2')
        
    </div>
  </main>

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>

  <script>
            // start: Popper
            const popperInstance = {}
        document.querySelectorAll('.dropdown').forEach(function (item, index) {
            const popperId = 'popper-' + index
            const toggle = item.querySelector('.dropdown-toggle')
            const menu = item.querySelector('.dropdown-menu')
            menu.dataset.popperId = popperId
            popperInstance[popperId] = Popper.createPopper(toggle, menu, {
                modifiers: [
                    {
                        name: 'offset',
                        options: {
                            offset: [0, 8],
                        },
                    },
                    {
                        name: 'preventOverflow',
                        options: {
                            padding: 24,
                        },
                    },
                ],
                placement: 'bottom-end'
            });
        })
        document.addEventListener('click', function (e) {
            const toggle = e.target.closest('.dropdown-toggle')
            const menu = e.target.closest('.dropdown-menu')
            if (toggle) {
                const menuEl = toggle.closest('.dropdown').querySelector('.dropdown-menu')
                const popperId = menuEl.dataset.popperId
                if (menuEl.classList.contains('hidden')) {
                    hideDropdown()
                    menuEl.classList.remove('hidden')
                    showPopper(popperId)
                } else {
                    menuEl.classList.add('hidden')
                    hidePopper(popperId)
                }
            } else if (!menu) {
                hideDropdown()
            }
        })

        function hideDropdown() {
            document.querySelectorAll('.dropdown-menu').forEach(function (item) {
                item.classList.add('hidden')
            })
        }
        function showPopper(popperId) {
            popperInstance[popperId].setOptions(function (options) {
                return {
                    ...options,
                    modifiers: [
                        ...options.modifiers,
                        { name: 'eventListeners', enabled: true },
                    ],
                }
            });
            popperInstance[popperId].update();
        }
        function hidePopper(popperId) {
            popperInstance[popperId].setOptions(function (options) {
                return {
                    ...options,
                    modifiers: [
                        ...options.modifiers,
                        { name: 'eventListeners', enabled: false },
                    ],
                }
            });
        }
        // end: Popper
  </script>
</body>
</html>