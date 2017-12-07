<aside class="col-sm-4 ml-sm-auto blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <h4>О сайте</h4>

        <p>
            Настоящий сайт является агрегатором ссылок на различные ресурсы интернета, связанные с программированием. 
            Делитесь своими любимыми онлайн курсами и обучающими туториалами, а также открывайте и изучайте что то новое. 
        </p>
    </div>

    <div class="sidebar-module">
        <h4>Архив</h4>

        <ol class="list-unstyled">
            @foreach ($archives as $stats)
            <li>
                <a href="/links?month={{ $stats['month'] }}&year={{ $stats['year'] }}">{{ $stats['month'] .' ' . $stats['year'] }}</a>
            </li>
            @endforeach
        </ol>
    </div>

    <div class="sidebar-module">
        <h4>Тэги</h4>

        <ol class="list-unstyled">
            @foreach ($tags as $tag)
            <li>
                <a href="/links/tags/{{ $tag->name }}">{{ $tag->name }}</a>
            </li>
            @endforeach
        </ol>
    </div>
</aside><!-- /.blog-sidebar -->