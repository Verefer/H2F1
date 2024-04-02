<nav>
         <ul id="menu">
            <li><a href="#" onclick="showContent('content')">#</a></li>
            <li><a href="#" onclick="showContent('about')">#</a></li>
            <li><a href="#" onclick="showContent('contact')">#</a></li>
        </ul>

        <script>
        function showContent(id) {
            // Получаем все элементы содержимого
            var contentDivs = document.querySelectorAll('content > div');

            // Проходимся по всем элементам содержимого
            for (var i = 0; i < contentDivs.length; i++) {
                var div = contentDivs[i];
                // Скрываем все элементы, кроме того, который соответствует id
                if (div.id === id) {
                    div.classList.remove('hidden');
                } else {
                    div.classList.add('hidden');
                }
            }
        }
    </script>
</nav>

