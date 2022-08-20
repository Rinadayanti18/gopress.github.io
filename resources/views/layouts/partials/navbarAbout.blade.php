<div class="slider-home container-fluid content" style="padding-right:0px ; padding-left:0px;">
    <img class="imageSlider" src="/company-information.png" alt="Gambar 4">
</div>

<nav class="navbar navbar-expand-sm justify-content-center container col-sm-9 mt-4" style="position: static">
    <div>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link  {{ $title === 'Company' ? 'active' : '' }}" href="/company">Company</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  {{ $title === 'News' || $title === 'Event' || $title === 'Top Employee' ? 'active' : '' }}" href="/news">News & Event</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $title === 'FAQ' ? 'active' : '' }}" href="/FAQ">FAQ</a>
            </li>
            <li class="nav-item dropdown" style="position: static">
                <a class="nav-link dropdown-toggle {{ $title === 'Packaging' || $title === 'Dangerous Goods' || $title === 'Prohibited Goods' ? 'active' : '' }}"
                    data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Packaging Information</a>
                <div class="dropdown-menu">
                    <a style="position: static" class="dropdown-item " href="/packaging">Guidance</a>
                    <a style="position: static" class="dropdown-item " href="/dangerous">Dangerous Goods</a>
                    <a style="position: static" class="dropdown-item " href="/prohibited">Prohibited</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
