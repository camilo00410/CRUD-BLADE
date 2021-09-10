<header>
        <h1>Coders Free</h1>
        <nav class="navbar">
            <ul>
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : ''}}">Home</a>
                    <?php //dump(request()->routeIs('home')) ?>
                </li>

                <li><a href="{{ route('cursos.index') }}" class="{{ request()->routeIs('cursos.*')  ? 'active' : ''}}">Curso</a>
                </li>

                <li><a href="{{ route('nosotros') }}" class="{{ request()->routeIs('nosotros') ? 'active' : ''}}">Nosotros</a>

                </li>
            </ul>
        </nav>
    </header>