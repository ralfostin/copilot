<li data-uk-dropdown>
    <a href="@route('/copilot')">Copilot</a>
    <div class="uk-dropdown">
        <ul class="uk-nav uk-nav-dropdown">
            <li class="uk-nav-header">Copilot</li>
            <li><a href="@route('/copilot')"><i class="uk-icon-sitemap uk-icon-justify"></i> @lang('Pages')</a></li>
            <li><a href="@route('/copilot/settings')"><i class="uk-icon-cogs uk-icon-justify"></i> @lang('Settings')</a></li>
            <li class="uk-nav-divider"></li>
            <li><a href="@route('/copilot/finder')"><i class="uk-icon-folder-o uk-icon-justify"></i> @lang('Files')</a></li>
            <li class="uk-nav-divider"></li>
            <li><a href="{{ $app->pathToUrl('site:') }}" target="_blank" rel="noopener"><i class="uk-icon-globe uk-icon-justify"></i> @lang('View site')</a></li>
        </ul>
    </div>
</li>
