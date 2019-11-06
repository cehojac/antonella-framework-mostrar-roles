<div class="wrap">
    <h1>@yield('title')</h1>
    <div id="col-container">
        <form method="post" action="@yield('form_action')" novalidate="novalidate">
            @yield('content')
            @section('submit')
            <input type="submit" name="@yield('name_submit')" id="@yield('id_submit')" class="button button-primary" value="@yield('value_submit')">
            @show
        </form>
    </div>
</div>